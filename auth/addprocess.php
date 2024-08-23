<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armz";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Helper function to handle file uploads
function uploadFiles($fileInputName, $uploadDir) {
    $filePaths = [];
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            die("Failed to create directory: $uploadDir");
        }
    }
    
    if (isset($_FILES[$fileInputName])) {
        foreach ($_FILES[$fileInputName]['name'] as $key => $name) {
            $tmpName = $_FILES[$fileInputName]['tmp_name'][$key];
            $filePath = $uploadDir . basename($name);
            
            // Check for upload errors
            if ($_FILES[$fileInputName]['error'][$key] !== UPLOAD_ERR_OK) {
                die("File upload error: " . $_FILES[$fileInputName]['error'][$key]);
            }
            
            // Attempt to move the uploaded file
            if (move_uploaded_file($tmpName, $filePath)) {
                $filePaths[] = $filePath;
            } else {
                echo "Failed to move file: $name to $filePath<br>";
            }
        }
    }
    return implode(',', $filePaths);
}

// Prepare upload directories
$uploadDirs = [
    'forensic' => 'uploads/forensic/',
    'damage_report' => 'uploads/damage/',
    'officers_pov' => 'uploads/officers/',
    'extra_info' => 'uploads/extra/',
    'testimonials' => 'uploads/testimonials/'
];

// Step 1: Insert data into `accident` table
$accidentTitle = $_POST['accident_title'];
$accidentDateTime = $_POST['accident_date_time'];
$province = $_POST['province'];
$district = isset($_POST['district']) ? $_POST['district'] : null; // Check if 'district' exists
$sector = isset($_POST['sector']) ? $_POST['sector'] : null; // Check if 'sector' exists
$basicinfoDesc = $_POST['basicinfo_desc'];

$forensicImages = uploadFiles('forensic', $uploadDirs['forensic']);
$forensicDesc = $_POST['forensic_desc'];

$damageImages = uploadFiles('damage_report', $uploadDirs['damage_report']);
$damageDesc = $_POST['damage_desc'];

$officersImages = uploadFiles('officers_pov', $uploadDirs['officers_pov']);
$officerDescription = $_POST['officer_description'];

$extraInfoImages = uploadFiles('extra_info', $uploadDirs['extra_info']);
$extraInfo = $_POST['extra_info'];

$sql = "INSERT INTO accident (accident_title, accident_date_time, province, district, sector, basicinfo_desc, forensic_images, forensic_desc, damage_images, damage_desc, officers_images, officer_description, extra_info_images, extra_info)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssssssssssss', $accidentTitle, $accidentDateTime, $province, $district, $sector, $basicinfoDesc, $forensicImages, $forensicDesc, $damageImages, $damageDesc, $officersImages, $officerDescription, $extraInfoImages, $extraInfo);

if ($stmt->execute()) {
    $accidentId = $stmt->insert_id; // Get the ID of the newly inserted accident record
} else {
    die("Error: " . $stmt->error);
}

// Step 2: Insert data into `testimonial` table
$individualNames = $_POST['individual_name'];
$individualIds = $_POST['individual_id'];
$vehicles = $_POST['vehicle'];
$vehiclePlates = $_POST['vehicle_plate'];
$licenseStatuses = $_POST['license_status'];
$insurances = $_POST['insurance'];
$alcoholTests = $_POST['alcohol_test'];
$testimonialDescriptions = $_POST['indiviaul_desc'];
$testimonialImages = uploadFiles('testimonials', $uploadDirs['testimonials']);

foreach ($individualNames as $index => $name) {
    $sql = "INSERT INTO testimonial (accident_id, individual_name, individual_id, vehicle, vehicle_plate, license_status, insurance, alcohol_test, testimonial_images, testimonial_desc)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isssssssss', $accidentId, $name, $individualIds[$index], $vehicles[$index], $vehiclePlates[$index], $licenseStatuses[$index], $insurances[$index], $alcoholTests[$index], $testimonialImages, $testimonialDescriptions[$index]);

    if (!$stmt->execute()) {
        die("Error: " . $stmt->error);
    }
}

echo "Data submitted successfully";
header('location:../explore.html');

$stmt->close();
$conn->close();
?>

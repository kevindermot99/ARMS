<?php
// Database connection
$servername = "localhost"; // Change if necessary
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "armz"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 1: Insert Basic Information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accident_title = $_POST['accident_title'];
    $accident_date_time = $_POST['accident_date_time'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $basicinfo_desc = $_POST['basicinfo_desc'];

    // Handle image upload for basic information
    $basic_image = null;
    if (isset($_FILES['forensicmedia']) && $_FILES['forensicmedia']['error'] == UPLOAD_ERR_OK) {
        $basic_image = file_get_contents($_FILES['forensicmedia']['tmp_name']);
    }

    // Insert into Basic_Information table
    $stmt = $conn->prepare("INSERT INTO Basic_Information (accident_title, accident_date_time, province, district, sector, basicinfo_desc, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $accident_title, $accident_date_time, $province, $district, $sector, $basicinfo_desc, $basic_image);
    $stmt->execute();
    $basic_info_id = $stmt->insert_id; // Get the ID of the inserted record
    $stmt->close();

    // Step 2: Insert Forensic Information
    if (isset($_FILES['forensicmedia']) && $_FILES['forensicmedia']['error'] == UPLOAD_ERR_OK) {
        foreach ($_FILES['forensicmedia']['tmp_name'] as $key => $tmp_name) {
            $media_file = file_get_contents($tmp_name);
            $stmt = $conn->prepare("INSERT INTO Forensic (basic_info_id, forensic_desc, image) VALUES (?, ?, ?)");
            $stmt->bind_param("iss", $basic_info_id, $_POST['forensic_desc'], $media_file);
            $stmt->execute();
        }
        $stmt->close();
    }

    // Step 3: Insert Testimonials
    if (!empty($_POST['individual_name'])) {
        for ($i = 0; $i < count($_POST['individual_name']); $i++) {
            $individual_name = $_POST['individual_name'][$i];
            $individual_id = $_POST['individual_id'][$i];
            $vehicle = $_POST['vehicle'][$i];
            $vehicle_plate = $_POST['vehicle_plate'][$i];
            $license_status = $_POST['license_status'][$i];
            $insurance = $_POST['insurance'][$i];
            $alcohol_test = $_POST['alcohol_test'][$i];
            $individual_desc = $_POST['indiviaul_desc'][$i];

            // Handle testimonial image upload
            $testimonial_image = null;
            if (isset($_FILES['individual_media'][$i]) && $_FILES['individual_media'][$i]['error'] == UPLOAD_ERR_OK) {
                $testimonial_image = file_get_contents($_FILES['individual_media'][$i]['tmp_name']);
            }

            $stmt = $conn->prepare("INSERT INTO Testimonials (basic_info_id, individual_name, individual_id, vehicle, vehicle_plate, license_status, insurance, alcohol_test, individual_desc, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssssssss", $basic_info_id, $individual_name, $individual_id, $vehicle, $vehicle_plate, $license_status, $insurance, $alcohol_test, $individual_desc, $testimonial_image);
            $stmt->execute();
            $stmt->close();
        }
    }

    // Step 4: Insert Damage Report
    $number_injured = $_POST['number_injured'];
    $dead = $_POST['dead'];
    $damage_desc = $_POST['damage_desc'];

    // Handle damage media upload
    $damage_media = null;
    if (isset($_FILES['Damage_media']) && $_FILES['Damage_media']['error'] == UPLOAD_ERR_OK) {
        foreach ($_FILES['Damage_media']['tmp_name'] as $tmp_name) {
            $damage_media = file_get_contents($tmp_name);
            $stmt = $conn->prepare("INSERT INTO Damage_Report (basic_info_id, number_injured, dead, damage_desc, image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("iiiss", $basic_info_id, $number_injured, $dead, $damage_desc, $damage_media);
            $stmt->execute();
        }
        $stmt->close();
    }

    // Step 5: Insert Officers Report
    if (!empty($_POST['officer_description'])) {
        $officer_description = $_POST['officer_description'];

        // Handle officer media upload
        $officer_media = null;
        if (isset($_FILES['media']) && $_FILES['media']['error'] == UPLOAD_ERR_OK) {
            foreach ($_FILES['media']['tmp_name'] as $tmp_name) {
                $officer_media = file_get_contents($tmp_name);
                $stmt = $conn->prepare("INSERT INTO Officers_Report (basic_info_id, officer_description, image) VALUES (?, ?, ?)");
                $stmt->bind_param("iss", $basic_info_id, $officer_description, $officer_media);
                $stmt->execute();
            }
            $stmt->close();
        }
    }

    // Step 6: Insert Extra Info
    if (!empty($_POST['extra_info'])) {
        $extra_info = $_POST['extra_info'];

        // Handle extra media upload
        $extra_media = null;
        if (isset($_FILES['media']) && $_FILES['media']['error'] == UPLOAD_ERR_OK) {
            foreach ($_FILES['media']['tmp_name'] as $tmp_name) {
                $extra_media = file_get_contents($tmp_name);
                $stmt = $conn->prepare("INSERT INTO Extra_Info (basic_info_id, extra_info, image) VALUES (?, ?, ?)");
                $stmt->bind_param("iss", $basic_info_id, $extra_info, $extra_media);
                $stmt->execute();
            }
            $stmt->close();
        }
    }

    echo "Data submitted successfully!";
} else {
    echo "Invalid request method.";
}

$conn->close();
?>

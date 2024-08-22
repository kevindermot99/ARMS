<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Insert into Basic_Information table first
    $accident_title = $_POST['accident_title'];
    $accident_date_time = $_POST['accident_date_time'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $basicinfo_desc = $_POST['basicinfo_desc'];

    $sql = "INSERT INTO Basic_Information (accident_title, accident_date_time, province, district, sector, basicinfo_desc) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $accident_title, $accident_date_time, $province, $district, $sector, $basicinfo_desc);

    if ($stmt->execute()) {
        // Get the generated basic_info_id
        $basic_info_id = $stmt->insert_id;

        // Forensic Table
        $forensic_desc = $_POST['forensic_desc'];
        $forensic_image = $_FILES['forensic_image'];

        if ($forensic_image['error'] === UPLOAD_ERR_OK) {
            $forensic_targetDir = "uploads/forensic/";
            $forensic_targetFile = $forensic_targetDir . basename($forensic_image["name"]);
            if (move_uploaded_file($forensic_image["tmp_name"], $forensic_targetFile)) {
                $sql = "INSERT INTO Forensic (basic_info_id, forensic_desc, image) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iss", $basic_info_id, $forensic_desc, $forensic_targetFile);
                $stmt->execute();
            } else {
                echo "Failed to upload forensic image.";
            }
        }

        // Testimonials Table
        $individual_name = $_POST['individual_name'];
        $individual_id = $_POST['individual_id'];
        $vehicle = $_POST['vehicle'];
        $vehicle_plate = $_POST['vehicle_plate'];
        $license_status = $_POST['license_status'];
        $insurance = $_POST['insurance'];
        $alcohol_test = $_POST['alcohol_test'];
        $individual_desc = $_POST['individual_desc'];
        $testimonials_image = $_FILES['testimonials_image'];

        if ($testimonials_image['error'] === UPLOAD_ERR_OK) {
            $testimonials_targetDir = "uploads/testimonials/";
            $testimonials_targetFile = $testimonials_targetDir . basename($testimonials_image["name"]);
            if (move_uploaded_file($testimonials_image["tmp_name"], $testimonials_targetFile)) {
                $sql = "INSERT INTO Testimonials (basic_info_id, individual_name, individual_id, vehicle, vehicle_plate, license_status, insurance, alcohol_test, individual_desc, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("isssssssss", $basic_info_id, $individual_name, $individual_id, $vehicle, $vehicle_plate, $license_status, $insurance, $alcohol_test, $individual_desc, $testimonials_targetFile);
                $stmt->execute();
            } else {
                echo "Failed to upload testimonials image.";
            }
        }

        // Damage Report Table
        $number_injured = $_POST['number_injured'];
        $dead = $_POST['dead'];
        $damage_desc = $_POST['damage_desc'];
        $damage_image = $_FILES['damage_image'];

        if ($damage_image['error'] === UPLOAD_ERR_OK) {
            $damage_targetDir = "uploads/damage/";
            $damage_targetFile = $damage_targetDir . basename($damage_image["name"]);
            if (move_uploaded_file($damage_image["tmp_name"], $damage_targetFile)) {
                $sql = "INSERT INTO Damage_Report (basic_info_id, number_injured, dead, damage_desc, image) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iiiss", $basic_info_id, $number_injured, $dead, $damage_desc, $damage_targetFile);
                $stmt->execute();
            } else {
                echo "Failed to upload damage image.";
            }
        }

        // Officers Report Table
        $officer_description = $_POST['officer_description'];
        $officers_image = $_FILES['officers_image'];

        if ($officers_image['error'] === UPLOAD_ERR_OK) {
            $officers_targetDir = "uploads/officers/";
            $officers_targetFile = $officers_targetDir . basename($officers_image["name"]);
            if (move_uploaded_file($officers_image["tmp_name"], $officers_targetFile)) {
                $sql = "INSERT INTO Officers_Report (basic_info_id, officer_description, image) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iss", $basic_info_id, $officer_description, $officers_targetFile);
                $stmt->execute();
            } else {
                echo "Failed to upload officers image.";
            }
        }

        // Extra Info Table
        $extra_info = $_POST['extra_info'];
        $extra_info_image = $_FILES['extra_info_image'];

        if ($extra_info_image['error'] === UPLOAD_ERR_OK) {
            $extra_info_targetDir = "uploads/extra_info/";
            $extra_info_targetFile = $extra_info_targetDir . basename($extra_info_image["name"]);
            if (move_uploaded_file($extra_info_image["tmp_name"], $extra_info_targetFile)) {
                $sql = "INSERT INTO Extra_Info (basic_info_id, extra_info, image) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("iss", $basic_info_id, $extra_info, $extra_info_targetFile);
                $stmt->execute();
            } else {
                echo "Failed to upload extra info image.";
            }
        }

        // Redirect or show a success message
        header("Location: success.php");
        exit();
    } else {
        echo "Error: Failed to insert basic information.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle basic information
    $accidentTitle = $_POST['accident_title'] ?? '';
    $accidentDateTime = $_POST['accident_date_time'] ?? '';
    $province = $_POST['province'] ?? '';
    $district = $_POST['district'] ?? '';
    $sector = $_POST['sector'] ?? '';
    $basicInfoDesc = $_POST['basicinfo_desc'] ?? '';

    // Handle forensic media
    $forensicImages = $_FILES['forensic'] ?? [];
    $forensicDescriptions = $_POST['forensic_desc'] ?? [];

    // Handle testimonials
    $testimonialNames = $_POST['individual_name'] ?? [];
    $testimonialIds = $_POST['individual_id'] ?? [];
    $testimonialVehicles = $_POST['vehicle'] ?? [];
    $testimonialVehiclePlates = $_POST['vehicle_plate'] ?? [];
    $testimonialLicenseStatuses = $_POST['license_status'] ?? [];
    $testimonialInsurances = $_POST['insurance'] ?? [];
    $testimonialAlcoholTests = $_POST['alcohol_test'] ?? [];
    $testimonialDescriptions = $_POST['individual_desc'] ?? [];
    $testimonialImages = $_FILES['testimonials'] ?? [];

    // Handle damage report
    $numberInjured = $_POST['number_injured'] ?? 0;
    $numberDead = $_POST['dead'] ?? 0;
    $damageDesc = $_POST['damage_desc'] ?? '';
    $damageReportImages = $_FILES['damage_report'] ?? [];

    // Handle officer's report
    $officerDescriptions = $_POST['officer_description'] ?? [];
    $officerReportImages = $_FILES['officers_report'] ?? [];

    // Handle extra info
    $extraInfo = $_POST['extra_info'] ?? '';
    $extraInfoImages = $_FILES['extra_info'] ?? [];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'armz');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert basic information
    $stmt = $conn->prepare("INSERT INTO Basic_Information (accident_title, accident_date_time, province, district, sector, basicinfo_desc) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $accidentTitle, $accidentDateTime, $province, $district, $sector, $basicInfoDesc);
    $stmt->execute();
    $basicInfoId = $stmt->insert_id;

    // Insert forensic media
    foreach ($forensicImages['tmp_name'] as $key => $tmpName) {
        $fileName = basename($forensicImages['name'][$key]);
        $targetPath = "uploads/forensic/" . $fileName;
        $tmpFilePath = $forensicImages['tmp_name'][$key]; // Assign to a variable
        move_uploaded_file($tmpFilePath, $targetPath);
        $stmt = $conn->prepare("INSERT INTO Forensic (basic_info_id, forensic_desc, image) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $basicInfoId, $forensicDescriptions[$key], $targetPath);
        $stmt->execute();
    }

    // Insert testimonials
    foreach ($testimonialNames as $index => $name) {
        foreach ($testimonialImages['tmp_name'][$index] as $key => $tmpName) {
            $fileName = basename($testimonialImages['name'][$index][$key]);
            $targetPath = "uploads/testimonials/" . $fileName;
            $tmpFilePath = $testimonialImages['tmp_name'][$index][$key]; // Assign to a variable
            move_uploaded_file($tmpFilePath, $targetPath);
            $stmt = $conn->prepare("INSERT INTO Testimonials (basic_info_id, individual_name, individual_id, vehicle, vehicle_plate, license_status, insurance, alcohol_test, individual_desc, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("isssssssss", $basicInfoId, $name, $testimonialIds[$index], $testimonialVehicles[$index], $testimonialVehiclePlates[$index], $testimonialLicenseStatuses[$index], $testimonialInsurances[$index], $testimonialAlcoholTests[$index], $testimonialDescriptions[$index], $targetPath);
            $stmt->execute();
        }
    }

    // Insert damage report
    foreach ($damageReportImages['tmp_name'] as $key => $tmpName) {
        $fileName = basename($damageReportImages['name'][$key]);
        $targetPath = "uploads/damage_reports/" . $fileName;
        $tmpFilePath = $damageReportImages['tmp_name'][$key]; // Assign to a variable
        move_uploaded_file($tmpFilePath, $targetPath);
        $stmt = $conn->prepare("INSERT INTO Damage_Report (basic_info_id, number_injured, dead, damage_desc, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiss", $basicInfoId, $numberInjured, $numberDead, $damageDesc, $targetPath);
        $stmt->execute();
    }

    // Insert officer's report
    foreach ($officerReportImages['tmp_name'] as $key => $tmpName) {
        $fileName = basename($officerReportImages['name'][$key]);
        $targetPath = "uploads/officer_reports/" . $fileName;
        $tmpFilePath = $officerReportImages['tmp_name'][$key]; // Assign to a variable
        move_uploaded_file($tmpFilePath, $targetPath);
        $stmt = $conn->prepare("INSERT INTO Officers_Report (basic_info_id, officer_description, image) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $basicInfoId, $officerDescriptions[$key], $targetPath);
        $stmt->execute();
    }

    // Insert extra info
    foreach ($extraInfoImages['tmp_name'] as $key => $tmpName) {
        $fileName = basename($extraInfoImages['name'][$key]);
        $targetPath = "uploads/extra_info/" . $fileName;
        $tmpFilePath = $extraInfoImages['tmp_name'][$key]; // Assign to a variable
        move_uploaded_file($tmpFilePath, $targetPath);
        $stmt = $conn->prepare("INSERT INTO Extra_Info (basic_info_id, extra_info, image) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $basicInfoId, $extraInfo, $targetPath);
        $stmt->execute();
    }

    // Close connection
    $stmt->close();
    $conn->close();

    echo "Accident report submitted successfully!";
    header("Location: retrieve.php");
}
?>

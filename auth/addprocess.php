<?php 
$conn = new mysqli("localhost","root","","arms");

if (isset($_POST["submit"])) {
    // Accident Details
    $accidentTitle = $_POST['accident_title'];
    $accidentDateTime = $_POST['accident_date_time'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $sector = $_POST['sector'];
    $basicinfoDesc = $_POST['basicinfo_desc'];

    // Testimonials
    $individualNames = $_POST['individual_name'];
    $individualIds = $_POST['individual_id'];
    $vehicles = $_POST['vehicle'];
    $vehiclePlates = $_POST['vehicle_plate'];
    $licenseStatuses = $_POST['license_status'];
    $insurances = $_POST['insurance'];
    $alcoholTests = $_POST['alcohol_test'];
    $individualDescs = $_POST['individual_desc'];

    // Damage Report
    $numberInjured = $_POST['number_injured'];
    $dead = $_POST['dead'];
    $damageDesc = $_POST['damage_desc'];

    // Officer's Report
    $officerDescription = $_POST['officer_description'];

    // Extra Info
    $extraInfo = $_POST['extra_info'];

    // Insert Accident Data
    $query = "INSERT INTO tb_accidents (accident_title, accident_date_time, province, district, sector, basicinfo_desc, number_injured, dead, damage_desc, officer_description, extra_info) 
              VALUES ('$accidentTitle', '$accidentDateTime', '$province', '$district', '$sector', '$basicinfoDesc', '$numberInjured', '$dead', '$damageDesc', '$officerDescription', '$extraInfo')";

    if (mysqli_query($conn, $query)) {
        $accidentId = mysqli_insert_id($conn); // Get the ID of the inserted accident

        // Insert Testimonials
        foreach ($individualNames as $index => $name) {
            $individualId = $individualIds[$index];
            $vehicle = $vehicles[$index];
            $vehiclePlate = $vehiclePlates[$index];
            $licenseStatus = $licenseStatuses[$index];
            $insurance = $insurances[$index];
            $alcoholTest = $alcoholTests[$index];
            $individualDesc = $individualDescs[$index];

            $testimonialQuery = "INSERT INTO tb_testimonials (accident_id, individual_name, individual_id, vehicle, vehicle_plate, license_status, insurance, alcohol_test, individual_desc) 
                                 VALUES ('$accidentId', '$name', '$individualId', '$vehicle', '$vehiclePlate', '$licenseStatus', '$insurance', '$alcoholTest', '$individualDesc')";
            mysqli_query($conn, $testimonialQuery);
        }

        // Success message
        echo "Accident report submitted successfully!";
    } else {
        // Error message
        echo "Error: " . mysqli_error($conn);
    }
}
?>

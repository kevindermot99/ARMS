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

// Fetch all accidents
$sql = "SELECT id, accident_title, accident_date_time, province, district, sector, basicinfo_desc, forensic_images, damage_images, officers_images, extra_info_images, case_status, accident_type FROM accident";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accident Data Carousel</title>
    <style>
        .carousel {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px;
            margin: 20px 0;
        }

        .carousel img {
            max-width: 300px;
            margin-right: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .carousel-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .carousel-description {
            margin-bottom: 15px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Accident Data Carousel</h1>

    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="carousel-container">
            <h2 class="carousel-title"><?php echo htmlspecialchars($row['accident_title']); ?></h2>
            <p class="carousel-description"><?php echo htmlspecialchars($row['basicinfo_desc']); ?></p>
            
            <div class="carousel">
                <?php
                // Fetch all images from forensic, damage, officers, and extra_info
                $images = array_merge(
                    explode(',', $row['forensic_images']),
                    explode(',', $row['damage_images']),
                    explode(',', $row['officers_images']),
                    explode(',', $row['extra_info_images'])
                );
                
                // Display each image in the carousel
                foreach ($images as $image):
                    if (!empty($image)): ?>
                        <img src="<?php echo $image; ?>" alt="Accident Image">
                    <?php endif;
                endforeach;
                ?>
            </div>
        </div>
    <?php endwhile; ?>

    <?php $conn->close(); ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rwanda National Police</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary-color": '#1F3365',
                        "primary-color-dark": '#17264a',
                        "body-color": '#f7f8fa',
                        "text-color": "#2f3a52",
                    }
                }
            },
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Add any additional custom styles here */
        @media (max-width: 768px) {
            #filters {
                display: block; /* Always show filters on mobile */
            }
        }
    </style>
</head>

<body class="text-text-color">
    <div id="Header-Container"></div>

    <div class="w-full sticky top-0 z-20 hidden max-md:flex flex-col">
        <div class="h-fit w-full bg-white flex items-center justify-between px-3 py-3 border-b-[1px] border-primary-color/10 sticky top-0 z-20 ">
            <div class="flex items-center justify-start w-fit gap-2">
                <button onclick="handleMobileNav()" class="text-3xl cursor-pointer text-primary-color flex items-center justify-center h-full transition active:scale-75">
                    <i class='bx bx-menu'></i>
                </button>
                <div class="h-fit w-fit flex flex-col justify-center items-start text-primary-color">
                    <span class="text-xl font-extrabold tracking-tight">A.R.M.S</span>
                </div>
            </div>

            <div class="h-full w-full flex items-center justify-end gap-0 relative">
                <a href="Add-accident.php">
                    <button class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                        <i class='bx bx-image-add'></i>
                    </button>
                </a>
                <a href="Notifications.php" class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                    <i class='bx bx-bell'></i>
                </a>
            </div>
        </div>
    </div>

    <nav class="h-[60px] flex px-10 max-lg:px-4 bg-white/80 backdrop-blur-md border-b-[1px] border-text-color/10 sticky top-0 z-20 max-md:hidden">
        <div class="h-full w-full flex flex-col justify-center items-start text-primary-color">
            <span class="text-3xl font-extrabold leading-7 tracking-tight">A.R.M.S</span>
            <span class="text-[6px] pr-1">Accident Report Management System</span>
        </div>
        <div class="flex h-full w-full items-center justify-center gap-0 min-w-fit ">
            <a href="index.php" class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">Home</a>
            <a href="Explore.php" class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-primary-color/90">Explore</a>
            <a href="Report.php" class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">Report</a>
            <a href="Officer.php" class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">Officers</a>
        </div>
        <div class="h-full w-full flex items-center justify-end gap-0 relative">
            <a href="Add-accident.php">
                <button class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                    <i class='bx bx-image-add'></i>
                </button>
            </a>
            <a href="Notifications.php" class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                <i class='bx bx-bell'></i>
            </a>
        </div>
    </nav>

    <section class="backgroundz w-full h-fit flex items-center justify-center flex-col py-16 max-md:py-8 gap-4 px-10 max-md:px-4">
        <h1 class="text-3xl font-extrabold leading-7 tracking-normal uppercase">Search</h1>
        <form class="w-[95%] max-w-[600px] flex bg-white gap-3 p-3 rounded-md max-md:flex-col max-md:gap-5" method="POST" action="">
            <div class="w-2/5 max-md:w-full flex flex-col relative">
                <h1 class="text-xs font-medium caption-top absolute bg-white px-1 top-[-9px] left-3">Keyword</h1>
                <input type="text" name="keyword" placeholder="Ikamyo.." class="h-[40px] rounded-md p-3 text-sm ring-1 ring-primary-color/20">
            </div>
            <div class="w-2/5 max-md:w-full flex flex-col relative">
                <h1 class="text-xs font-medium caption-top absolute bg-white px-1 top-[-9px] left-3">District</h1>
                <input type="text" name="district" placeholder="Burera.." class="h-[40px] rounded-md p-3 text-sm ring-1 ring-primary-color/20">
            </div>
            <div class="w-1/5 max-md:w-full bg-stone-300 flex flex-col">
                <button type="submit" class="w-full h-[40px] bg-primary-color text-white flex items-center justify-center text-sm rounded-sm">Search</button>
            </div>
        </form>
    </section>

    <section class="h-full w-full flex items-start justify-between py-5 px-10 max-md:px-4 gap-7 relative">
        <div id="filters" class="max-w-[280px] w-full max-md:max-h-[500px] overflow-y-auto sticky backgroundz flex-col p-5 mobile-Filter">
            <h1 class="border-b border-b-gray-300 pb-2">Filter</h1>
            <form class="py-2 flex flex-col gap-2" method="POST" action="">
                <h1 class="text-sm font-semibold">Category</h1>
                <div class="w-full h-fit flex flex-col gap-2 max-md:flex-row max-md:flex-wrap">
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="All" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('All', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">All</p>
                    </label>
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="No Death" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('No Death', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">No Death</p>
                    </label>
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="No Injured" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('No Injured', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">No Injured</p>
                    </label>
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="No Damaged Property" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('No Damaged Property', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">No Damaged Property</p>
                    </label>
                </div>
                <div class="w-full h-[1px] bg-gray-300 my-2"></div>
                <h1 class="text-sm font-semibold">Case Status</h1>
                <div class="w-full h-fit flex flex-col gap-2 max-md:flex-row max-md:flex-wrap">
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="Ongoing" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('Ongoing', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">Ongoing</p>
                    </label>
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="Closed" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('Closed', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">Closed</p>
                    </label>
                </div>
                <div class="w-full h-[1px] bg-gray-300 my-2"></div>
                <h1 class="text-sm font-semibold">Type</h1>
                <div class="w-full h-fit flex flex-col gap-2 max-md:flex-row max-md:flex-wrap">
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="On-road" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('On-road', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">On-road</p>
                    </label>
                    <label class="flex items-center gap-1 cursor-pointer w-fit">
                        <input type="checkbox" name="filter[]" value="Off-road" class="accent-primary-color" <?= (isset($_POST['filter']) && in_array('Off-road', $_POST['filter'])) ? 'checked' : '' ?>>
                        <p class="text-xs">Off-road</p>
                    </label>
                </div>
                <div class="flex items-center justify-between max-md:flex-col gap-2">
                    <button type="reset" class="w-1/2 max-md:w-full h-[40px] bg-primary-color/15 flex items-center justify-center text-sm rounded-sm">Clear</button>
                    <button type="submit" class="w-1/2 max-md:w-full h-[40px] bg-primary-color text-white flex items-center justify-center text-sm rounded-sm">Apply</button>
                </div>
            </form>
        </div>

        <div class="flex-1 h-full flex flex-col gap-4 relative">
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

            // Pagination settings
            $resultsPerPage = 20; // Number of results per page
            $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
            $offset = ($currentPage - 1) * $resultsPerPage; // Calculate offset

            // Fetch accidents based on search criteria
            $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
            $district = isset($_POST['district']) ? $_POST['district'] : '';
            $filters = isset($_POST['filter']) ? $_POST['filter'] : [];

            // Build the SQL query
            $sql = "SELECT * FROM accident WHERE 1=1";
            if ($keyword) {
                $sql .= " AND accident_title LIKE '%$keyword%'";
            }
            if ($district) {
                $sql .= " AND district LIKE '%$district%'";
            }

            // Apply filters if any
            if (!empty($filters)) {
                foreach ($filters as $filter) {
                    if ($filter === 'Ongoing') {
                        $sql .= " AND case_status = 'Ongoing'";
                    } elseif ($filter === 'Closed') {
                        $sql .= " AND case_status = 'Closed'";
                    } elseif ($filter === 'No Death') {
                        $sql .= " AND case_status != 'Death'";
                    } elseif ($filter === 'No Injured') {
                        $sql .= " AND case_status != 'Injured'";
                    } elseif ($filter === 'No Damaged Property') {
                        $sql .= " AND case_status != 'Damaged'";
                    }
                }
            }

            // Order by accident_date_time in descending order
            $sql .= " ORDER BY accident_date_time DESC LIMIT $offset, $resultsPerPage";

            // Get all results from the accident table
            $result = $conn->query($sql);
            $totalResults = $conn->query("SELECT COUNT(*) AS count FROM accident WHERE 1=1" . ($keyword ? " AND accident_title LIKE '%$keyword%'" : "") . ($district ? " AND district LIKE '%$district%'" : ""))->fetch_assoc()['count'];

            echo "<div class='w-full flex items-center justify-between'><h1>$totalResults Results</h1></div>";

            while ($row = $result->fetch_assoc()) {
                // Assuming 'damage_images' is a column containing comma-separated image paths
                $damageImages = $row['damage_images']; // Get the full string of image paths

                // Split the string by commas and take the first image path
                $imageArray = explode(',', $damageImages);
                $imageSrc = !empty($imageArray[0]) ? trim($imageArray[0]) : 'default-image-path.jpg'; // Use a default image if none exists

                echo "
                <a href='accident_desc.php?id={$row['id']}'>
                    <div class='flex flex-1 h-fit max-md:h-fit items-start mb-2 justify-start max-md:flex-col'>
                        <div class='h-[200px] w-[350px] max-md:h-fit max-md:w-full bg-stone-50 rounded-md flex items-center justify-center'>
                            <img src='$imageSrc' alt='accident image' class='rounded-sm w-full h-full object-cover object-center'>
                        </div>
                        <div class='px-5 max-md:px-0 py-3 w-fit'>
                            <p class='text-xs font-medium text-text-color/70'>{$row['case_status']}</p>
                            <h1 class='text-base leading-6 font-medium py-2'>{$row['accident_title']}</h1>
                            <p class='text-xs font-medium text-text-color/70 flex items-center gap-1'><i class='bx bx-calendar-alt text-base'></i> {$row['accident_date_time']}</p>
                            <p class='text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1'><i class='bx bx-map text-lg'></i>{$row['district']}</p>
                        </div>
                    </div>
                </a>";
            }

            // Pagination controls
            $totalPages = ceil($totalResults / $resultsPerPage);
            echo "<div class='flex justify-center mt-4'>";
            for ($i = 1; $i <= $totalPages; $i++) {
                echo "<a href='?page=$i' class='mx-2 px-3 py-1 border rounded " . ($i === $currentPage ? 'bg-primary-color text-white' : 'bg-gray-200') . "'>$i</a>";
            }
            echo "</div>";

            $conn->close();
            ?>
        </div>
    </section>

    <div id="Footer"></div>

    <script>
        window.addEventListener('load', function () {
            Promise.all([
                loadComponent('./components/Header.html', 'Header-Container'),
                loadComponent('./components/Footer.html', 'Footer'),
            ]);
        });
    </script>
</body>

</html>

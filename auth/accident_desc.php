<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accident Description - Rwanda National Police</title>
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
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="text-text-color">
    <div id="Header-Container"></div>

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

    // Get the accident ID from the URL
    $accidentId = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Fetch accident details
    $sql = "SELECT * FROM accident WHERE id = $accidentId";
    $accidentResult = $conn->query($sql);
    $accident = $accidentResult->fetch_assoc();

    // Fetch testimonials
    $testimonialSql = "SELECT * FROM testimonials WHERE accident_id = $accidentId";
    $testimonialResult = $conn->query($testimonialSql);
    ?>

    <!-- Accident Header -->
    <section class="backgroundd w-full h-fit flex items-center justify-center flex-col py-12 max-md:py-8 gap-4 px-10 max-md:px-4">
        <center>
            <h1 class="text-3xl font-extrabold leading-7 tracking-normal uppercase textify"><?= htmlspecialchars($accident['accident_title']) ?></h1>
        </center>
    </section>

    <section class="w-full flex items-center justify-center py-5 px-10 max-md:px-4 h-[450px]">
        <div class="swiper mySwiper w-full h-full">
            <div class="swiper-wrapper mx-auto">
                <?php
                // Get the cover image path
                $coverImage = 'auth/uploads/' . htmlspecialchars($accident['cover_image']);
                ?>
                <div class="relative swiper-slide h-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="<?= $coverImage ?>" alt="accident image" class="w-full h-full object-cover object-center">
                    <div class="max-w-[450px] w-[95%] absolute bottom-3 left-3 h-fit flex flex-col gap-[2px] bg-white py-3 px-4 rounded-sm">
                        <h1 class="line-clamp-1 font-medium text-base">Report by: Officer <?= htmlspecialchars($accident['reporting_officer']) ?></h1>
                        <p class="line-clamp-1 font-normal text-sm">
                            <i class='bx bx-map text-xs'></i> <?= htmlspecialchars($accident['district']) ?> - <?= date('l, F d Y - h:i A', strtotime($accident['accident_date_time'])) ?>
                        </p>
                    </div>
                </div>
                <!-- Add more images if necessary -->
            </div>
            <div class="swiper-button-next top-[46%] right-[30px] max-md:right-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square"></div>
            <div class="swiper-button-prev top-[46%] left-[30px] max-md:left-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square"></div>
        </div>
    </section>

    <section class="h-full w-full flex items-start justify-between py-5 px-10 max-md:px-4 gap-7 relative">
        <div id="filters" class="max-w-[280px] w-full max-md:max-h-[500px] overflow-y-auto sticky top-0 backgroundz flex-col p-5 mobile-Filter">
            <div class="py-2 flex flex-col gap-2 sidenavy">
                <div class="w-full h-fit flex flex-col gap-2 max-md:flex-row max-md:flex-wrap">
                    <h1 class="pb-2 text-md font-semibold">Nav</h1>
                    <a href="#basic-info" class="flex items-center gap-1 cursor-pointer w-fit">
                        <h1 class="border-b border-b-gray-300 pb-2">Basic Information</h1>
                    </a>
                    <a href="#forensic-report" class="flex items-center gap-1 cursor-pointer w-fit">
                        <h1 class="border-b border-b-gray-300 pb-2">Forensic Report</h1>
                    </a>
                    <a href="#testimonials" class="flex items-center gap-1 cursor-pointer w-fit">
                        <h1 class="border-b border-b-gray-300 pb-2">Testimonials</h1>
                    </a>
                    <a href="#damage-report" class="flex items-center gap-1 cursor-pointer w-fit">
                        <h1 class="border-b border-b-gray-300 pb-2">Damage Report</h1>
                    </a>
                    <a href="#officers-report" class="flex items-center gap-1 cursor-pointer w-fit">
                        <h1 class="border-b border-b-gray-300 pb-2">Officers' Report</h1>
                    </a>
                    <a href="#extra-info" class="flex items-center gap-1 cursor-pointer w-fit">
                        <h1 class="border-b border-b-gray-300 pb-2">Extra Info</h1>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex-1 h-full flex flex-col gap-4 relative">
            <div class="columnflex">
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="basic-info">
                    <h1 class="text-md font-semibold">Basic Information</h1>
                    <p class="text-base leading-5 font-small py-2"><?= htmlspecialchars($accident['description']) ?></p>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="forensic-report">
                    <h1 class="text-md font-semibold">Forensic Report</h1>
                    <p class="text-base leading-5 font-small py-2"><?= htmlspecialchars($accident['forensic_report']) ?></p>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="testimonials">
                    <h1 class="text-md font-semibold">Testimonials</h1>
                    <?php while ($testimonial = $testimonialResult->fetch_assoc()): ?>
                    <div class="py-2">
                        <h2 class="font-semibold"><?= htmlspecialchars($testimonial['name']) ?></h2>
                        <ul>
                            <li>ID: <?= htmlspecialchars($testimonial['id']) ?></li>
                            <li>Drunk Test: <?= htmlspecialchars($testimonial['drunk_test']) ?></li>
                            <li>Where They Were Going: <?= htmlspecialchars($testimonial['where_was_going']) ?></li>
                            <li>What Happened: <?= htmlspecialchars($testimonial['what_happened']) ?></li>
                        </ul>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="damage-report">
                    <h1 class="text-md font-semibold">Damage Report</h1>
                    <p class="text-base leading-5 font-small py-2"><?= htmlspecialchars($accident['damage_report']) ?></p>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="officers-report">
                    <h1 class="text-md font-semibold">Officers' Report</h1>
                    <p class="text-base leading-5 font-small py-2"><?= htmlspecialchars($accident['officers_report']) ?></p>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="extra-info">
                    <h1 class="text-md font-semibold">Extra Info</h1>
                    <p class="text-base leading-5 font-small py-2"><?= htmlspecialchars($accident['extra_info']) ?></p>
                </div>
            </div>
        </div>
    </section>

    <div id="Footer"></div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        function loadComponent(url, containerId) {
            return fetch(url)
                .then(response => response.text())
                .then(data => {
                    document.getElementById(containerId).innerHTML = data;
                });
        }

        window.addEventListener('load', function () {
            Promise.all([
                loadComponent('./components/Header.html', 'Header-Container'),
                loadComponent('./components/Footer.html', 'Footer')
            ]);
        });
    </script>
</body>

</html>

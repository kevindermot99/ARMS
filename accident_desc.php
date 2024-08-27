<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rwanda National Police</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- tailwind Css -->
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
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="text-text-color">
    <!-- header -->
    <div id="Header-Container"></div>



    <!-- Navbar -->

    <!-- Mobile nav -->
    <div class="w-full sticky top-0 z-20 hidden max-md:flex flex-col">
        <!--Logo & toggle  -->
        <div
            class="h-fit w-full bg-white flex items-center justify-between px-3 py-3 border-b-[1px] border-primary-color/10 sticky top-0 z-20 ">
            <!-- logo -->
            <div class=" flex items-center justify-start w-fit gap-2">
                <button onclick="handleMobileNav()"
                    class="text-3xl cursor-pointer text-primary-color flex items-center justify-center h-full transition active:scale-75">
                    <i class='bx bx-menu'></i>
                </button>
                <div class=" h-fit w-fit flex flex-col justify-center items-start text-primary-color">
                    <span class="text-xl font-extrabold tracking-tight">A.R.M.S</span>
                    <!-- <span class="text-[6px] pr-1">Accident Report Managment System</span> -->
                </div>
            </div>

            <!-- notification and Profile -->
            <div class="h-full w-full flex items-center justify-end gap-0 relative">
                <!-- <button
                class="h-[40px] w-fit gap-1 rounded-full hover:opacity-85 transition flex items-center justify-center">
                <i class='bx bx-plus text-[22px]'></i>
                <p class="text-sm whitespace-nowrap">Record</p>
            </button>--->
                <a href="Add accident.html">
                    <button
                        class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                        <i class='bx bx-image-add'></i>
                    </button>
                </a>
                <a href="Notifications.html"
                    class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                    <i class='bx bx-bell'></i>
                </a>
                <button id="toggleButtonMobile"
                    class="flex items-center justify-start hover:bg-text-color/10 rounded-full ml-3 transition active:bg-text-color/20">
                    <div
                        class="h-[30px] w-auto aspect-square text-lg rounded-full bg-primary-color text-white/90 flex items-center justify-center">
                        <i class='bx bx-user'></i>
                    </div>
                </button>

                <!-- Prifle Dropdown -->
                <div class="navBarOverlayMobile hidden fixed top-0 left-0 w-full h-[100vh] bg-transparent z-50"></div>
                <div id="toggleContentMobile"
                    class="navBar absolute top-[90%] right-0 bg-white p-2 h-fit w-[230px] z-50 shadow-xl rounded-sm ring-1 ring-text-color/10 hidden flex-col items-start justify-start">
                    <div class="flex items-center p-[6px]">
                        <div
                            class="h-[30px] w-auto aspect-square text-lg rounded-full bg-primary-color ring-4 ring-white text-white/90 flex items-center justify-center">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="flex flex-col">
                            <p
                                class="pl-2 capitalize text-sm whitespace-nowrap truncate text-ellipsis max-w-[120px] font-medium">
                                Officer John
                            <p
                                class="pl-2 capitalize text-xs whitespace-nowrap truncate text-ellipsis max-w-[120px] font-medium opacity-65">
                                B-ID: 2148D3

                        </div>
                        </p>
                    </div>
                    <span class="h-[1px] w-[90%] mx-auto bg-text-color/10 my-2"></span>
                    <!-- 1 link -->
                    <a href="#"
                        class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                        <i class='bx bx-user text-xl opacity-60'></i>
                        <p class="text-sm">My Profile</p>
                    </a>
                    <!-- 1 link -->
                    <a href="#"
                        class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                        <i class='bx bx-history text-xl opacity-60'></i>
                        <p class="text-sm">Activity</p>
                    </a>
                    <!-- 1 link -->
                    <a href="supportcenter.html"
                        class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                        <i class='bx bx-help-circle text-xl opacity-60'></i>
                        <p class="text-sm">Support Center</p>
                    </a>
                    <span class="h-[1px] w-[90%] mx-auto bg-text-color/10 my-2"></span>
                    <!-- 1 link -->
                    <a href="#"
                        class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                        <i class='bx bx-log-out-circle text-xl text-red-500'></i>
                        <p class="text-sm">Sign Out</p>
                    </a>
                </div>

            </div>

        </div>
        <!-- Mobile Nav Links -->
        <nav id="mobile-nav"
            class=" flex transition-all duration-300 ease-in-out hide-mobile-nav bg-white backdrop-blur-md overflow-hidden w-full z-10  flex-col items-start justify-start">
            <!-- Links -->
            <div class="flex h-fit w-full items-start justify-start flex-col gap-2 min-w-fit ">
                <a href="index.html"
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-transparent">
                    Home
                </a>
                <a href="Explore.html"
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-transparent">
                    Explore
                </a>
                <a href="Report.html"
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-transparent">
                    Report
                </a>
                <a href="Officer.html"
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-transparent">
                    Officers
                </a>
            </div>

        </nav>
    </div>

    <!-- Pc Nav -->
    <nav
        class="h-[60px] flex px-10 max-lg:px-4 bg-white/80 backdrop-blur-md border-b-[1px] border-text-color/10 sticky top-0 z-20 max-md:hidden">
        <!-- logo -->
        <div class=" h-full w-full flex flex-col justify-center items-start text-primary-color">
            <span class="text-3xl font-extrabold leading-7 tracking-tight">A.R.M.S</span>
            <span class="text-[6px] pr-1">Accident Report Managment System</span>
        </div>
        <!-- Links -->
        <div class="flex h-full w-full items-center justify-center gap-0 min-w-fit ">

            <a href="index.html"
                class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">
                Home
            </a>
            <a href="Explore.html"
                class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">
                Explore
            </a>
            <a href="Report.html"
                class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">
                Report
            </a>
            <a href="Officer.html"
                class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-transparent">
                Officers
            </a>
        </div>
        <!-- notification and Profile -->
        <div class="h-full w-full flex items-center justify-end gap-0 relative">
            <!-- <button
                class="h-[40px] w-fit gap-1 rounded-full hover:opacity-85 transition flex items-center justify-center">
                <i class='bx bx-plus text-[22px]'></i>
                <p class="text-sm whitespace-nowrap">Record</p>
            </button> -->
            <a href="Add accident.html">
                <button
                    class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                    <!--<a href="Add accident.html">  -->
                    <i class='bx bx-image-add'></i>
                    <!-- </a> -->
                </button>
            </a>
            <a href="Notifications.html"
                class="h-[40px] w-auto aspect-square text-[22px] rounded-full hover:bg-text-color/10 transition active:bg-text-color/20 flex items-center justify-center">
                <i class='bx bx-bell'></i>
            </a>
            <button id="toggleButton"
                class="flex items-center justify-start hover:bg-text-color/10 rounded-full ml-3 pr-2 transition active:bg-text-color/20">
                <div
                    class="h-[35px] w-auto aspect-square text-lg rounded-full bg-primary-color ring-4 ring-white text-white/90 flex items-center justify-center">
                    <i class='bx bx-user'></i>
                </div>
                <p class="pl-2 capitalize text-sm whitespace-nowrap truncate text-ellipsis max-w-[120px]">Officer John
                </p>
                <i class='ml-[2px] bx bx-chevron-down text-base'></i>
            </button>

            <!-- Prifle Dropdown -->
            <div class="navBarOverlay hidden fixed top-0 left-0 w-full h-[100vh] bg-transparent z-20"></div>
            <div id="toggleContent"
                class="navBar absolute top-[90%] right-0 bg-white p-2 h-fit w-[230px] z-50 shadow-xl rounded-sm ring-1 ring-text-color/10 hidden flex-col items-start justify-start">
                <div class="flex items-center p-[6px]">
                    <div
                        class="h-[30px] w-auto aspect-square text-lg rounded-full bg-primary-color ring-4 ring-white text-white/90 flex items-center justify-center">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="flex flex-col">
                        <p
                            class="pl-2 capitalize text-sm whitespace-nowrap truncate text-ellipsis max-w-[120px] font-medium">
                            Officer John
                        <p
                            class="pl-2 capitalize text-xs whitespace-nowrap truncate text-ellipsis max-w-[120px] font-medium opacity-65">
                            B-ID: 2148D3

                    </div>
                    </p>
                </div>
                <span class="h-[1px] w-[90%] mx-auto bg-text-color/10 my-2"></span>
                <!-- 1 link -->
                <a href="#"
                    class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                    <i class='bx bx-user text-xl opacity-60'></i>
                    <p class="text-sm">My Profile</p>
                </a>
                <!-- 1 link -->
                <a href="#"
                    class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                    <i class='bx bx-history text-xl opacity-60'></i>
                    <p class="text-sm">Activity</p>
                </a>
                <!-- 1 link -->
                <a href="supportcenter.html"
                    class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                    <i class='bx bx-help-circle text-xl opacity-60'></i>
                    <p class="text-sm">Support Center</p>
                </a>
                <span class="h-[1px] w-[90%] mx-auto bg-text-color/10 my-2"></span>
                <!-- 1 link -->
                <a href="auth/signin.html"
                    class="w-full flex items-center py-1 px-3 gap-2 hover:bg-text-color/5 active:bg-text-color/10 rounded-sm ">
                    <i class='bx bx-log-out-circle text-xl text-red-500'></i>
                    <p class="text-sm">Sign Out</p>
                </a>
            </div>

        </div>
    </nav>

    <!-- Navbar -->


    <style>
        .backgroundd {
            margin-bottom: -20px;
        }

        .textify {
            width: 80%;
            align-items: center;
        }
    </style>
    <!-- Slider -->
    <section
        class="backgroundd w-full h-fit flex items-center justify-center flex-col py-12 max-md:py-8 gap-4 px-10 max-md:px-4">
        <center>
            <h1 class="text-3xl font-extrabold leading-7 tracking-normal uppercase textify">gisozi impanuka yabanyonzi
                babiri nigikamyo cya HOHO </h1>
        </center>
    </section>
    <section class="w-full flex items-center justify-center py-5 px-10 max-md:px-4 h-[450px]">
        <!-- prev -->

        <div class="swiper mySwiper w-full h-full">

            <div class="swiper-wrapper mx-auto">
                <div class="relative swiper-slide h-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://inyarwanda.com/app/webroot/img/201509/logos/1442841514_img_20150921_114059.jpg"
                        alt="accident image" class="w-full h-full object-cover object-center  ">
                    <div
                        class="max-w-[450px] w-[95%] absolute bottom-3 left-3 h-fit flex flex-col gap-[2px] bg-white py-3 px-4 rounded-sm">
                        <h1 class="line-clamp-1 font-medium text-base">Report by:Officer john</h1>
                        <p class="line-clamp-1 font-normal text-sm">
                            <i class='bx bx-map text-xs'></i>Gisozi - Saturday, Feb 02 2024 - 08:39 PM
                        </p>
                    </div>
                </div>
                <div class="relative swiper-slide h-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://www.kigalitoday.com/IMG/jpg/impanuka_3.jpg" alt="accident image"
                        class="w-full h-full object-cover object-center  ">
                    <div
                        class="max-w-[450px] w-[95%] absolute bottom-3 left-3 h-fit flex flex-col gap-[2px] bg-white py-3 px-4 rounded-sm">
                        <h1 class="line-clamp-1 font-medium text-base">Report by:Officer john</h1>
                        <p class="line-clamp-1 font-normal text-sm">
                            <i class='bx bx-map text-xs'></i>Gisozi - Saturday, Feb 02 2024 - 08:39 PM
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="swiper-button-next top-[46%] right-[30px] max-md:right-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square">
            </div>
            <div
                class="swiper-button-prev top-[46%] left-[30px] max-md:left-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square">
            </div>
        </div>
        <!-- next -->
    </section>
    <style>
        .sidenavy {
            position: sticky;
            margin-top: 50px;
        }
    </style>

    <section class="h-full w-full flex items-start justify-between py-5 px-10 max-md:px-4 gap-7 relative">
        <!-- filter -->
        <div id="filters"
            class="max-w-[280px] w-full max-md:max-h-[500px] overflow-y-auto sticky top-0 backgroundz flex-col p-5 mobile-Filter">

            <div class="py-2 flex flex-col gap-2 sidenavy">
                <!-- category -->
                <div class="w-full h-fit flex flex-col gap-2 max-md:flex-row max-md:flex-wrap">
                    <h1 class=" pb-2 text-md font-semibold">Nav</h1>
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

        <!-- result -->
        <div class="flex-1 h-full flex flex-col gap-4 relative">
            <!-- Results -->
            <div class="columnflex">
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="basic-info">
                    <h1 class="text-md font-semibold">Basic Information</h1>
                    <p class="text-base leading-5 font-small py-2">On August 5, 2023, a multi-vehicle collision occurred
                        on Highway 45 involving four cars. The accident happened at 3:45 PM and resulted in two
                        fatalities and multiple injuries. The involved vehicles were severely damaged, and the highway
                        was closed for five hours for investigation and clearing operations.</p>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="forensic-report">
                    <h1 class="text-md font-semibold">Forensic Report</h1>
                    <p class="text-base leading-5 font-small py-2">The forensic analysis indicated that the collision
                        was caused by a combination of speeding and wet road conditions. Vehicle 2 was identified as the
                        initial point of collision after hydroplaning and losing control. The forensic team found traces
                        of alcohol in the driver's blood, exceeding the legal limit.</p>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q1" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q1" class="panel-title">Forensic Media</label>
                            <div class="panel-content">
                                <div class="swiper mySwiper2 w-full h-full">
                                    <div class="swiper-wrapper max-w-[800px]">
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next top-[46%] right-[20px] max-md:right-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                    <div
                                        class="swiper-button-prev top-[46%] left-[20px] max-md:left-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="testimonials">
                    <h1 class="text-md font-semibold">Testimonials</h1>
                    <div class="py-2">
                        <h2 class="font-semibold">Testimonial 1</h2>
                        <ul>
                            <li>Name: John Doe</li>
                            <li>ID: 123456</li>
                            <li>Drunk Test: Positive</li>
                            <li>Where He Was Going: Home from work</li>
                            <li>What Happened: John witnessed the accident from his vehicle, which was three cars behind
                                the initial collision. He confirmed the roads were slippery and visibility was low.</li>
                        </ul>
                    </div>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q7" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q7" class="panel-title">Testimonial 1 Media</label>
                            <div class="panel-content">
                                <div class="swiper mySwiper2 w-full h-full">
                                    <div class="swiper-wrapper max-w-[800px]">
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next top-[46%] right-[20px] max-md:right-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                    <div
                                        class="swiper-button-prev top-[46%] left-[20px] max-md:left-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-2">
                        <h2 class="font-semibold">Testimonial 2</h2>
                        <ul>
                            <li>Name: Jane Smith</li>
                            <li>ID: 789012</li>
                            <li>Drunk Test: Negative</li>
                            <li>Where She Was Going: To a friend's house</li>
                            <li>What Happened: Jane was directly involved in the accident. Her car was hit from behind
                                and pushed into the car in front of her. She sustained minor injuries and was treated at
                                the scene.</li>
                        </ul>
                    </div>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q6" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q6" class="panel-title">Testimonial 2 Media</label>
                            <div class="panel-content">
                                <div class="swiper mySwiper2 w-full h-full">
                                    <div class="swiper-wrapper  min-w-[780px] max-w-[800px]">
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next top-[46%] right-[20px] max-md:right-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                    <div
                                        class="swiper-button-prev top-[46%] left-[20px] max-md:left-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="damage-report">
                    <h1 class="text-md font-semibold">Damage Report</h1>
                    <p class="text-base leading-5 font-small py-2">All four vehicles involved in the accident were
                        significantly damaged. Vehicle 1 and Vehicle 2 were declared total losses, while Vehicle 3 and
                        Vehicle 4 sustained major front and rear-end damage. The total estimated cost of the damage is
                        approximately $150,000.</p>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q3" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q3" class="panel-title">Damage Media</label>
                            <div class="panel-content">
                                <div class="swiper mySwiper2 w-full h-full">
                                    <div class="swiper-wrapper max-w-[800px]">
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next top-[46%] right-[20px] max-md:right-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                    <div
                                        class="swiper-button-prev top-[46%] left-[20px] max-md:left-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="officers-report">
                    <h1 class="text-md font-semibold">Officers' Report</h1>
                    <p class="text-base leading-5 font-small py-2">Officer Brian Thompson reported that upon arrival at
                        the scene, emergency services were already attending to the injured. The road was closed off
                        immediately, and traffic was redirected. Officer Thompson noted the presence of alcohol in the
                        driver of Vehicle 2 and emphasized the adverse weather conditions contributing to the crash.</p>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q4" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q4" class="panel-title">Officers Media</label>
                            <div class="panel-content">
                                <div class="swiper mySwiper2 w-full h-full">
                                    <div class="swiper-wrapper max-w-[800px]">
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next top-[46%] right-[20px] max-md:right-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                    <div
                                        class="swiper-button-prev top-[46%] left-[20px] max-md:left-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 max-md:px-0 py-3 w-fit scroll-m-14" id="extra-info">
                    <h1 class="text-md font-semibold">Extra Info</h1>
                    <p class="text-base leading-5 font-small py-2">Additional details include the response time of
                        emergency services, which was under ten minutes. The highway was fully reopened at approximately
                        9:00 PM. Further investigations are ongoing to determine any other contributing factors.</p>
                    <div class="faq-content">
                        <div class="faq-question">
                            <input id="q5" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q5" class="panel-title">Extra Media</label>
                            <div class="panel-content">
                                <div class="swiper mySwiper2 w-full h-full">
                                    <div class="swiper-wrapper max-w-[800px]">
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                        <!-- 1 item -->
                                        <div class="swiper-slide w-full">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhCUjmh6B643bENHl_8h2B27kHQwoMiM5L4Q&s"
                                                alt="" class="myImg max-w-[300px] w-full h-full object-cover">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-button-next top-[46%] right-[20px] max-md:right-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                    <div
                                        class="swiper-button-prev top-[46%] left-[20px] max-md:left-[10px] cursor-pointer bg-white/90 w-12 h-12 rounded-full aspect-square">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Recent Accidents -->
    <section class="w-full flex flex-col items-start py-5 px-10 max-md:px-4 h-fit">
    <div class="flex items-center justify-between w-full">
        <p class="font-bold text-2xl pt-10 pb-3">Recent Accidents</p>
        <a href="Explore.html" class="bg-text-color/10 text-sm font-medium py-2 px-4 rounded-md capitalize">view more</a>
    </div>
    <div class="swiper mySwiper2 w-full h-full">
        <div class="swiper-wrapper mx-auto">
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

            // Fetch recent accidents
            $recentAccidentsSql = "SELECT * FROM accident ORDER BY accident_date_time DESC LIMIT 5"; // Adjust the limit as needed
            $recentAccidentsResult = $conn->query($recentAccidentsSql);

            if ($recentAccidentsResult->num_rows > 0) {
                while ($accident = $recentAccidentsResult->fetch_assoc()) {
                    // Get the cover image path
                    $coverImage = !empty($accident['cover_image']) ? 'uploads/' . htmlspecialchars($accident['cover_image']) : 'path/to/default/image.jpg';
                    ?>
                    <div class="swiper-slide">
                        <div class="h-[280px] bg-stone-50 rounded-md flex items-center justify-center">
                            <img src="<?= $coverImage ?>" alt="accident image" class="w-full h-full object-cover object-center">
                        </div>
                        <div class="py-5 w-fit">
                            <p class="text-xs font-medium text-text-color/70">case closed</p>
                            <h1 class="text-base leading-6 font-medium py-2"><?= htmlspecialchars($accident['accident_title']) ?></h1>
                            <p class="text-xs font-medium text-text-color/70 flex items-center gap-1">
                                <i class='bx bx-calendar-alt text-base'></i> <?= date('l, F d Y - h:i A', strtotime($accident['accident_date_time'])) ?>
                            </p>
                            <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1">
                                <i class='bx bx-map text-lg'></i><?= htmlspecialchars($accident['district']) ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-center'>No recent accidents found.</p>";
            }
            $conn->close();
            ?>
        </div>
        <div class="swiper-button-next top-[46%] right-[30px] max-md:right-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square"></div>
        <div class="swiper-button-prev top-[46%] left-[30px] max-md:left-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square"></div>
    </div>
</section>


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
    </div>

    <!-- footer -->
    <div id="Footer"></div>

    <!----- faqs  ----->
    <script>
        const toggles = document.querySelectorAll('.faq-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                toggle.parentNode.classList.toggle('active');
            });
        });

        // SOCIAL PANEL JS
        const floating_btn = document.querySelector('.floating-btn');
        const close_btn = document.querySelector('.close-btn');
        const social_panel_container = document.querySelector('.social-panel-container');

        floating_btn.addEventListener('click', () => {
            social_panel_container.classList.toggle('visible')
        });

        close_btn.addEventListener('click', () => {
            social_panel_container.classList.remove('visible')
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
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

    <!-- Initialize Swiper 2 -->
    <script>
        var swiper = new Swiper(".mySwiper2", {
            spaceBetween: 30,
            centeredSlides: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 320px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                800: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
            }
        });
    </script>

    <!-- Combine fetch calls and scroll to top -->
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
            ]).then(() => {
                // window.scrollTo(0, 0);
            });
        });
    </script>

    <!-- sample -->
    <script>
        let numberofresults = 4;
    </script>

    <!-- Toggle Nav Dropdown functionality -->
    <script>
        // PC
        $(document).ready(function () {
            $('#toggleButton').on('click', function () {
                $('.navBarOverlay').toggleClass('show')
                $('#toggleContent').toggleClass('showDropDown');
            });
        });
        // Mobile
        $(document).ready(function () {
            $('#toggleButtonMobile').on('click', function () {
                $('.navBarOverlayMobile').toggleClass('show')
                $('#toggleContentMobile').toggleClass('showDropDown');
            });
        });


        // hide dropdaown
        $(document).ready(function () {
            // pc
            $('.navBarOverlay').on('click', function () {
                $('#toggleContent').removeClass('showDropDown');
                $('.navBarOverlay').removeClass('show')
            })

            // mobile
            $('.navBarOverlayMobile').on('click', function () {
                $('#toggleContentMobile').removeClass('showDropDown');
                $('.navBarOverlayMobile').removeClass('show')
            })
        })
    </script>

    <!-- handle Mobile nav -->
    <script>
        function handleMobileNav() {
            const nav = document.getElementById('mobile-nav')
            nav.classList.toggle('hide-mobile-nav')
            nav.classList.toggle('show-mobile-nav')
        }
    </script>

    <!-- zoom image -->
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        // Get all images with the class "myImg"
        var images = document.getElementsByClassName("myImg");

        // Loop through the images and attach the click event to each one
        for (var i = 0; i < images.length; i++) {
            images[i].onclick = function () {
                modal.style.display = "block";
                modalImg.src = this.src;
            }
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

    </script>
</body>
<style>
    img {
        border-radius: 8px;
    }
</style>
<style>
    .faq-content {
        margin: 0 auto;
    }

    .faq-question {
        padding: 15px 0 20px 0;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .panel-title {
        width: 100%;
        position: relative;
        margin: 0;
        padding: 10px 10px 0 48px;
        display: block;
        cursor: pointer;
    }

    .panel-content {
        display: flex;
        gap: 10px;
        font-size: 20px;
        padding: 0px 14px;
        margin: 0 40px;
        height: 0;
        overflow: hidden;
        position: relative;
        opacity: 0;
        -webkit-transition: .4s ease;
        -moz-transition: .4s ease;
        -o-transition: .4s ease;
        transition: .4s ease;
    }

    .panel:checked~.panel-content {
        height: auto;
        opacity: 1;
        padding: 14px;
    }

    .plus {
        position: absolute;
        margin-left: 20px;
        margin-top: 12px;
        z-index: 5;
        font-size: 22px;
        line-height: 100%;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-transition: .2s ease;
        -moz-transition: .2s ease;
        -o-transition: .2s ease;
        transition: .2s ease;
    }

    .panel:checked~.plus {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .panel {
        display: none;
    }
</style>

</html>
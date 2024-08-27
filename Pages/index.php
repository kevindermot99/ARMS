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
                    <a href="profile.html"
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
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-primary-color/90">
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
                class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-primary-color/90">
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
                <a href="profile.html"
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



    <!-- Slider -->
    <section class="w-full flex items-center justify-center py-5 px-10 max-md:px-4 h-[450px]">
        <!-- prev -->

        <div class="swiper mySwiper w-full h-full">
            <div class="swiper-wrapper mx-auto">
                <div class="relative swiper-slide h-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://inyarwanda.com/app/webroot/img/201509/logos/1442841514_img_20150921_114059.jpg" alt="accident image" class="w-full h-full object-cover object-center  ">
                    <div class="max-w-[450px] w-[95%] absolute bottom-3 left-3 h-fit flex flex-col gap-[2px] bg-white py-3 px-4 rounded-sm">
                        <h1 class="line-clamp-1 font-medium text-base">Igare nimodoka ihetse ibitoki byagoganye umunyonzi ahasiga ubuzima</h1>
                        <p class="line-clamp-1 font-normal text-sm">
                            <i class='bx bx-map text-xs'></i>Gisozi - Saturday, Feb 02 2024 - 08:39 PM
                        </p>
                    </div>
                </div>
                <div class="relative swiper-slide h-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://www.kigalitoday.com/IMG/jpg/impanuka_3.jpg" alt="accident image" class="w-full h-full object-cover object-center  ">
                    <div class="max-w-[450px] w-[95%] absolute bottom-3 left-3 h-fit flex flex-col gap-[2px] bg-white py-3 px-4 rounded-sm">
                        <h1 class="line-clamp-1 font-medium text-base">Igare nimodoka ihetse ibitoki byagoganye umunyonzi ahasiga ubuzima</h1>
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

    <!-- quick filters -->
    <section class="flex flex-col px-10 max-md:px-4 pt-5">
        <!-- filter by vehicle type -->
        <div class="flex items-center justify-center max-md:justify-start gap-4 mb-4 overflow-x-auto">
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-text-color whitespace-nowrap">Cars</button>
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-transparent whitespace-nowrap">Bicycle</button>
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-transparent whitespace-nowrap">Truck</button>
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-transparent whitespace-nowrap">Motor
                Bike</button>
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-transparent whitespace-nowrap">Buses</button>
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-transparent whitespace-nowrap">Vans</button>
            <button
                class="text-text-color text-sm capitalize py-2 px-4 border-b-[3px] border-transparent whitespace-nowrap">Tractors</button>
        </div>
        <!-- results -->
        <div class="py-2 grid grid-cols-2 gap-5 max-md:grid-cols-1">
            <!-- 1 result -->
            <a href="accident desc.html">
            <div class="flex flex-1 h-[220px] max-md:h-fit items-center justify-start max-md:flex-col">
                <div class="h-full max-md:min-h-[250px] w-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://www.byoseonline.rw/wp-content/uploads/2022/03/Impanuka.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-5 w-fit">
                    <p class="text-xs font-medium text-text-color/70">case closed</p>
                    <h1 class="text-base leading-6 font-medium py-2">gisozi impanuka yabanyonzi babiri nigikamyo cya
                        HOHO</h1>
                    <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                    <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                </div>
            </div>
            </a>
            <!-- 1 result -->
            <a href="accident desc.html">
            <div class="flex flex-1 h-[220px] max-md:h-fit items-center justify-start max-md:flex-col">
                <div class="h-full max-md:min-h-[250px] w-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://i0.wp.com/radiotv10.rw/wp-content/uploads/2022/10/whatsapp_image_2022-10-23_at_8.42_44_am-c0905.jpg?resize=812%2C637&ssl=1" alt="accident image" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-5 w-fit">
                    <p class="text-xs font-medium text-text-color/70">case closed</p>
                    <h1 class="text-base leading-6 font-medium py-2">kamonyi impanuka ya busi nigicamyo</h1>
                    <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                    <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                </div>
            </div>
            </a>
            <!-- 1 result -->
            <a href="accident desc.html">
            <div class="flex flex-1 h-[220px] max-md:h-fit items-center justify-start max-md:flex-col">
                <div class="h-full max-md:min-h-[250px] w-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://cdn.rba.co.rw/admin/media_data/cover_photo/PSX203b970.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-5 w-fit">
                    <p class="text-xs font-medium text-text-color/70">case closed</p>
                    <h1 class="text-base leading-6 font-medium py-2">kinyinya impanuka yi gikamyo na Rav4 i hoho kumudende</h1>
                    <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                    <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                </div>
            </div>

            </a>
            <!-- 1 result -->
            <a href="accident desc.html">
            <div class="flex flex-1 h-[220px] max-md:h-fit items-center justify-start max-md:flex-col">
                <div class="h-full max-md:min-h-[250px] w-full bg-stone-50 rounded-md flex items-center justify-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5OfAyFdxbxaBKNQiWPi7R4mvzL8vNLO0GdgQCFpypMsamRPn-hLvi5tj6VSzrOg8KVs8&usqp=CAU" alt="accident image" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-5 w-fit">
                    <p class="text-xs font-medium text-text-color/70">case closed</p>
                    <h1 class="text-base leading-6 font-medium py-2">muhanga impanuka ya bisi ya shwanyaguje fuso</h1>
                    <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                    <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                            class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                </div>
            </div>
            </a>



        </div>
    </section>

    <!-- Recent Accidents -->
    <section class="w-full flex flex-col items-start py-5 px-10 max-md:px-4 h-fit">
        <div class="flex items-center justify-between w-full">
            <p class="font-bold text-2xl pt-10 pb-3">Recent Accident</p>
            <a href="Explore.html" class="bg-text-color/10 text-sm font-medium py-2 px-4 rounded-md capitalize">view more</a>
        </div>
        <div class="swiper mySwiper2 w-full h-full">
            <div class="swiper-wrapper mx-auto">
                <!-- 1 item -->
                
                <div class="swiper-slide">
                    <a href="accident desc.html">
                    <div class=" h-[280px] bg-stone-50 rounded-md flex items-center justify-center">
                        <img src="https://i.ytimg.com/vi/65MUGsfHrgA/maxresdefault.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="py-5 w-fit">
                        <p class="text-xs font-medium text-text-color/70">case closed</p>
                        <h1 class="text-base leading-6 font-medium py-2">kicukiro impanuka yakamodoka kumutuku na truck</h1>
                        <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                        <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                    </div>
                </a>
                </div>
                
                <!-- 1 item -->
                
                <div class="swiper-slide">
                    <a href="accident desc.html">
                    <div class=" h-[280px] bg-stone-50 rounded-md flex items-center justify-center">
                        <img src="https://kglnews.com/wp-content/uploads/2024/01/Screenshot_20240124-100923_1.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="py-5 w-fit">
                        <p class="text-xs font-medium text-text-color/70">case closed</p>
                        <h1 class="text-base leading-6 font-medium py-2">impanuka yi mudoka yumukara ya teruye ipoto mwijoro.</h1>
                        <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                        <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                    </div>
                </a>
                </div>

                
                <!-- 1 item -->
                
                <div class="swiper-slide"><a href="accident desc.html">
                    <div class=" h-[280px] bg-stone-50 rounded-md flex items-center justify-center">
                        <img src="https://www.kigalitoday.com/IMG/jpg/accident_1-4.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="py-5 w-fit">
                        <p class="text-xs font-medium text-text-color/70">case closed</p>
                        <h1 class="text-base leading-6 font-medium py-2">Kamonyi sofiya barayiteruye daaa, umuvuduko mwinshi</h1>
                        <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                        <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                    </div>
                  </a>
                </div>

                <!-- 1 item -->
                
                <div class="swiper-slide">
                    <a href="accident desc.html">
                    <div class=" h-[280px] bg-stone-50 rounded-md flex items-center justify-center">
                        <img src="https://www.kigalitoday.com/IMG/jpg/impanuka-_-gatsata-_-kigali-_-rwanda-2.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="py-5 w-fit">
                        <p class="text-xs font-medium text-text-color/70">case closed</p>
                        <h1 class="text-base leading-6 font-medium py-2">Rav4 yarenze umukingo kicukiro impanuka ikomeye</h1>
                        <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                        <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                    </div>
                 </a>
                </div>
                
                <!-- 1 item -->
                
                <div class="swiper-slide">
                    <a href="accident desc.html">
                    <div class=" h-[280px] bg-stone-50 rounded-md flex items-center justify-center">
                        <img src="https://www.intyoza.com/wp-content/uploads/2016/06/Impanuka-Kicukiro.jpg" alt="accident image" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="py-5 w-fit">
                        <p class="text-xs font-medium text-text-color/70">case closed</p>
                        <h1 class="text-base leading-6 font-medium py-2">imodoka yashwanyaguje moto ebyiri ,driver and cyclist fine</h1>
                        <p class="text-xs font-medium text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-calendar-alt text-base'></i> Saturday, Feb 02 2024 - 08:39 PM</p>
                        <p class="text-xs font-medium pt-[1px] text-text-color/70 flex items-center gap-1"><i
                                class='bx bx-map text-lg'></i>Kigali, Gisozi</p>
                    </div>
                </a>
                </div>

                




            </div>
            <div
                class="swiper-button-next top-[46%] right-[30px] max-md:right-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square">
            </div>
            <div
                class="swiper-button-prev top-[46%] left-[30px] max-md:left-[10px] cursor-pointer bg-white/90 w-14 h-14 rounded-full aspect-square">
            </div>
        </div>
    </section>


    <!-- footer -->
    <div id="Footer"></div>


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
            slidesPerView: "2",
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
                    slidesPerView: 2,
                    spaceBetween: 30
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
</body>
<style>
    img{
        border-radius: 8px;
    }
</style>
</html>
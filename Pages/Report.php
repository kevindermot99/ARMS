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
    <div id="Header-Container">
    <header class="bg-primary-color text-white">
            <div class="flex items-center justify-between px-10 max-md:px-4 py-4">
                <div>
                    <img src="../images/coat.png" alt="Logo" class="h-auto w-[65px] ">
                </div>
                <div class="flex flex-col items-center justify-center gap-1 max-md:gap-0">
                    <h1 class="font-extrabold text-center text-2xl leading-4 max-md:text-sm max-sm:text-xs ">RWANDA
                        NATIONAL POLICE</h1>
                    <p class="text-sm pt-1 text-center max-sm:text-xs">Service - Protection - Integrity</p>
                </div>
                <div>
                    <img src="../images/RNP_LOGO.png" class="h-auto w-[65px] ">
                </div>
            </div>
        </header>
    </div>

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
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-transparent">
                    Home
                </a>
                <a href="Explore.html"
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-transparent">
                    Explore
                </a>
                <a href="Report.html"
                    class="text-sm font-normal whitespace-nowrap w-full h-fit flex items-center justify-start bg-stone-100 py-2 px-6 border-l-[3px] hover:opacity-85 border-primary-color/90">
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
                class="text-sm font-normal whitespace-nowrap w-fit h-full flex items-center justify-center py-2 px-6 border-b-[3px] hover:opacity-85 border-primary-color/90">
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

    <!-- Top 4 cards report -->
    <div class="h-full w-full flex items-start justify-start flex-col py-5 px-10 max-md:px-4 gap-1 relative">
        <h1 class="font-bold text-xl ">Overview</h1>
        <div class="grid grid-cols-4 max-lg:grid-cols-2 max-md:grid-cols-1 gap-4 py-4 w-full h-fit">
            <!-- 1card -->
            <div class="h-[130px] w-full p-5 flex flex-col items-start justify-center gap-1 bg-white ring-1 ring-text-color/10 rounded-md shadow-xl shadow-text-color/5">
                <p class="text-xs opacity-80">Total Accidents</p>
                <h1 class="text-2xl font-bold">42,580</h1>
                <p class="capitalize text-xs text-text-color/80">
                    <span class="text-red-600 font-semibold">
                        <span >
                            <i class='bx bx-trending-up text-sm translate-y-[3px]' ></i>
                        </span>
                        <span>
                            0.3%
                        </span>
                    </span>
                    increase from last 12 months
                </p>
            </div>
            <div class="h-[130px] w-full p-5 flex flex-col items-start justify-center gap-1 bg-white ring-1 ring-text-color/10 rounded-md shadow-xl shadow-text-color/5">
                <p class="text-xs opacity-80">Total Deaths</p>
                <h1 class="text-2xl font-bold">2,390</h1>
                <p class="capitalize text-xs text-text-color/80">
                    <span class="text-green-600 font-semibold">
                        <span >
                            <i class='bx bx-trending-down text-sm translate-y-[1px]' ></i>
                        </span>
                        <span>
                            83%
                        </span>
                    </span>
                    Decrease from last 12 months
                </p>
            </div>
            <div class="h-[130px] w-full p-5 flex flex-col items-start justify-center gap-1 bg-white ring-1 ring-text-color/10 rounded-md shadow-xl shadow-text-color/5">
                <p class="text-xs opacity-80">Other Injuries</p>
                <h1 class="text-2xl font-bold">990</h1>
                <p class="capitalize text-xs text-text-color/80">
                    <span class="text-red-600 font-semibold">
                        <span >
                            <i class='bx bx-trending-up text-sm translate-y-[3px]' ></i>
                        </span>
                        <span>
                            12%
                        </span>
                    </span>
                    increase from last 12 months
                </p>
            </div>
            <div class="h-[130px] w-full p-5 flex flex-col items-start justify-center gap-1 bg-white ring-1 ring-text-color/10 rounded-md shadow-xl shadow-text-color/5">
                <p class="text-xs opacity-80">Damaged Properties</p>
                <h1 class="text-2xl font-bold">1,390</h1>
                <p class="capitalize text-xs text-text-color/80">
                    <span class="text-green-600 font-semibold">
                        <span >
                            <i class='bx bx-trending-down text-sm translate-y-[1px]' ></i>
                        </span>
                        <span>
                            23%
                        </span>
                    </span>
                    Decrease from last 12 months
                </p>
            </div>
        </div>
        <div class="w-full flex items-center justify-end gap-5 mt-5">
            <label class="flex items-center gap-3">
                <p class="text-sm opacity-80">Vehicle type</p>
                <select type="text" class="h-[35px] rounded-md px-3 text-sm ring-1 ring-primary-color/20">
                    <option value="Car">Car</option>
                    <option value="Bike">Bicycle</option>
                    <option value="Truck">Truck</option>
                    <option value="Motor Bikes">Motor Bike</option>
                    <option value="Bus">Bus</option>
                </select>
            </label>
            <label class="flex items-center gap-3">
                <p class="text-sm opacity-80">Date</p>
                <input type="month" class="h-[35px] text-text-color/90 text-sm rounded-md px-3 ring-1 ring-primary-color/20"/>
            </label>
            <button type="submit" class="w-fit h-[35px] px-5 bg-primary-color text-white flex items-center justify-center text-sm rounded-md">Filter</button>
        </div>
        <div class="w-full mt-7">
        <table class="w-full border border-stone-400" border="1">
    <thead>
        <tr class="border-b border-stone-400">
            <th class="text-left h-[35px] px-3 border-r border-stone-400">Id</th>
            <th class="text-left h-[35px] px-3 border-r border-stone-400">Accident</th>
            <th class="text-left h-[35px] px-3 border-r border-stone-400">Witness Statements</th>
            <th class="text-left h-[35px] px-3 border-r border-stone-400">Officers Verdict</th>
            <th class="text-left h-[35px] px-3">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr class="border-b border-stone-400">
            <td class="h-[35px] px-3 border-r border-stone-400">1</td>
            <td class="h-[35px] px-3 border-r border-stone-400">Car collision at Main St</td>
            <td class="h-[35px] px-3 border-r border-stone-400">"Driver was speeding"</td>
            <td class="h-[35px] px-3 border-r border-stone-400">Fault determined: Driver A</td>
            <td class="h-[35px] px-3">Closed</td>
        </tr>
        <tr class="border-b border-stone-400">
            <td class="h-[35px] px-3 border-r border-stone-400">2</td>
            <td class="h-[35px] px-3 border-r border-stone-400">Pedestrian hit at 5th Ave</td>
            <td class="h-[35px] px-3 border-r border-stone-400">"Pedestrian crossed suddenly"</td>
            <td class="h-[35px] px-3 border-r border-stone-400">No fault assigned</td>
            <td class="h-[35px] px-3">Under Investigation</td>
        </tr>
        <tr>
            <td class="h-[35px] px-3 border-r border-stone-400">3</td>
            <td class="h-[35px] px-3 border-r border-stone-400">Minor fender bender on 8th St</td>
            <td class="h-[35px] px-3 border-r border-stone-400">"No injuries reported"</td>
            <td class="h-[35px] px-3 border-r border-stone-400">Fault determined: Driver B</td>
            <td class="h-[35px] px-3">Closed</td>
        </tr>
    </tbody>
</table>


        </div>

    </div>

    <!-- footer -->
    <!-- <div id="Footer"></div> -->

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

</html>
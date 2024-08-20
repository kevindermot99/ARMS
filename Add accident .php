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
    <script src="https://cdn.tiny.cloud/1/jxeugg7sidhs8kjsbk1phsjb81a7ci70r2aouu2uk7f1a3ul/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
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
               <a href="index.html">
                <div class=" h-fit w-fit flex flex-col justify-center items-start text-primary-color">
                    <span class="text-xl font-extrabold tracking-tight">A.R.M.S</span>
                    <!-- <span class="text-[6px] pr-1">Accident Report Managment System</span> -->
                </div>
            </a>
            </div>
            <script>
                function handleMobileNav() {
                    const nav = document.getElementById('mobile-nav')
                    nav.classList.toggle('hide-mobile-nav')
                    nav.classList.toggle('show-mobile-nav')
                }
            </script>

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
         <a href="index.html"> <div class=" h-full w-full flex flex-col justify-center items-start text-primary-color">
           <span class="text-3xl font-extrabold leading-7 tracking-tight">A.R.M.S</span>
            <span class="text-[6px] pr-1">Accident Report Managment System</span>
        </div></a>
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

    <section class="backgroundz w-full flex items-center justify-center py-5 px-10 h-[200px]">
        <span class="text-3xl font-extrabold leading-7 tracking-tight">ADD ACCIDENT</span>
    </section><br><br>
<style>
                        .lower{
                            margin-bottom: -48px;
                        }
                    </style>
    <!-- add form --> 
     <section class="content">
        <div class="sidenav">
            <a href="#basic-info" data-step="0" class="nav-link active"><button>Basic Info</button></a>
            <a href="#forensic" data-step="1"><button>Forensic</button></a>
            <a href="#testimonials" data-step="2"><button>Testimonials</button></a>
            <a href="#damage" data-step="3"><button>Damage Report</button></a>
            <a href="#officers" data-step="4"><button>Officers' P.O.V.</button></a>
            <a href="#extra" data-step="5"><button>Extra Info</button></a>
        </div>
        
        
        <div class="maincontent">
            <form id="multiStepForm" action="auth/process.php" method="post" enctype="multipart/form-data">
                <!-- Step 1: Basic Information -->
                <div class="step active" id="basic-info">

                    <h3 class="titlez">Basic Information</h3>
                    <div class="form-group">
                        <label for="accidentTitle">Accident Title</label>
                        <input type="text" class="form-control" id="accidentTitle" name="accident_title">
                    </div>
                    <div class="form-group">
                        <label for="accidentDateTime">Date and Time</label>
                        <input type="datetime-local" class="form-control" id="accidentDateTime" name="accident_date_time">
                    </div>  
                    <div class="flexy">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <select class="form-control" id="province" name="province">
                                <option value="">Select Province</option>
                                <!-- Add options dynamically from database -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="district">District</label>
                            <select class="form-control" id="district" name="district">
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sector">Sector</label>
                            <select class="form-control" id="sector" name="sector">
                                <option value="">Select Sector</option>
                            </select>
                        </div>
                    </div>
        
                    <div class="form-group ">
                        <label for="propertyDamage">Description</label>
                        <textarea class="form-control" id="propertyDamageDesc"
                            name="basicinfo_desc"></textarea>
                    </div>
                </div>
        
                <!-- Step 2: Media -->
                <div class="step" id="forensic">
                    <h3 class="titlez">Forensic</h3>
                    <div class="form-group">
                        <label for="mediaUpload">Upload media</label>
                        <!---- name="media[]"------>
                        <input type="file" class="form-control-file" id="mediaUpload" 
                        name="forensicmedia" 
                        accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div> <!-- Added div to display file names -->
                    </div>
                    
                    <div class="form-group mt-4">
                        <label for="propertyDamage">Description</label>
                        <textarea class="form-control" id="propertyDamageDesc" name="forensic_desc"></textarea>
                    </div>
                </div>
        
                <!-- Step 3: Testimonials -->
                <div class="step" id="Testimonials">
                    
                    <div class="lower">
                    <h3 class="titlez">Testimonial</h3>  
                    </div>
                    <h3> <button type="button"
                        class="bg-text-color/10 text-sm font-medium py-2 px-4 rounded-md capitalize float-right"
                        id="add-testimonial">Add Testimonial</button>
                    </h3><br><br>
                
                    <div id="testimonial-section">
                        <div class="testimonial">
                            <div class="flexy"> 
                            <div class="form-group">
                                <label for="individualName">Individual Name</label>
                                <input type="text" class="form-control" name="individual_name[]">
                            </div>
                            <div class="form-group">
                                <label for="individualId">Individual ID Number</label>
                                <input type="text" class="form-control" name="individual_id[]">
                            </div>
                            </div>
                
                            <div class="flexy">
                                <div class="form-group">
                                    <label for="vehicle">Vehicle</label>
                                    <select class="form-control" name="vehicle[]">
                                        <option value="">Select Vehicle</option>
                                        <option value="suv">SUV</option>
                                        <option value="pickup">Pickup</option>
                                        <option value="sedan">Sedan</option>
                                        <option value="truck">Truck</option>
                                        <option value="bike">Bike</option>
                                    </select>
                                </div>
                
                                <div class="form-group">
                                    <label for="vehiclePlate">Vehicle Plate</label>
                                    <input type="text" class="form-control" name="vehicle_plate[]">
                                </div>
                                <div class="form-group">
                                    <label for="licenseStatus">License Status</label>
                                    <select class="form-control" name="license_status[]">
                                        <option value="active">Active</option>
                                        <option value="deactivated">Deactivated</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="insurance">Insurance</label>
                                    <select class="form-control" name="insurance[]">
                                        <option value="">Select Insurance</option>
                                        <option value="sanlam">Sanlam</option>
                                        <option value="radiant">Radiant</option>
                                        <option value="prime">Prime</option>
                                        <option value="mua">MUA</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alcoholTest">Alcohol Test</label>
                                    <select class="form-control" name="alcohol_test[]">
                                        <option value="">Select Alcohol Results</option>
                                        <option value="not drunk">Not Drunk</option>
                                        <option value="drunk">Drunk</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mediaUpload">Upload media</label>
                                <input type="file" class="form-control-file" id="mediaUpload" name="individual_media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                                <div class="drop-zone" id="dropZone">
                                    Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                                </div>
                                <div id="fileNames" class="mt-2"></div> <!-- Added div to display file names -->
                            </div>
                
                            <div class="form-group">
                                <label for="propertyDamage">Description</label>
                                <textarea class="form-control" id="propertyDamageDesc" name="indiviaul_desc[]"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
                
        
                <!-- Step 4: Damage Report -->
                <div class="step" id="Damage">
                    <h3 class="titlez">Damage report</h3>
                    <div class="flexy">
                        <div class="form-group">
                           <label for="injured">Individuals Injured</label>
                           <input type="number" placeholder="1" class="form-control" id="injured" name="number_injured">
                        </div> 
                    <div class="form-group">
                        <label for="dead">Individuals passed away</label>
                        <input type="number" placeholder="0" class="form-control" id="dead" name="dead">
                    </div>
                    </div> 
                    <div class="form-group">
                        <label for="mediaUpload">Upload media</label>
                        <input type="file" class="form-control-file" id="mediaUpload" name="Damage_media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div> <!-- Added div to display file names -->
                    </div>
                    <div class="form-group">
                        <label for="propertyDamage">Damaged report</label> 
                        <textarea class="form-control" id="propertyDamageDesc" name="damage_desc"></textarea>
                    </div>
                </div>
        
                <!-- Step 5: Officers' P.O.V. -->
                <div class="step" id="Officers">
                    <h3 class="titlez">officers report</h3>
                    <div class="form-group">
                        <label for="mediaUpload">Upload media</label>
                        <input type="file" class="form-control-file" id="mediaUpload" name="media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div> <!-- Added div to display file names -->
                    </div>
                    <div class="form-group">
                        <label for="officerDescription">Officer Description</label>
                        <textarea class="form-control" id="officerDescription" name="officer_description"></textarea>
                    </div>
                </div>
        
                <!-- Step 6: Officers' P.O.V. -->
                <div class="step" id="Extra">
                    <h3 class="titlez">extra-info</h3>
                    <div class="form-group">
                        <label for="mediaUpload">Upload media</label>
                        <input type="file" class="form-control-file" id="mediaUpload" name="media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div> <!-- Added div to display file names -->
                    </div>
                    <div class="form-group">
                        <label for="officerDescription">Officer Description</label>
                        <textarea class="form-control" id="officerDescription" name="extra_info"></textarea>
                    </div> 
                </div>
        
                <!-- Navigation Buttons -->
                <div class="form-navigation">
                    <button type="button" class="bg-text-color/10 text-sm font-medium py-2 px-4 rounded-md capitalize" id="prevBtn">Previous</button>
                    <button type="button" class="bg-text-color/10 text-sm font-medium py-2 px-4 rounded-md capitalize" id="nextBtn">Next</button>
                </div>
            </form>


                <script>
                    $(document).ready(function () {
                        // Function to add a new testimonial
                        $('#add-testimonial').click(function () {
                            let testimonialHTML = `
                            <div class="testimonial " style="border-top: 5px solid blue; padding-top: 10px; margin-top: 10px;">
                                <div class="form-group">
                                    <label for="individualName">Individual Name</label>
                                    <input type="text" class="form-control" name="individual_name[]">
                                </div>
                                <div class="form-group">
                                    <label for="individualId">Individual ID Number</label>
                                    <input type="text" class="form-control" name="individual_id[]">
                                </div>
                
                                <div class="flexy">
                                    <div class="form-group">
                                        <label for="vehicle">Vehicle</label>
                                        <select class="form-control" name="vehicle[]">
                                            <option value="">Select Vehicle</option>
                                            <option value="suv">SUV</option>
                                            <option value="pickup">Pickup</option>
                                            <option value="sedan">Sedan</option>
                                            <option value="truck">Truck</option>
                                            <option value="bike">Bike</option>
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <label for="vehiclePlate">Vehicle Plate</label>
                                        <input type="text" class="form-control" name="vehicle_plate[]">
                                    </div>
                                    <div class="form-group">
                                        <label for="licenseStatus">License Status</label>
                                        <select class="form-control" name="license_status[]">
                                            <option value="active">Active</option>
                                            <option value="deactivated">Deactivated</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="insurance">Insurance</label>
                                        <select class="form-control" name="insurance[]">
                                            <option value="">Select Insurance</option>
                                            <option value="sanlam">Sanlam</option>
                                            <option value="radiant">Radiant</option>
                                            <option value="prime">Prime</option>
                                            <option value="mua">MUA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alcoholTest">Alcohol Test</label>
                                        <select class="form-control" name="alcohol_test[]">
                                            <option value="">Select Alcohol Results</option>
                                            <option value="not drunk">Not Drunk</option>
                                            <option value="drunk">Drunk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mediaUpload">Upload media</label>
                                    <input type="file" class="form-control-file" name="media[]" accept="image/*,video/*,audio/*" multiple>
                                </div>
                
                                <div class="form-group">
                                    <label for="propertyDamage">Description</label>
                                    <textarea class="form-control" name="property_damage_desc[]"></textarea>
                                </div>
                            </div>`;
                            $('#testimonial-section').append(testimonialHTML);
                        });
                    });
                </script>
            <script>
                tinymce.init({
                    selector: 'textarea',
                      // Apply TinyMCE to all textareas
                    menubar: false,
                    plugins: 'link image code',
                    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                    content_css: 'https://www.tiny.cloud/css/codepen.min.css'
                });
            
                // JavaScript for multi-step form
                let currentStep = 0;
            
                function showStep(step) {
                    $('.step').removeClass('active');
                    $('#multiStepForm .step').eq(step).addClass('active');
                    
                    // Update the active state of the sidebar links
                    $('.sidenav a').removeClass('active');
                    $('.sidenav a[data-step="' + step + '"]').addClass('active');
            
                    // Show/Hide navigation buttons
                    $('#prevBtn').toggle(step > 0);
                    $('#nextBtn').text(step === $('.step').length - 1 ? 'Submit' : 'Next');
                }
            
                function changeStep(stepChange) {
                    const newStep = currentStep + stepChange;
                    if (newStep >= 0 && newStep < $('.step').length) {
                        currentStep = newStep;
                        showStep(currentStep);
                    }
                }
            
                $(document).ready(function () {
                    // Sidebar navigation
                    $('.sidenav a').click(function (e) {
                        e.preventDefault(); // Prevent default anchor behavior
            
                        // Get the step index from the clicked link
                        const stepIndex = $(this).data('step');
            
                        // Set the current step and show it
                        currentStep = stepIndex;
                        showStep(currentStep);
                    });
            
                    // Navigation buttons
                    $('#prevBtn').click(function () {
                        changeStep(-1);
                    });
            
                    $('#nextBtn').click(function () {
                        if (currentStep === $('.step').length - 1) {
                            $('#multiStepForm').submit();
                        } else {
                            changeStep(1);
                        }
                    });
            
                    // Initialize the form to show the first step
                    showStep(currentStep);
                });
             
    // Populate provinces and other location fields
    const locationData = {
        "Kigali": {
            "Gasabo": {
                "Bumbogo": ["Kibenga", "Kinyaga", "Kinyana", "Ngara", "Rubungo"],
                "Gatsata": ["Bweramvura", "Kadobogo", "Kabuye", "Nyamugari", "Rwesero"],
                "Gikomero": ["Bukoro", "Gahengeri", "Kabuye", "Nyagasozi", "Rugarama"],
                "Gisozi": ["Kangondo", "Kibiraro", "Nyabisindu", "Nyamabuye", "Rukingu"],
                "Jabana": ["Gashenyi", "Jabana", "Murama", "Taba", "Yanza"],
                "Jali": ["Gasabo", "Kagugu", "Kamatamu", "Kinyaga", "Rudakabukirwa"],
                "Kacyiru": ["Kamatamu", "Kamukina", "Nyarutarama", "Rugando", "Rugunga"],
                "Kimihurura": ["Kimihurura", "Kinyinya", "Nyakabanda", "Remera", "Rukingu"],
                "Kimironko": ["Bibare", "Kibagabaga", "Nyagatovu", "Nyarutarama", "Rwabushenyi"],
                "Kinyinya": ["Gasharu", "Murama", "Nyagatovu", "Nyarutarama", "Tunga"],
                "Nduba": ["Bweramvura", "Gasagara", "Kabuye", "Kigabiro", "Murambi"],
                "Ndera": ["Bushyogo", "Bweramvura", "Gihogwe", "Murama", "Rutunga"],
                "Remera": ["Gikondo", "Kabuga", "Kinyinya", "Nyabisindu", "Rugando"],
                "Rusororo": ["Kabuga", "Mwulire", "Nyagahinga", "Nyarugenge", "Rugarama"],
                "Rutunga": ["Bumbogo", "Gatsata", "Jabana", "Murambi", "Nyabikenke"]
            },
            "Kicukiro": {
                "Gahanga": ["Agatare", "Gahanga", "Gikombe", "Murinja", "Nkenga"],
                "Gatenga": ["Gasharu", "Kabeza", "Kamashashi", "Nyakabanda", "Rwezamenyo"],
                "Gikondo": ["Bweramvura", "Gatenga", "Kabuye", "Nyabisindu", "Nyakabanda"],
                "Kanombe": ["Busanza", "Kabuga", "Kabeza", "Kavumu", "Rubirizi"],
                "Kicukiro": ["Gatenga", "Kabeza", "Kicukiro", "Kigarama", "Nyakabanda"],
                "Kigarama": ["Gikondo", "Kigarama", "Murama", "Nyarurama", "Tunga"],
                "Masaka": ["Kabuga", "Kanombe", "Masaka", "Murambi", "Nyabugogo"],
                "Niboye": ["Gatenga", "Kagarama", "Niboye", "Nyakabanda", "Rwezamenyo"],
                "Nyarugunga": ["Busanza", "Kanombe", "Kabeza", "Kicukiro", "Rubirizi"]
            },
            "Nyarugenge": {
                "Gitega": ["Gitega", "Kigali", "Kimisagara", "Nyabugogo", "Rwezamenyo"],
                "Kanyinya": ["Bweramvura", "Kabuye", "Kigabiro", "Murambi", "Taba"],
                "Kigali": ["Gitega", "Kigali", "Kimisagara", "Nyamirambo", "Rwezamenyo"],
                "Kimisagara": ["Gisozi", "Kagugu", "Kimisagara", "Nyamirambo", "Rwezamenyo"],
                "Mageragere": ["Kabuye", "Mageragere", "Murambi", "Nyabugogo", "Taba"],
                "Muhima": ["Gitega", "Kigali", "Muhima", "Nyabugogo", "Rwezamenyo"],
                "Nyakabanda": ["Gisozi", "Kimisagara", "Nyakabanda", "Nyamirambo", "Rwezamenyo"],
                "Nyamirambo": ["Gikondo", "Kagugu", "Kimisagara", "Nyamirambo", "Rwezamenyo"],
                "Nyarugenge": ["Gitega", "Kigali", "Kimisagara", "Nyamirambo", "Rwezamenyo"],
                "Rwezamenyo": ["Gisozi", "Kimisagara", "Nyamirambo", "Rwezamenyo", "Taba"]
            }
        },
        "Eastern": {
            "Bugesera": {
                "Gashora": ["Gasenga", "Gatare", "Mugorore", "Musovu", "Nyakayaga"],
                "Juru": ["Kabaya", "Kivumu", "Musagara", "Nyarunazi", "Rubona"],
                "Kamabuye": ["Kabukuba", "Karwema", "Mbuye", "Nyabivumu", "Rugarama"],
                "Mareba": ["Gakamba", "Gashora", "Mbare", "Murehe", "Nemba"],
                "Mayange": ["Akabare", "Gahira", "Karambi", "Rango", "Runyinya"],
                "Musenyi": ["Gicaca", "Gihinga", "Kabukuba", "Karambi", "Musenyi"],
                "Mwogo": ["Kabuye", "Mwogo", "Ngeruka", "Rukora", "Rweru"],
                "Ngeruka": ["Gashora", "Karama", "Kibaza", "Nyakabungo", "Rweru"],
                "Ntarama": ["Gatare", "Kanazi", "Karambi", "Murambi", "Rugarama"],
                "Nyamata": ["Gihinga", "Kabuye", "Mushikiri", "Ntarama", "Rugarama"],
                "Rilima": ["Gakamba", "Karera", "Mugorore", "Musenyi", "Rilima"],
                "Ruhuha": ["Kabukuba", "Karera", "Mugorore", "Nyakabingo", "Ruhuha"],
                "Rweru": ["Gihinga", "Kabukuba", "Karambi", "Musenyi", "Rweru"],
                "Shyara": ["Gakamba", "Karambi", "Mushikiri", "Ruhuha", "Rweru"]
            },
            "Gatsibo": {
                "Gasange": ["Kabarore", "Kageyo", "Mugera", "Murambi", "Rwimbogo"],
                "Gatsibo": ["Gasange", "Gatsibo", "Kabarore", "Kageyo", "Rwimbogo"],
                "Gitoki": ["Gashora", "Gitoki", "Murambi", "Ngarama", "Rugarama"],
                "Kabarore": ["Gasange", "Kabarore", "Kageyo", "Mugera", "Murambi"],
                "Kageyo": ["Gasange", "Kabarore", "Kageyo", "Mugera", "Murambi"],
                "Kiramuruzi": ["Gihinga", "Kabuye", "Kiramuruzi", "Murambi", "Rugarama"],
                "Kiziguro": ["Gasange", "Gatsibo", "Kabarore", "Kageyo", "Kiziguro"],
                "Muhura": ["Gasange", "Kabarore", "Kageyo", "Murambi", "Rwimbogo"],
                "Murambi": ["Gasange", "Kabarore", "Kageyo", "Murambi", "Rwimbogo"],
                "Ngarama": ["Gashora", "Gitoki", "Murambi", "Ngarama", "Rugarama"],
                "Nyagihanga": ["Gasange", "Gatsibo", "Kabarore", "Kageyo", "Nyagihanga"],
                "Remera": ["Gasange", "Gatsibo", "Kabarore", "Kageyo", "Remera"],
                "Rwimbogo": ["Gasange", "Kabarore", "Kageyo", "Murambi", "Rwimbogo"]
            },
            "Kayonza": {
                "Gahini": ["Gahini", "Kabare", "Kayonza", "Kabarondo", "Murama"],
                "Kabare": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Kabarondo": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Kayonza": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Kayonza City": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Mukarange": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Murama": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Mwiri": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Nyamirama": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Rukara": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Ruramira": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"],
                "Rwimishinya": ["Gahini", "Kabare", "Kayonza", "Murama", "Rukara"]
            },
            "Kirehe": {
                "Gahara": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Gatore": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Kigarama": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Kigina": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Kirehe": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Mahama": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Mpanga": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Musaza": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Mushikiri": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Nasho": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Nyamugali": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"],
                "Nyarubuye": ["Gahara", "Gatore", "Kigarama", "Kigina", "Kirehe"]
            },
            "Ngoma": {
                "Gashanda": ["Gashanda", "Janja", "Karembo", "Kazo", "Mugesera"],
                "Jarama": ["Gashanda", "Jarama", "Karembo", "Kazo", "Mugesera"],
                "Karembo": ["Gashanda", "Jarama", "Karembo", "Kazo", "Mugesera"],
                "Kazo": ["Gashanda", "Jarama", "Karembo", "Kazo", "Mugesera"],
                "Kibungo": ["Gashanda", "Jarama", "Karembo", "Kazo", "Mugesera"],
                "Mugesera": ["Gashanda", "Jarama", "Karembo", "Kazo", "Mugesera"],
                "Murama": ["Gashanda", "Jarama", "Karembo", "Kazo", "Murama"],
                "Mutenderi": ["Gashanda", "Jarama", "Karembo", "Kazo", "Mutenderi"],
                "Remera": ["Gashanda", "Jarama", "Karembo", "Kazo", "Remera"],
                "Rukira": ["Gashanda", "Jarama", "Karembo", "Kazo", "Rukira"],
                "Sake": ["Gashanda", "Jarama", "Karembo", "Kazo", "Sake"],
                "Zaza": ["Gashanda", "Jarama", "Karembo", "Kazo", "Zaza"]
            },
            "Nyagatare": {
                "Gatunda": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Karangazi": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Karama": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Katabagemu": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Kiyombe": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Mimuli": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Mukama": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Musheri": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Nyagatare": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Rukomo": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Rwempasha": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Rwimiyaga": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"],
                "Tabagwe": ["Gatunda", "Kabarore", "Karangazi", "Karama", "Katabagemu"]
            },
            "Rwamagana": {
                "Fumbwe": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Gahengeri": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Gishari": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Karenge": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Kigabiro": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Muhazi": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Munyaga": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Mwulire": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Nyakariro": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Nzige": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Rubona": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"],
                "Rwamagana": ["Fumbwe", "Gahengeri", "Gishari", "Karenge", "Kigabiro"]
            }
        },
        "Northern": {
            "Burera": {
                "Bungwe": ["Bungwe", "Gahunga", "Gatebe", "Gitovu", "Kagogo"],
                "Butaro": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Cyanika": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Cyeru": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Gahunga": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Gatebe": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Gitovu": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Kagogo": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Kinoni": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Kivuye": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Nemba": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Rugarama": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Rugengabari": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Ruhunde": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Rusarabuye": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"],
                "Rwerere": ["Bungwe", "Butaro", "Cyanika", "Cyeru", "Gahunga"]
            },
            "Gakenke": {
                "Busengo": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Coko": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Cyabingo": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Gakenke": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Gashenyi": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Janja": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Kamubuga": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Karambo": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Kivuruga": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Mataba": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Mugunga": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Muhondo": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Minazi": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Muyongwe": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Muzo": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Nemba": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Ruli": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Rusasa": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"],
                "Rushashi": ["Busengo", "Coko", "Cyabingo", "Gakenke", "Gashenyi"]
            },
            "Gicumbi": {
                "Bukure": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Bwisige": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Byumba": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Cyumba": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Giti": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Kageyo": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Kaniga": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Manyagiro": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Miyove": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Mukarange": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Muko": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Mutete": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Nyamiyaga": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Nyankenke": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Rubaya": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Rukomo": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Rushaki": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Rutare": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Ruvune": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"],
                "Rwamiko": ["Bukure", "Bwisige", "Byumba", "Cyumba", "Giti"]
            },
            "Musanze": {
                "Busogo": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Cyuve": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Gacaca": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Gashaki": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Kimonyi": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Kinigi": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Muhoza": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Muko": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Musanze": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Nkotsi": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Nyange": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Remera": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Rwaza": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"],
                "Shingiro": ["Busogo", "Cyuve", "Gacaca", "Gashaki", "Kimonyi"]
            },
            "Rulindo": {
                "Base": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Burega": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Bushoki": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Buyoga": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Cyinzuzi": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Cyungo": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Kinihira": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Kisaro": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Masoro": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Mbogo": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Murambi": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Ntarabana": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Rukozo": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Rulindo": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Rusiga": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Shyorongi": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"],
                "Tumba": ["Base", "Burega", "Bushoki", "Buyoga", "Cyinzuzi"]
            }
        },
        "Southern": {
            "Gisagara": {
                "Gikore": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Gikonko": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Kansi": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Kibilizi": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Kigembe": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Mamba": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Muganza": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Mukindo": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Musha": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Ndora": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Nyanza": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"],
                "Save": ["Gikore", "Gikonko", "Kansi", "Kibilizi", "Kigembe"]
            },
            "Huye": {
                "Gishamvu": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Huye": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Karama": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Kigoma": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Kinazi": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Maraba": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Mbazi": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Mukura": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Ngoma": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Ruhashya": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Rusatira": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Rwaniro": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Simbi": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"],
                "Tumba": ["Gishamvu", "Huye", "Karama", "Kigoma", "Kinazi"]
            },
            "Kamonyi": {
                "Gacurabwenge": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Kayenzi": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Kayumbu": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Mugina": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Musambira": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Ngamba": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Nyamiyaga": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Nyarubaka": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Rugalika": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Rukoma": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"],
                "Runda": ["Gacurabwenge", "Kayenzi", "Kayumbu", "Mugina", "Musambira"]
            },
            "Muhanga": {
                "Cyeza": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Kabacuzi": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Kibangu": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Kiyumba": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Muhanga": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Mushishiro": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Nyabinoni": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Nyarusange": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Rongi": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Rugendabari": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"],
                "Shyogwe": ["Cyeza", "Kabacuzi", "Kibangu", "Kiyumba", "Muhanga"]
            },
            "Nyamagabe": {
                "Buruhukiro": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Cyanika": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Gasaka": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Gatare": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Kaduha": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Kamegeri": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Kibumbwe": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Kitabi": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Mbazi": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Mugano": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Musange": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Musebeya": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Mushubi": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Nkomane": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Tare": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"],
                "Uwinkingi": ["Buruhukiro", "Cyanika", "Gasaka", "Gatare", "Kaduha"]
            },
            "Nyanza": {
                "Busasamana": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Busoro": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Cyabakamyi": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Kibirizi": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Kigoma": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Mukingo": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Muyira": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Ntyazo": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"],
                "Rwabicuma": ["Busasamana", "Busoro", "Cyabakamyi", "Kibirizi", "Kigoma"]
            },
            "Nyaruguru": {
                "Busanze": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Cyahinda": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Kibeho": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Kivu": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Mata": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Muganza": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Munini": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Ngera": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Ngoma": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Nyabimata": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Nyagisozi": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Ruheru": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Rusenge": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Ruramba": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"],
                "Rwamagana": ["Busanze", "Cyahinda", "Kibeho", "Kivu", "Mata"]
            },
            "Ruhango": {
                "Bweramana": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Byimana": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Kabagali": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Kinihira": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Kinazi": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Mbuye": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Mwendo": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Ntongwe": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"],
                "Ruhango": ["Bweramana", "Byimana", "Kabagali", "Kinihira", "Kinazi"]
            }
        },
        "Western": {
            "Karongi": {
                "Bwishyura": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Gashari": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Gishyita": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Gisovu": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Gitesi": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Mubuga": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Murambi": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Murundi": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Mutuntu": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Rugabano": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Rwankuba": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Rubengera": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Ruganda": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"],
                "Twumba": ["Bwishyura", "Gashari", "Gishyita", "Gisovu", "Gitesi"]
            },
            "Ngororero": {
                "Bwira": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Gatumba": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Hindiro": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Kabaya": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Kageyo": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Kavumu": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Matyazo": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Muhanda": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Muhororo": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Ndaro": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Ngororero": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Nyange": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"],
                "Sovu": ["Bwira", "Gatumba", "Hindiro", "Kabaya", "Kageyo"]
            },
            "Nyabihu": {
                "Bigogwe": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Jenda": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Jomba": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Kabatwa": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Karago": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Kintobo": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Mukamira": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Muringa": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Rambura": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Rugera": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Rurembo": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"],
                "Shyira": ["Bigogwe", "Jenda", "Jomba", "Kabatwa", "Karago"]
            },
            "Nyamasheke": {
                "Bushekeri": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Bushenge": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Cyato": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Gihombo": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Kagano": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Kanjongo": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Karambi": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Karengera": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Kirimbi": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Macuba": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Mahembe": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Rangiro": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Ruharambuga": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"],
                "Shangi": ["Bushekeri", "Bushenge", "Cyato", "Gihombo", "Kagano"]
            },
            "Rubavu": {
                "Bugeshi": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Busasamana": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Cyanzarwe": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Gisenyi": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Kanama": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Kanzenze": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Mudende": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Nyakiliba": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Nyamyumba": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Nyundo": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Rubavu": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"],
                "Rugerero": ["Bugeshi", "Busasamana", "Cyanzarwe", "Gisenyi", "Kanama"]
            },
            "Rusizi": {
                "Bugarama": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Butare": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Gashonga": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Giheke": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Gihundwe": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Gitambi": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Muganza": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Mururu": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Nkanka": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Nkombo": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Nkungu": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Nyakabuye": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Nyakarenzo": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Nzahaha": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"],
                "Rwimbogo": ["Bugarama", "Butare", "Gashonga", "Giheke", "Gihundwe"]
            },
            "Rutsiro": {
                "Boneza": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Gihango": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Kigeyo": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Kivumu": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Manihira": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Mukura": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Murunda": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Musasa": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Mushonyi": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Mushubati": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Nyabirasi": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Ruhango": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"],
                "Rwankuba": ["Boneza", "Gihango", "Kigeyo", "Kivumu", "Manihira"]
            }
        }
    }

                // Populate provinces dropdown
                for (let province in locationData) {
                    $('#province').append(`<option value="${province}">${province}</option>`);
                }
            
                // Update district dropdown based on province selection
                $('#province').change(function () {
                    const selectedProvince = $(this).val();
                    $('#district').empty().append('<option value="">Select District</option>');
                    $('#sector').empty().append('<option value="">Select Sector</option>');
                    $('#cell').empty().append('<option value="">Select Cell</option>');
                    $('#village').empty().append('<option value="">Select Village</option>');
                    if (selectedProvince) {
                        for (let district in locationData[selectedProvince]) {
                            $('#district').append(`<option value="${district}">${district}</option>`);
                        }
                    }
                });
            
                // Update sector dropdown based on district selection
                $('#district').change(function () {
                    const selectedProvince = $('#province').val();
                    const selectedDistrict = $(this).val();
                    $('#sector').empty().append('<option value="">Select Sector</option>');
                    $('#cell').empty().append('<option value="">Select Cell</option>');
                    $('#village').empty().append('<option value="">Select Village</option>');
                    if (selectedDistrict) {
                        for (let sector in locationData[selectedProvince][selectedDistrict]) {
                            $('#sector').append(`<option value="${sector}">${sector}</option>`);
                        }
                    }
                });
            
                // Update cell dropdown based on sector selection
                $('#sector').change(function () {
                    const selectedProvince = $('#province').val();
                    const selectedDistrict = $('#district').val();
                    const selectedSector = $(this).val();
                    $('#cell').empty().append('<option value="">Select Cell</option>');
                    if (selectedSector) {
                        const cells = locationData[selectedProvince][selectedDistrict][selectedSector];
                        cells.forEach(cell => {
                            $('#cell').append(`<option value="${cell}">${cell}</option>`);
                        });
                    }
                });
            
              
            </script>
        </div> 
        
        <style>
            .form-group {
                margin-bottom: 15px; /* Space between form groups */
            }
        
            .form-control,
            .form-control-file,
            textarea {
                border: 1px solid #ccc; /* Add a border to inputs and textareas */
                border-radius: 4px; /* Rounded corners for inputs */
                padding: 10px; /* Padding inside inputs */
                width: 100%; /* Full width */
                box-sizing: border-box; /* Include padding and border in width */
            }
         
        
            .flexy {
                display: flex; /* Use flexbox for layout */
                flex-wrap: wrap; /* Allow wrapping */
            }
        
            .flexy .form-group {
                 flex: 1;/* Allow form groups to grow */
                min-width: 200px; /* Minimum width for each form group */
                margin-right: 10px; /* Space between form groups */
            }
        
            .flexy .form-group:last-child {
                margin-right: 0; /* Remove right margin for the last item */
            }
        
            .drop-zone {
                border: 2px dashed #ddd;
                border-radius: 8px; /* Rounded corners */
                padding: 20px;
                text-align: center;
                cursor: pointer;
                background-color: #f9f9f9; /* Light background for contrast */
                transition: border-color 0.3s, background-color 0.3s;
            }
        
            .drop-zone.drag-over {
                border-color: #333;
                background-color: #e9e9e9; /* Slightly darker background on drag over */
            }
        
            .drop-zone:hover {
                background-color: #f1f1f1; /* Light hover effect */
            }
        
            .form-navigation {
                display: flex; /* Use flexbox for navigation buttons */
                gap: 20px;
                margin-top: 20px; /* Space above navigation buttons */
            }
        </style>
        
        <script>
          document.getElementById('browseButton').addEventListener('click', function () {
    document.getElementById('mediaUpload').click();
});

const dropZone = document.getElementById('dropZone');
const fileNamesDiv = document.getElementById('fileNames');

dropZone.addEventListener('dragover', function (e) {
    e.preventDefault();
    dropZone.classList.add('drag-over');
});

dropZone.addEventListener('dragleave', function () {
    dropZone.classList.remove('drag-over');
});

dropZone.addEventListener('drop', function (e) {
    e.preventDefault();
    dropZone.classList.remove('drag-over');
    const files = e.dataTransfer.files;
    document.getElementById('mediaUpload').files = files;
    displayFileNames(files);
});

// Allow clicking anywhere in the drop zone to trigger file upload
dropZone.addEventListener('click', function () {
    document.getElementById('mediaUpload').click();
});

// Update file names display when files are selected
document.getElementById('mediaUpload').addEventListener('change', function () {
    const files = this.files;
    displayFileNames(files);
});

// Function to display file names
function displayFileNames(files) {
    fileNamesDiv.innerHTML = ''; // Clear previous file names
    if (files.length > 0) {
        const fileNames = Array.from(files).map(file => file.name).join(', ');
        fileNamesDiv.textContent = `Selected files: ${fileNames}`;
    } else {
        fileNamesDiv.textContent = ''; // Clear if no files
    }
}

        </script>
        
     </section>
     
     
    

 <style>

    .backgroundz{
        background-color: rgba(176, 176, 176, 0.212);
    }
    .content{
        width: 100%; 
        margin-top: -50px;
        display: flex;
        padding: 50px; 
    }
    .sidenav{
        width: 25%;  
        border-right: solid 1px rgba(128, 128, 128, 0.393);
        display: flex;
        flex-direction: column;
        padding: 30px 0px 0px 30px;
        gap: 10px;  
    } 

    .sidenav button {   
        border: none;
        cursor: pointer;
        transition: transform 0.2s, border 0.2s;
        position: relative;
        text-align: left ;
        padding: 3px 10px 3px 25px;
        font-weight: 560; 
        border-radius: 0px;
    }

    .sidenav button:hover {
      transform: translateX(5px);
    }

    .sidenav a.active {
       border-left: 3.5px solid #1F3365;  
    }
    .maincontent{
        width: 75%; 
        padding-left: 35px;
        padding-right: 35px; 
    }
    .step {
            display: none;
        }

        .step.active {
            display: block;
        }
        .form-control { 
            padding: 10px; 
            border-radius: 4px;  
            display: flex;
            flex-direction: column;
        } 
        .flexy{
            display:flex;
            gap: 10px;
        }
        .stepheader {
          display: flex;
          justify-content: space-between; /* Space between items */
          align-items: center; /* Center items vertically */
          margin-bottom: 15px; /* Optional: space below the header */
        }
        .titlez{
            font-weight: 650;
            text-decoration: underline;
            font-size: medium;
            margin-bottom: 10px;
        }  
        @media (max-width: 1024px) {
            .sidenav {
                /* display: none; */
                font-size: 12px;
            }
 
        } 
        @media (max-width: 767px) {
            .sidenav {
                display: none;
                /* font-size: 12px; */
            }

            .content {
                padding: 5px;
                width: 100%; 
                justify-content: center;
            }
            .maincontent{ 
        padding-left: 1px;
        padding-right: 1px; 
    }
        }
 </style>




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
                loadComponent('./components/Nav.html', 'Nav'),
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


    <!-- Toggle functionality -->
    <script>
        $(document).ready(function () {
            $('#toggleButton').on('click', function () {
                $('#toggleContent').toggleClass('showDropDown');
            });
        });
    </script>
</body>
    <!-- footer -->
    <div id="Footer"></div> 
</html>
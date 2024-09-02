<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rwanda National Police</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../addaccidentstyle.css">
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
            <a href="#testimonials" data-step="2"><button>witness statement</button></a>
            <a href="#damage" data-step="3"><button>Damage Report</button></a>
            <a href="#officers" data-step="4"><button>Officers'verdict</button></a>
            <a href="#extra" data-step="5"><button>Extra Info</button></a>
        </div>
        
        
        <div class="maincontent">
            <form id="multiStepForm" action="addprocess.php" method="post" enctype="multipart/form-data">
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
                    
                        <label for="forensic">Upload Forensic Media:</label>
                        <input type="file" name="forensic[]" multiple><br>

                        <!-- <label for="mediaUpload">Upload media</label> 
                        <input type="file" class="form-control-file" id="mediaUpload" 
                        name="forensicmedia" 
                        accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div>  -->
                        <!-- Added div to display file names -->
                    </div>
                    
                    <div class="form-group mt-4">
                        <label for="propertyDamage">Description</label>
                        <textarea class="form-control" id="propertyDamageDesc" name="forensic_desc"></textarea>
                    </div>
                </div>
        
                <!-- Step 3: Testimonials -->
                <div class="step" id="Testimonials">
                    
                    <div class="lower">
                    <h3 class="titlez">Witness Statement</h3>  
                    </div>
                    <h3> <button type="button"
                        class="bg-text-color/10 text-sm font-medium py-2 px-4 rounded-md capitalize float-right"
                        id="add-testimonial">Add statement</button>
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
                                    <label for="vehicle">Road user</label>
                                    <select class="form-control" name="road_user[]">
                                        <option value="">Select user</option>
                                        <option value="Motorist">Motorist</option> 
                                        <option value="Cyclist">Cyclist</option>
                                        <option value="Pedestrian">Pedestrian</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="vehicle">Vehicle</label>
                                    <select class="form-control" name="vehicle[]">
                                        <option value="">Select Vehicle</option>
                                        <option value="none">none</option>
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
                                <!-- <div class="form-group">
                                    <label for="alcoholTest">accident category</label>
                                    <select class="form-control" name="cause[]">
                                        <option value="">Select categoy</option>
                                        <option value="Natural Desaster">Natural Desaster</option>
                                        <option value="Car Problem">Car Problem</option>
                                        <option value="Unknown Reason">Unknown Reason</option> 
                                    </select>
                                </div> -->
                                <div class="form-group">
                                    <label for="vehiclePlate">phone number</label>
                                    <input type="text" class="form-control" name="phone_number[]">
                                </div>
                            </div>
                            <div class="form-group"> 
                        <label for="testimonials">Upload Testimonials:</label>
                        <input type="file" name="testimonials[]" multiple><br>

                                <!-- <label for="mediaUpload">Upload media</label>
                                <input type="file" class="form-control-file" id="mediaUpload" name="individual_media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                                <div class="drop-zone" id="dropZone">
                                    Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                                </div>
                                <div id="fileNames" class="mt-2"></div>  -->
                                <!-- Added div to display file names -->
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
                    </div><div class="form-group">
                        <label for="dead">Property Damaged</label>
                        <input type="number" placeholder="0" class="form-control" id="dead" name="PropertyDamaged">
                    </div>
                    </div> 
                    <div class="form-group"> 
                    
                        <label for="damage_report">Upload Damage Report:</label>
                        <input type="file" name="damage_report[]" multiple><br>

                        <!-- <label for="mediaUpload">Upload media</label>
                        <input type="file" class="form-control-file" id="mediaUpload" name="Damage_media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div> -->
                         <!-- Added div to display file names -->
                    </div>
                    <div class="form-group">
                        <label for="propertyDamage">Damaged report</label> 
                        <textarea class="form-control" id="propertyDamageDesc" name="damage_desc"></textarea>
                    </div>
                </div>
        
                <!-- Step 5: Officers' P.O.V. -->
                <div class="step" id="Officers">
                    <h3 class="titlez">Officers Report</h3>
                    <div class="form-group">
                        <label for="officers_pov">Upload Officers' P.O.V.:</label>
                        <input type="file" name="officers_pov[]" multiple><br>
                    </div>
                    <div class="flexy">
                        <div class="form-group">
                            <label for="caseStatus">Case Status</label>
                            <select class="form-control" name="case_status">
                                <option value="ongoing">Ongoing</option>
                                <option value="closed">Closed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="accidentType">Type of Accident</label>
                            <select class="form-control" name="accident_type">
                                <option value="on-road">On-road</option>
                                <option value="off-road">Off-road</option>
                                <option value="side-road">Side-road</option>
                            </select>
                        </div>
                    </div>
                    <div class="flexy">
                    <div class="form-group">
                            <label for="district">suspected  cause of accident</label>
                            <select class="form-control" id="verdict" name="verdict">
                            <option value="">Reckless driving : N° 25/01 ryo ku wa 25/02/2015 (Article One: National driving License)</option>
                            <option value="">Over speeding : N° 25/01 ryo ku wa 25/02/2015 (Article 2: Speed limitation for public and commercial vehicles)</option>
                            <option value="">Auto defects : N° 25/01 ryo ku wa 25/02/2015 (Article 3: Steering apparatus, reversing gear 
                            system and security accessories)</option>
                            <option value="">Drunk driving : N° 25/01 ryo ku wa 25/02/2015 (Article 7: Repealing provision)</option>
                            <option value="">Road conditions:</option>
                            <option value="">Drunk driving : N° 25/01 ryo ku wa 25/02/2015 (Article 7: Repealing provision)</option>
                            <option value="">Distracted driving:</option>
                            <option value="">Fatigue : N° 25/01 ryo ku wa 25/02/2015 (Article One: National driving License)</option>
                            <option value="">Running red lights: N° 25/01 ryo ku wa 25/02/2015 (Article 2: Speed limitation for public and commercial vehicles)</option>
                            <option value="">Traffic signals : N° 25/01 ryo ku wa 25/02/2015 (Article 3: Steering apparatus, reversing gear 
                            system and security accessories)</option>
                            <option value="">Improper turns: N° 25/01 ryo ku wa 25/02/2015 (Article 7: Repealing provision)</option>
                            <option value="">Road maintenance:</option>
                            <option value="">Drugs : N° 25/01 ryo ku wa 25/02/2015 (Article 7: Repealing provision)</option>
                            <option value="">Night driving:</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="officerDescription">Officer Description</label>
                        <textarea class="form-control" id="officerDescription" name="officer_description"></textarea>
                    </div>  
                </div>
        
                <!-- Step 6: extra info. -->
                <div class="step" id="Extra">
                    <h3 class="titlez">extra-info</h3>
                    <div class="form-group">
                        
                        <label for="extra_info">Upload Extra Info:</label>
                        <input type="file" name="extra_info[]" multiple><br>
                        <!-- <label for="mediaUpload">Upload media</label>
                        <input type="file" class="form-control-file" id="mediaUpload" name="media[]" accept="image/*,video/*,audio/*" multiple style="display: none;">
                        <div class="drop-zone" id="dropZone">
                            Drag & Drop Images Here or <button type="button" id="browseButton">Browse</button>
                        </div>
                        <div id="fileNames" class="mt-2"></div>  -->
                        <!-- Added div to display file names -->
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
                                     <div class="form-group">
                                    <label for="alcoholTest">accident category</label>
                                    <select class="form-control" name="cause[]">
                                        <option value="">Select categoy</option>
                                        <option value="Natural Desaster">Natural Desaster</option>
                                        <option value="Car Problem">Car Problem</option>
                                        <option value="Unknown Reason">Unknown Reason</option> 
                                    </select>
                                   </div>
                                </div>
                                <div class="form-group">
                                    <label for="mediaUpload">Upload media</label>
                                    <input type="file" class="form-control-file" name="media[]" accept="image/*,video/*,audio/*" multiple>
                                </div>
                
                                <div class="form-group">
                                    <label for="propertyDamage">Description</label>
                                    <textarea class="form-control" name="indiviaul_desc[]"></textarea>
                                </div>
                            </div>`;
                            $('#testimonial-section').append(testimonialHTML);
                        });
                    });
                </script>
            <script>
                tinymce.init({
                    // selector: 'textarea',
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
                });// "Gasabo": {
            //     "Bumbogo": ["Kibenga", "Kinyaga", "Kinyana", "Ngara", "Rubungo"],
            //     "Gatsata": ["Bweramvura", "Kadobogo", "Kabuye", "Nyamugari", "Rwesero"],
            //     "Gikomero": ["Bukoro", "Gahengeri", "Kabuye", "Nyagasozi", "Rugarama"],
            //     "Gisozi": ["Kangondo", "Kibiraro", "Nyabisindu", "Nyamabuye", "Rukingu"],
            //     "Jabana": ["Gashenyi", "Jabana", "Murama", "Taba", "Yanza"],
            //     "Jali": ["Gasabo", "Kagugu", "Kamatamu", "Kinyaga", "Rudakabukirwa"],
            //     "Kacyiru": ["Kamatamu", "Kamukina", "Nyarutarama", "Rugando", "Rugunga"],
            //     "Kimihurura": ["Kimihurura", "Kinyinya", "Nyakabanda", "Remera", "Rukingu"],
            //     "Kimironko": ["Bibare", "Kibagabaga", "Nyagatovu", "Nyarutarama", "Rwabushenyi"],
            //     "Kinyinya": ["Gasharu", "Murama", "Nyagatovu", "Nyarutarama", "Tunga"],
            //     "Nduba": ["Bweramvura", "Gasagara", "Kabuye", "Kigabiro", "Murambi"],
            //     "Ndera": ["Bushyogo", "Bweramvura", "Gihogwe", "Murama", "Rutunga"],
            //     "Remera": ["Gikondo", "Kabuga", "Kinyinya", "Nyabisindu", "Rugando"],
            //     "Rusororo": ["Kabuga", "Mwulire", "Nyagahinga", "Nyarugenge", "Rugarama"],
            //     "Rutunga": ["Bumbogo", "Gatsata", "Jabana", "Murambi", "Nyabikenke"]
            // },
             
    // Populate provinces and other location fields
    const locationData = {
    "Kigali": {
        "Gasabo": {
            "Bumbogo": [" "],
            "Gatsata": [""],
            "Gikomero": [""],
            "Gisozi": [""],
            "Jabana": [""],
            "Jali": [""],
            "Kacyiru": [""], 
        },
        "Kicukiro": {
            "Gikondo": [""],
            "Kagarama": [""],
            "Kicukiro": [""],
            "Nyarugunga": [""],
            "Rwampanga": [""]
        },
        "Nyarugenge": {
            "Gitega": [""],
            "Kimisagara": [""],
            "Kiyovu": [""],
            "Muganza": [""],
            "Nyarugenge": [""],
            "Rugunga": [""]
        }
    },
    "Eastern Province": {
        "Bugesera": {
            "Ngeruka": [""],
            "Nyamata": [""],
            "Mwogo": [""],
            "Gashora": [""]
        },
        "Gatsibo": {
            "Kabarore": [""],
            "Kigabiro": [""],
            "Kiziguro": [""],
            "Murambi": [""]
        },
        "Kayonza": {
            "Kayonza": [""],
            "Murundi": [""],
            "Rukara": [""],
            "Gahini": [""]
        },
        "Ngoma": {
            "Ngoma": [""],
            "Kazo": [""],
            "Rugando": [""],
            "Nyakariro": [""]
        },
        "Rwamagana": {
            "Rwamagana": [""],
            "Muniga": [""],
            "Nyakabanda": [""],
            "Kigabiro": [""]
        }
    },
    "Western Province": {
        "Karongi": {
            "Gishyita": [""],
            "Kibuye": [""],
            "Rubengera": [""],
            "Murambi": [""]
        },
        "Ngororero": {
            "Ngororero": [""],
            "Kageyo": [""],
            "Kibingo": [""],
            "Bwira": [""]
        },
        "Nyamasheke": {
            "Nyamasheke": [""],
            "Kanjongo": [""],
            "Kivumu": [""],
            "Shangi": [""]
        },
        "Rusizi": {
            "Cyangugu": [""],
            "Gihundwe": [""],
            "Mpungu": [""],
            "Nzahaha": [""]
        },
        "Rubavu": {
            "Rubavu": [""],
            "Gisenyi": [""],
            "Nyundo": [""],
            "Kanama": [""]
        }
    },
    "Northern Province": {
        "Burera": {
            "Butaro": [""],
            "Cyeru": [""],
            "Nemba": [""],
            "Kivuye": [""]
        },
        "Gakenke": {
            "Kageyo": [""],
            "Muzo": [""],
            "Nemba": [""],
            "Shingiro": [""]
        },
        "Musanze": {
            "Musanze": [""],
            "Kinigi": [""],
            "Nyange": [""],
            "Gataraga": [""]
        },
        "Rulindo": {
            "Byumba": [""],
            "Mugunga": [""],
            "Ntarama": [""],
            "Rulindo": [""]
        }
    },
    "Southern Province": {
        "Huye": {
            "Huye": [""],
            "Ngoma": [""],
            "Maraba": [""],
            "Rusatira": [""]
        },
        "Kamonyi": {
            "Kamonyi": [""],
            "Gacurabwenge": [""],
            "Runda": [""],
            "Mugina": [""]
        },
        "Muhanga": {
            "Muhanga": [""],
            "Nyamabuye": [""],
            "Shyogwe": [""],
            "Cyeza": [""]
        },
        "Nyanza": {
            "Nyanza": [""],
            "Kibilizi": [""],
            "Muganza": [""],
            "Muganza": [""]
        },
        "Ruhango": {
            "Ruhango": [""],
            "Bweramana": [""],
            "Cyanika": [""],
            "Mbuye": [""]
        }
    }
};


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
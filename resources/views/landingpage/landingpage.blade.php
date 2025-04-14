<!DOCTYPE html>
<html lang="en" class="h-full" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-click"
    data-menu-position="fixed">


<!-- Mirrored from spruko.com/demo/valex/tailwind/dist/html/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 02:14:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fathir - Ujikom </title>
    <meta name="description"
        content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords"
        content="dashboard,admin dashboard,template dashboard,html,html dashboard,admin dashboard template,admin template,tailwind ui,admin panel,html and css,html admin template,tailwind framework,html css javascript,tailwind css dashboard,dashboard html css,admin,template admin panel,dashboard html template">

    <!-- Favicon -->
    <link rel="icon" href="https://spruko.com/demo/valex/tailwind/dist/assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Style Css -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Simplebar Css -->
    <link id="style" href="../assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="../assets/libs/%40simonwep/pickr/themes/nano.min.css">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="../assets/libs/swiper/swiper-bundle.min.css">

</head>


<body class="landing-body">

    <!-- ========== Switcher  ========== -->
    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header">
            <h5 class="ti-offcanvas-title">
                Switcher
            </h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0 transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div>
                <div>
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 gap-x-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-xs text-defaulttextcolor dark:text-defaulttextcolor/70 font-semibold ltr:ml-2 rtl:mr-2 ">Light</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-xs text-defaulttextcolor dark:text-defaulttextcolor/70 font-semibold ltr:ml-2 rtl:mr-2 ">Dark</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 gap-x-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-xs font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 ltr:ml-2 rtl:mr-2 ">LTR</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-xs font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 ltr:ml-2 rtl:mr-2 ">RTL</label>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
                                id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
                                id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary"
                                id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary"
                                id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary"
                                id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ltr:pl-0 rtl:pr-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Reset:</p>
                    <div class="flex justify-center">
                        <a id="reset-all" class="ti-btn ti-btn-danger-full mt-4" href="javascript:void(0);">Reset</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== END Switcher  ========== -->

    <div class="landing-page-wrapper relative">

        <!-- Start::Header -->
         <header class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="index.html" class="header-logo">
                            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                            <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link">
                        <span class="open-toggle">
                            <i class="ri-menu-3-line text-xl"></i>
                        </span>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">

                <!-- Start::header-element -->
                <div class="header-element !items-center">
                    <!-- Start::header-link|switcher-icon -->
                    <div class="lg:hidden block">
                        <a href="sign-up-basic.html" class="ti-btn ti-btn-primary !m-0">
                            
                        </a>
                        <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-success"
                        data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-3-line animate-spin-slow"></i></a>
                    </div>
                    <!-- End::header-link|switcher-icon -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

        </header>
       <!-- End::Header -->

        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky !top-0" id="sidebar">
            <div class="container-xl !p-0">
                <!-- Start::main-sidebar -->
                <div class="main-sidebar">
                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <!-- <div class="landing-logo-container my-auto hidden lg:block">
                            <div class="responsive-logo"> -->

                                <!-- <a class="responsive-logo-light" href="index.html" aria-label="Brand"><img
                                        src="../assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="mx-auto h-[2rem]"></a> -->
                                <!-- <a class="responsive-logo-dark" href="index.html" aria-label="Brand"><img
                                        src="../assets/images/brand-logos/desktop-white.png" alt="logo"
                                        class="mx-auto h-[2rem]"></a> -->
                            <!-- </div>
                        </div> -->
                        kjwidjiwjdi
                        <div class="slide-left hidden" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg></div>
                        <ul class="main-menu">
                            <!-- Start::slide -->
                            <li class="slide">
                                <a class="side-menu__item" href="#home">
                                    <span class="side-menu__label">Home</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                             <!-- Start::slide -->
                             <!-- <li class="slide">
                                <a href="#features" class="side-menu__item">
                                    <span class="side-menu__label">Features</span>
                                </a>
                            </li> -->
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <!-- <li class="slide">
                                <a href="#about" class="side-menu__item">
                                    <span class="side-menu__label">About</span>
                                </a>
                            </li> -->
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <!-- <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <span class="side-menu__label me-2">More</span>
                                    <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide">
                                        <a href="#statistics" class="side-menu__item">Statistics</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#our-mission" class="side-menu__item">Our Mission</a>
                                    </li>
                                    <li class="slide">
                                        <a href="#testimonials" class="side-menu__item">Testimonials</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Level-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Level-2-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Level-2-2-1</a>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Level-2-2-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <!-- <li class="slide">
                                <a href="#pricing" class="side-menu__item">
                                    <span class="side-menu__label">Pricing</span>
                                </a>
                            </li> -->
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#testimonials" class="side-menu__item">
                                    <span class="side-menu__label">Clients</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#faq" class="side-menu__item">
                                    <span class="side-menu__label">Faq's</span>
                                </a>
                            </li>
                            <!-- End::slide -->
                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="#contact" class="side-menu__item">
                                    <span class="side-menu__label">Contact</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right hidden" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                        <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                          <a href="{{'login'}}" class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Login</a>
                          <a aria-label="anchor" href="javascript:void(0);" class="ti-btn m-0 p-2 px-3 ti-btn-light !font-medium"
                            data-hs-overlay="#hs-overlay-switcher"><i class="ri-settings-3-line animate-spin-slow"></i></a>
                        </div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->
            </div>
        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::main-content -->
        <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70">
            <!-- Start::Home Content -->
            <div class="landing-banner" id="home">
                <section class="section !pt-[6rem]">
                    <div class="container main-banner-container !pt-3 sm:!pt-[6rem]">
                        <div class="grid grid-cols-12 gap-x-6">
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-1"></div>
                            <div class="xxl:col-span-8 xl:col-span-8 lg:col-span-8 md:col-span-8 col-span-10">
                                <div class="py-4 pb-lg-0 text-center">
                                    <div class="mb-3">
                                        <h5 class="font-semibold text-fixed-white op-9">SELAMAT DATANG</h5>
                                    </div>
                                    <p class="landing-banner-heading mb-3 cursor-default">{{ optional($setting)->nama_sekolah}}</p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7"> Valex - Now you can use this admin
                                        template to design stunning dashboards that will wow your target viewers or
                                        users to no end. To create a good and well-structured dashboard, you need to
                                        start from scratch with HTML, SCSS, CSS, and JS and with lots of coding, but by
                                        using this Valex-Admin template.</div>
                                    <a href="index.html" class="m-1 ti-btn ti-btn-primary-full">
                                        Discover More
                                        <i class="fe fe-eye ms-2 align-middle"></i>
                                    </a>
                                    <a href="{{'admin'}}" class="m-1 ti-btn ti-btn-info-full">
                                        Admin
                                        <i class="fe fe-arrow-right rtl:rotate-180 ms-2 rtl:ms-0 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="xxl:col-span-2 xl:col-span-2 lg:col-span-2 md:col-span-2 col-span-1"></div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End::Home Content -->

            <!-- Start:: Section-2 -->
            <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70  section-bg " id="features">
                <div class="container text-center position-relative">
                    <p class="text-[0.75rem] font-semibold text-success mb-1">
                        <span class="landing-section-heading">Features</span>
                    </p>
                    <div class="landing-title"></div>
                    <h3 class="font-semibold mb-2">Valex Main Features</h3>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-textmuted fs-15 mb-5 font-normal">We are proud to have top class clients and
                                customers,which motivates us to work more on projects.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6 justify-center">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="grid grid-cols-12 gap-x-6 justify-evenly">
                                <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 mb-4">
                                    <div class="card rounded-sm bg-white dark:bg-bodybg features main-features main-features-4 p-6 active"
                                        data-wow-delay="0.1s">
                                        <div class="bg-img mb-2">
                                            <svg width="50" class="inline-flex" height="50"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="64" fill="#42A3DB"></circle>
                                                <path fill="#347CBE"
                                                    d="M85.5 26.6 66.1 61 33.3 98.6 62.6 128H64c33.7 0 61.3-26 63.8-59.1L85.5 26.6z">
                                                </path>
                                                <path fill="#CD2F30"
                                                    d="M73.1 57.7h-16c3.6 18.7 11.1 36.6 22.1 52.5.3-5 1-9.8 1.8-14.5 4.6 1.3 9.2 2.3 13.7 3-9.7-12.2-17-26.1-21.6-41z">
                                                </path>
                                                <path fill="#F04D45"
                                                    d="M54.9 57.7c-4.6 15-11.9 28.9-21.6 40.9 4.5-.7 9.1-1.7 13.7-3 .9 4.7 1.5 9.5 1.8 14.5 11-15.9 18.4-33.8 22.1-52.5h-16z">
                                                </path>
                                                <path fill="#FFF"
                                                    d="M93.5 52c1.8-1.8 1.8-4.7 0-6.5-1.3-1.3-1.7-3.3-1-5 1-2.4-.1-5-2.5-6-1.7-.7-2.8-2.4-2.8-4.3 0-2.5-2.1-4.6-4.6-4.6-1.9 0-3.5-1.1-4.3-2.8-1-2.4-3.7-3.5-6-2.5-1.7.7-3.7.3-5-1-1.8-1.8-4.7-1.8-6.5 0-1.3 1.3-3.3 1.7-5 1-2.4-1-5 .1-6 2.5-.7 1.7-2.4 2.8-4.3 2.8-2.5 0-4.6 2.1-4.6 4.6 0 1.9-1.1 3.5-2.8 4.3-2.4 1-3.5 3.7-2.5 6 .7 1.7.3 3.7-1 5-1.8 1.8-1.8 4.7 0 6.5 1.3 1.3 1.7 3.3 1 5-1 2.4.1 5 2.5 6 1.7.7 2.8 2.4 2.8 4.3 0 2.5 2.1 4.6 4.6 4.6 1.9 0 3.5 1.1 4.3 2.8 1 2.4 3.7 3.5 6 2.5 1.7-.7 3.7-.3 5 1 1.8 1.8 4.7 1.8 6.5 0 1.3-1.3 3.3-1.7 5-1 2.4 1 5-.1 6-2.5.7-1.7 2.4-2.8 4.3-2.8 2.5 0 4.6-2.1 4.6-4.6 0-1.9 1.1-3.5 2.8-4.3 2.4-1 3.5-3.7 2.5-6-.7-1.7-.3-3.7 1-5z">
                                                </path>
                                                <path fill="#FFCD0A"
                                                    d="M64 70.8c-12.2 0-22.1-9.9-22.1-22.1 0-12.2 9.9-22.1 22.1-22.1 12.2 0 22.1 9.9 22.1 22.1 0 12.2-9.9 22.1-22.1 22.1z">
                                                </path>
                                                <path fill="#FFF"
                                                    d="M59.9 61c-.6 0-1.1-.2-1.5-.7l-8.3-9.2c-.7-.8-.7-2.1.1-2.8.8-.7 2.1-.7 2.8.1l6.7 7.5 15.1-18.8c.7-.9 2-1 2.8-.3.9.7 1 2 .3 2.8L61.4 60.2c-.3.5-.9.8-1.5.8z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-bold">Quality &amp; Clean Code</h5>
                                            <p class="mb-0">The Valex admin code is maintained very cleanly and
                                                well-structured with proper comments. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 mb-4">
                                    <div
                                        class="card rounded-sm bg-white dark:bg-bodybg features main-features main-features-2 wow p-6">
                                        <div class="bg-img mb-2">
                                            <svg width="50" class="inline-flex" height="50"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                                viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="63.5" fill="#54C0EB"></circle>
                                                <path fill="#84DBFF"
                                                    d="M19.2,109c11.5,11.4,27.3,18.5,44.8,18.5c17.5,0,33.3-7.1,44.8-18.5H19.2z">
                                                </path>
                                                <rect width="19.6" height="10.4" x="54.2" y="92.7" fill="#FFF"></rect>
                                                <rect width="19.6" height="2.3" x="54.2" y="92.7" fill="#E6E9EE"></rect>
                                                <path fill="#E6E9EE"
                                                    d="M82.2,109H45.8l0,0c0-3.3,2.7-6,6-6h24.4C79.5,103.1,82.2,105.7,82.2,109L82.2,109z">
                                                </path>
                                                <path fill="#324A5E"
                                                    d="M103,92.7H25c-2.4,0-4.4-2-4.4-4.4V34.7c0-2.4,2-4.4,4.4-4.4h78c2.4,0,4.4,2,4.4,4.4v53.7   C107.4,90.7,105.4,92.7,103,92.7z">
                                                </path>
                                                <path fill="#FFF"
                                                    d="M20.6,84v4.4c0,2.4,1.9,4.3,4.3,4.3H103c2.4,0,4.3-1.9,4.3-4.3V84H20.6z">
                                                </path>
                                                <rect width="80.3" height="46.9" x="23.9" y="33.4" fill="#FFF"></rect>
                                                <circle cx="100.3" cy="88.3" r="2" fill="#FF7058"></circle>
                                                <circle cx="94.7" cy="88.3" r="2" fill="#4CDBC4"></circle>
                                                <circle cx="89.1" cy="88.3" r="2" fill="#54C0EB"></circle>
                                                <rect width="9.7" height="27.7" x="32.3" y="46.7" fill="#ACB3BA"></rect>
                                                <rect width="9.7" height="15.8" x="45.7" y="58.7" fill="#4CDBC4"></rect>
                                                <rect width="9.7" height="23.1" x="59.1" y="51.3" fill="#FFD05B"></rect>
                                                <rect width="9.7" height="35.7" x="72.6" y="38.7" fill="#84DBFF"></rect>
                                                <rect width="9.7" height="8.1" x="86" y="66.3" fill="#FF7058"></rect>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-bold">Multiple Demos</h5>
                                            <p class="mb-0"> We included multiple demos, preview video, and screen shots
                                                to give a quick overview of our Valex admin template.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 mb-4">
                                    <div
                                        class="card rounded-sm bg-white dark:bg-bodybg features main-features main-features-3 wow p-6">
                                        <div class="bg-img mb-2">
                                            <svg width="50" class="inline-flex" height="50"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                                viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="63.5" fill="#54C0EB"></circle>
                                                <path fill="#FFF"
                                                    d="M42.2,96H23.6c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C45.1,94.7,43.8,96,42.2,96z">
                                                </path>
                                                <rect width="18.7" height="36.8" x="23.6" y="35.8" fill="#4CDBC4">
                                                </rect>
                                                <circle cx="32.9" cy="83.9" r="7.2" fill="#E6E9EE"></circle>
                                                <circle cx="32.9" cy="83.9" r="5" fill="#324A5E"></circle>
                                                <path fill="#FFF"
                                                    d="M68.8,96H50.2c-1.6,0-2.8-1.3-2.8-2.8V34.8c0-1.6,1.3-2.8,2.8-2.8h18.6c1.6,0,2.8,1.3,2.8,2.8v58.3   C71.6,94.7,70.4,96,68.8,96z">
                                                </path>
                                                <rect width="18.7" height="36.8" x="50.1" y="35.8" fill="#FF7058">
                                                </rect>
                                                <circle cx="59.5" cy="83.9" r="7.2" fill="#E6E9EE"></circle>
                                                <circle cx="59.5" cy="83.9" r="5" fill="#324A5E"></circle>
                                                <path fill="#FFF"
                                                    d="M109,92.7l-18,4.6c-1.5,0.4-3.1-0.5-3.5-2.1L73.2,38.7c-0.4-1.5,0.5-3.1,2.1-3.5l18-4.6   c1.5-0.4,3.1,0.5,3.5,2.1l14.3,56.5C111.5,90.8,110.6,92.4,109,92.7z">
                                                </path>
                                                <rect width="18.7" height="36.8" x="80.4" y="36.1" fill="#FFD05B"
                                                    transform="rotate(-14.193 89.778 54.551)"></rect>
                                                <circle cx="97" cy="83.2" r="7.2" fill="#E6E9EE"></circle>
                                                <circle cx="97" cy="83.2" r="5" fill="#324A5E"></circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-bold">Widgets</h5>
                                            <p class="mb-0"> 30+ widgets are included in this template. Please check out
                                                the best option that suits you. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-6 col-span-12 mb-4">
                                    <div
                                        class="card rounded-sm bg-white dark:bg-bodybg features main-features main-features-4 wow fadeInUp reveal revealleft p-6">
                                        <div class="bg-img mb-2">
                                            <svg width="50" class="inline-flex" height="50"
                                                xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 128 128"
                                                viewBox="0 0 128 128">
                                                <circle cx="64" cy="64" r="63.5" fill="#FFD05B"></circle>
                                                <path fill="#FFF"
                                                    d="M30,103.8l0-79.7c0-1.8,1.5-3.3,3.3-3.3h50.1l0,11.4c0,1.8,1.5,3.3,3.3,3.3H98l0,68.3   c0,1.8-1.5,3.3-3.3,3.3H33.3C31.5,107.1,30,105.6,30,103.8z">
                                                </path>
                                                <path fill="#E6E9EE"
                                                    d="M83.3,20.9h11.4c1.8,0,3.3,1.5,3.3,3.3l0,11.4H86.6c-1.8,0-3.3-1.5-3.3-3.3L83.3,20.9z">
                                                </path>
                                                <path fill="#CED5E0"
                                                    d="M83.3,20.9h11.4c1.8,0,3.3,1.5,3.3,3.3l0,11.4L83.3,20.9z"></path>
                                                <rect width="54.6" height="2.4" x="36.7" y="50.7" fill="#E6E9EE"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="58.2" fill="#E6E9EE"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="65.8" fill="#E6E9EE"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="73.4" fill="#E6E9EE"></rect>
                                                <rect width="23.5" height="2.4" x="67.8" y="80.9" fill="#84DBFF"></rect>
                                                <rect width="23.5" height="2.4" x="67.8" y="88.5" fill="#84DBFF"></rect>
                                                <rect width="54.6" height="2.4" x="36.7" y="43.1" fill="#E6E9EE"></rect>
                                                <rect width="29.6" height="2.4" x="36.7" y="35.6" fill="#84DBFF"></rect>
                                                <path fill="#FF7058"
                                                    d="M41.1,83.3c-4.4,4.4-4.4,11.5,0,15.9s11.5,4.4,15.9,0c4.4-4.4,4.4-11.5,0-15.9   C52.6,78.9,45.5,78.9,41.1,83.3z M41.9,84.1c3.4-3.4,8.7-3.8,12.6-1.3l-1.6,1.6c-3-1.7-6.9-1.3-9.5,1.2c-2.6,2.6-3,6.5-1.2,9.5   l-1.6,1.6C38.1,92.8,38.5,87.5,41.9,84.1z M43.1,94.3c-1.3-2.5-0.9-5.7,1.2-7.7c2.1-2.1,5.2-2.5,7.7-1.2L43.1,94.3z M54.9,88.2   c1.3,2.5,0.9,5.7-1.2,7.7c-2.1,2.1-5.2,2.5-7.7,1.2L54.9,88.2z M56.1,98.3c-3.4,3.4-8.7,3.8-12.6,1.3l1.6-1.6   c3,1.7,6.9,1.3,9.5-1.2c2.6-2.6,3-6.5,1.2-9.5l1.6-1.6C60,89.6,59.5,94.9,56.1,98.3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h5 class="font-bold">Validation Forms</h5>
                                            <p class="mb-0"> Different types of “Form Validation” are implemented in
                                                this Valex admin template and used strict validation rules. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-5 -->
            <section class="section landing-Features text-defaulttextcolor dark:text-defaulttextcolor/70 "
                id="features">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                            class="landing-section-heading">Features</span></p>
                    <h3 class="font-semibold mb-2 !text-white">Features Used in Valex</h3>
                    <div>
                        <div class="xl:col-span-7 col-span-12">
                            <p class="text-white opacity-[0.8] text-[0.9375rem] mb-4 font-normal">Some of the reviews
                                our clients gave which brings motivation to work for future projects.</p>
                        </div>
                    </div>
                    <div class="text-start">
                        <div class="justify-center">
                            <div class="">
                                <div class="feature-logos sm:mt-[3rem] flex-wrap">
                                    <div class="sm:ms-[3rem] ms-2 text-center">
                                        <img src="../assets/images/media/landing/web/1.png" alt="image"
                                            class="featur-icon">
                                        <h5 class="mt-3 text-white text-[1.25rem] ">Tailwind</h5>
                                    </div>
                                    <div class="sm:ms-[3rem] ms-2 text-center">
                                        <img src="../assets/images/media/landing/web/2.png" alt="image"
                                            class="featur-icon">
                                        <h5 class="mt-3 text-white text-[1.25rem] ">HTML5</h5>
                                    </div>
                                    <div class="sm:ms-[3rem] ms-2 text-center">
                                        <img src="../assets/images/media/landing/web/3.png" alt="image"
                                            class="featur-icon">
                                        <h5 class="mt-3 text-white text-[1.25rem] ">Sass</h5>
                                    </div>
                                    <div class="sm:ms-[3rem] ms-2 text-center">
                                        <img src="../assets/images/media/landing/web/4.png" alt="image"
                                            class="featur-icon">
                                        <h5 class="ms-3 text-white text-[1.25rem] ">Gulp</h5>
                                    </div>
                                    <div class="sm:ms-[3rem] ms-2 text-center">
                                        <img src="../assets/images/media/landing/web/5.png" alt="image"
                                            class="featur-icon">
                                        <h5 class="ms-3 text-white text-[1.25rem] ">NPM</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-3 -->
            <section class="section bg-white dark:bg-bodybg text-defaulttextcolor dark:text-defaulttextcolor/70 "
                id="about">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span class="landing-section-heading">Our
                            Mission</span>
                    </p>
                    <div class="landing-title"></div>
                    <h3 class="font-semibold mb-2"> Our mission is to make work meaningful. </h3>
                    <p class="text-textmuted fs-15 mb-3 font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Ut est dui, rutrum in nulla eu,</p>
                    <div class="grid grid-cols-12 justify-center items-center mx-0">
                        <div class="xxl:col-span-5 xl:col-span-5 lg:col-span-5 col-span-12 text-center">
                            <img src="../assets/images/authentication/9.png" alt="" class="img-fluid inline-flex">
                        </div>
                        <div
                            class="xxl:col-span-7 xl:col-span-7 lg:col-span-7 col-span-12 pt-5 pb-0 px-lg-2 px-5 text-start">
                            <h4 class="text-lg-start font-medium mb-4">We are a creative agency with a passion for
                                design. </h4>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-12">
                                    <div class="flex mb-2">
                                        <span>
                                            <i class='bx bxs-badge-check text-primary text-[1.125rem]'></i>
                                        </span>
                                        <div class="ms-2">
                                            <h6 class="font-medium mb-0">Quality & Clean Code </h6>
                                            <p class=" text-textmuted mb-3"> The Valex admin code is maintained very
                                                cleanly and well-structured with proper comments. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-12">
                                    <div class="flex mb-2">
                                        <span>
                                            <i class='bx bxs-badge-check text-primary text-[1.125rem]'></i>
                                        </span>
                                        <div class="ms-2">
                                            <h6 class="font-medium mb-0">Well Documented</h6>
                                            <p class=" text-textmuted mb-3"> The documentation provides clear-cut
                                                material for the Valex admin template. The documentation is explained or
                                                instructed in such a way that every user can understand. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 md:col-span-12">
                                    <div class="flex mb-2">
                                        <span>
                                            <i class='bx bxs-badge-check text-primary text-[1.125rem]'></i>
                                        </span>
                                        <div class="ms-2">
                                            <h6 class="font-medium mb-0">Switch Easily From One Color to Another Color
                                                style</h6>
                                            <p class=" text-textmuted">lorem ipsum, dolor sit var ameto condesetrat
                                                aiatel varen or damsenlel verman code Lorem ipsum, dolor sit amet
                                                consectetur </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-3 -->

            <section
                class="section  dark:!bg-black/10 section-bg text-defaulttextcolor dark:text-defaulttextcolor/70"
                id="statistics">
                <div class="container text-center position-relative">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                            class="landing-section-heading">STATISTICS</span></p>
                    <h3 class="font-semibold mb-2 text-defaulttextcolor dark:text-defaulttextcolor/70 ">More than 120+
                        projects completed.</h3>
                    <div class="">
                        <div class="xl:col-span-7 col-span-12">
                            <p class="text-[#8c9097] text-[0.9375rem] mb-5 font-normal">We are proud to have top class
                                clients and customers,which motivates us to work more on projects.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6 container">
                        <div class="xl:col-span-1"></div>
                        <div class="xl:col-span-2 lg:col-span-4 md:col-span-6 sm:col-span-12 col-span-12 mb-3">
                            <div
                                class="p-4 text-center !rounded-sm bg-white dark:bg-bodybg border dark:border-defaultborder/10">
                                <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                    <i class='text-[1.5rem] bx bx-spreadsheet'></i>
                                </span>
                                <h3 class="font-semibold mb-0 text-dark">120+</h3>
                                <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] ">
                                    Projects
                                </p>
                            </div>
                        </div>
                        <div class="xl:col-span-2 lg:col-span-4 md:col-span-6 sm:col-span-12 col-span-12 mb-3">
                            <div
                                class="p-4 text-center !rounded-sm !bg-white dark:!bg-bodybg border dark:border-defaultborder/10">
                                <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                    <i class='text-[1.5rem] bx bx-user-plus'></i>
                                </span>
                                <h3 class="font-semibold mb-0 text-dark">20K+</h3>
                                <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] ">
                                    Clients
                                </p>
                            </div>
                        </div>
                        <div class="xl:col-span-2 lg:col-span-4 md:col-span-6 sm:col-span-12 col-span-12 mb-3">
                            <div
                                class="p-4 text-center !rounded-sm !bg-white dark:!bg-bodybg border dark:border-defaultborder/10">
                                <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                    <i class='text-[1.5rem] bx bx-money'></i>
                                </span>
                                <h3 class="font-semibold mb-0 text-dark">$45.8M</h3>
                                <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] ">
                                    Income Earned
                                </p>
                            </div>
                        </div>
                        <div class="xl:col-span-2 lg:col-span-4 md:col-span-6 sm:col-span-12 col-span-12 mb-3">
                            <div
                                class="p-4 text-center !rounded-sm !bg-white dark:!bg-bodybg  border dark:border-defaultborder/10">
                                <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                    <i class='text-[1.5rem] bx bx-user-circle'></i>
                                </span>
                                <h3 class="font-semibold mb-0 text-dark">854</h3>
                                <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] ">
                                    Employees
                                </p>
                            </div>
                        </div>
                        <div class="xl:col-span-2 lg:col-span-4 md:col-span-6 sm:col-span-12 col-span-12 mb-3">
                            <div
                                class="p-4 text-center !rounded-sm bg-white dark:!bg-bodybg  border dark:border-defaultborder/10">
                                <span class="mb-4 avatar avatar-lg avatar-rounded bg-primary/10 !text-primary">
                                    <i class='text-[1.5rem] bx bx-calendar'></i>
                                </span>
                                <h3 class="font-semibold mb-0 text-dark">5+</h3>
                                <p class="mb-1 text-[0.875rem] opacity-[0.7] text-[#8c9097] ">
                                    Years of Experience
                                </p>
                            </div>
                        </div>
                        <div class="xl:col-span-1"></div>
                    </div>
                </div>
            </section>


            <!-- Start:: Section-8 -->
            <section class="section bg-white dark:bg-bodybg text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem] " id="pricing">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                            class="landing-section-heading">PRICING</span></p>
                    <h3 class="font-semibold mb-2">valex comes with most affordable pricing range.</h3>
                    <div class="row justify-center">
                        <div class="col-xl-9">
                            <p class="text-[#8c9097] text-[0.9375rem] mb-5 font-normal">Our plans are most affordable
                                and are mainly placed by focussing every category in the sector even basic plan helps
                                better.</p>
                        </div>
                    </div>
                    <div class="flex justify-center mb-4">
                        <nav class="bg-primary/10 p-4 rounded-md" aria-label="Tabs" role="tablist">
                            <a class="hs-tab-active:bg-primary hs-tab-active:text-white text-primary py-2 px-4  text-sm font-medium text-center rounded-sm hover:text-primary active"
                                id="pm-item" data-hs-tab="#pricing-monthly-pane" aria-controls="pricing-monthly-pane">
                                Monthly
                            </a>
                            <a class="hs-tab-active:bg-primary hs-tab-active:text-white text-primary py-2 px-4 text-sm font-medium text-center  rounded-sm hover:text-primary "
                                id="py-item" data-hs-tab="#pricing-yearly-pane" aria-controls="pricing-yearly-pane">
                                Yearly
                            </a>
                        </nav>
                    </div>
                    <div class="box overflow-hidden !shadow-none justify-center">
                        <div class="box-body !border-0 !p-0">
                            <div class="tab-content !border-0" id="myTabContent">
                                <div class="tab-pane !border-0 show active !p-0 dark:!border-defaultborder/10"
                                    id="pricing-monthly-pane" aria-labelledby="pm-item" role="tabpanel"
                                    aria-labelledby="pricing-monthly" tabindex="0">
                                    <div class="grid grid-cols-12 justify-center">
                                        <div
                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 border-e  dark:border-e-defaultborder/10">
                                            <div class="p-4">
                                                <h6 class="font-semibold text-center text-[1rem]">BASIC</h6>
                                                <div class="py-4 flex items-center justify-center">
                                                    <div class="pricing-svg1">
                                                        <i class="bi bi-tags"></i>
                                                    </div>
                                                    <div class="text-end ms-[3rem]">
                                                        <p class="text-[1.5625rem] font-semibold mb-0">$199</p>
                                                        <p class="text-[#8c9097] text-[0.6875rem] font-semibold mb-0">
                                                            per month</p>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Storage Capacity<span
                                                                class="badge bg-light text-default ms-1">1Tb</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Daily Updates<span
                                                                class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Online Support</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Visitors Monitoring<span
                                                                class="badge bg-light text-default ms-1">24/7</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">2 Free Domains</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Money Back Guarentee</span>
                                                    </li>
                                                </ul>
                                                <div class="grid">
                                                    <button class="ti-btn ti-btn-primary !font-[500]">Get
                                                        Started</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 border-e dark:border-e-defaultborder/10-e  dark:border-defaultborder/10">
                                            <div class="p-4">
                                                <h6 class="font-semibold text-center text-[1rem]">ADVANCED</h6>
                                                <div class="py-4 flex items-center justify-center">
                                                    <div class="pricing-svg1">
                                                        <i class="bi bi-hand-thumbs-up"></i> 
                                                    </div>
                                                    <div class="text-end ms-[3rem]">
                                                        <p class="text-[1.5625rem] font-semibold mb-0">$499</p>
                                                        <p class="text-[#8c9097] text-[0.6875rem] font-semibold mb-0">
                                                            per month</p>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Storage Capacity<span
                                                                class="badge bg-light text-default ms-1">5Tb</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Daily Updates<span
                                                                class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Online Support</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Visitors Monitoring<span
                                                                class="badge bg-light text-default ms-1">24/7</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">10 Free Domains</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Money Back Guarentee</span>
                                                    </li>
                                                </ul>
                                                <div class="grid">
                                                    <button class="ti-btn ti-btn-primary !font-[500]">Get
                                                        Started</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                                            <div class="p-4 pricing-offer overflow-hidden">
                                                <span class="pricing-offer-details shadow">
                                                    <span class="font-semibold">10%</span> <span
                                                        class="text-[0.625rem] op-8 ms-1">Off</span>
                                                </span>
                                                <h6 class="font-semibold text-center text-[1rem]">PREMIUM</h6>
                                                <div class="py-4 flex items-center justify-center">
                                                    <div class="pricing-svg1">
                                                        <i class="bi bi-gem"></i> 
                                                    </div>
                                                    <div class="text-end ms-[3rem]">
                                                        <p class="text-[1.5625rem] font-semibold mb-0 !text-primary">
                                                            $1,299</p>
                                                        <p class="text-[#8c9097] text-[0.6875rem] font-semibold mb-0">
                                                            per month</p>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Storage Capacity<span
                                                                class="badge bg-light text-default ms-1">10Tb</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Daily Updates<span
                                                                class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Online Support</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Visitors Monitoring<span
                                                                class="badge bg-light text-default ms-1">24/7</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">30 Free Domains</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Money Back Guarentee</span>
                                                    </li>
                                                </ul>
                                                <div class="grid">
                                                    <button class="ti-btn bg-primary text-white !font-[500] shadow">Get
                                                        Started</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane !border-0 !p-0  dark:border-defaultborder/10 hidden"
                                    id="pricing-yearly-pane" aria-labelledby="py-item" role="tabpanel"
                                    aria-labelledby="pricing-yearly" tabindex="0">
                                    <div class="grid grid-cols-12">
                                        <div
                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 border-e dark:border-e-defaultborder/10-end  dark:border-defaultborder/10">
                                            <div class="p-4">
                                                <h6 class="font-semibold text-center text-[1rem]">BASIC</h6>
                                                <div class="py-4 flex items-center justify-center">
                                                    <div class="pricing-svg1">
                                                        <i class="bi bi-tags"></i>
                                                    </div>
                                                    <div class="text-end ms-[3rem]">
                                                        <p class="text-[1.5625rem] font-semibold mb-0">$1,499</p>
                                                        <p class="text-[#8c9097] text-[0.6875rem] font-semibold mb-0">
                                                            per Year</p>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Storage Capacity<span
                                                                class="badge bg-light text-default ms-1">1Tb</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Daily Updates<span
                                                                class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Online Support</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Visitors Monitoring<span
                                                                class="badge bg-light text-default ms-1">24/7</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">2 Free Domains</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Money Back Guarentee</span>
                                                    </li>
                                                </ul>
                                                <div class="grid">
                                                    <button class="ti-btn ti-btn-primary !font-[500]">Get
                                                        Started</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12 border-e dark:border-e-defaultborder/10-end  dark:border-defaultborder/10">
                                            <div class="p-4">
                                                <h6 class="font-semibold text-center text-[1rem]">ADVANCED</h6>
                                                <div class="py-4 flex items-center justify-center">
                                                    <div class="pricing-svg1">
                                                        <i class="bi bi-hand-thumbs-up"></i> 
                                                    </div>
                                                    <div class="text-end ms-[3rem]">
                                                        <p class="text-[1.5625rem] font-semibold mb-0">$5,999</p>
                                                        <p class="text-[#8c9097] text-[0.6875rem] font-semibold mb-0">
                                                            per year</p>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Storage Capacity<span
                                                                class="badge bg-light text-default ms-1">5Tb</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Daily Updates<span
                                                                class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Online Support</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Visitors Monitoring<span
                                                                class="badge bg-light text-default ms-1">24/7</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">10 Free Domains</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Money Back Guarentee</span>
                                                    </li>
                                                </ul>
                                                <div class="grid">
                                                    <button class="ti-btn ti-btn-primary !font-[500]">Get
                                                        Started</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-4 sm:col-span-12 col-span-12">
                                            <div class="p-4 pricing-offer overflow-hidden">
                                                <span class="pricing-offer-details shadow">
                                                    <span class="font-semibold">10%</span> <span
                                                        class="text-[0.625rem] op-8 ms-1">Off</span>
                                                </span>
                                                <h6 class="font-semibold text-center text-[1rem]">PREMIUM</h6>
                                                <div class="py-4 flex items-center justify-center">
                                                    <div class="pricing-svg1">
                                                        <i class="bi bi-gem"></i> 
                                                    </div>
                                                    <div class="text-end ms-[3rem]">
                                                        <p class="text-[1.5625rem] font-semibold mb-0 !text-primary">
                                                            $11,499</p>
                                                        <p class="text-[#8c9097] text-[0.6875rem] font-semibold mb-0">
                                                            per year</p>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled text-center text-[0.75rem] px-4 pt-4 mb-0">
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Storage Capacity<span
                                                                class="badge bg-light text-default ms-1">10Tb</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Daily Updates<span
                                                                class="badge bg-light text-default ms-1">Unlimited</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Online Support</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Visitors Monitoring<span
                                                                class="badge bg-light text-default ms-1">24/7</span></span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">30 Free Domains</span>
                                                    </li>
                                                    <li class="mb-4">
                                                        <span class="text-[#8c9097]">Money Back Guarentee</span>
                                                    </li>
                                                </ul>
                                                <div class="grid">
                                                    <button class="ti-btn bg-primary text-white !font-[500] shadow">Get
                                                        Started</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->


            <!-- Start:: Section-6 -->
            <section class="section landing-testimonials " id="testimonials">
                <div class="container text-center">
                    <p class="fs-12 font-semibold text-success mb-1"><span
                            class="landing-section-heading">TESTIMONIALS</span>
                    </p>
                    <div class="landing-title"></div>
                    <h3 class="font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 mb-2">What People Are
                        Saying About Our Product.</h3>
                    <p class="text-muted fs-15 mb-5 font-normal">Some of the reviews our clients gave which brings
                        motivation to work for future projects.</p>
                    <div class="swiper pagination-dynamic text-start">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/11.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quod eos id
                                                officiis hic tenetur quae quaerat
                                                ad velit ab. Lorem ipsum dolor sit amet.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Json Taylor</p>
                                            <p class="mb-0 fs-11 text-muted">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/15.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Nulla in nunc eu justo varius bibendum ac quis metus. Phasellus varius
                                                aliquam lorem quis sem vitae, pellentesque.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Harry Linson</p>
                                            <p class="mb-0 fs-11 text-muted">CEO</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/9.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                In nec elit nec risus varius cursus vitae eget augue. Vestibulum
                                                bibendum, diam nec elementum imperdiet mollis in lacinia vitae.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Mathew Brown</p>
                                            <p class="mb-0 fs-11 text-muted">Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/8.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Phasellus varius aliquam lorem ut fringilla. Proin lobortis ipsum in
                                                libero elementum rhoncus augue enim ac quam.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Ronne Gally</p>
                                            <p class="mb-0 fs-11 text-muted">Backend Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/7.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Vestibulum bibendum, diam nec elementum imperdiet, nisi odio mattis
                                                metus, ac ullamcorper Cras nec aliquet sem.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Jim Carilett</p>
                                            <p class="mb-0 fs-11 text-muted">UI Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/6.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Nullam dignissim velit ac libero varius facilisis. Pellentesque habitant
                                                morbi tristique senectus eget lorem metus.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Kami Johnson</p>
                                            <p class="mb-0 fs-11 text-muted">Web Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/3.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Sed dapibus risus eu nibh aliquet, et sodales libero vulputate. Nullam
                                                lacinia diam sem Sed dapibus risus eu nib.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Marina Rotior</p>
                                            <p class="mb-0 fs-11 text-muted">UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/2.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Nullam ultrices sem ut gravida ultricies. Suspendisse vitae felis sit
                                                amet dolor tempor lacinia Sed in lorem convallis, tempus nisi vel.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Elizabeth</p>
                                            <p class="mb-0 fs-11 text-muted">Backend Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box testimonial-card !shadow-none">
                                    <div class="box-body">
                                        <div class="testimonia text-center">
                                            <span class="avatar avatar-xl avatar-rounded mb-1">
                                                <img src="../assets/images/faces/1.jpg" alt="">
                                            </span>
                                            <div class="d-flex align-items-center justify-content-center mb-2">
                                                <span class="text-warning d-block">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-half-fill"></i>
                                                </span>
                                            </div>
                                            <p class="op-8 mb-4">
                                                <i class="fa fa-quote-left fs-22 text-primary op-6 me-2"></i>
                                                Curabitur auctor purus et laoreet molestie. Sed eleifend scelerisque
                                                posuere. In ac vehicula turpis acinia diam sem aliquam lorem.
                                            </p>
                                            <p class="mb-0 font-semibold fs-16">Williamson</p>
                                            <p class="mb-0 fs-11 text-muted">UI Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mt-4"></div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-6 -->


            <!-- Start:: Section-9 -->
            <section
                class="section bg-[#f9fafb] section-bg text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]"
                id="faq">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                            class="landing-section-heading">F.A.Q</span></p>
                    <h3 class="font-semibold mb-2">Frequently asked questions ?</h3>
                    <div class="row justify-center">
                        <div class="">
                            <p class="text-[#8c9097] text-[0.9375rem] mb-5 font-normal">We have shared some of the most
                                frequently asked questions to help you out.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                id="accordionFAQ1">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-one"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-one"> Where can I subscribe to your newsletter?
                                            <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-one"
                                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                            aria-labelledby="faq-one" style="height: 0px;">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border-defaultborder/10-white/10"
                                        id="faq-two"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-two"> Where can in edit my address? <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-two"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-two" style="height: 0px;">
                                            <div class="p-5  text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border-defaultborder/10-white/10"
                                        id="faq-twenty"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-three"> What are your opening hours? <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-three"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-twenty" style="height: 0px;">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border-defaultborder/10-white/10"
                                        id="faq-thirty"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-four"> Do I have the right to return an item?
                                            <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-four"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-thiery" style="height: 0px;">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border-defaultborder/10-white/10"
                                        id="faq-three"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-five"> General Terms &amp; Conditions (GTC) <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-five"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-three" style="height: 0px;">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border-defaultborder/10-white/10"
                                        id="faq-four"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-six"> Do I need to create an account to make an
                                            order? <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-six"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-four" style="height: 0px;">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate"
                                id="accordionFAQ2">
                                <div class="hs-accordion-group">
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-five"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-seven"> General Terms &amp; Conditions (GTC)
                                            <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-seven"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-five">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-six"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-eight"> Do I need to create an account to make
                                            an order? <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-eight"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-six">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-seven"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-nine"> Where can I subscribe to your newsletter?
                                            <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-nine"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-seven">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-eight"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-ten"> Where can in edit my address? <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-ten"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-eight">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-nine"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-eleven"> What are your opening hours? <svg
                                                class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-eleven"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-nine">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hs-accordion bg-white dark:bg-bodybg border dark:border-defaultborder/10 mt-[0.5rem] rounded-sm dark:border dark:border-defaultborder/10-white/10"
                                        id="faq-ten"> <button type="button"
                                            class="hs-accordion-toggle hs-accordion-active:!text-primary hs-accordion-active:border dark:border-defaultborder/10-b hs-accordion-active:bg-primary/10   dark:border-defaultborder/10 dark:hs-accordion-active:border dark:border-defaultborder/10-white/10 justify-between inline-flex items-center w-full font-semibold text-start text-[0.85rem] transition py-3 px-4 dark:hs-accordion-active:!text-primary dark:text-gray-200 dark:hover:text-white/80"
                                            aria-controls="faq-collapse-twelve"> Do I have the right to return an item?
                                            <svg class="hs-accordion-active:hidden hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary block w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8 15.36L8 2.35999" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round"></path>
                                            </svg> <svg
                                                class="hs-accordion-active:block hs-accordion-active:!text-primary hs-accordion-active:group-hover:!text-primary hidden w-3 h-3 text-gray-600 group-hover:text-defaulttextcolor dark:text-defaulttextcolor/70 "
                                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 8.85999L14.5 8.85998" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg> </button>
                                        <div id="faq-collapse-twelve"
                                            class="hs-accordion-content w-full overflow-hidden hidden transition-[height] duration-300"
                                            aria-labelledby="faq-ten">
                                            <div class="p-5 text-start">
                                                <p class="text-defaulttextcolor dark:text-defaulttextcolor/70 ">
                                                    <strong>This is the first item's accordion body.</strong> It is
                                                    shown by default, until the collapse plugin adds the appropriate
                                                    classes that we use to style each element. These classes control the
                                                    overall appearance, as well as the showing and hiding via CSS
                                                    transitions. You can modify any of this with custom CSS or
                                                    overriding our default variables. It's also worth noting that just
                                                    about any HTML can go within the <code>.accordion-body</code>,
                                                    though the transition does limit overflow. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section text-defaulttextcolor dark:text-defaulttextcolor/70 text-[0.813rem]" id="contact">
                <div class="container text-center">
                    <p class="text-[0.75rem] font-semibold text-success mb-1"><span
                            class="landing-section-heading">CONTACT US</span>
                    </p>
                    <div class="landing-title"></div>
                    <h3 class="font-semibold mb-2">Have any questions ? We would love to hear from you.</h3>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-9 col-span-12">
                            <p class="text-textmuted fs-15 mb-5 font-normal">You can contact us anytime regarding any
                                queries or deals,dont hesitate to clear your doubts before trying our product.</p>
                        </div>
                    </div>
                    <div class="text-start grid grid-cols-12 gap-x-6 justify-between">
                        <div class="lg:col-span-4 col-span-12">
                            <div class="card bg-white dark:bg-bodybg !shadow-none rounded-sm">
                                <div class="box-body px-[3rem] py-[1.5rem]">
                                    <div class="flex mb-3 mt-3">
                                        <div class="contact-icon contact-icon-1  border !border-primary bg-primary/10 m-0">
                                            <i class="fe fe-map-pin !text-primary text-[1.0625rem]"></i>
                                        </div>
                                        <div class="ms-3 text-start">
                                            <h6 class="mb-1 font-medium">Main Branch</h6>
                                            <p class="mb-4">San Francisco, CA </p>
                                        </div>
                                    </div>
                                    <div class="flex mb-3">
                                        <div class="contact-icon contact-icon-2 border !border-danger bg-danger/10">
                                            <i class="fe fe-mail !text-danger text-[1.0625rem]"></i>
                                        </div>
                                        <div class="ms-3 text-start">
                                            <h6 class="mb-1 font-medium">
                                                Email</h6>
                                            <p class="mb-4">georgeme@abc.com</p>
                                        </div>
                                    </div>
                                    <div class="flex mb-3">
                                        <div class="contact-icon contact-icon-3 border !border-success bg-success/10">
                                            <i class="fe fe-headphones !text-success text-[1.0625rem]"></i>
                                        </div>
                                        <div class="ms-3 text-start">
                                            <h6 class="mb-1 font-medium">
                                                Contact</h6>
                                            <p class="mb-4">+125 254
                                                3562 </p>
                                        </div>
                                    </div>
                                    <div class="flex mb-2">
                                        <div class="contact-icon contact-icon-4 border !border-warning bg-warning/10">
                                            <i class="fe fe-airplay !text-warning text-[1.0625rem]"></i>
                                        </div>
                                        <div class="ms-3 text-start">
                                            <h6 class="mb-1 font-medium">
                                                Working Hours</h6>
                                            <p class="mb-0">Mon -
                                                Fri: 9am - 6pm</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-8 col-span-12">
                            <div class="card bg-white dark:bg-bodybg !shadow-none rounded-sm">
                                <div class="box-body px-[3rem] py-[2.4rem]">
                                    <div class="grid grid-cols-12 gap-x-6 mt-1 mb-3">
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="form-group ">
                                                <label for="cusName" class="form-label">Name
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="cusName"
                                                    placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="xl:col-span-6 col-span-12">
                                            <div class="form-group">
                                                <label for="cusEmail" class="form-label">Email
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="cusEmail"
                                                    placeholder="Enter your email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cusMessage" class="form-label">Message <span
                                                class="text-danger">*</span></label>
                                        <textarea rows="4" class="form-control" id="cusMessage"
                                            placeholder="Type your message here..."></textarea>
                                    </div>
                                    <div class="form-group mb-2 pt-1">
                                        <button class="ti-btn ti-btn-primary-full">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <!-- <section class="section landing-footer  text-white text-[0.813rem] opacity-[0.87]">
                <div class="container">
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="px-6">
                                <p class="font-semibold mb-4"><a href="index.html"><img
                                            src="../assets/images/brand-logos/desktop-dark.png" alt=""></a></p>
                                <p class="mb-2 opacity-[0.6] font-normal">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam,
                                    fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores
                                    accusantium aspernatur minus ea incidunt.
                                </p>
                                <p class="mb-0 opacity-[0.6] font-normal">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Autem ea esse ad</p>
                            </div>
                        </div>
                        <div class="xl:col-span-2 lg:col-span-2 col-span-12">
                            <div class="px-6">
                                <h6 class="font-semibold text-[1rem] mb-4">PAGES</h6>
                                <ul class="list-unstyled opacity-[0.6] font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Projects</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="xl:col-span-2 lg:col-span-2 col-span-12">
                            <div class="px-6">
                                <h6 class="font-semibold text-[1rem] mb-2">INFO</h6>
                                <ul class="list-unstyled opacity-[0.6] font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Contact US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Services</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="xl:col-span-4 lg:col-span-4 col-span-12">
                            <div class="px-6">
                                <h6 class="font-semibold text-[1rem] mb-2">CONTACT</h6>
                                <ul class="list-unstyled font-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-[0.6]"><i
                                                class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-[0.6]"><i
                                                class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-[0.6]"><i
                                                class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-white opacity-[0.6]"><i
                                                class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                    </li>
                                    <li class="mt-4">
                                        <p class="mb-2 font-semibold opacity-[0.8] text-[1rem]">FOLLOW US ON :</p>
                                        <div class="mb-0">
                                            <div class="btn-list">
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-primary me-[0.365rem]">
                                                    <i class="ri-facebook-line font-bold"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-secondary me-[0.365rem]">
                                                    <i class="ri-twitter-x-line"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-warning me-[0.365rem]">
                                                    <i class="ri-instagram-line font-bold"></i>
                                                </button>
                                                <button
                                                    class="ti-btn ti-btn-sm ti-btn-icon ti-btn-success me-[0.365rem]">
                                                    <i class="ri-github-line font-bold"></i>
                                                </button>
                                                <button class="ti-btn ti-btn-sm ti-btn-icon ti-btn-danger">
                                                    <i class="ri-youtube-line font-bold"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- End:: Section-11 -->
            <div class="text-center landing-main-footer py-4 opacity-[0.87]">
                <span class="text-[#8c9097] text-[0.9375rem]"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="!text-primary font-semibold"><u>valex</u></a>.
                    Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"
                        class="!text-primary font-semibold"><u>
                            Spruko</u>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </div>
        <!-- End::main-content -->

    </div>

    <!-- Back To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill  text-[1.25rem]"></i></span>
    </div>

    <div id="responsive-overlay"></div>
    <!-- popperjs -->
    <script src="../assets/libs/%40popperjs/core/umd/popper.min.js"></script>

    <!-- Color Picker JS -->
    <script src="../assets/libs/%40simonwep/pickr/pickr.es5.min.js"></script>

    <!-- Swiper JS -->
    <script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

    <!-- sidebar JS -->
    <script src="../assets/js/defaultmenu.js"></script>

    <!-- Internal Landing JS -->
    <script src="../assets/js/landing.js"></script>

    <!-- Switch JS -->
    <script src="../assets/js/switch.js"></script>

    <!-- Preline JS -->
    <script src="../assets/libs/preline/preline.js"></script>

    <!-- Simplebar JS -->
    <script src="../assets/libs/simplebar/simplebar.min.js"></script>

    <script src="../assets/js/sticky.js"></script>



</body>


<!-- Mirrored from spruko.com/demo/valex/tailwind/dist/html/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 02:14:27 GMT -->
</html>
<?php
use Illuminate\Support\Facades\DB;

$setting = DB::table('setting')->first();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="light">


<!-- Mirrored from spruko.com/demo/valex/tailwind/dist/html/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 02:12:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Resto&Cafe</title>
    <meta name="description" content="A Tailwind CSS admin template is a pre-designed web page for an admin dashboard. Optimizing it for SEO includes using meta descriptions and ensuring it's responsive and fast-loading.">
    <meta name="keywords" content="dashboard,admin dashboard,template dashboard,html,html dashboard,admin dashboard template,admin template,tailwind ui,admin panel,html and css,html admin template,tailwind framework,html css javascript,tailwind css dashboard,dashboard html css,admin,template admin panel,dashboard html template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://spruko.com/demo/valex/tailwind/dist/asset/images/brand-logos/favicon.ico">

    <!-- Main JS -->
    <script src="{{ asset('valex/js/main.js') }}"></script>

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('valex/css/style.css') }}">

    <!-- Simplebar Css -->
    <link rel="stylesheet" href="{{ asset('valex/libs/simplebar/simplebar.min.css') }}">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('valex/libs/%40simonwep/pickr/themes/nano.min.css') }}">
</head>

<body>

  <!-- ========== Switcher  ========== -->
  <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right !border-0" tabindex="-1">
      <div class="ti-offcanvas-header z-10 relative">
        <h5 class="ti-offcanvas-title">
          Switcher
        </h5>
        <button type="button"
          class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
          data-hs-overlay="#hs-overlay-switcher">
          <span class="sr-only">Close modal</span>
          <i class="ri-close-circle-line leading-none text-lg"></i>
        </button>
      </div>
      <div class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto">
        <div class="flex rtl:space-x-reverse" aria-label="Tabs" role="tablist" role="tablist">
          <button type="button"
            class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  active"
            id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
            Theme Style
          </button>
          <button type="button"
            class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px  bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  dark:hover:text-gray-300"
            id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
            Theme Colors
          </button>
        </div>
      </div>
      <div class="ti-offcanvas-body !h-full overflow-auto" id="switcher-body">
        <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="space-y-6">
          <div>
            <p class="switcher-style-head">Theme Color Mode:</p>
            <div class="grid grid-cols-3 switcher-style">
              <div class="flex items-center">
                <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme" checked>
                <label for="switcher-light-theme"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Light</label>
              </div>
              <div class="flex items-center">
                <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                <label for="switcher-dark-theme"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Dark</label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Directions:</p>
            <div class="grid grid-cols-3  switcher-style">
              <div class="flex items-center">
                <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                <label for="switcher-ltr" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">LTR</label>
              </div>
              <div class="flex items-center">
                <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                <label for="switcher-rtl" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">RTL</label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Navigation Styles:</p>
            <div class="grid grid-cols-3  switcher-style">
              <div class="flex items-center">
                <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-vertical" checked>
                <label for="switcher-vertical"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Vertical</label>
              </div>
              <div class="flex items-center">
                <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-horizontal">
                <label for="switcher-horizontal"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Horizontal</label>
              </div>
            </div>
          </div>
          <div class="!mt-0 navigation-menu-styles">
            <p class="switcher-style-head">Navigation Menu Style:</p>
            <div class="grid grid-cols-2 gap-2 switcher-style">
              <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-click"
                  >
                <label for="switcher-menu-click" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                  Click</label>
              </div>
              <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-menu-hover">
                <label for="switcher-menu-hover" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                  Hover</label>
              </div>
              <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-click">
                <label for="switcher-icon-click" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                  Click</label>
              </div>
              <div class="flex">
                <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio" id="switcher-icon-hover">
                <label for="switcher-icon-hover" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                  Hover</label>
              </div>
            </div>
          </div>
          <div class="!mt-0 sidemenu-layout-styles">
            <p class="switcher-style-head">Sidemenu Layout Syles:</p>
            <div class="grid grid-cols-2 gap-2 switcher-style">
              <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-default-menu" checked>
                <label for="switcher-default-menu"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Default
                  Menu</label>
              </div>
              <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-closed-menu">
                <label for="switcher-closed-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">
                  Closed
                  Menu</label>
              </div>
              <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icontext-menu">
                <label for="switcher-icontext-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                  Text</label>
              </div>
              <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-icon-overlay">
                <label for="switcher-icon-overlay" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                  Overlay</label>
              </div>
              <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-detached">
                <label for="switcher-detached"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Detached</label>
              </div>
              <div class="flex">
                <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio" id="switcher-double-menu">
                <label for="switcher-double-menu" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Double
                  Menu</label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Page Styles:</p>
            <div class="grid grid-cols-3  switcher-style">
              <div class="flex">
                <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-regular" checked>
                <label for="switcher-regular"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Regular</label>
              </div>
              <div class="flex">
                <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-classic">
                <label for="switcher-classic"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Classic</label>
              </div>
              <div class="flex">
                <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-modern">
                <label for="switcher-modern"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold"> Modern</label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Layout Width Styles:</p>
            <div class="grid grid-cols-3 switcher-style">
              <div class="flex">
                <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width" checked>
                <label for="switcher-full-width"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">FullWidth</label>
              </div>
              <div class="flex">
                <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                <label for="switcher-boxed" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Boxed</label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Menu Positions:</p>
            <div class="grid grid-cols-3  switcher-style">
              <div class="flex">
                <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-fixed" checked>
                <label for="switcher-menu-fixed"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Fixed</label>
              </div>
              <div class="flex">
                <input type="radio" name="data-menu-positions" class="ti-form-radio" id="switcher-menu-scroll">
                <label for="switcher-menu-scroll"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable </label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Header Positions:</p>
            <div class="grid grid-cols-3 switcher-style">
              <div class="flex">
                <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-fixed" checked>
                <label for="switcher-header-fixed" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                  Fixed</label>
              </div>
              <div class="flex">
                <input type="radio" name="data-header-positions" class="ti-form-radio" id="switcher-header-scroll">
                <label for="switcher-header-scroll"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                </label>
              </div>
            </div>
          </div>
          <div class="!mt-0">
            <p class="switcher-style-head">Loader:</p>
            <div class="grid grid-cols-3 switcher-style">
              <div class="flex">
                <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-enable" checked>
                <label for="switcher-loader-enable" class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                  Enable</label>
              </div>
              <div class="flex">
                <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-disable">
                <label for="switcher-loader-disable"
                  class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Disable
                </label>
              </div>
            </div>
        </div>
        </div>
        <div id="switcher-2" class="hidden" role="tabpanel" aria-labelledby="switcher-item-2">
          <div class="theme-colors">
            <p class="switcher-style-head">Menu Colors:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio" name="menu-colors"
                  id="switcher-menu-light" checked>
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Light Menu
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="menu-colors"
                  id="switcher-menu-dark">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Dark Menu
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="menu-colors"
                  id="switcher-menu-primary">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Color Menu
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="menu-colors"
                  id="switcher-menu-gradient">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Gradient Menu
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio" name="menu-colors"
                  id="switcher-menu-transparent">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Transparent Menu
                </span>
              </div>
            </div>
            <div class="px-4 text-textmuted text-[.6875rem] !mb-3"><b class="me-2">Note:</b>If you want to change color Menu
              dynamically
              change from below Theme Primary color picker.</div>
          </div>
          <div class="theme-colors">
            <p class="switcher-style-head">Header Colors:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-white !border" type="radio" name="header-colors"
                  id="switcher-header-light" checked>
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Light Header
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio" name="header-colors"
                  id="switcher-header-dark">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Dark Header
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio" name="header-colors"
                  id="switcher-header-primary">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Color Header
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio" name="header-colors"
                  id="switcher-header-gradient">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Gradient Header
                </span>
              </div>
              <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
                  name="header-colors" id="switcher-header-transparent">
                <span
                  class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                  role="tooltip">
                  Transparent Header
                </span>
              </div>
            </div>
            <div class="px-4 text-textmuted text-[.6875rem] !mb-3"><b class="me-2">Note:</b>If you want to change color
              Header dynamically
              change from below Theme Primary color picker.</div>
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
              <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
                <div class="theme-container-primary"></div>
                <div class="pickr-container-primary"></div>
              </div>
            </div>
          </div>
          <div class="theme-colors">
            <p class="switcher-style-head">Theme Background:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-1" type="radio" name="theme-background"
                  id="switcher-background" checked>
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-2" type="radio" name="theme-background"
                  id="switcher-background1">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-3" type="radio" name="theme-background"
                  id="switcher-background2">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-4" type="radio" name="theme-background"
                  id="switcher-background3">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio color-input color-bg-5" type="radio" name="theme-background"
                  id="switcher-background4">
              </div>
              <div class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent">
                <div class="theme-container-background hidden"></div>
                <div class="pickr-container-background"></div>
              </div>
            </div>
          </div>
          <div class="menu-image theme-colors">
            <p class="switcher-style-head">Menu With Background Image:</p>
            <div class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3">
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images" id="switcher-bg-img">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images" id="switcher-bg-img1">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images" id="switcher-bg-img2">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images" id="switcher-bg-img3">
              </div>
              <div class="ti-form-radio switch-select">
                <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images" id="switcher-bg-img4">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ti-offcanvas-footer gap-4 sm:flex justify-between">
        <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="w-full ti-btn ti-btn-primary-full m-1">Buy Now</a>
        <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="w-full ti-btn ti-btn-info-full m-1">Our Portfolio</a>
        <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a>
      </div>
    </div>
    <!-- ========== END Switcher  ========== -->
    @include('layout.navbar')
      <!-- Loader -->
      <div id="loader" >
          <img src="https://spruko.com/demo/valex/tailwind/dist/asset/images/media/loader.svg" alt="">
      </div>
      <!-- Loader -->

  <div class="page">

@include('layout.side')

    <!-- Start::Off-canvas sidebar-->
    <div id="hs-overlay-chat" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right overflow-auto" tabindex="-1">
      <div class="ti-offcanvas-header !py-2 rounded-none">
        <h5 class="text-[.875rem] uppercase mb-0 text-defaulttextcolor font-semibold" id="sidebarLabel">Notifications</h5>
        <button type="button"
          class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
          data-hs-overlay="#hs-overlay-chat">
          <span class="sr-only">Close modal</span>
          <i class="ri-close-fill leading-none text-lg"></i>
        </button>
      </div>
      <div class="ti-offcanvas-body rounded-none p-0">
        <ul class="nav nav-tabs  p-4" role="tablist">
          <div class=" rtl:space-x-reverse" aria-label="Tabs" role="tablist" role="tablist">
            <button type="button"
              class="hs-tab-active:bg-primary w-full mb-2 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white  bg-light  font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  active"
              id="chat-item" data-hs-tab="#chat" aria-controls="chat" role="tab">
              <i class="fe fe-message-circle text-[.9375rem] me-2 inline-flex"></i>logout
            </button>
            <button type="button"
              class="hs-tab-active:bg-primary w-full mb-2  rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
              id="notification-item" data-hs-tab="#notification" aria-controls="notification" role="tab">
              <i class="fe fe-bell text-[.9375rem] me-2 inline-flex"></i> Notifications
            </button>

          </div>
        </ul>
        <div class="tab-content !border-0 ">
          <div
            class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 show border-defaultborder dark:border-defaultborder/10 "
            id="chat" role="tabpanel" aria-labelledby="chat-item">
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-primary avatar-rounded avatar-md">CH</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>New Websites is Created</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">30 mins ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-danger avatar-rounded avatar-md">N</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Prepare For the Next Project</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">2 hours ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-info avatar-rounded avatar-md">S</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Decide the live Discussion</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">3 hours ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-warning avatar-rounded avatar-md">K</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Meeting at 3:00 pm</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">4 hours ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-success avatar-rounded avatar-md">R</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Prepare for Presentation</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">1 day ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-pinkmain avatar-rounded avatar-md">MS</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Prepare for Presentation</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">1 day ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
              <div class="">
                <span class="avatar bg-purplemain avatar-rounded avatar-md">L</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Prepare for Presentation</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">45 minutes ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
            <div class="list flex border-b border-defaultborder dark:border-defaultborder/10 items-center p-3">
              <div class="">
                <span class="avatar bg-indigomain avatar-rounded avatar-md">U</span>
              </div>
              <a class="w-full ms-3" href="javascript:void(0);">
                <p class="mb-0 flex ">
                  <b>Prepare for Presentation</b>
                </p>
                <div class="flex justify-between items-center">
                  <div class="flex items-center">
                    <i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
                    <small class="text-textmuted ms-auto">2 days ago</small>
                    <p class="mb-0"></p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div
            class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  hidden"
            id="notification" role="tabpanel" aria-labelledby="notification-item">
            <div class="ti-list-group ti-list-group-flush ">
              <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/1.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Madeleine</strong> Hey! there I' am available....
                  <div class="small text-textmuted">
                    3 hours ago
                  </div>
                </div>
              </div>
              <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/2.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Anthony</strong> New product Launching...
                  <div class="small text-textmuted">
                    5 hour ago
                  </div>
                </div>
              </div>
              <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/3.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Olivia</strong> New Schedule Realease......
                  <div class="small text-textmuted">
                    45 minutes ago
                  </div>
                </div>
              </div>
              <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/4.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Madeleine</strong> Hey! there I' am available....
                  <div class="small text-textmuted">
                    3 hours ago
                  </div>
                </div>
              </div>
              <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/5.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Anthony</strong> New product Launching...
                  <div class="small text-textmuted">
                    5 hour ago
                  </div>
                </div>
              </div>
              <div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/6.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Olivia</strong> New Schedule Realease......
                  <div class="small text-textmuted">
                    45 minutes ago
                  </div>
                </div>
              </div>
              <div
                class="ti-list-group-item  !border-b border-defaultborder dark:border-defaultborder/10 !border-s-0 !border-e-0 !border-t-0 flex  items-center">
                <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/7.jpg" alt="img">
                </span>
                <div class="ms-3">
                  <strong>Olivia</strong> Hey! there I' am available....
                  <div class="small text-textmuted">
                    12 minutes ago
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  active hidden"
            id="friends" role="tabpanel" aria-labelledby="friends-item">
            <div class="ti-list-group ti-list-group-flush ">
              <div class="ti-list-group-item flex !border-t-0 items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/1.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/2.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/5.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/6.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/8.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/8.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/9.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/10.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/11.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/12.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/2.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/2.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex  items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/3.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
              <div class="ti-list-group-item flex !border-b border-defaultborder dark:border-defaultborder/10 items-center">
                <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                  <img src="../asset/images/faces/4.jpg" alt="img">
                </span>
                <div class="ms-2">
                  <div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
                </div>
                <div class="ms-auto">
                  <a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
                      class="fab fa-facebook-messenger"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End::Off-canvas sidebar-->

    <!--chat-modal-->
    <div class="hs-overlay hidden ti-modal" id="chatmodel">
      <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
        <div class="ti-modal-content chat !border-0">
          <div class="box overflow-hidden !mb-0 !border-0 !shadow-none">
            <div class="action-header  flex items-center clearfix">
              <div class="float-start xs:hidden flex">
                <div class="avatar avatar-lg rounded-circle me-3"> <img src="../asset/images/faces/6.jpg"
                    class="rounded-circle user_img" alt="img"> </div>
                <div class="items-center">
                  <h5 class="text-fixed-white mb-0">Daneil Scott</h5> <span class="dot-label bg-success"></span><span
                    class="me-3 text-fixed-white">online</span>
                </div>
              </div>
              <ul class="ah-actions actions ms-auto items-center float-end">
                <li class="call-icon"> <a href="#" class="hidden md:block phone-button" data-hs-overlay="#audiomodal"> <i
                      class="fe fe-phone"></i> </a> </li>
                <li class="video-icon"> <a href="#" class="hidden md:block phone-button" data-hs-overlay="#videomodal"> <i
                      class="fe fe-video"></i> </a> </li>
                <li class="hs-dropdown ti-dropdown">
                  <a href="#" data-bs-toggle="dropdown" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
                  <ul class="ti-dropdown-menu hs-dropdown-menu dropdown-menu-end hidden">
                    <li class="ti-dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                    <li class="ti-dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                    <li class="ti-dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                    <li class="ti-dropdown-item"><i class="fa fa-ban"></i> Block</li>
                  </ul>
                </li>
                <li> <a href="#" class="" data-bs-dismiss="modal" aria-label="Close"> <i
                      class="fe fe-x-circle text-fixed-white"></i> </a> </li>
              </ul>
            </div>
            <div class="box-body msg_card_body">
              <div class="chat-box-single-line"> <abbr
                  class="timestamp !text-defaulttextcolor dark:!text-defaulttextcolor/70">February 1st, 2019</abbr> </div>
              <div class="flex justify-start">
                <div class="img_cont_msg"> <img src="../asset/images/faces/6.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
                <div class="msg_cotainer"> Hi, how are you Jenna Side? <span class="msg_time">8:40 AM, Today</span> </div>
              </div>
              <div class="flex justify-end ">
                <div class="msg_cotainer_send"> Hi Connor Paige i am good tnx how about you? <span
                    class="msg_time_send">8:55 AM, Today</span> </div>
                <div class="img_cont_msg"> <img src="../asset/images/faces/9.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
              </div>
              <div class="flex justify-start ">
                <div class="img_cont_msg"> <img src="../asset/images/faces/6.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
                <div class="msg_cotainer"> I am good too, thank you for your chat template <span class="msg_time">9:00 AM,
                    Today</span> </div>
              </div>
              <div class="flex justify-end ">
                <div class="msg_cotainer_send"> You welcome Connor Paige <span class="msg_time_send">9:05 AM, Today</span>
                </div>
                <div class="img_cont_msg"> <img src="../asset/images/faces/9.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
              </div>
              <div class="flex justify-start ">
                <div class="img_cont_msg"> <img src="../asset/images/faces/6.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
                <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
              </div>
              <div class="flex justify-end mb-4">
                <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
                    class="msg_time_send">9:10 AM, Today</span> </div>
                <div class="img_cont_msg"> <img src="../asset/images/faces/9.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
              </div>
              <div class="flex justify-start ">
                <div class="img_cont_msg"> <img src="../asset/images/faces/6.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
                <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
              </div>
              <div class="flex justify-end mb-4">
                <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
                    class="msg_time_send">9:10 AM, Today</span> </div>
                <div class="img_cont_msg"> <img src="../asset/images/faces/9.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
              </div>
              <div class="flex justify-start ">
                <div class="img_cont_msg"> <img src="../asset/images/faces/6.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
                <div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
              </div>
              <div class="flex justify-end mb-4">
                <div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
                    class="msg_time_send">9:10 AM, Today</span> </div>
                <div class="img_cont_msg"> <img src="../asset/images/faces/9.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
              </div>
              <div class="flex justify-start">
                <div class="img_cont_msg"> <img src="../asset/images/faces/6.jpg" class="rounded-circle user_img_msg"
                    alt="img"> </div>
                <div class="msg_cotainer"> Okay Bye, text you later.. <span class="msg_time">9:12 AM, Today</span> </div>
              </div>
            </div>
            <div class="box-footer border-t">
              <div class="msb-reply flex">
                <div class="input-group"> <input type="text" class="form-control " placeholder="Typing...."> <button
                    type="button" class="ti-btn ti-btn-primary-full !mb-0"> <i class="far fa-paper-plane"
                      aria-hidden="true"></i> </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--chat-modal-->


    <!--Video Modal -->
    <div id="videomodal" class="hs-overlay hidden ti-modal">
      <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
        <div class="ti-modal-content !bg-[#3b4863] !border-0">
          <div class="mx-auto text-center p-[3rem]">
            <button type="button"
              class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-white"
              data-hs-overlay="#videomodal">
              <span class="sr-only">Close</span>
              <i class="bi bi-x"></i>
            </button>
            <h5 class="text-white">Valex Video call</h5>
            <img src="../asset/images/faces/6.jpg" class="rounded-full !h-[90px]  mt-4 mb-3 inline-flex" alt="img">
            <h4 class="mb-1 font-semibold text-white">Daneil Scott</h4>
            <h6 class="loading animate-loadingtext text-white">Calling...</h6>
            <div class="mt-[3rem] mb-[2rem]">
              <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-4">
                  <a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
                    <i class="fas fa-video-slash"></i>
                  </a>
                </div>
                <div class="col-span-4">
                  <a class="icon icon-shape rounded-full text-white mb-0" href="javascript:void(0);"
                    data-hs-overlay="#videomodal">
                    <i class="fas fa-phone !bg-danger !text-white"></i>
                  </a>
                </div>
                <div class="col-span-4">
                  <a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
                    <i class="fas fa-microphone-slash"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- modal-body -->
        </div>
      </div><!-- modal-dialog -->
    </div>
    <!--End modal -->

    <!-- Audio Modal -->
    <div id="audiomodal" class="hs-overlay hidden ti-modal">
      <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
        <div class="ti-modal-content border-0">
          <div class="mx-auto text-center p-[3rem]">
            <button type="button"
              class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-[#8c9097]"
              data-hs-overlay="#audiomodal">
              <span class="sr-only">Close</span>
              <i class="bi bi-x"></i>
            </button>
            <h6 class="text-defaulttextcolor dark:text-defaulttextcolor/70">Valex Voice call</h6>
            <img src="../asset/images/faces/6.jpg" class="rounded-full !h-[90px] mt-6 mb-4 inline-flex" alt="img">
            <h5 class="mb-1 font-medium text-defaulttextcolor dark:text-defaulttextcolor/70">Daneil Scott</h5>
            <h6 class="loading animate-loadingtext text-defaulttextcolor dark:text-defaulttextcolor/70">Calling...</h6>
            <div class="mt-[2rem] mb-[2rem]">
              <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-4">
                  <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                    <i class="fas fa-volume-up !bg-light !text-defaulttextcolor"></i>
                  </a>
                </div>
                <div class="col-span-4">
                  <a class="icon icon-shape rounded-circle text-white mb-0" href="javascript:void(0);"
                    data-hs-overlay="#audiomodal">
                    <i class="fas fa-phone text-white !bg-success"></i>
                  </a>
                </div>
                <div class="col-span-4">
                  <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                    <i class="fas fa-microphone-slash !bg-light !text-defaulttextcolor"></i>
                  </a>
                </div>
              </div>
            </div>
          </div><!-- modal-body -->
        </div>
      </div><!-- modal-dialog -->
    </div>
    <!--End modal -->

    <!-- Start::app-sidebar -->


    </aside>
    <!-- End::app-sidebar -->

    <div class="content">

      <!-- Start::main-content -->
      <div class="main-content">

        <!-- Start::page-header -->
        <!-- Page Header -->


@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
          <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Home</h5>
            <nav>
              <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                    href="javascript:void(0);"> Dashboard <i
                      class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                  </a> </li>

              </ol>
            </nav>
          </div>

          <div class="flex xl:my-auto right-content align-items-center">
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                <i class="mdi mdi-filter-variant"></i>
              </button>
            </div>
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-star"></i>
              </button>
            </div>
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-refresh"></i>
              </button>
            </div>
            <div class="xl:mb-0">
              <div class="hs-dropdown ti-dropdown">
                <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  24 Jan 2025 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                </button>
                <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Header Close -->
        <!-- End::page-header -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12 xxl:col-span-9">
            <div class="grid grid-cols-12 gap-x-6">
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Total Candidates</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">125</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+12.86%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-primary p-3 text-white"> <i
                            class="ti ti-users text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar bg-primary text-xs text-white text-center" role="progressbar"
                          style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">50%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Recruiters</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">968</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+5.46%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-danger p-3 text-white"> <i
                            class="ti ti-user-circle  text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar !bg-danger text-xs text-white text-center" role="progressbar"
                          style="width:80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">80%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Total Subscriptions</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">28</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+3.20%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-success p-3 text-white"> <i
                            class="ti ti-browser-check text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar !bg-success text-xs text-white text-center" role="progressbar"
                          style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">65%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-span-12 xl:col-span-6 xxxl:col-span-3">
                <div class="box">
                  <div class="box-body space-y-4">
                    <div class="flex space-x-4 rtl:space-x-reverse justify-between items-center">
                      <div>
                        <p class="text-textmuted text-[0.925rem] mb-2">Page Views</p>
                        <div class="flex items-center">
                          <h5 class=" text-2xl font-medium">645</h5> <span
                            class="text-success text-sm ltr:ml-2 rtl:mr-2"><i
                              class="ti ti-arrow-up-right"></i>+1.20%</span>
                        </div>
                      </div>
                      <div> <span class="avatar rounded-sm bg-info p-3 text-white"> <i
                            class="ti ti-view-360 text-xl leading-none"></i> </span> </div>
                    </div>
                    <div class="flex items-center !mt-1">
                      <div class="ti-main-progress  h-2 bg-gray-200 dark:bg-black/20">
                        <div class="ti-main-progress-bar !bg-info text-xs text-white text-center" role="progressbar"
                          style="width:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div> <span class="font-medium text-sm ltr:ml-2 rtl:mr-2">65%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@yield('content')
        <!-- Page Header Close -->
        <!-- End::page-header -->



      </div>
    </div>
    <!-- end::main-content -->

    <!-- ========== Search Modal ========== -->
    <div id="search-modal" class="hs-overlay ti-modal hidden mt-[1.75rem]">
      <div class="ti-modal-box">
        <div class="ti-modal-content !border !border-defaultborder dark:!border-defaultborder/10 !rounded-[0.5rem]">
          <div class="ti-modal-body">

            <div class="input-group border-[2px] border-primary rounded-[0.25rem] w-full flex">
              <a href="javascript:void(0);"
                class="input-group-text flex items-center bg-light border-e-[#dee2e6] !py-[0.375rem] !px-[0.75rem] !rounded-none !text-[0.875rem]"
                id="Search-Grid"><i class="fe fe-search header-link-icon text-[0.875rem]"></i></a>

              <input type="search" class="form-control border-0 px-2 !text-[0.8rem] w-full focus:ring-transparent"
                placeholder="Search" aria-label="Username">

              <a href="javascript:void(0);" class="flex items-center input-group-text bg-light !py-[0.375rem] !px-[0.75rem]"
                id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
              <div class="hs-dropdown ti-dropdown">
                <a href="javascript:void(0);"
                  class="flex items-center hs-dropdown-toggle ti-dropdown-toggle btn btn-light btn-icon !bg-light !py-[0.375rem] !rounded-none !px-[0.75rem] text-[0.95rem] h-[2.413rem] w-[2.313rem]">
                  <i class="fe fe-more-vertical"></i>
                </a>

                <ul class="absolute hs-dropdown-menu ti-dropdown-menu !-mt-2 !p-0 hidden">
                  <li><a
                      class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-[500]"
                      href="#">Action</a></li>
                  <li><a
                      class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-[500]"
                      href="#">Another action</a></li>
                  <li><a
                      class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-[500]"
                      href="#">Something else here</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a
                      class="ti-dropdown-item flex text-defaulttextcolor dark:text-defaulttextcolor/70 !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-[500]"
                      href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
            <div class="mt-5">
              <p class="font-normal  text-[#8c9097] text-[0.813rem] dark:text-gray-200 mb-2">Are You Looking For...</p>

              <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i class="fe fe-user me-2"></i>People<a
                  href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>
              <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i class="fe fe-file-text me-2"></i>Pages<a
                  href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>
              <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i
                  class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                    class="fe fe-x"></i></a></span>
              <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem] dark:border-defaultborder/10"><i class="fe fe-server me-2"></i>Tags<a
                  href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>

            </div>


            <div class="my-[1.5rem]">
              <p class="font-normal  text-[#8c9097] text-[0.813rem] mb-2">Recent Search :</p>

              <div id="dismiss-alert" role="alert"
                class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
                <a href="notifications.html"><span>Notifications</span></a>
                <a class="ms-auto leading-none" href="javascript:void(0);" data-hs-remove-element="#dismiss-alert"><i
                    class="fe fe-x !text-[0.8125rem] text-[#8c9097]"></i></a>
              </div>

              <div id="dismiss-alert" role="alert"
                class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-2 !text-[0.8125rem] alert">
                <a href="alerts.html"><span>Alerts</span></a>
                <a class="ms-auto leading-none" href="javascript:void(0);" data-hs-remove-element="#dismiss-alert"><i
                    class="fe fe-x !text-[0.8125rem] text-[#8c9097]"></i></a>
              </div>

              <div id="dismiss-alert" role="alert"
                class="!p-2 border dark:border-defaultborder/10 rounded-[0.3125rem] flex items-center text-defaulttextcolor dark:text-defaulttextcolor/70 !mb-0 !text-[0.8125rem] alert">
                <a href="mail.html"><span>Mail</span></a>
                <a class="ms-auto lh-1" href="javascript:void(0);" data-hs-remove-element="#dismiss-alert"><i
                    class="fe fe-x !text-[0.8125rem] text-[#8c9097]"></i></a>
              </div>
            </div>
          </div>

          <div class="ti-modal-footer !py-[1rem] !px-[1.25rem]">
            <div class="inline-flex rounded-md  shadow-sm">
              <button type="button"
                class="ti-btn-group !px-[0.75rem] !py-[0.45rem]  rounded-s-[0.25rem] !rounded-tr-none !rounded-br-none ti-btn-primary !text-[0.75rem] dark:border-white/10">
                Search
              </button>
              <button type="button"
                class="ti-btn-group  ti-btn-primary-full rounded-e-[0.25rem] dark:border-white/10 !text-[0.75rem] !rounded-tl-none !rounded-bl-none !px-[0.75rem] !py-[0.45rem]">
                Clear Recents
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== END Search Modal ========== -->




  </div>

  <!-- Back To Top -->
  <div class="scrollToTop">
      <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
  </div>

  <div id="responsive-overlay"></div>


  <!-- popperjs -->
  <script src="{{ asset('valex/libs/%40popperjs/core/umd/popper.min.js') }}"></script>

  <!-- Color Picker JS -->
  <script src="{{ asset('valex/libs/%40simonwep/pickr/pickr.es5.min.js') }}"></script>

  <!-- sidebar JS -->
  <script src="{{ asset('valex/js/defaultmenu.js') }}"></script>

  <!-- Switch JS -->
  <script src="{{ asset('valex/js/switch.js') }}"></script>

  <!-- sticky JS -->
  <script src="{{ asset('valex/js/sticky.js') }}"></script>


  <!-- Simplebar JS -->
  <script src="{{ asset('valex/libs/simplebar/simplebar.min.js') }}"></script>

  <!-- Preline JS -->
  <script src="{{ asset('valex/libs/preline/preline.js') }}"></script>

  <!-- Apex Charts JS -->
  <script src="{{ asset('valex/libs/apexcharts/apexcharts.min.js') }}"></script>

  <!-- CRM-Dashboard -->
  <script src="{{ asset('valex/js/ecommercedashboard.js') }}"></script>


  <!-- Custom-Switcher JS -->
  <script src="{{ asset('valex/js/custom-switcher.js') }}"></script>

  <!-- Custom JS -->
  <script src="{{ asset('valex/js/custom.js') }}"></script>

</body>


<!-- Mirrored from spruko.com/demo/valex/tailwind/dist/html/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 May 2024 02:12:21 GMT -->
</html>

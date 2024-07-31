<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="<?php echo e(route('mainDashboard.index')); ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?php echo e(asset('dashboard')); ?>/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo e(asset('dashboard')); ?>/assets/images/logo-dark.png" alt=""
                                height="22">
                        </span>
                    </a>

                    <a href="<?php echo e(route('mainDashboard.index')); ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?php echo e(asset('dashboard')); ?>/assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo e(asset('dashboard')); ?>/assets/images/logo-light.png" alt=""
                                height="22">
                        </span>
                    </a>
                </div>

                <button type="button"
                    class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <div class="app-search d-none d-md-inline-flex">
                    <div class="position-relative">
                        <div class="status-sync-container">
                            <div>
                                <form action="<?php echo e(route('sync.databases')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" id="syncButton" class="btn btn-success hideBTN">Sync
                                        Data</button>
                                </form>
                            </div>
                            <div id="connectionStatus" class="status"></div>
                        </div>
                    </div>
                    <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                        <div data-simplebar="" style="max-height: 320px;">
                            <!-- item-->
                            <div class="dropdown-header">
                                <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                            </div>

                            <div class="dropdown-item bg-transparent text-wrap">
                                <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">how to setup <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                                <a href="index.html" class="btn btn-subtle-secondary btn-sm btn-rounded">buttons <i
                                        class="mdi mdi-magnify ms-1"></i></a>
                            </div>
                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                <span>Analytics Dashboard</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                <span>Help Center</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                <span>My account settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header mt-2">
                                <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                            </div>

                        </div>

                        <div class="text-center pt-3 pb-1">
                            <a href="#" class="btn btn-primary btn-sm">View All Results <i
                                    class="ri-arrow-right-line ms-1"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <div class="btn btn-outline-warning rounded-circle btn-icon btn-sm" data-bs-toggle="offcanvas"
                        data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                        <i class=" bx bx-carousel"></i>
                    </div>
                    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
                            <div class="me-2">
                                <h5 class="mb-1 text-white">STC Builder</h5>
                                <p class="text-white text-opacity-75 mb-0">Choose your themes & layouts etc.</p>
                            </div>

                            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body p-0">
                            <div data-simplebar="" class="h-100">
                                <div class="p-4">
                                    <h6 class="fs-md mb-1">Layout</h6>
                                    <p class="text-muted fs-sm">Choose your layout</p>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input id="customizer-layout01" name="data-layout" type="radio"
                                                    value="vertical" class="form-check-input">
                                                <label class="form-check-label p-0 avatar-md w-100"
                                                    for="customizer-layout01">
                                                    <span class="d-flex gap-1 h-100">
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                <span
                                                                    class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="flex-grow-1">
                                                            <span class="d-flex h-100 flex-column">
                                                                <span class="bg-light d-block p-1"></span>
                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Vertical</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input id="customizer-layout02" name="data-layout" type="radio"
                                                    value="horizontal" class="form-check-input">
                                                <label class="form-check-label p-0 avatar-md w-100"
                                                    for="customizer-layout02">
                                                    <span class="d-flex h-100 flex-column gap-1">
                                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                            <span
                                                                class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                            <span
                                                                class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                            <span
                                                                class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                        </span>
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Horizontal</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input id="customizer-layout03" name="data-layout" type="radio"
                                                    value="twocolumn" class="form-check-input">
                                                <label class="form-check-label p-0 avatar-md w-100"
                                                    for="customizer-layout03">
                                                    <span class="d-flex gap-1 h-100">
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                                <span
                                                                    class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                                <span
                                                                    class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="flex-grow-1">
                                                            <span class="d-flex h-100 flex-column">
                                                                <span class="bg-light d-block p-1"></span>
                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Two Column</h5>
                                        </div>
                                        <!-- end col -->
                                    </div>

                                    <h6 class="mt-4 fs-md mb-1">Theme</h6>
                                    <p class="text-muted fs-sm">Choose your suitable Theme.</p>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check card-radio">
                                                <input id="customizer-theme01" name="data-theme" type="radio"
                                                    value="default" class="form-check-input">
                                                <label class="form-check-label p-0" for="customizer-theme01">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/light-mode.png"
                                                        alt="" class="img-fluid">
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check card-radio">
                                                <input id="customizer-theme02" name="data-theme" type="radio"
                                                    value="material" class="form-check-input">
                                                <label class="form-check-label p-0" for="customizer-theme02">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/material.png"
                                                        alt="" class="img-fluid">
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Material</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check card-radio">
                                                <input id="customizer-theme03" name="data-theme" type="radio"
                                                    value="creative" class="form-check-input">
                                                <label class="form-check-label p-0" for="customizer-theme03">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/creative.png"
                                                        alt="" class="img-fluid">
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Creative</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check card-radio">
                                                <input id="customizer-theme04" name="data-theme" type="radio"
                                                    value="minimal" class="form-check-input">
                                                <label class="form-check-label p-0" for="customizer-theme04">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/minimal.png"
                                                        alt="" class="img-fluid">
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Minimal</h5>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check card-radio">
                                                <input id="customizer-theme05" name="data-theme" type="radio"
                                                    value="modern" class="form-check-input">
                                                <label class="form-check-label p-0" for="customizer-theme05">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/modern.png"
                                                        alt="" class="img-fluid">
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Modern</h5>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-6">
                                            <div class="form-check card-radio">
                                                <input id="customizer-theme06" name="data-theme" type="radio"
                                                    value="interaction" class="form-check-input">
                                                <label class="form-check-label p-0" for="customizer-theme06">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/interaction.png"
                                                        alt="" class="img-fluid">
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Interaction</h5>
                                        </div><!-- end col -->
                                    </div>

                                    <h6 class="mt-4 fs-md mb-1">Color Scheme</h6>
                                    <p class="text-muted fs-sm">Choose Light or Dark Scheme.</p>

                                    <div class="colorscheme-cardradio">
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <div class="form-check card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-bs-theme" id="layout-mode-light" value="light">
                                                    <label class="form-check-label p-0 bg-transparent"
                                                        for="layout-mode-light">
                                                        <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/light-mode.png"
                                                            alt="" class="img-fluid">
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-check card-radio dark">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-bs-theme" id="layout-mode-dark" value="dark">
                                                    <label class="form-check-label p-0 bg-transparent"
                                                        for="layout-mode-dark">
                                                        <img src="<?php echo e(asset('dashboard')); ?>/assets/images/custom-theme/dark-mode.png"
                                                            alt="" class="img-fluid">
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                            </div>


                                        </div>
                                    </div>

                                    <div id="layout-width">
                                        <h6 class="mt-4 fs-md mb-1">Layout Width</h6>
                                        <p class="text-muted fs-sm">Choose Fluid or Boxed layout.</p>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-check card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-layout-width" id="layout-width-fluid"
                                                        value="fluid">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="layout-width-fluid">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Fluid</h5>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-layout-width" id="layout-width-boxed"
                                                        value="boxed">
                                                    <label class="form-check-label p-0 avatar-md w-100 px-2"
                                                        for="layout-width-boxed">
                                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Boxed</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="layout-position">
                                        <h6 class="mt-4 fs-md mb-1">Layout Position</h6>
                                        <p class="text-muted fs-sm">Choose Fixed or Scrollable Layout Position.</p>

                                        <div class="btn-group radio" role="group">
                                            <input type="radio" class="btn-check" name="data-layout-position"
                                                id="layout-position-fixed" value="fixed">
                                            <label class="btn btn-light w-sm"
                                                for="layout-position-fixed">Fixed</label>

                                            <input type="radio" class="btn-check" name="data-layout-position"
                                                id="layout-position-scrollable" value="scrollable">
                                            <label class="btn btn-light w-sm ms-0"
                                                for="layout-position-scrollable">Scrollable</label>
                                        </div>
                                    </div>

                                    <h6 class="mt-4 fs-md mb-1">Topbar Color</h6>
                                    <p class="text-muted fs-sm">Choose Light or Dark Topbar Color.</p>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input class="form-check-input" type="radio" name="data-topbar"
                                                    id="topbar-color-light" value="light">
                                                <label class="form-check-label p-0 avatar-md w-100"
                                                    for="topbar-color-light">
                                                    <span class="d-flex gap-1 h-100">
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                <span
                                                                    class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="flex-grow-1">
                                                            <span class="d-flex h-100 flex-column">
                                                                <span class="bg-light d-block p-1"></span>
                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-check card-radio">
                                                <input class="form-check-input" type="radio" name="data-topbar"
                                                    id="topbar-color-dark" value="dark">
                                                <label class="form-check-label p-0 avatar-md w-100"
                                                    for="topbar-color-dark">
                                                    <span class="d-flex gap-1 h-100">
                                                        <span class="flex-shrink-0">
                                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                <span
                                                                    class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            </span>
                                                        </span>
                                                        <span class="flex-grow-1">
                                                            <span class="d-flex h-100 flex-column">
                                                                <span class="bg-primary d-block p-1"></span>
                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                        </div>
                                    </div>

                                    <div id="sidebar-size">
                                        <h6 class="mt-4 fs-md mb-1">Sidebar Size</h6>
                                        <p class="text-muted fs-sm">Choose a size of Sidebar.</p>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar-size" id="sidebar-size-default"
                                                        value="lg">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-size-default">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar-size" id="sidebar-size-compact"
                                                        value="md">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-size-compact">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Compact</h5>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar-size" id="sidebar-size-small"
                                                        value="sm">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-size-small">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                                    <span
                                                                        class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Small (Icon View)</h5>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar-size" id="sidebar-size-small-hover"
                                                        value="sm-hover">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-size-small-hover">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                                    <span
                                                                        class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Small Hover View</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sidebar-view">
                                        <h6 class="mt-4 fs-md mb-1">Sidebar View</h6>
                                        <p class="text-muted fs-sm">Choose Default or Detached Sidebar view.</p>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-layout-style" id="sidebar-view-default"
                                                        value="default">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-view-default">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Default</h5>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-layout-style" id="sidebar-view-detached"
                                                        value="detached">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-view-detached">
                                                        <span class="d-flex h-100 flex-column">
                                                            <span
                                                                class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                                <span
                                                                    class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                                <span
                                                                    class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                                <span
                                                                    class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                            </span>
                                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                                <span class="flex-shrink-0">
                                                                    <span
                                                                        class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                        <span
                                                                            class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                        <span
                                                                            class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                        <span
                                                                            class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Detached</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sidebar-color">
                                        <h6 class="mt-4 fs-md mb-1">Sidebar Color</h6>
                                        <p class="text-muted fs-sm">Choose a color of Sidebar.</p>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseBgGradient.show">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar" id="sidebar-color-light" value="light">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-color-light">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Light</h5>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseBgGradient.show">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar" id="sidebar-color-dark" value="dark">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="sidebar-color-dark">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Dark</h5>
                                            </div>
                                            <div class="col-4">
                                                <button
                                                    class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseBgGradient" aria-expanded="false"
                                                    aria-controls="collapseBgGradient">
                                                    <span class="d-flex gap-1 h-100">
                                                        <span class="flex-shrink-0">
                                                            <span
                                                                class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                                <span
                                                                    class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                                <span
                                                                    class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                            </span>
                                                        </span>
                                                        <span class="flex-grow-1">
                                                            <span class="d-flex h-100 flex-column">
                                                                <span class="bg-light d-block p-1"></span>
                                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </button>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Gradient</h5>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="collapse" id="collapseBgGradient">
                                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar" id="sidebar-color-gradient"
                                                        value="gradient">
                                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                        for="sidebar-color-gradient">
                                                        <span
                                                            class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar" id="sidebar-color-gradient-2"
                                                        value="gradient-2">
                                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                        for="sidebar-color-gradient-2">
                                                        <span
                                                            class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar" id="sidebar-color-gradient-3"
                                                        value="gradient-3">
                                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                        for="sidebar-color-gradient-3">
                                                        <span
                                                            class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-sidebar" id="sidebar-color-gradient-4"
                                                        value="gradient-4">
                                                    <label class="form-check-label p-0 avatar-xs rounded-circle"
                                                        for="sidebar-color-gradient-4">
                                                        <span
                                                            class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sidebar-img">
                                        <h6 class="mt-4 fw-semibold fs-base">Sidebar Images</h6>
                                        <p class="text-muted fs-sm">Choose a image of Sidebar.</p>

                                        <div class="d-flex gap-2 flex-wrap img-switch">
                                            <div class="form-check sidebar-setting card-radio">
                                                <input class="form-check-input" type="radio"
                                                    name="data-sidebar-image" id="sidebarimg-none" value="none">
                                                <label class="form-check-label p-0 avatar-sm h-auto"
                                                    for="sidebarimg-none">
                                                    <span
                                                        class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                                        <i class="ri-close-fill fs-3xl"></i>
                                                    </span>
                                                </label>
                                            </div>

                                            <div class="form-check sidebar-setting card-radio">
                                                <input class="form-check-input" type="radio"
                                                    name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                                <label class="form-check-label p-0 avatar-sm h-auto"
                                                    for="sidebarimg-01">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/sidebar/img-sm-1.jpg"
                                                        alt="" class="avatar-md w-auto object-cover">
                                                </label>
                                            </div>

                                            <div class="form-check sidebar-setting card-radio">
                                                <input class="form-check-input" type="radio"
                                                    name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                                <label class="form-check-label p-0 avatar-sm h-auto"
                                                    for="sidebarimg-02">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/sidebar/img-sm-2.jpg"
                                                        alt="" class="avatar-md w-auto object-cover">
                                                </label>
                                            </div>
                                            <div class="form-check sidebar-setting card-radio">
                                                <input class="form-check-input" type="radio"
                                                    name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                                <label class="form-check-label p-0 avatar-sm h-auto"
                                                    for="sidebarimg-03">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/sidebar/img-sm-3.jpg"
                                                        alt="" class="avatar-md w-auto object-cover">
                                                </label>
                                            </div>
                                            <div class="form-check sidebar-setting card-radio">
                                                <input class="form-check-input" type="radio"
                                                    name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                                <label class="form-check-label p-0 avatar-sm h-auto"
                                                    for="sidebarimg-04">
                                                    <img src="<?php echo e(asset('dashboard')); ?>/assets/images/sidebar/img-sm-4.jpg"
                                                        alt="" class="avatar-md w-auto object-cover">
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="preloader-menu">
                                        <h6 class="mt-4 fw-semibold fs-base">Preloader</h6>
                                        <p class="text-muted fs-sm">Choose a preloader.</p>

                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-preloader" id="preloader-view-custom"
                                                        value="enable">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="preloader-view-custom">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <!-- <div id="preloader"> -->
                                                        <span class="d-flex align-items-center justify-content-center">
                                                            <span class="spinner-border text-primary avatar-xxs m-auto"
                                                                role="status">
                                                                <span class="visually-hidden">Loading...</span>
                                                            </span>
                                                        </span>
                                                        <!-- </div> -->
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Enable</h5>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check sidebar-setting card-radio">
                                                    <input class="form-check-input" type="radio"
                                                        name="data-preloader" id="preloader-view-none"
                                                        value="disable">
                                                    <label class="form-check-label p-0 avatar-md w-100"
                                                        for="preloader-view-none">
                                                        <span class="d-flex gap-1 h-100">
                                                            <span class="flex-shrink-0">
                                                                <span
                                                                    class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                                    <span
                                                                        class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                    <span
                                                                        class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                                </span>
                                                            </span>
                                                            <span class="flex-grow-1">
                                                                <span class="d-flex h-100 flex-column">
                                                                    <span class="bg-light d-block p-1"></span>
                                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <h5 class="fs-sm text-center fw-medium mt-2">Disable</h5>
                                            </div>
                                        </div>

                                    </div><!-- end preloader-menu -->
                                </div>
                            </div>

                        </div>
                        <div class="offcanvas-footer border-top p-3 text-center">
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-danger w-100"
                                        id="reset-layout">Reset</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if(App::getLocale() == 'ar'): ?>
                            <img id="header-lang-imgs" src="<?php echo e(asset('dashboard')); ?>/assets/images/flags/ae.svg"
                                alt="<?php echo e(App::getLocale()); ?> Header Page" height="20" class="rounded">
                        <?php elseif(App::getLocale() == 'en'): ?>
                            <img id="header-lang-imgs" src="<?php echo e(asset('dashboard')); ?>/assets/images/flags/us.svg"
                                alt="<?php echo e(App::getLocale()); ?> Header Page" height="20" class="rounded">
                        <?php else: ?>
                            <img id="header-lang-imgs" src="<?php echo e(asset('dashboard')); ?>/assets/images/flags/us.svg"
                                alt="<?php echo e(App::getLocale()); ?> Header Page" height="20" class="rounded">
                        <?php endif; ?>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                <?php if($properties['native'] == 'English'): ?>
                                    <i class="flag-icon flag-icon-us"></i>
                                    <img id="header-lang-imgs"
                                        src="<?php echo e(asset('dashboard')); ?>/assets/images/flags/us.svg"
                                        alt="<?php echo e(App::getLocale()); ?> Sub Header Page" height="20" class="rounded">
                                <?php elseif($properties['native'] == 'العربية'): ?>
                                    <i class="flag-icon flag-icon-eg"></i>
                                    <img id="header-lang-imgs"
                                        src="<?php echo e(asset('dashboard')); ?>/assets/images/flags/ae.svg"
                                        alt="<?php echo e(App::getLocale()); ?> Sub Header Page" height="20" class="rounded">
                                <?php endif; ?>
                                <?php echo e($properties['native']); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bi bi-arrows-fullscreen fs-lg'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-sun align-middle fs-3xl"></i>
                    </button>
                    <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                        <a href="#!" class="dropdown-item" data-mode="light"><i
                                class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                        <a href="#!" class="dropdown-item" data-mode="dark"><i
                                class="bi bi-moon align-middle me-2"></i> Dark</a>
                        <a href="#!" class="dropdown-item" data-mode="auto"><i
                                class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                    </div>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                        id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bi bi-bell fs-2xl'></i>
                        <span
                            class="position-absolute topbar-badge fs-3xs translate-middle badge rounded-pill bg-danger"><span
                                class="notification-badge">4</span><span class="visually-hidden">unread
                                messages</span></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head rounded-top">
                            <div class="p-3 border-bottom border-bottom-dashed">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="mb-0 fs-lg fw-semibold"> Notifications <span
                                                class="badge bg-danger-subtle text-danger fs-sm notification-badge">
                                                4</span></h6>
                                        <p class="fs-md text-muted mt-1 mb-0">You have <span
                                                class="fw-semibold notification-unread">3</span> unread messages</p>
                                    </div>
                                    <div class="col-auto dropdown">
                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                            class="link-secondary fs-md"><i class="bi bi-three-dots-vertical"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">All Clear</a></li>
                                            <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                            <li><a class="dropdown-item" href="#">Archive All</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="py-2 ps-2" id="notificationItemsTabContent">
                            <div data-simplebar="" style="max-height: 300px;" class="pe-2">
                                <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">New
                                </h6>
                                <div
                                    class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3 flex-shrink-0">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-lg">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 fs-md mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                    Optimization <span class="text-secondary">reward</span> is ready!
                                                </h6>
                                            </a>
                                            <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                            </p>
                                        </div>
                                        <div class="px-2 fs-base">
                                            <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="all-notification-check01">
                                                <label class="form-check-label"
                                                    for="all-notification-check01"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                    <div class="d-flex">
                                        <div class="position-relative me-3 flex-shrink-0">
                                            <img src="<?php echo e(asset('dashboard')); ?>/assets/images/users/32/avatar-2.jpg"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                            <span
                                                class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-md fw-semibold">Angela Bernier</h6>
                                            </a>
                                            <div class="fs-sm text-muted">
                                                <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                    graph 🔔.</p>
                                            </div>
                                            <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                            </p>
                                        </div>
                                        <div class="px-2 fs-base">
                                            <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="all-notification-check02">
                                                <label class="form-check-label"
                                                    for="all-notification-check02"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3 flex-shrink-0">
                                            <span
                                                class="avatar-title bg-danger-subtle text-danger rounded-circle fs-lg">
                                                <i class='bx bx-message-square-dots'></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-2 fs-md lh-base">You have received <b
                                                        class="text-success">20</b> new messages in the conversation
                                                </h6>
                                            </a>
                                            <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                            </p>
                                        </div>
                                        <div class="px-2 fs-base">
                                            <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="all-notification-check03">
                                                <label class="form-check-label"
                                                    for="all-notification-check03"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h6 class="text-overflow text-muted fs-sm my-2 text-uppercase notification-title">Read
                                    Before</h6>

                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                    <div class="d-flex">

                                        <div class="position-relative me-3 flex-shrink-0">
                                            <img src="<?php echo e(asset('dashboard')); ?>/assets/images/users/32/avatar-8.jpg"
                                                class="rounded-circle avatar-xs" alt="user-pic">
                                            <span
                                                class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                <span class="visually-hidden">New alerts</span>
                                            </span>
                                        </div>

                                        <div class="flex-grow-1">
                                            <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-1 fs-md fw-semibold">Maureen Gibson</h6>
                                            </a>
                                            <div class="fs-sm text-muted">
                                                <p class="mb-1">We talked about a project on linkedin.</p>
                                            </div>
                                            <p class="mb-0 fs-2xs fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                            </p>
                                        </div>
                                        <div class="px-2 fs-base">
                                            <div class="form-check notification-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="all-notification-check04">
                                                <label class="form-check-label"
                                                    for="all-notification-check04"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center align-items-center">
                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result
                                    <button type="button" class="btn btn-link link-danger p-0 ms-2"
                                        data-bs-toggle="modal"
                                        data-bs-target="#removeNotificationModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn shadow-none" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user"
                                src="<?php echo e(asset('dashboard')); ?>/assets/images/users/32/avatar-1.jpg"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span
                                    class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo e(Auth::user()->email); ?></span>
                                <span
                                    class="d-none d-xl-block ms-1 fs-sm user-name-sub-text"><?php echo e(Auth::user()->name); ?></span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome <?php echo e(Auth::user()->name); ?>!</h6>
                        <a class="dropdown-item" href="pages-profile.html"><i
                                class="mdi mdi-account-circle text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">Profile</span></a>
                        
                        
                        
                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="pages-profile-settings.html"><span
                                class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                                class="mdi mdi-cog-outline text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-lockscreen.html"><i
                                class="mdi mdi-lock text-muted fs-lg align-middle me-1"></i> <span
                                class="align-middle">Lock screen</span></a>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button class="btn" type="submit">
                                <i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
                                <span class="align-middle text-muted fs-lg align-middle me-1"
                                    data-key="t-logout">Logout</span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-4"></i>
                    </div>
                    <div class="mt-4 fs-base">
                        <h4 class="mb-1">Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                        It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- removeCartModal -->
<div id="removeCartModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-cartmodal"></button>
            </div>
            <div class="modal-body p-md-5">
                <div class="text-center">
                    <div class="text-danger">
                        <i class="bi bi-trash display-5"></i>
                    </div>
                    <div class="mt-4">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="remove-cartproduct">Yes, Delete
                        It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/dashboard/layouts/header.blade.php ENDPATH**/ ?>
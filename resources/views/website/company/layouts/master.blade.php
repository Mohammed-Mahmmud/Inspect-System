<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-theme="default" data-topbar="dark" data-bs-theme="light">

<head>
    @include('dashboard.layouts.main-head')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <x-website.company.sidebar></x-website.company.sidebar>
        <x-website.company.header></x-website.company.header>
        @yield('content')
        @include('dashboard.layouts.footer')
    </div>
    @include('dashboard.layouts.scripts')
</body>

</html>

<!doctype html>
<html lang="en" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable" data-theme="default" data-topbar="dark" data-bs-theme="light">
<head>
    @include('dashboard.layouts.main-head')
</head>
<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        @if(App::getLocale()== "ar")
        <div dir="rtl">
            @else
            <div>
                @endif
                {{-- @include('dashboard.layouts.sidebar') --}}
                <x-dashboard.layouts.sidebar></x-dashboard.layouts.sidebar>
                @include('dashboard.layouts.header')
                @yield('content')
                @include('dashboard.layouts.footer')
            </div>
        </div>
        @include('dashboard.layouts.theme-settings')
        @include('dashboard.layouts.scripts')
</body>
</html>

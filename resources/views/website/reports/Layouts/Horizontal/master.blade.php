<!doctype html>
<html lang="en" data-layout="vertical">

<head>
    @include('website.reports.Layouts.Horizontal.main-head')
</head>

<body>
    <!-- Begin page -->
    <x-website.reports.horizontal.layouts.header/>
    @yield('reports')
    <x-website.reports.horizontal.layouts.footer/>
    @include('website.reports.Layouts.Vertical.scripts')

</body>

</html>

<!doctype html>
<html lang="en" data-layout="vertical">

<head>

    @include('website.reports.Layouts.Vertical.main-head')

</head>

<body>
    <!-- Begin page -->
    <x-website.reports.vertical.layouts.header>
    </x-website.reports.vertical.layouts.header>
    @yield('reports')
    <x-website.reports.vertical.layouts.footer>
    </x-website.reports.vertical.layouts.footer>

</body>

</html>

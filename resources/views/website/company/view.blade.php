<!doctype html>
<html lang="en">

<head>
    <title>STC - Clients</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('website/assets/pages/company/css/style.css') }}">
    @include('website.layouts.style.css')
</head>

<body>
    <form method="POST" action="{{ route('frontend.logout') }}">
        @csrf
        <button class="btn btn-outline-danger" type="submit">
            <i class="mdi mdi-logout text-muted fs-lg align-middle me-1"></i>
            <span class="align-middle text-muted fs-lg align-middle me-1" data-key="t-logout">Logout</span>
        </button>
    </form>
    <h1><span style="">{{ $company->full_name }}</span></h1>
    <x-website.company.reports :company="$company"></x-website.company.reports>
</body>
<script src="{{ asset('website/assets/pages/company/js/script.js') }}"></script>
@include('website.layouts.script.js')

</html>

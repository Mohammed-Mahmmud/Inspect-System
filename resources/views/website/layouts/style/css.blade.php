<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="STC" name="description">
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('dashboard/assets/images/stc-favicon.png') }}">
<link href="{{ asset('dashboard/assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('dashboard/assets/libs/dropzone/dropzone.css') }}" type="text/css">
{{-- toster css links --}}
<link type="text/css" rel="stylesheet"
    href="{{ asset('dashboard/assets/css/extensions/fontawesome-5.15.3/css/all.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/css-all.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/toastr.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/toastr.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/css-toastr.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/select2.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/dropzone.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/css/extensions/font.css') }}">
{{-- yajra data table --}}
<link type="text/css" rel="stylesheet" href="{{ asset('dashboard/assets/datatables/dataTables.min.css') }}">

{{-- <link id="fontsLink" href="" rel="stylesheet"> --}}

<!-- jsvectormap css -->
{{-- <link href="{{ asset('dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css"> --}}
<!-- Icons Css -->
<link href="{{ asset('dashboard/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('dashboard/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">

@livewireStyles
@yield('css')

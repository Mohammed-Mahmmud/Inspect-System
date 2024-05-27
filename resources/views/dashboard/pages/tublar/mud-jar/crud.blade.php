@extends('dashboard.layouts.master')
@section('title', trans("Dashboard/Tublar/mudjar.".$type."Title"))
@section('css')

@if (Session::has('message'))
<script>
    toastr.success("{{ Session::get('message') }}");
</script>
@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
@endsection
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{ trans('Dashboard/Tublar/mudjar.'.$type.'_'.$examType) }}</h4>
                        <div class="page-title-jobTicketht">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('mud-jar.reports.index',$examType) }}">{{
                                        trans('Dashboard/Tublar/mudjar.mudjar') }}</a></li>
                                <li class="breadcrumb-item active">{{ trans('Dashboard/Tublar/mudjar.'.$type.$examType)  }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="card-body">
                <div id="customerList">

                    <x-dashboard.layouts.error-verify  errors="{{$errors}}"></x-dashboard.layouts.error-verify>
                    <form class="tablelist-form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($method)

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xxl-6">
                                    <h5 class="mb-3">{{ trans('Dashboard/Tublar/mudjar.'.$type.$examType."Details") }}</h5>
                                    <div class="card">

                                        <div class="border">
                                            <ul class="nav nav-pills custom-hover-nav-tabs">
                                                <li class="nav-item">
                                                    <a href="#custom-hover-customere" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="bx bx-notepad  nav-icon nav-tab-position"></i>
                                                        <h5 class="nav-titl nav-tab-position m-0">{{ trans('Dashboard/Tublar/mudjar.header') }}</h5>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#custom-hover-reviews" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="bx bx-align-justify nav-icon nav-tab-position"></i>
                                                        <h5 class="nav-titl nav-tab-position m-0">{{ trans('Dashboard/Tublar/mudjar.description') }}</h5>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content text-muted">
                                                <div class="tab-pane show active" id="custom-hover-customere">
                                                    <h6 style="text-align:center">{{ trans('Dashboard/Tublar/mudjar.'.$examType.'Content') }}</h6>
                                                    <div class="">
                                                        @include('dashboard.pages.tublar.mud-jar.modal.content')
                                                    </div>
                                                </div>
                                                <input type="hidden" name='type' value="{{ $examType }}" required />
                                                <div class="tab-pane" id="custom-hover-reviews">
                                                    <h6 style="text-align:center">{{ trans('Dashboard/Tublar/mudjar.'.$examType.'TableDesc') }}</h6>
                                                    <div class="" width:'100%'>
                                                        @include('dashboard.pages.tublar.mud-jar.modal.description')

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <br>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger" href="{{ route( 'mud-jar.reports.index', [ 'type' =>$examType ] ) }}">{{
                                                    trans('Dashboard/Tublar/mudjar.close') }}</a>
                                    <button style="color: black; font-weight:bold;" type="submit" class="btn btn-success" id="add-btn">{{
                                                    trans('Dashboard/Tublar/mudjar.save') }}</button>
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- end preloader-menu -->



@endsection

@section('js')
    <script src="{{ asset('dashboard/layouts/formRepeater/js/js.js') }}"></script>
    <script src="{{asset('dashboard/layouts/formRepeater/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/layouts/formRepeater/js/jquery.repeater.min.js')}}"></script>
@if (Session::has('message'))
<script>
    toastr.success("{{ Session::get('message') }}");
</script>
@endif
@endsection

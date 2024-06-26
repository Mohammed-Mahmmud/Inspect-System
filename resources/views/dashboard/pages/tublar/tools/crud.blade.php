@extends('dashboard.layouts.master')
@section('title', trans("Dashboard/Tublar/tools.".$type."Title"))
@section('css')
<link rel="stylesheet" href="{{asset('dashboard/pages/tools/tools/css/crud.css')}}">
<link rel="stylesheet" href="{{asset('dashboard/pages/tools/tools/css/bootstrap.min.css')}}">
@if (Session::has('message'))
<script>
    toastr.success("{{ Session::get('message') }}");

</script>
@endif
@endsection
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/Tublar/tools.'.$type.'_'.$examType) }}" title2="{{trans('Dashboard/Tublar/tools.tools') }}" route="" title3="{{ trans('Dashboard/Tublar/tools.'.$type.$examType)  }}" />
            <div class="card-body">
                <div id="customerList">
                    <x-dashboard.layouts.error-verify errors="{{$errors}}"></x-dashboard.layouts.error-verify>
                    <form class="tablelist-form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method($method)
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xxl-6">
                                    {{-- <h5 class="mb-3">{{ trans('Dashboard/Tublar/tools.'.$type.$examType."Details") }}</h5> --}}
                                    <div class="card">
                                        <div class="border">
                                            <ul class="nav nav-pills custom-hover-nav-tabs">
                                                <li class="nav-item">
                                                    <a href="#custom-hover-customere" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="bx bx-notepad  nav-icon nav-tab-position"></i>
                                                        <h5 class="nav-titl nav-tab-position m-0">{{ trans('Dashboard/Tublar/tools.header') }}</h5>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#custom-hover-reviews" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="bx bx-align-justify nav-icon nav-tab-position"></i>
                                                        <h5 class="nav-titl nav-tab-position m-0">{{ trans('Dashboard/Tublar/tools.description') }}</h5>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content text-muted">
                                                <div class="tab-pane show active" id="custom-hover-customere">
                                                    <h6 style="text-align:center">{{ trans('Dashboard/Tublar/tools.'.$examType.'Content') }}</h6>
                                                    <div class="">
                                                        @include('dashboard.pages.tublar.tools.modal.content')
                                                    </div>
                                                </div>
                                                <input type="hidden" name='type' value="{{ $examType }}" required />
                                                <div class="tab-pane" id="custom-hover-reviews">
                                                    <h6 style="text-align:center">{{ trans('Dashboard/Tublar/tools.'.$examType.'TableDesc') }}</h6>
                                                    <div class="" width='100%'>
                                                        @include('dashboard.pages.tublar.tools.modal.body.'.str_replace('*','-',$examType))
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-body -->
                                        <br>
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger" href="{{ route( 'tools.reports.index', [ 'type' =>$examType ] ) }}">{{
                                                                trans('Dashboard/Tublar/tools.close') }}</a>
                                                <button style="color: black; font-weight:bold;" type="submit" class="btn btn-success" id="add-btn">{{
                                                                trans('Dashboard/Tublar/tools.save') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
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

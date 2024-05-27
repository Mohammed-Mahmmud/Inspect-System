@extends('dashboard.layouts.master')
@section('title', trans("Dashboard/jobTicket.".$type."Title"))
@section('css')
    <link href="{{ asset('dashboard/assets/libs/swiper/swiper-bundle.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");

        </script>
    @endif
    <!-- Sweet Alert css-->
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/jobTicket.jobTicket') }}"
                                        title2="{{ trans('Dashboard/report_type.report_types') }}"
                                        route="{{route('jobTicket.index')}}"
                                        title3="{{ trans('Dashboard/jobTicket.create_new_jobTicket') }}"/>

                <div class="card-body">
                    <div id="customerList">

                        <x-dashboard.layouts.error-verify errors="{{$errors}}"></x-dashboard.layouts.error-verify>
                        <form class="tablelist-form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method($method)

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xxl-6">
                                        <h5 class="mb-3">Job Ticket Details</h5>
                                        <div class="card">
                                            <div class="border">
                                                <ul class="nav nav-pills custom-hover-nav-tabs">
                                                    <li class="nav-item">
                                                        <a href="#custom-hover-customere" data-bs-toggle="tab"
                                                           aria-expanded="false" class="nav-link active">
                                                            <i class="bx bx-notepad  nav-icon nav-tab-position"></i>
                                                            <h5 class="nav-titl nav-tab-position m-0">Content</h5>
                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="#custom-hover-reviews" data-bs-toggle="tab"
                                                           aria-expanded="false" class="nav-link">
                                                            <i class="bx bx-align-justify nav-icon nav-tab-position"></i>
                                                            <h5 class="nav-titl nav-tab-position m-0">Description</h5>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content text-muted">
                                                    <div class="tab-pane show active" id="custom-hover-customere">
                                                        <h6 style="text-align:center">Job Ticket Content</h6>
                                                        <div class="">
                                                            @include('dashboard.pages.jobTicket.modal.content')
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane" id="custom-hover-reviews">
                                                        <h6 style="text-align:center">Job Ticket Table</h6>
                                                        <div class="" width:
                                                        '100%'>
                                                        @include('dashboard.pages.jobTicket.modal.description')

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger"
                                                           href="{{ route('jobTicket.index') }}">{{
                                                                        trans('Dashboard/jobTicket.close') }}</a>
                                                        <button style="color: black; font-weight:bold;" type="submit"
                                                                class="btn btn-success" id="add-btn">{{
                                                                        trans('Dashboard/jobTicket.save') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-body -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('dashboard/layouts/formRepeater/js/js.js') }}"></script>
    <script src="{{asset('dashboard/layouts/formRepeater/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/layouts/formRepeater/js/jquery.repeater.min.js')}}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");

        </script>
    @endif
@endsection

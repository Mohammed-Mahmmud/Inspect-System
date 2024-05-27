@extends('dashboard.layouts.master')
@section('title', TranslationHelper::translate(ucwords($type.' '.$examType)))
@section('css')
<link rel="stylesheet" href="{{ asset('dashboard/pages/tublar/tubs/css/style.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb
                    title1="{{ TranslationHelper::translate($type.'_'.ucwords($examType)) }}"
                    title2="{{TranslationHelper::translate('tubs') }}" route=""
                    title3="{{ TranslationHelper::translate($type.' '.ucwords($examType))  }}"/>
                <div class="card-body">
                    <div id="customerList">
                        <x-dashboard.layouts.error-verify errors="{{$errors}}"></x-dashboard.layouts.error-verify>
                        <form class="tablelist-form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method($method)
                            <div class="modal-body">
                              {{-- conent --}}
                              <x-dashboard.reports.tubs.content  :type="$type" :examType="$examType" :tubs="$tubs" :accept="$accept" :orders="$orders"></x-dashboard.reports.tubs.content>
                              {{-- end content --}}
                            </div>
                            <br>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger"
                                       href="{{ route( 'tubs.reports.index', [ 'type' =>$examType ] ) }}">{{
                                                TranslationHelper::translate(ucwords('close')) }}</a>
                                    <button style="color: black; font-weight:bold;" type="submit"
                                            class="btn btn-success" id="add-btn">{{
                                                TranslationHelper::translate(ucwords('save')) }}</button>
                                </div>
                            </div><br>
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
    <script src="{{asset('dashboard/pages/tublar/tubs/js/script.js')}}"></script>
    <script src="{{ asset('dashboard/layouts/formRepeater/js/js.js') }}"></script>
    <script src="{{asset('dashboard/layouts/formRepeater/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/layouts/formRepeater/js/jquery.repeater.min.js')}}"></script>
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
@endsection

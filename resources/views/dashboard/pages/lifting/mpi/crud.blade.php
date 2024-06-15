@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Lifting/mpi.' . $type . 'Title'))
@section('css')
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0" style="color:blue;">{{ trans('Dashboard/Lifting/mpi.mpi') }}</h4>
                            <div class="page-title-mpiht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('mpi.reports.index') }}">{{ trans('Dashboard/Lifting/mpi.mpi') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ trans('Dashboard/Lifting/mpi.viewmpi') }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">{{ trans('Dashboard/Lifting/mpi.' . $type . '_Report') }}</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-lg-auto">
                                        </div>
                                        <div class="col-sm">

                                        </div>
                                    </div>
                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.layouts.error-verify>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            @if ($type == 'Edit' && !empty($mpi->getMedia($mpi->type)))
                                                @include('dashboard.pages.lifting.mpi.modal.gallery')
                                            @endif
                                        </div>
                                        <form class="tablelist-form" action="{{ $action }}" method="POST"
                                            id="my-form" enctype="multipart/form-data">
                                            @csrf
                                            @method($method)
                                            <div class="row">
                                                @if ($type == 'Edit')
                                                    <x-form.input_label class="col-6"
                                                        value="{{ $mpi->report_number ?? '' }}" label="Report Number :"
                                                        type="text" name="report_number" id="report_number" readonly />
                                                    <x-form.dropdown class="col-6"
                                                        label="{{ trans('Dashboard/orders.order') }}" name="order_id"
                                                        id="order_id" disabledOption="Choose Order" :data="$orders"
                                                        selectedData="{{ optional($mpi->getOrders)->id }}"
                                                        span="{{ trans('Dashboard/orders.order') }}" />
                                                @else
                                                    <x-form.dropdown class="col-12"
                                                        label="{{ trans('Dashboard/orders.order') }}" name="order_id"
                                                        id="order_id" disabledOption="Choose Order" :data="$orders"
                                                        selectedData="{{ optional($mpi->getOrders)->id }}"
                                                        span="{{ trans('Dashboard/orders.order') }}" />
                                                @endif

                                                <x-form.input_label class="col-4"
                                                    value="{{ $mpi->customer_work_number ?? '' }}"
                                                    placeholder="Enter Customer Work Number" label="Customer Work Number :"
                                                    type="text" name="customer_work_number" id="customer_work_number" />

                                                <x-form.input_label class="col-4" placeholder="Enter Report Date"
                                                    value="{{ $mpi->date ?? '' }}" label="Report Date :" type="date"
                                                    name="date" id="date" required />


                                                <x-form.input_label class="col-4" placeholder="Enter Location"
                                                    value="{{ $mpi->location ?? '' }}" label="Location :" type="text"
                                                    name="location" id="location" />
                                                <x-form.input_label class="col-12" placeholder="Enter Report description"
                                                    label="description :" value="{{ $mpi->description ?? '' }}"
                                                    type="text" name="description" id="description" />
                                                <x-form.input_label class="col-6" placeholder="Enter serial Number"
                                                    value="{{ $mpi->serial ?? '' }}" label="serial Number:" type="text"
                                                    name="serial" id="serial" />

                                                <x-form.input_label class="col-6"
                                                    placeholder="Enter Report Purchase Order No" label="Purchase Order"
                                                    value="{{ $mpi->purchase_order_no ?? '' }}" type="text"
                                                    name="purchase_order_no" id="purchase_order_no" />

                                                {{-- multi select  --}}
                                                <div class="col-4">
                                                    <x-dashboard.reports.magnetizing-current :var="$mpi" />
                                                </div>
                                                <div class="col-4">
                                                    <x-dashboard.reports.surface-condition :var="$mpi" />
                                                </div>
                                                <div class="col-4">
                                                    <x-dashboard.reports.magnetic-particles :var="$mpi" />
                                                </div>
                                                <div class="row" style="margin:2%">
                                                    <div class="col-6">
                                                        <x-dashboard.reports.equipment :var="$mpi" />
                                                    </div>
                                                    <div class="col-6">
                                                        <x-dashboard.reports.specification :var="$mpi" />
                                                    </div>
                                                    {{-- end equipment  --}}
                                                </div>
                                                <x-form.input_label class="col-6" placeholder="Enter Area Inspected"
                                                    value="{{ $mpi->extent ?? '' }}" label="Area Inspected:"
                                                    type="text" name="extent" id="extent" />


                                                <x-form.input_label class="col-6" placeholder="Enter supervisor Name"
                                                    value="{{ $mpi->supervisor ?? '' }}" label="Supervisor:"
                                                    type="text" name="supervisor" id="supervisor" />
                                                <input type="hidden" name="type" value="mpi">
                                                <input type="hidden" name="user_id"
                                                    value="{{ Illuminate\Support\Facades\Auth::user()->id }}">
                                                <x-form.input_label class="col-12" placeholder="Enter  Note "
                                                    value="{{ $mpi->note ?? '' }}" label="Note:" type="text"
                                                    name="note" id="note" />
                                                @include('dashboard.pages.lifting.mpi.modal.result')


                                            </div>
                                            <div class="row">
                                                {{-- image modal --}}
                                                @include('dashboard.pages.lifting.mpi.modal.upload_images')
                                                {{-- end of image modal --}}

                                                {{-- accjept switch --}}
                                                <x-form.switches class="col-4" value="{{ $mpi->acceptance ?? '' }}"
                                                    style="font-size: 1.4em;" label=":Acceptance" name="acceptance"
                                                    id="acceptance" />
                                                <br><br>
                                                {{-- end accjept switch --}}

                                                {{-- extend content modal --}}
                                                @unless (isset($mpi))
                                                    @include('dashboard.pages.lifting.mpi.modal.extend_content')
                                                @else
                                                    @include(
                                                        'dashboard.pages.lifting.mpi.modal.extend_content',
                                                        [
                                                            $mpi->first_label,
                                                            $mpi->first_content,
                                                            $mpi->second_label,
                                                            $mpi->second_content,
                                                        ]
                                                    )
                                                @endunless
                                                {{-- end extend content modal --}}

                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a type="button" style="color: black; font-weight:bold;"
                                                        class="btn btn-danger"
                                                        href="{{ route('mpi.reports.index') }}">{{ trans('Dashboard/Lifting/mpi.close') }}</a>
                                                    <button style="color: black; font-weight:bold;" type="submit"
                                                        class="btn btn-success"
                                                        id="add-btn">{{ trans('Dashboard/Lifting/mpi.save') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
@endsection
@section('js')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
    <script src="{{ asset('dashboard/assets/libs/ckeditor/build/ckeditor.js') }}"></script>
@endsection

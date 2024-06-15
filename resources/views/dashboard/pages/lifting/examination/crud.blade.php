@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Lifting/examination.' . $type . 'Title'))
@section('css')
    <link href="{{ asset('dashboard') }}/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/Lifting/examination.examination') }}"
                    title2="{{ trans('Dashboard/Lifting/examination.examination') }}"
                    route="{{ route('examination.reports.index') }}"
                    title3="{{ trans('Dashboard/Lifting/examination.viewExamination') }}" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">
                                    {{ trans('Dashboard/Lifting/examination.' . $type . $examType) }}</h4>
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
                                    <form class="tablelist-form" action="{{ $action }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method($method)

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    @if ($type == 'Edit')
                                                        <x-form.input_label class="col-6"
                                                            placeholder="Review report number"
                                                            value="{{ $examination->report_number ?? '' }}"
                                                            label="Report Number :" type="text" name="report_number"
                                                            id="report_number" readonly />
                                                        <x-form.dropdown class="col-6"
                                                            label="{{ trans('Dashboard/orders.order') }}" name="order_id"
                                                            id="order_id" disabledOption="Choose Order" :data="$orders"
                                                            selectedData="{{ optional($examination->getOrders)->id }}"
                                                            span="{{ trans('Dashboard/orders.order') }}" />
                                                        <hr>
                                                    @else
                                                        <x-form.dropdown class="col-12"
                                                            label="{{ trans('Dashboard/orders.order') }}" name="order_id"
                                                            id="order_id" disabledOption="Choose Order" :data="$orders"
                                                            selectedData="{{ optional($examination->getOrders)->id }}"
                                                            span="{{ trans('Dashboard/orders.order') }}" />
                                                        <hr>
                                                    @endif

                                                    <x-form.input_label class="col-4"
                                                        value="{{ $examination->date ?? '' }}"
                                                        placeholder="Enter Thorugh Examination Date"
                                                        label="Thorugh Examination Date :" type="date" name="date"
                                                        id="exam_date" />
                                                    <x-form.input_label class="col-4" placeholder="Enter Identified Number"
                                                        value="{{ $examination->serial ?? '' }}"
                                                        label="Identified Number :" type="text" name="serial"
                                                        id="serial" />
                                                    <x-form.input_label class="col-4" placeholder="Enter QTY"
                                                        value="{{ $examination->qty ?? '' }}" label="QTY :" type="text"
                                                        name="qty" id="qty" />
                                                    @include("dashboard.pages.lifting.examination.description.$examType")
                                                    <x-form.input_label class="col-6"
                                                        value="{{ $examination->manufature_date ?? '' }}"
                                                        placeholder="Enter Manufature Date" label="Manufature Date :"
                                                        type="date" name="manufature_date" id="manufature_date" />
                                                    <x-form.input_label class="col-6"
                                                        value="{{ $examination->last_exam_date ?? '' }}"
                                                        placeholder="Enter Last_Exam Date" label="Last Exam Date :"
                                                        type="date" name="last_exam_date" id="last_exam_date" />

                                                    <x-form.input_label class="col-4"
                                                        value="{{ $examination->original_cert_number ?? '' }}"
                                                        placeholder="Enter Original Certificate No "
                                                        label="Original Certificate No :" type="text"
                                                        name="original_cert_number" id="original_cert_number" />
                                                    <x-form.input_label class="col-4"
                                                        value="{{ $examination->original_cert_date ?? '' }}"
                                                        placeholder="Enter Original Certificate Date"
                                                        label="Original Certificate Date :" type="date"
                                                        name="original_cert_date" id="original_cert_date" />
                                                    <x-form.input_label class="col-4"
                                                        value="{{ $examination->cert_body_name ?? '' }}"
                                                        placeholder="Enter Name of Certifying Body"
                                                        label="Name of Certifying Body :" type="text"
                                                        name="cert_body_name" id="cert_body_name" />
                                                </div>


                                                <div class="row">
                                                    <!-- Base Example -->
                                                    <div class="accordion" id="default-accordion-example">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                                    aria-controls="collapseOne">
                                                                    Is this the first examination after installation or
                                                                    assembly at a new site or location?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <x-form.radio-btn class="col-6" value="0"
                                                                        val="{{ $examination->first_exam_after ?? '' }}"
                                                                        label=":Check Accourding to No"
                                                                        name="first_exam_after" id="first_exam_after1" />
                                                                    <x-form.radio-btn class="col-6" value="1"
                                                                        val="{{ $examination->first_exam_after ?? '' }}"
                                                                        label=":Check Accourding to YES"
                                                                        name="first_exam_after" id="first_exam_after2" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseTwo" aria-expanded="false"
                                                                    aria-controls="collapseTwo">
                                                                    If the answer to the above question is YES has the
                                                                    equipment been installed correctly?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                aria-labelledby="headingTwo"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    {{-- <x-form.switches class="col-12" value="{{ $examination->has_equipment ?? '' }}" style="font-size: 1em;" label=":Check Accourding Has Equipment" name="has_equipment" id="has_equipment" /> --}}
                                                                    <x-form.radio-btn class="col-6" value="0"
                                                                        val="{{ $examination->has_equipment ?? '' }}"
                                                                        label=":Check Accourding to No"
                                                                        name="has_equipment" id="has_equipment1" />
                                                                    <x-form.radio-btn class="col-6" value="1"
                                                                        val="{{ $examination->has_equipment ?? '' }}"
                                                                        label=":Check Accourding to YES"
                                                                        name="has_equipment" id="has_equipment2" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseThree" aria-expanded="false"
                                                                    aria-controls="collapseThree">
                                                                    Was the examination carried out ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                aria-labelledby="headingThree"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <x-form.radio-btn class="col-6"
                                                                        value="interval_month"
                                                                        val="{{ $examination->carried_out ?? '' }}"
                                                                        label=":Within an interval of 6 months?"
                                                                        name="carried_out" id="carried_out1" />
                                                                    <x-form.radio-btn class="col-6" value="interval_year"
                                                                        val="{{ $examination->carried_out ?? '' }}"
                                                                        label=":Within an interval of 12 months?"
                                                                        name="carried_out" id="carried_out2" />
                                                                    <x-form.radio-btn class="col-6" value="exam_scheme"
                                                                        val="{{ $examination->carried_out ?? '' }}"
                                                                        label=":In accordance with an examination scheme?"
                                                                        name="carried_out" id="carried_out3" />
                                                                    <x-form.radio-btn class="col-6" value="circumstances"
                                                                        val="{{ $examination->carried_out ?? '' }}"
                                                                        label=":After the occurrence of exceptional circumstances?"
                                                                        name="carried_out" id="carried_out4" />

                                                                    {{--  <x-form.switches class="col-6" value="{{ $examination->interval_month ?? '' }}" style="font-size: 1em;" label=" : Within an interval of 6 months?" name="interval_month" id="interval_month" />  --}}
                                                                    {{--  <x-form.switches class="col-6" value="{{ $examination->interval_year ?? '' }}" style="font-size: 1em;"  label=" : Within an interval of 12 months?" name="interval_year" id="interval_year" />  --}}
                                                                    {{--  <x-form.switches class="col-6" value="{{ $examination->exam_scheme ?? '' }}" style="font-size: 1em;"    label=" : In accordance with an examination scheme?" name="exam_scheme" id="exam_scheme" />  --}}
                                                                    {{--  <x-form.switches class="col-6" value="{{ $examination->circumstances ?? '' }}" style="font-size: 1em;"  label=" : After the occurrence of exceptional circumstances?" name="circumstances" id="circumstances" />  --}}
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFour" aria-expanded="false"
                                                                    aria-controls="collapseFour">
                                                                    Identification of any part found to have a defect
                                                                    which is or could become a danger to persons and a
                                                                    description of the defect?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                                aria-labelledby="headingFour"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <x-form.input_label class="col-12"
                                                                        value="{{ $examination->defect_note ?? '' }}"
                                                                        placeholder="If none state NONE"
                                                                        label="Defect Note :" type="text"
                                                                        name="defect_note" id="defect_note" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseFive" aria-expanded="false"
                                                                    aria-controls="collapseFive">
                                                                    Is the above an existing or imminent danger to
                                                                    persons ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                                aria-labelledby="headingFive"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    {{-- <x-form.switches class="col-12" value="{{ $examination->danger ?? '' }}" style="font-size: 1em;" label=": Choose According to Yes" name="danger" id="danger" /> --}}
                                                                    <x-form.radio-btn class="col-6" value="0"
                                                                        val="{{ $examination->danger ?? '' }}"
                                                                        label=":Check Accourding to No" name="danger"
                                                                        id="danger1" />
                                                                    <x-form.radio-btn class="col-6" value="1"
                                                                        val="{{ $examination->danger ?? '' }}"
                                                                        label=":Check Accourding to YES" name="danger"
                                                                        id="danger2" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSix" aria-expanded="false"
                                                                    aria-controls="collapseSix">
                                                                    Is the above a defect which is not yet but could
                                                                    become a danger to persons ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                                aria-labelledby="headingSix"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <x-form.input_label class="col-12"
                                                                        value="{{ $examination->danger_date ?? '' }}"
                                                                        placeholder=":If YES state the date by when"
                                                                        label="Date  :" type="date" name="danger_date"
                                                                        id="danger_date" />

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSeven">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseSeven" aria-expanded="false"
                                                                    aria-controls="collapseSeven">
                                                                    Particulars of any repair, renewal or alteration
                                                                    required to remedy the defect identified above ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeven" class="accordion-collapse collapse"
                                                                aria-labelledby="headingSeven"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black">
                                                                    <x-form.input_label class="col-12"
                                                                        value="{{ $examination->perfect_note ?? '' }}"
                                                                        placeholder="Note" label="Note  :" type="text"
                                                                        name="perfect_note" id="perfect_note" />

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingEight">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseEight" aria-expanded="false"
                                                                    aria-controls="collapseEight">
                                                                    Particulars of any tests carried out as part of the
                                                                    examination ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse"
                                                                aria-labelledby="headingEight"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black">
                                                                    <div class="col-6">
                                                                        <label for="customername-field"
                                                                            class="form-label">Choose Carried
                                                                            Exam</label>
                                                                        <select name="carried_exam[]" multiple
                                                                            multiselect-search="true"
                                                                            data-placeholder="Choose an Option"
                                                                            multiselect-select-all="true">
                                                                            <option value="visual_inspection"
                                                                                {{ isset($examination->carried_exam) && in_array('visual_inspection', $examination->getDeCode($examination->carried_exam)) ? 'selected' : '' }}>
                                                                                Visual Inspection
                                                                            </option>
                                                                            <option value="function_test"
                                                                                {{ isset($examination->carried_exam) && in_array('function_test', $examination->getDeCode($examination->carried_exam)) ? 'selected' : '' }}>
                                                                                Function Test
                                                                            </option>
                                                                            <option value="load_test"
                                                                                {{ isset($examination->carried_exam) && in_array('load_test', $examination->getDeCode($examination->carried_exam)) ? 'selected' : '' }}>
                                                                                Load Test
                                                                            </option>
                                                                            <option value="mpi"
                                                                                {{ isset($examination->carried_exam) && in_array('mpi', $examination->getDeCode($examination->carried_exam)) ? 'selected' : '' }}>
                                                                                MPI
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <x-form.input_label class="col-6"
                                                                        value="{{ $examination->carried_note ?? '' }}"
                                                                        placeholder="Examination Carried Out Note"
                                                                        label=" Enter Examination Carried Out Note  :"
                                                                        type="text" name="carried_note"
                                                                        id="carried_note" />

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingNine">
                                                                <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseNine" aria-expanded="false"
                                                                    aria-controls="collapseNine" id="newid">
                                                                    IS THIS EQUIPMENT SAFE TO OPERATE ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseNine" class="accordion-collapse collapse"
                                                                aria-labelledby="headingNine"
                                                                data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <x-form.radio-btn class="col-6" value="0"
                                                                        val="{{ $examination->safe_equipment ?? '' }}"
                                                                        label=":Check Accourding to No"
                                                                        name="safe_equipment" id="safe_equipment1" />
                                                                    <x-form.radio-btn class="col-6" value="1"
                                                                        val="{{ $examination->safe_equipment ?? '' }}"
                                                                        label=":Check Accourding to YES"
                                                                        name="safe_equipment" id="safe_equipment2" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <input type="hidden" name="type" value="{{ $examType }}" />


                                                    {{-- accjept switch --}}
                                                    <div class="col-4"></div>
                                                    <div class="col-4">
                                                        <br>
                                                        <div class="row">
                                                            @if ($examType == 'thorough')
                                                                <div class="col-8">
                                                                    @if ($type == 'Edit')
                                                                        @include(
                                                                            'dashboard.pages.lifting.examination.modal.checklist',
                                                                            ['examination' => $examination]
                                                                        )
                                                                    @else
                                                                        @include('dashboard.pages.lifting.examination.modal.checklist')
                                                                    @endif
                                                                </div>
                                                            @endif

                                                            <x-form.switches class="col-4"
                                                                value="{{ $examination->accept ?? '' }}"
                                                                style="font-size: 1.4em;" label=":Acceptance"
                                                                name="accept" id="accept" />
                                                        </div>
                                                        <br>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a type="button" style="color: black; font-weight:bold;"
                                                            class="btn btn-danger"
                                                            href="{{ route('examination.reports.index', ['type' => $examType]) }}">{{ trans('Dashboard/Lifting/examination.close') }}</a>
                                                        <button style="color: black; font-weight:bold;" type="submit"
                                                            class="btn btn-success"
                                                            id="add-btn">{{ trans('Dashboard/Lifting/examination.save') }}</button>
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

@endsection

@section('js')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
    <script src="{{ asset('dashboard') }}/pages/lifting/examination/js/js.js"></script>
    <script src="{{ asset('dashboard/assets/js/extensions/mdb.umd.min.js') }}"></script>
@endsection

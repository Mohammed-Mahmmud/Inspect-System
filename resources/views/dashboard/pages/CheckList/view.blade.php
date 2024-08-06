@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/report_type.title'))
@section('css')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
    <!-- Sweet Alert css-->
    <link href="{{ asset('dashboard') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

@endsection
@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.breadcrumb title1="{{ trans('Dashboard/report_type.report_types') }}"
                    title2="{{ trans('Dashboard/report_type.report_types') }}" route="{{ route('') }}"
                    title3="{{ trans('Dashboard/report_type.viewreport_types') }}" />

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">{{ trans('Dashboard/report_type.addreport_types') }}</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn" href="{{ route('report_type.create') }}"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#showModal">{{ trans('Dashboard/report_type.addreport_type') }}</a>
                                                {{-- <button name="delete_all" id="delete_all" class="btn btn-subtle-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>  --}}
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search...">
                                                    <i class="ri-search-line search-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <x-dashboard.error-verify errors="{{ $errors }}"></x-dashboard.error-verify>
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0 table_id">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            {{-- <input class="form-check-input" name="select_all" id="select-all" type="checkbox" onclick="CheckAll('box1', this)">  --}}

                                                            {{-- <input class="form-check-input" type="checkbox" id="checkAll" value="option"> --}}
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="customer_id">#</th>
                                                    <th class="sort" data-sort="customer_name">
                                                        {{ trans('Dashboard/report_type.name') }}</th>
                                                    <th class="sort" data-sort="customer_full_name">
                                                        {{ trans('Dashboard/report_type.type') }}</th>
                                                    <th class="sort" data-sort="customer_email">
                                                        {{ trans('Dashboard/report_type.url') }}</th>
                                                    <th class="sort" data-sort="customer_email">
                                                        {{ trans('Dashboard/report_type.action') }}</th>

                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    // $lan_report_type = App::getLocale()."_report_type";
                                                    $i = 1;
                                                @endphp
                                                @foreach ($report_types as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                {{-- <input class="form-check-input" type="checkbox"  value="{{ $item->id }}" class="box1"> --}}

                                                                {{-- <input class="form-check-input" type="checkbox" name="chk_child" value="option1"> --}}
                                                            </div>
                                                        </th>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name">{{ $item->name }}</td>
                                                        <td class="customer_full_name">{{ $item->type }}</td>
                                                        <td class="email">{{ $item->url }}</td>

                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a class="btn btn-sm btn-info edit-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{ $item->id }}">
                                                                        <i class="bx bxs-edit-alt"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="remove">
                                                                    <a class="btn btn-sm btn-danger remove-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#delete{{ $item->id }}">
                                                                        <i class="ph-trash-bold"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- Modal -->
                                                                <form action="{{ route('report_type.destroy', $item) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="modal fade" id="delete{{ $item->id }}"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="exampleModalCenterTitle"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLongTitle">
                                                                                        {{ trans('Dashboard/report_type.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/report_type.delete_message') . '  ' . $item->name }}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div
                                                                                        class="hstack gap-2 justify-content-end">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal">{{ trans('Dashboard/report_type.close') }}</button>

                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn">{{ trans('Dashboard/report_type.delete_report_type') }}</button>
                                                                </form>

                                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        {{-- end modal --}}
                    </div>
                    </td>
                    </tr>
                    {{-- update --}}
                    <form class="tablelist-form" action="{{ route('report_type.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel2">
                                            {{ trans('Dashboard/report_type.edit') . ' ' . $item->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close" id="close-modal"></button>
                                    </div>
                                    <form class="tablelist-form" action="" method="">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="customername-field"
                                                            class="form-label"></label>{{ trans('Dashboard/report_type.name') }}</label>
                                                        <input type="text" id="customername-field" name="name"
                                                            class="form-control"
                                                            placeholder="{{ trans('Dashboard/report_type.placeholderName') }}"
                                                            value="{{ $item->name }}" required="">
                                                    </div>
                                                    <x-form.type_select class="col-6" type="create" name="type"
                                                        value="{{ $item->type }}" label="choose report type" />

                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="customername-field"
                                                            class="form-label"></label>{{ trans('Dashboard/report_type.url') }}</label>
                                                        <input type="text" id="customername-field" name="url"
                                                            class="form-control"
                                                            placeholder="{{ trans('Dashboard/report_type.placeholderUrl') }}"
                                                            value="{{ $item->url }}" required="">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">{{ trans('Dashboard/report_type.close') }}</button>

                                                    <button type="submit" class="btn btn-info"
                                                        id="add-btn">{{ trans('Dashboard/report_type.update_report_type') }}</button>
                                    </form>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                    </form>
                    {{-- end update --}}
                    @endforeach
                    </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    {{ $report_types->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
    </div>
    <!-- end col -->
    </div>
    <!-- end row -->

    {{-- create form --}}
    <form class="tablelist-form" action="{{ route('report_type.store') }}" method="POST">
        @csrf

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ trans('Dashboard/report_type.create_new_report_type') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" action="" method="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="customername-field"
                                            class="form-label">{{ trans('Dashboard/report_type.name') }}</label>
                                        <input type="text" id="customername-field" name="name"
                                            class="form-control"
                                            placeholder="{{ trans('Dashboard/report_type.placeholderName') }}" required>
                                    </div>

                                    <x-form.type_select class="col-6" type="create" name="type"
                                        label="choose report type" />


                                    <br>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="customername-field"
                                                class="form-label">{{ trans('Dashboard/report_type.url') }}</label>
                                            <input type="text" id="customername-field" name="url"
                                                class="form-control"
                                                placeholder="{{ trans('Dashboard/report_type.placeholderUrl') }}"
                                                required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal">{{ trans('Dashboard/report_type.close') }}</button>

                                    <button type="submit" class="btn btn-success"
                                        id="add-btn">{{ trans('Dashboard/report_type.create_report_type') }}</button>
                    </form>
                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                </div>
            </div>
    </form>
    </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <i class="bi bi-trash3 display-5 text-danger"></i>
                        <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this report_type ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                            data-bs-dismiss="modal">{{ trans('Dashboard/report_type.close') }}</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->

    </div>
    <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->







    </div><!-- end preloader-menu -->

@endsection

@section('js')
    {{-- Certifications downloads --}}
    <script type="text/javascript">
        function CheckAll(className, source) {
            var checkboxes = document.getElementsByClassName(className);
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>

    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
    <!-- prismjs plugin -->
    <script src="{{ asset('dashboard') }}/assets/libs/prismjs/prism.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/list.js/list.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="{{ asset('dashboard') }}/assets/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ asset('dashboard') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
@endsection

@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Lifting/shaklesize.title'))
@section('css')
    {{-- for edit icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    {{-- for delete icons --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{ trans('Dashboard/Lifting/shaklesize.shaklesizes') }}</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);">{{ trans('Dashboard/Lifting/shaklesize.shaklesizes') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        {{ trans('Dashboard/Lifting/shaklesize.viewshaklesizes') }}</li>
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
                                <div>
                                    <a class="btn btn-success add-btn" href="{{ route('examination.shaklesize.create') }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#showModal">{{ trans('Dashboard/Lifting/shaklesize.addshaklesize') }}</a>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                    <div class="table">
                                        <table class="table align-middle mb-0 table_id">
                                            <thead class="table-dark">
                                                <tr>

                                                    <th class="sort" data-sort="customer_id">#</th>
                                                    <th class="sort" data-sort="customer_name">
                                                        {{ trans('Dashboard/Lifting/shaklesize.size') }}</th>
                                                    <th class="sort" data-sort="customer_full_name">
                                                        {{ trans('Dashboard/Lifting/shaklesize.swl') }}</th>
                                                    <th class="sort" data-sort="action">
                                                        {{ trans('Dashboard/Lifting/shaklesize.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    // $lan_shaklesize = App::getLocale()."_shaklesize";
                                                    $i = 1;
                                                @endphp
                                                @foreach ($shaklesizes as $item)
                                                    <tr>

                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name">{{ $item->size }}</td>
                                                        <td class="customer_full_name">{{ $item->swl }}</td>

                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a class="btn btn-sm btn-info edit-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{ $item->id }}">
                                                                        {{-- {{ trans('Dashboard/Lifting/shaklesize.edit') }} --}}
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="remove">
                                                                    <a class="btn btn-sm btn-danger remove-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#delete{{ $item->id }}">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- Modal -->
                                                                <form
                                                                    action="{{ route('examination.shaklesize.destroy', $item) }}"
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
                                                                                        {{ trans('Dashboard/Lifting/shaklesize.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/Lifting/shaklesize.delete_message') . '  ' . $item->name }}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div
                                                                                        class="hstack gap-2 justify-content-end">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal">{{ trans('Dashboard/Lifting/shaklesize.close') }}</button>

                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn">{{ trans('Dashboard/Lifting/shaklesize.delete_shaklesize') }}</button>
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
                    <form class="tablelist-form" action="{{ route('examination.shaklesize.update', $item->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel2">
                                            {{ trans('Dashboard/Lifting/shaklesize.edit') . ' ' . $item->size }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close" id="close-modal"></button>
                                    </div>
                                    <form class="tablelist-form" action="" method="">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="customername-field"
                                                            class="form-label">{{ trans('Dashboard/Lifting/shaklesize.size') }}</label>
                                                        <input type="text" id="customername-field" name="size"
                                                            class="form-control"
                                                            placeholder="{{ trans('Dashboard/Lifting/shaklesize.placeholderSize') }}"
                                                            value="{{ $item->size }}" required>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="customername-field"
                                                            class="form-label">{{ trans('Dashboard/Lifting/shaklesize.swl') }}</label>
                                                        <input type="text" id="customername-field" name="swl"
                                                            class="form-control"
                                                            placeholder="{{ trans('Dashboard/Lifting/shaklesize.placeholderSWL') }}"
                                                            value="{{ $item->swl }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">{{ trans('Dashboard/Lifting/shaklesize.close') }}</button>
                                                <button type="submit" class="btn btn-info"
                                                    id="add-btn">{{ trans('Dashboard/Lifting/shaklesize.update_shaklesize') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- end update --}}
                    @endforeach
                    </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    {{ $shaklesizes->links('pagination::bootstrap-5') }}
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
    <form class="tablelist-form" action="{{ route('examination.shaklesize.store') }}" method="POST">
        @csrf

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ trans('Dashboard/Lifting/shaklesize.create_new_shaklesize') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" action="" method="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="customername-field"
                                            class="form-label">{{ trans('Dashboard/Lifting/shaklesize.size') }}</label>
                                        <input type="text" id="customername-field" name="size"
                                            class="form-control"
                                            placeholder="{{ trans('Dashboard/Lifting/shaklesize.placeholderSize') }}"
                                            required>
                                    </div>
                                    <div class="col-6">
                                        <label for="customername-field"
                                            class="form-label">{{ trans('Dashboard/Lifting/shaklesize.swl') }}</label>
                                        <input type="text" id="customername-field" name="swl"
                                            class="form-control"
                                            placeholder="{{ trans('Dashboard/Lifting/shaklesize.placeholderSWL') }}"
                                            required>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">{{ trans('Dashboard/Lifting/shaklesize.close') }}</button>

                                <button type="submit" class="btn btn-success"
                                    id="add-btn">{{ trans('Dashboard/Lifting/shaklesize.create_shaklesize') }}</button>
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
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this shakle size ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                            data-bs-dismiss="modal">{{ trans('Dashboard/Lifting/shaklesize.close') }}</button>
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

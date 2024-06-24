@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Report/settings.title'))

@section('css')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
    <!-- Sweet Alert css-->
    <link href="{{ asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/Report/settings.settings') }}"
                    title2="{{ trans('Dashboard/Report/settings.settings') }}" route="{{ route('report_settings.index') }}"
                    title3="{{ trans('Dashboard/Report/settings.viewsettings') }}" />
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0"></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item active"></li>
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
                                <div class="row g-1 mb-0">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a class="btn btn-success add-btn" href="{{ route('report_settings.create') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#showModal">{{ trans('Dashboard/Report/settings.create') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">

                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                    <div class="table">
                                        <table class="table align-middle mb-0" id="table_id">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="sort" data-sort="customer_id">#</th>
                                                    <th class="sort" data-sort="customer_name">
                                                        {{ trans('Dashboard/Report/settings.name') }}</th>
                                                    <th class="sort" data-sort="customer_full_image">Image</th>
                                                    <th class="sort" data-sort="customer_full_name">
                                                        {{ trans('Dashboard/Report/settings.description') }}</th>
                                                    <th class="sort" data-sort="action">
                                                        {{ trans('Dashboard/Report/settings.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($settings as $item)
                                                    <tr>

                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name">{{ $item->key }}</td>
                                                        <td class="customer_full_image">
                                                            @if (!empty($item->getFirstMediaUrl($item->key)))
                                                                <img src="{{ asset($item->getFirstMediaUrl($item->key)) }}"
                                                                    alt="{{ $item->key }}"
                                                                    style="width: 300px;height:100px ;">
                                                            @endif
                                                        </td>
                                                        <td class="customer_full_name">{{ $item->value }}</td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a class="btn btn-sm btn-info edit-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{ $item->id }}">
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
                                                                <!-- delete Modal -->
                                                                <form
                                                                    action="{{ route('report_settings.destroy', $item) }}"
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
                                                                                        {{ trans('Dashboard/Report/settings.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/Report/settings.delete_message') . '  ' . $item->name }}
                                                                                </div>
                                                                                <x-form.submit submit="delete"
                                                                                    color="danger"></x-form.submit>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                {{-- end delete modal --}}
                                                                {{-- update form --}}
                                                                <form
                                                                    action="{{ route('report_settings.update', $item->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal fade" id="edit{{ $item->id }}"
                                                                        tabindex="-1" aria-labelledby="exampleModalLabel2"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header bg-light p-3">
                                                                                    <h5 class="modal-title"
                                                                                        id="exampleModalLabel2">
                                                                                        {{ trans('Dashboard/Report/settings.edit') . ' ' . $item->key }}
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                </div>
                                                                                <form class="tablelist-form"
                                                                                    action="" method="">
                                                                                    <div class="modal-body">
                                                                                        <div class="mb-3">
                                                                                            <div class="row">
                                                                                                <div class="row">
                                                                                                    <x-form.input_label
                                                                                                        value="{{ $item->key }}"
                                                                                                        class="col-12"
                                                                                                        placeholder="{{ trans('Dashboard/Report/settings.placeholderName') }}"
                                                                                                        label="{{ trans('Dashboard/Report/settings.name') }}:"
                                                                                                        type="text"
                                                                                                        name="key"
                                                                                                        id="key" />
                                                                                                    <x-form.input_label
                                                                                                        class="col-12"
                                                                                                        placeholder="{{ trans('Dashboard/Report/settings.placeholderImage') }}"
                                                                                                        label="{{ trans('Dashboard/Report/settings.image') }}:"
                                                                                                        type="file"
                                                                                                        name="image"
                                                                                                        id="image"
                                                                                                        value="welcome" />
                                                                                                    @if (!empty($item->getFirstMediaUrl($item->key)))
                                                                                                        <img src="{{ asset($item->getFirstMediaUrl($item->key)) }}"
                                                                                                            alt="{{ $item->key }}"
                                                                                                            style="width: 100%;height:100px ;">
                                                                                                        <br>
                                                                                                    @endif
                                                                                                    <x-form.textarea_label
                                                                                                        class="col-12"
                                                                                                        span="enter job result"
                                                                                                        placeholder="{{ trans('Dashboard/Report/settings.placeholderDesc') }}"
                                                                                                        value="{{ $item->value }}"
                                                                                                        label="{{ trans('Dashboard/Report/settings.description') }} :"
                                                                                                        name="value"
                                                                                                        rows='3' />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <x-form.submit submit="update"
                                                                                            color="info"></x-form.submit>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                </form>
                                                                {{-- end update --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        {{ $settings->links('pagination::bootstrap-5') }}
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
                <form class="tablelist-form" action="{{ route('report_settings.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        {{ trans('Dashboard/Report/settings.create_new_setting') }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="tablelist-form" action="" method="">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <x-form.input_label class="col-12"
                                                    placeholder="{{ trans('Dashboard/Report/settings.placeholderName') }}"
                                                    span="{{ trans('Dashboard/Report/settings.nameSpan') }}"
                                                    label="{{ trans('Dashboard/Report/settings.name') }}:" type="text"
                                                    name="key" id="key" />
                                                <x-form.input_label class="col-12"
                                                    placeholder="{{ trans('Dashboard/Report/settings.placeholderImage') }}"
                                                    label="{{ trans('Dashboard/Report/settings.image') }}:"
                                                    type="file" name="image" id="image" />
                                                <x-form.textarea_label class="col-12" span="enter job result"
                                                    placeholder="{{ trans('Dashboard/Report/settings.placeholderDesc') }}"
                                                    label="{{ trans('Dashboard/Report/settings.description') }} :"
                                                    name="value" rows='3' />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">{{ trans('Dashboard/Report/settings.close') }}</button>

                                            <button type="submit" class="btn btn-success"
                                                id="add-btn">{{ trans('Dashboard/Report/settings.save') }}</button>
                                </form>
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
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this rig ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                            data-bs-dismiss="modal">{{ trans('Dashboard/Report/settings.close') }}</button>
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

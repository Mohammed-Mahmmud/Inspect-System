@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/orders.title'))
@section('css')
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
                            <h4 class="mb-sm-0">{{ trans('Dashboard/orders.orders') }}</h4>

                            <div class="page-title-orderht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);">{{ trans('Dashboard/orders.orders') }}</a></li>
                                    <li class="breadcrumb-item active">{{ trans('Dashboard/orders.vieworders') }}</li>
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
                                            <a class="btn btn-success add-btn" href="{{ route('order.create') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#showModal">{{ trans('Dashboard/orders.addorder') }}</a>

                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">

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
                                                    <th class="sort" data-sort="customer_number">
                                                        {{ trans('Dashboard/orders.number') }}</th>
                                                    <th class="sort" data-sort="customer_company">
                                                        {{ trans('Dashboard/orders.company') }}</th>
                                                    <th class="sort" data-sort="customer_rig_id">
                                                        {{ trans('Dashboard/orders.rig') }}</th>
                                                    <th class="sort" data-sort="action">
                                                        {{ trans('Dashboard/orders.create_date') }}</th>
                                                    <th class="sort" data-sort="action">
                                                        {{ trans('Dashboard/orders.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($orders as $item)
                                                    <tr>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_number">{{ $item->number }}</td>
                                                        <td class="customer_company">{{ $item->companies->name }}</td>
                                                        <td class="customer_rig">{{ $item->rigs->name }}</td>
                                                        <td class="date">{{ $item->date }}</td>
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
                                                            </div>
                                                            <!-- Modal -->
                                                            <form action="{{ route('order.destroy', $item) }}"
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
                                                                            <div class="modal-header" S>
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLongTitle"
                                                                                    style="word-wrap: break-word; overflow-wrap: break-word;">
                                                                                    {{ trans('Dashboard/orders.remove') }}
                                                                                    {{ $item->name }}</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    id="close-modal"></button>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{ trans('Dashboard/orders.delete_message') }}
                                                                                <br>
                                                                                {{ $item->name }}
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-info"
                                                                                        data-bs-dismiss="modal">{{ trans('Dashboard/orders.close') }}</button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-danger"
                                                                                        id="add-btn">{{ trans('Dashboard/orders.delete_order') }}</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </td>
                                                        {{-- @endif --}}
                                                    </tr>
                                                    {{-- update form --}}
                                                    <form class="tablelist-form"
                                                        action="{{ route('order.update', $item) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-light p-3">
                                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                                            {{ trans('Dashboard/orders.edit') . ' ' . $item->name }}
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"
                                                                            id="close-modal"></button>
                                                                    </div>
                                                                    <form class="tablelist-form" action=""
                                                                        method="">
                                                                        <div class="modal-body">
                                                                            <div class="mb-3">
                                                                                <br>
                                                                                <div class="row">

                                                                                    <x-form.input_label class="col-12"
                                                                                        placeholder="Enter Report Date"
                                                                                        value="{{ $item->date ?? '' }}"
                                                                                        label="Report Date :"
                                                                                        type="date" name="date"
                                                                                        id="date" required />

                                                                                </div>
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <label for="customername-field"
                                                                                            class="form-label">{{ trans('Dashboard/orders.company') }}</label>
                                                                                        <select
                                                                                            class="form-control @error('company_id') is-invalid @enderror"
                                                                                            id="company_id"
                                                                                            name="company_id">
                                                                                            {{-- <option value="" selected disabled>{{ $item->companies->name }}</option> --}}
                                                                                            <option
                                                                                                value="{{ optional($item->companies)->id }}"
                                                                                                selected disabled>
                                                                                                {{ $item->companies->name }}
                                                                                            </option>
                                                                                            @foreach ($companies as $company)
                                                                                                <option
                                                                                                    value="{{ $company->id }}"
                                                                                                    {{ $company->id == $item->companies->id ? 'selected' : '' }}>
                                                                                                    {{ $company->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        <span
                                                                                            class="form-text text-muted">{{ trans('Dashboard/orders.orderCompany') }}</span>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <label for="customername-field"
                                                                                            class="form-label">{{ trans('Dashboard/orders.rig') }}</label>
                                                                                        <select
                                                                                            class="form-control @error('rig_id') is-invalid @enderror"
                                                                                            id="updated_rig_id"
                                                                                            name="rig_id">
                                                                                            <option value="" selected
                                                                                                disabled>
                                                                                                {{ optional($item->rigs)->name }}
                                                                                            </option>
                                                                                            @foreach ($rigs as $rig)
                                                                                                <option
                                                                                                    value="{{ $rig->id }}"
                                                                                                    {{ $rig->id == optional($item->rigs)->id ? 'selected' : '' }}>
                                                                                                    {{ $rig->Companies->name . ' ' . $rig->name }}
                                                                                                </option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        <span
                                                                                            class="form-text text-muted">{{ trans('Dashboard/orders.orderRig') }}</span>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-danger"
                                                                                        data-bs-dismiss="modal">{{ trans('Dashboard/orders.close') }}</button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-info"
                                                                                        id="add-btn">{{ trans('Dashboard/orders.update_order') }}</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                    </form>
                                                    {{-- end update --}}
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        {{ $orders->links('pagination::bootstrap-5') }}
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
                <form class="tablelist-form" action="{{ route('order.store') }}" method="POST">
                    @csrf

                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        {{ trans('Dashboard/orders.create_new_order') }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="tablelist-form">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="date"
                                                        class="form-label">{{ trans('Dashboard/orders.date') }}</label>
                                                    <input type="date" id="date" name="date"
                                                        class="form-control"
                                                        placeholder="{{ trans('Dashboard/orders.placeholderDate') }}"
                                                        required>
                                                    <span
                                                        class="form-text text-muted">{{ trans('Dashboard/orders.orderDate') }}
                                                    </span>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="company_id"
                                                        class="form-label">{{ trans('Dashboard/orders.company') }}</label>
                                                    <select class="form-control @error('company_id') is-invalid @enderror"
                                                        id="company_id" name="company_id">
                                                        <option value="" selected disabled>Choose Company</option>
                                                        @foreach ($companies as $company)
                                                            <option value="{{ $company->id }}">{{ $company->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span
                                                        class="form-text text-muted">{{ trans('Dashboard/orders.orderCompany') }}</span>
                                                </div>
                                                <div class="col-6">
                                                    <label for="rig_id"
                                                        class="form-label">{{ trans('Dashboard/orders.rig') }}</label>
                                                    <select class="form-control @error('rig_id') is-invalid @enderror"
                                                        id="rig_id" name="rig_id">
                                                        <option value="" selected disabled>Choose Rig</option>
                                                        @foreach ($rigs as $rig)
                                                            <option value="{{ $rig->id }}">
                                                                {{ $rig->Companies->name . ' ' . $rig->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span
                                                        class="form-text text-muted">{{ trans('Dashboard/orders.orderRig') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">{{ trans('Dashboard/orders.close') }}</button>

                                            <button type="submit" class="btn btn-success"
                                                id="add-btn">{{ trans('Dashboard/orders.create_order') }}</button>

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
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this JObTicket order ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                            data-bs-dismiss="modal">{{ trans('Dashboard/orders.close') }}</button>
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
    <script src="{{ asset('dashboard/pages/orders/js/script.js') }}"></script>
@endsection

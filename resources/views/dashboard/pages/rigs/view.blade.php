@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/rigs.title'))

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
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/rigs.rigs') }}"
                    title2="{{ trans('Dashboard/rigs.rigs') }}" route="{{ route('rig.index') }}"
                    title3="{{ trans('Dashboard/rigs.viewrigs') }}" />
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
                                <h4 class="card-title mb-0">{{ trans('Dashboard/rigs.addrigs') }}</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn" href="{{ route('rig.create') }}"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#showModal">{{ trans('Dashboard/rigs.addrig') }}</a>
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
                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
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
                                                        {{ trans('Dashboard/rigs.name') }}</th>
                                                    <th class="sort" data-sort="customer_full_name">
                                                        {{ trans('Dashboard/rigs.location') }}</th>
                                                    <th class="sort" data-sort="customer_full_name">
                                                        {{ trans('Dashboard/rigs.company') }}</th>
                                                    <th class="sort" data-sort="action">
                                                        {{ trans('Dashboard/rigs.create_date') }}</th>
                                                    <th class="sort" data-sort="action">
                                                        {{ trans('Dashboard/rigs.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    // $lan_rig = App::getLocale()."_rig";
                                                    $i = 1;
                                                @endphp
                                                @foreach ($rigs as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                {{-- <input class="form-check-input" type="checkbox"  value="{{ $item->id }}" class="box1"> --}}

                                                                {{-- <input class="form-check-input" type="checkbox" name="chk_child" value="option1"> --}}
                                                            </div>
                                                        </th>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name">{{ $item->name }}</td>
                                                        <td class="customer_full_name">{{ $item->location }}</td>
                                                        <td class="customer_full_name">{{ $item->companies->name }}</td>
                                                        <td class="date">{{ $item->created_at }}</td>
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
                                                                <!-- Modal -->
                                                                <form action="{{ route('rig.destroy', $item) }}"
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
                                                                                        {{ trans('Dashboard/rigs.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/rigs.delete_message') . '  ' . $item->name }}
                                                                                </div>
                                                                                <x-form.submit submit="delete"
                                                                                    color="danger"></x-form.submit>
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
                    {{-- update form --}}
                    <form class="tablelist-form" action="{{ route('rig.update', $item) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel2">
                                            {{ trans('Dashboard/rigs.edit') . ' ' . $item->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close" id="close-modal"></button>
                                    </div>
                                    <form class="tablelist-form" action="" method="">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <label for="customername-field"
                                                                class="form-label">{{ trans('Dashboard/rigs.name') }}</label>
                                                            <input type="text" id="customername-field" name="name"
                                                                class="form-control"
                                                                placeholder="{{ trans('Dashboard/rigs.placeholderName') }}"
                                                                value="{{ $item->name }}" required="">
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="customername-field"
                                                                class="form-label">{{ trans('Dashboard/rigs.company') }}</label>
                                                            <select
                                                                class="form-control @error('company_id') is-invalid @enderror"
                                                                id="company_id" name="company_id">
                                                                <option value="{{ $item->companies->id }}" selected
                                                                    disabled>{{ $item->companies->name }}</option>
                                                                @foreach ($companies as $company)
                                                                    <option value="{{ $company->id }}"
                                                                        {{ $company->id == $item->companies->id ? 'selected' : '' }}>
                                                                        {{ $company->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <span class="form-text text-muted">Please Choose Company</span>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="customername-field"
                                                                class="form-label">{{ trans('Dashboard/rigs.location') }}</label>
                                                            <textarea id="customername-field" name="location" class="form-control"
                                                                placeholder="{{ trans('Dashboard/rigs.placeholderLocation') }}" required>
                                                        {{ $item->location }}
                                                        </textarea>
                                                            {{-- <input type="text" id="customername-field" name = "location" class="form-control" placeholder=" {{ trans('Dashboard/rigs.placeholderLocation') }}" value="{{ $item->location }}" required=""> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">{{ trans('Dashboard/rigs.close') }}</button>

                                                    <button type="submit" class="btn btn-info"
                                                        id="add-btn">{{ trans('Dashboard/rigs.update_rig') }}</button>
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
                    {{ $rigs->links('pagination::bootstrap-5') }}
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
    <form class="tablelist-form" action="{{ route('rig.store') }}" method="POST">
        @csrf

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">{{ trans('Dashboard/rigs.create_new_rig') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" action="" method="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="customername-field"
                                            class="form-label">{{ trans('Dashboard/rigs.name') }}</label>
                                        <input type="text" id="customername-field" name="name"
                                            class="form-control"
                                            placeholder="{{ trans('Dashboard/rigs.placeholderName') }}" required>
                                        <span class="form-text text-muted">Please Enter Rig Name </span>
                                    </div>
                                    <div class="col-6">
                                        <label for="customername-field"
                                            class="form-label">{{ trans('Dashboard/rigs.company') }}</label>
                                        <select class="form-control @error('company_id') is-invalid @enderror"
                                            id="company_id" name="company_id">
                                            <option value="" selected disabled>Choose Company</option>
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="form-text text-muted">Please Choose Company</span>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="customername-field"
                                            class="form-label">{{ trans('Dashboard/rigs.location') }}</label>
                                        <textarea id="customername-field" name="location" class="form-control"
                                            placeholder="{{ trans('Dashboard/rigs.placeholderLocation') }}" required></textarea>
                                        <span class="form-text text-muted">Please Enter Rig Location </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">{{ trans('Dashboard/rigs.close') }}</button>

                                <button type="submit" class="btn btn-success"
                                    id="add-btn">{{ trans('Dashboard/rigs.create_rig') }}</button>
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
                            data-bs-dismiss="modal">{{ trans('Dashboard/rigs.close') }}</button>
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

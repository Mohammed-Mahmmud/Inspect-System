@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/users.title'))
@section('css')
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/users.users') }}"
                    title2="{{ trans('Dashboard/users.users') }}" title3="{{ trans('Dashboard/users.viewusers') }}" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row g-1 mb-0">
                                    @can('users.create')
                                        <div class="col-sm-auto">
                                            <a class="btn btn-success add-btn" href="{{ route('users.create') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#showModal">{{ trans('Dashboard/users.adduser') }}</a>
                                        </div>
                                    @endcan
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.error-verify>
                                        <div class="table">
                                            <table class="table align-middle mb-0" id="table_id">
                                                <thead class="table-dark">
                                                    <tr>
                                                        <th data-sort="customer_name">Record ID</th>
                                                        <th data-sort="customer_name">
                                                            {{ trans('Dashboard/users.name') }}</th>
                                                        <th data-sort="full_name">
                                                            {{ trans('Dashboard/users.full_name') }}</th>
                                                        <th data-sort="customer_name">
                                                            {{ TranslationHelper::translate(ucfirst('status')) }}</th>
                                                        <th data-sort="customer_name">
                                                            {{ TranslationHelper::translate(ucfirst('role')) }}</th>
                                                        <th data-sort="email">
                                                            {{ trans('Dashboard/users.email') }}</th>
                                                        <th data-sort="date">
                                                            {{ trans('Dashboard/users.joinDate') }}</th>
                                                        <th data-sort="action">
                                                            {{ trans('Dashboard/users.action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    {{-- index fn --}}
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($users as $key => $item)
                                                        <tr>
                                                            <td class="email">{{ 1 + $key++ }}</td>
                                                            <td class="customer_name">{{ $item->name }}</td>
                                                            <td class="customer_full_name">{{ $item->full_name }}</td>
                                                            <td class="customer_status">
                                                                <span
                                                                    class="badge bg-pill @if ($item->status === 'Active') bg-success @else bg-danger @endif ">
                                                                    {{ $item->status }}
                                                                </span>
                                                            </td>
                                                            <td class="customer_role">
                                                                <span class="badge bg-pill bg-primary-subtle text-primary">
                                                                    {{ $item->roles->value('name') }}
                                                                </span>
                                                            </td>
                                                            <td class="email">{{ $item->email }}</td>
                                                            <td class="date">{{ $item->created_at }}</td>
                                                            <td>
                                                                <div class="d-flex gap-2">
                                                                    @can('users.edit')
                                                                        <div class="edit">
                                                                            <a class="btn btn-sm btn-info edit-item-btn"
                                                                                href="" data-bs-toggle="modal"
                                                                                data-bs-target="#edit{{ $item->id }}">
                                                                                <i class="fas fa-edit"></i>
                                                                            </a>
                                                                        </div>
                                                                    @endcan
                                                                    @can('users.destroy')
                                                                        <div class="remove">
                                                                            <a class="btn btn-sm btn-danger remove-item-btn"
                                                                                href="" data-bs-toggle="modal"
                                                                                data-bs-target="#delete{{ $item->id }}">
                                                                                <i class="fas fa-trash"></i>
                                                                            </a>
                                                                        </div>
                                                                    @endcan
                                                                    <!-- Modal -->
                                                                    <form action="{{ route('users.destroy', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <div class="modal fade"
                                                                            id="delete{{ $item->id }}" tabindex="-1"
                                                                            role="dialog"
                                                                            aria-labelledby="exampleModalCenterTitle"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog modal-dialog-centered"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title"
                                                                                            id="exampleModalLongTitle">
                                                                                            {{ trans('Dashboard/users.remove') }}
                                                                                            {{ $item->name }}</h5>
                                                                                        <button type="button"
                                                                                            class="btn-close"
                                                                                            data-bs-dismiss="modal"
                                                                                            aria-label="Close"
                                                                                            id="close-modal"></button>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        {{ trans('Dashboard/users.delete_message') . '  ' . $item->name }}
                                                                                    </div>
                                                                                    <x-form.submit submit="delete"
                                                                                        color="danger"></x-form.submit>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                    <form class="tablelist-form" action="{{ route('users.update', $item) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel2">
                                            {{ trans('Dashboard/users.edit') . ' ' . $item->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                            id="close-modal"></button>
                                    </div>
                                    <form class="tablelist-form" action="" method="">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="name"
                                                            class="form-label">{{ trans('Dashboard/users.name') }}</label>
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Enter user Name"
                                                            value="{{ $item->name }}" required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="full_name"
                                                            class="form-label">{{ trans('Dashboard/users.full_name') }}</label>
                                                        <input type="text" id="full_name" name="full_name"
                                                            class="form-control" placeholder=" Enter user full_name"
                                                            value="{{ $item->full_name }}" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="email"
                                                            class="form-label">{{ trans('Dashboard/admins.email') }}</label>
                                                        <input type="text" id="email" name="email"
                                                            class="form-control" placeholder=" Enter admin email"
                                                            value="{{ $item->email }}" required="">
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="password"
                                                            class="form-label">{{ trans('Dashboard/admins.updatePassword') }}</label>
                                                        <input type="password" id="password" name="password"
                                                            class="form-control" placeholder="Enter Updated Password"
                                                            required="" value="{{ $item->password }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xxl-2 col-sm-6">
                                                    <label class="form-label">Choose User Role</label>
                                                    <select class="form-control" id="userRole" data-choices=""
                                                        data-choices-search-false="" data-choices-removeitem=""
                                                        name="roles">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->name }}"
                                                                {{ $item->roles->pluck('name')->contains($role->name) ? 'selected' : '' }}>
                                                                {{ ucfirst($role->name) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-xxl-2 col-sm-6">
                                                    <label class="form-label">Choose User Status</label>
                                                    <select class="form-control" id="userStatus" data-choices=""
                                                        data-choices-search-false="" data-choices-removeitem=""
                                                        name="status">
                                                        @foreach ($userStatus as $status)
                                                            <option value="{{ $status }}"
                                                                {{ $item->status == $status ? 'selected' : '' }}>
                                                                {{ ucfirst($status) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div><br>
                                        </div>
                                        <x-form.submit></x-form.submit>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                </div>
            </div>
            </form>
            {{-- end update --}}
            @endforeach
            </tbody>
            </table>
            <div class="noresult" style="display: none">
                <div class="text-center">
                    <lord-icon src="../../msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a"
                        style="width:75px;height:75px"></lord-icon>
                    <h5 class="mt-2">Sorry! No Result Found</h5>
                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders
                        for you search.</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            {{ $users->links('pagination::bootstrap-5') }}
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
    <form class="tablelist-form" action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">{{ trans('Dashboard/users.create_new_user') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" action="" method="">
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <div class="col-6">
                                    <label for="name" class="form-label">{{ trans('Dashboard/users.name') }}</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="{{ trans('Dashboard/users.name') }}" required>
                                </div>
                                <div class="col-6">
                                    <label for="full_name"
                                        class="form-label">{{ trans('Dashboard/users.full_name') }}</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control"
                                        placeholder="{{ trans('Dashboard/users.full_name') }}" required>
                                </div>
                                <br>


                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="email"
                                            class="form-label">{{ trans('Dashboard/admins.email') }}</label>
                                        <input type="text" id="email" name="email" class="form-control"
                                            placeholder=" Enter admin email" required="">
                                    </div>

                                    <div class="col-6">
                                        <label for="password"
                                            class="form-label">{{ TranslationHelper::translate(ucfirst('password')) }}</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Enter Updated Password" value="" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-2 col-sm-6">
                                    <label class="form-label">Choose User Role</label>
                                    <select class="form-control" id="userRole" data-choices=""
                                        data-choices-search-false="" data-choices-removeitem="" name="roles">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">
                                                {{ ucfirst($role->name) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xxl-2 col-sm-6">
                                    <label class="form-label">Choose User Status</label>
                                    <select class="form-control" id="userStatus" data-choices=""
                                        data-choices-search-false="" data-choices-removeitem="" name="status">
                                        @foreach ($userStatus as $status)
                                            <option value="{{ $status }}">
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br><br>
                        </div>
                        <x-form.submit></x-form.submit>
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
                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Grade ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-info"
                                data-bs-dismiss="modal">{{ trans('Dashboard/users.close') }}</button>
                            <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!
                            </button>
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
    @endsection

@extends('dashboard.layouts.master')
@section('title', 'Roles')
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
                                <h4 class="card-title mb-0">{{ TranslationHelper::translate(ucwords('new role')) }}</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <a class="btn btn-success add-btn" href="{{ route('dashboard.roles.create') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#showModal">{{ TranslationHelper::translate('Create New Role') }}</a>
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
                                        errors="{{ $errors }}"></x-dashboard.error-verify>
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0">
                                                <thead class="table-dark">
                                                    <tr>

                                                        <th class="sort" data-sort="customer_name">Record ID</th>
                                                        <th class="sort" data-sort="customer_name">
                                                            {{ trans('Dashboard/users.name') }}</th>
                                                        <th class="sort" data-sort="date">
                                                            {{ trans('Dashboard/users.joinDate') }}</th>
                                                        <th class="sort" data-sort="action">
                                                            {{ trans('Dashboard/users.action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    {{-- index fn --}}
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($roles as $key => $item)
                                                        <tr>
                                                            <td class="email">{{ 1 + $key++ }}</td>
                                                            <td class="customer_name">{{ $item->name }}</td>
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
                                                                    <form
                                                                        action="{{ route('dashboard.roles.destroy', $item->id) }}"
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
                                                            </td>
                                                        </tr>
                                                        <form class="tablelist-form"
                                                            action="{{ route('dashboard.roles.update', $item) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal fade" id="edit{{ $item->id }}"
                                                                tabindex="-1" aria-labelledby="exampleModalLabel2"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog  modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-light p-3">
                                                                            <h5 class="modal-title" id="exampleModalLabel2">
                                                                                {{ trans('Dashboard/users.edit') . ' ' . $item->name }}
                                                                            </h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal" aria-label="Close"
                                                                                id="close-modal"></button>
                                                                        </div>
                                                                        <div class="modal-body" style="height: 1000px">

                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <label for="name"
                                                                                        class="form-label">{{ trans('Dashboard/users.name') }}</label>
                                                                                    <input type="text" id="name"
                                                                                        name="name"
                                                                                        class="form-control"
                                                                                        placeholder="Enter user Name"
                                                                                        value="{{ $item->name }}"
                                                                                        required="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <x-form.dropdown-multi-select
                                                                                            :value="$item->permissions
                                                                                                ->pluck('name', 'id')
                                                                                                ->toArray()"
                                                                                            label="{{ TranslationHelper::translate('Choose Permissions:') }}"
                                                                                            name="permission"
                                                                                            :data="$permissions->pluck(
                                                                                                'name',
                                                                                                'id',
                                                                                            )"
                                                                                            span="{{ TranslationHelper::translate('Choose Permissions:') }}" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <x-form.submit></x-form.submit>
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
                                            {{ $roles->links('pagination::bootstrap-5') }}
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
                <form class="tablelist-form" action="{{ route('dashboard.roles.store') }}" method="POST">
                    @csrf
                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        {{ TranslationHelper::translate('Create New Role') }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="" action="" method="">
                                    <div class="modal-body" style="height: 1000px">
                                        <div class="mb-3 row">
                                            <div class="col-12">
                                                <label for="name"
                                                    class="form-label">{{ trans('Dashboard/users.name') }}</label>
                                                <input type="text" id="name" name="name" class="form-control"
                                                    placeholder="{{ trans('Dashboard/users.name') }}" required>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <x-form.dropdown-multi-select {{-- value="{{ $item->getPermissions()->toArray() }}" --}}
                                                        label="{{ TranslationHelper::translate('Choose Permissions:') }}"
                                                        name="permission" :data="$permissions->pluck('name', 'id')"
                                                        span="{{ TranslationHelper::translate('Choose Permissions:') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <x-form.submit submit="submit"></x-form.submit>
                                </form>
                            </div>
                        </div>
                    </div>
                </form>
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
                                    <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete
                                        It!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
@endsection

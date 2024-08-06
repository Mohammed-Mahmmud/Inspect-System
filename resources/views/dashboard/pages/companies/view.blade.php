@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/company.title'))
@section('css')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/company.companies') }}"
                    title2="{{ trans('Dashboard/company.companies') }}" route="{{ route('company.index') }}"
                    title3="{{ trans('Dashboard/company.viewcompanies') }}" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row g-1 mb-0">
                                    <div class="col-sm-auto">
                                        <div>
                                            <a class="btn btn-success add-btn" href="{{ route('company.create') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#showModal">{{ trans('Dashboard/company.addcompany') }}</a>
                                        </div>
                                    </div>
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
                                                    <th data-sort="customer_id">#</th>
                                                    <th data-sort="customer_name">
                                                        {{ trans('Dashboard/company.name') }}</th>
                                                    {{-- <th  data-sort="customer_full_name">{{ trans('Dashboard/company.fullname') }}</th> --}}
                                                    <th data-sort="customer_email">
                                                        {{ trans('Dashboard/company.email') }}</th>
                                                    <th data-sort="customer_password">
                                                        {{ trans('Dashboard/company.password') }}</th>
                                                    <th>
                                                        {{ TranslationHelper::translate(ucfirst('status')) }}</th>
                                                    <th data-sort="action">
                                                        {{ trans('Dashboard/company.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($companies as $item)
                                                    <tr>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name">{{ $item->name }}</td>
                                                        {{-- <td class="customer_full_name">{{$item->full_name}}</td> --}}
                                                        <td class="email">{{ $item->email }}</td>
                                                        <td class="customer_password">{{ $item->pass }}</td>
                                                        <td>
                                                            <span
                                                                class="badge bg-pill @if ($item->status === 'Active') bg-success @else bg-danger @endif ">
                                                                {{ $item->status }}
                                                            </span>
                                                        </td>
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
                                                                        <i class="ph-trash"></i>
                                                                    </a>
                                                                </div>
                                                                <!-- Modal -->
                                                                <form action="{{ route('company.destroy', $item) }}"
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
                                                                                        {{ trans('Dashboard/company.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id=""></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/company.delete_message') }}
                                                                                    <br>{{ $item->name }}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div
                                                                                        class="hstack gap-2 justify-content-end">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal">{{ trans('Dashboard/company.close') }}</button>

                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn">{{ trans('Dashboard/company.delete_company') }}</button>
                                                                </form>
                                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        {{-- end modal --}}
                    </div>

                    {{-- update --}}
                    <form class="tablelist-form" action="{{ route('company.update', $item) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title" id="exampleModalLabel2">
                                            {{ trans('Dashboard/company.edit') . ' ' . $item->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                            id=""></button>
                                    </div>
                                    <div class="tablelist-form">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row g-3">
                                                    <div class="col-6">
                                                        <label for="name"
                                                            class="form-label">{{ trans('Dashboard/company.name') }}</label>
                                                        <input type="text" id="name" name="name"
                                                            class="form-control"
                                                            placeholder="{{ trans('Dashboard/company.placeholderName') }}"
                                                            value="{{ $item->name }}" required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="full_name"
                                                            class="form-label">{{ trans('Dashboard/company.full_name') }}</label>
                                                        <input type="text" id="full_name" name="full_name"
                                                            class="form-control"
                                                            placeholder=" {{ trans('Dashboard/company.placeholderFullName') }}"
                                                            value="{{ $item->full_name }}" required="">
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="email"
                                                            class="form-label">{{ trans('Dashboard/company.email') }}</label>
                                                        <input type="text" name="email" class="form-control"
                                                            placeholder="{{ trans('Dashboard/company.placeholderEmail') }}"
                                                            value="{{ $item->email }}" required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="password"
                                                            class="form-label">{{ trans('Dashboard/company.password') }}</label>
                                                        <input type="password" name="password" class="form-control"
                                                            placeholder=" {{ trans('Dashboard/company.placeholderPassword') }}"
                                                            value="{{ $item->pass }}" required="">
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="location"
                                                            class="form-label">{{ trans('Dashboard/company.location') }}</label>
                                                        <input type="location" name="location" class="form-control"
                                                            placeholder=" {{ trans('Dashboard/company.location') }}"
                                                            value="{{ $item->location }}" required="">
                                                    </div>
                                                    <div class="col-xxl-2 col-sm-6">
                                                        <label class="form-label">Choose
                                                            Company Status</label>
                                                        <select class="form-control" id="staus" data-choices=""
                                                            data-choices-search-false="" data-choices-removeitem=""
                                                            name="status">
                                                            @foreach (App\Models\Dashboard\Company::STATUS as $status)
                                                                <option value="{{ $status }}"
                                                                    {{ $item->status == $status ? 'selected' : '' }}>
                                                                    {{ ucfirst($status) }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">{{ trans('Dashboard/company.close') }}</button>

                                                    <button type="submit" class="btn btn-info"
                                                        id="add-btn">{{ trans('Dashboard/company.update_company') }}</button>
                                                </div>
                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- end update --}}
                    @endforeach
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>

                {{-- <div class="d-flex justify-content-end">
                    {{ $companies->links('pagination::bootstrap-5') }}
                </div> --}}
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
    </div>
    <!-- end col -->
    </div>
    <!-- end row -->

    {{-- create form --}}
    <form class="tablelist-form" action="{{ route('company.store') }}" method="POST">
        @csrf

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="exampleModalLabel">
                            {{ trans('Dashboard/company.create_new_company') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id=""></button>
                    </div>
                    <form class="tablelist-form" action="" method="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label for="name"
                                            class="form-label">{{ trans('Dashboard/company.name') }}</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="{{ trans('Dashboard/company.placeholderName') }}" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="full_name"
                                            class="form-label">{{ trans('Dashboard/company.full_name') }}</label>
                                        <input type="text" name="full_name" class="form-control"
                                            placeholder="{{ trans('Dashboard/company.placeholderFullName') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="location"
                                            class="form-label">{{ trans('Dashboard/company.location') }}</label>
                                        <input type="location" name="location" class="form-control"
                                            placeholder=" {{ trans('Dashboard/company.location') }}" required="">
                                    </div>
                                    <div class="col-xxl-2 col-sm-6">
                                        <label class="form-label">Choose
                                            Company Status</label>
                                        <select class="form-control" id="staus" data-choices=""
                                            data-choices-search-false="" data-choices-removeitem="" name="status">
                                            @foreach (App\Models\Dashboard\Company::STATUS as $status)
                                                <option value="{{ $status }}">
                                                    {{ ucfirst($status) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">{{ trans('Dashboard/company.close') }}</button>

                                <button type="submit" class="btn btn-success"
                                    id="add-btn">{{ trans('Dashboard/company.create_company') }}</button>
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
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this company ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                            data-bs-dismiss="modal">{{ trans('Dashboard/company.close') }}</button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->
@endsection

@section('js')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
@endsection

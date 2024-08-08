@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Lifting/mpi.viewTitle'))

@section('css')
    <style>
        .right {
            text-align=right;
        }
    </style>
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
                            <h4 class="mb-sm-0">{{ trans('Dashboard/Lifting/mpi.mpi') }}</h4>

                            <div class="page-title-mpiht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);">{{ trans('Dashboard/Lifting/mpi.mpi') }}</a>
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
                                <div id="customerList">
                                    <div class="row g-2 mb-0">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                    href="{{ route('mpi.reports.create') }}">{{ TranslationHelper::translate(ucwords('new mpi')) }}</a>
                                            </div>
                                        </div>
                                        @if (auth()->user()->can('editor'))
                                            <div class="col-sm-auto">
                                                <x-dashboard.layouts.delete-selected :route="route('reports.deleteAll')"
                                                    :model="$data"></x-dashboard.layouts.delete-selected>
                                            </div>
                                        @endif
                                        <div class="col-sm-auto">
                                            <x-dashboard.layouts.download-selected :route="route('reports.downloadAll')"
                                                :model="$data"></x-dashboard.layouts.download-selected>
                                        </div>
                                        <div class="col-sm-auto">
                                            <x-dashboard.layouts.submit :model="$data"
                                                :orders="$orders"></x-dashboard.layouts.submit>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <x-dashboard.layouts.error-verify
                                    errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                <div class="table">
                                    <table class="table align-middle mb-0 table_id">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll"
                                                            value="option">
                                                    </div>
                                                </th>
                                                <th class="" data-sort="customer_id">#</th>
                                                <th class="" data-sort="">
                                                    {{ trans('Dashboard/Lifting/mpi.report_number') }}
                                                <th class="" data-sort="">
                                                    {{ trans('Dashboard/Lifting/mpi.date') }}</th>
                                                <th class="" data-sort="">Job Status</th>
                                                <th class="" data-sort="">
                                                    {{ trans('Dashboard/Lifting/mpi.user') }}</th>
                                                <th class="" data-sort="">
                                                    {{ trans('Dashboard/Lifting/mpi.serial') }}</th>
                                                </th>
                                                <th class="" data-sort="action">
                                                    {{ trans('Dashboard/Lifting/mpi.acceptance') }}</th>
                                                <th class="" data-sort="action">
                                                    {{ trans('Dashboard/Lifting/mpi.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            {{-- index fn --}}
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input chk_child" type="checkbox"
                                                                id="chk_child_{{ $item->id }}" name="chk_child[]"
                                                                value="{{ $item->id }}">
                                                        </div>
                                                    </td>
                                                    <td class="id">{{ $i++ }}</td>
                                                    <td class="customer_full_name">{{ $item->report_number }}</td>
                                                    <td class="customer_full_name">{{ $item->date }}</td>
                                                    <td class="status">
                                                        <span
                                                            class="badge bg-pill @if ($item->status === 'Open') bg-success @else bg-danger @endif ">
                                                            {{ $item->status }}
                                                        </span>
                                                    </td>
                                                    <td class="customer_full_name">{{ $item->getUser->full_name }}</td>
                                                    <td class="customer_full_name">{{ $item->serial }}</td>
                                                    @if ($item->acceptance == 1)
                                                        <td class="customer_full_name" style="color: green">Accepted</td>
                                                    @else
                                                        <td class="customer_full_name" style="color: red"> Rejected</td>
                                                    @endif
                                                    <td>
                                                        <div class="dropdown position-static">
                                                            <button class="btn btn-subtle-secondary btn-sm btn-icon"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <form action="{{ route('reports.show') }}"
                                                                        method="POST" target="_blank">
                                                                        @csrf
                                                                        <input type="hidden" name="model"
                                                                            value="{{ get_class($item) }}">
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $item->id }}">
                                                                        <button type="submit" class="dropdown-item">
                                                                            <i class="ph-eye align-middle me-1"></i> View
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                <li><a class="dropdown-item" target="_blank"
                                                                        href="{{ route('mpi.reports.repeat', $item->id) }}"><i
                                                                            class=" bx bx-repeat me-1"></i>
                                                                        Repeat</a></li>
                                                                @if ((auth()->user()->id == $item->user_id && $item->status == 'Open') || auth()->user()->can('editor'))
                                                                    <li><a class="dropdown-item edit-item-btn"
                                                                            target="_blank"
                                                                            href="{{ route('mpi.reports.edit', $item->id) }}"><i
                                                                                class=" ph-pencil align-middle me-1"></i>
                                                                            Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete{{ $item->id }}"><i
                                                                                class="ph-trash align-middle me-1"></i>
                                                                            Remove</a></li>
                                                                @endif
                                                                <li>
                                                                    <form action="{{ route('reports.download') }}"
                                                                        method="POST" target="_blank">
                                                                        @csrf
                                                                        <input type="hidden" name="model"
                                                                            value="{{ get_class($item) }}">
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $item->id }}">
                                                                        <button type="submit" class="dropdown-item">
                                                                            <i
                                                                                class="bx bx-download align-middle me-1"></i>
                                                                            Download
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                            <!-- Modal -->
                                                            <form action="{{ route('mpi.reports.destroy', $item->id) }}"
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
                                                                                    {{ trans('Dashboard/Lifting/mpi.remove') }}
                                                                                    {{ $item->report_number }}</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    id="close-modal"></button>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{ trans('Dashboard/Lifting/mpi.delete_message') }}
                                                                                <br>{{ $item->report_number }}

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-info"
                                                                                        data-bs-dismiss="modal">{{ trans('Dashboard/Lifting/mpi.close') }}</button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-danger"
                                                                                        id="add-btn">{{ trans('Dashboard/Lifting/mpi.delete_mpi') }}</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <div class="d-flex justify-content-end">
                                    {{ $data->links('pagination::bootstrap-5') }}
                                </div> --}}
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
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
    <!-- prismjs plugin -->
    <script src="{{ asset('dashboard/assets/libs/prismjs/prism.js') }}"></script>
    <script src="{{ asset('dashboard/assets/libs/list.pagination.js') }}"></script>
    <!-- listjs init -->
    <!-- Sweet Alerts js -->
    <script src="{{ asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
@endsection

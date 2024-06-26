@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Lifting/examination.viewTitle'))
@section('css')
    <link href="{{ asset('dashboard') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <x-dashboard.layouts.breadcrumb
                    title1="{{ trans('Dashboard/Lifting/examination.' . $type . '_examination') }}"
                    title2="{{ trans('Dashboard/Lifting/examination.examination') }}"
                    route="{{ route('examination.reports.create', ['type' => $type]) }}"
                    title3="{{ trans('Dashboard/Lifting/examination.viewExamination') }}" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div id="customerList">
                                    <div class="row g-2 mb-0">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                    href="{{ route('examination.reports.create', ['type' => $type]) }}">{{ trans('Dashboard/Lifting/examination.addReport' . $type) }}</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <x-dashboard.layouts.delete-selected :route="route('reports.deleteAll')"
                                                :model="$data"></x-dashboard.layouts.delete-selected>
                                        </div>
                                        <div class="col-sm-auto">
                                            <x-dashboard.layouts.download-selected :route="route('reports.downloadAll')" :model="$data"
                                                :pdfView='$pdfView'></x-dashboard.layouts.download-selected>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <x-dashboard.layouts.error-verify
                                    errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                <div class="table">
                                    <table class="table align-middle mb-0" id="table_id">
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
                                                    {{ trans('Dashboard/Lifting/examination.report_number') }}</th>
                                                <th class="" data-sort="">
                                                    {{ trans('Dashboard/Lifting/examination.exam_date') }}</th>
                                                <th class="" data-sort="">
                                                    {{ trans('Dashboard/Lifting/examination.user') }}</th>
                                                {{-- <th class="" data-sort="">{{ trans('Dashboard/Lifting/examination.next_date') }}</th> --}}
                                                @if ($type == 'thorough')
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Lifting/examination.thorough_type') }}</th>
                                                @endif
                                                <th class="" data-sort="action">
                                                    {{ trans('Dashboard/Lifting/examination.acceptance') }}</th>
                                                <th class="" data-sort="action">
                                                    {{ trans('Dashboard/Lifting/examination.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            {{-- index fn --}}
                                            @php
                                                $i = 1;
                                            @endphp
                                            @foreach ($data as $item)
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input chk_child" type="checkbox"
                                                                id="chk_child_{{ $item->id }}" name="chk_child[]"
                                                                value="{{ $item->id }}">
                                                        </div>
                                                    </th>
                                                    <td class="id">{{ $i++ }}</td>
                                                    <td class="customer_name ">{{ $item->report_number }}</td>
                                                    <td class="customer_full_name">{{ $item->date }}</td>
                                                    <td class="customer_full_name">{{ $item->getUser->full_name }}</td>
                                                    {{-- <td class="customer_full_name">{{$item->next_exam}}</td> --}}
                                                    @if ($type == 'thorough')
                                                        <td class="customer_full_name">{{ $item->thorough_type }}</td>
                                                    @endif
                                                    @if ($item->accept == 1)
                                                        <td class="customer_full_name" style="color: green">Accepted
                                                        </td>
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
                                                                <li><a class="dropdown-item" target="_blank"
                                                                        href="{{ route('examination.reports.show', $item->id) }}"><i
                                                                            class="ph-eye align-middle me-1"></i>
                                                                        View</a></li>
                                                                <li><a class="dropdown-item" target="_blank"
                                                                        href="{{ route('examination.reports.repeat', $item->id) }}"><i
                                                                            class=" bx bx-repeat me-1"></i>
                                                                        Repeat</a></li>
                                                                @if (auth()->user()->id == $item->user_id || auth()->user()->can('editor'))
                                                                    <li><a class="dropdown-item edit-item-btn"
                                                                            target="_blank"
                                                                            href="{{ route('examination.reports.edit', $item->id) }}"><i
                                                                                class=" ph-pencil align-middle me-1"></i>
                                                                            Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete{{ $item->id }}"><i
                                                                                class="ph-trash align-middle me-1"></i>
                                                                            Remove</a></li>
                                                                @endif
                                                                <li><a class="dropdown-item download-item-btn"
                                                                        target="_blank"
                                                                        href="{{ route('examination.reports.download', $item->id) }}"><i
                                                                            class="bx bx-download align-middle me-1"></i>
                                                                        Download</a></li>
                                                            </ul>
                                                            <!-- Modal -->
                                                            <form
                                                                action="{{ route('examination.reports.destroy', $item->id) }}"
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
                                                                                    {{ trans('Dashboard/Lifting/examination.remove') }}
                                                                                    {{ $item->name }}</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    id="close-modal"></button>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                {{ trans('Dashboard/Lifting/examination.delete_message') }}
                                                                                <br>{{ $item->report_number }}
                                                                            </div>
                                                                            <x-form.submit submit="delete"
                                                                                color="danger"></x-form.submit>
                                                            </form>
                                                        </div>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-end">
                                    {{ $data->links('pagination::bootstrap-5') }}
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
    <!-- End Page-content -->
@endsection

@section('js')
    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif
@endsection

@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Tublar/tools.viewTitle'))
@section('css')
@endsection
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{ trans('Dashboard/Tublar/tools.' . $type . '_reports') }}</h4>
                            <div class="page-title-toolsht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);">{{ trans('Dashboard/Tublar/tools.tools') }}</a></li>
                                    <li class="breadcrumb-item active">{{ $type }}</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">


                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-1 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                    href="{{ route('tools.reports.create', ['type' => $type]) }}">{{ trans('Dashboard/Tublar/tools.add' . $type) }}</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <x-dashboard.layouts.delete-selected :route="route('reports.deleteAll')"
                                                :model="$data"></x-dashboard.layouts.delete-selected>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    @include('dashboard.pages.tublar.tools.modal.filter')
                                                </div>
                                                {{-- search  --}}
                                                <div class="search-box ms-2">
                                                    <x-dashboard.layouts.search :route="route('tools.reports.index', ['type' => $type])" :model="$data"
                                                        :type="$type"></x-dashboard.layouts.search>
                                                </div>
                                                {{-- end search  --}}
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
                                                            <input class="form-check-input" type="checkbox" id="checkAll"
                                                                value="option">
                                                        </div>
                                                    </th>
                                                    <th class="" data-sort="customer_id">#</th>
                                                    <th class="" data-sort="">
                                                        {{ TranslationHelper::translate(ucwords('report number')) }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/tools.report_date') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/tools.fin_date') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/tools.user') }}</th>
                                                    @if ($type == 'thorough')
                                                        <th class="" data-sort="">
                                                            {{ trans('Dashboard/Tublar/tools.thorough_type') }}</th>
                                                    @endif
                                                    <th class="" data-sort="action">
                                                        {{ trans('Dashboard/Tublar/tools.acceptance') }}</th>
                                                    <th class="" data-sort="action">
                                                        {{ trans('Dashboard/Tublar/tools.action') }}</th>
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
                                                        <td class="customer_name ">{{ $item->report_number }}</td>
                                                        <td class="customer_full_name">{{ $item->date }}</td>
                                                        <td class="customer_full_name">{{ $item->fin_date }}</td>
                                                        <td class="customer_full_name">{{ $item->getUser->full_name }}</td>

                                                        @if ($item->getAccept->value == 1)
                                                            <td class="customer_full_name" style="color: green">Accepted
                                                            </td>
                                                        @elseif ($item->getAccept->value == 2)
                                                            <td class="customer_full_name" style="color: red"> Rejected</td>
                                                        @elseif ($item->getAccept->value == 3)
                                                            <td class="customer_full_name" style="color: blue"> Repaire</td>
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
                                                                            href="{{ route('tools.reports.show', $item->id) }}"><i
                                                                                class="ph-eye align-middle me-1"></i>
                                                                            View</a></li>
                                                                    <li><a class="dropdown-item" target="_blank"
                                                                            href="{{ route('tools.reports.repeat', $item->id) }}"><i
                                                                                class=" bx bx-repeat me-1"></i>
                                                                            Repeat</a></li>
                                                                    @if (auth()->user()->id == $item->user_id || auth()->user()->can('editor'))
                                                                        <li><a class="dropdown-item edit-item-btn"
                                                                                target="_blank"
                                                                                href="{{ route('tools.reports.edit', $item->id) }}"><i
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
                                                                            href="{{ route('tools.reports.download', $item->id) }}"><i
                                                                                class="bx bx-download align-middle me-1"></i>
                                                                            Download</a></li>
                                                                </ul>
                                                                {{--                                                <div class="d-flex gap-2"> --}}
                                                                {{--                                                    <div class="edit"> --}}
                                                                {{--                                                        <a class="btn btn-sm btn-info edit-item-btn" href="{{ route('tools.reports.edit', $item->id) }}"> --}}
                                                                {{--                                                            <i class="fas fa-edit"></i> --}}
                                                                {{--                                                        </a> --}}
                                                                {{--                                                    </div> --}}

                                                                {{--                                                    <div class="remove"> --}}
                                                                {{--                                                        <a class="btn btn-sm btn-danger remove-item-btn" href="" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}"> --}}
                                                                {{--                                                            <i class="fas fa-trash"></i> --}}
                                                                {{--                                                        </a> --}}
                                                                {{--                                                    </div> --}}
                                                                {{--                                                    <div class="show"> --}}
                                                                {{--                                                        <a class="btn btn-sm btn-success show-item-btn" target="_blank" href="{{ route('tools.reports.show', $item->id) }}"> --}}
                                                                {{--                                                            <i class="fas fa-clipboard"></i> --}}
                                                                {{--                                                        </a> --}}
                                                                {{--                                                    </div> --}}
                                                                {{--                                                    <div class="download"> --}}
                                                                {{--                                                        <a class="btn btn-sm btn-warning download-item-btn" target="_blank" href="{{ route('tools.reports.download',$item->id) }}"> --}}
                                                                {{--                                                            <i class="fas fa-download"></i> </a> --}}
                                                                {{--                                                    </div> --}}
                                                                <!-- Modal -->
                                                                <form
                                                                    action="{{ route('tools.reports.destroy', $item->id) }}"
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
                                                                                        {{ trans('Dashboard/Tublar/tools.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/Tublar/tools.delete_message') }}<br>{{ $item->report_number }}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div
                                                                                        class="hstack gap-2 justify-content-end">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal">{{ trans('Dashboard/Tublar/tools.close') }}</button>

                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn">{{ trans('Dashboard/Tublar/tools.remove') }}</button>
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

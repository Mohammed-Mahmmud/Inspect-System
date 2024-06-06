@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/jobTicket.viewTitle'))
@section('css')
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
                <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/jobTicket.jobTicket') }}"
                    title2="{{ trans('Dashboard/jobTicket.jobTicket') }}" route="{{ route('jobTicket.index') }}"
                    title3="{{ trans('Dashboard/jobTicket.viewjobTicket') }}" />
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">{{ trans('Dashboard/jobTicket.addjobTicket') }}</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-1 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                    href="{{ route('jobTicket.create') }}">{{ trans('Dashboard/jobTicket.addjobTicket') }}</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <x-dashboard.layouts.delete-selected :route="route('reports.deleteAll')"
                                                :model="$jobTickets"></x-dashboard.layouts.delete-selected>
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
                                                            <input class="form-check-input" type="checkbox" id="checkAll"
                                                                value="option">
                                                        </div>
                                                    </th>
                                                    <th class="" data-sort="customer_id">#</th>
                                                    <th class="" data-sort="customer_name">
                                                        {{ trans('Dashboard/jobTicket.customer') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/jobTicket.rig') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/jobTicket.ispr') }}</th>
                                                    </th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/jobTicket.date') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/jobTicket.ref_num') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/jobTicket.well_name') }}
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/jobTicket.user') }}</th>
                                                    </th>

                                                    <th class="" data-sort="action">
                                                        {{ trans('Dashboard/jobTicket.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    // $lan_jobTicket = App::getLocale()."_jobTicket";
                                                    $i = 1;
                                                @endphp
                                                @foreach ($jobTickets as $item)
                                                    <tr>
                                                        <td scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input chk_child" type="checkbox"
                                                                    id="chk_child_{{ $item->id }}" name="chk_child[]"
                                                                    value="{{ $item->id }}">
                                                            </div>
                                                        </td>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name">{{ $item->getOrders->companies->name }}
                                                        </td>
                                                        <td class="customer_full_name">{{ $item->getOrders->rigs->name }}
                                                        </td>
                                                        <td class="customer_full_name">{{ $item->ispr }}</td>
                                                        <td class="customer_full_name">{{ $item->date }}</td>
                                                        <td class="customer_full_name">{{ $item->ref_number }}</td>
                                                        <td class="customer_full_name">{{ $item->well_name }}</td>
                                                        <td class="customer_full_name">{{ $item->getUsers->name }}</td>
                                                        <td>
                                                            <div class="dropdown position-static">
                                                                <button class="btn btn-subtle-secondary btn-sm btn-icon"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" target="_blank"
                                                                            href="{{ route('jobTicket.show', $item->id) }}"><i
                                                                                class="ph-eye align-middle me-1"></i>
                                                                            View</a></li>
                                                                    @if (auth()->user()->id == $item->user_id)
                                                                        <li><a class="dropdown-item edit-item-btn"
                                                                                target="_blank"
                                                                                href="{{ route('jobTicket.edit', $item->id) }}"><i
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
                                                                            href="{{ route('jobTicket.download', $item->id) }}"><i
                                                                                class="bx bx-download align-middle me-1"></i>
                                                                            Download</a></li>
                                                                </ul>
                                                                <!-- Modal -->
                                                                <form action="{{ route('jobTicket.destroy', $item->id) }}"
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
                                                                                        {{ trans('Dashboard/jobTicket.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/jobTicket.delete_message') .
                                                                                        '
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ' .
                                                                                        $item->name }}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div
                                                                                        class="hstack gap-2 justify-content-end">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal">{{ trans('Dashboard/jobTicket.close') }}</button>

                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn">{{ trans('Dashboard/jobTicket.delete_jobTicket') }}</button>
                                                                                    </div>
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
                                    {{ $jobTickets->links('pagination::bootstrap-5') }}
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

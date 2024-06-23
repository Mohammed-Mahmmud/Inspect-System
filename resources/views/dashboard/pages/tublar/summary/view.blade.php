@extends('dashboard.layouts.master')
@section('title', trans('Dashboard/Tublar/summary.viewTitle'))
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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">{{ trans('Dashboard/Tublar/summary.' . $type . '_summary') }}</h4>
                            <div class="page-title-summaryht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);">{{ trans('Dashboard/Tublar/summary.summary') }}</a>
                                    </li>
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
                            <div class="card-header">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                    href="{{ route('tools-summary.create', ['type' => $type]) }}">{{ trans('Dashboard/Tublar/summary.add_' . $type) }}</a>

                                            </div>
                                        </div>
                                    </div>
                                    <x-dashboard.layouts.error-verify
                                        errors="{{ $errors }}"></x-dashboard.layouts.error-verify>
                                    <div class="table-responsive">
                                        <table class="table align-middle mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th class="" data-sort="customer_id">#</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/summary.report_number') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/summary.report_date') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/summary.fin_date') }}</th>
                                                    <th class="" data-sort="">
                                                        {{ trans('Dashboard/Tublar/summary.user') }}</th>
                                                    <th class="" data-sort="action">
                                                        {{ trans('Dashboard/Tublar/summary.action') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                {{-- index fn --}}
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($summary as $item)
                                                    <tr>
                                                        <td class="id">{{ $i++ }}</td>
                                                        <td class="customer_name ">{{ $item->report_num }}</td>
                                                        <td class="customer_full_name">{{ $item->st_date }}</td>
                                                        <td class="customer_full_name">{{ $item->fin_date }}</td>
                                                        <td class="customer_full_name">{{ $item->getUser->full_name }}</td>
                                                        <td>
                                                            <div class="dropdown position-static">
                                                                <button class="btn btn-subtle-secondary btn-sm btn-icon"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-expanded="false">
                                                                    <i class="bi bi-three-dots-vertical"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a class="dropdown-item" target="_blank"
                                                                            href="{{ route('tools-summary.show', $item->id) }}"><i
                                                                                class="ph-eye align-middle me-1"></i>
                                                                            View</a></li>
                                                                    @if (auth()->user()->id == $item->user_id || auth()->user()->can('editor'))
                                                                        <li><a class="dropdown-item edit-item-btn"
                                                                                target="_blank"
                                                                                href="{{ route('tools-summary.edit', $item->id) }}"><i
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
                                                                            href="{{ route('tools-summary.download', $item->id) }}"><i
                                                                                class="bx bx-download align-middle me-1"></i>
                                                                            Download</a></li>
                                                                </ul>
                                                                <!-- Modal -->
                                                                <form
                                                                    action="{{ route('tools-summary.destroy', $item->id) }}"
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
                                                                                        {{ trans('Dashboard/Tublar/summary.remove') }}
                                                                                        {{ $item->name }}</h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id="close-modal"></button>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    {{ trans('Dashboard/Tublar/summary.delete_message') }}<br>{{ $item->report_num }}
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <div
                                                                                        class="hstack gap-2 justify-content-end">
                                                                                        <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal">{{ trans('Dashboard/Tublar/summary.close') }}</button>

                                                                                        <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn">{{ trans('Dashboard/Tublar/summary.remove') }}</button>
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
                    {{ $summary->links('pagination::bootstrap-5') }}
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

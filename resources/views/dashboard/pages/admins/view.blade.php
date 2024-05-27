`@extends('dashboard.layouts.master')
@section('title',trans('Dashboard/admins.title'))
@section('css')
@endsection
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <x-dashboard.layouts.breadcrumb title1="{{ trans('Dashboard/admins.admins') }}"
                                    title2="{{ trans('Dashboard/admins.admins') }}"
                                    route="{{route('admins.index')}}"
                                    title3="{{ trans('Dashboard/admins.viewadmins') }}"/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">{{ trans('Dashboard/admins.addadmins') }}</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            {{-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i>{{ trans('Dashboard/admins.addGrade') }}</button> --}}
                                            <a class="btn btn-success add-btn" href="{{ route('admins.create') }}" data-bs-toggle="modal" data-bs-target="#showModal">{{ trans('Dashboard/admins.addAdmin') }}</a>
                                            {{-- <button class="btn btn-subtle-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>  --}}
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <x-dashboard.layouts.error-verify  errors="{{$errors}}"></x-dashboard.error-verify>
                                <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                  <thead class="table-dark">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        {{-- <input class="form-check-input" type="checkbox" id="checkAll" value="option">  --}}
                                                    </div>
                                                </th>
                                                <th class="sort" data-sort="customer_name">Record ID</th>
                                                <th class="sort" data-sort="customer_name">{{ trans('Dashboard/admins.name') }}</th>
                                                <th class="sort" data-sort="customer_name">{{ trans('Dashboard/admins.full_name') }}</th>
                                                <th class="sort" data-sort="email">{{ trans('Dashboard/admins.email') }}</th>
                                                <th class="sort" data-sort="date">{{ trans('Dashboard/admins.joinDate') }}</th>
                                                <th class="sort" data-sort="action">{{ trans('Dashboard/admins.action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            {{-- index fn --}}
                                            @php
                                            // $lan_grade = App::getLocale()."_grade";
                                            $i = 1 ;
                                            @endphp
                                            @foreach($admins as $key => $item)
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        {{-- <input class="form-check-input" type="checkbox" name="chk_child" value="option1">  --}}
                                                    </div>
                                                </th>
                                                <td class="email">{{ 1+$key++}}</td>
                                                <td class="customer_name">{{$item->name}}</td>
                                                <td class="customer_name">{{$item->full_name}}</td>
                                                <td class="email">{{ $item->email }}</td>
                                                <td class="date">{{ $item->created_at }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a class="btn btn-sm btn-info edit-item-btn" href="" data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}">
                                                                {{-- {{ trans('Dashboard/admins.edit') }} --}}
                                                                <i class="bx bxs-edit-alt"></i>
                                                            </a>
                                                        </div>

                                                        <div class="remove">
                                                            <a class="btn btn-sm btn-danger remove-item-btn" href="" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">
                                                                <i class="ph-trash-bold"></i>

                                                            </a>
                                                        </div>
                                                        <!-- Modal -->
                                                        <form action="{{ route('admins.destroy', $item->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">{{ trans('Dashboard/admins.remove') }} {{ $item->name}}</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            {{ trans('Dashboard/admins.delete_message').'  '.$item->name }}
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="hstack gap-2 justify-content-end">
                                                                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">{{ trans('Dashboard/admins.close') }}</button>

                                                                                <button type="submit" class="btn btn-danger" id="add-btn">{{ trans('Dashboard/admins.delete') }}</button>
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
                </td>
                </tr>
                {{-- update --}}
                <form class="tablelist-form" action="{{ route('admins.update',$item) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal fade" id="edit{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel2">{{ trans('Dashboard/admins.edit').' '.$item->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form class="tablelist-form" action="" method="">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="name" class="form-label">{{ trans('Dashboard/admins.name') }}</label>
                                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter admin Name" value="{{ $item->name }}" required="">
                                                </div>
                                                <div class="col-6">
                                                    <label for = "full_name" class="form-label">{{ trans('Dashboard/admins.full_name') }}</label>
                                                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter admin Name" value="{{ $item->full_name }}" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="email" class="form-label">{{ trans('Dashboard/admins.email') }}</label>
                                                    <input type="text" id="email" name="email" class="form-control" placeholder=" Enter admin email" value="{{ $item->email }}" required="">
                                                </div>

                                                <div class="col-6">
                                                    <label for="password" class="form-label">{{ trans('Dashboard/admins.updatePassword') }}</label>
                                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Updated Password" value="" required="">
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ trans('Dashboard/admins.close') }}</button>

                                            <button type="submit" class="btn btn-info" id="add-btn">{{ trans('Dashboard/admins.update_admin') }}</button>
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
                        <lord-icon src="../../msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                        <h5 class="mt-2">Sorry! No Result Found</h5>
                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                {{ $admins->links('pagination::bootstrap-5') }}
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
<form class="tablelist-form" action="{{route('admins.store')}}" method="POST">
    @csrf

    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('Dashboard/admins.create_new_Admin') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form class="tablelist-form" action="" method="">
                    <div class="modal-body">
                        <div class="container mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="name" class="form-label">{{ trans('Dashboard/admins.name') }}</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="{{ trans('Dashboard/admins.name') }}" required>
                                </div>
                                <div class="col-6">
                                    <label for="full_name" class="form-label">{{ trans('Dashboard/admins.full_name') }}</label>
                                    <input type="text" id="full_name" name="full_name" class="form-control" placeholder="{{ trans('Dashboard/admins.full_name') }}" required>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-6">
                                    <label for="email" class="form-label">{{ trans('Dashboard/admins.email') }}</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder=" Enter admin email" required="">
                                </div>
                                <div class="col-6">
                                    <label for="password" class="form-label">{{ trans('Dashboard/admins.updatePassword')}}</label>
                                    <input type="password" id="customername-pass" name="password" class="form-control" placeholder="Enter Updated Password" required="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ trans('Dashboard/admins.close') }}</button>
                            <button type="submit" class="btn btn-success" id="add-btn">{{ trans("Dashboard/admins.add") }}</button>
                </div>
        </div>
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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
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
                    <button type="button" class="btn w-sm btn-info" data-bs-dismiss="modal">{{ trans('Dashboard/admins.close') }}</button>
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
@endsection

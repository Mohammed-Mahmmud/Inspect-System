<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".deleteAllModal"><i
        class="bx bxs-trash-alt" title="Delete"></i></button>
<div class="modal fade deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form class="" action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input class="checkedData" type='hidden' name="data[]">
                <input type='hidden' name="model" value="{{ $model }}">
                <div class="modal-body text-center p-5">
                    <i class="bi bi-exclamation-triangle text-danger display-5"></i>
                    <div class="mt-4">
                        <h3 class="mb-3">Are You Sure!</h3>
                        <h6 class="text-muted mb-4">Do You Want To Remove Selected Items?</h6>
                        <div class="hstack gap-2 justify-content-center">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="{{ asset('dashboard/layouts/components/deleteAll/js/script.js') }}"></script>

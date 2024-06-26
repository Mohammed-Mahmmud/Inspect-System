<div class="col-4">
    <button type="button" class="btn btn-primary btn-label rounded-pill" data-bs-toggle="modal" data-bs-target="#extend_content">
        Extend Content
    </button>
    {{-- content modal --}}
    <div class="modal fade" id="extend_content" tabindex="-1" aria-labelledby="extend_contentLabel" aria-modal="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="extend_contentLabel">
                        Add Extra Content</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0);">
                        <div class="row g-3">
                            <div class="row">





                                <x-form.input_label class="col-6" placeholder="Enter first Label" label="serial Label:" type="text" name="first_label" value="{{ $mpi->first_label ?? '' }}" id="first_label" />

                                <x-form.input_label class="col-6" placeholder="Enter first content" label="first content:" type="text" name="first_content" value="{{ $mpi->first_content ?? '' }}" id="first_content" />
                            </div>
                            <!--end col-->
                            <!--end col-->

                            <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end content model --}}<br><br>
</div>
{{-- end content  --}}

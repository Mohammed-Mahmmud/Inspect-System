<!-- Grids in modals -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#submitJob">
    Submit Job
</button>
<div class="modal fade" id="submitJob" tabindex="-1" aria-labelledby="submitJobLabel" aria-modal="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submitJobLabel">Grid Modals</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('reports.submitAll') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <input type='hidden' name="model" value="{{ $model }}">
                        <div class="col-xxl-6">
                            <x-form.dropdown class="col-12" label="Jobs " name="order_id" id="order_id"
                                disabledOption="Choose Order" :data="$orders" span="choose job to submit" />
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <label for="genderInput" class="form-label">Status</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                        value="Closed">
                                    <label class="form-check-label" for="inlineRadio1">Close Job (Not Active)</label>
                                </div>
                                @if (auth()->user()->can('editor'))
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                            value="Open">
                                        <label class="form-check-label" for="inlineRadio2">Open Job (Active)</label>
                                    </div>
                                @endif
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </form>
            </div>
        </div>
    </div>
</div>

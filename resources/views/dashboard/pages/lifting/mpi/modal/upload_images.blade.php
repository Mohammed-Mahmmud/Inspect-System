<div class="col-4">
    <button style="color: black; font-weight:bold;" type="button" class="btn btn-warning btn-label rounded-pill"
            data-bs-toggle="modal" data-bs-target="#uploadMultiImageModal">
        <i class="bi bi-image"></i>
        upload Images
    </button>
</div>
<div class="modal fade" id="uploadMultiImageModal" tabindex="-1" aria-labelledby="uploadMultiImageModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadMultiImageModalLabel">Upload Multiple Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-form.multi-images name="image"  formName="my-form" title="click to upload images." label="Upload up to 5 images"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


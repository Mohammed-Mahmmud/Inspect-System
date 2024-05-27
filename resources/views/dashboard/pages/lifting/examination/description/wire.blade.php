<div class="row">
    <!-- Description Header -->
    <x-form.input_label class="col-4" value="{{ $examination->desc_header ?? '' }}" placeholder="Enter Description Header" label="Description Header :" type="text" name="desc_header" id="desc_header" />
    <x-form.input_label class="col-8" placeholder="Enter Description Content" value="{{ $examination->desc_content ?? '' }}" label="Description Content :" type="text" name="desc_content" id="desc_content" />

    <!-- Forms Content -->
    <div class="col-6 form-label">
        <button type="button" class="form-control" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Enter Diameter :
        </button>
        <div class="dropdown-menu dropdown-menu-md p-2">
            <div class="row g-3">
                <div class="mb-2 col-12">
                    <x-form.input_label placeholder="Enter Diameter" value="{{ $examination->diameter ?? '' }}" label="Diameter :" type="text" name="diameter" id="diameter" />

                </div>
                <div class="mb-2 col-12">
                    <label class="form-label">Diameter Unit</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="diameter_unit">
                        <option selected>Choose Diameter Unit</option>
                        <option value="MM">Milimeter</option>
                        <option value="Inch">Inch</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


    <div class="col-6 form-label">
        <button type="button" class="form-control" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Enter Length :
        </button>
        <div class="dropdown-menu dropdown-menu-md p-2">
            <div class="row g-3">
                <div class="mb-2 col-12">
                    <x-form.input_label class="col-12" placeholder="Enter Length" value="{{ $examination->length ?? '' }}" label="Length :" type="text" name="length" id="length" />
                </div>
                <div class="mb-2 col-12">
                    <label class="form-label">Length Unit</label>
                    <select class="form-select mb-3" aria-label="Default select example" name="length_unit">
                        <option selected>Choose Length Unit</option>
                        <option value="M">Meter</option>
                        <option value="Feet">Feet</option>
                    </select>
                </div>
            </div>
        </div>
    </div>





    <x-form.input_label class="col-6" placeholder="Enter Location" value="{{ $examination->location ?? '' }}" label="Location :" type="text" name="location" id="location" />


    <x-form.input_label class="col-6" value="{{ $examination->swl ?? '' }}" placeholder="Enter SWL" label="SWL :" type="TEXT" name="swl" id="swl" />
</div>

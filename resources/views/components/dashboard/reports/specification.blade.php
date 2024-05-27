<div>
    <label for="spect" class="form-label">Enter Specification :</label>
    <button type="button" id="spect" class="btn btn-outline-dark form-control" data-bs-toggle="modal" data-bs-target="#specificationModal">
        Choose Multiple Specification
    </button>

    <div class="modal fade" id="specificationModal" tabindex="-1" aria-labelledby="specificationModalLabel" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="specificationModalLabel">Specification Modals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-xxl-6">
                        <div>
                            {{-- multi select   --}}
                            <label for="customername-field" class="form-label">Choose Specification</label>
                            <select name="specification[select][]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
                                <option value="api" {{ isset(getDeCode($var->specification)['select']) && in_array('api', getDeCode($var->specification)['select']) ? 'selected' : "" }}> API</option>
                                <option value="dsi" {{ isset(getDeCode($var->specification)['select']) && in_array('dsi', getDeCode($var->specification)['select']) ? 'selected' : "" }}>DSI </option>
                                <option value="astm" {{ isset(getDeCode($var->specification)['select']) && in_array('astm', getDeCode($var->specification)['select']) ? 'selected' : "" }}>ASTM</option>
                                <option value="asme" {{ isset(getDeCode($var->specification)['select']) && in_array('asme', getDeCode($var->specification)['select']) ? 'selected' : "" }}>ASME</option>
                                <option value="aws" {{ isset(getDeCode($var->specification)['select']) && in_array('aws', getDeCode($var->specification)['select']) ? 'selected' : "" }}> AWS</option>
                            </select>


                            {{-- end of select   --}}
                        </div>
                    </div>

                    <div class="col-xxl-6">
                        <div>
                            <label for="specification_other" class="form-label">Other Specification</label>
                            <input type="text" class="form-control" id="specification_other" name="specification[other]" placeholder="Enter Other specification" value="{{ getDeCode($var->specification)['other'] ?? ""}}">
                        </div>
                    </div>

                    <div class="col-xxl-6">
                        <div>
                            <label for="edition" class="form-label">Specification Edition</label>
                            <textarea class="form-control" id="edition" name="specification[edition]" placeholder="Enter your edition" rows="6">
                            {{ getDeCode($var->specification)['edition'] ?? ""}}

                            </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
    </div>
</div>

<div>
    <label for="spect" class="form-label">Enter Other Methods :</label>
    <button type="button" id="spect" class="btn btn-outline-dark form-control" data-bs-toggle="modal" data-bs-target="#other_methodsModal">
        Choose Multiple Other Methods
    </button>

    <div class="modal fade" id="other_methodsModal" tabindex="-1" aria-labelledby="other_methodsModalLabel" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="other_methodsModalLabel">Other Methods Modals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-xxl-6">
                        <div>
                            {{-- multi select   --}}
                            <label for="customername-field" class="form-label">Choose Other Methods</label>
                            <select name="other_methods[select][]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
                                <option value="eai" {{ isset(getDeCode($var->other_methods)['select']) && in_array('api', getDeCode($var->other_methods)['select']) ? 'selected' : "" }}>{{strtoupper('eai')}}</option>
                                <option value="vti" {{ isset(getDeCode($var->other_methods)['select']) && in_array('dsi', getDeCode($var->other_methods)['select']) ? 'selected' : "" }}>{{strtoupper('vti')}} </option>
                                <option value="vbi" {{ isset(getDeCode($var->other_methods)['select']) && in_array('astm', getDeCode($var->other_methods)['select']) ? 'selected' : "" }}>{{strtoupper('vbi')}}</option>
                                <option value="tgi" {{ isset(getDeCode($var->other_methods)['select']) && in_array('asme', getDeCode($var->other_methods)['select']) ? 'selected' : "" }}>{{strtoupper('tgi')}}</option>
                            </select>


                            {{-- end of select   --}}
                        </div>
                    </div>

                    <div class="col-xxl-6">
                        <div>
                            <label for="other_methods_other" class="form-label">Other Methods</label>
                            <input type="text" class="form-control" id="other_methods_other" name="other_methods[other]" placeholder="Enter Other Methods" value="{{ getDeCode($var->other_methods)['other'] ?? ""}}">
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

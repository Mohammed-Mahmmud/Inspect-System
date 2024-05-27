<!-- Default Modals -->

<div class="col-6">
    <label class="form-label">Enter Type Of Inspection</label>
    <div class="d-flex">
        <button type="button" class="btn  btn-outline-dark" data-bs-toggle="modal" data-bs-target="#InspectionType"> Type Of Inspection</button>
    </div>
</div>


<div id="InspectionType" class="modal fade" tabindex="-1" aria-labelledby="InspectionTypeLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="InspectionTypeLabel"> Type Of Inspection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="row">
            
                    <x-form.input_label class="col-6" placeholder="Enter Visual Inspection CONN" value="{{($mudjar->getDeCode($mudjar->visual))['body']  ?? '' }}" label="Visual Inspection CONN :" type="text" name="visual[conn]" id="visual_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Visual Inspection BODY" value="{{ ($mudjar->getDeCode($mudjar->visual))['conn']?? '' }}" label="Visual Inspection BODY :" type="text" name="visual[body]" id="visual_body" />
                    <x-form.input_label class="col-6" placeholder="Enter Boroscopic Inspection CONN" value="{{ ($mudjar->getDeCode($mudjar->boroscopic))['body']?? '' }}" label="Boroscopic Inspection CONN :" type="text" name="boroscopic[conn]" id="boroscopic_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Boroscopic Inspection BODY" value="{{ ($mudjar->getDeCode($mudjar->boroscopic))['conn']?? '' }}" label="Boroscopic Inspection BODY :" type="text" name="boroscopic[body]" id="boroscopic_body" />
                    <x-form.input_label class="col-6" placeholder="Enter Dimensional Inspection CONN" value="{{($mudjar->getDeCode($mudjar->dimensional))['body']?? '' }}" label="Dimensional Inspection CONN :" type="text" name="dimensional[conn]" id="dimensional_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Dimensional Inspection BODY" value="{{($mudjar->getDeCode($mudjar->dimensional))['conn']?? '' }}" label="Dimensional Inspection BODY :" type="text" name="dimensional[body]" id="dimensional_body" />
                    <x-form.input_label class="col-6" placeholder="Enter Magnetic Particle Inspection CONN" value="{{ ($mudjar->getDeCode($mudjar->liquid_penetrant))['body']?? '' }}" label="Magnetic Particle Inspection CONN :" type="text" name="mpi[conn]" id="mpi_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Magnetic Particle Inspection BODY" value="{{ ($mudjar->getDeCode($mudjar->liquid_penetrant))['conn']?? '' }}" label="Magnetic Particle Inspection BODY :" type="text" name="mpi[body]" id="mpi_body" />
                    <x-form.input_label class="col-6" placeholder="Enter Liquid Penetrant Inspection CONN" value="{{ ($mudjar->getDeCode($mudjar->mpi))['body']?? '' }}" label="Liquid Penetrant Inspection CONN :" type="text" name="liquid_penetrant[conn]" id="liquid_penetrant_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Liquid Penetrant Inspection BODY" value="{{ ($mudjar->getDeCode($mudjar->mpi))['conn']?? '' }}" label="Liquid Penetrant Inspection BODY :" type="text" name="liquid_penetrant[body]" id="liquid_penetrant_body" />
                    <x-form.input_label class="col-6" placeholder="Enter Ultrasonic Inspection CONN" value="{{($mudjar->getDeCode($mudjar->ultrasonic))['body']?? '' }}" label="Ultrasonic Inspection CONN :" type="text" name="ultrasonic[conn]" id="ultrasonic_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Ultrasonic Inspection BODY" value="{{($mudjar->getDeCode($mudjar->ultrasonic))['conn']?? '' }}" label="Ultrasonic Inspection BODY :" type="text" name="ultrasonic[body]" id="ultrasonic_body" />
                    <x-form.input_label class="col-6" placeholder="Enter Eddy Current Inspection CONN" value="{{ ($mudjar->getDeCode($mudjar->eddy_current))['body']?? '' }}" label="Eddy Current Inspection CONN :" type="text" name="eddy_current[conn]" id="eddy_current_conn" />
                    <x-form.input_label class="col-6" placeholder="Enter Eddy Current Inspection BODY" value="{{ ($mudjar->getDeCode($mudjar->eddy_current))['conn']?? '' }}" label="Eddy Current Inspection BODY :" type="text" name="eddy_current[body]" id="eddy_current_body " />
                </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

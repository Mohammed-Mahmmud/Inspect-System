
<div class=" col-6 hstack flex-wrap gap-100 mb-5 mb-lg-0 " data-bs-toggle="modal" data-bs-target="#ChecklistModal">
    <button type="button" class="btn rounded-pill btn-outline-primary">Checklist</button>
</div>
<div id="ChecklistModal" class="modal fade" tabindex="-1" aria-labelledby="ChecklistModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ChecklistModalLabel">Check List</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Report Chcek List</h5>
                            </div>
                            <div class="card-body form-steps">
                                <div id="custom-progress-bar" class="progress-nav mb-4">
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Courses Details">
                                            <button class="nav-link rounded-pill active" data-progressbar="custom-progress-bar" id="coursesDetails-tab" data-bs-toggle="pill" data-bs-target="#coursesDetails" type="button" role="tab" aria-controls="coursesDetails" aria-selected="true">1</button>
                                        </li>
                                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Course media">
                                            <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-info-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-info-desc" type="button" role="tab" aria-controls="pills-info-desc" aria-selected="false">2</button>
                                        </li>
                                        <li class="nav-item" role="presentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-title="Successfully">
                                            <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success" type="button" role="tab" aria-controls="pills-success" aria-selected="false">3</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="coursesDetails" role="tabpanel" aria-labelledby="coursesDetails-tab">

                                        <div class="row g-3 align-items-center">

                                            <div class="col-lg-12">



                                                <label for="course-category-input" class="form-label">Choose Check List<span class="text-danger">*</span></label>


                                                <select class="form-select" id="newlist" name="newlist" onchange="getSelectedValue();">
                                                    <option disabled selected>Select Course Category Checklist</option>
                                                    <option value="wheel_loader_checklist"
                                                    <?php if(isset($examination->jobChecklist[0]->type)): ?>
                                                        <?php echo e(($examination->jobChecklist[0]->type) == 'wheel_loader_checklist' ? 'selected' :''); ?>

                                                        <?php endif; ?>   >
                                                        Wheel Loader Inspection Checklist</option>
                                                    <option value="manlift_checklist"  <?php if(isset($examination->jobChecklist[0]->type)): ?>
                                                        <?php echo e(($examination->jobChecklist[0]->type) == 'manlift_checklist' ? 'selected' :''); ?>

                                                        <?php endif; ?>   >Manlift Checklist</option>
                                                    <option value="mobile_crane_checklist"  <?php if(isset($examination->jobChecklist[0]->type)): ?>
                                                        <?php echo e(($examination->jobChecklist[0]->type) == 'mobile_crane_checklist' ? 'selected' :''); ?>

                                                        <?php endif; ?> >Mobile Crane Inspection Checklist</option>
                                                </select>

                                            </div>
                                            <!--end row-->

                                        </div>
                                    </div>
                                    <!-- end tab pane -->

                                    <div class="tab-pane fade" id="pills-info-desc" role="tabpanel" aria-labelledby="pills-info-desc-tab">
                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                            <li class="mt-2" id="dropzone-preview-list">



                                                <div style="display : none;" id="wheel_loader_checklist">
                                                    <?php echo $__env->make('dashboard.pages.lifting.examination.modal.wheel_loader_checklist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                                 <div style="display : none;" id="manlift_checklist">
                                                    <?php echo $__env->make('dashboard.pages.lifting.examination.modal.manlift_checklist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                                <div style="display : none;" id="mobile_crane_checklist">
                                                    <?php echo $__env->make('dashboard.pages.lifting.examination.modal.mobile_crane_checklist' , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>




                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-pane fade" id="pills-success" role="tabpanel" aria-labelledby="pills-success-tab">
                                        <div class="text-center">
                                            <div class="my-4">
                                                <img src="<?php echo e(asset('dashboard')); ?>/assets/images/success-img.png" alt="" height="150">
                                            </div>
                                            <h4>Well Done !</h4>
                                            <input type="hidden" name="checklist_type" id='checklist_type'>
                                            <p class="text-muted mb-0">You have added successfully Check list</p>
                                        </div>
                                    </div>

                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->

                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/examination/modal/checklist.blade.php ENDPATH**/ ?>
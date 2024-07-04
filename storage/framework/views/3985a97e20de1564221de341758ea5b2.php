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
                <form action="<?php echo e(route('reports.submitAll')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row g-3">
                        <input type='hidden' name="model" value="<?php echo e($model); ?>">
                        <div class="col-xxl-6">
                            <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-12','label' => 'Jobs ','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => $orders,'span' => 'choose job to submit']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => 'Jobs ','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'span' => 'choose job to submit']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $attributes = $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__attributesOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9)): ?>
<?php $component = $__componentOriginalda007bd9ac2faaa013619214ac23c7b9; ?>
<?php unset($__componentOriginalda007bd9ac2faaa013619214ac23c7b9); ?>
<?php endif; ?>
                        </div><!--end col-->
                        <div class="col-lg-12">
                            <label for="genderInput" class="form-label">Status</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                        value="Closed">
                                    <label class="form-check-label" for="inlineRadio1">Close Job (Not Active)</label>
                                </div>
                                <?php if(auth()->user()->can('editor')): ?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                            value="Open">
                                        <label class="form-check-label" for="inlineRadio2">Open Job (Active)</label>
                                    </div>
                                <?php endif; ?>
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
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/layouts/submit.blade.php ENDPATH**/ ?>
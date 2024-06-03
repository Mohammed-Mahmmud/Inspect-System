<div>
    <label for="equip" class="form-label">Enter Equipment :</label>
    <button type="button" id="equip" class="btn btn-outline-dark form-control" data-bs-toggle="modal" data-bs-target="#equipmentModal">
        Choose Multiple Equipment
    </button>

    <div class="modal fade" id="equipmentModal" tabindex="-1" aria-labelledby="equipmentModalLabel" aria-modal="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="specificationModalLabel">Equipment Modals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row g-3">

                        <div class="col-4 d-flex align-items-center">
                            <div class="form-check mb-2">
                                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['id' => 'ac_yoke','value' => ''.e(getDeCode($var->equipment)['ac_yoke'] ?? '').'','style' => 'font-size: 1em; ','label' => 'AC Yoke','name' => 'equipment[ac_yoke]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'ac_yoke','value' => ''.e(getDeCode($var->equipment)['ac_yoke'] ?? '').'','style' => 'font-size: 1em; ','label' => 'AC Yoke','name' => 'equipment[ac_yoke]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $attributes = $__attributesOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__attributesOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $component = $__componentOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__componentOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-8">
                            <label for="ac_yoke_no" class="form-label">AC Yoke Number</label>
                            <input type="text" class="form-control" value="<?php echo e(getDeCode($var->equipment)['ac_yoke_no'] ?? ""); ?>" name="equipment[ac_yoke_no]" id="ac_yoke_no" placeholder="Enter AC Yoke Number">
                        </div>

                        <!-- DC Coil -->
                        <div class="col-4 d-flex align-items-center">
                            <div class="form-check mb-2">
                                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['id' => 'dc_coil','value' => ''.e(getDeCode($var->equipment)['dc_coil'] ?? '').'','style' => 'font-size: 1em; ','label' => 'Dc Coil','name' => 'equipment[dc_coil]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'dc_coil','value' => ''.e(getDeCode($var->equipment)['dc_coil'] ?? '').'','style' => 'font-size: 1em; ','label' => 'Dc Coil','name' => 'equipment[dc_coil]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $attributes = $__attributesOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__attributesOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $component = $__componentOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__componentOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-8">
                            <label for="dc_coil_no" class="form-label">DC Coil Number</label>
                            <input type="text" class="form-control" value="<?php echo e(getDeCode($var->equipment)['dc_coil_no'] ?? ""); ?>" name="equipment[dc_coil_no]" id="dc_coil_no" placeholder="Enter DC Coil Number">
                        </div>

                        <!-- Permanent Magnet -->
                        <div class="col-4 d-flex align-items-center">
                            <div class="form-check mb-2">
                                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['id' => 'permanent_magnet','value' => ''.e(getDeCode($var->equipment)['permanent_magnet'] ?? '').'','style' => 'font-size: 1em;','label' => 'Permanent Magnet','name' => 'equipment[permanent_magnet]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'permanent_magnet','value' => ''.e(getDeCode($var->equipment)['permanent_magnet'] ?? '').'','style' => 'font-size: 1em;','label' => 'Permanent Magnet','name' => 'equipment[permanent_magnet]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $attributes = $__attributesOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__attributesOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $component = $__componentOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__componentOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-8">
                            <label for="permanent_magnet_no" class="form-label">Permanent Magnet Number</label>
                            <input type="text" class="form-control" value="<?php echo e(getDeCode($var->equipment)['permanent_magnet_no'] ?? ""); ?>" name="equipment[permanent_magnet_no]" id="permanent_magnet_no" placeholder="Enter Permanent Magnet Number">
                        </div>

                        <!-- UV Light -->
                        <div class="col-4 d-flex align-items-center">
                            <div class="form-check mb-2">
                                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['id' => 'uv_light','value' => ''.e(getDeCode($var->equipment)['uv_light'] ?? '').'','style' => 'font-size: 1em; ','label' => 'UV Light','name' => 'equipment[uv_light]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'uv_light','value' => ''.e(getDeCode($var->equipment)['uv_light'] ?? '').'','style' => 'font-size: 1em; ','label' => 'UV Light','name' => 'equipment[uv_light]']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $attributes = $__attributesOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__attributesOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9119fc539a62a16592783876c5ca7493)): ?>
<?php $component = $__componentOriginal9119fc539a62a16592783876c5ca7493; ?>
<?php unset($__componentOriginal9119fc539a62a16592783876c5ca7493); ?>
<?php endif; ?>

                            </div>
                        </div>
                        <div class="col-8">
                            <label for="uv_light_no" class="form-label">UV Light Number</label>
                            <input type="text" class="form-control" value="<?php echo e(getDeCode($var->equipment)['uv_light_no'] ?? ""); ?>" name="equipment[uv_light_no]" id="uv_light_no" placeholder="Enter UV Light Number">
                        </div>

                        <!-- Other -->

                        <div class="col-6">
                            <label for="other_name" class="form-label">Other Equipment Name</label>
                            <input type="text" class="form-control" value="<?php echo e(getDeCode($var->equipment)['other_name'] ?? ""); ?>" name="equipment[other_name]" id="other_name" placeholder="Enter Other Name">
                        </div>
                        <div class="col-6">
                            <label for="other_no" class="form-label">Other Equipment Number</label>
                            <input type="text" class="form-control" value="<?php echo e(getDeCode($var->equipment)['other_no'] ?? ""); ?>" name="equipment[other_no]" id="other_no" placeholder="Enter Other Number">
                        </div>


                        <hr>

                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/equipment.blade.php ENDPATH**/ ?>
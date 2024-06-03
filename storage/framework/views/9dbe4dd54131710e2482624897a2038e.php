<div class="modal-body">
    <input type="hidden" class="form-control" value="mobile_crane_checklist" name="checklist[type]">

    

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Outriggers" name="checklist[0][question]">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[0][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[0][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" name="checklist[0][comment]" id="comment0">
                <label class="form-label" for="comment0"> Outriggers </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Leveling Indicator" name="checklist[1][question]">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[1][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[1][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[1][comment]" id="comment1">
                <label class="form-label" for="Leveling Indicator">Leveling Indicator</label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Angel Indicator" name="checklist[2][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[2][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[2][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[2][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Angel Indicator </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Safe Load Indicator (Limiter)" name="checklist[3][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[3][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[3][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[3][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label">Safe Load Indicator (Limiter)</label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Crane Load Chart" name="checklist[4][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[4][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[4][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[4][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Crane Load Chart </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Hydraulic Systems" name="checklist[5][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[5][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[5][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[5][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Hydraulic Systems </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Pendants" name="checklist[6][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[6][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[6][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[6][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Pendants </label>
            </div>
        </div>
        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Power Unit" name="checklist[7][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[7][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[7][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[7][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Power Unit</label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Cabin - Cranes Controls" name="checklist[8][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[8][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[8][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[8][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Cabin - Cranes Controls </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Braking / Holding" name="checklist[9][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[9][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[9][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[9][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Braking / Holding </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Wire Rope Terminations" name="checklist[10][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[10][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[10][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[10][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Wire Rope Terminations </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Cathead Structure" name="checklist[11][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[11][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[11][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[11][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Cathead Structure </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Boom Structure , Sections" name="checklist[12][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[12][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[12][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[12][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Boom Structure , Sections </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Wire Rope - Auxiliary" name="checklist[13][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[13][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[13][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[13][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Wire Rope - Auxiliary</label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Wire Rope – Main" name="checklist[14][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[14][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[14][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[14][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Wire Rope – Main </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Auxiliary Hook" name="checklist[15][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[15][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[15][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[15][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Auxiliary Hook</label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Main Hook" name="checklist[16][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[16][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[16][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[16][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Main Hook </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Auxiliary Hoist Winch" name="checklist[17][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[17][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[17][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[17][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Auxiliary Hoist Winch </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Main Hoist Winch" name="checklist[18][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[18][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[18][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[18][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Main Hoist Winch </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Luﬃng Hoist Machinery" name="checklist[19][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[19][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[19][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[19][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label">Luﬃng Hoist Machinery </label>
            </div>
        </div>

        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Turntable Bearing" name="checklist[20][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[20][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[20][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[20][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Turntable Bearing </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Slewing System & Mechanism" name="checklist[21][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[21][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[21][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[21][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Slewing System & Mechanism </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Ballast Weight / Counter Weight" name="checklist[22][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[22][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[22][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[22][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Ballast Weight / Counter Weight </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Steering , Brakes & tires / Crawler" name="checklist[23][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[23][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[23][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[23][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Steering , Brakes & tires / Crawler </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Electric/ Spark Arrestor/ Fire Extinguisher/Reverse Alarm" name="checklist[24][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[24][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[24][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[24][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Electric/ Spark Arrestor/ Fire Extinguisher/Reverse Alarm </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Carrier Including Engine" name="checklist[25][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[25][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[25][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[25][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Carrier Including Engine </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Crane Limit Switches" name="checklist[26][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[26][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[26][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[26][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Crane Limit Switches </label>
            </div>
        </div>


        <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="Record of Major Repairs / Alterations / Replacements" name="checklist[27][question]" id="Enter Space Bars and nd Covers Comments">
            <div class="col-2 d-flex align-items-left">
                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[27][check]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => '1','style' => 'font-size: 1em; ','label' => 'Check','name' => 'checklist[27][check]']); ?>
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
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text" class="form-control" value="" name="checklist[27][comment]" id="Enter Space Bars and End Covers Comments">
                <label class="form-label"> Record of Major Repairs / Alterations / Replacements </label>
            </div>
        </div>
        
    </div>

<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/examination/modal/mobile_crane_checklist.blade.php ENDPATH**/ ?>
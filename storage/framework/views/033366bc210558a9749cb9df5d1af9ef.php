<div class="table-responsive">
    <table class ="table-sm reportTable">
        <thead>
            <tr>
                <th class="text-center" rowspan="2"><?php echo e(TranslationHelper::translate(ucwords('serial'))); ?></th>
                <th class="text-center" rowspan="2"><?php echo e(TranslationHelper::translate(ucwords('mill slot no'))); ?></th>
                <th class="text-center" colspan="12">
                    <?php echo e(TranslationHelper::translate(ucwords('pin conn'))); ?>

                    <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['class' => 'hidden','type' => 'text','name' => 'pin_conn','value' => ''.e($tubs->pin_conn ?? '').'','placeholder' => '--------------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hidden','type' => 'text','name' => 'pin_conn','value' => ''.e($tubs->pin_conn ?? '').'','placeholder' => '--------------------------------------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
                </th>
                <th class="text-center" colspan="13">
                    <?php echo e(TranslationHelper::translate(ucwords('box conn'))); ?>

                    <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['class' => 'hidden','type' => 'text','value' => ''.e($tubs->box_conn ?? '').'','name' => 'box_conn','placeholder' => '--------------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'hidden','type' => 'text','value' => ''.e($tubs->box_conn ?? '').'','name' => 'box_conn','placeholder' => '--------------------------------------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
                </th>
                <th class="text-center" rowspan="2">
                    <?php echo e(TranslationHelper::translate(ucwords('slip/elevator groove'))); ?></th>
                <th class="text-center" rowspan="2"><?php echo e(TranslationHelper::translate(ucwords('overall leng'))); ?></th>
            </tr>
            <tr>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('od min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('id min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('tong space min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('bevel dia max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('seal width min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('pin length max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('neck length max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('srg length max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('srg dia max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('f.repair'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('reface'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('condition'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('od min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('tong space min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('bevel dia max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('seal width min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('shldr width min'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('box length max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('c/bore dia max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('c/bore length max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('b/back length max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('b/back dia max'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('f.repair'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('reface'))); ?></th>
                <th class="text-center"><?php echo e(TranslationHelper::translate(ucwords('condition'))); ?></th>

            </tr>
        </thead>
        <tbody>
            <?php for($i = 0; $i < $count; $i++): ?>
                <tr>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['serial'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][serial]','id' => 'serial'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['serial'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][serial]','id' => 'serial'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slot'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][slot]','id' => 'slot'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slot'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][slot]','id' => 'slot'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_od'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_od]','id' => 'pin_od'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_od'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_od]','id' => 'pin_od'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_id'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_id]','id' => 'pin_id'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_id'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_id]','id' => 'pin_id'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_tong_space'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_tong_space]','id' => 'pin_tong_space'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_tong_space'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_tong_space]','id' => 'pin_tong_space'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_bevel'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_bevel]','id' => 'pin_bevel'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_bevel'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_bevel]','id' => 'pin_bevel'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_seal'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_seal]','id' => 'pin_seal'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_seal'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_seal]','id' => 'pin_seal'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_length]','id' => 'pin_length'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_length]','id' => 'pin_length'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_neck'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_neck]','id' => 'pin_neck'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_neck'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_neck]','id' => 'pin_neck'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_srg_length]','id' => 'pin_srg_length'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_srg_length]','id' => 'pin_srg_length'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_dia'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_srg_dia]','id' => 'pin_srg_dia'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_dia'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_srg_dia]','id' => 'pin_srg_dia'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_f_repair'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_f_repair]','id' => 'pin_f_repair'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_f_repair'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_f_repair]','id' => 'pin_f_repair'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_reface'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_reface]','id' => 'pin_reface'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_reface'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_reface]','id' => 'pin_reface'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_condition'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_condition]','id' => 'pin_condition'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_condition'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][pin_condition]','id' => 'pin_condition'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_od'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_od]','id' => 'box_od'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_od'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_od]','id' => 'box_od'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_tong_space'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_tong_space]','id' => 'box_tong_space'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_tong_space'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_tong_space]','id' => 'box_tong_space'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bevel'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_bevel]','id' => 'box_bevel'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bevel'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_bevel]','id' => 'box_bevel'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_seal'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_seal]','id' => 'box_seal'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_seal'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_seal]','id' => 'box_seal'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_shldr'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_shldr]','id' => 'box_shldr'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_shldr'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_shldr]','id' => 'box_shldr'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_length]','id' => 'box_length'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_length]','id' => 'box_length'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_dia'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_cbore_dia]','id' => 'box_cbore_dia'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_dia'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_cbore_dia]','id' => 'box_cbore_dia'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_cbore_length]','id' => 'box_cbore_length'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_cbore_length]','id' => 'box_cbore_length'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_bback_length]','id' => 'box_bback_length'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_bback_length]','id' => 'box_bback_length'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_dia'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_bback_dia]','id' => 'box_bback_dia'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_dia'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_bback_dia]','id' => 'box_bback_dia'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_f_repair'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_f_repair]','id' => 'box_f_repair'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_f_repair'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_f_repair]','id' => 'box_f_repair'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_reface'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_reface]','id' => 'box_reface'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_reface'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_reface]','id' => 'box_reface'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_condition'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_condition]','id' => 'box_condition'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_condition'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][box_condition]','id' => 'box_condition'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slip_groove'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][slip_groove]','id' => 'slip_groove'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slip_groove'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][slip_groove]','id' => 'slip_groove'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                    <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['overall_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][overall_length]','id' => 'overall_length'.e($i).'','placeholder' => '----------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['overall_length'] : '').'','type' => 'text','class' => 'w-auto','name' => 'desc['.e($i).'][overall_length]','id' => 'overall_length'.e($i).'','placeholder' => '----------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></td>
                </tr>
            <?php endfor; ?>

        </tbody>
    </table>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/dashboard/reports/tubs/drillcollar.blade.php ENDPATH**/ ?>
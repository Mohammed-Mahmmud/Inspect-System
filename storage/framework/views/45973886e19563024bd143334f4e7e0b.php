<div id="kt_repeater_1" class="repeater">
    <div class="repeater-default" data-repeater-list="desc">
        <?php if($type == 'Edit'): ?>
        <?php $__currentLoopData = $tools->getDesc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $body): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row g-3" data-repeater-item>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-3','placeholder' => 'Enter Serial No.','label' => 'Serial No.','value' => ''.e(getDecode($body->description)['serial'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][serial]','id' => 'serial']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-3','placeholder' => 'Enter Serial No.','label' => 'Serial No.','value' => ''.e(getDecode($body->description)['serial'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][serial]','id' => 'serial']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter Description','label' => 'Description','value' => ''.e(getDecode($body->description)['description'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][description]','id' => 'desc']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter Description','label' => 'Description','value' => ''.e(getDecode($body->description)['description'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][description]','id' => 'desc']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-3','placeholder' => 'Enter pin1 conn','label' => 'pin1 conn','value' => ''.e(getDecode($body->description)['pin1_conn'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_conn]','id' => 'pin1_conn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-3','placeholder' => 'Enter pin1 conn','label' => 'pin1 conn','value' => ''.e(getDecode($body->description)['pin1_conn'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_conn]','id' => 'pin1_conn']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 conn','label' => 'pin2 conn','value' => ''.e(getDecode($body->description)['pin2_conn'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_conn]','id' => 'pin2_conn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 conn','label' => 'pin2 conn','value' => ''.e(getDecode($body->description)['pin2_conn'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_conn]','id' => 'pin2_conn']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>

            
            
            

            <?php if (isset($component)) { $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Extensions::resolve(['name' => 'body[<?php echo e($index); ?>][pin1_cond]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.extensions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Extensions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(getDecode($body->description)['pin1_cond'] ?? '').'','class' => 'col-4','label' => 'pin1 cond']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $attributes = $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $component = $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Extensions::resolve(['name' => 'body[<?php echo e($index); ?>][pin2_cond]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.extensions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Extensions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(getDecode($body->description)['pin2_cond'] ?? '').'','class' => 'col-4','label' => 'pin2 cond']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $attributes = $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $component = $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Extensions::resolve(['name' => 'body[<?php echo e($index); ?>][body_cond]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.extensions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Extensions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => ''.e(getDecode($body->description)['body_cond'] ?? '').'','class' => 'col-4','label' => 'body cond']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $attributes = $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $component = $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>


            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 od','label' => 'pin1 od','value' => ''.e(getDecode($body->description)['pin1_od'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_od]','id' => 'pin1_od']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 od','label' => 'pin1 od','value' => ''.e(getDecode($body->description)['pin1_od'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_od]','id' => 'pin1_od']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 id','label' => 'pin1 id','value' => ''.e(getDecode($body->description)['pin1_id'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_id]','id' => 'pin1_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 id','label' => 'pin1 id','value' => ''.e(getDecode($body->description)['pin1_id'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_id]','id' => 'pin1_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 srg Diameter','label' => 'pin1 Diameter','value' => ''.e(getDecode($body->description)['pin1_diameter'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_diameter]','id' => 'pin1_diameter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 srg Diameter','label' => 'pin1 Diameter','value' => ''.e(getDecode($body->description)['pin1_diameter'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_diameter]','id' => 'pin1_diameter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 srg Width','label' => 'pin1 srg Width','value' => ''.e(getDecode($body->description)['pin1_srg'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_srg]','id' => 'pin1_srg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 srg Width','label' => 'pin1 srg Width','value' => ''.e(getDecode($body->description)['pin1_srg'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_srg]','id' => 'pin1_srg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 length','label' => 'pin1 length','value' => ''.e(getDecode($body->description)['pin1_length'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_length]','id' => 'pin1_length']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 length','label' => 'pin1 length','value' => ''.e(getDecode($body->description)['pin1_length'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_length]','id' => 'pin1_length']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 bevel Diameter','label' => 'pin1 bevel Diameter','value' => ''.e(getDecode($body->description)['pin1_bevel'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_bevel]','id' => 'pin1_bevel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 bevel Diameter','label' => 'pin1 bevel Diameter','value' => ''.e(getDecode($body->description)['pin1_bevel'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin1_bevel]','id' => 'pin1_bevel']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 od','label' => 'pin2 od','value' => ''.e(getDecode($body->description)['pin2_od'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_od]','id' => 'pin2_od']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 od','label' => 'pin2 od','value' => ''.e(getDecode($body->description)['pin2_od'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_od]','id' => 'pin2_od']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 id','label' => 'pin2 id','value' => ''.e(getDecode($body->description)['pin2_id'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_id]','id' => 'pin2_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 id','label' => 'pin2 id','value' => ''.e(getDecode($body->description)['pin2_id'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_id]','id' => 'pin2_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 srg Diameter','label' => 'pin2 Diameter','value' => ''.e(getDecode($body->description)['pin2_diameter'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_diameter]','id' => 'pin2_diameter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 srg Diameter','label' => 'pin2 Diameter','value' => ''.e(getDecode($body->description)['pin2_diameter'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_diameter]','id' => 'pin2_diameter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 srg Width','label' => 'pin2 srg Width','value' => ''.e(getDecode($body->description)['pin2_srg'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_srg]','id' => 'pin2_srg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 srg Width','label' => 'pin2 srg Width','value' => ''.e(getDecode($body->description)['pin2_srg'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_srg]','id' => 'pin2_srg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2  Length','label' => 'pin2  Length','value' => ''.e(getDecode($body->description)['pin2_length'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_length]','id' => 'pin2_length']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2  Length','label' => 'pin2  Length','value' => ''.e(getDecode($body->description)['pin2_length'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_length]','id' => 'pin2_length']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter pin2 bevel Diameter','label' => 'pin2 bevel Diameter','value' => ''.e(getDecode($body->description)['pin2_bevel'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_bevel]','id' => 'pin2_bevel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter pin2 bevel Diameter','label' => 'pin2 bevel Diameter','value' => ''.e(getDecode($body->description)['pin2_bevel'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][pin2_bevel]','id' => 'pin2_bevel']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter body overall  Length','label' => 'overall  Length','value' => ''.e(getDecode($body->description)['body_length'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][body_length]','id' => 'body_length']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter body overall  Length','label' => 'overall  Length','value' => ''.e(getDecode($body->description)['body_length'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][body_length]','id' => 'body_length']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter remarks','label' => 'remarks','value' => ''.e(getDecode($body->description)['remarks'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][remarks]','id' => 'remarks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter remarks','label' => 'remarks','value' => ''.e(getDecode($body->description)['remarks'] ?? '').'','type' => 'text','name' => 'body['.e($index).'][remarks]','id' => 'remarks']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>

            <div class="col-lg-12">
                <div class="hstack gap-2 justify-content-end">
                    <a href="javascript:;" data-repeater-delete="" class="btn btn-md font-weight-bolder btn-outline-danger">
                        <i class="la la-close"></i>delete
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php elseif( $type == 'Create' ): ?>
        <div class="row g-1" data-repeater-item>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-3','placeholder' => 'Enter Serial No.','label' => 'Serial No.','value' => '','type' => 'text','name' => 'desc[0][serial]','id' => 'serial']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-3','placeholder' => 'Enter Serial No.','label' => 'Serial No.','value' => '','type' => 'text','name' => 'desc[0][serial]','id' => 'serial']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter Description','label' => 'Description','value' => '','type' => 'text','name' => 'desc[0][description]','id' => 'desc']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter Description','label' => 'Description','value' => '','type' => 'text','name' => 'desc[0][description]','id' => 'desc']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-3','placeholder' => 'Enter pin1 conn','label' => 'pin1 conn','value' => '','type' => 'text','name' => 'desc[0][pin1_conn]','id' => 'pin1_conn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-3','placeholder' => 'Enter pin1 conn','label' => 'pin1 conn','value' => '','type' => 'text','name' => 'desc[0][pin1_conn]','id' => 'pin1_conn']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 conn','label' => 'pin2 conn','value' => '','type' => 'text','name' => 'desc[0][pin2_conn]','id' => 'pin2_conn']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 conn','label' => 'pin2 conn','value' => '','type' => 'text','name' => 'desc[0][pin2_conn]','id' => 'pin2_conn']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>

           
            <?php if (isset($component)) { $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Extensions::resolve(['name' => 'desc[0][pin1_cond]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.extensions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Extensions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','label' => 'pin1 cond']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $attributes = $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $component = $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Extensions::resolve(['name' => 'desc[0][pin2_cond]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.extensions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Extensions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','label' => 'pi2 cond']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $attributes = $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $component = $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tools\Extensions::resolve(['name' => 'desc[0][body_cond]'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tools.extensions'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tools\Extensions::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','label' => 'body cond']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $attributes = $__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__attributesOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277)): ?>
<?php $component = $__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277; ?>
<?php unset($__componentOriginalc92c13cdd8cb0a23fa5c0fcd6dec2277); ?>
<?php endif; ?>


            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 od','label' => 'pin1 od','value' => '','type' => 'text','name' => 'desc[0][pin1_od]','id' => 'pin1_od']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 od','label' => 'pin1 od','value' => '','type' => 'text','name' => 'desc[0][pin1_od]','id' => 'pin1_od']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 id','label' => 'pin1 id','value' => '','type' => 'text','name' => 'desc[0][pin1_id]','id' => 'pin1_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 id','label' => 'pin1 id','value' => '','type' => 'text','name' => 'desc[0][pin1_id]','id' => 'pin1_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 srg Diameter','label' => 'pin1 Diameter','value' => '','type' => 'text','name' => 'desc[0][pin1_diameter]','id' => 'pin1_diameter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 srg Diameter','label' => 'pin1 Diameter','value' => '','type' => 'text','name' => 'desc[0][pin1_diameter]','id' => 'pin1_diameter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 srg Width','label' => 'pin1 srg Width','value' => '','type' => 'text','name' => 'desc[0][pin1_srg]','id' => 'pin1_srg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 srg Width','label' => 'pin1 srg Width','value' => '','type' => 'text','name' => 'desc[0][pin1_srg]','id' => 'pin1_srg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 Length','label' => 'pin1 Length','value' => '','type' => 'text','name' => 'desc[0][pin1_length]','id' => 'pin1_length']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 Length','label' => 'pin1 Length','value' => '','type' => 'text','name' => 'desc[0][pin1_length]','id' => 'pin1_length']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin1 bevel Diameter','label' => 'pin1 bevel Diameter','value' => '','type' => 'text','name' => 'desc[0][pin1_bevel]','id' => 'pin1_bevel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin1 bevel Diameter','label' => 'pin1 bevel Diameter','value' => '','type' => 'text','name' => 'desc[0][pin1_bevel]','id' => 'pin1_bevel']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 od','label' => 'pin2 od','value' => '','type' => 'text','name' => 'desc[0][pin2_od]','id' => 'pin2_od']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 od','label' => 'pin2 od','value' => '','type' => 'text','name' => 'desc[0][pin2_od]','id' => 'pin2_od']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 id','label' => 'pin2 id','value' => '','type' => 'text','name' => 'desc[0][pin2_id]','id' => 'pin2_id']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 id','label' => 'pin2 id','value' => '','type' => 'text','name' => 'desc[0][pin2_id]','id' => 'pin2_id']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 srg Diameter','label' => 'pin2 Diameter','value' => '','type' => 'text','name' => 'desc[0][pin2_diameter]','id' => 'pin2_diameter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 srg Diameter','label' => 'pin2 Diameter','value' => '','type' => 'text','name' => 'desc[0][pin2_diameter]','id' => 'pin2_diameter']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2 srg Width','label' => 'pin2 srg Width','value' => '','type' => 'text','name' => 'desc[0][pin2_srg]','id' => 'pin2_srg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2 srg Width','label' => 'pin2 srg Width','value' => '','type' => 'text','name' => 'desc[0][pin2_srg]','id' => 'pin2_srg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-2','placeholder' => 'Enter pin2  Length','label' => 'pin2  Length','value' => '','type' => 'text','name' => 'desc[0][pin2_length]','id' => 'pin2_length']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-2','placeholder' => 'Enter pin2  Length','label' => 'pin2  Length','value' => '','type' => 'text','name' => 'desc[0][pin2_length]','id' => 'pin2_length']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter pin2 bevel Diameter','label' => 'pin2 bevel Diameter','value' => '','type' => 'text','name' => 'desc[0][pin2_bevel]','id' => 'pin2_bevel']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter pin2 bevel Diameter','label' => 'pin2 bevel Diameter','value' => '','type' => 'text','name' => 'desc[0][pin2_bevel]','id' => 'pin2_bevel']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter body overall  Length','label' => 'overall  Length','value' => '','type' => 'text','name' => 'desc[0][body_length]','id' => 'body_length']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter body overall  Length','label' => 'overall  Length','value' => '','type' => 'text','name' => 'desc[0][body_length]','id' => 'body_length']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter remarks','label' => 'remarks','value' => '','type' => 'text','name' => 'desc[0][remarks]','id' => 'remarks']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter remarks','label' => 'remarks','value' => '','type' => 'text','name' => 'desc[0][remarks]','id' => 'remarks']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $attributes = $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8)): ?>
<?php $component = $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8; ?>
<?php unset($__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8); ?>
<?php endif; ?>

            <hr style="color:red; border: 3px solid red;">
            <div class=" col-lg-12">
                <div class="hstack gap-2 justify-content-end">
                    <a href="javascript:;" data-repeater-delete="" class="btn btn-md font-weight-bolder btn-outline-danger">
                        <i class="la la-close"></i>delete
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <!-- Repeater Add Button -->
    <div class="col-lg-6">
        <div class="hstack gap-2 justify-content-end">
            <a href="javascript:;" data-repeater-create="" class="btn btn-md font-weight-bolder btn-outline-dark">
                <i class="la la-plus"></i>Add
            </a>
        </div>
    </div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/tublar/tools/modal/body/pin-pin.blade.php ENDPATH**/ ?>
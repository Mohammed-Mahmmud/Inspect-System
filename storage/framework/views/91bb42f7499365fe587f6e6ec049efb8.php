                     <?php if (isset($component)) { $__componentOriginal1741d654282d946d1524564d69f84501 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1741d654282d946d1524564d69f84501 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.textarea_label','data' => ['class' => 'col-12','span' => 'enter Description','placeholder' => 'Enter Report Description','value' => ''.e($examination->description ?? '').'','label' => 'Description :','name' => 'description','id' => 'description','rows' => '5','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','span' => 'enter Description','placeholder' => 'Enter Report Description','value' => ''.e($examination->description ?? '').'','label' => 'Description :','name' => 'description','id' => 'description','rows' => '5','required' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1741d654282d946d1524564d69f84501)): ?>
<?php $attributes = $__attributesOriginal1741d654282d946d1524564d69f84501; ?>
<?php unset($__attributesOriginal1741d654282d946d1524564d69f84501); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1741d654282d946d1524564d69f84501)): ?>
<?php $component = $__componentOriginal1741d654282d946d1524564d69f84501; ?>
<?php unset($__componentOriginal1741d654282d946d1524564d69f84501); ?>
<?php endif; ?>
                     <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($examination->swl ?? '').'','placeholder' => 'Examination SWL','label' => ' Enter Examination SWL  :','type' => 'text','name' => 'swl','id' => 'swl']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($examination->swl ?? '').'','placeholder' => 'Examination SWL','label' => ' Enter Examination SWL  :','type' => 'text','name' => 'swl','id' => 'swl']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($examination->thorough_type ?? '').'','placeholder' => 'Examination Thorough Type','label' => ' Enter Thorough Examination Type  :','type' => 'text','name' => 'thorough_type','id' => 'thorough_type','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($examination->thorough_type ?? '').'','placeholder' => 'Examination Thorough Type','label' => ' Enter Thorough Examination Type  :','type' => 'text','name' => 'thorough_type','id' => 'thorough_type','required' => true]); ?>
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
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/examination/description/thorough.blade.php ENDPATH**/ ?>
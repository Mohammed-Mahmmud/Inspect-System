<!-- Rounded Ribbon -->
<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="card-body">
        <div class="ribbon-content mt-4 text-muted">
            <?php if (isset($component)) { $__componentOriginale698c6a58ca88ee21333d3a531fdf699 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale698c6a58ca88ee21333d3a531fdf699 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Layouts\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.layouts.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Layouts\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['reportTitle' => ''.e(ucwords('tublar inspection system')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale698c6a58ca88ee21333d3a531fdf699)): ?>
<?php $attributes = $__attributesOriginale698c6a58ca88ee21333d3a531fdf699; ?>
<?php unset($__attributesOriginale698c6a58ca88ee21333d3a531fdf699); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale698c6a58ca88ee21333d3a531fdf699)): ?>
<?php $component = $__componentOriginale698c6a58ca88ee21333d3a531fdf699; ?>
<?php unset($__componentOriginale698c6a58ca88ee21333d3a531fdf699); ?>
<?php endif; ?>
            <div class="center">
                <b><?php echo e(strtoupper($examType) . ucwords(' subs Inspection Reports')); ?></b><br>
                <img src="<?php echo e(asset('dashboard/pages/tublar/tubs/' . $examType . '.png')); ?>" width="50%">
            </div>
            <input type='hidden' name='type' value='<?php echo e($examType); ?>' required>
            <input type='hidden' name='user_id' value='<?php echo e(Auth::user()->id); ?>' required>
            <table class="contentTable">
                <tbody>
                    <tr>
                        <th><?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'customer','value' => ''.e(TranslationHelper::translate(ucwords('customer'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'customer','value' => ''.e(TranslationHelper::translate(ucwords('customer'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                        </th>
                        <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'form-control hidden','name' => 'customer','id' => 'customer','placeholder' => '----------------------------------','value' => ''.e($tubs->customer ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'form-control hidden','name' => 'customer','id' => 'customer','placeholder' => '----------------------------------','value' => ''.e($tubs->customer ?? '').'']); ?>
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
                        </td>

                        <th><?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'order','value' => ''.e(TranslationHelper::translate(ucwords('Purchase Order No'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'order','value' => ''.e(TranslationHelper::translate(ucwords('Purchase Order No'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                        </th>
                        <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'form-control hidden','name' => 'order','id' => 'order','placeholder' => '----------------------------------','value' => ''.e($tubs->order ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'form-control hidden','name' => 'order','id' => 'order','placeholder' => '----------------------------------','value' => ''.e($tubs->order ?? '').'']); ?>
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
                        </td>

                        <th><?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'date','value' => ''.e(TranslationHelper::translate(ucwords('Date of Insp'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'date','value' => ''.e(TranslationHelper::translate(ucwords('Date of Insp'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                        </th>
                        <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'date','class' => 'form-control hidden','name' => 'date','id' => 'date','value' => ''.e($tubs->date ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','class' => 'form-control hidden','name' => 'date','id' => 'date','value' => ''.e($tubs->date ?? '').'']); ?>
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
                        </td>
                    </tr>
                    <tr>
                        <th><?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'location','value' => ''.e(TranslationHelper::translate(ucwords('Insp Location'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'location','value' => ''.e(TranslationHelper::translate(ucwords('Insp Location'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                        </th>
                        <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'form-control hidden','name' => 'location','id' => 'location','placeholder' => '----------------------------------','value' => ''.e($tubs->location ?? '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'form-control hidden','name' => 'location','id' => 'location','placeholder' => '----------------------------------','value' => ''.e($tubs->location ?? '').'']); ?>
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
                        </td>

                        <th><?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'order_id','value' => ''.e(TranslationHelper::translate(ucwords('Job Ticket No'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'order_id','value' => ''.e(TranslationHelper::translate(ucwords('Job Ticket No'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                        </th>
                        <td colspan="3"><?php if (isset($component)) { $__componentOriginalf1fe8c71b286bf85a05ee6ed5823ebf7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf1fe8c71b286bf85a05ee6ed5823ebf7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.dropdown','data' => ['class' => 'form-control hidden','label' => ''.e(TranslationHelper::translate(ucwords('JobTicket Number'))).'','name' => 'order_id','id' => 'order_id','disabledOption' => ''.e(ucwords('Job Ticket Numbers')).'','data' => $orders,'selectedData' => ''.e(optional($tubs->getOrders)->id).'','span' => ''.e(TranslationHelper::translate(ucwords('JobTicket Number'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control hidden','label' => ''.e(TranslationHelper::translate(ucwords('JobTicket Number'))).'','name' => 'order_id','id' => 'order_id','disabledOption' => ''.e(ucwords('Job Ticket Numbers')).'','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($tubs->getOrders)->id).'','span' => ''.e(TranslationHelper::translate(ucwords('JobTicket Number'))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf1fe8c71b286bf85a05ee6ed5823ebf7)): ?>
<?php $attributes = $__attributesOriginalf1fe8c71b286bf85a05ee6ed5823ebf7; ?>
<?php unset($__attributesOriginalf1fe8c71b286bf85a05ee6ed5823ebf7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf1fe8c71b286bf85a05ee6ed5823ebf7)): ?>
<?php $component = $__componentOriginalf1fe8c71b286bf85a05ee6ed5823ebf7; ?>
<?php unset($__componentOriginalf1fe8c71b286bf85a05ee6ed5823ebf7); ?>
<?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-8">
                    <table class="contentTable">
                        <thead>
                            <tr>
                                <th colspan="4" class="center">
                                    <?php echo e(TranslationHelper::translate(ucwords('inspection method'))); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><?php echo e(TranslationHelper::translate(ucwords('magnetizing'))); ?></th>
                                <td>
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetizing[ac_yoke]','id' => 'ac_yoke','value' => ''.e(isset(getDeCode($tubs->magnetizing)['ac_yoke']) ? getDeCode($tubs->magnetizing)['ac_yoke'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetizing[ac_yoke]','id' => 'ac_yoke','value' => ''.e(isset(getDeCode($tubs->magnetizing)['ac_yoke']) ? getDeCode($tubs->magnetizing)['ac_yoke'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'ac_yoke','value' => ''.e(TranslationHelper::translate(ucwords('ac yoke'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'ac_yoke','value' => ''.e(TranslationHelper::translate(ucwords('ac yoke'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetizing[permanent]','id' => 'permanent','value' => ''.e(isset(getDeCode($tubs->magnetizing)['permanent']) ? getDeCode($tubs->magnetizing)['permanent'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetizing[permanent]','id' => 'permanent','value' => ''.e(isset(getDeCode($tubs->magnetizing)['permanent']) ? getDeCode($tubs->magnetizing)['permanent'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'permanent','value' => ''.e(TranslationHelper::translate(ucwords('permanent'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'permanent','value' => ''.e(TranslationHelper::translate(ucwords('permanent'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetizing[dc_coil]','id' => 'dc_coil','value' => ''.e(isset(getDeCode($tubs->magnetizing)['dc_coil']) ? getDeCode($tubs->magnetizing)['dc_coil'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetizing[dc_coil]','id' => 'dc_coil','value' => ''.e(isset(getDeCode($tubs->magnetizing)['dc_coil']) ? getDeCode($tubs->magnetizing)['dc_coil'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'dc_coil','value' => ''.e(TranslationHelper::translate(ucwords('dc coil'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'dc_coil','value' => ''.e(TranslationHelper::translate(ucwords('dc coil'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if($examType == 'drillpipe'): ?>
                                        <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetizing[emi]','id' => 'emi','style' => 'margin-left: 40%','value' => ''.e(isset(getDeCode($tubs->magnetizing)['emi']) ? getDeCode($tubs->magnetizing)['emi'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetizing[emi]','id' => 'emi','style' => 'margin-left: 40%','value' => ''.e(isset(getDeCode($tubs->magnetizing)['emi']) ? getDeCode($tubs->magnetizing)['emi'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'emi','value' => ''.e(TranslationHelper::translate(ucwords('emi'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'emi','value' => ''.e(TranslationHelper::translate(ucwords('emi'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                </td>

                                <th><?php echo e(TranslationHelper::translate(ucwords('magnetic particles'))); ?></th>
                                <td>
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetic_particles[dry]','id' => 'dry','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['dry']) ? getDeCode($tubs->magnetic_particles)['dry'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetic_particles[dry]','id' => 'dry','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['dry']) ? getDeCode($tubs->magnetic_particles)['dry'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'dry','value' => ''.e(TranslationHelper::translate(ucwords('dry'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'dry','value' => ''.e(TranslationHelper::translate(ucwords('dry'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetic_particles[wet]','id' => 'wet','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['wet']) ? getDeCode($tubs->magnetic_particles)['wet'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetic_particles[wet]','id' => 'wet','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['wet']) ? getDeCode($tubs->magnetic_particles)['wet'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'wet','value' => ''.e(TranslationHelper::translate(ucwords('wet'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'wet','value' => ''.e(TranslationHelper::translate(ucwords('wet'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetic_particles[visible]','id' => 'visible','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['visible']) ? getDeCode($tubs->magnetic_particles)['visible'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetic_particles[visible]','id' => 'visible','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['visible']) ? getDeCode($tubs->magnetic_particles)['visible'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'visible','value' => ''.e(TranslationHelper::translate(ucwords('visible'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'visible','value' => ''.e(TranslationHelper::translate(ucwords('visible'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'magnetic_particles[fluorescent]','id' => 'fluorescent','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['fluorescent']) ? getDeCode($tubs->magnetic_particles)['fluorescent'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'magnetic_particles[fluorescent]','id' => 'fluorescent','value' => ''.e(isset(getDeCode($tubs->magnetic_particles)['fluorescent']) ? getDeCode($tubs->magnetic_particles)['fluorescent'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'fluorescent','value' => ''.e(TranslationHelper::translate(ucwords('fluorescent'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'fluorescent','value' => ''.e(TranslationHelper::translate(ucwords('fluorescent'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'fluorescent','value' => ''.e(TranslationHelper::translate(ucwords('other methods'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'fluorescent','value' => ''.e(TranslationHelper::translate(ucwords('other methods'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </th>
                                <td colspan="3">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'other_methods[eai]','id' => 'eai','value' => ''.e(isset(getDeCode($tubs->other_methods)['eai']) ? getDeCode($tubs->other_methods)['eai'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'other_methods[eai]','id' => 'eai','value' => ''.e(isset(getDeCode($tubs->other_methods)['eai']) ? getDeCode($tubs->other_methods)['eai'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['style' => 'padding-right:5px','for' => 'eai','value' => ''.e(TranslationHelper::translate(StrToUpper('eai'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'padding-right:5px','for' => 'eai','value' => ''.e(TranslationHelper::translate(StrToUpper('eai'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'other_methods[vti]','id' => 'vti','value' => ''.e(isset(getDeCode($tubs->other_methods)['vti']) ? getDeCode($tubs->other_methods)['vti'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'other_methods[vti]','id' => 'vti','value' => ''.e(isset(getDeCode($tubs->other_methods)['vti']) ? getDeCode($tubs->other_methods)['vti'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['style' => 'padding-right:5px','for' => 'vti','value' => ''.e(TranslationHelper::translate(StrToUpper('vti'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'padding-right:5px','for' => 'vti','value' => ''.e(TranslationHelper::translate(StrToUpper('vti'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if($examType == 'drillpipe'): ?>
                                        <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'other_methods[wt]','id' => 'wt','value' => ''.e(isset(getDeCode($tubs->other_methods)['wt']) ? getDeCode($tubs->other_methods)['wt'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'other_methods[wt]','id' => 'wt','value' => ''.e(isset(getDeCode($tubs->other_methods)['wt']) ? getDeCode($tubs->other_methods)['wt'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['style' => 'padding-right:5px','for' => 'wt','value' => ''.e(TranslationHelper::translate(StrToUpper('wt'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'padding-right:5px','for' => 'wt','value' => ''.e(TranslationHelper::translate(StrToUpper('wt'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    <?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'other_methods[tgi]','id' => 'tgi','value' => ''.e(isset(getDeCode($tubs->other_methods)['tgi']) ? getDeCode($tubs->other_methods)['tgi'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'other_methods[tgi]','id' => 'tgi','value' => ''.e(isset(getDeCode($tubs->other_methods)['tgi']) ? getDeCode($tubs->other_methods)['tgi'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['style' => 'padding-right:5px','for' => 'tgi','value' => ''.e(TranslationHelper::translate(StrToUpper('tgi'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'padding-right:5px','for' => 'tgi','value' => ''.e(TranslationHelper::translate(StrToUpper('tgi'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => '','id' => 'method_other','value' => ''.e(isset(getDeCode($tubs->other_methods)['other']) ? '1' : '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => '','id' => 'method_other','value' => ''.e(isset(getDeCode($tubs->other_methods)['other']) ? '1' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'method_other','value' => ''.e(TranslationHelper::translate(ucfirst('other :'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'method_other','value' => ''.e(TranslationHelper::translate(ucfirst('other :'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['important' => true,'class' => 'hidden w-50','type' => 'text','value' => ''.e(isset(getDeCode($tubs->other_methods)['other']) ? getDeCode($tubs->other_methods)['other'] : null).'','name' => 'other_methods[other]','placeholder' => '----------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['important' => true,'class' => 'hidden w-50','type' => 'text','value' => ''.e(isset(getDeCode($tubs->other_methods)['other']) ? getDeCode($tubs->other_methods)['other'] : null).'','name' => 'other_methods[other]','placeholder' => '----------------------------------']); ?>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <table class="contentTable">
                        <thead>
                            <tr>
                                <th colspan="2" class="center">
                                    <?php echo e(TranslationHelper::translate(ucwords('specification'))); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'specification[api]','id' => 'api','value' => ''.e(isset(getDeCode($tubs->specification)['api']) ? getDeCode($tubs->specification)['api'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'specification[api]','id' => 'api','value' => ''.e(isset(getDeCode($tubs->specification)['api']) ? getDeCode($tubs->specification)['api'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['style' => 'padding-right: 7px','for' => 'api','value' => ''.e(TranslationHelper::translate(StrToUpper('api'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => 'padding-right: 7px','for' => 'api','value' => ''.e(TranslationHelper::translate(StrToUpper('api'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'specification[dsi]','id' => 'dsi','value' => ''.e(isset(getDeCode($tubs->specification)['dsi']) ? getDeCode($tubs->specification)['dsi'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'specification[dsi]','id' => 'dsi','value' => ''.e(isset(getDeCode($tubs->specification)['dsi']) ? getDeCode($tubs->specification)['dsi'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'dsi','style' => 'padding-right: 7px','value' => ''.e(TranslationHelper::translate(StrToUpper('dsi'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'dsi','style' => 'padding-right: 7px','value' => ''.e(TranslationHelper::translate(StrToUpper('dsi'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>

                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => '','id' => 'spec_other','value' => ''.e(isset(getDeCode($tubs->specification)['other']) ? '1' : '').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => '','id' => 'spec_other','value' => ''.e(isset(getDeCode($tubs->specification)['other']) ? '1' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'spec_other','style' => 'padding-right: 7px','value' => ''.e(TranslationHelper::translate(ucfirst('other :'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'spec_other','style' => 'padding-right: 7px','value' => ''.e(TranslationHelper::translate(ucfirst('other :'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','style' => 'width:50%','name' => 'specification[other]','value' => ''.e(isset(getDeCode($tubs->specification)['other']) ? getDeCode($tubs->specification)['other'] : null).'','placeholder' => '--------------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','style' => 'width:50%','name' => 'specification[other]','value' => ''.e(isset(getDeCode($tubs->specification)['other']) ? getDeCode($tubs->specification)['other'] : null).'','placeholder' => '--------------------------------------']); ?>
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
                                </td>
                            </tr>
                            <tr>
                                <th><?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'edition','value' => ''.e(TranslationHelper::translate(ucwords('edition'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'edition','value' => ''.e(TranslationHelper::translate(ucwords('edition'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </th>
                                <td><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden','style' => 'width:100%','name' => 'specification[edition]','id' => 'edition','value' => ''.e(isset(getDeCode($tubs->specification)['edition']) ? getDeCode($tubs->specification)['edition'] : null).'','placeholder' => '--------------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden','style' => 'width:100%','name' => 'specification[edition]','id' => 'edition','value' => ''.e(isset(getDeCode($tubs->specification)['edition']) ? getDeCode($tubs->specification)['edition'] : null).'','placeholder' => '--------------------------------------']); ?>
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
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-9">
                    <table class="contentTable ">
                        <thead>
                            <tr>
                                <th class="center" colspan="<?php echo e($examType == 'drillpipe' ? 8 : 6); ?>">
                                    <?php echo e(TranslationHelper::translate(ucwords('equipment used'))); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center" style="width: auto;">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'equipment[equip_ac_yoke]','id' => 'equip_ac_yoke','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_ac_yoke']) ? getDeCode($tubs->equipment)['equip_ac_yoke'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'equipment[equip_ac_yoke]','id' => 'equip_ac_yoke','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_ac_yoke']) ? getDeCode($tubs->equipment)['equip_ac_yoke'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_ac_yoke','value' => ''.e(TranslationHelper::translate(ucwords('ac yoke'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_ac_yoke','value' => ''.e(TranslationHelper::translate(ucwords('ac yoke'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </td>
                                <td class="center" style="width: auto;">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'equipment[equip_dc_coil]','id' => 'equip_dc_coil','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_dc_coil']) ? getDeCode($tubs->equipment)['equip_dc_coil'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'equipment[equip_dc_coil]','id' => 'equip_dc_coil','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_dc_coil']) ? getDeCode($tubs->equipment)['equip_dc_coil'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_dc_coil','value' => ''.e(TranslationHelper::translate(ucwords('dc coil'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_dc_coil','value' => ''.e(TranslationHelper::translate(ucwords('dc coil'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </td>
                                <td class="center" style="width: auto;">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'equipment[equip_permanent_magnet]','id' => 'equip_permanent_magnet','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_permanent_magnet']) ? getDeCode($tubs->equipment)['equip_permanent_magnet'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'equipment[equip_permanent_magnet]','id' => 'equip_permanent_magnet','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_permanent_magnet']) ? getDeCode($tubs->equipment)['equip_permanent_magnet'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_permanent_magnet','value' => ''.e(TranslationHelper::translate(ucwords('permanent magnet'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_permanent_magnet','value' => ''.e(TranslationHelper::translate(ucwords('permanent magnet'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </td>
                                <td class="center" style="width: auto;">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'equipment[equip_uv_light]','id' => 'equip_uv_light','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_uv_light']) ? getDeCode($tubs->equipment)['equip_uv_light'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'equipment[equip_uv_light]','id' => 'equip_uv_light','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_uv_light']) ? getDeCode($tubs->equipment)['equip_uv_light'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_uv_light','value' => ''.e(TranslationHelper::translate(ucwords('uv light'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_uv_light','value' => ''.e(TranslationHelper::translate(ucwords('uv light'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </td>

                                <?php if($examType == 'drillpipe'): ?>
                                    <td class="center" style="width: auto ">
                                        <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'equipment[equip_emi]','id' => 'equip_emi','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_emi']) ? getDeCode($tubs->equipment)['equip_emi'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'equipment[equip_emi]','id' => 'equip_emi','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_emi']) ? getDeCode($tubs->equipment)['equip_emi'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_emi','value' => ''.e(TranslationHelper::translate(ucwords('emi'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_emi','value' => ''.e(TranslationHelper::translate(ucwords('emi'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    </td>
                                    <td class="center" style="width: auto;">
                                        <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => 'equipment[equip_wt]','id' => 'equip_wt','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_wt']) ? getDeCode($tubs->equipment)['equip_wt'] : null).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'equipment[equip_wt]','id' => 'equip_wt','value' => ''.e(isset(getDeCode($tubs->equipment)['equip_wt']) ? getDeCode($tubs->equipment)['equip_wt'] : null).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_wt','value' => ''.e(TranslationHelper::translate(ucwords('wt'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_wt','value' => ''.e(TranslationHelper::translate(ucwords('wt'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    </td>
                                <?php endif; ?>
                                <td colspan="2" style="width: auto;">
                                    <?php if (isset($component)) { $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.checkbox','data' => ['name' => '','id' => 'equip_other','value' => ''.e(isset(getDeCode($tubs->equipment)['other']) ? '1' : '0').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => '','id' => 'equip_other','value' => ''.e(isset(getDeCode($tubs->equipment)['other']) ? '1' : '0').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $attributes = $__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__attributesOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca)): ?>
<?php $component = $__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca; ?>
<?php unset($__componentOriginal19f34f79cd6ba0bcdacc5dd887382eca); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'equip_other','value' => ''.e(TranslationHelper::translate(ucfirst('other :'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'equip_other','value' => ''.e(TranslationHelper::translate(ucfirst('other :'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['other']) ? getDeCode($tubs->equipment)['other'] : null).'','placeholder' => '----------------------------------','name' => 'equipment[other]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['other']) ? getDeCode($tubs->equipment)['other'] : null).'','placeholder' => '----------------------------------','name' => 'equipment[other]']); ?>
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
                                </td>
                            </tr>
                            <tr>
                                <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['ac_ypke_serial']) ? getDeCode($tubs->equipment)['ac_ypke_serial'] : null).'','name' => 'equipment[ac_ypke_serial]','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['ac_ypke_serial']) ? getDeCode($tubs->equipment)['ac_ypke_serial'] : null).'','name' => 'equipment[ac_ypke_serial]','placeholder' => 'No.-------------------------']); ?>
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
                                </td>
                                <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['dc_coil_serial']) ? getDeCode($tubs->equipment)['dc_coil_serial'] : null).'','name' => 'equipment[dc_coil_serial]','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['dc_coil_serial']) ? getDeCode($tubs->equipment)['dc_coil_serial'] : null).'','name' => 'equipment[dc_coil_serial]','placeholder' => 'No.-------------------------']); ?>
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
                                </td>
                                <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['permanent_magnet_serial']) ? getDeCode($tubs->equipment)['permanent_magnet_serial'] : null).'','name' => 'equipment[permanent_magnet_serial]','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['permanent_magnet_serial']) ? getDeCode($tubs->equipment)['permanent_magnet_serial'] : null).'','name' => 'equipment[permanent_magnet_serial]','placeholder' => 'No.-------------------------']); ?>
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
                                <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['uv_light_serial']) ? getDeCode($tubs->equipment)['uv_light_serial'] : null).'','name' => 'equipment[uv_light_serial]','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['uv_light_serial']) ? getDeCode($tubs->equipment)['uv_light_serial'] : null).'','name' => 'equipment[uv_light_serial]','placeholder' => 'No.-------------------------']); ?>
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
                                <?php if($examType == 'drillpipe'): ?>
                                    <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','name' => 'equipment[emi_serial]','value' => ''.e(isset(getDeCode($tubs->equipment)['emi_serial']) ? getDeCode($tubs->equipment)['emi_serial'] : null).'','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','name' => 'equipment[emi_serial]','value' => ''.e(isset(getDeCode($tubs->equipment)['emi_serial']) ? getDeCode($tubs->equipment)['emi_serial'] : null).'','placeholder' => 'No.-------------------------']); ?>
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
                                    <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','name' => 'equipment[wt_serial]','value' => ''.e(isset(getDeCode($tubs->equipment)['wt_serial']) ? getDeCode($tubs->equipment)['wt_serial'] : null).'','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','name' => 'equipment[wt_serial]','value' => ''.e(isset(getDeCode($tubs->equipment)['wt_serial']) ? getDeCode($tubs->equipment)['wt_serial'] : null).'','placeholder' => 'No.-------------------------']); ?>
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
                                <?php endif; ?>
                                <td style="width: auto;"><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['other_serial']) ? getDeCode($tubs->equipment)['other_serial'] : null).'','name' => 'equipment[other_serial]','placeholder' => 'No.-------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden form-control','value' => ''.e(isset(getDeCode($tubs->equipment)['other_serial']) ? getDeCode($tubs->equipment)['other_serial'] : null).'','name' => 'equipment[other_serial]','placeholder' => 'No.-------------------------']); ?>
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
                    <table class="contentTable ">
                        <thead>
                            <tr>
                                <th class="center"><?php echo e(TranslationHelper::translate(ucwords('Description of tool'))); ?>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea class="hidden form-control" cols="" rows="4" name="tool_desc"
                                        placeholder="--------------------------------------"><?php echo e($tubs->tool_desc ?? ''); ?></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            
            <?php switch($examType):
                case ('heavyweight'): ?>
                    <?php if (isset($component)) { $__componentOriginald8bf941eb690166b57d707b8725f729b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8bf941eb690166b57d707b8725f729b = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tubs\Heavyweight::resolve(['tubs' => $tubs] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tubs.heavyweight'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tubs\Heavyweight::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8bf941eb690166b57d707b8725f729b)): ?>
<?php $attributes = $__attributesOriginald8bf941eb690166b57d707b8725f729b; ?>
<?php unset($__attributesOriginald8bf941eb690166b57d707b8725f729b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8bf941eb690166b57d707b8725f729b)): ?>
<?php $component = $__componentOriginald8bf941eb690166b57d707b8725f729b; ?>
<?php unset($__componentOriginald8bf941eb690166b57d707b8725f729b); ?>
<?php endif; ?>
                <?php break; ?>

                <?php case ('drillcollar'): ?>
                    <?php if (isset($component)) { $__componentOriginalf157b3f4791714b2e0d2ad5cf1d3d79e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf157b3f4791714b2e0d2ad5cf1d3d79e = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tubs\Drillcollar::resolve(['tubs' => $tubs] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tubs.drillcollar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tubs\Drillcollar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf157b3f4791714b2e0d2ad5cf1d3d79e)): ?>
<?php $attributes = $__attributesOriginalf157b3f4791714b2e0d2ad5cf1d3d79e; ?>
<?php unset($__attributesOriginalf157b3f4791714b2e0d2ad5cf1d3d79e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf157b3f4791714b2e0d2ad5cf1d3d79e)): ?>
<?php $component = $__componentOriginalf157b3f4791714b2e0d2ad5cf1d3d79e; ?>
<?php unset($__componentOriginalf157b3f4791714b2e0d2ad5cf1d3d79e); ?>
<?php endif; ?>
                <?php break; ?>

                <?php default: ?>
                    <?php if (isset($component)) { $__componentOriginal598a5e986366a151ded0222bda9324cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal598a5e986366a151ded0222bda9324cc = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tubs\Drillpipe::resolve(['tubs' => $tubs] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tubs.drillpipe'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tubs\Drillpipe::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal598a5e986366a151ded0222bda9324cc)): ?>
<?php $attributes = $__attributesOriginal598a5e986366a151ded0222bda9324cc; ?>
<?php unset($__attributesOriginal598a5e986366a151ded0222bda9324cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal598a5e986366a151ded0222bda9324cc)): ?>
<?php $component = $__componentOriginal598a5e986366a151ded0222bda9324cc; ?>
<?php unset($__componentOriginal598a5e986366a151ded0222bda9324cc); ?>
<?php endif; ?>
            <?php endswitch; ?>
            
            <div class="row">
                <div class="<?php echo e($examType !== 'drillpipe' ? 'col-6' : 'col-12'); ?>">
                    <table class="contentTable">
                        <thead>
                            <tr>
                                <th class="center">
                                    <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'remarks','value' => ''.e(TranslationHelper::translate(ucwords('remarks'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'remarks','value' => ''.e(TranslationHelper::translate(ucwords('remarks'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="3" class=" hidden form-control" name="remarks" id="remarks"
                                        placeholder="--------------------------------------------------"><?php echo e($tubs->remarks ?? ''); ?></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php if (! ($examType == 'drillpipe')): ?>
                    <div class="col-6">
                        <table class="contentTable">
                            <thead>
                                <tr>
                                    <th colspan="2">
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'total','value' => ''.e(TranslationHelper::translate(ucwords('total connection inspected'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'total','value' => ''.e(TranslationHelper::translate(ucwords('total connection inspected'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                        <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden w-50 center','name' => 'conn_inspected[total]','id' => 'total','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['total']) ? getDeCode($tubs->conn_inspected)['total'] : null).'','placeholder' => '----------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden w-50 center','name' => 'conn_inspected[total]','id' => 'total','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['total']) ? getDeCode($tubs->conn_inspected)['total'] : null).'','placeholder' => '----------------------------------']); ?>
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
                                        <?php echo e(TranslationHelper::translate(ucwords('comns'))); ?>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'accepted_conn','value' => ''.e(TranslationHelper::translate(ucwords('connection accepted (white)'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'accepted_conn','value' => ''.e(TranslationHelper::translate(ucwords('connection accepted (white)'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden w-50 center','name' => 'conn_inspected[accepted]','id' => 'accepted_conn','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['accepted']) ? getDeCode($tubs->conn_inspected)['accepted'] : null).'','placeholder' => '----------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden w-50 center','name' => 'conn_inspected[accepted]','id' => 'accepted_conn','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['accepted']) ? getDeCode($tubs->conn_inspected)['accepted'] : null).'','placeholder' => '----------------------------------']); ?>
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
                                        <?php echo e(TranslationHelper::translate(ucwords('comns'))); ?>

                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'defective_conn','value' => ''.e(TranslationHelper::translate(ucwords('connection defective (red)'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'defective_conn','value' => ''.e(TranslationHelper::translate(ucwords('connection defective (red)'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden w-50 center','style' => 'color: red','name' => 'conn_inspected[defected]','id' => 'defective_conn','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['defected']) ? getDeCode($tubs->conn_inspected)['defected'] : null).'','placeholder' => '----------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden w-50 center','style' => 'color: red','name' => 'conn_inspected[defected]','id' => 'defective_conn','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['defected']) ? getDeCode($tubs->conn_inspected)['defected'] : null).'','placeholder' => '----------------------------------']); ?>
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
                                        <?php echo e(TranslationHelper::translate(ucwords('comns'))); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php if (isset($component)) { $__componentOriginal299a5447432cc2442bbb93ef9e768550 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299a5447432cc2442bbb93ef9e768550 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input-label','data' => ['for' => 'repaired_conn','value' => ''.e(TranslationHelper::translate(ucwords('connection repaired'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'repaired_conn','value' => ''.e(TranslationHelper::translate(ucwords('connection repaired'))).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $attributes = $__attributesOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__attributesOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299a5447432cc2442bbb93ef9e768550)): ?>
<?php $component = $__componentOriginal299a5447432cc2442bbb93ef9e768550; ?>
<?php unset($__componentOriginal299a5447432cc2442bbb93ef9e768550); ?>
<?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden w-50 center','style' => 'color: blue','name' => 'conn_inspected[repaired]','id' => 'repaired_conn','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['repaired']) ? getDeCode($tubs->conn_inspected)['repaired'] : null).'','placeholder' => '----------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden w-50 center','style' => 'color: blue','name' => 'conn_inspected[repaired]','id' => 'repaired_conn','value' => ''.e(isset(getDeCode($tubs->conn_inspected)['repaired']) ? getDeCode($tubs->conn_inspected)['repaired'] : null).'','placeholder' => '----------------------------------']); ?>
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
                                        <?php echo e(TranslationHelper::translate(ucwords('comns'))); ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <table class="info-table1 frameless-table" style="height: 10px;">
                <tbody>
                    <tr>
                        
                        <td style="width:auto; text-align:left">
                            <div><b><?php echo e(TranslationHelper::translate(ucwords('supervisor :'))); ?></b><?php if (isset($component)) { $__componentOriginal6d021ee351d1c732cb16749c3fef8c32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.default.input','data' => ['type' => 'text','class' => 'hidden','name' => 'supervisor','id' => 'supervisor','value' => ''.e($tubs->supervisor ?? '').'','placeholder' => '----------------------------------']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','class' => 'hidden','name' => 'supervisor','id' => 'supervisor','value' => ''.e($tubs->supervisor ?? '').'','placeholder' => '----------------------------------']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $attributes = $__attributesOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__attributesOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32)): ?>
<?php $component = $__componentOriginal6d021ee351d1c732cb16749c3fef8c32; ?>
<?php unset($__componentOriginal6d021ee351d1c732cb16749c3fef8c32); ?>
<?php endif; ?></div>
                        </td>
                        <td class="left">
                            <b><?php echo e(TranslationHelper::translate(ucwords('Inspector :'))); ?>

                            </b><?php echo e(Auth::user()->full_name); ?>

                        </td>
                    </tr>
                </tbody>
            </table>

            <?php if (isset($component)) { $__componentOriginal3fc67166c955686c7b080dd796c8d05e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3fc67166c955686c7b080dd796c8d05e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.reports.tubs.reference-table','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tubs.reference-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3fc67166c955686c7b080dd796c8d05e)): ?>
<?php $attributes = $__attributesOriginal3fc67166c955686c7b080dd796c8d05e; ?>
<?php unset($__attributesOriginal3fc67166c955686c7b080dd796c8d05e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3fc67166c955686c7b080dd796c8d05e)): ?>
<?php $component = $__componentOriginal3fc67166c955686c7b080dd796c8d05e; ?>
<?php unset($__componentOriginal3fc67166c955686c7b080dd796c8d05e); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal69f31224fc311241bf0eb8aca864115c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69f31224fc311241bf0eb8aca864115c = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Layouts\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Layouts\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69f31224fc311241bf0eb8aca864115c)): ?>
<?php $attributes = $__attributesOriginal69f31224fc311241bf0eb8aca864115c; ?>
<?php unset($__attributesOriginal69f31224fc311241bf0eb8aca864115c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69f31224fc311241bf0eb8aca864115c)): ?>
<?php $component = $__componentOriginal69f31224fc311241bf0eb8aca864115c; ?>
<?php unset($__componentOriginal69f31224fc311241bf0eb8aca864115c); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/tubs/content.blade.php ENDPATH**/ ?>
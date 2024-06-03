<?php $__env->startSection('title', trans('Dashboard/Lifting/mpi.' . $type . 'Title')); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0" style="color:blue;"><?php echo e(trans('Dashboard/Lifting/mpi.mpi')); ?></h4>
                            <div class="page-title-mpiht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo e(route('mpi.reports.index')); ?>"><?php echo e(trans('Dashboard/Lifting/mpi.mpi')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item active"><?php echo e(trans('Dashboard/Lifting/mpi.viewmpi')); ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?php echo e(trans('Dashboard/Lifting/mpi.' . $type . '_Report')); ?></h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-lg-auto">
                                        </div>
                                        <div class="col-sm">

                                        </div>
                                    </div>
                                    <?php if (isset($component)) { $__componentOriginal3ee8e6cd618674982f34cd16ebf8436b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\ErrorVerify::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.error-verify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\ErrorVerify::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['errors' => ''.e($errors).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b)): ?>
<?php $attributes = $__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b; ?>
<?php unset($__attributesOriginal3ee8e6cd618674982f34cd16ebf8436b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ee8e6cd618674982f34cd16ebf8436b)): ?>
<?php $component = $__componentOriginal3ee8e6cd618674982f34cd16ebf8436b; ?>
<?php unset($__componentOriginal3ee8e6cd618674982f34cd16ebf8436b); ?>
<?php endif; ?>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <?php if($type == 'Edit' && !empty($mpi->getMedia($mpi->type))): ?>
                                                <?php echo $__env->make('dashboard.pages.lifting.mpi.modal.gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php endif; ?>
                                        </div>
                                        <form class="tablelist-form" action="<?php echo e($action); ?>" method="POST" id="my-form"
                                              enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field($method); ?>
                                            <div class="row">
                                                <?php if($type =="Edit"): ?>
                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($mpi->report_number ?? '').'','label' => 'Report Number :','type' => 'text','name' => 'report_number','id' => 'report_number','readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($mpi->report_number ?? '').'','label' => 'Report Number :','type' => 'text','name' => 'report_number','id' => 'report_number','readonly' => true]); ?>
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
                                                    <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-6','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => $orders,'selectedData' => ''.e(optional($mpi->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($mpi->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']); ?>
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
                                                    <br>
                                                <?php else: ?>
                                                    <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-12','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => $orders,'selectedData' => ''.e(optional($mpi->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($mpi->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']); ?>
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
                                                    <br>
                                                <?php endif; ?>

                                                <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','value' => ''.e($mpi->customer_work_number ?? '').'','placeholder' => 'Enter Customer Work Number','label' => 'Customer Work Number :','type' => 'text','name' => 'customer_work_number','id' => 'customer_work_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($mpi->customer_work_number ?? '').'','placeholder' => 'Enter Customer Work Number','label' => 'Customer Work Number :','type' => 'text','name' => 'customer_work_number','id' => 'customer_work_number']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter Report Date','value' => ''.e($mpi->date ?? '').'','label' => 'Report Date :','type' => 'date','name' => 'date','id' => 'date','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter Report Date','value' => ''.e($mpi->date ?? '').'','label' => 'Report Date :','type' => 'date','name' => 'date','id' => 'date','required' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter Location','value' => ''.e($mpi->location ?? '').'','label' => 'Location :','type' => 'text','name' => 'location','id' => 'location']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter Location','value' => ''.e($mpi->location ?? '').'','label' => 'Location :','type' => 'text','name' => 'location','id' => 'location']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','placeholder' => 'Enter Report description','label' => 'description :','value' => ''.e($mpi->description ?? '').'','type' => 'text','name' => 'description','id' => 'description']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','placeholder' => 'Enter Report description','label' => 'description :','value' => ''.e($mpi->description ?? '').'','type' => 'text','name' => 'description','id' => 'description']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Enter serial Number','value' => ''.e($mpi->serial ?? '').'','label' => 'serial Number:','type' => 'text','name' => 'serial','id' => 'serial']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Enter serial Number','value' => ''.e($mpi->serial ?? '').'','label' => 'serial Number:','type' => 'text','name' => 'serial','id' => 'serial']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Enter Report Purchase Order No','label' => 'Purchase Order','value' => ''.e($mpi->purchase_order_no ?? '').'','type' => 'text','name' => 'purchase_order_no','id' => 'purchase_order_no']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Enter Report Purchase Order No','label' => 'Purchase Order','value' => ''.e($mpi->purchase_order_no ?? '').'','type' => 'text','name' => 'purchase_order_no','id' => 'purchase_order_no']); ?>
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

                                                
                                                <div class="col-4">
                                                    <?php if (isset($component)) { $__componentOriginalfd990dfe5f20573085fc8ca822964944 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd990dfe5f20573085fc8ca822964944 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\MagnetizingCurrent::resolve(['var' => $mpi] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.magnetizing-current'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\MagnetizingCurrent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd990dfe5f20573085fc8ca822964944)): ?>
<?php $attributes = $__attributesOriginalfd990dfe5f20573085fc8ca822964944; ?>
<?php unset($__attributesOriginalfd990dfe5f20573085fc8ca822964944); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd990dfe5f20573085fc8ca822964944)): ?>
<?php $component = $__componentOriginalfd990dfe5f20573085fc8ca822964944; ?>
<?php unset($__componentOriginalfd990dfe5f20573085fc8ca822964944); ?>
<?php endif; ?>
                                                </div>
                                                <div class="col-4">
                                                    <?php if (isset($component)) { $__componentOriginal644aca9e045542f6098b0e00ed9f3b0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal644aca9e045542f6098b0e00ed9f3b0b = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\SurfaceCondition::resolve(['var' => $mpi] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.surface-condition'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\SurfaceCondition::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal644aca9e045542f6098b0e00ed9f3b0b)): ?>
<?php $attributes = $__attributesOriginal644aca9e045542f6098b0e00ed9f3b0b; ?>
<?php unset($__attributesOriginal644aca9e045542f6098b0e00ed9f3b0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal644aca9e045542f6098b0e00ed9f3b0b)): ?>
<?php $component = $__componentOriginal644aca9e045542f6098b0e00ed9f3b0b; ?>
<?php unset($__componentOriginal644aca9e045542f6098b0e00ed9f3b0b); ?>
<?php endif; ?>
                                                </div>
                                                <div class="col-4">
                                                    <?php if (isset($component)) { $__componentOriginal811e2975ea00fe133fd5b6030075f602 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal811e2975ea00fe133fd5b6030075f602 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\MagneticParticles::resolve(['var' => $mpi] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.magnetic-particles'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\MagneticParticles::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal811e2975ea00fe133fd5b6030075f602)): ?>
<?php $attributes = $__attributesOriginal811e2975ea00fe133fd5b6030075f602; ?>
<?php unset($__attributesOriginal811e2975ea00fe133fd5b6030075f602); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal811e2975ea00fe133fd5b6030075f602)): ?>
<?php $component = $__componentOriginal811e2975ea00fe133fd5b6030075f602; ?>
<?php unset($__componentOriginal811e2975ea00fe133fd5b6030075f602); ?>
<?php endif; ?>
                                                </div>
                                                <div class="row" style="margin:2%">
                                                    <div class="col-6">
                                                        <?php if (isset($component)) { $__componentOriginalb260badae21f485edbed8106d14bd14e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb260badae21f485edbed8106d14bd14e = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Equipment::resolve(['var' => $mpi] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.equipment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Equipment::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb260badae21f485edbed8106d14bd14e)): ?>
<?php $attributes = $__attributesOriginalb260badae21f485edbed8106d14bd14e; ?>
<?php unset($__attributesOriginalb260badae21f485edbed8106d14bd14e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb260badae21f485edbed8106d14bd14e)): ?>
<?php $component = $__componentOriginalb260badae21f485edbed8106d14bd14e; ?>
<?php unset($__componentOriginalb260badae21f485edbed8106d14bd14e); ?>
<?php endif; ?>
                                                    </div>
                                                    <div class="col-6">
                                                        <?php if (isset($component)) { $__componentOriginal6b20b3178a4b86ae3c98756c40b88395 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b20b3178a4b86ae3c98756c40b88395 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Specification::resolve(['var' => $mpi] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.specification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Specification::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b20b3178a4b86ae3c98756c40b88395)): ?>
<?php $attributes = $__attributesOriginal6b20b3178a4b86ae3c98756c40b88395; ?>
<?php unset($__attributesOriginal6b20b3178a4b86ae3c98756c40b88395); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b20b3178a4b86ae3c98756c40b88395)): ?>
<?php $component = $__componentOriginal6b20b3178a4b86ae3c98756c40b88395; ?>
<?php unset($__componentOriginal6b20b3178a4b86ae3c98756c40b88395); ?>
<?php endif; ?>
                                                    </div>
                                                    
                                                </div>
                                                <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Enter Area Inspected','value' => ''.e($mpi->extent ?? '').'','label' => 'Area Inspected:','type' => 'text','name' => 'extent','id' => 'extent']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Enter Area Inspected','value' => ''.e($mpi->extent ?? '').'','label' => 'Area Inspected:','type' => 'text','name' => 'extent','id' => 'extent']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Enter supervisor Name','value' => ''.e($mpi->supervisor ?? '').'','label' => 'Supervisor:','type' => 'text','name' => 'supervisor','id' => 'supervisor']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Enter supervisor Name','value' => ''.e($mpi->supervisor ?? '').'','label' => 'Supervisor:','type' => 'text','name' => 'supervisor','id' => 'supervisor']); ?>
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
                                                <input type="hidden" name="type" value="mpi">
                                                <input type="hidden" name="user_id"
                                                       value="<?php echo e(Illuminate\Support\Facades\Auth::user()->id); ?>">
                                                <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','placeholder' => 'Enter  Note ','value' => ''.e($mpi->note ?? '').'','label' => 'Note:','type' => 'text','name' => 'note','id' => 'note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','placeholder' => 'Enter  Note ','value' => ''.e($mpi->note ?? '').'','label' => 'Note:','type' => 'text','name' => 'note','id' => 'note']); ?>
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
                                                <?php echo $__env->make('dashboard.pages.lifting.mpi.modal.result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                                            </div>
                                            <div class="row">
                                                
                                                <?php echo $__env->make('dashboard.pages.lifting.mpi.modal.upload_images', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                

                                                
                                                <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['class' => 'col-4','value' => ''.e($mpi->acceptance ?? '').'','style' => 'font-size: 1.4em;','label' => ':Acceptance','name' => 'acceptance','id' => 'acceptance']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($mpi->acceptance ?? '').'','style' => 'font-size: 1.4em;','label' => ':Acceptance','name' => 'acceptance','id' => 'acceptance']); ?>
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
                                                <br><br>
                                                

                                                
                                                <?php if (! (isset($mpi))): ?>
                                                    <?php echo $__env->make('dashboard.pages.lifting.mpi.modal.extend_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <?php else: ?>
                                                    <?php echo $__env->make(
                                                    'dashboard.pages.lifting.mpi.modal.extend_content',
                                                    [
                                                    $mpi->first_label,
                                                    $mpi->first_content,
                                                    $mpi->second_label,
                                                    $mpi->second_content,
                                                    ]
                                                    , \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                <?php endif; ?>
                                                

                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a type="button" style="color: black; font-weight:bold;"
                                                       class="btn btn-danger"
                                                       href="<?php echo e(route('mpi.reports.index')); ?>"><?php echo e(trans('Dashboard/Lifting/mpi.close')); ?></a>
                                                    <button style="color: black; font-weight:bold;" type="submit"
                                                            class="btn btn-success"
                                                            id="add-btn"><?php echo e(trans('Dashboard/Lifting/mpi.save')); ?></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
    <!-- end main content-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");

        </script>
    <?php endif; ?>
    <script src="<?php echo e(asset('dashboard/assets/libs/ckeditor/build/ckeditor.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/mpi/crud.blade.php ENDPATH**/ ?>
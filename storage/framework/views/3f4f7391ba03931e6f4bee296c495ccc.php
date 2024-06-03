<?php $__env->startSection('title', trans('Dashboard/Lifting/examination.' . $type . 'Title')); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(asset('dashboard')); ?>/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    
    
    
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?php if (isset($component)) { $__componentOriginaldc389108284df2874c4495ee5f24d137 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc389108284df2874c4495ee5f24d137 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\Breadcrumb::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\Breadcrumb::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title1' => ''.e(trans('Dashboard/Lifting/examination.examination')).'','title2' => ''.e(trans('Dashboard/Lifting/examination.examination')).'','route' => ''.e(route('examination.reports.index')).'','title3' => ''.e(trans('Dashboard/Lifting/examination.viewExamination')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc389108284df2874c4495ee5f24d137)): ?>
<?php $attributes = $__attributesOriginaldc389108284df2874c4495ee5f24d137; ?>
<?php unset($__attributesOriginaldc389108284df2874c4495ee5f24d137); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc389108284df2874c4495ee5f24d137)): ?>
<?php $component = $__componentOriginaldc389108284df2874c4495ee5f24d137; ?>
<?php unset($__componentOriginaldc389108284df2874c4495ee5f24d137); ?>
<?php endif; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0"><?php echo e(trans('Dashboard/Lifting/examination.' . $type . $examType)); ?></h4>
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
                                    <form class="tablelist-form" action="<?php echo e($action); ?>" method="POST"
                                          enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field($method); ?>

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <?php if($type =="Edit"): ?>
                                                        <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','placeholder' => 'Review report number','value' => ''.e($examination->report_number ?? '').'','label' => 'Report Number :','type' => 'text','name' => 'report_number','id' => 'report_number','readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','placeholder' => 'Review report number','value' => ''.e($examination->report_number ?? '').'','label' => 'Report Number :','type' => 'text','name' => 'report_number','id' => 'report_number','readonly' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-6','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => $orders,'selectedData' => ''.e(optional($examination->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($examination->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']); ?>
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
                                                        <hr>
                                                        <br>
                                                    <?php else: ?>
                                                        <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-12','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => $orders,'selectedData' => ''.e(optional($examination->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','label' => ''.e(trans('Dashboard/orders.order')).'','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders),'selectedData' => ''.e(optional($examination->getOrders)->id).'','span' => ''.e(trans('Dashboard/orders.order')).'']); ?>
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
                                                        <hr>
                                                        <br>
                                                    <?php endif; ?>

                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','value' => ''.e($examination->exam_date ?? '').'','placeholder' => 'Enter Thorugh Examination Date','label' => 'Thorugh Examination Date :','type' => 'date','name' => 'exam_date','id' => 'exam_date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($examination->exam_date ?? '').'','placeholder' => 'Enter Thorugh Examination Date','label' => 'Thorugh Examination Date :','type' => 'date','name' => 'exam_date','id' => 'exam_date']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter Identified Number','value' => ''.e($examination->identified_number ?? '').'','label' => 'Identified Number :','type' => 'text','name' => 'identified_number','id' => 'identified_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter Identified Number','value' => ''.e($examination->identified_number ?? '').'','label' => 'Identified Number :','type' => 'text','name' => 'identified_number','id' => 'identified_number']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','placeholder' => 'Enter QTY','value' => ''.e($examination->qty ?? '').'','label' => 'QTY :','type' => 'text','name' => 'qty','id' => 'qty']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','placeholder' => 'Enter QTY','value' => ''.e($examination->qty ?? '').'','label' => 'QTY :','type' => 'text','name' => 'qty','id' => 'qty']); ?>
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
                                                    <?php echo $__env->make("dashboard.pages.lifting.examination.description.$examType", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($examination->manufature_date ?? '').'','placeholder' => 'Enter Manufature Date','label' => 'Manufature Date :','type' => 'date','name' => 'manufature_date','id' => 'manufature_date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($examination->manufature_date ?? '').'','placeholder' => 'Enter Manufature Date','label' => 'Manufature Date :','type' => 'date','name' => 'manufature_date','id' => 'manufature_date']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($examination->last_exam_date ?? '').'','placeholder' => 'Enter Last_Exam Date','label' => 'Last Exam Date :','type' => 'date','name' => 'last_exam_date','id' => 'last_exam_date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($examination->last_exam_date ?? '').'','placeholder' => 'Enter Last_Exam Date','label' => 'Last Exam Date :','type' => 'date','name' => 'last_exam_date','id' => 'last_exam_date']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','value' => ''.e($examination->original_cert_number ?? '').'','placeholder' => 'Enter Original Certificate No ','label' => 'Original Certificate No :','type' => 'text','name' => 'original_cert_number','id' => 'original_cert_number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($examination->original_cert_number ?? '').'','placeholder' => 'Enter Original Certificate No ','label' => 'Original Certificate No :','type' => 'text','name' => 'original_cert_number','id' => 'original_cert_number']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','value' => ''.e($examination->original_cert_date ?? '').'','placeholder' => 'Enter Original Certificate Date','label' => 'Original Certificate Date :','type' => 'date','name' => 'original_cert_date','id' => 'original_cert_date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($examination->original_cert_date ?? '').'','placeholder' => 'Enter Original Certificate Date','label' => 'Original Certificate Date :','type' => 'date','name' => 'original_cert_date','id' => 'original_cert_date']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-4','value' => ''.e($examination->cert_body_name ?? '').'','placeholder' => 'Enter Name of Certifying Body','label' => 'Name of Certifying Body :','type' => 'text','name' => 'cert_body_name','id' => 'cert_body_name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($examination->cert_body_name ?? '').'','placeholder' => 'Enter Name of Certifying Body','label' => 'Name of Certifying Body :','type' => 'text','name' => 'cert_body_name','id' => 'cert_body_name']); ?>
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
                                                </div>


                                                <div class="row">
                                                    <!-- Base Example -->
                                                    <div class="accordion" id="default-accordion-example">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                    Is this the first examination after installation or
                                                                    assembly at a new site or location?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne"
                                                                 class="accordion-collapse collapse show"
                                                                 aria-labelledby="headingOne"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '0','val' => ''.e($examination->first_exam_after ?? '').'','label' => ':Check Accourding to No','name' => 'first_exam_after','id' => 'first_exam_after1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '0','val' => ''.e($examination->first_exam_after ?? '').'','label' => ':Check Accourding to No','name' => 'first_exam_after','id' => 'first_exam_after1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '1','val' => ''.e($examination->first_exam_after ?? '').'','label' => ':Check Accourding to YES','name' => 'first_exam_after','id' => 'first_exam_after2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '1','val' => ''.e($examination->first_exam_after ?? '').'','label' => ':Check Accourding to YES','name' => 'first_exam_after','id' => 'first_exam_after2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                    If the answer to the above question is YES has the
                                                                    equipment been installed correctly?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingTwo"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '0','val' => ''.e($examination->has_equipment ?? '').'','label' => ':Check Accourding to No','name' => 'has_equipment','id' => 'has_equipment1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '0','val' => ''.e($examination->has_equipment ?? '').'','label' => ':Check Accourding to No','name' => 'has_equipment','id' => 'has_equipment1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '1','val' => ''.e($examination->has_equipment ?? '').'','label' => ':Check Accourding to YES','name' => 'has_equipment','id' => 'has_equipment2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '1','val' => ''.e($examination->has_equipment ?? '').'','label' => ':Check Accourding to YES','name' => 'has_equipment','id' => 'has_equipment2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                    Was the examination carried out ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingThree"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => 'interval_month','val' => ''.e($examination->carried_out ?? '').'','label' => ':Within an interval of 6 months?','name' => 'carried_out','id' => 'carried_out1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => 'interval_month','val' => ''.e($examination->carried_out ?? '').'','label' => ':Within an interval of 6 months?','name' => 'carried_out','id' => 'carried_out1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => 'interval_year','val' => ''.e($examination->carried_out ?? '').'','label' => ':Within an interval of 12 months?','name' => 'carried_out','id' => 'carried_out2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => 'interval_year','val' => ''.e($examination->carried_out ?? '').'','label' => ':Within an interval of 12 months?','name' => 'carried_out','id' => 'carried_out2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => 'exam_scheme','val' => ''.e($examination->carried_out ?? '').'','label' => ':In accordance with an examination scheme?','name' => 'carried_out','id' => 'carried_out3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => 'exam_scheme','val' => ''.e($examination->carried_out ?? '').'','label' => ':In accordance with an examination scheme?','name' => 'carried_out','id' => 'carried_out3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => 'circumstances','val' => ''.e($examination->carried_out ?? '').'','label' => ':After the occurrence of exceptional circumstances?','name' => 'carried_out','id' => 'carried_out4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => 'circumstances','val' => ''.e($examination->carried_out ?? '').'','label' => ':After the occurrence of exceptional circumstances?','name' => 'carried_out','id' => 'carried_out4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>

                                                                    
                                                                    
                                                                    
                                                                    
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFour">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFour"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFour">
                                                                    Identification of any part found to have a defect
                                                                    which is or could become a danger to persons and a
                                                                    description of the defect?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingFour"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','value' => ''.e($examination->defect_note ?? '').'','placeholder' => 'If none state NONE','label' => 'Defect Note :','type' => 'text','name' => 'defect_note','id' => 'defect_note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','value' => ''.e($examination->defect_note ?? '').'','placeholder' => 'If none state NONE','label' => 'Defect Note :','type' => 'text','name' => 'defect_note','id' => 'defect_note']); ?>
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
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingFive">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseFive"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseFive">
                                                                    Is the above an existing or imminent danger to
                                                                    persons ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingFive"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '0','val' => ''.e($examination->danger ?? '').'','label' => ':Check Accourding to No','name' => 'danger','id' => 'danger1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '0','val' => ''.e($examination->danger ?? '').'','label' => ':Check Accourding to No','name' => 'danger','id' => 'danger1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '1','val' => ''.e($examination->danger ?? '').'','label' => ':Check Accourding to YES','name' => 'danger','id' => 'danger2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '1','val' => ''.e($examination->danger ?? '').'','label' => ':Check Accourding to YES','name' => 'danger','id' => 'danger2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSix">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSix"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSix">
                                                                    Is the above a defect which is not yet but could
                                                                    become a danger to persons ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingSix"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','value' => ''.e($examination->danger_date ?? '').'','placeholder' => ':If YES state the date by when','label' => 'Date  :','type' => 'date','name' => 'danger_date','id' => 'danger_date']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','value' => ''.e($examination->danger_date ?? '').'','placeholder' => ':If YES state the date by when','label' => 'Date  :','type' => 'date','name' => 'danger_date','id' => 'danger_date']); ?>
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

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingSeven">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseSeven"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseSeven">
                                                                    Particulars of any repair, renewal or alteration
                                                                    required to remedy the defect identified above ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseSeven" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingSeven"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black">
                                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','value' => ''.e($examination->perfect_note ?? '').'','placeholder' => 'Note','label' => 'Note  :','type' => 'text','name' => 'perfect_note','id' => 'perfect_note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','value' => ''.e($examination->perfect_note ?? '').'','placeholder' => 'Note','label' => 'Note  :','type' => 'text','name' => 'perfect_note','id' => 'perfect_note']); ?>
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

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingEight">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseEight"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseEight">
                                                                    Particulars of any tests carried out as part of the
                                                                    examination ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseEight" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingEight"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black">
                                                                    <div class="col-6">
                                                                        <label for="customername-field"
                                                                               class="form-label">Choose Carried
                                                                            Exam</label>
                                                                        <select name="carried_exam[]" multiple
                                                                                multiselect-search="true"
                                                                                data-placeholder="Choose an Option"
                                                                                multiselect-select-all="true">
                                                                            <option
                                                                                    value="visual_inspection" <?php echo e(isset($examination->carried_exam )&& in_array('visual_inspection', $examination->getDeCode($examination->carried_exam)) ? 'selected' : ""); ?>>
                                                                                Visual Inspection
                                                                            </option>
                                                                            <option
                                                                                    value="function_test" <?php echo e(isset($examination->carried_exam )&& in_array('function_test', $examination->getDeCode($examination->carried_exam)) ? 'selected' : ""); ?>>
                                                                                Function Test
                                                                            </option>
                                                                            <option
                                                                                    value="load_test" <?php echo e(isset($examination->carried_exam )&& in_array('load_test', $examination->getDeCode($examination->carried_exam)) ? 'selected' : ""); ?>>
                                                                                Load Test
                                                                            </option>
                                                                            <option
                                                                                    value="mpi" <?php echo e(isset($examination->carried_exam )&& in_array('mpi', $examination->getDeCode($examination->carried_exam)) ? 'selected' : ""); ?>>
                                                                                MPI
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-6','value' => ''.e($examination->carried_note ?? '').'','placeholder' => 'Examination Carried Out Note','label' => ' Enter Examination Carried Out Note  :','type' => 'text','name' => 'carried_note','id' => 'carried_note']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => ''.e($examination->carried_note ?? '').'','placeholder' => 'Examination Carried Out Note','label' => ' Enter Examination Carried Out Note  :','type' => 'text','name' => 'carried_note','id' => 'carried_note']); ?>
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

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingNine">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseNine"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseNine" id="newid">
                                                                    IS THIS EQUIPMENT SAFE TO OPERATE ?
                                                                </button>
                                                            </h2>
                                                            <div id="collapseNine" class="accordion-collapse collapse"
                                                                 aria-labelledby="headingNine"
                                                                 data-bs-parent="#default-accordion-example">
                                                                <div class="accordion-body row" style="color:black;">
                                                                    
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '0','val' => ''.e($examination->safe_equipment ?? '').'','label' => ':Check Accourding to No','name' => 'safe_equipment','id' => 'safe_equipment1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '0','val' => ''.e($examination->safe_equipment ?? '').'','label' => ':Check Accourding to No','name' => 'safe_equipment','id' => 'safe_equipment1']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                    <?php if (isset($component)) { $__componentOriginala9d511f42bf837f1025f02a06933b62f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d511f42bf837f1025f02a06933b62f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.radio-btn','data' => ['class' => 'col-6','value' => '1','val' => ''.e($examination->safe_equipment ?? '').'','label' => ':Check Accourding to YES','name' => 'safe_equipment','id' => 'safe_equipment2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.radio-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-6','value' => '1','val' => ''.e($examination->safe_equipment ?? '').'','label' => ':Check Accourding to YES','name' => 'safe_equipment','id' => 'safe_equipment2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $attributes = $__attributesOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__attributesOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d511f42bf837f1025f02a06933b62f)): ?>
<?php $component = $__componentOriginala9d511f42bf837f1025f02a06933b62f; ?>
<?php unset($__componentOriginala9d511f42bf837f1025f02a06933b62f); ?>
<?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <br>
                                                    <input type="hidden" name="type" value="<?php echo e($examType); ?>"/>


                                                    
                                                    <div class="col-4"></div>
                                                    <div class="col-4">
                                                        <br>
                                                        <div class="row">
                                                            <?php if($examType == "thorough"): ?>
                                                                <div class="col-8">
                                                                    <?php if($type =="Edit"): ?>
                                                                        <?php echo $__env->make("dashboard.pages.lifting.examination.modal.checklist" ,['examination'=>$examination], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                    <?php else: ?>
                                                                        <?php echo $__env->make("dashboard.pages.lifting.examination.modal.checklist", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            <?php endif; ?>

                                                            <?php if (isset($component)) { $__componentOriginal9119fc539a62a16592783876c5ca7493 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9119fc539a62a16592783876c5ca7493 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switches','data' => ['class' => 'col-4','value' => ''.e($examination->accept ?? '').'','style' => 'font-size: 1.4em;','label' => ':Acceptance','name' => 'accept','id' => 'accept']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switches'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-4','value' => ''.e($examination->accept ?? '').'','style' => 'font-size: 1.4em;','label' => ':Acceptance','name' => 'accept','id' => 'accept']); ?>
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
                                                        <br>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a type="button" style="color: black; font-weight:bold;"
                                                           class="btn btn-danger"
                                                           href="<?php echo e(route('examination.reports.index',$examType)); ?>"><?php echo e(trans('Dashboard/Lifting/examination.close')); ?></a>
                                                        <button style="color: black; font-weight:bold;" type="submit"
                                                                class="btn btn-success"
                                                                id="add-btn"><?php echo e(trans('Dashboard/Lifting/examination.save')); ?></button>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");

        </script>
    <?php endif; ?>
    <script src="<?php echo e(asset('dashboard')); ?>/pages/lifting/examination/js/js.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/assets/multiSelect/js/multiselect.js"></script>
    <script src="<?php echo e(asset('dashboard/assets/js/extensions/mdb.umd.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/examination/crud.blade.php ENDPATH**/ ?>
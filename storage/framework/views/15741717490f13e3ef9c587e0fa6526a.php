
<?php $__env->startSection('title', TranslationHelper::translate(ucwords($type . ' ' . $examType))); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('dashboard/pages/tublar/tubs/css/style.css')); ?>">
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
<?php $component->withAttributes(['title1' => ''.e(TranslationHelper::translate($type . '_' . ucwords($examType))).'','title2' => ''.e(TranslationHelper::translate('tubs')).'','route' => '','title3' => ''.e(TranslationHelper::translate($type . ' ' . ucwords($examType))).'']); ?>
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
                <div class="card-body">
                    <div id="customerList">
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
                                
                                <?php if (isset($component)) { $__componentOriginal8607bf852d3867a29287a4241364a0c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8607bf852d3867a29287a4241364a0c1 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Reports\Tubs\Content::resolve(['type' => $type,'examType' => $examType,'tubs' => $tubs,'accept' => $accept,'orders' => $orders] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.reports.tubs.content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Reports\Tubs\Content::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8607bf852d3867a29287a4241364a0c1)): ?>
<?php $attributes = $__attributesOriginal8607bf852d3867a29287a4241364a0c1; ?>
<?php unset($__attributesOriginal8607bf852d3867a29287a4241364a0c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8607bf852d3867a29287a4241364a0c1)): ?>
<?php $component = $__componentOriginal8607bf852d3867a29287a4241364a0c1; ?>
<?php unset($__componentOriginal8607bf852d3867a29287a4241364a0c1); ?>
<?php endif; ?>
                                
                            </div>
                            <br>
                            <div class="modal-footer row">
                                <?php if($type == 'Edit'): ?>
                                    <div class="col-8">
                                        <a type="button" style="color: black; font-weight:bold;"
                                            class="btn btn-outline-primary"
                                            href="<?php echo e(route('tubs.reports.create', ['type' => $tubs->type])); ?>"><?php echo e(TranslationHelper::translate(ucwords('new report'))); ?></a>
                                        <a type="button" style="color: black; font-weight:bold;"
                                            class="btn btn-outline-primary"
                                            href="<?php echo e(route('tubs.reports.repeat', $tubs->id)); ?>"><?php echo e(TranslationHelper::translate(ucwords('repeat report'))); ?></a>
                                    </div>
                                <?php endif; ?>
                                <div class="col-4 hstack gap-2 justify-content-end">
                                    <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger"
                                        href="<?php echo e(route('tubs.reports.index', ['type' => $examType])); ?>"><?php echo e(TranslationHelper::translate(ucwords('close'))); ?></a>
                                    <button style="color: black; font-weight:bold;" type="submit" class="btn btn-success"
                                        id="add-btn"><?php echo e(TranslationHelper::translate(ucwords('save'))); ?></button>
                                </div>
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- end preloader-menu -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('dashboard/pages/tublar/tubs/js/script.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/layouts/formRepeater/js/js.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/layouts/formRepeater/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/layouts/formRepeater/js/jquery.repeater.min.js')); ?>"></script>
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/tublar/tubs/crud.blade.php ENDPATH**/ ?>
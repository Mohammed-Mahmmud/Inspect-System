
<?php $__env->startSection('title', trans("Dashboard/Tublar/tools.".$type."Title")); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('dashboard/pages/tools/tools/css/crud.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('dashboard/pages/tools/tools/css/bootstrap.min.css')); ?>">
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
<?php $component->withAttributes(['title1' => ''.e(trans('Dashboard/Tublar/tools.'.$type.'_'.$examType)).'','title2' => ''.e(trans('Dashboard/Tublar/tools.tools')).'','route' => '','title3' => ''.e(trans('Dashboard/Tublar/tools.'.$type.$examType)).'']); ?>
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
                    <form class="tablelist-form" action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field($method); ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xxl-6">
                                    
                                    <div class="card">
                                        <div class="border">
                                            <ul class="nav nav-pills custom-hover-nav-tabs">
                                                <li class="nav-item">
                                                    <a href="#custom-hover-customere" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                        <i class="bx bx-notepad  nav-icon nav-tab-position"></i>
                                                        <h5 class="nav-titl nav-tab-position m-0"><?php echo e(trans('Dashboard/Tublar/tools.header')); ?></h5>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#custom-hover-reviews" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="bx bx-align-justify nav-icon nav-tab-position"></i>
                                                        <h5 class="nav-titl nav-tab-position m-0"><?php echo e(trans('Dashboard/Tublar/tools.description')); ?></h5>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content text-muted">
                                                <div class="tab-pane show active" id="custom-hover-customere">
                                                    <h6 style="text-align:center"><?php echo e(trans('Dashboard/Tublar/tools.'.$examType.'Content')); ?></h6>
                                                    <div class="">
                                                        <?php echo $__env->make('dashboard.pages.tublar.tools.modal.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    </div>
                                                </div>
                                                <input type="hidden" name='type' value="<?php echo e($examType); ?>" required />
                                                <div class="tab-pane" id="custom-hover-reviews">
                                                    <h6 style="text-align:center"><?php echo e(trans('Dashboard/Tublar/tools.'.$examType.'TableDesc')); ?></h6>
                                                    <div class="" width='100%'>
                                                        <?php echo $__env->make('dashboard.pages.tublar.tools.modal.body.'.str_replace('*','-',$examType), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card-body -->
                                        <br>
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <a type="button" style="color: black; font-weight:bold;" class="btn btn-danger" href="<?php echo e(route( 'tools.reports.index', [ 'type' =>$examType ] )); ?>"><?php echo e(trans('Dashboard/Tublar/tools.close')); ?></a>
                                                <button style="color: black; font-weight:bold;" type="submit" class="btn btn-success" id="add-btn"><?php echo e(trans('Dashboard/Tublar/tools.save')); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
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
    <script src="<?php echo e(asset('dashboard/layouts/formRepeater/js/js.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/layouts/formRepeater/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/layouts/formRepeater/js/jquery.repeater.min.js')); ?>"></script>
<?php if(Session::has('message')): ?>
<script>
    toastr.success("<?php echo e(Session::get('message')); ?>");
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/tublar/tools/crud.blade.php ENDPATH**/ ?>
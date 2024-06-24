
<?php $__env->startSection('title', trans('Dashboard/Lifting/mpi.viewTitle')); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .right {
            text-align=right;
        }
    </style>
    <!-- Sweet Alert css-->
    <link href="<?php echo e(asset('dashboard')); ?>/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0"><?php echo e(trans('Dashboard/Lifting/mpi.mpi')); ?></h4>

                            <div class="page-title-mpiht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);"><?php echo e(trans('Dashboard/Lifting/mpi.mpi')); ?></a>
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
                                <div id="customerList">
                                    <div class="row g-2 mb-0">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                    href="<?php echo e(route('mpi.reports.create')); ?>"><?php echo e(TranslationHelper::translate(ucwords('new mpi'))); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <?php if (isset($component)) { $__componentOriginalf22a2e18a1008a10d67019b82c7f35a7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf22a2e18a1008a10d67019b82c7f35a7 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\DeleteSelected::resolve(['route' => route('reports.deleteAll'),'model' => $data] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.delete-selected'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\DeleteSelected::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf22a2e18a1008a10d67019b82c7f35a7)): ?>
<?php $attributes = $__attributesOriginalf22a2e18a1008a10d67019b82c7f35a7; ?>
<?php unset($__attributesOriginalf22a2e18a1008a10d67019b82c7f35a7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf22a2e18a1008a10d67019b82c7f35a7)): ?>
<?php $component = $__componentOriginalf22a2e18a1008a10d67019b82c7f35a7; ?>
<?php unset($__componentOriginalf22a2e18a1008a10d67019b82c7f35a7); ?>
<?php endif; ?>
                                        </div>
                                        <div class="col-sm-auto">
                                            <?php if (isset($component)) { $__componentOriginal1bc174df23f970af2e398b389e53eb57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1bc174df23f970af2e398b389e53eb57 = $attributes; } ?>
<?php $component = App\View\Components\Dashboard\Layouts\DownloadSelected::resolve(['route' => route('mpi.reports.downloadAll')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.download-selected'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Dashboard\Layouts\DownloadSelected::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1bc174df23f970af2e398b389e53eb57)): ?>
<?php $attributes = $__attributesOriginal1bc174df23f970af2e398b389e53eb57; ?>
<?php unset($__attributesOriginal1bc174df23f970af2e398b389e53eb57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1bc174df23f970af2e398b389e53eb57)): ?>
<?php $component = $__componentOriginal1bc174df23f970af2e398b389e53eb57; ?>
<?php unset($__componentOriginal1bc174df23f970af2e398b389e53eb57); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
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
                                <div class="table">
                                    <table class="table align-middle mb-0" id="table_id">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll"
                                                            value="option">
                                                    </div>
                                                </th>
                                                <th class="" data-sort="customer_id">#</th>
                                                <th class="" data-sort="">
                                                    <?php echo e(trans('Dashboard/Lifting/mpi.report_number')); ?>

                                                <th class="" data-sort="">
                                                    <?php echo e(trans('Dashboard/Lifting/mpi.date')); ?></th>
                                                <th class="" data-sort="">
                                                    <?php echo e(trans('Dashboard/Lifting/mpi.user')); ?></th>
                                                <th class="" data-sort="">
                                                    <?php echo e(trans('Dashboard/Lifting/mpi.serial')); ?></th>
                                                </th>
                                                <th class="" data-sort="action">
                                                    <?php echo e(trans('Dashboard/Lifting/mpi.acceptance')); ?></th>
                                                <th class="" data-sort="action">
                                                    <?php echo e(trans('Dashboard/Lifting/mpi.action')); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            
                                            <?php
                                                $i = 1;
                                            ?>
                                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input chk_child" type="checkbox"
                                                                id="chk_child_<?php echo e($item->id); ?>" name="chk_child[]"
                                                                value="<?php echo e($item->id); ?>">
                                                        </div>
                                                    </th>
                                                    <td class="id"><?php echo e($i++); ?></td>
                                                    <td class="customer_full_name"><?php echo e($item->report_number); ?></td>
                                                    <td class="customer_full_name"><?php echo e($item->date); ?></td>
                                                    <td class="customer_full_name"><?php echo e($item->getUser->name); ?></td>
                                                    <td class="customer_full_name"><?php echo e($item->serial); ?></td>
                                                    <?php if($item->acceptance == 1): ?>
                                                        <td class="customer_full_name" style="color: green">Accepted</td>
                                                    <?php else: ?>
                                                        <td class="customer_full_name" style="color: red"> Rejected</td>
                                                    <?php endif; ?>
                                                    <td>
                                                        <div class="dropdown position-static">
                                                            <button class="btn btn-subtle-secondary btn-sm btn-icon"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bi bi-three-dots-vertical"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" target="_blank"
                                                                        href="<?php echo e(route('mpi.reports.show', $item->id)); ?>"><i
                                                                            class="ph-eye align-middle me-1"></i>
                                                                        View</a></li>
                                                                <li><a class="dropdown-item" target="_blank"
                                                                        href="<?php echo e(route('mpi.reports.repeat', $item->id)); ?>"><i
                                                                            class=" bx bx-repeat me-1"></i>
                                                                        Repeat</a></li>
                                                                <?php if(auth()->user()->id == $item->user_id || auth()->user()->can('editor')): ?>
                                                                    <li><a class="dropdown-item edit-item-btn"
                                                                            target="_blank"
                                                                            href="<?php echo e(route('mpi.reports.edit', $item->id)); ?>"><i
                                                                                class=" ph-pencil align-middle me-1"></i>
                                                                            Edit</a></li>
                                                                    <li><a class="dropdown-item remove-item-btn"
                                                                            href="" data-bs-toggle="modal"
                                                                            data-bs-target="#delete<?php echo e($item->id); ?>"><i
                                                                                class="ph-trash align-middle me-1"></i>
                                                                            Remove</a></li>
                                                                <?php endif; ?>
                                                                <li><a class="dropdown-item download-item-btn"
                                                                        target="_blank"
                                                                        href="<?php echo e(route('mpi.reports.download', $item->id)); ?>"><i
                                                                            class="bx bx-download align-middle me-1"></i>
                                                                        Download</a></li>
                                                            </ul>
                                                            <!-- Modal -->
                                                            <form action="<?php echo e(route('mpi.reports.destroy', $item->id)); ?>"
                                                                method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                                <div class="modal fade" id="delete<?php echo e($item->id); ?>"
                                                                    tabindex="-1" role="dialog"
                                                                    aria-labelledby="exampleModalCenterTitle"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLongTitle">
                                                                                    <?php echo e(trans('Dashboard/Lifting/mpi.remove')); ?>

                                                                                    <?php echo e($item->report_number); ?></h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    id="close-modal"></button>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php echo e(trans('Dashboard/Lifting/mpi.delete_message')); ?>

                                                                                <br><?php echo e($item->report_number); ?>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-info"
                                                                                        data-bs-dismiss="modal"><?php echo e(trans('Dashboard/Lifting/mpi.close')); ?></button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-danger"
                                                                                        id="add-btn"><?php echo e(trans('Dashboard/Lifting/mpi.delete_mpi')); ?></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <?php echo e($data->links('pagination::bootstrap-5')); ?>

                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");
        </script>
    <?php endif; ?>
    <!-- prismjs plugin -->
    <script src="<?php echo e(asset('dashboard/assets/libs/prismjs/prism.js')); ?>"></script>
    <script src="<?php echo e(asset('dashboard/assets/libs/list.pagination.js')); ?>"></script>
    <!-- listjs init -->
    <!-- Sweet Alerts js -->
    <script src="<?php echo e(asset('dashboard/assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/mpi/view.blade.php ENDPATH**/ ?>
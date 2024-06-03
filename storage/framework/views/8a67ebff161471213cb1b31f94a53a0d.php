
<?php $__env->startSection('title', trans('Dashboard/Lifting/mpi.viewTitle')); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .right {
            text-align = right;
        }

    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");

        </script>
    <?php endif; ?>
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
                                <h4 class="card-title mb-0"><?php echo e(trans('Dashboard/Lifting/mpi.addmpi')); ?></h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-1 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn"
                                                   href="<?php echo e(route('mpi.reports.create')); ?>"><?php echo e(trans('Dashboard/Lifting/mpi.addmpi')); ?></a>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <?php if (isset($component)) { $__componentOriginal89318b5c3472012ae3852288c0a1a718 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal89318b5c3472012ae3852288c0a1a718 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.layouts.deleteAll','data' => ['route' => 'mpi.reports.deleteAll']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.deleteAll'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => 'mpi.reports.deleteAll']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal89318b5c3472012ae3852288c0a1a718)): ?>
<?php $attributes = $__attributesOriginal89318b5c3472012ae3852288c0a1a718; ?>
<?php unset($__attributesOriginal89318b5c3472012ae3852288c0a1a718); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal89318b5c3472012ae3852288c0a1a718)): ?>
<?php $component = $__componentOriginal89318b5c3472012ae3852288c0a1a718; ?>
<?php unset($__componentOriginal89318b5c3472012ae3852288c0a1a718); ?>
<?php endif; ?>
                                        </div>
                                        <div class="col-sm-auto">
                                            <?php if (isset($component)) { $__componentOriginal39c68e6705c2326093548ba156608c05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39c68e6705c2326093548ba156608c05 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard.layouts.downloadAll','data' => ['route' => 'mpi.reports.downloadAll']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dashboard.layouts.downloadAll'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['route' => 'mpi.reports.downloadAll']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39c68e6705c2326093548ba156608c05)): ?>
<?php $attributes = $__attributesOriginal39c68e6705c2326093548ba156608c05; ?>
<?php unset($__attributesOriginal39c68e6705c2326093548ba156608c05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39c68e6705c2326093548ba156608c05)): ?>
<?php $component = $__componentOriginal39c68e6705c2326093548ba156608c05; ?>
<?php unset($__componentOriginal39c68e6705c2326093548ba156608c05); ?>
<?php endif; ?>
                                        </div>

                                        <div class="col-sm right">
                                            <div class="d-flex justify-content-sm-end">
                                                
                                                <div class="search-box ms-2">
                                                    <?php echo $__env->make('dashboard.pages.lifting.mpi.modal.filter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                                
                                                
                                                <div class="search-box ms-2">
                                                    <form class="tablelist-form" action="<?php echo e(route('mpi.reports.search')); ?>"
                                                          method="POST" enctype="multipart/form-data" id="submitForm">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="input-group">
                                                            <input name="search" type="search" class="form-control"
                                                                   placeholder="SearchBy serial or RepNum"
                                                                   aria-label="by serial or RepNum"
                                                                   aria-describedby="basic-addon2">
                                                            <button class="input-group-text btn btn-primary"><i
                                                                    class=" bx bx-search"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
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
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0">
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
                                        <?php $__currentLoopData = $mpis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                                <?php if( $item->acceptance == 1): ?>
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
                                                            <?php if(auth()->user()->id == $item->user_id): ?>
                                                            <li><a class="dropdown-item edit-item-btn"
                                                                   target="_blank"
                                                                   href="<?php echo e(route('mpi.reports.edit', $item->id)); ?>"><i
                                                                        class=" ph-pencil align-middle me-1"></i>
                                                                    Edit</a></li>
                                                            <li><a class="dropdown-item remove-item-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#delete<?php echo e($item->id); ?>"><i
                                                                        class="ph-trash align-middle me-1"></i>
                                                                    Remove</a></li>
                                                            <?php endif; ?>
                                                            <li><a class="dropdown-item download-item-btn"
                                                                   target="_blank"
                                                                   href="<?php echo e(route('mpi.reports.download',$item->id)); ?>"><i
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
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    
                </div>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-end">
                <?php echo e($mpis->links('pagination::bootstrap-5')); ?>

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
    </div>
    <!-- END layout-wrapper -->
    </div><!-- end preloader-menu -->
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
    <script src="<?php echo e(asset('dashboard/pages/lifting/mpi/js/script.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/mpi/view.blade.php ENDPATH**/ ?>
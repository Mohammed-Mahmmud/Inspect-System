
<?php $__env->startSection('title', trans('Dashboard/orders.title')); ?>
<?php $__env->startSection('css'); ?>
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
                            <h4 class="mb-sm-0"><?php echo e(trans('Dashboard/orders.orders')); ?></h4>

                            <div class="page-title-orderht">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a
                                            href="javascript: void(0);"><?php echo e(trans('Dashboard/orders.orders')); ?></a></li>
                                    <li class="breadcrumb-item active"><?php echo e(trans('Dashboard/orders.vieworders')); ?></li>
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
                                <h4 class="card-title mb-0"><?php echo e(trans('Dashboard/orders.addorders')); ?></h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn" href="<?php echo e(route('order.create')); ?>"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#showModal"><?php echo e(trans('Dashboard/orders.addorder')); ?></a>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <input type="text" class="form-control search"
                                                        placeholder="Search...">
                                                    <i class="ri-search-line search-icon"></i>
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
                                                    <th class="sort" data-sort="customer_id">#</th>
                                                    <th class="sort" data-sort="customer_number">
                                                        <?php echo e(trans('Dashboard/orders.number')); ?></th>
                                                    <th class="sort" data-sort="customer_company">
                                                        <?php echo e(trans('Dashboard/orders.company')); ?></th>
                                                    <th class="sort" data-sort="customer_rig_id">
                                                        <?php echo e(trans('Dashboard/orders.rig')); ?></th>
                                                    <th class="sort" data-sort="action">
                                                        <?php echo e(trans('Dashboard/orders.create_date')); ?></th>
                                                    <th class="sort" data-sort="action">
                                                        <?php echo e(trans('Dashboard/orders.action')); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                
                                                <?php
                                                    $i = 1;
                                                ?>
                                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="id"><?php echo e($i++); ?></td>
                                                        <td class="customer_number"><?php echo e($item->number); ?></td>
                                                        <td class="customer_company"><?php echo e($item->companies->name); ?></td>
                                                        <td class="customer_rig"><?php echo e($item->rigs->name); ?></td>
                                                        <td class="date"><?php echo e($item->date); ?></td>
                                                        
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a class="btn btn-sm btn-info edit-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#edit<?php echo e($item->id); ?>">
                                                                        <i class="fas fa-edit"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="remove">
                                                                    <a class="btn btn-sm btn-danger remove-item-btn"
                                                                        href="" data-bs-toggle="modal"
                                                                        data-bs-target="#delete<?php echo e($item->id); ?>">
                                                                        <i class="fas fa-trash"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- Modal -->
                                                            <form action="<?php echo e(route('order.destroy', $item)); ?>"
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
                                                                            <div class="modal-header" S>
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLongTitle"
                                                                                    style="word-wrap: break-word; overflow-wrap: break-word;">
                                                                                    <?php echo e(trans('Dashboard/orders.remove')); ?>

                                                                                    <?php echo e($item->name); ?></h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    id="close-modal"></button>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php echo e(trans('Dashboard/orders.delete_message')); ?>

                                                                                <br>
                                                                                <?php echo e($item->name); ?>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-info"
                                                                                        data-bs-dismiss="modal"><?php echo e(trans('Dashboard/orders.close')); ?></button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-danger"
                                                                                        id="add-btn"><?php echo e(trans('Dashboard/orders.delete_order')); ?></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            </form>
                                                        </td>
                                                        
                                                    </tr>
                                                    
                                                    <form class="tablelist-form"
                                                        action="<?php echo e(route('order.update', $item)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="modal fade" id="edit<?php echo e($item->id); ?>"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel2"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-light p-3">
                                                                        <h5 class="modal-title" id="exampleModalLabel2">
                                                                            <?php echo e(trans('Dashboard/orders.edit') . ' ' . $item->name); ?>

                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal" aria-label="Close"
                                                                            id="close-modal"></button>
                                                                    </div>
                                                                    <form class="tablelist-form" action=""
                                                                        method="">
                                                                        <div class="modal-body">
                                                                            <div class="mb-3">
                                                                                <br>
                                                                                <div class="row">

                                                                                    <?php if (isset($component)) { $__componentOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4e3162c543f7a3dc0b6b355db30f1a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input_label','data' => ['class' => 'col-12','placeholder' => 'Enter Report Date','value' => ''.e($item->date ?? '').'','label' => 'Report Date :','type' => 'date','name' => 'date','id' => 'date','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','placeholder' => 'Enter Report Date','value' => ''.e($item->date ?? '').'','label' => 'Report Date :','type' => 'date','name' => 'date','id' => 'date','required' => true]); ?>
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
                                                                                <br>
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <label for="customername-field"
                                                                                            class="form-label"><?php echo e(trans('Dashboard/orders.company')); ?></label>
                                                                                        <select
                                                                                            class="form-control <?php $__errorArgs = ['company_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                                            id="company_id"
                                                                                            name="company_id">
                                                                                            
                                                                                            <option
                                                                                                value="<?php echo e(optional($item->companies)->id); ?>"
                                                                                                selected disabled>
                                                                                                <?php echo e($item->companies->name); ?>

                                                                                            </option>
                                                                                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option
                                                                                                    value="<?php echo e($company->id); ?>"
                                                                                                    <?php echo e($company->id == $item->companies->id ? 'selected' : ''); ?>>
                                                                                                    <?php echo e($company->name); ?>

                                                                                                </option>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                        <span
                                                                                            class="form-text text-muted"><?php echo e(trans('Dashboard/orders.orderCompany')); ?></span>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <label for="customername-field"
                                                                                            class="form-label"><?php echo e(trans('Dashboard/orders.rig')); ?></label>
                                                                                        <select
                                                                                            class="form-control <?php $__errorArgs = ['rig_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                                            id="updated_rig_id"
                                                                                            name="rig_id">
                                                                                            <option value="" selected
                                                                                                disabled>
                                                                                                <?php echo e(optional($item->rigs)->name); ?>

                                                                                            </option>
                                                                                            <?php $__currentLoopData = $rigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option
                                                                                                    value="<?php echo e($rig->id); ?>"
                                                                                                    <?php echo e($rig->id == optional($item->rigs)->id ? 'selected' : ''); ?>>
                                                                                                    <?php echo e($rig->Companies->name . ' ' . $rig->name); ?>

                                                                                                </option>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        </select>
                                                                                        <span
                                                                                            class="form-text text-muted"><?php echo e(trans('Dashboard/orders.orderRig')); ?></span>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                        class="btn btn-danger"
                                                                                        data-bs-dismiss="modal"><?php echo e(trans('Dashboard/orders.close')); ?></button>

                                                                                    <button type="submit"
                                                                                        class="btn btn-info"
                                                                                        id="add-btn"><?php echo e(trans('Dashboard/orders.update_order')); ?></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                    </form>
                                                    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <?php echo e($orders->links('pagination::bootstrap-5')); ?>

                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                
                <form class="tablelist-form" action="<?php echo e(route('order.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <?php echo e(trans('Dashboard/orders.create_new_order')); ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="tablelist-form">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="date"
                                                        class="form-label"><?php echo e(trans('Dashboard/orders.date')); ?></label>
                                                    <input type="date" id="date" name="date"
                                                        class="form-control"
                                                        placeholder="<?php echo e(trans('Dashboard/orders.placeholderDate')); ?>"
                                                        required>
                                                    <span
                                                        class="form-text text-muted"><?php echo e(trans('Dashboard/orders.orderDate')); ?>

                                                    </span>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label for="company_id"
                                                        class="form-label"><?php echo e(trans('Dashboard/orders.company')); ?></label>
                                                    <select class="form-control <?php $__errorArgs = ['company_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="company_id" name="company_id">
                                                        <option value="" selected disabled>Choose Company</option>
                                                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($company->id); ?>"><?php echo e($company->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span
                                                        class="form-text text-muted"><?php echo e(trans('Dashboard/orders.orderCompany')); ?></span>
                                                </div>
                                                <div class="col-6">
                                                    <label for="rig_id"
                                                        class="form-label"><?php echo e(trans('Dashboard/orders.rig')); ?></label>
                                                    <select class="form-control <?php $__errorArgs = ['rig_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        id="rig_id" name="rig_id">
                                                        <option value="" selected disabled>Choose Rig</option>
                                                        <?php $__currentLoopData = $rigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($rig->id); ?>">
                                                                <?php echo e($rig->Companies->name . ' ' . $rig->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <span
                                                        class="form-text text-muted"><?php echo e(trans('Dashboard/orders.orderRig')); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal"><?php echo e(trans('Dashboard/orders.close')); ?></button>

                                            <button type="submit" class="btn btn-success"
                                                id="add-btn"><?php echo e(trans('Dashboard/orders.create_order')); ?></button>

                                        </form>
                                    </div>
                            </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <i class="bi bi-trash3 display-5 text-danger"></i>
                        <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this JObTicket order ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                            data-bs-dismiss="modal"><?php echo e(trans('Dashboard/orders.close')); ?></button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->

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
    <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/prismjs/prism.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/list.js/list.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- listjs init -->
    <script src="<?php echo e(asset('dashboard')); ?>/assets/js/pages/listjs.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo e(asset('dashboard')); ?>/assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo e(asset('dashboard/pages/orders/js/script.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/orders/view.blade.php ENDPATH**/ ?>
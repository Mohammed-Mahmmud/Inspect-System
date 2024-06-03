
<?php $__env->startSection('title',trans('Dashboard/company.title')); ?>
<?php $__env->startSection('css'); ?>
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
<?php $component->withAttributes(['title1' => ''.e(trans('Dashboard/company.companies')).'','title2' => ''.e(trans('Dashboard/company.companies')).'','route' => ''.e(route('company.index')).'','title3' => ''.e(trans('Dashboard/company.viewcompanies')).'']); ?>
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
                                <h4 class="card-title mb-0"><?php echo e(trans('Dashboard/company.addcompanies')); ?></h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <a class="btn btn-success add-btn" href="<?php echo e(route('company.create')); ?>"
                                                   data-bs-toggle="modal"
                                                   data-bs-target="#showModal"><?php echo e(trans('Dashboard/company.addcompany')); ?></a>
                                                
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
                                                <th scope="col" style="width: 50px;">
                                                    <div class="form-check">
                                                        

                                                        
                                                    </div>
                                                </th>
                                                <th class="sort" data-sort="customer_id">#</th>
                                                <th class="sort"
                                                    data-sort="customer_name"><?php echo e(trans('Dashboard/company.name')); ?></th>
                                                
                                                <th class="sort"
                                                    data-sort="customer_email"><?php echo e(trans('Dashboard/company.email')); ?></th>
                                                <th class="sort"
                                                    data-sort="customer_password"><?php echo e(trans('Dashboard/company.password')); ?></th>
                                                
                                                <th class="sort"
                                                    data-sort="action"><?php echo e(trans('Dashboard/company.action')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                            
                                            <?php
                                                // $lan_company = App::getLocale()."_company";
                                                $i = 1 ;
                                            ?>
                                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            

                                                            
                                                        </div>
                                                    </th>
                                                    <td class="id"><?php echo e($i++); ?></td>
                                                    <td class="customer_name"><?php echo e($item->name); ?></td>
                                                    
                                                    <td class="email"><?php echo e($item->email); ?></td>
                                                    <td class="customer_password"><?php echo e($item->password); ?></td>
                                                    
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <div class="edit">
                                                                <a class="btn btn-sm btn-info edit-item-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#edit<?php echo e($item->id); ?>">
                                                                    <i class="bx bxs-edit-alt"></i>
                                                                </a>
                                                            </div>

                                                            <div class="remove">
                                                                <a class="btn btn-sm btn-danger remove-item-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#delete<?php echo e($item->id); ?>">
                                                                    <i class="ph-trash"></i>
                                                                </a>
                                                            </div>
                                                            <!-- Modal -->
                                                            <form action="<?php echo e(route('company.destroy', $item)); ?>"
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
                                                                                    id="exampleModalLongTitle"><?php echo e(trans('Dashboard/company.remove')); ?> <?php echo e($item->name); ?></h5>
                                                                                <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                        id=""></button>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <?php echo e(trans('Dashboard/company.delete_message')); ?>

                                                                                <br><?php echo e($item->name); ?>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <div
                                                                                    class="hstack gap-2 justify-content-end">
                                                                                    <button type="button"
                                                                                            class="btn btn-info"
                                                                                            data-bs-dismiss="modal"><?php echo e(trans('Dashboard/company.close')); ?></button>

                                                                                    <button type="submit"
                                                                                            class="btn btn-danger"
                                                                                            id="add-btn"><?php echo e(trans('Dashboard/company.delete_company')); ?></button>
                                                            </form>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        
                    </div>
                    </td>
                    </tr>
                    
                    <form class="tablelist-form" action="<?php echo e(route('company.update',$item)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal fade" id="edit<?php echo e($item->id); ?>" tabindex="-1"
                             aria-labelledby="exampleModalLabel2" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light p-3">
                                        <h5 class="modal-title"
                                            id="exampleModalLabel2"><?php echo e(trans('Dashboard/company.edit').' '.$item->name); ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close" id=""></button>
                                    </div>
                                    <form class="tablelist-form" action="" method="">
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="name"
                                                               class="form-label"><?php echo e(trans('Dashboard/company.name')); ?></label>
                                                        <input type="text" id="name" name="name" class="form-control"
                                                               placeholder="<?php echo e(trans('Dashboard/company.placeholderName')); ?>"
                                                               value="<?php echo e($item->name); ?>" required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="full_name"
                                                               class="form-label"><?php echo e(trans('Dashboard/company.full_name')); ?></label>
                                                        <input type="text" id="full_name" name="full_name"
                                                               class="form-control"
                                                               placeholder=" <?php echo e(trans('Dashboard/company.placeholderFullName')); ?>"
                                                               value="<?php echo e($item->full_name); ?>" required="">
                                                    </div>

                                                    <div class="col-6">
                                                        <label for="email"
                                                               class="form-label"><?php echo e(trans('Dashboard/company.email')); ?></label>
                                                        <input type="text" name="email" class="form-control"
                                                               placeholder="<?php echo e(trans('Dashboard/company.placeholderEmail')); ?>"
                                                               value="<?php echo e($item->email); ?>" required="">
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="password"
                                                               class="form-label"><?php echo e(trans('Dashboard/company.password')); ?></label>
                                                        <input type="password" name="password" class="form-control"
                                                               placeholder=" <?php echo e(trans('Dashboard/company.placeholderPassword')); ?>"
                                                               value="<?php echo e($item->password); ?>" required="">
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="location"
                                                               class="form-label"><?php echo e(trans('Dashboard/company.location')); ?></label>
                                                        <input type="location" name="location" class="form-control"
                                                               placeholder=" <?php echo e(trans('Dashboard/company.location')); ?>"
                                                               value="<?php echo e($item->location); ?>" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal"><?php echo e(trans('Dashboard/company.close')); ?></button>

                                                    <button type="submit" class="btn btn-info"
                                                            id="add-btn"><?php echo e(trans('Dashboard/company.update_company')); ?></button>
                                    </form>
                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                </div>
                            </div>
                    </form>
                    

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-end">
                    <?php echo e($companies->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
        </div><!-- end card -->
    </div>
    <!-- end col -->
    </div>
    <!-- end col -->
    </div>
    <!-- end row -->

    
    <form class="tablelist-form" action="<?php echo e(route('company.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title"
                            id="exampleModalLabel"><?php echo e(trans('Dashboard/company.create_new_company')); ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id=""></button>
                    </div>
                    <form class="tablelist-form" action="" method="">
                        <div class="modal-body">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="name"
                                               class="form-label"><?php echo e(trans('Dashboard/company.name')); ?></label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="<?php echo e(trans('Dashboard/company.placeholderName')); ?>" required>
                                    </div>
                                    <div class="col-6">
                                        <label for="full_name"
                                               class="form-label"><?php echo e(trans('Dashboard/company.full_name')); ?></label>
                                        <input type="text" name="full_name" class="form-control"
                                               placeholder="<?php echo e(trans('Dashboard/company.placeholderFullName')); ?>"
                                               required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="location"
                                               class="form-label"><?php echo e(trans('Dashboard/company.location')); ?></label>
                                        <input type="location" name="location" class="form-control"
                                               placeholder=" <?php echo e(trans('Dashboard/company.location')); ?>" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal"><?php echo e(trans('Dashboard/company.close')); ?></button>

                                <button type="submit" class="btn btn-success"
                                        id="add-btn"><?php echo e(trans("Dashboard/company.create_company")); ?></button>
                    </form>
                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
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
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this company ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-info"
                                data-bs-dismiss="modal"><?php echo e(trans('Dashboard/company.close')); ?></button>
                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php if(Session::has('message')): ?>
        <script>
            toastr.success("<?php echo e(Session::get('message')); ?>");
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/companies/view.blade.php ENDPATH**/ ?>
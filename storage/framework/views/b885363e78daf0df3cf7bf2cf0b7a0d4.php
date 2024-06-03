<div class="d-flex flex-wrap gap-2">
    <button class="btn btn-warning" type="button" id="filterButton" data-bs-toggle="offcanvas" data-bs-target="#searchTopModal" aria-controls="searchTopModal">
        <i class="bx bxs-filter-alt"></i>
    </button>
</div>

<!-- top offcanvas -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="searchTopModal" aria-labelledby="searchTopModalLabel">
    <div class="offcanvas-header">
        <h5 id="searchTopModalLabel">Filter Using</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="tablelist-form" action="<?php echo e(route('mpi.reports.filter')); ?>" method="POST" enctype="multipart/form-data" id="submitForm">
            <?php echo csrf_field(); ?>
            <div class="row align-items-center">
                <div class="col-sm">
                    <?php if (isset($component)) { $__componentOriginalda007bd9ac2faaa013619214ac23c7b9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda007bd9ac2faaa013619214ac23c7b9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.dropdown','data' => ['class' => 'col-12','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => $orders]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','name' => 'order_id','id' => 'order_id','disabledOption' => 'Choose Order','data' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders)]); ?>
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
                </div>
                <div class="col-sm">
                    <input type="search" name="serial" class="col-12 form-control" placeholder="Enter Serial Number">
                </div>
                <div class="col-sm">
                    <!-- Add a submit button -->
                    <button type="submit" class="btn btn-success">Go <i class="bx bx-search-alt"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/dashboard/pages/lifting/mpi/modal/filter.blade.php ENDPATH**/ ?>
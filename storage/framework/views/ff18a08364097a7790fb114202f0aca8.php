       <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
       'route',
       ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
       'route',
       ]); ?>
<?php foreach (array_filter(([
       'route',
       ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

       <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=".deleteAllModal"><i class="bx bxs-trash-alt" title="Delete"></i></button>
       <div class="modal fade deleteAllModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                   <form class="" action="<?php echo e(route($route)); ?>" method="POST" enctype="multipart/form-data">
                       <?php echo csrf_field(); ?>
                       <input class="checkedData" type='hidden' name="data[]">
                       <div class="modal-body text-center p-5">
                           <i class="bi bi-exclamation-triangle text-danger display-5"></i>
                           <div class="mt-4">
                               <h3 class="mb-3">Are You Sure!</h3>
                               <h6 class="text-muted mb-4">Do You Want To Remove Selected Items?</h6>
                               <div class="hstack gap-2 justify-content-center">
                                   <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                   <button type="submit" class="btn btn-danger">Delete</button>
                                   
                               </div>
                           </div>
                       </div>
                   </form>
               </div><!-- /.modal-content -->
           </div><!-- /.modal-dialog -->
       </div><!-- /.modal -->
       <script src="<?php echo e(asset('dashboard/layouts/components/deleteAll/js/script.js')); ?>"></script><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/layouts/deleteAll.blade.php ENDPATH**/ ?>
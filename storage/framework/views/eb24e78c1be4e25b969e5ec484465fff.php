<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'class'=>false,
'label',
'value'=>false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'class'=>false,
'label',
'value'=>false,
]); ?>
<?php foreach (array_filter(([
'class'=>false,
'label',
'value'=>false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="<?php echo e($class." "); ?>form-label">
    <button type="button" class="form-control" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo e(ucwords($label)); ?>

    </button>
    <div class="dropdown-menu dropdown-menu-md p-2">
        <div class="row g-3">
            <div class="accordion-body">
                <div class="d-flex flex-column gap-2 ext-filter-check" id="discount-filter">
                    <input type="text" value="<?php echo e($value); ?>" name="<?php echo e($name); ?>"  class="form-control extInput" placeholder="Add Extension" id="extInput"/>
                  <select class="form-control extSelect" name="<?php echo e($name); ?>">
                    <option disabled selected id="disabledOption">Choose Extension</option>
                    <?php $__currentLoopData = $extensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ext): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($ext['key']); ?>" id="selectedOption"><?php echo e(($ext['key']=="ok")? $ext['value'] : $ext['key']." = ".$ext['value']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="<?php echo e(asset('dashboard/assets/js/extensions/jquery-3.7.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/layouts/components/tools/extensions/js/script.js')); ?>"></script>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/tools/extensions.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'class'=>false,
'label'=>false,
'name',
'span'=>false,
'value'=>false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'class'=>false,
'label'=>false,
'name',
'span'=>false,
'value'=>false,
]); ?>
<?php foreach (array_filter(([
'class'=>false,
'label'=>false,
'name',
'span'=>false,
'value'=>false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($class ?? ''); ?>">
    <label for="metods" class="form-label"><?php echo e(ucfirst($label) ?? ''); ?></label>
    <select name="<?php echo e($name); ?>[]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true" id="methods">
        <?php $__currentLoopData = $inspMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item); ?>" <?php echo e(is_array(getDeCode(htmlspecialchars_decode($value))) && in_array($item , getDeCode((htmlspecialchars_decode($value)))) ? 'selected' : ""); ?>> <?php echo e(ucfirst($item)); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    
</div>

<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/tools/methods.blade.php ENDPATH**/ ?>
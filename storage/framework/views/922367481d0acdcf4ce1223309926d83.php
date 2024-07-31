<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'value' => false, // Default value for the checkbox when checked
    'id' => false,
    'name' => false,
    'class' => false,
    'style' => false,
    'placeholder' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'value' => false, // Default value for the checkbox when checked
    'id' => false,
    'name' => false,
    'class' => false,
    'style' => false,
    'placeholder' => false,
]); ?>
<?php foreach (array_filter(([
    'value' => false, // Default value for the checkbox when checked
    'id' => false,
    'name' => false,
    'class' => false,
    'style' => false,
    'placeholder' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<input type="hidden" name="<?php echo e($name); ?>" value="0" style='<?php echo e($style ?? ''); ?>'>

<input class="<?php echo e($class ?? ''); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>" type="checkbox" name="<?php echo e($name); ?>"
    id="<?php echo e($id); ?>" value="<?php echo e($value === null ? 0 : 1); ?>" style='<?php echo e($style ?? ''); ?>'
    <?php echo e($value == 1 ? 'checked' : ''); ?>>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/default/checkbox.blade.php ENDPATH**/ ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'value' => false,
    'id' => false,
    'name' => false,
    'class' => false,
    'type',
    'style' => false,
    'placeholder' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'value' => false,
    'id' => false,
    'name' => false,
    'class' => false,
    'type',
    'style' => false,
    'placeholder' => false,
]); ?>
<?php foreach (array_filter(([
    'value' => false,
    'id' => false,
    'name' => false,
    'class' => false,
    'type',
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

<input class="<?php echo e($class ?? ''); ?>" placeholder="<?php echo e($placeholder ?? ''); ?>" type="<?php echo e($type); ?>"
    name="<?php echo e($name); ?>" id="<?php echo e($id); ?>" value="<?php echo e($value ?? ''); ?>" style='<?php echo e($style); ?>'>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/default/input.blade.php ENDPATH**/ ?>
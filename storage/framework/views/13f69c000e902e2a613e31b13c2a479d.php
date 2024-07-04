<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'for'=>false,
    'value',
    'style'=>false,
    'class'=>false,
    ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'for'=>false,
    'value',
    'style'=>false,
    'class'=>false,
    ]); ?>
<?php foreach (array_filter(([
    'for'=>false,
    'value',
    'style'=>false,
    'class'=>false,
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<label class="<?php echo e($class ?? ''); ?>" for="<?php echo e($for); ?>" style='<?php echo e($style ?? ""); ?>'>
    <?php echo e($value); ?>

</label>

<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/default/input-label.blade.php ENDPATH**/ ?>
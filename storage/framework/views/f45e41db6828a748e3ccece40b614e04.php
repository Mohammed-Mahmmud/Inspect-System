<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'value',
'id' ,
'name',
'label',
'class'=>false,
'style'=>false,
'val' =>false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'value',
'id' ,
'name',
'label',
'class'=>false,
'style'=>false,
'val' =>false,
]); ?>
<?php foreach (array_filter(([
'value',
'id' ,
'name',
'label',
'class'=>false,
'style'=>false,
'val' =>false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="<?php echo e($class ?? 'col-12'); ?>" style='<?php echo e($style ?? ""); ?>'>
<input type="radio" id="<?php echo e($id); ?>"   name="<?php echo e($name); ?>" value="<?php echo e($value); ?>" 
<?php if($val==$value): ?>
checked
<?php endif; ?>
>
<label for="<?php echo e($id); ?>"><?php echo e($label); ?></label><br>
</div><?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/form/radio-btn.blade.php ENDPATH**/ ?>
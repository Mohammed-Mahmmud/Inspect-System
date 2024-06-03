<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'value' =>false,
'id' =>false ,
'type' =>false ,
'name' =>false ,
'label'=>false ,
'required' => false,
'placeholder'=>false,
'span' ,
'class' =>false,
'multiple' =>false,
'readonly' =>false,
'disabled' =>false,

]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'value' =>false,
'id' =>false ,
'type' =>false ,
'name' =>false ,
'label'=>false ,
'required' => false,
'placeholder'=>false,
'span' ,
'class' =>false,
'multiple' =>false,
'readonly' =>false,
'disabled' =>false,

]); ?>
<?php foreach (array_filter(([
'value' =>false,
'id' =>false ,
'type' =>false ,
'name' =>false ,
'label'=>false ,
'required' => false,
'placeholder'=>false,
'span' ,
'class' =>false,
'multiple' =>false,
'readonly' =>false,
'disabled' =>false,

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<style>
    input:required:invalid {
        border-color: red;
    }

</style>

<div class="<?php echo e($class ?? 'col-12'); ?>" style="text-transform: capitalize;">
    <label for="<?php echo e($id ?? ''); ?>" class="form-label"><?php echo e($label ?? ""); ?></label>
    <input type="<?php echo e($type); ?>" class="form-control" placeholder="<?php echo e($placeholder ?? ""); ?>" id="<?php echo e($id ?? ''); ?>" name="<?php echo e($name); ?>" <?php if($value): ?> value="<?php echo e($value); ?>" <?php endif; ?> <?php if($required): ?> required <?php endif; ?> <?php if($readonly): ?> readonly <?php endif; ?> <?php if($disabled): ?> disabled <?php endif; ?>>
    <span class="form-text text-muted">Please <?php echo e($span ?? $placeholder); ?> </span>
    <br><br>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/form/input_label.blade.php ENDPATH**/ ?>
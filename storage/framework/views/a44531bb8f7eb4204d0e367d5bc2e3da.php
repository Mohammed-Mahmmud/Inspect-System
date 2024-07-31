<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
   'value' =>false,
    'id'   =>false ,
    'type' =>false ,
    'name' =>false ,
    'label'=>false ,
    'required' => false,
    'placeholder'=>false,
    'span'       =>false,
    'class'      =>false,
    'multiple' =>false,
    'style'=>false

]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
   'value' =>false,
    'id'   =>false ,
    'type' =>false ,
    'name' =>false ,
    'label'=>false ,
    'required' => false,
    'placeholder'=>false,
    'span'       =>false,
    'class'      =>false,
    'multiple' =>false,
    'style'=>false

]); ?>
<?php foreach (array_filter(([
   'value' =>false,
    'id'   =>false ,
    'type' =>false ,
    'name' =>false ,
    'label'=>false ,
    'required' => false,
    'placeholder'=>false,
    'span'       =>false,
    'class'      =>false,
    'multiple' =>false,
    'style'=>false

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="form-check form-switch <?php echo e($class ?? "col-12"); ?>">
    <div style="<?php echo e($style); ?>" >
        <input class="form-check-input <?php echo e($class); ?>" type="hidden" name="<?php echo e($name); ?>" value="0">
        <input class="form-check-input  <?php echo e($class); ?>" type="checkbox" role="switch" id="<?php echo e($id); ?>" name="<?php echo e($name); ?>"
               value="1" <?php echo e(old($name, $value) == 1 ? 'checked' : ''); ?> <?php if($required): ?> required <?php endif; ?>>

        <label class="form-check-label" for="<?php echo e($id); ?>"><?php echo e($label); ?></label>
        <?php if($span): ?>
        <span><?php echo e($span); ?></span>
        <?php endif; ?>

    </div>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/form/switches.blade.php ENDPATH**/ ?>
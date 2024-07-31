<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
'name',
'formName',
'title'=>false,
'label' =>false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
'name',
'formName',
'title'=>false,
'label' =>false,
]); ?>
<?php foreach (array_filter(([
'name',
'formName',
'title'=>false,
'label' =>false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<link href="<?php echo e(asset('dashboard/assets/multiImages/src/css/main.css')); ?>" rel="stylesheet" type="text/css">
<div class="multiple-uploader" id="multiple-uploader">
<input type="hidden" name="<?php echo e($name); ?>" id="upload">
<input type="hidden" name="#<?php echo e($formName); ?>" id="form">
    <div class="mup-msg">
        <span class="mup-main-msg"><?php echo e($title); ?></span>
        <span class="mup-msg"><?php echo e($label); ?></span>
    </div>
</div>
<script src="<?php echo e(asset('dashboard/assets/multiImages/src/js/multiple-uploader.js')); ?>"></script>
<script src="<?php echo e(asset('dashboard/assets/multiImages/src/js/util.js')); ?>"></script>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/form/multi-images.blade.php ENDPATH**/ ?>
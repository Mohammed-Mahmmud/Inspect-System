<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'value' => false,
    'id' => false,
    'disabledOption' => false,
    'name' => false,
    'selectedData' => false,
    'data' => false,
    'class' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'value' => false,
    'id' => false,
    'disabledOption' => false,
    'name' => false,
    'selectedData' => false,
    'data' => false,
    'class' => false,
]); ?>
<?php foreach (array_filter(([
    'value' => false,
    'id' => false,
    'disabledOption' => false,
    'name' => false,
    'selectedData' => false,
    'data' => false,
    'class' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<select class="<?php echo e($class); ?><?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($id); ?>" name="<?php echo e($name); ?>">
    <option value="" selected disabled><?php echo e($disabledOption); ?></option>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item->id); ?>"
            <?php if(isset($selectedData)): ?> <?php echo e($item->id == $selectedData ? 'selected' : ''); ?> <?php endif; ?>>
            <?php echo e($item->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/default/dropdown.blade.php ENDPATH**/ ?>
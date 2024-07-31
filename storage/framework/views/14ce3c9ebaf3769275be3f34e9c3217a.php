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
    'rows'      =>false,    

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
    'rows'      =>false,    

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
    'rows'      =>false,    

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($class ?? 'col-12'); ?>" style="text-transform: capitalize;">
    <label for="exampleFormControlTextarea5" class="form-label"><?php echo e($label ?? ""); ?></label>
    <textarea  class="form-control" placeholder="<?php echo e($placeholder ?? ''); ?>"  style="white-space: pre-line;" 
         id="exampleFormControlTextarea5" name="<?php echo e($name); ?>"  
           rows="<?php echo e($rows ?? 4); ?>"   <?php if($required): ?> required <?php endif; ?> >
          <?php echo e($value ?? ""); ?>

                </textarea>
    <span class="form-text text-muted">Please  
    <?php if(isset($span)): ?>  
    <?php echo e($span); ?>

     <?php elseif(isset($placeholder)): ?>
        <?php echo e($placeholder); ?>

     <?php else: ?>
     <?php echo e($label); ?> 
    <?php endif; ?>
    </span>
    <br><br>
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/form/textarea_label.blade.php ENDPATH**/ ?>
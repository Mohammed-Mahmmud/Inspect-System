 <div class="col-12">
     <!-- Accordions Bordered -->
     <div class="accordion custom-accordionwithicon custom-accordion-border accordion-border-box accordion-yellow" id="accordionBordered">
         <div class="accordion-item">
             <h2 class="accordion-header" id="accordionborderedExample1">
                 <button class="accordion-button" type="button" id="result_btn" data-bs-toggle="collapse" data-bs-target="#accor_borderedExamplecollapse1" aria-expanded="true" aria-controls="accor_borderedExamplecollapse1">
                     Enter Job Result
                 </button>
             </h2>
             <div id="accor_borderedExamplecollapse1" class="accordion-collapse collapse hide" aria-labelledby="accordionborderedExample1" data-bs-parent="#accordionBordered">
                 <div class="accordion-body ">
                 
                     <?php if (isset($component)) { $__componentOriginal1741d654282d946d1524564d69f84501 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1741d654282d946d1524564d69f84501 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.textarea_label','data' => ['class' => 'col-12','span' => 'enter job result','placeholder' => 'Enter job result','value' => ''.e($mpi->result ?? '').'','label' => 'result :','name' => 'result','rows' => '5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea_label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-12','span' => 'enter job result','placeholder' => 'Enter job result','value' => ''.e($mpi->result ?? '').'','label' => 'result :','name' => 'result','rows' => '5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1741d654282d946d1524564d69f84501)): ?>
<?php $attributes = $__attributesOriginal1741d654282d946d1524564d69f84501; ?>
<?php unset($__attributesOriginal1741d654282d946d1524564d69f84501); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1741d654282d946d1524564d69f84501)): ?>
<?php $component = $__componentOriginal1741d654282d946d1524564d69f84501; ?>
<?php unset($__componentOriginal1741d654282d946d1524564d69f84501); ?>
<?php endif; ?>
                 </div>
             </div>
         </div>
     </div>
     <br>
     <br>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/dashboard/pages/lifting/mpi/modal/result.blade.php ENDPATH**/ ?>
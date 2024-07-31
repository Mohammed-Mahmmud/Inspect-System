<div class="col-4">
    <button style="color: black; font-weight:bold;" type="button" class="btn btn-warning btn-label rounded-pill"
            data-bs-toggle="modal" data-bs-target="#uploadMultiImageModal">
        <i class="bi bi-image"></i>
        upload Images
    </button>
</div>
<div class="modal fade" id="uploadMultiImageModal" tabindex="-1" aria-labelledby="uploadMultiImageModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadMultiImageModalLabel">Upload Multiple Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (isset($component)) { $__componentOriginalfd2b17df3f843363eeb220f307f2f6b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd2b17df3f843363eeb220f307f2f6b5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.multi-images','data' => ['name' => 'image','formName' => 'my-form','title' => 'click to upload images.','label' => 'Upload up to 5 images']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.multi-images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'image','formName' => 'my-form','title' => 'click to upload images.','label' => 'Upload up to 5 images']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd2b17df3f843363eeb220f307f2f6b5)): ?>
<?php $attributes = $__attributesOriginalfd2b17df3f843363eeb220f307f2f6b5; ?>
<?php unset($__attributesOriginalfd2b17df3f843363eeb220f307f2f6b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd2b17df3f843363eeb220f307f2f6b5)): ?>
<?php $component = $__componentOriginalfd2b17df3f843363eeb220f307f2f6b5; ?>
<?php unset($__componentOriginalfd2b17df3f843363eeb220f307f2f6b5); ?>
<?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/dashboard/pages/lifting/mpi/modal/upload_images.blade.php ENDPATH**/ ?>
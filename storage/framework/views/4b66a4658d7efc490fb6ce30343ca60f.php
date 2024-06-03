<!-- Grids in modals -->
<div>
    
    <label for="customername-field" class="form-label">Choose Multiple Magnetic Particles</label>
    <select name="magnetic_particles[]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
        <option value="dry" <?php echo e(isset($var->magnetic_particles )&& in_array('dry', $var->getDeCode($var->magnetic_particles)) ? 'selected' : ""); ?>> Dry</option>
        <option value="wet" <?php echo e(isset($var->magnetic_particles )&& in_array('wet', $var->getDeCode($var->magnetic_particles)) ? 'selected' : ""); ?>> Wet </option>
        <option value="visibale" <?php echo e(isset($var->magnetic_particles )&& in_array('visibale', $var->getDeCode($var->magnetic_particles)) ? 'selected' : ""); ?>>Visibale</option>
        <option value="flourescent" <?php echo e(isset($var->magnetic_particles )&& in_array('flourescent', $var->getDeCode($var->magnetic_particles)) ? 'selected' : ""); ?>>Flourescent</option>
    </select>
    
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/magnetic-particles.blade.php ENDPATH**/ ?>
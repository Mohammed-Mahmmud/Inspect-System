<div>
    
    <label for="customername-field" class="form-label">Choose Multiple Surface Condition</label>
    <select name="surface_condition[]" multiple multiselect-search="true" data-placeholder="Choose an Option"
            multiselect-select-all="true">
        <option
            value="Cleaned to Base Metal" <?php echo e(isset($var->surface_condition )&& in_array('Cleaned to Base Metal', $var->getDeCode($var->surface_condition)) ? 'selected' : ""); ?>>
            Cleaned to Base Metal
        </option>
        <option
            value="Not Cleaned to Base Metal" <?php echo e(isset($var->surface_condition )&& in_array('Not Cleaned to Base Metal', $var->getDeCode($var->surface_condition)) ? 'selected' : ""); ?>>
            Not Cleaned to Base Metal
        </option>
    </select>
    
</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/inspection-system/resources/views/components/dashboard/reports/surface-condition.blade.php ENDPATH**/ ?>
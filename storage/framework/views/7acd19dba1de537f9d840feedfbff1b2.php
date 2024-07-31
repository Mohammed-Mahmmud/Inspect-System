<div>
   
   <label for="customername-field" class="form-label">Choose Multiple Magnetizing Current</label>
  <select name="magnetizing_current[]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
  <option value="ac"  <?php echo e(isset($var->magnetizing_current )&& in_array('ac', $var->getDeCode($var->magnetizing_current)) ? 'selected' : ""); ?>> Alternatind(AC)</option>
  <option value="dc"  <?php echo e(isset($var->magnetizing_current )&& in_array('dc', $var->getDeCode($var->magnetizing_current)) ? 'selected' : ""); ?>> Direct (DC) </option>
  </select>

</div>
<?php /**PATH /home/mohamed-khater/Documents/projects/stc/inspection-system/resources/views/components/dashboard/reports/magnetizing-current.blade.php ENDPATH**/ ?>
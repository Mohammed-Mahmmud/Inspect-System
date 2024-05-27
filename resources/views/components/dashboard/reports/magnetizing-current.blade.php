<div>
   {{-- multi select   --}}
   <label for="customername-field" class="form-label">Choose Multiple Magnetizing Current</label>
  <select name="magnetizing_current[]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
  <option value="ac"  {{ isset($var->magnetizing_current )&& in_array('ac', $var->getDeCode($var->magnetizing_current)) ? 'selected' : "" }}> Alternatind(AC)</option>
  <option value="dc"  {{ isset($var->magnetizing_current )&& in_array('dc', $var->getDeCode($var->magnetizing_current)) ? 'selected' : "" }}> Direct (DC) </option>
  </select>
{{-- end of select   --}}
</div>

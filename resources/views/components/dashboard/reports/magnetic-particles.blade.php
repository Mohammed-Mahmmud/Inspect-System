<!-- Grids in modals -->
<div>
    {{-- multi select   --}}
    <label for="customername-field" class="form-label">Choose Multiple Magnetic Particles</label>
    <select name="magnetic_particles[]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
        <option value="dry" {{ isset($var->magnetic_particles )&& in_array('dry', $var->getDeCode($var->magnetic_particles)) ? 'selected' : "" }}> Dry</option>
        <option value="wet" {{ isset($var->magnetic_particles )&& in_array('wet', $var->getDeCode($var->magnetic_particles)) ? 'selected' : "" }}> Wet </option>
        <option value="visibale" {{ isset($var->magnetic_particles )&& in_array('visibale', $var->getDeCode($var->magnetic_particles)) ? 'selected' : "" }}>Visibale</option>
        <option value="flourescent" {{ isset($var->magnetic_particles )&& in_array('flourescent', $var->getDeCode($var->magnetic_particles)) ? 'selected' : "" }}>Flourescent</option>
    </select>
    {{-- end of select   --}}
</div>

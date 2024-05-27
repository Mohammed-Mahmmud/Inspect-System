<div>
    {{-- multi select   --}}
    <label for="customername-field" class="form-label">{{TranslationHelper::translate(ucwords('choose multiple magnetizing'))}} </label>
    <select name="magnetizing[]" multiple multiselect-search="true" data-placeholder="Choose an Option" multiselect-select-all="true">
        @foreach($magnetizing as $item)
        <option value="{{ $item }}" {{ isset($var->magnetizing )&& in_array($item, $var->getDeCode($var->magnetizing)) ? 'selected' : "" }}> {{ucwords(str_replace('_',' ',$item))}}</option>
        @endforeach
    </select>
    {{-- end of select   --}}
</div>

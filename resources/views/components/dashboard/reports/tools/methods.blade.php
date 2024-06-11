@props([
    'class' => false,
    'label' => false,
    'name',
    'span' => false,
    'value' => false,
])

<div class="{{ $class ?? '' }}">
    <label for="metods" class="form-label">{{ ucfirst($label) ?? '' }}</label>
    <select name="{{ $name }}[]" multiple multiselect-search="true" data-placeholder="Choose an Option"
        multiselect-select-all="true" id="methods">
        @foreach ($inspMethods as $item)
            <option value="{{ $item }}"
                {{ is_array(getDeCode(htmlspecialchars_decode($value))) && in_array($item, getDeCode(htmlspecialchars_decode($value))) ? 'selected' : '' }}>
                {{ ucfirst($item) }}</option>
        @endforeach
    </select>
    {{-- <span class="form-text text-muted">{{ $span ?? '' }}</span> --}}
</div>
{{-- <script src="{{ asset('dashboard/assets/multiSelect/js/multiselect.js') }}"></script> --}}

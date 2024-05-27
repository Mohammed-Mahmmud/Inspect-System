@props([
'class'=>false,
'label',
'value'=>false,
])


<div class="{{ $class." " }}form-label">
    <button type="button" class="form-control" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ ucwords($label) }}
    </button>
    <div class="dropdown-menu dropdown-menu-md p-2">
        <div class="row g-3">
            <div class="accordion-body">
                <div class="d-flex flex-column gap-2 ext-filter-check" id="discount-filter">
                    <input type="text" value="{{ $value }}" name="{{ $name }}"  class="form-control extInput" placeholder="Add Extension" id="extInput"/>
                  <select class="form-control extSelect" name="{{ $name }}">
                    <option disabled selected id="disabledOption">Choose Extension</option>
                    @foreach($extensions as $ext)
                    <option value="{{ $ext['key'] }}" id="selectedOption">{{($ext['key']=="ok")? $ext['value'] : $ext['key']." = ".$ext['value'] }}</option>
                    @endforeach
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{ asset('dashboard/assets/js/extensions/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('dashboard/layouts/components/tools/extensions/js/script.js') }}"></script>

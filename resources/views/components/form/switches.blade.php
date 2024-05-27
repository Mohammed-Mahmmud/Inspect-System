@props([
   'value' =>false,
    'id'   =>false ,
    'type' =>false ,
    'name' =>false ,
    'label'=>false ,
    'required' => false,
    'placeholder'=>false,
    'span'       =>false,
    'class'      =>false,
    'multiple' =>false,
    'style'=>false

])

<div class="form-check form-switch {{ $class ?? "col-12" }}">
    <div style="{{$style}}" >
        <input class="form-check-input {{ $class }}" type="hidden" name="{{ $name }}" value="0">
        <input class="form-check-input  {{ $class }}" type="checkbox" role="switch" id="{{ $id }}" name="{{ $name }}"
               value="1" {{ old($name, $value) == 1 ? 'checked' : '' }} @if($required) required @endif>

        <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
        @if($span)
        <span>{{ $span }}</span>
        @endif

    </div>
</div>

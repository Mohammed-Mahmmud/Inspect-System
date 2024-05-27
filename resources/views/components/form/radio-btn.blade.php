@props([
'value',
'id' ,
'name',
'label',
'class'=>false,
'style'=>false,
'val' =>false,
])
<div class="{{ $class ?? 'col-12'}}" style='{{ $style ?? ""}}'>
<input type="radio" id="{{ $id }}"   name="{{ $name }}" value="{{ $value }}" 
@if($val==$value)
checked
@endif
>
<label for="{{$id}}">{{ $label }}</label><br>
</div>
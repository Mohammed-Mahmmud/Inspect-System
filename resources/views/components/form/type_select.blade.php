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
    'type'      =>false,

])
<style>
        textarea:required:invalid {
            border-color: red;
        }
    </style>
<div class="{{ $class ?? 'col-12'}}" style="text-transform: capitalize;">
      <label class="form-label"> Report Type :  </label>
<select  class="form-control" name="{{ $name }}"  {{ $required == "true" ? "required" : "" }} >
  <option selected disabled>{{ $type =='create' ? $label : $value }} </option>
  <option value="index"  {{ $value == 'index' ? 'selected' : '' }}   >Index</option>
  <option value="create" {{ $value == 'create' ? 'selected' : '' }}   >Create</option>
  <option value="store"  {{ $value == 'store' ? 'selected' : '' }}   >Store</option>
  <option value="show"   {{ $value == 'show' ? 'selected' : '' }}   >Show</option>
  <option value="edit" {{ $value == 'edit' ? 'selected' : '' }}   >Edit</option>
  <option value="update" {{ $value == 'update' ? 'selected' : '' }}   >Update</option>
  <option value="delete" {{ $value == 'delete' ? 'selected' : '' }}   >Delete</option>
</select>
    <span class="form-text text-muted">Please  {{ $span ?? $placeholder }} </span>
<br>
</div>

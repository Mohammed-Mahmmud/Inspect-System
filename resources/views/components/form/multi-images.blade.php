@props([
'name',
'formName',
'title'=>false,
'label' =>false,
])
<link href="{{asset('dashboard/assets/multiImages/src/css/main.css')}}" rel="stylesheet" type="text/css">
<div class="multiple-uploader" id="multiple-uploader">
<input type="hidden" name="{{ $name }}" id="upload">
<input type="hidden" name="#{{ $formName }}" id="form">
    <div class="mup-msg">
        <span class="mup-main-msg">{{$title}}</span>
        <span class="mup-msg">{{$label}}</span>
    </div>
</div>
<script src="{{ asset('dashboard/assets/multiImages/src/js/multiple-uploader.js')}}"></script>
<script src="{{ asset('dashboard/assets/multiImages/src/js/util.js')}}"></script>

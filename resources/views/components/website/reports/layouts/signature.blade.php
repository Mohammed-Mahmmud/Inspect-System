@props(['height' => false, 'width' => false])
<div style="padding: 0px">
    @if (!empty($image))
        <img src="{{ $image }}" class="w-100 rounded object-cover" height="{{ $height ?? '50' }}"
            width="{{ $weight ?? '120' }}">
    @endif
</div>

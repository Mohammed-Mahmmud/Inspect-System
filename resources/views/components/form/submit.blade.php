@props(['submit' => false, 'color' => false])
<div class="modal-footer">
    <div class="hstack gap-2 justify-content-end">
        <button type="button" class="btn btn-dark"
            data-bs-dismiss="modal">{{ TranslationHelper::translate('close') }}</button>
        <button type="submit" class="btn btn-{{ $color ? $color : 'success' }} "
            id="add-btn">{{ $submit ? ucwords($submit) : TranslationHelper::translate('save') }}</button>
    </div>
</div>

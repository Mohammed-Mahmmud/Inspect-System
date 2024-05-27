<div id="kt_repeater_1" class="repeater">
<div class="repeater-default" data-repeater-list="content">

        @if($type == 'Edit')
        @foreach ($mudjar->getBody as $index => $body)
        <div class="row g-3" data-repeater-item>
            <x-form.textarea_label class="col-12" span="enter DESCRIPTION" placeholder="Enter DESCRIPTION" value="{{ $body->description ?? '' }}" label="description :" name="body[{{ $index }}][description]" rows='2' />
            <x-form.input_label class="col-3" placeholder="Enter Serial No." label="Serial No." value="{{ $body->serial_no ?? '' }}" type="text" name="body[{{ $index }}][serial_no]" id="serial_no" />
            <x-form.input_label class="col-3" placeholder="Enter Length" label="Length" value="{{ $body->length ?? '' }}" type="text" name="body[{{ $index }}][length]" id="length" />
            <x-form.input_label class="col-3" placeholder="Enter BOX Thread" label="BOX Thread" value="{{ $body->box_thread ?? '' }}" type="text" name="body[{{ $index }}][box_thread]" id="box_thread" />
            <x-form.input_label class="col-3" placeholder="Enter BOX OD" label="BOX OD" value="{{ $body->box_od ?? '' }}" type="text" name="body[{{ $index }}][box_od]" id="box_od" />
            <x-form.input_label class="col-3" placeholder="Enter BOX Cond" label="BOX Cond" value="{{ $body->box_cond ?? '' }}" type="text" name="body[{{ $index }}][box_cond]" id="box_cond" />
            <x-form.input_label class="col-3" placeholder="Enter PIN Conn" label="PIN Conn" value="{{ $body->pin_conn ?? '' }}" type="text" name="body[{{ $index }}][pin_conn]" id="pin_conn" />
            <x-form.input_label class="col-3" placeholder="Enter PIN ID" label="PIN ID" value="{{ $body->pin_id ?? '' }}" type="text" name="body[{{ $index }}][pin_id]" id="pin_id" />
            <x-form.input_label class="col-3" placeholder="Enter PIN Cond" label="PIN code" value="{{ $body->pin_cond ?? '' }}" type="text" name="body[{{ $index }}][pin_cond]" id="pin_cond" />
            @if ($examType == "mud")
            <x-form.input_label class="col-12" placeholder="Enter Body Thread Cond" label="Body Thread Cond" value="{{ $body->body_thread_cond ?? '' }}" type="text" name="body[{{ $index }}][body_thread_cond]" id="body_thread_cond" />
            @endif
            <div class="col-lg-12">
                <div class="hstack gap-2 justify-content-end">
                    <a href="javascript:;" data-repeater-delete="" class="btn btn-md font-weight-bolder btn-outline-danger">
                        <i class="la la-close"></i>delete
                    </a>
                </div>
            </div>
        </div>
        @endforeach

        @elseif( $type == 'Create' )
        <div class="row g-1" data-repeater-item>
            <x-form.textarea_label class="col-12" span="enter DESCRIPTION" placeholder="Enter DESCRIPTION" value="{{ $getBody[0]->description ?? '' }}" label="description :" name="body[0][description]" rows='2' />
            <x-form.input_label class="col-3" placeholder="Enter Serial No." label="Serial No." value="{{ $getBody[0]->serial_no ?? '' }}" type="text" name="body[0][serial_no]" id="serial_no" />
            <x-form.input_label class="col-3" placeholder="Enter Length" label="Length" value="{{ $getBody[0]->length ?? '' }}" type="text" name="body[0][length]" id="length" />
            <x-form.input_label class="col-3" placeholder="Enter BOX Thread" label="BOX Thread" value="{{ $getBody[0]->box_thread ?? '' }}" type="text" name="body[0][box_thread]" id="box_thread" />
            <x-form.input_label class="col-3" placeholder="Enter BOX OD" label="BOX OD" value="{{ $getBody[0]->box_od ?? '' }}" type="text" name="body[0][box_od]" id="box_od" />
            <x-form.input_label class="col-3" placeholder="Enter BOX Cond" label="BOX Cond" value="{{ $getBody[0]->box_cond ?? '' }}" type="text" name="body[0][box_cond]" id="box_cond" />
            <x-form.input_label class="col-3" placeholder="Enter PIN Conn" label="PIN Conn" value="{{ $getBody[0]->pin_conn ?? '' }}" type="text" name="body[0][pin_conn]" id="pin_conn" />
            <x-form.input_label class="col-3" placeholder="Enter PIN ID" label="PIN ID" value="{{ $getBody[0]->pin_id ?? '' }}" type="text" name="body[0][pin_id]" id="pin_id" />
            <x-form.input_label class="col-3" placeholder="Enter PIN Cond" label="PIN code" value="{{ $getBody[0]->pin_cond ?? '' }}" type="text" name="body[0][pin_cond]" id="pin_cond" />
            @if ($examType == "mud")
            <x-form.input_label class="col-12" placeholder="Enter Body Thread Cond" label="Body Thread Cond" value="{{ $getBody[0]->body_thread_cond ?? '' }}" type="text" name="body[0][body_thread_cond]" id="body_thread_cond" />
            @endif

            <hr style="color:red; border: 3px solid red;">
            <div class=" col-lg-12">
            <div class="hstack gap-2 justify-content-end">
                <a href="javascript:;" data-repeater-delete="" class="btn btn-md font-weight-bolder btn-outline-danger">
                    <i class="la la-close"></i>delete
                </a>
            </div>
        </div>
    </div>
    @endif
</div>
<!-- Repeater Add Button -->
<div class="col-lg-6">
    <div class="hstack gap-2 justify-content-end">
        <a href="javascript:;" data-repeater-create="" class="btn btn-md font-weight-bolder btn-outline-dark">
            <i class="la la-plus"></i>Add
        </a>
    </div>
</div>
</div>



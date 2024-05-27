<div id="kt_repeater_1" class="repeater">
    <div class="repeater-default" data-repeater-list="desc">
        @if($type == 'Edit')
        @foreach ($tools->getDesc as $index => $body)
        <div class="row g-3" data-repeater-item>
            <x-form.input_label class="col-3" placeholder="Enter Serial No." label="Serial No." value="{{ getDecode($body->description)['serial'] ?? '' }}" type="text" name="body[{{ $index }}][serial]" id="serial" />
            <x-form.input_label class="col-4" placeholder="Enter Description" label="Description" value="{{ getDecode($body->description)['description'] ?? '' }}" type="text" name="body[{{ $index }}][description]" id="desc" />
            <x-form.input_label class="col-3" placeholder="Enter pin conn" label="pin conn" value="{{ getDecode($body->description)['pin_conn'] ?? '' }}" type="text" name="body[{{ $index }}][pin_conn]" id="pin_conn" />
            <x-form.input_label class="col-2" placeholder="Enter box conn" label="box conn" value="{{ getDecode($body->description)['box_conn'] ?? '' }}" type="text" name="body[{{ $index }}][box_conn]" id="box_conn" />

            {{--  <x-form.input_label class="col-2" placeholder="Enter pin cond" label="pin cond"   value="{{ getDecode($body->description)['pin_cond'] ?? '' }}" type="text"  name="body[{{ $index }}][pin_cond]" id="pin_cond" />  --}}
            {{--  <x-form.input_label class="col-2" placeholder="Enter box cond" label="box cond"   value="{{ getDecode($body->description)['box_cond'] ?? '' }}" type="text"  name="body[{{ $index }}][box_cond]" id="box_cond" />  --}}
            {{--  <x-form.input_label class="col-2" placeholder="Enter body cond" label="body cond" value="{{ getDecode($body->description)['body_cond'] ?? '' }}" type="text" name="body[{{ $index }}][body_cond]" id="body_cond" />  --}}

            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][pin_cond]'" value="{{ getDecode($body->description)['pin_cond'] ?? '' }}" class='col-4' label="pin cond" />
            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][box_cond]'" value="{{ getDecode($body->description)['box_cond'] ?? '' }}" class='col-4' label="box cond" />
            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][body_cond]'" value="{{ getDecode($body->description)['body_cond'] ?? '' }}" class='col-4' label="body cond" />


            <x-form.input_label class="col-2" placeholder="Enter pin od" label="pin od" value="{{ getDecode($body->description)['pin_od'] ?? '' }}" type="text" name="body[{{ $index }}][pin_od]" id="pin_od" />
            <x-form.input_label class="col-2" placeholder="Enter pin id" label="pin id" value="{{ getDecode($body->description)['pin_id'] ?? '' }}" type="text" name="body[{{ $index }}][pin_id]" id="pin_id" />
            <x-form.input_label class="col-2" placeholder="Enter pin srg diameter" label="pin diameter" value="{{ getDecode($body->description)['pin_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][pin_diameter]" id="pin_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter pin srg  Diameter" label="pin srg  Diameter" value="{{ getDecode($body->description)['pin_srg'] ?? '' }}" type="text" name="body[{{ $index }}][pin_srg]" id="pin_srg" />
            <x-form.input_label class="col-2" placeholder="Enter pin Width" label="pin Width" value="{{ getDecode($body->description)['pin_length'] ?? '' }}" type="text" name="body[{{ $index }}][pin_length]" id="pin_length" />
            <x-form.input_label class="col-2" placeholder="Enter pin bevel Diameter" label="pin bevel Diameter" value="{{ getDecode($body->description)['pin_bevel'] ?? '' }}" type="text" name="body[{{ $index }}][pin_bevel]" id="pin_bevel" />
            <x-form.input_label class="col-3" placeholder="Enter box od" label="box od" value="{{ getDecode($body->description)['box_od'] ?? '' }}" type="text" name="body[{{ $index }}][box_od]" id="box_od" />
            <x-form.input_label class="col-3" placeholder="Enter box cb Diameter" label="box cb Diameter" value="{{ getDecode($body->description)['box_cb'] ?? '' }}" type="text" name="body[{{ $index }}][box_cb]" id="box_cb" />
            <x-form.input_label class="col-3" placeholder="Enter box bb Diameter" label="box bb Diameter" value="{{ getDecode($body->description)['box_bb_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][box_bb_diameter]" id="box_bb_diameter" />
            <x-form.input_label class="col-3" placeholder="Enter box bb Depth" label="box bb Depth" value="{{ getDecode($body->description)['box_bb_depth'] ?? '' }}" type="text" name="body[{{ $index }}][box_bb_depth]" id="box_bb_depth" />
            <x-form.input_label class="col-3" placeholder="Enter box bevel Diameter" label="box bevel Diameter" value="{{ getDecode($body->description)['box_bevel_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][box_bevel_diameter]" id="box_bevel_diameter" />
            <x-form.input_label class="col-3" placeholder="Enter body fishing neck Length" label="fishing neck Length" value="{{ getDecode($body->description)['body_fishing_neck'] ?? '' }}" type="text" name="body[{{ $index }}][body_fishing_neck]" id="fishing_neck" />
            <x-form.input_label class="col-3" placeholder="body overall Length" label="overall Length" value="{{ getDecode($body->description)['body_length'] ?? '' }}" type="text" name="body[{{ $index }}][body_length]" id="body_length" />
            <x-form.input_label class="col-3" placeholder="Enter remarks" label="remarks" value="{{ getDecode($body->description)['remarks'] ?? '' }}" type="text" name="body[{{ $index }}][remarks]" id="remarks" />

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
            <x-form.input_label class="col-3" placeholder="Enter Serial No." label="Serial No." value="" type="text" name="desc[0][serial]" id="serial" />
            <x-form.input_label class="col-4" placeholder="Enter Description" label="Description" value="" type="text" name="desc[0][description]" id="desc" />
            <x-form.input_label class="col-3" placeholder="Enter pin conn" label="pin conn" value="" type="text" name="desc[0][pin_conn]" id="pin_conn" />
            <x-form.input_label class="col-2" placeholder="Enter box conn" label="box conn" value="" type="text" name="desc[0][box_conn]" id="box_conn" />

            {{-- <x-form.input_label class="col-2" placeholder="Enter pin cond" label="pin cond" value="" type="text" name="desc[0][pin_cond]" id="pin_cond" />  --}}
            {{-- <x-form.input_label class="col-2" placeholder="Enter box cond" label="box cond" value="" type="text" name="desc[0][box_cond]" id="box_cond" />  --}}
            {{-- <x-form.input_label class="col-2" placeholder="Enter body cond" label="body cond" value="" type="text" name="desc[0][body_cond]" id="body_cond" />  --}}

            <x-dashboard.reports.tools.extensions :name="'desc[0][pin_cond]'" class='col-4' label="pin cond" />
            <x-dashboard.reports.tools.extensions :name="'desc[0][box_cond]'" class='col-4' label="box cond" />
            <x-dashboard.reports.tools.extensions :name="'desc[0][body_cond]'" class='col-4' label="body cond" />


            <x-form.input_label class="col-2" placeholder="Enter pin od" label="pin od" value="" type="text" name="desc[0][pin_od]" id="pin_od" />
            <x-form.input_label class="col-2" placeholder="Enter pin id" label="pin id" value="" type="text" name="desc[0][pin_id]" id="pin_id" />
            <x-form.input_label class="col-2" placeholder="Enter pin srg diameter" label="pin diameter" value="" type="text" name="desc[0][pin_diameter]" id="pin_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter pin srg  Diameter" label="pin srg  Diameter" value="" type="text" name="desc[0][pin_srg]" id="pin_srg" />
            <x-form.input_label class="col-2" placeholder="Enter pin Width" label="pin Width" value="" type="text" name="desc[0][pin_length]" id="pin_length" />
            <x-form.input_label class="col-2" placeholder="Enter pin bevel Diameter" label="pin bevel Diameter" value="" type="text" name="desc[0][pin_bevel]" id="pin_bevel" />

            <x-form.input_label class="col-3" placeholder="Enter box od" label="box od" value="" type="text" name="desc[0][box_od]" id="box_od" />
            <x-form.input_label class="col-3" placeholder="Enter box cb Diameter" label="box cb Diameter" value="" type="text" name="desc[0][box_cb]" id="box_cb" />
            <x-form.input_label class="col-3" placeholder="Enter box bb Diameter" label="box bb Diameter" value="" type="text" name="desc[0][box_bb_diameter]" id="box_bb_diameter" />
            <x-form.input_label class="col-3" placeholder="Enter box bb Depth" label="box bb Depth" value="" type="text" name="desc[0][box_bb_depth]" id="box_bb_depth" />
            <x-form.input_label class="col-3" placeholder="Enter box bevel Diameter" label="box bevel Diameter" value="" type="text" name="desc[0][box_bevel_diameter]" id="box_bevel_diameter" />
            <x-form.input_label class="col-3" placeholder="Enter body fishing neck Length" label="fishing neck Length" value="" type="text" name="desc[0][body_fishing_neck]" id="fishing_neck" />
            <x-form.input_label class="col-3" placeholder="body overall Length" label="overall Length" value="" type="text" name="desc[0][body_length]" id="body_length" />
            <x-form.input_label class="col-3" placeholder="Enter remarks" label="remarks" value="" type="text" name="desc[0][remarks]" id="remarks" />

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

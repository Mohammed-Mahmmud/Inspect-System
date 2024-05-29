<div id="kt_repeater_1" class="repeater">
    <div class="repeater-default" data-repeater-list="desc">
        @if($type == 'Edit')
        @foreach ($tools->getDesc as $index => $body)
        <div class="row g-3" data-repeater-item>


            <x-form.input_label class="col-4" placeholder="Enter Serial No" label="Serial No." value="{{ getDecode($body->description)['serial'] ?? '' }}" type="text" name="body[{{ $index }}][serial]" id="serial" />
            <x-form.input_label class="col-4" placeholder="Enter Description" label="Description" value="{{ getDecode($body->description)['description'] ?? '' }}" type="text" name="body[{{ $index }}][description]" id="desc" />
            <x-form.input_label class="col-2" placeholder="Enter box1 conn" label="box1 conn" value="{{ getDecode($body->description)['box1_conn'] ?? '' }}" type="text" name="body[{{ $index }}][box1_conn]" id="box1_conn" />
            <x-form.input_label class="col-2" placeholder="Enter box2 conn" label="box2 conn" value="{{ getDecode($body->description)['box2_conn'] ?? '' }}" type="text" name="body[{{ $index }}][box2_conn]" id="box2_conn" />

            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][box1_cond]'"  value="{{ getDecode($body->description)['box1_cond'] ?? '' }}" class='col-4' label="box1 cond" />
            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][box2_cond]'"  value="{{ getDecode($body->description)['box2_cond'] ?? '' }}" class='col-4' label="box2 cond" />
            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][body_cond]'"  value="{{ getDecode($body->description)['body_cond'] ?? '' }}" class='col-4' label="body cond" />

            <x-form.input_label class="col-2" placeholder="Enter box1 od " label="box1 od " value="{{ getDecode($body->description)['box1_od'] ?? '' }}" type="text" name="body[{{ $index }}][box1_od]" id="box1_od" />
            <x-form.input_label class="col-2" placeholder="Enter box1 cb Diameter" label="box1 cb Diameter" value="{{ getDecode($body->description)['box1_cb'] ?? '' }}" type="text" name="body[{{ $index }}][box1_cb]" id="box1_cb" />
            <x-form.input_label class="col-2" placeholder="Enter box1 bb Diameter" label="box1 bb Diameter" value="{{ getDecode($body->description)['box1_bb_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][box1_bb_diameter]" id="box1_bb_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter box1 bb Depth" label="box1 bb Depth" value="{{ getDecode($body->description)['box1_bb_depth'] ?? '' }}" type="text" name="body[{{ $index }}][box1_bb_depth]" id="box1_bb_depth" />
            <x-form.input_label class="col-4" placeholder="Enter box1 bevel Depth" label="box1 bevel Depth" value="{{ getDecode($body->description)['box1_bevel_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][box1_bevel_diameter]" id="box1_bevel_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter box2 od " label="box2 od " value="{{ getDecode($body->description)['box2_od'] ?? '' }}" type="text" name="body[{{ $index }}][box2_od]" id="box2_od" />
            <x-form.input_label class="col-2" placeholder="Enter box2 cb Diameter" label="box2 cb Diameter" value="{{ getDecode($body->description)['box2_cb'] ?? '' }}" type="text" name="body[{{ $index }}][box2_cb]" id="box2_cb" />
            <x-form.input_label class="col-2" placeholder="Enter box2 bb Diameter" label="box2 bb Diameter" value="{{ getDecode($body->description)['box2_bb_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][box2_bb_diameter]" id="box2_bb_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter box2 bb Depth" label="box2 bb Depth" value="{{ getDecode($body->description)['box2_bb_depth'] ?? '' }}" type="text" name="body[{{ $index }}][box2_bb_depth]" id="box_bb_depth" />
            <x-form.input_label class="col-4" placeholder="Enter box2 bevel Depth" label="box2 bevel Depth" value="{{ getDecode($body->description)['box2_bevel_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][box2_bevel_diameter]" id="box2_bevel_diameter" />
            <x-form.input_label class="col-4" placeholder="Enter body fishing neck Length" label="fishing neck Length" value="{{ getDecode($body->description)['body_fishing_neck'] ?? '' }}" type="text" name="body[{{ $index }}][body_fishing_neck]" id="fishing_neck" />
            <x-form.input_label class="col-4" placeholder="Enter body overall length Length" label="overall length Length" value="{{ getDecode($body->description)['body_length'] ?? '' }}" type="text" name="body[{{ $index }}][body_length]" id="body_length" />
            <x-form.input_label class="col-4" placeholder="Enter remarks" label="remarks" value="{{ getDecode($body->description)['remarks'] ?? '' }}" type="text" name="body[{{ $index }}][remarks]" id="remarks" />


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
            <x-form.input_label class="col-4" placeholder="Enter Serial No." label="Serial No." value="" type="text" name="desc[0][serial]" id="serial" />
            <x-form.input_label class="col-4" placeholder="Enter Description" label="Description" value="" type="text" name="desc[0][description]" id="desc" />
            <x-form.input_label class="col-2" placeholder="Enter box1 conn" label="box1 conn" value="" type="text" name="desc[0][box1_conn]" id="box1_conn" />
            <x-form.input_label class="col-2" placeholder="Enter box2 conn" label="box2 conn" value="" type="text" name="desc[0][box2_conn]" id="box2_conn" />

            <x-dashboard.reports.tools.extensions  :name="'desc[0][box1_cond]'" class='col-4' label="box1 cond" />
            <x-dashboard.reports.tools.extensions  :name="'desc[0][box2_cond]'" class='col-4' label="box2 cond" />
            <x-dashboard.reports.tools.extensions  :name="'desc[0][body_cond]'" class='col-4' label="body cond" />

            <x-form.input_label class="col-2" placeholder="Enter box1 od " label="box1 od " value="" type="text" name="desc[0][box1_od]" id="box1_od" />
            <x-form.input_label class="col-2" placeholder="Enter box1 cb Diameter" label="box1 cb Diameter" value="" type="text" name="desc[0][box1_cb]" id="box1_cb" />
            <x-form.input_label class="col-2" placeholder="Enter box1 bb Diameter" label="box1 bb Diameter" value="" type="text" name="desc[0][box1_bb_diameter]" id="box1_bb_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter box1 bb Depth" label="box1 bb Depth" value="" type="text" name="desc[0][box1_bb_depth]" id="box1_bb_depth" />
            <x-form.input_label class="col-4" placeholder="Enter box1 bevel Depth" label="box1 bevel Depth" value="" type="text" name="desc[0][box1_bevel_diameter]" id="box1_bevel_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter box2 od " label="box2 od " value="" type="text" name="desc[0][box2_od]" id="box2_od" />
            <x-form.input_label class="col-2" placeholder="Enter box2 cb Diameter" label="box2 cb Diameter" value="" type="text" name="desc[0][box2_cb]" id="box2_cb" />
            <x-form.input_label class="col-2" placeholder="Enter box2 bb Diameter" label="box2 bb Diameter" value="" type="text" name="desc[0][box2_bb_diameter]" id="box2_bb_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter box2 bb Depth" label="box2 bb Depth" value="" type="text" name="desc[0][box2_bb_depth]" id="box_bb_depth" />
            <x-form.input_label class="col-4" placeholder="Enter box2 bevel Depth" label="box2 bevel Depth" value="" type="text" name="desc[0][box2_bevel_diameter]" id="box2_bevel_diameter" />
            <x-form.input_label class="col-4" placeholder="Enter body fishing neck Length" label="fishing neck Length" value="" type="text" name="desc[0][body_fishing_neck]" id="fishing_neck" />
            <x-form.input_label class="col-4" placeholder="Enter body overall length Length" label="overall length Length" value="" type="text" name="desc[0][body_length]" id="body_length" />
            <x-form.input_label class="col-4" placeholder="Enter remarks" label="remarks" value="" type="text" name="desc[0][remarks]" id="remarks" />



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

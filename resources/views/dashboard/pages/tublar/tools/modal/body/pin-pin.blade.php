<div id="kt_repeater_1" class="repeater">
    <div class="repeater-default" data-repeater-list="desc">
        @if($type == 'Edit')
        @foreach ($tools->getDesc as $index => $body)
        <div class="row g-3" data-repeater-item>
            <x-form.input_label class="col-3" placeholder="Enter Serial No." label="Serial No." value="{{ getDecode($body->description)['serial'] ?? '' }}" type="text" name="body[{{ $index }}][serial]" id="serial" />
            <x-form.input_label class="col-4" placeholder="Enter Description" label="Description" value="{{ getDecode($body->description)['description'] ?? '' }}" type="text" name="body[{{ $index }}][description]" id="desc" />
            <x-form.input_label class="col-3" placeholder="Enter pin1 conn" label="pin1 conn" value="{{ getDecode($body->description)['pin1_conn'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_conn]" id="pin1_conn" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 conn" label="pin2 conn" value="{{ getDecode($body->description)['pin2_conn'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_conn]" id="pin2_conn" />

            {{--  <x-form.input_label class="col-2" placeholder="Enter pin1 cond" label="pin1 cond" value="{{ getDecode($body->description)['pin1_cond'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_cond]" id="pin1_cond" />  --}}
            {{--  <x-form.input_label class="col-2" placeholder="Enter pin2 cond" label="pin2 cond" value="{{ getDecode($body->description)['pin2_cond'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_cond]" id="pin2_cond" />  --}}
            {{--  <x-form.input_label class="col-2" placeholder="Enter body cond" label="body cond" value="{{ getDecode($body->description)['body_cond'] ?? '' }}" type="text" name="body[{{ $index }}][body_cond]" id="body_cond" />  --}}

            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][pin1_cond]'"  value="{{ getDecode($body->description)['pin1_cond'] ?? '' }}" class='col-4' label="pin1 cond" />
            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][pin2_cond]'"  value="{{ getDecode($body->description)['pin2_cond'] ?? '' }}" class='col-4' label="pin2 cond" />
            <x-dashboard.reports.tools.extensions :name="'body[{{ $index }}][body_cond]'"  value="{{ getDecode($body->description)['body_cond'] ?? '' }}" class='col-4' label="body cond" />


            <x-form.input_label class="col-2" placeholder="Enter pin1 od" label="pin1 od" value="{{ getDecode($body->description)['pin1_od'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_od]" id="pin1_od" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 id" label="pin1 id" value="{{ getDecode($body->description)['pin1_id'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_id]" id="pin1_id" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 srg Diameter" label="pin1 Diameter" value="{{ getDecode($body->description)['pin1_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_diameter]" id="pin1_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 srg Width" label="pin1 srg Width" value="{{ getDecode($body->description)['pin1_srg'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_srg]" id="pin1_srg" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 length" label="pin1 length" value="{{ getDecode($body->description)['pin1_length'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_length]" id="pin1_length" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 bevel Diameter" label="pin1 bevel Diameter" value="{{ getDecode($body->description)['pin1_bevel'] ?? '' }}" type="text" name="body[{{ $index }}][pin1_bevel]" id="pin1_bevel" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 od" label="pin2 od" value="{{ getDecode($body->description)['pin2_od'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_od]" id="pin2_od" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 id" label="pin2 id" value="{{ getDecode($body->description)['pin2_id'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_id]" id="pin2_id" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 srg Diameter" label="pin2 Diameter" value="{{ getDecode($body->description)['pin2_diameter'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_diameter]" id="pin2_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 srg Width" label="pin2 srg Width" value="{{ getDecode($body->description)['pin2_srg'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_srg]" id="pin2_srg" />
            <x-form.input_label class="col-2" placeholder="Enter pin2  Length" label="pin2  Length" value="{{ getDecode($body->description)['pin2_length'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_length]" id="pin2_length" />
            <x-form.input_label class="col-4" placeholder="Enter pin2 bevel Diameter" label="pin2 bevel Diameter" value="{{ getDecode($body->description)['pin2_bevel'] ?? '' }}" type="text" name="body[{{ $index }}][pin2_bevel]" id="pin2_bevel" />
            <x-form.input_label class="col-4" placeholder="Enter body overall  Length" label="overall  Length" value="{{ getDecode($body->description)['body_length'] ?? '' }}" type="text" name="body[{{ $index }}][body_length]" id="body_length" />
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
            <x-form.input_label class="col-3" placeholder="Enter Serial No." label="Serial No." value="" type="text" name="desc[0][serial]" id="serial" />
            <x-form.input_label class="col-4" placeholder="Enter Description" label="Description" value="" type="text" name="desc[0][description]" id="desc" />
            <x-form.input_label class="col-3" placeholder="Enter pin1 conn" label="pin1 conn" value="" type="text" name="desc[0][pin1_conn]" id="pin1_conn" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 conn" label="pin2 conn" value="" type="text" name="desc[0][pin2_conn]" id="pin2_conn" />

           
            <x-dashboard.reports.tools.extensions :name="'desc[0][pin1_cond]'" class='col-4' label="pin1 cond" />
            <x-dashboard.reports.tools.extensions :name="'desc[0][pin2_cond]'" class='col-4' label="pi2 cond" />
            <x-dashboard.reports.tools.extensions :name="'desc[0][body_cond]'" class='col-4' label="body cond" />


            <x-form.input_label class="col-2" placeholder="Enter pin1 od" label="pin1 od" value="" type="text" name="desc[0][pin1_od]" id="pin1_od" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 id" label="pin1 id" value="" type="text" name="desc[0][pin1_id]" id="pin1_id" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 srg Diameter" label="pin1 Diameter" value="" type="text" name="desc[0][pin1_diameter]" id="pin1_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 srg Width" label="pin1 srg Width" value="" type="text" name="desc[0][pin1_srg]" id="pin1_srg" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 Length" label="pin1 Length" value="" type="text" name="desc[0][pin1_length]" id="pin1_length" />
            <x-form.input_label class="col-2" placeholder="Enter pin1 bevel Diameter" label="pin1 bevel Diameter" value="" type="text" name="desc[0][pin1_bevel]" id="pin1_bevel" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 od" label="pin2 od" value="" type="text" name="desc[0][pin2_od]" id="pin2_od" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 id" label="pin2 id" value="" type="text" name="desc[0][pin2_id]" id="pin2_id" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 srg Diameter" label="pin2 Diameter" value="" type="text" name="desc[0][pin2_diameter]" id="pin2_diameter" />
            <x-form.input_label class="col-2" placeholder="Enter pin2 srg Width" label="pin2 srg Width" value="" type="text" name="desc[0][pin2_srg]" id="pin2_srg" />
            <x-form.input_label class="col-2" placeholder="Enter pin2  Length" label="pin2  Length" value="" type="text" name="desc[0][pin2_length]" id="pin2_length" />
            <x-form.input_label class="col-4" placeholder="Enter pin2 bevel Diameter" label="pin2 bevel Diameter" value="" type="text" name="desc[0][pin2_bevel]" id="pin2_bevel" />
            <x-form.input_label class="col-4" placeholder="Enter body overall  Length" label="overall  Length" value="" type="text" name="desc[0][body_length]" id="body_length" />
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

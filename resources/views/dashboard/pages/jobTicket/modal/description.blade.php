<div id="kt_repeater_1" class="repeater">
    <div id="kt_repeater_1" class="repeater-default" data-repeater-list="content">

        @if ($type == 'Edit')
            {{--  @foreach ($getContent as $index => $content)   --}}
            @foreach ($jobTicket->getDesc as $index => $content)
                <div class="row g-1" data-repeater-item>
                    <x-form.textarea_label class="col-6" span="enter main description"
                        placeholder="Enter main description"
                        value="{{ getDecode($content->description)['main_description'] ?? '' }}"
                        label="main description :" name="content[{{ $index }}][main_description]"
                        rows='2' />
                    <x-form.textarea_label class="col-6" span="enter description" placeholder="Enter description"
                        value="{{ getDecode($content->description)['description'] ?? '' }}" label="description :"
                        name="content[{{ $index }}][description]" rows='2' />
                    <x-form.input_label class="col-2" placeholder="Enter contract code" label="contract code"
                        value="{{ getDecode($content->description)['contract_code'] ?? '' }}" type="text"
                        name="content[{{ $index }}][contract_code]" id="contract_code_{{ $index }}" />
                    <x-form.input_label class="col-2" placeholder="Enter quantity"
                        value="{{ getDecode($content->description)['quantity'] ?? '' }}" label="quantity :"
                        type="text" name="content[{{ $index }}][quantity]"
                        id="quantity_{{ $index }}" />
                    <x-form.input_label class="col-2" placeholder="Enter od_size" label="od size"
                        value="{{ getDecode($content->description)['od_size'] ?? '' }}" type="text"
                        name="content[{{ $index }}][od_size]" id="od_size_{{ $index }}" />
                    <x-form.input_label class="col-2" placeholder="Enter range" label="range"
                        value="{{ getDecode($content->description)['range'] ?? '' }}" type="text"
                        name="content[{{ $index }}][range]" id="range_{{ $index }}" />
                    <x-form.input_label class="col-2" placeholder="Enter unit_price" label="unit price"
                        value="{{ getDecode($content->description)['unit_price'] ?? '' }}" type="text"
                        name="content[{{ $index }}][unit_price]" id="unit_price_{{ $index }}" />
                    <x-form.input_label class="col-2" placeholder="Enter total units price" label="total units price"
                        value="{{ getDecode($content->description)['total_price'] ?? '' }}" type="text"
                        name="content[{{ $index }}][total_price]" id="total_price_{{ $index }}" />

                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <a href="javascript:;" data-repeater-delete=""
                                class="btn btn-md font-weight-bolder btn-outline-danger">
                                <i class="la la-close"></i>delete
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @elseif('Create')
            <div class="row g-1" data-repeater-item>
                <x-form.textarea_label class="col-6" span="enter main description" placeholder="Enter main description"
                    value="{{ $getContent[0]->main_description ?? '' }}" label="main description :"
                    name="content[0][main_description]" rows='2' />
                <x-form.textarea_label class="col-6" span="enter description" placeholder="Enter description"
                    value="{{ $getContent[0]->description ?? '' }}" label="description :"
                    name="content[0][description]" rows='2' />
                <x-form.input_label class="col-2" placeholder="Enter contract code" label="contract code"
                    value="{{ $getContent[0]->contract_code ?? '' }}" type="text" name="content[0][contract_code]"
                    id="contract_code" />
                <x-form.input_label class="col-2" placeholder="Enter quantity"
                    value="{{ $getContent[0]->quantity ?? '' }}" label="quantity :" type="text"
                    name="content[0][quantity]" id="quantity" />
                <x-form.input_label class="col-2" placeholder="Enter od_size" label="od size"
                    value="{{ $getContent[0]->od_size ?? '' }}" type="text" name="content[0][od_size]"
                    id="od_size" />
                <x-form.input_label class="col-2" placeholder="Enter range" label="range"
                    value="{{ $getContent[0]->range ?? '' }}" type="text" name="content[0][range]"
                    id="range" />
                <x-form.input_label class="col-2" placeholder="Enter unit_price" label="unit price"
                    value="{{ $getContent[0]->unit_price ?? '' }}" type="text" name="content[0][unit_price]"
                    id="unit_price" />
                <x-form.input_label class="col-2" placeholder="Enter total units price" label="total units price"
                    value="{{ $getContent[0]->total_price ?? '' }}" type="text" name="content[0][total_price]"
                    id="total_price" />
                <div class="col-lg-12">
                    <div class="hstack gap-2 justify-content-end">
                        <a href="javascript:;" data-repeater-delete=""
                            class="btn btn-md font-weight-bolder btn-outline-danger">
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

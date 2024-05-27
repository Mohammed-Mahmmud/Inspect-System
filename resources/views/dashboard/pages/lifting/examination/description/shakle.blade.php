<x-form.input_label class="col-6" value="{{ $examination->desc_header ?? '' }}" placeholder="Enter Description Header" label="Description Header :" type="text" name="desc_header" id="desc_header" />
<x-form.input_label class="col-6" placeholder="Enter Description Manufature" value="{{ $examination->desc_manufature ?? '' }}" label="Description Manufature :" type="text" name="desc_manufature" id="desc_manufature" />


<div class="mb-2 col-6">
    <label class="form-label">Size </label>
    <select class="form-select mb-3" aria-label="Default select example" name="shaklesize_id">
        <option disabled selected> Choose Shakle Size </option>
        @foreach ($shakleSizes as $item)
        <option value="{{ $item->id }}" {{$item->id == $examination->shaklesize_id ? 'selected' : "" }}>{{ $item->size."   ~   SWL  =  ".$item->swl }}</option>
        @endforeach
    </select>
</div>



<x-form.input_label class="col-6" placeholder="Enter Type" value="{{ $examination->desc_type ?? '' }}" label="Type :" type="text" name="desc_type" id="desc_type" />


<div class="modal-body">
    <input type="hidden" class="form-control" value="manlift_checklist" name="checklist[type]">
  {{--  @if(($type == 'Edit') && ($examination->jobChecklist[0]->type ==='manlift_checklist') )
        @foreach($examination->jobChecklist as  $item)
            <div class="row g-3 mb-2">
            <input type="hidden" class="form-control" value="{{$item->question}}" name="checklist[0][question]">
            <div class="col-2 d-flex align-items-left">
                <x-form.switches value="{{$item->check}}" style="font-size: 1em; " label="Check" name="checklist[0][check]" />
            </div>
            <div class="col-10 form-outline" data-mdb-input-init>
                <input type="text"  value="{{$item->comment}}" class="form-control" name="checklist[0][comment]" id="comment0">
                <label class="form-label" for="comment0"> {{ucfirst($item->question)}} </label>
            </div>
            </div>
        @endforeach


        @else  --}}
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Enter Space Bars and End Covers" name="checklist[0][question]">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check"   name="checklist[0][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[0][comment]" id="comment0">
            <label class="form-label" for="comment0"> Space Bars and End Covers </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Main Gears &amp; Reduction Gears" name="checklist[1][question]">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[1][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[1][comment]" id="comment1">
            <label class="form-label" for="comment1"> Main Gears &amp; Reduction Gears </label>
        </div>
    </div>

    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Record of Major Repairs / Alterations / Replacements" name="checklist[2][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[2][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[2][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Record of Major Repairs / Alterations / Replacements </label>
        </div>
    </div>


    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Personnel Basket" name="checklist[3][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[3][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[3][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Personnel Basket </label>
        </div>
    </div>


    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Hoisting Speed" name="checklist[4][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[4][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[4][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Hoisting Speed </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Lowering Speed" name="checklist[5][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[5][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[5][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Lowering Speed </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Boom" name="checklist[6][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[6][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[6][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Boom </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Gauges in Cab" name="checklist[7][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[7][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[7][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Gauges in Cab</label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Turntable Bearing" name="checklist[8][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[8][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[8][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Turntable Bearing </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Shear Wave Ultra-Sonic" name="checklist[9][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[9][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[9][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Shear Wave Ultra-Sonic </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Steering System" name="checklist[10][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[10][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[10][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Steering System </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Labels and Tags" name="checklist[11][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[11][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[11][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Labels and Tags </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="outriggers / stabilizers" name="checklist[12][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[12][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[12][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> outriggers / stabilizers </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="directional controls" name="checklist[13][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[13][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[13][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> directional controls</label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Main Gears & Reduction Gears" name="checklist[14][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[14][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[14][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Main Gears & Reduction Gears </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Hydraulic System" name="checklist[15][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[15][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[15][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Hydraulic System</label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Motor / Electric System" name="checklist[16][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[16][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[16][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Motor / Electric System </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Brakes / Clutch" name="checklist[17][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[17][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[17][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Brakes / Clutch </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Controls / Operational Controls" name="checklist[18][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[18][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[18][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Controls / Operational Controls </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Tyres and Wheels" name="checklist[19][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[19][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[19][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label">Tyres and Wheels </label>
        </div>
    </div>
    <div class="row g-3 mb-2">
        <input type="hidden" class="form-control" value="Eddy Current" name="checklist[20][question]" id="Enter Space Bars and nd Covers Comments">
        <div class="col-2 d-flex align-items-left">
            <x-form.switches value="1" style="font-size: 1em; " label="Check" name="checklist[20][check]" />
        </div>
        <div class="col-10 form-outline" data-mdb-input-init>
            <input type="text" class="form-control" value="" name="checklist[20][comment]" id="Enter Space Bars and End Covers Comments">
            <label class="form-label"> Eddy Current </label>
        </div>
    </div>



{{--  @endif  --}}
</div>


<div class="row g-0" data-repeater-item>
    {{-- create table body  --}}
    <div class="card ribbon-box border shadow-none mb-lg-0">
        <div class="card-body">
            <div class="ribbon ribbon-primary round-shape">{{$type." ".ucfirst($examType)}} </div>
            <br>
            <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <th scope="col" >Size</th>
                    <th scope="col" >Weight</th>
                    <th scope="col" >Connection</th>
                    <th scope="col" >Nom OD</th>
                    <th scope="col" >Nom ID</th>
                </thead>
<tbody>
                <tr>
                    <td ><input class="form-control" class="form-control" value="{{ getDeCode($summary->details)['size'] ?? ''}}" placeholder="size" name="details[size]" id="size" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['weight'] ?? ''}}" placeholder="weight" name="details[weight]" id="weight" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['conn'] ?? ''}}" placeholder="conn" name="details[conn]" id="conn" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['nom_od'] ?? ''}}" placeholder="Nom OD" name="details[nom_od]" id="nom_od" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['nom_id'] ?? ''}}" placeholder="Nom ID" name="details[nom_id]" id="nom_id" type="text"></td>
                </tr>
</tbody>
            </table>

             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Type</th>
                        <th>HardBrand</th>
                        <th>Specification</th>
                        <th>Type Of Inspection</th>
                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['type'] ?? ''}}" placeholder="type" name="details[type]" id="type" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['hardbrand'] ?? ''}}" placeholder="hardbrand" name="details[hardbrand]" id="hardbrand" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['spec'] ?? ''}}" placeholder="specification" name="details[spec]" id="spec" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['insp_type'] ?? ''}}" placeholder="type of  inspection" name="details[insp_type]" id="insp_type" type="text"></td>
                </tr>
            </table>

            <br>
            <br>
            <h6 class="fs-md text-end red"></h6>
             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Total Joints Inspected</th>
                        <th>Joints Accepted</th>
                        <th>Joints Rejected</th>
                        <th>Required Shop Rep</th>
                        <th>Required Filed Rep</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['inspected_joints'] ?? ''}}" placeholder="Total Joints Inspected" name="description[inspected_joints]" id="inspected_joints" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['acc_joints'] ?? ''}}" placeholder="Joints Accepted" name="description[acc_joints]" id="acc_joints" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['rej_joints'] ?? ''}}" placeholder="Joints Rejected" name="description[rej_joints]" id="rej_joints" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['shop_rep'] ?? ''}}" placeholder="Required Shop Rep" name="description[shop_rep]" id="shop_rep" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['field_rep'] ?? ''}}" placeholder="Required Filed Rep" name="description[field_rep]" id="field_rep" type="text"></td>

                    </tr>
                </tbody>
            </table>
                        <h6 class="fs-md text-end red">Accepted After Repair</h6>
             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Crooked</th>
                        <th>Blocked</th>
                        <th>Scrap</th>
                        <th>Box Damage</th>
                        <th>Pin Damage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['crooked'] ?? '' }}" placeholder="Crooked" name="description[crooked]" id="crooked" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['blocked']  ?? ''}}" placeholder="Blocked" name="description[blocked]" id="blocked" type="text"></td>
                        <td>
                            <input class="form-control" value="{{ getDeCode($summary->description)['scrap']  ?? ''}}" placeholder="Scrap" name="description[scrap]" id="scrap" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['box_damage']  ?? ''}}" placeholder="Box Damage" name="description[box_damage]" id="box_damage" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['pin_damage']  ?? ''}}" placeholder="Pin Damage" name="description[pin_damage]" id="pin_damage" type="text"></td>
                    </tr>

                </tbody>
            </table>

             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <h6 class="fs-md text-end red">Field Repair</h6>
                    <tr>

                        <th>Pin & Box Damage </th>
                        <th>Pin Preface</th>
                        <th>Box Preface</th>
                        <th>Joints Straightened</th>
                    </tr>
                </thead>
                <tr>

                    <td><input class="form-control" value="{{ getDeCode($summary->description)['pin_box_damage'] ?? ''}}" placeholder="Pin & Box Damage" name="description[pin_box_damage]" id="pin_box_damage" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['pin_preface'] ?? ''}}" placeholder="Pin Preface" name="description[pin_preface]" id="pin_preface" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['box_preface'] ?? ''}}" placeholder="Box Preface" name="description[box_preface]" id="box_preface" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['straightened'] ?? ''}}" placeholder="Joints Straightened" name="description[straightened]" id="straightened" type="text"></td>
                </tr>
            </table>
            <h6 class="fs-md text-end red">Colour Codes Tool Joint Condition</h6>
             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Good</th>
                        <th>Field Rep</th>
                        <th>Shop Rep</th>
                        <th>Scrap</th>
                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['good'] ?? ''}}" placeholder="Pin & Box Damage" name="colour_code[good]" id="good" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['field_rep'] ?? ''}}" placeholder="Pin Preface" name="colour_code[field_rep]" id="field_rep" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['shop_rep'] ?? ''}}" placeholder="Box Preface" name="colour_code[shop_rep]" id="shop_rep" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['scrap'] ?? ''}}" placeholder="Joints scrap" name="colour_code[scrap]" id="straightened" type="text"></td>
                </tr>
            </table>
        </div>
    </div>
</div>

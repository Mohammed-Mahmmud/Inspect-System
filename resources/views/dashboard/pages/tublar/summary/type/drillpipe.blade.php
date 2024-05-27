<div class="row g-0" data-repeater-item>
    {{-- create table body  --}}
    <div class="card ribbon-box border shadow-none mb-lg-0">
        <div class="card-body">
        <h5 class="superHint fs-md text-start">{{$type." ".ucfirst($examType)}} </h5>
        <div class="ribbon-content text-muted mt-4">


                <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <th scope="col">Size</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Connection</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Nom.Wall</th>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="{{ getDeCode($summary->details)['size'] ?? ''}}" placeholder="size" name="details[size]" id="size" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->details)['weight'] ?? ''}}" placeholder="weight" name="details[weight]" id="weight" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->details)['conn'] ?? ''}}" placeholder="conn" name="details[conn]" id="conn" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->details)['grade'] ?? ''}}" placeholder="Grade" name="details[grade]" id="grade" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->details)['nom_wall'] ?? ''}}" placeholder="Nom.Wall" name="details[nom_wall]" id="nom_wall" type="text"></td>
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

            <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Total Joints Inspected</th>
                        <th>Premium Class</th>
                        <th>New</th>
                        <th>Class2</th>
                        <th>Class3</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['inspected_joints'] ?? ''}}" placeholder="Total Joints Inspected" name="description[inspected_joints]" id="inspected_joints" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['premium_class'] ?? ''}}" placeholder="Premium Class" name="description[premium_class]" id="premium_class" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['new'] ?? ''}}" placeholder="New" name="description[new]" id="new" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['class2'] ?? ''}}" placeholder="Class2" name="description[class2]" id="class2" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['class3'] ?? ''}}" placeholder="Class3" name="description[class3]" id="class3" type="text"></td>

                    </tr>
                </tbody>
            </table>
            </div>
            <h6 class="hint">Accepted After Repair</h6>
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
                    <h6 class="hint">Field Repair</h6>
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
            <h6 class="superHint">Colour Codes</h6>
            <br>
            <h6 class="hint"> Tool Joint Condition</h6>
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
             <h6 class="hint"> Final Class</h6>
             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>New</th>
                        <th>Premium</th>
                        <th>Class2</th>
                        <th>Scrap</th>
                        <th>Others</th>
                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['new'] ?? ''}}" placeholder="new" name="colour_code[new]" id="new" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['premium'] ?? ''}}" placeholder="Premium" name="colour_code[premium]" id="premium" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['class2'] ?? ''}}" placeholder="Box Preface" name="colour_code[class2]" id="class2" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['scrap'] ?? ''}}" placeholder="scrap" name="colour_code[scrap]"  type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['Others'] ?? ''}}" placeholder="Others" name="colour_code[Others]"  type="text"></td>
                </tr>
            </table>
        </div>
    </div>
</div>

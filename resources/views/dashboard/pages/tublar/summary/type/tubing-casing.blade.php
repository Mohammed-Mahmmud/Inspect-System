<div class="row g-0" data-repeater-item>
    {{-- create table body  --}}
    <div class="card ribbon-box border shadow-none mb-lg-0">
        <div class="card-body">
            <div class="ribbon ribbon-primary round-shape">{{$type." ".ucfirst($examType)}} </div>
            <br>
           <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <th>Size</th>
                    <th>Weight</th>
                    <th>Connection</th>
                    <th>Grade</th>
                    <th>Wall Thichness</th>
                </thead>

                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['size'] ?? ''}}" placeholder="size" name="details[size]" id="size" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['weight'] ?? ''}}" placeholder="weight" name="details[weight]" id="weight" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['conn'] ?? ''}}" placeholder="conn" name="details[conn]" id="conn" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['grade'] ?? ''}}" placeholder="Nom OD" name="details[grade]" id="grade" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['wall_thick'] ?? ''}}" placeholder="Wall Thichness" name="details[wall_thick]" id="wall_thick" type="text"></td>
                </tr>
            </table>

          <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Type</th>
                        <th>Range</th>
                        <th>Specification</th>
                        <th>Type Of Inspection</th>

                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['type'] ?? ''}}" placeholder="type" name="details[type]" id="type" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->details)['range'] ?? ''}}" placeholder="range" name="details[range]" id="range" type="text"></td>
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
           <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Crooked</th>
                        <th>Blocked</th>
                        <th>Scrap</th>
                        <th>Visual Thread Inspected</th>
                        <th>Joints Accepted</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['crooked'] ?? '' }}" placeholder="Crooked" name="description[crooked]" id="crooked" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['blocked']  ?? ''}}" placeholder="Blocked" name="description[blocked]" id="blocked" type="text"></td>
                        <td>
                            <input class="form-control" value="{{ getDeCode($summary->description)['scrap']  ?? ''}}" placeholder="Scrap" name="description[scrap]" id="scrap" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['visual_thread']  ?? ''}}" placeholder="Visual Thread Inspected" name="description[visual_thread]" id="visual_thread" type="text"></td>
                        <td><input class="form-control" value="{{ getDeCode($summary->description)['visual_acc']  ?? ''}}" placeholder="Pin Damage" name="description[visual_acc]" id="visual_acc" type="text"></td>
                    </tr>

                </tbody>
            </table>

           <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Damaged Pin</th>
                        <th>Damaged Coupling</th>
                        <th>Full Length Drift</th>
                        <th>Drifts Passed</th>
                        <th>Drifts Failed</th>
                    </tr>
                </thead>
                <tr>

                    <td><input class="form-control" value="{{ getDeCode($summary->description)['damaged_pin'] ?? ''}}" placeholder="Damaged Pin" name="description[damaged_pin]" id="damaged_pin" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['damaged_couple'] ?? ''}}" placeholder="Pin Preface" name="description[damaged_couple]" id="damaged_couple" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['full_length_drift'] ?? ''}}" placeholder="Box Preface" name="description[full_length_drift]" id="full_length_drift" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['pass_drift'] ?? ''}}" placeholder="Joints pass_drift" name="description[pass_drift]" id="straightened" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['failed_drift'] ?? ''}}" placeholder="Joints failed_drift" name="description[failed_drift]" id="straightened" type="text"></td>
                </tr>
            </table>
            <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Full Length EMI</th>
                        <th>Joints Accepted</th>
                        <th>Joints Rejected</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['full_length_emi'] ?? ''}}" placeholder="full length emi" name="description[full_length_emi]" id="full_length_emi" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['emi_acc'] ?? ''}}" placeholder="EMI Accepted" name="description[emi_acc]" id="emi_acc" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['emi_rej'] ?? ''}}" placeholder="emi rej" name="description[emi_rej]" id="emi_rej" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['emi_remarks'] ?? ''}}" placeholder=" emi remarks" name="description[emi_remarks]" id="emi_remarks" type="text"></td>
                </tr>
            </table>
             <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>UT Inspection</th>
                        <th>Joints Accepted</th>
                        <th>Joints Rejected</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['ut_insp'] ?? ''}}" placeholder=" insp ut" name="description[ut_insp]" id="ut_insp" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['ut_acc'] ?? ''}}" placeholder="ut Accepted" name="description[ut_acc]" id="ut_acc" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['ut_rej'] ?? ''}}" placeholder="ut rej" name="description[ut_rej]" id="ut_rej" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->description)['ut_remarks'] ?? ''}}" placeholder=" ut remarks" name="description[ut_remarks]" id="ut_remarks" type="text"></td>
                </tr>
            </table>
                        <h6 class="fs-md text-end red">Colour Codes</h6>

              <table class="table caption-top table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>New</th>
                        <th>Used</th>
                        <th>Damaged</th>
                        <th>Damaged</th>
                        <th>Damaged Body</th>
                    </tr>
                </thead>
                <tr>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['new'] ?? ''}}" placeholder=" insp ut" name="colour_code[new]" id="new" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['used'] ?? ''}}" placeholder="ut Accepted" name="colour_code[used]" id="used" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['damaged1'] ?? ''}}" placeholder="Damaged" name="colour_code[damaged1]" id="damaged1" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['damaged2'] ?? ''}}" placeholder=" Damaged" name="colour_code[damaged2]" id="damaged2" type="text"></td>
                    <td><input class="form-control" value="{{ getDeCode($summary->colour_code)['damaged_body'] ?? ''}}" placeholder=" ut remarks" name="colour_code[damaged_body]" id="damaged_body" type="text"></td>
                </tr>
            </table>
        </div>
    </div>
</div>

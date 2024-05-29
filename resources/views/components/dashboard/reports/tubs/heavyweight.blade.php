<div class="table-responsive">
    <table class ="table-sm reportTable">
        <thead>
            <tr>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('serial')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('mill slot no')) }}</th>
                <th class="text-center" colspan="11">
                    {{ TranslationHelper::translate(ucwords('pin conn')) }}
                    <x-default.input class="hidden" type="text" name="pin_conn" placeholder="--------------------------------------" />
                </th>
                <th class="text-center" colspan="12">
                    {{ TranslationHelper::translate(ucwords('box conn')) }}
                    <x-default.input class="hidden" type="text" name="box_conn" placeholder="--------------------------------------" />
                </th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('upset area mpi')) }}</th>
                <th class="text-center" colspan="3">{{ TranslationHelper::translate(ucwords('hard banding')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('overall leng')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('bent')) }}</th>
            </tr>
            <tr>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('id min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('pin length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('srg length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('srg dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('box length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('b/back length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('b/back dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('pin')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('middle')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('box')) }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[0][serial]" id="serial0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][slot]" id="slot0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_od]" id="pin_od0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_id]" id="pin_id0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_tong_space]" id="pin_tong_space0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_bevel]" id="pin_bevel0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_seal]" id="pin_seal0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_length]" id="pin_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_srg_length]" id="pin_srg_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_srg_dia]" id="pin_srg_dia0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_f_repair]" id="pin_f_repair0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_reface]" id="pin_reface0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_condition]" id="pin_condition0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_od]" id="box_od0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_tong_space]" id="box_tong_space0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_bevel]" id="box_bevel0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_seal]" id="box_seal0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_length]" id="box_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_cbore_dia]" id="box_cbore_dia0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_cbore_length]" id="box_cbore_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_bback_length]" id="box_bback_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_bback_dia]" id="box_bback_dia0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_f_repair]" id="box_f_repair0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_reface]" id="box_reface0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_condition]" id="box_condition0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][upset_mpi]" id="upset_mpi0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][banding_pin]" id="banding_pin0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][banding_middle]" id="banding_middle0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][banding_box]" id="banding_box0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][overall_length]" id="overall_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][bent]" id="bent0" placeholder="----------" /></td>
            </tr>
             <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[1][serial]" id="serial1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][slot]" id="slot1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_od]" id="pin_od1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_id]" id="pin_id1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_tong_space]" id="pin_tong_space1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_bevel]" id="pin_bevel1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_seal]" id="pin_seal1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_length]" id="pin_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_srg_length]" id="pin_srg_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_srg_dia]" id="pin_srg_dia1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_f_repair]" id="pin_f_repair1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_reface]" id="pin_reface1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_condition]" id="pin_condition1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_od]" id="box_od1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_tong_space]" id="box_tong_space1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_bevel]" id="box_bevel1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_seal]" id="box_seal1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_length]" id="box_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_cbore_dia]" id="box_cbore_dia1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_cbore_length]" id="box_cbore_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_bback_length]" id="box_bback_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_bback_dia]" id="box_bback_dia1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_f_repair]" id="box_f_repair1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_reface]" id="box_reface1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_condition]" id="box_condition1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][upset_mpi]" id="upset_mpi1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][banding_pin]" id="banding_pin1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][banding_middle]" id="banding_middle1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][banding_box]" id="banding_box1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][overall_length]" id="overall_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][bent]" id="bent1" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[2][serial]" id="serial2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][slot]" id="slot2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_od]" id="pin_od2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_id]" id="pin_id2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_tong_space]" id="pin_tong_space2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_bevel]" id="pin_bevel2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_seal]" id="pin_seal2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_length]" id="pin_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_srg_length]" id="pin_srg_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_srg_dia]" id="pin_srg_dia2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_f_repair]" id="pin_f_repair2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_reface]" id="pin_reface2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_condition]" id="pin_condition2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_od]" id="box_od2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_tong_space]" id="box_tong_space2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_bevel]" id="box_bevel2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_seal]" id="box_seal2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_length]" id="box_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_cbore_dia]" id="box_cbore_dia2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_cbore_length]" id="box_cbore_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_bback_length]" id="box_bback_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_bback_dia]" id="box_bback_dia2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_f_repair]" id="box_f_repair2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_reface]" id="box_reface2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_condition]" id="box_condition2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][upset_mpi]" id="upset_mpi2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][banding_pin]" id="banding_pin2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][banding_middle]" id="banding_middle2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][banding_box]" id="banding_box2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][overall_length]" id="overall_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][bent]" id="bent2" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[3][serial]" id="serial3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][slot]" id="slot3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_od]" id="pin_od3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_id]" id="pin_id3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_tong_space]" id="pin_tong_space3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_bevel]" id="pin_bevel3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_seal]" id="pin_seal3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_length]" id="pin_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_srg_length]" id="pin_srg_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_srg_dia]" id="pin_srg_dia3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_f_repair]" id="pin_f_repair3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_reface]" id="pin_reface3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_condition]" id="pin_condition3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_od]" id="box_od3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_tong_space]" id="box_tong_space3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_bevel]" id="box_bevel3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_seal]" id="box_seal3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_length]" id="box_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_cbore_dia]" id="box_cbore_dia3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_cbore_length]" id="box_cbore_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_bback_length]" id="box_bback_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_bback_dia]" id="box_bback_dia3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_f_repair]" id="box_f_repair3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_reface]" id="box_reface3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_condition]" id="box_condition3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][upset_mpi]" id="upset_mpi3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][banding_pin]" id="banding_pin3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][banding_middle]" id="banding_middle3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][banding_box]" id="banding_box3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][overall_length]" id="overall_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][bent]" id="bent3" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[4][serial]" id="serial4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][slot]" id="slot4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_od]" id="pin_od4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_id]" id="pin_id4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_tong_space]" id="pin_tong_space4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_bevel]" id="pin_bevel4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_seal]" id="pin_seal4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_length]" id="pin_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_srg_length]" id="pin_srg_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_srg_dia]" id="pin_srg_dia4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_f_repair]" id="pin_f_repair4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_reface]" id="pin_reface4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_condition]" id="pin_condition4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_od]" id="box_od4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_tong_space]" id="box_tong_space4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_bevel]" id="box_bevel4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_seal]" id="box_seal4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_length]" id="box_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_cbore_dia]" id="box_cbore_dia4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_cbore_length]" id="box_cbore_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_bback_length]" id="box_bback_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_bback_dia]" id="box_bback_dia4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_f_repair]" id="box_f_repair4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_reface]" id="box_reface4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_condition]" id="box_condition4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][upset_mpi]" id="upset_mpi4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][banding_pin]" id="banding_pin4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][banding_middle]" id="banding_middle4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][banding_box]" id="banding_box4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][overall_length]" id="overall_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][bent]" id="bent4" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[5][serial]" id="serial5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][slot]" id="slot5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_od]" id="pin_od5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_id]" id="pin_id5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_tong_space]" id="pin_tong_space5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_bevel]" id="pin_bevel5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_seal]" id="pin_seal5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_length]" id="pin_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_srg_length]" id="pin_srg_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_srg_dia]" id="pin_srg_dia5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_f_repair]" id="pin_f_repair5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_reface]" id="pin_reface5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_condition]" id="pin_condition5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_od]" id="box_od5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_tong_space]" id="box_tong_space5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_bevel]" id="box_bevel5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_seal]" id="box_seal5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_length]" id="box_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_cbore_dia]" id="box_cbore_dia5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_cbore_length]" id="box_cbore_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_bback_length]" id="box_bback_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_bback_dia]" id="box_bback_dia5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_f_repair]" id="box_f_repair5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_reface]" id="box_reface5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_condition]" id="box_condition5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][upset_mpi]" id="upset_mpi5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][banding_pin]" id="banding_pin5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][banding_middle]" id="banding_middle5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][banding_box]" id="banding_box5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][overall_length]" id="overall_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][bent]" id="bent5" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[6][serial]" id="serial6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][slot]" id="slot6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_od]" id="pin_od6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_id]" id="pin_id6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_tong_space]" id="pin_tong_space6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_bevel]" id="pin_bevel6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_seal]" id="pin_seal6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_length]" id="pin_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_srg_length]" id="pin_srg_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_srg_dia]" id="pin_srg_dia6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_f_repair]" id="pin_f_repair6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_reface]" id="pin_reface6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_condition]" id="pin_condition6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_od]" id="box_od6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_tong_space]" id="box_tong_space6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_bevel]" id="box_bevel6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_seal]" id="box_seal6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_length]" id="box_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_cbore_dia]" id="box_cbore_dia6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_cbore_length]" id="box_cbore_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_bback_length]" id="box_bback_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_bback_dia]" id="box_bback_dia6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_f_repair]" id="box_f_repair6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_reface]" id="box_reface6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_condition]" id="box_condition6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][upset_mpi]" id="upset_mpi6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][banding_pin]" id="banding_pin6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][banding_middle]" id="banding_middle6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][banding_box]" id="banding_box6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][overall_length]" id="overall_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][bent]" id="bent6" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[7][serial]" id="serial7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][slot]" id="slot7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_od]" id="pin_od7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_id]" id="pin_id7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_tong_space]" id="pin_tong_space7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_bevel]" id="pin_bevel7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_seal]" id="pin_seal7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_length]" id="pin_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_srg_length]" id="pin_srg_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_srg_dia]" id="pin_srg_dia7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_f_repair]" id="pin_f_repair7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_reface]" id="pin_reface7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_condition]" id="pin_condition7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_od]" id="box_od7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_tong_space]" id="box_tong_space7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_bevel]" id="box_bevel7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_seal]" id="box_seal7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_length]" id="box_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_cbore_dia]" id="box_cbore_dia7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_cbore_length]" id="box_cbore_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_bback_length]" id="box_bback_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_bback_dia]" id="box_bback_dia7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_f_repair]" id="box_f_repair7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_reface]" id="box_reface7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_condition]" id="box_condition7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][upset_mpi]" id="upset_mpi7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][banding_pin]" id="banding_pin7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][banding_middle]" id="banding_middle7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][banding_box]" id="banding_box7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][overall_length]" id="overall_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][bent]" id="bent7" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[8][serial]" id="serial8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][slot]" id="slot8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_od]" id="pin_od8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_id]" id="pin_id8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_tong_space]" id="pin_tong_space8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_bevel]" id="pin_bevel8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_seal]" id="pin_seal8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_length]" id="pin_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_srg_length]" id="pin_srg_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_srg_dia]" id="pin_srg_dia8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_f_repair]" id="pin_f_repair8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_reface]" id="pin_reface8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_condition]" id="pin_condition8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_od]" id="box_od8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_tong_space]" id="box_tong_space8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_bevel]" id="box_bevel8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_seal]" id="box_seal8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_length]" id="box_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_cbore_dia]" id="box_cbore_dia8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_cbore_length]" id="box_cbore_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_bback_length]" id="box_bback_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_bback_dia]" id="box_bback_dia8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_f_repair]" id="box_f_repair8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_reface]" id="box_reface8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_condition]" id="box_condition8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][upset_mpi]" id="upset_mpi8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][banding_pin]" id="banding_pin8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][banding_middle]" id="banding_middle8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][banding_box]" id="banding_box8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][overall_length]" id="overall_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][bent]" id="bent8" placeholder="----------" /></td>
            </tr>
              <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[9][serial]" id="serial9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][slot]" id="slot9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_od]" id="pin_od9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_id]" id="pin_id9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_tong_space]" id="pin_tong_space9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_bevel]" id="pin_bevel9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_seal]" id="pin_seal9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_length]" id="pin_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_srg_length]" id="pin_srg_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_srg_dia]" id="pin_srg_dia9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_f_repair]" id="pin_f_repair9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_reface]" id="pin_reface9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_condition]" id="pin_condition9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_od]" id="box_od9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_tong_space]" id="box_tong_space9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_bevel]" id="box_bevel9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_seal]" id="box_seal9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_length]" id="box_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_cbore_dia]" id="box_cbore_dia9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_cbore_length]" id="box_cbore_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_bback_length]" id="box_bback_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_bback_dia]" id="box_bback_dia9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_f_repair]" id="box_f_repair9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_reface]" id="box_reface9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_condition]" id="box_condition9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][upset_mpi]" id="upset_mpi9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][banding_pin]" id="banding_pin9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][banding_middle]" id="banding_middle9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][banding_box]" id="banding_box9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][overall_length]" id="overall_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][bent]" id="bent9" placeholder="----------" /></td>
            </tr>

        </tbody>
    </table>
</div>

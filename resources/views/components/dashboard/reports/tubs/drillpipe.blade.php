<div class="table-responsive">
    <table class ="table-sm reportTable">
        <thead>
            <tr>
                <th class="text-center" rowspan="3">{{ TranslationHelper::translate(ucwords('serial')) }}</th>
                <th class="text-center" rowspan="3">{{ TranslationHelper::translate(ucwords('mill slot no')) }}</th>
                <th class="text-center" colspan="8">{{ TranslationHelper::translate(ucwords('pipe body')) }}</th>
                 <th class="text-center" colspan="15">{{ TranslationHelper::translate(ucwords('pin')) }}</th>
                <th class="text-center" colspan="13">{{ TranslationHelper::translate(ucwords('box')) }}</th>
            </tr>
            <tr>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('min w.t')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('od wear')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('emi')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('eai')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('utea')) }}</th>
                <th class="text-center" colspan="2">{{ TranslationHelper::translate(ucwords('corr')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('ipc')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('bent')) }}</th>

                <th class="text-center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('id min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('pin length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('neck length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('cyl dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('nose dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('pin lead +/-')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('hard banding')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('shldr width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('box length min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore length min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore wall min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('hard banding')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
            </tr>
            <tr>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('in')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('ext')) }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[0][serial]" id="serial0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][slot]" id="slot0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_wt]" id="pipe_wt0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_od]" id="pipe_od0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_emi]" id="pipe_emi0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_eai]" id="pipe_eai0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_utea]" id="pipe_utea0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_corr_in]" id="pipe_corr_in0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_corr_ext]" id="pipe_corr_ext0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_ipc]" id="pipe_ipc0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pipe_bent]" id="pipe_bent0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_od]" id="pin_od0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_id]" id="pin_id0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_tong_space]" id="pin_tong_space0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_bevel]" id="pin_bevel0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_seal]" id="pin_seal0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_length]" id="pin_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_neck]" id="pin_neck0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_cyl]" id="pin_cyl0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_nose]" id="pin_nose0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_lead]" id="pin_lead0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_f_repair]" id="pin_f_repair0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_reface]" id="pin_reface0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_hardbanding]" id="pin_hardbanding0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][pin_condition]" id="pin_condition0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_od]" id="box_od0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_tong_space]" id="box_tong_space0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_bevel]" id="box_bevel0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_seal]" id="box_seal0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_shldr]" id="box_shldr0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_length]" id="box_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_cbore_dia]" id="box_cbore_dia0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_cbore_length]" id="box_cbore_length0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_cbore_wall]" id="box_cbore_wall0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_f_repair]" id="box_f_repair0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_reface]" id="box_reface0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_hardbanding]" id="box_hardbanding0" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[0][box_condition]" id="box_condition0" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[1][serial]" id="serial1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][slot]" id="slot1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_wt]" id="pipe_wt1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_od]" id="pipe_od1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_emi]" id="pipe_emi1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_eai]" id="pipe_eai1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_utea]" id="pipe_utea1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_corr_in]" id="pipe_corr_in1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_corr_ext]" id="pipe_corr_ext1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_ipc]" id="pipe_ipc1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pipe_bent]" id="pipe_bent1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_od]" id="pin_od1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_id]" id="pin_id1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_tong_space]" id="pin_tong_space1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_bevel]" id="pin_bevel1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_seal]" id="pin_seal1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_length]" id="pin_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_neck]" id="pin_neck1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_cyl]" id="pin_cyl1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_nose]" id="pin_nose1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_lead]" id="pin_lead1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_f_repair]" id="pin_f_repair1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_reface]" id="pin_reface1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_hardbanding]" id="pin_hardbanding1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][pin_condition]" id="pin_condition1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_od]" id="box_od1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_tong_space]" id="box_tong_space1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_bevel]" id="box_bevel1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_seal]" id="box_seal1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_shldr]" id="box_shldr1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_length]" id="box_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_cbore_dia]" id="box_cbore_dia1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_cbore_length]" id="box_cbore_length1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_cbore_wall]" id="box_cbore_wall1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_f_repair]" id="box_f_repair1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_reface]" id="box_reface1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_hardbanding]" id="box_hardbanding1" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[1][box_condition]" id="box_condition1" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[2][serial]" id="serial2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][slot]" id="slot2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_wt]" id="pipe_wt2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_od]" id="pipe_od2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_emi]" id="pipe_emi2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_eai]" id="pipe_eai2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_utea]" id="pipe_utea2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_corr_in]" id="pipe_corr_in2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_corr_ext]" id="pipe_corr_ext2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_ipc]" id="pipe_ipc2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pipe_bent]" id="pipe_bent2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_od]" id="pin_od2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_id]" id="pin_id2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_tong_space]" id="pin_tong_space2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_bevel]" id="pin_bevel2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_seal]" id="pin_seal2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_length]" id="pin_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_neck]" id="pin_neck2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_cyl]" id="pin_cyl2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_nose]" id="pin_nose2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_lead]" id="pin_lead2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_f_repair]" id="pin_f_repair2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_reface]" id="pin_reface2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_hardbanding]" id="pin_hardbanding2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][pin_condition]" id="pin_condition2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_od]" id="box_od2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_tong_space]" id="box_tong_space2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_bevel]" id="box_bevel2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_seal]" id="box_seal2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_shldr]" id="box_shldr2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_length]" id="box_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_cbore_dia]" id="box_cbore_dia2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_cbore_length]" id="box_cbore_length2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_cbore_wall]" id="box_cbore_wall2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_f_repair]" id="box_f_repair2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_reface]" id="box_reface2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_hardbanding]" id="box_hardbanding2" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[2][box_condition]" id="box_condition2" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[3][serial]" id="serial3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][slot]" id="slot3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_wt]" id="pipe_wt3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_od]" id="pipe_od3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_emi]" id="pipe_emi3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_eai]" id="pipe_eai3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_utea]" id="pipe_utea3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_corr_in]" id="pipe_corr_in3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_corr_ext]" id="pipe_corr_ext3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_ipc]" id="pipe_ipc3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pipe_bent]" id="pipe_bent3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_od]" id="pin_od3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_id]" id="pin_id3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_tong_space]" id="pin_tong_space3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_bevel]" id="pin_bevel3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_seal]" id="pin_seal3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_length]" id="pin_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_neck]" id="pin_neck3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_cyl]" id="pin_cyl3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_nose]" id="pin_nose3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_lead]" id="pin_lead3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_f_repair]" id="pin_f_repair3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_reface]" id="pin_reface3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_hardbanding]" id="pin_hardbanding3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][pin_condition]" id="pin_condition3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_od]" id="box_od3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_tong_space]" id="box_tong_space3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_bevel]" id="box_bevel3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_seal]" id="box_seal3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_shldr]" id="box_shldr3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_length]" id="box_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_cbore_dia]" id="box_cbore_dia3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_cbore_length]" id="box_cbore_length3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_cbore_wall]" id="box_cbore_wall3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_f_repair]" id="box_f_repair3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_reface]" id="box_reface3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_hardbanding]" id="box_hardbanding3" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[3][box_condition]" id="box_condition3" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[4][serial]" id="serial4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][slot]" id="slot4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_wt]" id="pipe_wt4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_od]" id="pipe_od4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_emi]" id="pipe_emi4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_eai]" id="pipe_eai4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_utea]" id="pipe_utea4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_corr_in]" id="pipe_corr_in4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_corr_ext]" id="pipe_corr_ext4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_ipc]" id="pipe_ipc4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pipe_bent]" id="pipe_bent4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_od]" id="pin_od4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_id]" id="pin_id4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_tong_space]" id="pin_tong_space4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_bevel]" id="pin_bevel4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_seal]" id="pin_seal4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_length]" id="pin_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_neck]" id="pin_neck4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_cyl]" id="pin_cyl4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_nose]" id="pin_nose4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_lead]" id="pin_lead4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_f_repair]" id="pin_f_repair4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_reface]" id="pin_reface4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_hardbanding]" id="pin_hardbanding4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][pin_condition]" id="pin_condition4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_od]" id="box_od4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_tong_space]" id="box_tong_space4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_bevel]" id="box_bevel4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_seal]" id="box_seal4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_shldr]" id="box_shldr4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_length]" id="box_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_cbore_dia]" id="box_cbore_dia4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_cbore_length]" id="box_cbore_length4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_cbore_wall]" id="box_cbore_wall4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_f_repair]" id="box_f_repair4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_reface]" id="box_reface4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_hardbanding]" id="box_hardbanding4" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[4][box_condition]" id="box_condition4" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[5][serial]" id="serial5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][slot]" id="slot5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_wt]" id="pipe_wt5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_od]" id="pipe_od5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_emi]" id="pipe_emi5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_eai]" id="pipe_eai5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_utea]" id="pipe_utea5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_corr_in]" id="pipe_corr_in5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_corr_ext]" id="pipe_corr_ext5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_ipc]" id="pipe_ipc5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pipe_bent]" id="pipe_bent5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_od]" id="pin_od5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_id]" id="pin_id5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_tong_space]" id="pin_tong_space5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_bevel]" id="pin_bevel5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_seal]" id="pin_seal5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_length]" id="pin_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_neck]" id="pin_neck5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_cyl]" id="pin_cyl5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_nose]" id="pin_nose5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_lead]" id="pin_lead5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_f_repair]" id="pin_f_repair5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_reface]" id="pin_reface5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_hardbanding]" id="pin_hardbanding5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][pin_condition]" id="pin_condition5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_od]" id="box_od5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_tong_space]" id="box_tong_space5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_bevel]" id="box_bevel5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_seal]" id="box_seal5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_shldr]" id="box_shldr5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_length]" id="box_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_cbore_dia]" id="box_cbore_dia5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_cbore_length]" id="box_cbore_length5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_cbore_wall]" id="box_cbore_wall5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_f_repair]" id="box_f_repair5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_reface]" id="box_reface5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_hardbanding]" id="box_hardbanding5" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[5][box_condition]" id="box_condition5" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[6][serial]" id="serial6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][slot]" id="slot6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_wt]" id="pipe_wt6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_od]" id="pipe_od6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_emi]" id="pipe_emi6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_eai]" id="pipe_eai6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_utea]" id="pipe_utea6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_corr_in]" id="pipe_corr_in6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_corr_ext]" id="pipe_corr_ext6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_ipc]" id="pipe_ipc6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pipe_bent]" id="pipe_bent6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_od]" id="pin_od6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_id]" id="pin_id6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_tong_space]" id="pin_tong_space6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_bevel]" id="pin_bevel6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_seal]" id="pin_seal6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_length]" id="pin_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_neck]" id="pin_neck6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_cyl]" id="pin_cyl6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_nose]" id="pin_nose6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_lead]" id="pin_lead6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_f_repair]" id="pin_f_repair6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_reface]" id="pin_reface6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_hardbanding]" id="pin_hardbanding6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][pin_condition]" id="pin_condition6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_od]" id="box_od6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_tong_space]" id="box_tong_space6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_bevel]" id="box_bevel6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_seal]" id="box_seal6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_shldr]" id="box_shldr6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_length]" id="box_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_cbore_dia]" id="box_cbore_dia6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_cbore_length]" id="box_cbore_length6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_cbore_wall]" id="box_cbore_wall6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_f_repair]" id="box_f_repair6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_reface]" id="box_reface6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_hardbanding]" id="box_hardbanding6" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[6][box_condition]" id="box_condition6" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[7][serial]" id="serial7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][slot]" id="slot7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_wt]" id="pipe_wt7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_od]" id="pipe_od7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_emi]" id="pipe_emi7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_eai]" id="pipe_eai7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_utea]" id="pipe_utea7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_corr_in]" id="pipe_corr_in7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_corr_ext]" id="pipe_corr_ext7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_ipc]" id="pipe_ipc7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pipe_bent]" id="pipe_bent7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_od]" id="pin_od7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_id]" id="pin_id7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_tong_space]" id="pin_tong_space7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_bevel]" id="pin_bevel7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_seal]" id="pin_seal7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_length]" id="pin_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_neck]" id="pin_neck7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_cyl]" id="pin_cyl7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_nose]" id="pin_nose7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_lead]" id="pin_lead7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_f_repair]" id="pin_f_repair7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_reface]" id="pin_reface7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_hardbanding]" id="pin_hardbanding7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][pin_condition]" id="pin_condition7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_od]" id="box_od7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_tong_space]" id="box_tong_space7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_bevel]" id="box_bevel7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_seal]" id="box_seal7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_shldr]" id="box_shldr7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_length]" id="box_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_cbore_dia]" id="box_cbore_dia7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_cbore_length]" id="box_cbore_length7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_cbore_wall]" id="box_cbore_wall7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_f_repair]" id="box_f_repair7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_reface]" id="box_reface7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_hardbanding]" id="box_hardbanding7" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[7][box_condition]" id="box_condition7" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[8][serial]" id="serial8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][slot]" id="slot8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_wt]" id="pipe_wt8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_od]" id="pipe_od8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_emi]" id="pipe_emi8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_eai]" id="pipe_eai8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_utea]" id="pipe_utea8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_corr_in]" id="pipe_corr_in8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_corr_ext]" id="pipe_corr_ext8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_ipc]" id="pipe_ipc8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pipe_bent]" id="pipe_bent8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_od]" id="pin_od8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_id]" id="pin_id8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_tong_space]" id="pin_tong_space8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_bevel]" id="pin_bevel8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_seal]" id="pin_seal8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_length]" id="pin_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_neck]" id="pin_neck8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_cyl]" id="pin_cyl8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_nose]" id="pin_nose8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_lead]" id="pin_lead8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_f_repair]" id="pin_f_repair8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_reface]" id="pin_reface8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_hardbanding]" id="pin_hardbanding8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][pin_condition]" id="pin_condition8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_od]" id="box_od8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_tong_space]" id="box_tong_space8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_bevel]" id="box_bevel8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_seal]" id="box_seal8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_shldr]" id="box_shldr8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_length]" id="box_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_cbore_dia]" id="box_cbore_dia8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_cbore_length]" id="box_cbore_length8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_cbore_wall]" id="box_cbore_wall8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_f_repair]" id="box_f_repair8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_reface]" id="box_reface8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_hardbanding]" id="box_hardbanding8" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[8][box_condition]" id="box_condition8" placeholder="----------" /></td>
            </tr>

            <tr>
                <td><x-default.input type="text" class="w-auto" name="desc[9][serial]" id="serial9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][slot]" id="slot9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_wt]" id="pipe_wt9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_od]" id="pipe_od9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_emi]" id="pipe_emi9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_eai]" id="pipe_eai9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_utea]" id="pipe_utea9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_corr_in]" id="pipe_corr_in9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_corr_ext]" id="pipe_corr_ext9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_ipc]" id="pipe_ipc9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pipe_bent]" id="pipe_bent9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_od]" id="pin_od9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_id]" id="pin_id9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_tong_space]" id="pin_tong_space9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_bevel]" id="pin_bevel9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_seal]" id="pin_seal9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_length]" id="pin_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_neck]" id="pin_neck9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_cyl]" id="pin_cyl9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_nose]" id="pin_nose9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_lead]" id="pin_lead9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_f_repair]" id="pin_f_repair9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_reface]" id="pin_reface9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_hardbanding]" id="pin_hardbanding9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][pin_condition]" id="pin_condition9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_od]" id="box_od9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_tong_space]" id="box_tong_space9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_bevel]" id="box_bevel9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_seal]" id="box_seal9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_shldr]" id="box_shldr9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_length]" id="box_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_cbore_dia]" id="box_cbore_dia9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_cbore_length]" id="box_cbore_length9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_cbore_wall]" id="box_cbore_wall9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_f_repair]" id="box_f_repair9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_reface]" id="box_reface9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_hardbanding]" id="box_hardbanding9" placeholder="----------" /></td>
                <td><x-default.input type="text" class="w-auto" name="desc[9][box_condition]" id="box_condition9" placeholder="----------" /></td>
            </tr>
        </tbody>
    </table>
</div>

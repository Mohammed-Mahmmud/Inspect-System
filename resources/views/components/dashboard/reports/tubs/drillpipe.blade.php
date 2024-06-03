 <div>
     <table class="contentTable">
         <thead>
             <tr>
                 <th colspan="8">{{ TranslationHelper::translate(ucwords('drill pipe details')) }}</th>
             </tr>
         </thead>
         <tbody>
             <tr>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsGrade"
                         value="{{ TranslationHelper::translate(ucwords('grade')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[grade]" id="drill_pipe_detailsGrade"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['grade']) ? getDeCode($tubs->drill_pipe_details)['grade'] : null }}" />
                 </td>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsRange"
                         value="{{ TranslationHelper::translate(ucwords('range')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[range]" id="drill_pipe_detailsRange"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['range']) ? getDeCode($tubs->drill_pipe_details)['range'] : null }}" />
                 </td>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsWeight"
                         value="{{ TranslationHelper::translate(ucwords('weight')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[weight]" id="drill_pipe_detailsWeight"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['weight']) ? getDeCode($tubs->drill_pipe_details)['weight'] : null }}" />
                 </td>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsNomWt"
                         value="{{ TranslationHelper::translate(ucwords('nom w.t')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[wt]" id="drill_pipe_detailsNomWt"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['wt']) ? getDeCode($tubs->drill_pipe_details)['wt'] : null }}" />
                 </td>
             </tr>
             <tr>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsOd"
                         value="{{ TranslationHelper::translate(ucwords('od')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[od]" id="drill_pipe_detailsOd"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['od']) ? getDeCode($tubs->drill_pipe_details)['od'] : null }}" />
                 </td>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsId"
                         value="{{ TranslationHelper::translate(ucwords('id')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[id]" id="drill_pipe_detailsId"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['id']) ? getDeCode($tubs->drill_pipe_details)['id'] : null }}" />
                 </td>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsJointOd"
                         value="{{ TranslationHelper::translate(ucwords('t/joint od')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[t]" id="drill_pipe_detailsJointOd"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['joint_od']) ? getDeCode($tubs->drill_pipe_details)['joint_od'] : null }}" />
                 </td>
                 <th>
                     <x-default.input-label for="drill_pipe_detailsConn"
                         value="{{ TranslationHelper::translate(ucwords('connection')) }}"></x-default.input-label>
                 </th>
                 <td>
                     <x-default.input value="drill_pipe_details" type="text" class="form-control hidden"
                         name="drill_pipe_details[connection]" id="drill_pipe_detailsConn"
                         placeholder="----------------------------------"
                         value="{{ isset(getDeCode($tubs->drill_pipe_details)['connection']) ? getDeCode($tubs->drill_pipe_details)['connection'] : null }}" />
                 </td>
             </tr>
         </tbody>
     </table>
 </div>
 <div class="table-responsive">
     <table class ="table-sm reportTable">
         <thead>
             <tr>
                 <th class="text-center" rowspan="3">{{ TranslationHelper::translate(ucwords('serial')) }}</th>
                 <th class="text-center" rowspan="3">{{ TranslationHelper::translate(ucwords('mill slot no')) }}
                 </th>
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
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('id min')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('tong space min')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('seal width min')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('pin length max')) }}
                 </th>
                 <th class="text-center" rowspan="2">
                     {{ TranslationHelper::translate(ucwords('neck length max')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('cyl dia max')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('nose dia max')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('pin lead +/-')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('hard banding')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('tong space min')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('seal width min')) }}
                 </th>
                 <th class="text-center" rowspan="2">
                     {{ TranslationHelper::translate(ucwords('shldr width min')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('box length min')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('c/bore dia max')) }}
                 </th>
                 <th class="text-center" rowspan="2">
                     {{ TranslationHelper::translate(ucwords('c/bore length min')) }}
                 </th>
                 <th class="text-center" rowspan="2">
                     {{ TranslationHelper::translate(ucwords('c/bore wall min')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('hard banding')) }}
                 </th>
                 <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
             </tr>
             <tr>
                 <th class="text-center">{{ TranslationHelper::translate(ucwords('in')) }}</th>
                 <th class="text-center">{{ TranslationHelper::translate(ucwords('ext')) }}</th>
             </tr>
         </thead>
         <tbody>
             @for ($i = 0; $i < $count; $i++)
                 <tr>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['serial'] : '' }}"
                             name="desc[{{ $i }}][serial]" id="serial{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slot'] : '' }}"
                             name="desc[{{ $i }}][slot]" id="slot{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_wt'] : '' }}"
                             name="desc[{{ $i }}][pipe_wt]" id="pipe_wt{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_od'] : '' }}"
                             name="desc[{{ $i }}][pipe_od]" id="pipe_od{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_emi'] : '' }}"
                             name="desc[{{ $i }}][pipe_emi]" id="pipe_emi{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_eai'] : '' }}"
                             name="desc[{{ $i }}][pipe_eai]" id="pipe_eai{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_utea'] : '' }}"
                             name="desc[{{ $i }}][pipe_utea]" id="pipe_utea{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_corr_in'] : '' }}"
                             name="desc[{{ $i }}][pipe_corr_in]" id="pipe_corr_in{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_corr_ext'] : '' }}"
                             name="desc[{{ $i }}][pipe_corr_ext]" id="pipe_corr_ext{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_ipc'] : '' }}"
                             name="desc[{{ $i }}][pipe_ipc]" id="pipe_ipc{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_bent'] : '' }}"
                             name="desc[{{ $i }}][pipe_bent]" id="pipe_bent{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_od'] : '' }}"
                             name="desc[{{ $i }}][pin_od]" id="pin_od{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_id'] : '' }}"
                             name="desc[{{ $i }}][pin_id]" id="pin_id{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_tong_space'] : '' }}"
                             name="desc[{{ $i }}][pin_tong_space]"
                             id="pin_tong_space{{ $i }}" placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_bevel'] : '' }}"
                             name="desc[{{ $i }}][pin_bevel]" id="pin_bevel{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_seal'] : '' }}"
                             name="desc[{{ $i }}][pin_seal]" id="pin_seal{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_length'] : '' }}"
                             name="desc[{{ $i }}][pin_length]" id="pin_length{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_neck'] : '' }}"
                             name="desc[{{ $i }}][pin_neck]" id="pin_neck{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_cyl'] : '' }}"
                             name="desc[{{ $i }}][pin_cyl]" id="pin_cyl{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_nose'] : '' }}"
                             name="desc[{{ $i }}][pin_nose]" id="pin_nose{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_lead'] : '' }}"
                             name="desc[{{ $i }}][pin_lead]" id="pin_lead{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_f_repair'] : '' }}"
                             name="desc[{{ $i }}][pin_f_repair]" id="pin_f_repair{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_reface'] : '' }}"
                             name="desc[{{ $i }}][pin_reface]" id="pin_reface{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_hardbanding'] : '' }}"
                             name="desc[{{ $i }}][pin_hardbanding]"
                             id="pin_hardbanding{{ $i }}" placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_condition'] : '' }}"
                             name="desc[{{ $i }}][pin_condition]" id="pin_condition{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_od'] : '' }}"
                             name="desc[{{ $i }}][box_od]" id="box_od{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_tong_space'] : '' }}"
                             name="desc[{{ $i }}][box_tong_space]"
                             id="box_tong_space{{ $i }}" placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bevel'] : '' }}"
                             name="desc[{{ $i }}][box_bevel]" id="box_bevel{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_seal'] : '' }}"
                             name="desc[{{ $i }}][box_seal]" id="box_seal{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_shldr'] : '' }}"
                             name="desc[{{ $i }}][box_shldr]" id="box_shldr{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_length'] : '' }}"
                             name="desc[{{ $i }}][box_length]" id="box_length{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_dia'] : '' }}"
                             name="desc[{{ $i }}][box_cbore_dia]" id="box_cbore_dia{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_length'] : '' }}"
                             name="desc[{{ $i }}][box_cbore_length]"
                             id="box_cbore_length{{ $i }}" placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_wall'] : '' }}"
                             name="desc[{{ $i }}][box_cbore_wall]"
                             id="box_cbore_wall{{ $i }}" placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_f_repair'] : '' }}"
                             name="desc[{{ $i }}][box_f_repair]" id="box_f_repair{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_reface'] : '' }}"
                             name="desc[{{ $i }}][box_reface]" id="box_reface{{ $i }}"
                             placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_hardbanding'] : '' }}"
                             name="desc[{{ $i }}][box_hardbanding]"
                             id="box_hardbanding{{ $i }}" placeholder="----------" /></td>
                     <td><x-default.input type="text" class="w-auto"
                             value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_condition'] : '' }}"
                             name="desc[{{ $i }}][box_condition]" id="box_condition{{ $i }}"
                             placeholder="----------" /></td>
                 </tr>
             @endfor
         </tbody>
     </table>
 </div>

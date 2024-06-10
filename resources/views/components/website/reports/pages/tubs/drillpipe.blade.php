<table class="contentTable">
    <tbody>
        <tr>
            <th class='center' rowspan='2' style="width: 18%">
                {{ TranslationHelper::translate(ucwords('drill pipe details')) }}
            </th>
            <th>
                {{ TranslationHelper::translate(ucwords('grade')) }}
            </th>

            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['grade']) ? getDeCode($tubs->drill_pipe_details)['grade'] : null }}
            </td>

            <th>{{ TranslationHelper::translate(ucwords('range')) }}
            </th>

            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['range']) ? getDeCode($tubs->drill_pipe_details)['range'] : null }}
            </td>

            <th>{{ TranslationHelper::translate(ucwords('weight')) }}
            </th>
            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['weight']) ? getDeCode($tubs->drill_pipe_details)['weight'] : null }}
            </td>
            <th>{{ TranslationHelper::translate(ucwords('nom w.t')) }}
            </th>
            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['wt']) ? getDeCode($tubs->drill_pipe_details)['wt'] : null }}
            </td>
        </tr>
        <tr>
            <th>{{ TranslationHelper::translate(ucwords('od')) }}
            </th>

            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['od']) ? getDeCode($tubs->drill_pipe_details)['od'] : null }}
            </td>

            <th>{{ TranslationHelper::translate(ucwords('id')) }}
            </th>
            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['id']) ? getDeCode($tubs->drill_pipe_details)['id'] : null }}
            </td>
            <th>{{ TranslationHelper::translate(ucwords('t/joint od')) }}
            </th>
            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['joint_od']) ? getDeCode($tubs->drill_pipe_details)['joint_od'] : null }}
            </td>
            <th>{{ TranslationHelper::translate(ucwords('connection')) }}
            </th>
            <td>{{ isset(getDeCode($tubs->drill_pipe_details)['connection']) ? getDeCode($tubs->drill_pipe_details)['connection'] : null }}
            </td>
        </tr>
    </tbody>
</table>
<div class="table-responsive">
    <table class ="table-sm reportTable">
        <thead>
            <tr>
                <th class="center" rowspan="3">{{ TranslationHelper::translate(ucwords('serial')) }}</th>
                <th class="center" rowspan="3">{{ TranslationHelper::translate(ucwords('mill slot no')) }}</th>
                <th class="center" colspan="8">{{ TranslationHelper::translate(ucwords('pipe body')) }}</th>
                <th class="center" colspan="15">{{ TranslationHelper::translate(ucwords('pin')) }}</th>
                <th class="center" colspan="13">{{ TranslationHelper::translate(ucwords('box')) }}</th>
            </tr>
            <tr>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('min w.t')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('od wear')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('emi')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('eai')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('utea')) }}</th>
                <th class="center" colspan="2">{{ TranslationHelper::translate(ucwords('corr')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('ipc')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('bent')) }}</th>

                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('id min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('pin length max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('neck length max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('cyl dia max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('nose dia max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('pin lead +/-')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('hard banding')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('shldr width min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('box length min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('c/bore dia max')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('c/bore length min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('c/bore wall min')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('hard banding')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
            </tr>
            <tr>
                <th class="center">{{ TranslationHelper::translate(ucwords('in')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('ext')) }}</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['serial'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slot'] : '' }}</td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_wt'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_od'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_emi'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_eai'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_utea'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_corr_in'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_corr_ext'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_ipc'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pipe_bent'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_od'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_id'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_tong_space'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_bevel'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_seal'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_neck'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_cyl'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_nose'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_lead'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_f_repair'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_reface'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_hardbanding'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_condition'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_od'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_tong_space'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bevel'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_seal'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_shldr'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_dia'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_wall'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_f_repair'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_reface'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_hardbanding'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_condition'] : '' }}
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

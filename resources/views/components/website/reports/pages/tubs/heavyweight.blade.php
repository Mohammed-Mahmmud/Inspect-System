<div class="table-responsive">
    <table class ="table-sm reportTable">
        <thead>
            <tr>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('serial')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('mill slot no')) }}</th>
                <th class="center" colspan="11">
                    {{ TranslationHelper::translate(ucwords('pin conn :')) }}
                    {{ $tubs->pin_conn ?? '' }}
                </th>
                <th class="center" colspan="12">
                    {{ TranslationHelper::translate(ucwords('box conn :')) }}
                    {{ $tubs->box_conn ?? '' }}
                </th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('upset area mpi')) }}
                </th>
                <th class="center" colspan="3">{{ TranslationHelper::translate(ucwords('hard banding')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('overall leng')) }}</th>
                <th class="center" rowspan="2">{{ TranslationHelper::translate(ucwords('bent')) }}</th>
            </tr>
            <tr>
                <th class="center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('id min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('pin length max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('srg length max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('srg dia max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('box length max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('c/bore dia max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('c/bore length max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('b/back length max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('b/back dia max')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('pin')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('middle')) }}</th>
                <th class="center">{{ TranslationHelper::translate(ucwords('box')) }}</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 10; $i++)
                <tr>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['serial'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slot'] : '' }}</td>
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
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_dia'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_f_repair'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_reface'] : '' }}
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
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_dia'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_dia'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_f_repair'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_reface'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_condition'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['upset_mpi'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['banding_pin'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['banding_middle'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['banding_box'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['overall_length'] : '' }}
                    </td>
                    <td>{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['bent'] : '' }}
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
</div>

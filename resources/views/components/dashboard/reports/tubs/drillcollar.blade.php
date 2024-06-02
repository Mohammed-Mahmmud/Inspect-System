<div class="table-responsive">
    <table class ="table-sm reportTable">
        <thead>
            <tr>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('serial')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('mill slot no')) }}</th>
                <th class="text-center" colspan="12">
                    {{ TranslationHelper::translate(ucwords('pin conn')) }}
                    <x-default.input class="hidden" type="text" name="pin_conn" value="{{ $tubs->pin_conn ?? '' }}"
                        placeholder="--------------------------------------" />
                </th>
                <th class="text-center" colspan="13">
                    {{ TranslationHelper::translate(ucwords('box conn')) }}
                    <x-default.input class="hidden" type="text" value="{{ $tubs->box_conn ?? '' }}" name="box_conn"
                        placeholder="--------------------------------------" />
                </th>
                <th class="text-center" rowspan="2">
                    {{ TranslationHelper::translate(ucwords('slip/elevator groove')) }}</th>
                <th class="text-center" rowspan="2">{{ TranslationHelper::translate(ucwords('overall leng')) }}</th>
            </tr>
            <tr>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('id min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('pin length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('neck length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('srg length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('srg dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('od min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('tong space min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('bevel dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('seal width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('shldr width min')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('box length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('c/bore length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('b/back length max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('b/back dia max')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('f.repair')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('reface')) }}</th>
                <th class="text-center">{{ TranslationHelper::translate(ucwords('condition')) }}</th>

            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < $count; $i++)
                <tr>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['serial'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][serial]"
                            id="serial{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slot'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][slot]"
                            id="slot{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_od'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_od]"
                            id="pin_od{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_id'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_id]"
                            id="pin_id{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_tong_space'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_tong_space]"
                            id="pin_tong_space{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_bevel'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_bevel]"
                            id="pin_bevel{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_seal'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_seal]"
                            id="pin_seal{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_length'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_length]"
                            id="pin_length{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_neck'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_neck]"
                            id="pin_neck{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_length'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_srg_length]"
                            id="pin_srg_length{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_srg_dia'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_srg_dia]"
                            id="pin_srg_dia{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_f_repair'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_f_repair]"
                            id="pin_f_repair{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_reface'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_reface]"
                            id="pin_reface{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['pin_condition'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][pin_condition]"
                            id="pin_condition{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_od'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_od]"
                            id="box_od{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_tong_space'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_tong_space]"
                            id="box_tong_space{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bevel'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_bevel]"
                            id="box_bevel{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_seal'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_seal]"
                            id="box_seal{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_shldr'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_shldr]"
                            id="box_shldr{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_length'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_length]"
                            id="box_length{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_dia'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_cbore_dia]"
                            id="box_cbore_dia{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_cbore_length'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_cbore_length]"
                            id="box_cbore_length{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_length'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_bback_length]"
                            id="box_bback_length{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_bback_dia'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_bback_dia]"
                            id="box_bback_dia{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_f_repair'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_f_repair]"
                            id="box_f_repair{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_reface'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_reface]"
                            id="box_reface{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['box_condition'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][box_condition]"
                            id="box_condition{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['slip_groove'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][slip_groove]"
                            id="slip_groove{{ $i }}" placeholder="----------" /></td>
                    <td><x-default.input
                            value="{{ isset($tubs->getDesc[$i]) ? getDeCode($tubs->getDesc[$i]->description)['overall_length'] : '' }}"
                            type="text" class="w-auto" name="desc[{{ $i }}][overall_length]"
                            id="overall_length{{ $i }}" placeholder="----------" /></td>
                </tr>
            @endfor

        </tbody>
    </table>
</div>

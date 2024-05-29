<!-- Rounded Ribbon -->
<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="card-body">
        <div class="ribbon-content mt-4 text-muted">
            <x-dashboard.reports.layouts.header  reportTitle="{{ ucwords('tubular inspection system') }}"/>
                <div class="center">
    <b>{{strtoupper($examType).ucwords(" subs Inspection Reports")}}</b><br>
    <img src="{{asset('dashboard/pages/tublar/tubs/'.$examType.'.png') }}">
</div>
<table class="contentTable">
<tbody>
<tr>
    <th><x-default.input-label for="customer" value="{{ TranslationHelper::translate(ucwords('customer')) }}"></x-default.input-label></th>
    <td><x-default.input type="text" class="form-control hidden" name="customer" id="customer"  placeholder="----------------------------------"/></td>

    <th><x-default.input-label for="order" value="{{ TranslationHelper::translate(ucwords('Purchase Order No')) }}"></x-default.input-label></th>
    <td><x-default.input type="text" class="form-control hidden" name="order" id="order"  placeholder="----------------------------------"/></td>

    <th><x-default.input-label for="date" value="{{ TranslationHelper::translate(ucwords('Date of Insp')) }}"></x-default.input-label></th>
    <td><x-default.input type="date" class="form-control hidden" name="date" id="date"/></td>
</tr>
<tr>
    <th><x-default.input-label for="location" value="{{ TranslationHelper::translate(ucwords('Insp Location')) }}"></x-default.input-label></th>
    <td><x-default.input type="text" class="form-control hidden" name="location" id="location" placeholder="----------------------------------"/></td>

    <th><x-default.input-label for="order_id" value="{{ TranslationHelper::translate(ucwords('Job Ticket No')) }}"></x-default.input-label></th>
   <td colspan="3"><x-default.dropdown class="form-control hidden" label="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" name="order_id" id="order_id" disabledOption="{{ ucwords('Job Ticket Numbers') }}" :data="$orders" selectedData="{{ optional($tubs->getOrders)->id }}" span="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" />
    </td>
</tr>
</tbody>
</table>
<div class="row">
    <div class="col-9">
        <table class="contentTable">
            <thead>
                <tr>
                    <th colspan="4" class="center">{{ TranslationHelper::translate(ucwords('inspection method')) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>{{ TranslationHelper::translate(ucwords('magnetizing')) }}</th>
                    <td>
                         <x-default.input type="checkbox" name="magnetizing[ac_yoke]" id="ac_yoke"/>
                         <x-default.input-label for="ac_yoke" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('ac yoke')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="magnetizing[permanent]" id="permanent"/>
                         <x-default.input-label for="permanent" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('permanent')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="magnetizing[dc_coil]" id="dc_coil"/>
                         <x-default.input-label for="dc_coil" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('dc coil')) }}"></x-default.input-label>

                         @if($examType == 'drillpipe')
                          <x-default.input type="checkbox" name="magnetizing[emi]" id="emi"/>
                         <x-default.input-label for="emi" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('emi')) }}"></x-default.input-label>
                         @endif
                    </td>

                    <th>{{ TranslationHelper::translate(ucwords('magnetic particles')) }}</th>
                    <td>
                         <x-default.input type="checkbox" name="magnetic_particles[dry]" id="dry"/>
                         <x-default.input-label style="padding-right: 5px" for="dry" value="{{ TranslationHelper::translate(ucwords('dry')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="magnetic_particles[wet]" id="wet"/>
                         <x-default.input-label for="wet" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('wet')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="magnetic_particles[visible]" id="visible"/>
                         <x-default.input-label for="visible" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('visible')) }}"></x-default.input-label>

                           <x-default.input type="checkbox" name="magnetic_particles[fluorescent]" id="fluorescent"/>
                         <x-default.input-label for="fluorescent" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('fluorescent')) }}"></x-default.input-label>
                    </td>
                </tr>
                 <tr>
                    <th>{{ TranslationHelper::translate(ucwords('other methods')) }}</th>
                    <td colspan="3">
                    <x-default.input type="checkbox" name="other_methods[eai]" id="eai"/>
                    <x-default.input-label style="padding-right: 5px" for="eai" value="{{ TranslationHelper::translate(StrToUpper('eai')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="other_methods[vti]" id="vti"/>
                    <x-default.input-label for="vti" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('vti')) }}"></x-default.input-label>

                    @if($examType == 'drillpipe')
                      <x-default.input type="checkbox" name="other_methods[wt]" id="wt"/>
                    <x-default.input-label for="wt" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('wt')) }}"></x-default.input-label>
                    @endif

                    <x-default.input type="checkbox" name="other_methods[tgi]" id="tgi"/>
                    <x-default.input-label for="tgi" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('tgi')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="method_other" id="method_other"/>
                    <x-default.input-label for="method_other" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucfirst('other')) }}"></x-default.input-label>
                    <x-default.input style="width: 400px" class="hidden" type="text" name="other_methods[other]"  placeholder="----------------------------------"/>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-3">
        <table class="contentTable">
            <thead>
                <tr>
                    <th colspan="2" class="center">{{ TranslationHelper::translate(ucwords('specification')) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2">
                    <x-default.input type="checkbox" name="specification[api]" id="api"/>
                    <x-default.input-label style="padding-right: 5px" for="api" value="{{ TranslationHelper::translate(StrToUpper('api')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="specification[dsi]" id="dsi"/>
                    <x-default.input-label for="dsi" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('dsi')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="spec_other" id="spec_other"/>
                    <x-default.input-label for="spec_other" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucfirst('other')) }}"></x-default.input-label>
                    <x-default.input  type="text" style="width: 100%" name="specification[other]"  placeholder="--------------------------------------"/>
                    </td>
                </tr>
                <tr>
            <th><x-default.input-label for="edition" value="{{ TranslationHelper::translate(ucwords('edition')) }}"></x-default.input-label></th>
            <td><x-default.input type="text" class="hidden" style="width:200 " name="specification[edition]" id="edition" placeholder="--------------------------------------"/></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-9">
        <table class="contentTable ">
            <thead>
                <tr>
                    <th class="center" colspan="{{ $examType == 'drillpipe' ? 8 : 6 }}">{{ TranslationHelper::translate(ucwords('equipment used')) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equipment[equip_ac_yoke]" id="equip_ac_yoke"/>
                        <x-default.input-label for="equip_ac_yoke" value="{{ TranslationHelper::translate(ucwords('ac yoke')) }}"></x-default.input-label>
                    </td>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equipment[equip_dc_coil]" id="equip_dc_coil"/>
                        <x-default.input-label for="equip_dc_coil" value="{{ TranslationHelper::translate(ucwords('dc coil')) }}"></x-default.input-label>
                    </td>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equipment[equip_permanent_magnet]" id="equip_permanent_magnet"/>
                        <x-default.input-label for="equip_permanent_magnet" value="{{ TranslationHelper::translate(ucwords('permanent magnet')) }}"></x-default.input-label>
                    </td>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equipment[equip_uv_light]" id="equip_uv_light"/>
                        <x-default.input-label for="equip_uv_light" value="{{ TranslationHelper::translate(ucwords('uv light')) }}"></x-default.input-label>
                    </td>

                    @if ($examType == 'drillpipe')
                        <td class="center" style="width: auto;">
                            <x-default.input type="checkbox" name="equipment[equip_emi]" id="equip_emi"/>
                            <x-default.input-label for="equip_emi" value="{{ TranslationHelper::translate(ucwords('emi')) }}"></x-default.input-label>
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.input type="checkbox" name="equipment[equip_wt]" id="equip_wt"/>
                            <x-default.input-label for="equip_wt" value="{{ TranslationHelper::translate(ucwords('wt')) }}"></x-default.input-label>
                        </td>
                    @endif
                    <td colspan="2" style="width: auto;">
                        <x-default.input type="checkbox" name="equip_other" id="equip_other"/>
                        <x-default.input-label for="equip_other" value="{{ TranslationHelper::translate(ucfirst('other')) }}"></x-default.input-label>
                        <x-default.input type="text" class="hidden form-control"  placeholder="----------------------------------" name="equipment[other]"/>
                    </td>
                </tr>
                <tr>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[ac_ypke_serial]" placeholder="No.-------------------------" /></td>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[dc_coil_serial]" placeholder="No.-------------------------" /></td>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[permanent_magnet_serial]" placeholder="No.-------------------------" /></td>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[uv_light_serial]" placeholder="No.-------------------------" /></td>
                    @if($examType == 'drillpipe')
                        <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[emi_serial]" placeholder="No.-------------------------" /></td>
                        <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[wt_serial]" placeholder="No.-------------------------" /></td>
                    @endif
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="equipment[other_serial]" placeholder="No.-------------------------" /></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-3">
        <table class="contentTable ">
            <thead>
                <tr>
                    <th class="center">{{ TranslationHelper::translate(ucwords('Description of tool')) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <textarea class="hidden form-control" cols="" rows="4" name="tool_desc" placeholder="--------------------------------------">{{ $tubs->desc ?? '' }}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- description table--}}
@switch($examType)
    @case('heavyweight')
        <x-dashboard.reports.tubs.heavyweight/>
        @break
    @case('drillcollar')
        <x-dashboard.reports.tubs.drillcollar/>
        @break
    @default
        <x-dashboard.reports.tubs.drillpipe/>
@endswitch
{{-- end description table --}}

        <div class="row">
            <div class="{{ $examType !== 'drillpipe' ? 'col-6' : 'col-12' }}">
                <table class="contentTable">
                    <thead>
                        <tr>
                            <th class="center">
                                <x-default.input-label for="remarks" value="{{ TranslationHelper::translate(ucwords('remarks')) }}"></x-default.input-label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <textarea rows="3" class=" hidden form-control" name="remarks" id="remarks"  placeholder="--------------------------------------------------">{{ $tubs->remarks ?? '' }}</textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @unless ($examType == 'drillpipe')
            <div class="col-6">
                <table class="contentTable">
                    <thead>
                        <tr>
                            <th colspan="2">
                                <x-default.input-label for="total" value="{{ TranslationHelper::translate(ucwords('total connection inspected')) }}"></x-default.input-label>
                                <x-default.input type="text" class="hidden "  name="conn_inspected[total]" id="total"/>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <x-default.input-label for="accepted_conn" value="{{ TranslationHelper::translate(ucwords('connection accepted (white)')) }}"></x-default.input-label>
                            </td>
                            <td>
                            <x-default.input type="text" class="hidden w-50" name="conn_inspected[accepted]" id="accepted_conn"/>
                        {{ TranslationHelper::translate(ucwords('comns')) }}
                        </td>

                        </tr>
                        <tr>
                            <td>
                            <x-default.input-label for="defective_conn" value="{{ TranslationHelper::translate(ucwords('connection defective (red)')) }}"></x-default.input-label>
                            </td>
                            <td>
                            <x-default.input type="text" class="hidden w-50" style="color: red" name="conn_inspected[defected]" id="defective_conn"/>
                        {{ TranslationHelper::translate(ucwords('comns')) }}
                        </td>
                        </tr>
                        <tr>
                            <td>
                            <x-default.input-label for="repaired_conn" value="{{ TranslationHelper::translate(ucwords('connection repaired')) }}"></x-default.input-label>
                            </td>
                            <td>
                            <x-default.input type="text" class="hidden w-50" style="color: blue" name="conn_inspected[repaired]" id="repaired_conn"/>
                        {{ TranslationHelper::translate(ucwords('comns')) }}
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @endunless
        </div>


<table class="info-table1 frameless-table" style="height: 10px;">
    <tbody>
        <tr>
            {{-- operator  --}}
            <td style="width:auto; text-align:left">
                <div><b>{{ TranslationHelper::translate(ucwords('supervisor :')) }}</b><x-default.input type="text" class="hidden" name="supervisor" id="order"  placeholder="----------------------------------"/></div>
            </td>
            <td class="left">
                <b>{{ TranslationHelper::translate(ucwords('Inspector :')) }} </b>{{ Auth::user()->full_name }}
            </td>
        </tr>
    </tbody>
</table>

<table class="abb">
    <tbody>
        <tr>
            <td class="abb-tx">OD</td>
            <td abb-ty>Outside Diameter</td>
            <td class="abb-tx">SRG</td>
            <td abb-ty>Stress Relief Groove</td>
            <td class="abb-tx">TD</td>
            <td abb-ty>Thread Damage</td>
            <td class="abb-tx">GT</td>
            <td abb-ty>Galled Thread</td>
            <td class="abb-tx">OoT</td>
            <td abb-ty>Out Of Tolerance</td>
            <td class="abb-tx">OvT</td>
            <td abb-ty>Over Torque</td>

        </tr>
        <tr>
            <td class="abb-tx">ID</td>
            <td class="abb-ty">Inside Diameter</td>
            <td class="abb-tx">B/Back</td>
            <td class="abb-ty">Box Boreback Cyl.</td>
            <td class="abb-tx">SD</td>
            <td class="abb-ty">Shoulder Damage</td>
            <td class="abb-tx">Ecc</td>
            <td class="abb-ty">Eccentric Wear</td>
            <td class="abb-tx">Corr</td>
            <td class="abb-ty">Corrosion</td>
            <td class="abb-tx">P = Pass</td>
            <td class="abb-ty">F = Fail</td>

        </tr>
        {{-- <tr>
            <td class="abb-tx">SD</td>
            <td class="abb-ty">Seal Damaged</td>
            <td class="abb-tx">C</td>
            <td class="abb-ty">Top Neck Length</td>
            <td class="abb-tx">IC</td>
            <td class="abb-ty">Internal Corrosion</td>
            <td class="abb-tx">B'Back</td>
            <td class="abb-ty">Boreback</td>


        </tr>
        <tr>
            <td class="abb-tx">SD</td>
            <td class="abb-ty">Seal Damaged</td>
            <td class="abb-tx">C</td>
            <td class="abb-ty">Top Neck Length</td>
            <td class="abb-tx">IC</td>
            <td class="abb-ty">Internal Corrosion</td>
            <td class="abb-tx">B'Back</td>
            <td class="abb-ty">Boreback</td>
        </tr> --}}
    </tbody>
</table>
    <x-dashboard.reports.layouts.footer />
        </div>
    </div>
</div>

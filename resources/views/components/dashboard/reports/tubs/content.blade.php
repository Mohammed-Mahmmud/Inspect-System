<!-- Rounded Ribbon -->
<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="card-body">
        <div class="ribbon-content mt-4 text-muted">
            <x-dashboard.reports.layouts.header  reportTitle="{{ ucwords('tubular inspection system') }}"/>
                <div class="center">
    <b>{{strtoupper($examType).ucwords(" subs Inspection Reports")}}</b>
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
                         <x-default.input type="checkbox" name="ac_yoke" id="ac_yoke"/>
                         <x-default.input-label for="ac_yoke" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('ac yoke')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="permanent" id="permanent"/>
                         <x-default.input-label for="permanent" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('permanent')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="dc_coil" id="dc_coil"/>
                         <x-default.input-label for="dc_coil" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('dc coil')) }}"></x-default.input-label>

                         @if($examType == 'drillpipe')
                          <x-default.input type="checkbox" name="emi" id="emi"/>
                         <x-default.input-label for="emi" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('emi')) }}"></x-default.input-label>
                         @endif
                    </td>

                    <th>{{ TranslationHelper::translate(ucwords('magnetic particles')) }}</th>
                    <td>
                         <x-default.input type="checkbox" name="dry" id="dry"/>
                         <x-default.input-label style="padding-right: 5px" for="dry" value="{{ TranslationHelper::translate(ucwords('dry')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="wet" id="wet"/>
                         <x-default.input-label for="wet" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('wet')) }}"></x-default.input-label>

                         <x-default.input type="checkbox" name="magnetizing" id="visible"/>
                         <x-default.input-label for="visible" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('visible')) }}"></x-default.input-label>

                           <x-default.input type="checkbox" name="fluorescent" id="fluorescent"/>
                         <x-default.input-label for="fluorescent" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucwords('fluorescent')) }}"></x-default.input-label>
                    </td>
                </tr>
                 <tr>
                    <th>{{ TranslationHelper::translate(ucwords('other methods')) }}</th>
                    <td colspan="3">
                    <x-default.input type="checkbox" name="eai" id="eai"/>
                    <x-default.input-label style="padding-right: 5px" for="eai" value="{{ TranslationHelper::translate(StrToUpper('eai')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="vti" id="vti"/>
                    <x-default.input-label for="vti" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('vti')) }}"></x-default.input-label>

                    @if($examType == 'drillpipe')
                      <x-default.input type="checkbox" name="wt" id="wt"/>
                    <x-default.input-label for="wt" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('wt')) }}"></x-default.input-label>
                    @endif

                    <x-default.input type="checkbox" name="tgi" id="tgi"/>
                    <x-default.input-label for="tgi" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('tgi')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="method_other" id="method_other"/>
                    <x-default.input-label for="method_other" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucfirst('other')) }}"></x-default.input-label>
                    <x-default.input style="width: 400px" class="hidden" type="text" name="method_other"  placeholder="----------------------------------"/>
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
                    <x-default.input type="checkbox" name="api" id="api"/>
                    <x-default.input-label style="padding-right: 5px" for="api" value="{{ TranslationHelper::translate(StrToUpper('api')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="dsi" id="dsi"/>
                    <x-default.input-label for="dsi" style="padding-right: 5px" value="{{ TranslationHelper::translate(StrToUpper('dsi')) }}"></x-default.input-label>

                    <x-default.input type="checkbox" name="spec_other" id="spec_other"/>
                    <x-default.input-label for="spec_other" style="padding-right: 5px" value="{{ TranslationHelper::translate(ucfirst('other')) }}"></x-default.input-label>
                    <x-default.input  type="text" style="width: 100%" name="spec_other"  placeholder="--------------------------------------"/>
                    </td>
                </tr>
                <tr>
            <th><x-default.input-label for="edition" value="{{ TranslationHelper::translate(ucwords('edition')) }}"></x-default.input-label></th>
            <td><x-default.input type="text" class="hidden" style="width:200 " name="edition" id="edition" placeholder="--------------------------------------"/></td>
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
                        <x-default.input type="checkbox" name="equip_ac_yoke" id="equip_ac_yoke"/>
                        <x-default.input-label for="equip_ac_yoke" value="{{ TranslationHelper::translate(ucwords('ac yoke')) }}"></x-default.input-label>
                    </td>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equip_dc_coil" id="equip_dc_coil"/>
                        <x-default.input-label for="equip_dc_coil" value="{{ TranslationHelper::translate(ucwords('dc coil')) }}"></x-default.input-label>
                    </td>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equip_permanent_magnet" id="equip_permanent_magnet"/>
                        <x-default.input-label for="equip_permanent_magnet" value="{{ TranslationHelper::translate(ucwords('permanent magnet')) }}"></x-default.input-label>
                    </td>
                    <td class="center" style="width: auto;">
                        <x-default.input type="checkbox" name="equip_uv_light" id="equip_uv_light"/>
                        <x-default.input-label for="equip_uv_light" value="{{ TranslationHelper::translate(ucwords('uv light')) }}"></x-default.input-label>
                    </td>

                    @if ($examType == 'drillpipe')
                        <td class="center" style="width: auto;">
                            <x-default.input type="checkbox" name="equip_emi" id="equip_emi"/>
                            <x-default.input-label for="equip_emi" value="{{ TranslationHelper::translate(ucwords('emi')) }}"></x-default.input-label>
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.input type="checkbox" name="equip_wt" id="equip_wt"/>
                            <x-default.input-label for="equip_wt" value="{{ TranslationHelper::translate(ucwords('wt')) }}"></x-default.input-label>
                        </td>
                    @endif
                    <td colspan="2" style="width: auto;">
                        <x-default.input type="checkbox" name="equip_other" id="equip_other"/>
                        <x-default.input-label for="equip_other" value="{{ TranslationHelper::translate(ucfirst('other')) }}"></x-default.input-label>
                        <x-default.input type="text" class="hidden form-control"  placeholder="----------------------------------" name="equip_other"/>
                    </td>
                </tr>
                <tr>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="ac_ypke_serial" placeholder="No.-------------------------" /></td>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="dc_coil_serial" placeholder="No.-------------------------" /></td>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="permanent_magnet_serial" placeholder="No.-------------------------" /></td>
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="uv_light_serial" placeholder="No.-------------------------" /></td>
                    @if($examType == 'drillpipe')
                        <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="emi_serial" placeholder="No.-------------------------" /></td>
                        <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="wt_serial" placeholder="No.-------------------------" /></td>
                    @endif
                    <td style="width: auto;"><x-default.input type="text" class="hidden form-control" name="other_serial" placeholder="No.-------------------------" /></td>
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
                        <textarea class="hidden form-control" cols="" rows="4" name="desc" placeholder="--------------------------------------">{{ $tubs->desc ?? '' }}</textarea>
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

<table class="contentTable">

    <tbody class="left">
        <tr>
            <th class="left">Summary</th>
            <td class="left" colspan="3">welcme</td>
        </tr>
    </tbody>
</table>

<table class="info-table1 frameless-table" style="height: 10px;">
    <tbody>
        <tr>
            {{-- operator  --}}
            <td style="width:auto; text-align:left">
                <div><b>Customer Signuture : </b> </div>
            </td>
            <td class="left">
                <b>Inspector Signature : </b>welcome
            </td>
        </tr>
    </tbody>
</table>

<table class="abb">
    <thead>
        {{--  <tr>
            <th colspan="14">Data Abbrevations</th>
        </tr>  --}}
    </thead>
    <tbody>
        <tr>
            <td class="abb-tx">O.D</td>
            <td abb-ty>Outside Diameter</td>
            <td class="abb-tx">WO</td>
            <td abb-ty>Wash-Out</td>
            <td class="abb-tx">BB</td>
            <td abb-ty>Bell-out Box</td>
            <td class="abb-tx">B</td>
            <td abb-ty>Blade Length</td>

        </tr>
        <tr>
            <td class="abb-tx">C</td>
            <td class="abb-ty">Cracked</td>
            <td class="abb-tx">PS</td>
            <td class="abb-ty">Pitted Seal</td>
            <td class="abb-tx">OW</td>
            <td class="abb-ty">OD Wear</td>
            <td class="abb-tx">C'Bore</td>
            <td class="abb-ty">Counter Bore</td>

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

                  </tr>
    </tbody>
</table>
    <x-dashboard.reports.layouts.footer />
        </div>
    </div>
</div>

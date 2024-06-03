@extends('website.reports.Layouts.Horizontal.master')
@section('title', 'STC Inspection Reports')
@section('style')
    <link rel="stylesheet" href="{{ public_path('dashboard/pages/tublar/tubs/css/frontStyle.css') }}">
@endsection
@section('customHeader', 'Tublar Inspection Services')
@section('reports')
    {{-- conent --}}
    <div class="center">
        <b>{{ strtoupper($tubs->type) . ucwords(' subs Inspection Reports') }}</b><br>
        <img src="{{ public_path('dashboard/pages/tublar/tubs/' . $tubs->type . '.png') }}">
    </div>
    <table class="contentTable">
        <tbody>
            <tr>
                <th>
                    <x-default.input-label for="customer" value="{{ TranslationHelper::translate(ucwords('customer')) }}">
                    </x-default.input-label>
                </th>

                <td>welcome</td>

                <th><x-default.input-label for="order"
                        value="{{ TranslationHelper::translate(ucwords('Purchase Order No')) }}"></x-default.input-label>
                </th>

                <td>welcome</td>

                <th><x-default.input-label for="date"
                        value="{{ TranslationHelper::translate(ucwords('Date of Insp')) }}"></x-default.input-label>
                </th>

                <td>welcome</td>
            </tr>
            <tr>
                <th><x-default.input-label for="location"
                        value="{{ TranslationHelper::translate(ucwords('Insp Location')) }}"></x-default.input-label>
                </th>

                <td>welcome</td>

                <th><x-default.input-label for="order_id"
                        value="{{ TranslationHelper::translate(ucwords('Job Ticket No')) }}"></x-default.input-label>
                </th>
                <td>welcome
                </td>
                <th><x-default.input-label for="order_id"
                        value="{{ TranslationHelper::translate(ucwords('Report No')) }}"></x-default.input-label>
                </th>
                <td>welcome</td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col-8" style="width: 69%; display:inline-flex">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th colspan="4" class="center">{{ TranslationHelper::translate(ucwords('inspection method')) }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{ TranslationHelper::translate(ucwords('magnetizing')) }}</th>
                        <td class="left">
                            <x-default.checkbox style="display: inline;" name="magnetizing[ac_yoke]" id="ac_yoke"
                                style="display: inline; "
                                value="{{ isset(getDeCode($tubs->magnetizing)['ac_yoke']) ? getDeCode($tubs->magnetizing)['ac_yoke'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('ac yoke')) }}

                            <x-default.checkbox style="display: inline;" name="magnetizing[permanent]" id="permanent"
                                value="{{ isset(getDeCode($tubs->magnetizing)['permanent']) ? getDeCode($tubs->magnetizing)['permanent'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('permanent')) }}
                            <x-default.checkbox style="display: inline;" name="magnetizing[dc_coil]" id="dc_coil"
                                value="{{ isset(getDeCode($tubs->magnetizing)['dc_coil']) ? getDeCode($tubs->magnetizing)['dc_coil'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('dc coil')) }}

                            @if ($tubs->type == 'drillpipe')
                                <x-default.checkbox style="display: inline;" name="magnetizing[emi]" id="emi"
                                    value="{{ isset(getDeCode($tubs->magnetizing)['emi']) ? getDeCode($tubs->magnetizing)['emi'] : '---------------' }}" />
                                {{ TranslationHelper::translate(ucwords('emi')) }}
                            @endif
                        </td>

                        <th>{{ TranslationHelper::translate(ucwords('magnetic particles')) }}</th>
                        <td>
                            <x-default.checkbox style="display: inline;" name="magnetic_particles[dry]" id="dry"
                                value="{{ isset(getDeCode($tubs->magnetic_particles)['dry']) ? getDeCode($tubs->magnetic_particles)['dry'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('dry')) }}

                            <x-default.checkbox style="display: inline;" name="magnetic_particles[wet]" id="wet"
                                value="{{ isset(getDeCode($tubs->magnetic_particles)['wet']) ? getDeCode($tubs->magnetic_particles)['wet'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('wet')) }}

                            <x-default.checkbox style="display: inline;" name="magnetic_particles[visible]" id="visible"
                                value="{{ isset(getDeCode($tubs->magnetic_particles)['visible']) ? getDeCode($tubs->magnetic_particles)['visible'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('visible')) }}

                            <x-default.checkbox style="display: inline;" name="magnetic_particles[fluorescent]"
                                id="fluorescent"
                                value="{{ isset(getDeCode($tubs->magnetic_particles)['fluorescent']) ? getDeCode($tubs->magnetic_particles)['fluorescent'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('fluorescent')) }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ TranslationHelper::translate(ucwords('other methods')) }}
                        </th>
                        <td colspan="3" class="left">
                            <x-default.checkbox style="display: inline;" name="other_methods[eai]" id="eai"
                                value="{{ isset(getDeCode($tubs->other_methods)['eai']) ? getDeCode($tubs->other_methods)['eai'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('eai')) }}

                            <x-default.checkbox style="display: inline;" name="other_methods[vti]" id="vti"
                                value="{{ isset(getDeCode($tubs->other_methods)['vti']) ? getDeCode($tubs->other_methods)['vti'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('vti')) }}

                            @if ($tubs->type == 'drillpipe')
                                <x-default.checkbox style="display: inline;" name="other_methods[wt]" id="wt"
                                    value="{{ isset(getDeCode($tubs->other_methods)['wt']) ? getDeCode($tubs->other_methods)['wt'] : '---------------' }}" />
                                {{ TranslationHelper::translate(StrToUpper('wt')) }}
                            @endif

                            <x-default.checkbox style="display: inline;" name="other_methods[tgi]" id="tgi"
                                value="{{ isset(getDeCode($tubs->other_methods)['tgi']) ? getDeCode($tubs->other_methods)['tgi'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('tgi')) }}

                            <x-default.checkbox style="display: inline;" name="" id="method_other"
                                value="{{ isset(getDeCode($tubs->other_methods)['other']) ? '1' : '' }}" />
                            {{ TranslationHelper::translate(ucfirst('other :')) }}
                            {{ isset(getDeCode($tubs->other_methods)['other']) ? getDeCode($tubs->other_methods)['other'] : '---------------' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4" style="width: 30%; float: right;">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th colspan="2" class="center">{{ TranslationHelper::translate(ucwords('specification')) }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="left">
                            <x-default.checkbox style="display: inline;" name="specification[api]" id="api"
                                value="{{ isset(getDeCode($tubs->specification)['api']) ? getDeCode($tubs->specification)['api'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('api')) }}

                            <x-default.checkbox style="display: inline;" name="specification[dsi]" id="dsi"
                                value="{{ isset(getDeCode($tubs->specification)['dsi']) ? getDeCode($tubs->specification)['dsi'] : '---------------' }}" />
                            {{ TranslationHelper::translate(StrToUpper('dsi')) }}

                            <x-default.checkbox style="display: inline;" name="" id="spec_other"
                                value="{{ isset(getDeCode($tubs->specification)['other']) ? '1' : '' }}" />
                            {{ TranslationHelper::translate(ucfirst('other :')) }}
                            {{ isset(getDeCode($tubs->specification)['other']) ? getDeCode($tubs->specification)['other'] : '---------------' }}
                        </td>
                    </tr>
                    <tr>
                        <th>{{ TranslationHelper::translate(ucwords('edition')) }}
                        </th>
                        <td>{{ isset(getDeCode($tubs->specification)['other']) ? ucwords(getDeCode($tubs->specification)['other']) : '---------------' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-8" style="width: 69%; display:inline-flex">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th class="center" colspan="{{ $tubs->type === 'drillpipe' ? 7 : 5 }}">
                            {{ TranslationHelper::translate(ucwords('equipment used')) }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_ac_yoke]"
                                id="equip_ac_yoke"
                                value="{{ isset(getDeCode($tubs->equipment)['equip_ac_yoke']) ? getDeCode($tubs->equipment)['equip_ac_yoke'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('ac yoke')) }}
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_dc_coil]"
                                id="equip_dc_coil"
                                value="{{ isset(getDeCode($tubs->equipment)['equip_dc_coil']) ? getDeCode($tubs->equipment)['equip_dc_coil'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('dc coil')) }}
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_permanent_magnet]"
                                id="equip_permanent_magnet"
                                value="{{ isset(getDeCode($tubs->equipment)['equip_permanent_magnet']) ? getDeCode($tubs->equipment)['equip_permanent_magnet'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('permanent magnet')) }}
                        </td>
                        <td class="center" style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="equipment[equip_uv_light]"
                                id="equip_uv_light"
                                value="{{ isset(getDeCode($tubs->equipment)['equip_uv_light']) ? getDeCode($tubs->equipment)['equip_uv_light'] : '---------------' }}" />
                            {{ TranslationHelper::translate(ucwords('uv light')) }}
                        </td>

                        @if ($tubs->type == 'drillpipe')
                            <td class="center" style="width: auto ">
                                <x-default.checkbox style="display: inline;" name="equipment[equip_emi]" id="equip_emi"
                                    value="{{ isset(getDeCode($tubs->equipment)['equip_emi']) ? getDeCode($tubs->equipment)['equip_emi'] : '---------------' }}" />
                                {{ TranslationHelper::translate(ucwords('emi')) }}
                            </td>
                            <td class="center" style="width: auto;">
                                <x-default.checkbox style="display: inline;" name="equipment[equip_wt]" id="equip_wt"
                                    value="{{ isset(getDeCode($tubs->equipment)['equip_wt']) ? getDeCode($tubs->equipment)['equip_wt'] : '---------------' }}" />
                                {{ TranslationHelper::translate(ucwords('wt')) }}
                            </td>
                        @endif
                        <td style="width: auto;">
                            <x-default.checkbox style="display: inline;" name="" id="equip_other"
                                value="{{ isset(getDeCode($tubs->equipment)['other']) ? '1' : '0' }}" />
                            {{ TranslationHelper::translate(ucfirst('other:')) }}
                            {{ isset(getDeCode($tubs->equipment)['other']) ? getDeCode($tubs->equipment)['other'] : '--------------' }}
                        </td>
                    </tr>
                    <tr>
                        <td>{{ isset(getDeCode($tubs->equipment)['ac_ypke_serial']) ? getDeCode($tubs->equipment)['ac_ypke_serial'] : 'No.-----------------' }}
                        </td>
                        <td>{{ isset(getDeCode($tubs->equipment)['dc_coil_serial']) ? getDeCode($tubs->equipment)['dc_coil_serial'] : 'No.-----------------' }}
                        </td>
                        <td>{{ isset(getDeCode($tubs->equipment)['permanent_magnet_serial']) ? getDeCode($tubs->equipment)['permanent_magnet_serial'] : 'No.-----------------' }}
                        </td>
                        <td>{{ isset(getDeCode($tubs->equipment)['uv_light_serial']) ? getDeCode($tubs->equipment)['uv_light_serial'] : 'No.-----------------' }}
                        </td>
                        @if ($tubs->type == 'drillpipe')
                            <td>
                                {{ isset(getDeCode($tubs->equipment)['emi_serial']) ? getDeCode($tubs->equipment)['emi_serial'] : 'No.-----------------' }}
                            </td>
                            <td>
                                {{ isset(getDeCode($tubs->equipment)['wt_serial']) ? getDeCode($tubs->equipment)['wt_serial'] : 'No.-----------------' }}
                            </td>
                        @endif
                        <td>
                            {{ isset(getDeCode($tubs->equipment)['other_serial']) ? getDeCode($tubs->equipment)['other_serial'] : 'No.-----------------' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-4" style="width: 30%; float: right;">
            <table class="contentTable ">
                <thead>
                    <tr>
                        <th class="center">{{ TranslationHelper::translate(ucwords('Description of tool')) }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <textarea class="hidden form-control" cols="" rows="4" name="tool_desc"
                                placeholder="--------------------------------------">{{ $tubs->tool_desc ?? '' }}</textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- description table --}}
    {{-- @switch($tubs->type)
        @case('heavyweight')
            <x-dashboard.reports.tubs.heavyweight :tubs="$tubs" />
        @break

        @case('drillcollar')
            <x-dashboard.reports.tubs.drillcollar :tubs="$tubs" />
        @break

        @default
            <x-dashboard.reports.tubs.drillpipe :tubs="$tubs" />
    @endswitch --}}
    {{-- end description table --}}
    {{-- remarks --}}
    <div class="row">
        <div style="{{ $tubs->type !== 'drillpipe' ? 'width:49% ; display:inline-flex' : 'width:100%' }}">
            <table class="contentTable">
                <thead>
                    <tr>
                        <th class="center" style="width:5%;">
                            <x-default.input-label for="remarks"
                                value="{{ TranslationHelper::translate(ucwords('remarks')) }}"></x-default.input-label>
                        </th>
                        <td>
                            <textarea rows="3" class="hidden form-control" name="remarks" id="remarks"
                                placeholder="--------------------------------------------------">{{ $tubs->remarks ?? '' }}</textarea>
                        </td>
                    </tr>
                </thead>
            </table>
        </div>
        @unless ($tubs->type == 'drillpipe')
            <div class="col-6 w-50" style="width: 50%;float: right">
                <table class="contentTable">
                    <tbody>
                        <tr>
                            <td class="left">
                                <x-default.input-label style="font-weight: bold" for="accepted_conn"
                                    value="{{ TranslationHelper::translate(ucwords('connection accepted (white)')) }}"></x-default.input-label>
                                <div style="display: inline">
                                    {{ isset(getDeCode($tubs->conn_inspected)['accepted']) ? getDeCode($tubs->conn_inspected)['accepted'] : null }}
                                </div>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                                <br>
                                <x-default.input-label style="font-weight: bold" for="defective_conn"
                                    value="{{ TranslationHelper::translate(ucwords('connection defective (red)')) }}"></x-default.input-label>
                                <div style="display: inline;color:red">
                                    {{ isset(getDeCode($tubs->conn_inspected)['defected']) ? getDeCode($tubs->conn_inspected)['defected'] : null }}
                                </div>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                                <br>

                                <x-default.input-label style="font-weight: bold" for="repaired_conn"
                                    value="{{ TranslationHelper::translate(ucwords('connection repaired')) }}"></x-default.input-label>
                                <div style="display: inline;color:blue">
                                    {{ isset(getDeCode($tubs->conn_inspected)['repaired']) ? getDeCode($tubs->conn_inspected)['repaired'] : null }}
                                </div>
                                {{ TranslationHelper::translate(ucwords('comns')) }}
                                <br>
                            </td>
                            <th>
                                <x-default.input-label for="total"
                                    value="{{ TranslationHelper::translate(ucwords('total connection inspected')) }}"></x-default.input-label>

                                {{ isset(getDeCode($tubs->conn_inspected)['total']) ? getDeCode($tubs->conn_inspected)['total'] : null }}

                                {{ TranslationHelper::translate(ucwords('comns')) }}
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endunless
    </div>
    {{-- end remarks --}}
    {{-- inspector --}}
    <table class="frameLess-table">
        <tbody>
            <tr>
                <td style="width:auto; text-align:left">
                    <b>{{ TranslationHelper::translate(ucwords('supervisor :')) }}</b>
                    {{ $tubs->supervisor ?? '' }}
                </td>
                <td class="right">
                    <b>{{ TranslationHelper::translate(ucwords('Inspector :')) }}
                    </b>{{ $tubs->getUser->full_name ?? '' }}
                </td>
            </tr>
        </tbody>
    </table>
    {{-- end inspector --}}

    <x-dashboard.reports.tubs.reference-table />
    {{-- end content --}}
@endsection
@section(' script') @endsection

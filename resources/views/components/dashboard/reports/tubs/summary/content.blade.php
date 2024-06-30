<!-- Rounded Ribbon -->
<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="card-body">
        <div class="ribbon-content mt-4 text-muted">
            <x-dashboard.reports.layouts.header reportTitle="{{ ucwords('tublar inspection system') }}" />
            <div class="center">
                <b>{{ strtoupper($examType) . ucwords(' subs Inspection Reports') }}</b><br>
                <img src="{{ asset('dashboard/pages/tublar/tubs/' . $examType . '.png') }}" width="50%">
            </div>
            <input type='hidden' name='type' value='{{ $examType }}' required>
            <input type='hidden' name='user_id' value='{{ Auth::user()->id }}' required>
            <table class="contentTable">
                <tbody>
                    <tr>
                        <th><x-default.input-label for="customer"
                                value="{{ TranslationHelper::translate(ucwords('customer')) }}"></x-default.input-label>
                        </th>
                        <td><x-default.input type="text" class="form-control hidden" name="customer" id="customer"
                                placeholder="----------------------------------" value="{{ $data->customer ?? '' }}" />
                        </td>

                        <th><x-default.input-label for="order"
                                value="{{ TranslationHelper::translate(ucwords('Purchase Order No')) }}"></x-default.input-label>
                        </th>
                        <td><x-default.input type="text" class="form-control hidden" name="order" id="order"
                                placeholder="----------------------------------" value="{{ $data->order ?? '' }}" />
                        </td>

                        <th><x-default.input-label for="date"
                                value="{{ TranslationHelper::translate(ucwords('Date of Insp')) }}"></x-default.input-label>
                        </th>
                        <td><x-default.input type="date" class="form-control hidden" name="date" id="date"
                                value="{{ $data->date ?? '' }}" />
                        </td>
                    </tr>
                    <tr>
                        <th><x-default.input-label for="location"
                                value="{{ TranslationHelper::translate(ucwords('Insp Location')) }}"></x-default.input-label>
                        </th>
                        <td><x-default.input type="text" class="form-control hidden" name="location" id="location"
                                placeholder="----------------------------------" value="{{ $data->location ?? '' }}" />
                        </td>

                        <th><x-default.input-label for="order_id"
                                value="{{ TranslationHelper::translate(ucwords('Job Ticket No')) }}"></x-default.input-label>
                        </th>
                        <td colspan="3"><x-default.dropdown class="form-control hidden"
                                label="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" name="order_id"
                                id="order_id" disabledOption="{{ ucwords('Job Ticket Numbers') }}" :data="$orders"
                                selectedData="{{ optional($data->getOrders)->id }}"
                                span="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" />
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-8">
                    <table class="contentTable">
                        <thead>
                            <tr>
                                <th colspan="4" class="center">
                                    {{ TranslationHelper::translate(ucwords('inspection method')) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{ TranslationHelper::translate(ucwords('magnetizing')) }}</th>
                                <td>
                                    <x-default.checkbox name="magnetizing[ac_yoke]" id="ac_yoke"
                                        value="{{ isset(getDeCode($data->magnetizing)['ac_yoke']) ? getDeCode($data->magnetizing)['ac_yoke'] : null }}" />
                                    <x-default.input-label for="ac_yoke"
                                        value="{{ TranslationHelper::translate(ucwords('ac yoke')) }}"></x-default.input-label>

                                    <x-default.checkbox name="magnetizing[permanent]" id="permanent"
                                        value="{{ isset(getDeCode($data->magnetizing)['permanent']) ? getDeCode($data->magnetizing)['permanent'] : null }}" />
                                    <x-default.input-label for="permanent"
                                        value="{{ TranslationHelper::translate(ucwords('permanent')) }}"></x-default.input-label>

                                    <x-default.checkbox name="magnetizing[dc_coil]" id="dc_coil"
                                        value="{{ isset(getDeCode($data->magnetizing)['dc_coil']) ? getDeCode($data->magnetizing)['dc_coil'] : null }}" />
                                    <x-default.input-label for="dc_coil"
                                        value="{{ TranslationHelper::translate(ucwords('dc coil')) }}"></x-default.input-label>

                                    @if ($examType == 'drillpipe')
                                        <x-default.checkbox name="magnetizing[emi]" id="emi"
                                            style="margin-left: 40%"
                                            value="{{ isset(getDeCode($data->magnetizing)['emi']) ? getDeCode($data->magnetizing)['emi'] : null }}" />
                                        <x-default.input-label for="emi"
                                            value="{{ TranslationHelper::translate(ucwords('emi')) }}"></x-default.input-label>
                                    @endif
                                </td>

                                <th>{{ TranslationHelper::translate(ucwords('magnetic particles')) }}</th>
                                <td>
                                    <x-default.checkbox name="magnetic_particles[dry]" id="dry"
                                        value="{{ isset(getDeCode($data->magnetic_particles)['dry']) ? getDeCode($data->magnetic_particles)['dry'] : null }}" />
                                    <x-default.input-label for="dry"
                                        value="{{ TranslationHelper::translate(ucwords('dry')) }}"></x-default.input-label>

                                    <x-default.checkbox name="magnetic_particles[wet]" id="wet"
                                        value="{{ isset(getDeCode($data->magnetic_particles)['wet']) ? getDeCode($data->magnetic_particles)['wet'] : null }}" />
                                    <x-default.input-label for="wet"
                                        value="{{ TranslationHelper::translate(ucwords('wet')) }}"></x-default.input-label>

                                    <x-default.checkbox name="magnetic_particles[visible]" id="visible"
                                        value="{{ isset(getDeCode($data->magnetic_particles)['visible']) ? getDeCode($data->magnetic_particles)['visible'] : null }}" />
                                    <x-default.input-label for="visible"
                                        value="{{ TranslationHelper::translate(ucwords('visible')) }}"></x-default.input-label>

                                    <x-default.checkbox name="magnetic_particles[fluorescent]" id="fluorescent"
                                        value="{{ isset(getDeCode($data->magnetic_particles)['fluorescent']) ? getDeCode($data->magnetic_particles)['fluorescent'] : null }}" />
                                    <x-default.input-label for="fluorescent"
                                        value="{{ TranslationHelper::translate(ucwords('fluorescent')) }}"></x-default.input-label>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <x-default.input-label for="fluorescent"
                                        value="{{ TranslationHelper::translate(ucwords('other methods')) }}"></x-default.input-label>
                                </th>
                                <td colspan="3">
                                    <x-default.checkbox name="other_methods[eai]" id="eai"
                                        value="{{ isset(getDeCode($data->other_methods)['eai']) ? getDeCode($data->other_methods)['eai'] : null }}" />
                                    <x-default.input-label style="padding-right:5px" for="eai"
                                        value="{{ TranslationHelper::translate(StrToUpper('eai')) }}"></x-default.input-label>

                                    <x-default.checkbox name="other_methods[vti]" id="vti"
                                        value="{{ isset(getDeCode($data->other_methods)['vti']) ? getDeCode($data->other_methods)['vti'] : null }}" />
                                    <x-default.input-label style="padding-right:5px" for="vti"
                                        value="{{ TranslationHelper::translate(StrToUpper('vti')) }}"></x-default.input-label>

                                    @if ($examType == 'drillpipe')
                                        <x-default.checkbox name="other_methods[wt]" id="wt"
                                            value="{{ isset(getDeCode($data->other_methods)['wt']) ? getDeCode($data->other_methods)['wt'] : null }}" />
                                        <x-default.input-label style="padding-right:5px" for="wt"
                                            value="{{ TranslationHelper::translate(StrToUpper('wt')) }}"></x-default.input-label>
                                    @endif

                                    <x-default.checkbox name="other_methods[tgi]" id="tgi"
                                        value="{{ isset(getDeCode($data->other_methods)['tgi']) ? getDeCode($data->other_methods)['tgi'] : null }}" />
                                    <x-default.input-label style="padding-right:5px" for="tgi"
                                        value="{{ TranslationHelper::translate(StrToUpper('tgi')) }}"></x-default.input-label>

                                    <x-default.checkbox name="" id="method_other"
                                        value="{{ isset(getDeCode($data->other_methods)['other']) ? '1' : '' }}" />
                                    <x-default.input-label for="method_other"
                                        value="{{ TranslationHelper::translate(ucfirst('other :')) }}"></x-default.input-label>
                                    <x-default.input important class="hidden w-50" type="text"
                                        value="{{ isset(getDeCode($data->other_methods)['other']) ? getDeCode($data->other_methods)['other'] : null }}"
                                        name="other_methods[other]"
                                        placeholder="----------------------------------" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-4">
                    <table class="contentTable">
                        <thead>
                            <tr>
                                <th colspan="2" class="center">
                                    {{ TranslationHelper::translate(ucwords('specification')) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <x-default.checkbox name="specification[api]" id="api"
                                        value="{{ isset(getDeCode($data->specification)['api']) ? getDeCode($data->specification)['api'] : null }}" />
                                    <x-default.input-label style="padding-right: 7px" for="api"
                                        value="{{ TranslationHelper::translate(StrToUpper('api')) }}"></x-default.input-label>

                                    <x-default.checkbox name="specification[dsi]" id="dsi"
                                        value="{{ isset(getDeCode($data->specification)['dsi']) ? getDeCode($data->specification)['dsi'] : null }}" />
                                    <x-default.input-label for="dsi" style="padding-right: 7px"
                                        value="{{ TranslationHelper::translate(StrToUpper('dsi')) }}"></x-default.input-label>

                                    <x-default.checkbox name="" id="spec_other"
                                        value="{{ isset(getDeCode($data->specification)['other']) ? '1' : '' }}" />
                                    <x-default.input-label for="spec_other" style="padding-right: 7px"
                                        value="{{ TranslationHelper::translate(ucfirst('other :')) }}"></x-default.input-label>
                                    <x-default.input type="text" style="width:50%" name="specification[other]"
                                        value="{{ isset(getDeCode($data->specification)['other']) ? getDeCode($data->specification)['other'] : null }}"
                                        placeholder="--------------------------------------" />
                                </td>
                            </tr>
                            <tr>
                                <th><x-default.input-label for="edition"
                                        value="{{ TranslationHelper::translate(ucwords('edition')) }}"></x-default.input-label>
                                </th>
                                <td><x-default.input type="text" class="hidden" style="width:100%;"
                                        name="specification[edition]" id="edition"
                                        value="{{ isset(getDeCode($data->specification)['edition']) ? getDeCode($data->specification)['edition'] : null }}"
                                        placeholder="--------------------------------------" /></td>
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
                                <th class="center" colspan="{{ $examType == 'drillpipe' ? 8 : 6 }}">
                                    {{ TranslationHelper::translate(ucwords('equipment used')) }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center" style="width: auto;">
                                    <x-default.checkbox name="equipment[equip_ac_yoke]" id="equip_ac_yoke"
                                        value="{{ isset(getDeCode($data->equipment)['equip_ac_yoke']) ? getDeCode($data->equipment)['equip_ac_yoke'] : null }}" />
                                    <x-default.input-label for="equip_ac_yoke"
                                        value="{{ TranslationHelper::translate(ucwords('ac yoke')) }}"></x-default.input-label>
                                </td>
                                <td class="center" style="width: auto;">
                                    <x-default.checkbox name="equipment[equip_dc_coil]" id="equip_dc_coil"
                                        value="{{ isset(getDeCode($data->equipment)['equip_dc_coil']) ? getDeCode($data->equipment)['equip_dc_coil'] : null }}" />
                                    <x-default.input-label for="equip_dc_coil"
                                        value="{{ TranslationHelper::translate(ucwords('dc coil')) }}"></x-default.input-label>
                                </td>
                                <td class="center" style="width: auto;">
                                    <x-default.checkbox name="equipment[equip_permanent_magnet]"
                                        id="equip_permanent_magnet"
                                        value="{{ isset(getDeCode($data->equipment)['equip_permanent_magnet']) ? getDeCode($data->equipment)['equip_permanent_magnet'] : null }}" />
                                    <x-default.input-label for="equip_permanent_magnet"
                                        value="{{ TranslationHelper::translate(ucwords('permanent magnet')) }}"></x-default.input-label>
                                </td>
                                <td class="center" style="width: auto;">
                                    <x-default.checkbox name="equipment[equip_uv_light]" id="equip_uv_light"
                                        value="{{ isset(getDeCode($data->equipment)['equip_uv_light']) ? getDeCode($data->equipment)['equip_uv_light'] : null }}" />
                                    <x-default.input-label for="equip_uv_light"
                                        value="{{ TranslationHelper::translate(ucwords('uv light')) }}"></x-default.input-label>
                                </td>

                                @if ($examType == 'drillpipe')
                                    <td class="center" style="width: auto ">
                                        <x-default.checkbox name="equipment[equip_emi]" id="equip_emi"
                                            value="{{ isset(getDeCode($data->equipment)['equip_emi']) ? getDeCode($data->equipment)['equip_emi'] : null }}" />
                                        <x-default.input-label for="equip_emi"
                                            value="{{ TranslationHelper::translate(ucwords('emi')) }}"></x-default.input-label>
                                    </td>
                                    <td class="center" style="width: auto;">
                                        <x-default.checkbox name="equipment[equip_wt]" id="equip_wt"
                                            value="{{ isset(getDeCode($data->equipment)['equip_wt']) ? getDeCode($data->equipment)['equip_wt'] : null }}" />
                                        <x-default.input-label for="equip_wt"
                                            value="{{ TranslationHelper::translate(ucwords('wt')) }}"></x-default.input-label>
                                    </td>
                                @endif
                                <td colspan="2" style="width: auto;">
                                    <x-default.checkbox name="" id="equip_other"
                                        value="{{ isset(getDeCode($data->equipment)['other']) ? '1' : '0' }}" />
                                    <x-default.input-label for="equip_other"
                                        value="{{ TranslationHelper::translate(ucfirst('other :')) }}"></x-default.input-label>
                                    <x-default.input type="text" class="hidden form-control"
                                        value="{{ isset(getDeCode($data->equipment)['other']) ? getDeCode($data->equipment)['other'] : null }}"
                                        placeholder="----------------------------------" name="equipment[other]" />
                                </td>
                            </tr>
                            <tr>
                                <td style="width: auto;"><x-default.input type="text" class="hidden form-control"
                                        value="{{ isset(getDeCode($data->equipment)['ac_ypke_serial']) ? getDeCode($data->equipment)['ac_ypke_serial'] : null }}"
                                        name="equipment[ac_ypke_serial]" placeholder="No.-------------------------" />
                                </td>
                                <td style="width: auto;"><x-default.input type="text" class="hidden form-control"
                                        value="{{ isset(getDeCode($data->equipment)['dc_coil_serial']) ? getDeCode($data->equipment)['dc_coil_serial'] : null }}"
                                        name="equipment[dc_coil_serial]" placeholder="No.-------------------------" />
                                </td>
                                <td style="width: auto;"><x-default.input type="text" class="hidden form-control"
                                        value="{{ isset(getDeCode($data->equipment)['permanent_magnet_serial']) ? getDeCode($data->equipment)['permanent_magnet_serial'] : null }}"
                                        name="equipment[permanent_magnet_serial]"
                                        placeholder="No.-------------------------" /></td>
                                <td style="width: auto;"><x-default.input type="text" class="hidden form-control"
                                        value="{{ isset(getDeCode($data->equipment)['uv_light_serial']) ? getDeCode($data->equipment)['uv_light_serial'] : null }}"
                                        name="equipment[uv_light_serial]"
                                        placeholder="No.-------------------------" /></td>
                                @if ($examType == 'drillpipe')
                                    <td style="width: auto;"><x-default.input type="text"
                                            class="hidden form-control" name="equipment[emi_serial]"
                                            value="{{ isset(getDeCode($data->equipment)['emi_serial']) ? getDeCode($data->equipment)['emi_serial'] : null }}"
                                            placeholder="No.-------------------------" /></td>
                                    <td style="width: auto;"><x-default.input type="text"
                                            class="hidden form-control" name="equipment[wt_serial]"
                                            value="{{ isset(getDeCode($data->equipment)['wt_serial']) ? getDeCode($data->equipment)['wt_serial'] : null }}"
                                            placeholder="No.-------------------------" /></td>
                                @endif
                                <td style="width: auto;"><x-default.input type="text" class="hidden form-control"
                                        value="{{ isset(getDeCode($data->equipment)['other_serial']) ? getDeCode($data->equipment)['other_serial'] : null }}"
                                        name="equipment[other_serial]" placeholder="No.-------------------------" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-3">
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
                                        placeholder="--------------------------------------">{{ $data->tool_desc ?? '' }}</textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- description table --}}
            @switch($examType)
                @case('heavyweight')
                    <x-dashboard.reports.tubs.summary.heavyweight :data="$data" />
                @break

                @case('drillcollar')
                    <x-dashboard.reports.tubs.summary.drillcollar :data="$data" />
                @break

                @default
                    <x-dashboard.reports.tubs.summary.drillpipe :data="$data" />
            @endswitch
            {{-- end description table --}}
            <div class="row">
                <div class="{{ $examType !== 'drillpipe' ? 'col-6' : 'col-12' }}">
                    <table class="contentTable">
                        <thead>
                            <tr>
                                <th class="center">
                                    <x-default.input-label for="remarks"
                                        value="{{ TranslationHelper::translate(ucwords('remarks')) }}"></x-default.input-label>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <textarea rows="3" class=" hidden form-control" name="remarks" id="remarks"
                                        placeholder="--------------------------------------------------">{{ $data->remarks ?? '' }}</textarea>
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
                                        <x-default.input-label for="total"
                                            value="{{ TranslationHelper::translate(ucwords('total connection inspected')) }}"></x-default.input-label>
                                        <x-default.input type="text" class="hidden w-50 center"
                                            name="conn_inspected[total]" id="total"
                                            value="{{ isset(getDeCode($data->conn_inspected)['total']) ? getDeCode($data->conn_inspected)['total'] : null }}"
                                            placeholder="----------------------------------" />
                                        {{ TranslationHelper::translate(ucwords('comns')) }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <x-default.input-label for="accepted_conn"
                                            value="{{ TranslationHelper::translate(ucwords('connection accepted (white)')) }}"></x-default.input-label>
                                    </td>
                                    <td>
                                        <x-default.input type="text" class="hidden w-50 center"
                                            name="conn_inspected[accepted]" id="accepted_conn"
                                            value="{{ isset(getDeCode($data->conn_inspected)['accepted']) ? getDeCode($data->conn_inspected)['accepted'] : null }}"
                                            placeholder="----------------------------------" />
                                        {{ TranslationHelper::translate(ucwords('comns')) }}
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <x-default.input-label for="defective_conn"
                                            value="{{ TranslationHelper::translate(ucwords('connection defective (red)')) }}"></x-default.input-label>
                                    </td>
                                    <td>
                                        <x-default.input type="text" class="hidden w-50 center" style="color: red"
                                            name="conn_inspected[defected]" id="defective_conn"
                                            value="{{ isset(getDeCode($data->conn_inspected)['defected']) ? getDeCode($data->conn_inspected)['defected'] : null }}"
                                            placeholder="----------------------------------" />
                                        {{ TranslationHelper::translate(ucwords('comns')) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <x-default.input-label for="repaired_conn"
                                            value="{{ TranslationHelper::translate(ucwords('connection repaired')) }}"></x-default.input-label>
                                    </td>
                                    <td>
                                        <x-default.input type="text" class="hidden w-50 center" style="color: blue"
                                            name="conn_inspected[repaired]" id="repaired_conn"
                                            value="{{ isset(getDeCode($data->conn_inspected)['repaired']) ? getDeCode($data->conn_inspected)['repaired'] : null }}"
                                            placeholder="----------------------------------" />
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
                            <div><b>{{ TranslationHelper::translate(ucwords('supervisor :')) }}</b><x-default.input
                                    type="text" class="hidden" name="supervisor" id="supervisor"
                                    value="{{ $data->supervisor ?? '' }}"
                                    placeholder="----------------------------------" /></div>
                        </td>
                        <td class="left">
                            <b>{{ TranslationHelper::translate(ucwords('Inspector :')) }}
                            </b>{{ Auth::user()->full_name }}
                        </td>
                    </tr>
                </tbody>
            </table>

            <x-dashboard.reports.tubs.reference-table />
            <x-dashboard.reports.layouts.footer />
        </div>
    </div>
</div>

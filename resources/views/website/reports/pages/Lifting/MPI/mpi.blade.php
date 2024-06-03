@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC MPI Report')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/mpi/css/style.css') }}">
    @if ($mpi->acceptance == 0)
        <style>
            body {
                margin: 0;
                padding: 0;
                background-image: url('{{ public_path('/storage/Images/Website/footerImages/reJected.png') }}');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                position: relative;
                z-index: -1;
            }
        </style>
    @endif
@endsection
@section('customHeader', 'Inspection Report System MPI')
@section('reports')
    <div style="text-align: center;">
        <b>MAGNETIC PARTICLE INSPECTION REPORT</b>
    </div>

    <br>
    <table class="info-table1">
        <tr>

            <td class="table1-label">Customer:</td>
            <td class="table1-content">{{ $mpi->getOrders->companies->name }}</td>
            <td class="table1-label">Date of Inspection:</td>
            <td class="table1-content">{{ $mpi->date }}</td>
        </tr>
        <tr>
            <td class="table1-label">Job Ticket No.:</td>
            <td class="table1-content">{{ $mpi->getOrders->number }}</td>
            <td class="table1-label">Inspection Report No.:</td>
            <td class="table1-content">{{ $mpi->report_number }}</td>
        </tr>
        <tr>
            <td class="table1-label">Purchase Order No. :</td>
            <td class="table1-content"> </td>
            <td class="table1-label">Inspection Location :</td>
            <td class="table1-content">{{ ucwords($mpi->getOrders->Rigs->name) }}</td>
        </tr>

        @if ($mpi->first_label)
            <tr>
                <td class="table1-label">Next Exam Date:</td>
                <td class="table1-content">{{ $mpi->next_date }}</td>

                <td class="table1-label">{{ $mpi->first_label }} :</td>
                <td class="table1-content">{{ $mpi->first_content }} </td>
            </tr>
        @else
            <tr>
                <td class="table1-label">Next Exam Date:</td>
                <td class="table1-content">{{ $mpi->next_date }}</td>
                <td class="table1-label"></td>
                <td class="table1-content"></td>
            </tr>
        @endif
    </table>



    <table class="info-table1">
        <tr>
            <td class="table1-label" style=" width: 17%;">Material Description :</td>
            <td class="table1-content" style=" width:48%;">{{ $mpi->description }}</td>
            <td class="table1-label" style=" width: 10%;">Serial No. :</td>
            <td class="table1-content" style=" width: 20%;">{{ $mpi->serial }}</td>
        </tr>
    </table>


    <table class="info-table1">
        <tr>
            <td class="table1-label" style=" width:17%;"> Area Inspected :</td>
            <td class="table1-content" style=" width: 83%;">{{ $mpi->extent }}</td>
        </tr>
    </table>


    <table class="info-table1">
        <tr>
            <td colspan='4' style="padding-bottom: 4px;font-weight:bold;text-align:center;">

                Inspection Method

            </td>
        </tr>
        <tr>

            <td class="table1-label" style=" width:14%;">Magnetizing Current :</td>
            <td style=" width:25%;" class=" table1-content">
                <input type="checkbox" id="checkbox1" disabled @if (in_array('ac', $mpi->getDeCode($mpi->magnetizing_current))) checked @endif>
                <label for="checkbox1">Alternatind(AC)</label>
                &nbsp;&nbsp;

                <input type="checkbox" id="checkbox2" disabled @if (in_array('dc', $mpi->getDeCode($mpi->magnetizing_current))) checked @endif>
                <label for="checkbox2">Direct (DC)</label>
            </td>


            <td class="table1-label center" style=" width:13%;">Magnetic Particles :</td>
            <td class="table1-content" style=" width:30%;">
                <input type="checkbox" id="checkbox1" disabled @if (in_array('dry', $mpi->getDeCode($mpi->magnetic_particles))) checked @endif>
                <label for="checkbox1">Dry</label>
                &nbsp;
                <input type="checkbox" id="wet" disabled @if (in_array('wet', $mpi->getDeCode($mpi->magnetic_particles))) checked @endif>
                <label for="wet">Wet</label>
                &nbsp;
                <input type="checkbox" id="checkbox2" disabled @if (in_array('visibale', $mpi->getDeCode($mpi->magnetic_particles))) checked @endif>
                <label for="checkbox2">Visibale</label>
                &nbsp;
                <input type="checkbox" id="checkbox2" disabled @if (in_array('flourescent', $mpi->getDeCode($mpi->magnetic_particles))) checked @endif>
                <label for="checkbox2">Flourescent</label>
            </td>
        </tr>
    </table>


    <table class="info-table1" style="height: 24px;" width="1034">
        <tbody>
            <tr>
                <td colspan='4' style="padding-bottom: 4px;font-weight:bold;text-align:center;">
                    Equipment </td>
            </tr>
            <tr>

                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox1" disabled @if ($mpi->getDeCode($mpi->equipment)['ac_yoke']) checked @endif>
                    <label>AC Yoke</label>
                </td>
                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox2" disabled @if ($mpi->getDeCode($mpi->equipment)['dc_coil']) checked @endif>
                    <label>DC Coil</label>
                </td>
                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox2" disabled @if ($mpi->getDeCode($mpi->equipment)['permanent_magnet']) checked @endif>

                    <label>Permanent Magnet</label>
                </td>
                <td style="width: 100px;">
                    <input type="checkbox" id="checkbox2" disabled @if ($mpi->getDeCode($mpi->equipment)['uv_light']) checked @endif>

                    <label>UV Light</label>
                </td>
            </tr>
            <tr>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $mpi->getDeCode($mpi->equipment)['ac_yoke_no'] ?? '' }}">
                </td>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $mpi->getDeCode($mpi->equipment)['dc_coil_no'] ?? '' }}">
                </td>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $mpi->getDeCode($mpi->equipment)['permanent_magnet_no'] ?? '' }}">
                </td>
                <td style="width: 100px;">
                    <label>No.</label>
                    <input class="frameless" type="text" disabled
                        value="{{ $mpi->getDeCode($mpi->equipment)['uv_light_no'] ?? '' }}">
                </td>

            </tr>
            @if (isset($mpi->getDeCode($mpi->equipment)['other_name']))
                <tr>
                    <td class="left" style="width: 100px;" colspan='3'>
                        <input class="frameless" type="checkbox" disabled checked>

                        <label for="other">Other : {{ $mpi->getDeCode($mpi->equipment)['other_name'] ?? '' }}</label>
                    </td>
                    <td class="left" colspan='1' style="width: 100px;">
                        <label>No.</label>
                        <input class="frameless" type="text" disabled
                            value="{{ $mpi->getDeCode($mpi->equipment)['other_no'] ?? '' }}">
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="custom_row">
        <div class="custom_column">
            <table class="info-table1">
                <tr>
                    <td colspan='1' style="padding-bottom: 4px;font-weight:bold;text-align:center;">
                        Specifiacation </td>
                </tr>
                <tr>

                    <td class="table1-content" style="text-align: left">
                        <input type="checkbox" id="checkbox1" disabled @if (isset($mpi->getDeCode($mpi->specification)['select']) &&
                                in_array('api', $mpi->getDeCode($mpi->specification)['select'])) checked @endif>

                        <label>API</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox1" disabled @if (isset($mpi->getDeCode($mpi->specification)['select']) &&
                                in_array('dsi', $mpi->getDeCode($mpi->specification)['select'])) checked @endif>
                        <label>DS1</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox2" disabled @if (isset($mpi->getDeCode($mpi->specification)['select']) &&
                                in_array('astm', $mpi->getDeCode($mpi->specification)['select'])) checked @endif>
                        <label>ASTM</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox2" disabled @if (isset($mpi->getDeCode($mpi->specification)['select']) &&
                                in_array('asme', $mpi->getDeCode($mpi->specification)['select'])) checked @endif>
                        <label>ASME</label>
                        &nbsp;

                        <input type="checkbox" id="checkbox2" disabled @if (isset($mpi->getDeCode($mpi->specification)['select']) &&
                                in_array('aws', $mpi->getDeCode($mpi->specification)['select'])) checked @endif>
                        <label>AWS</label>
                        &nbsp;
                        <input type="checkbox" id="checkbox2" disabled @if (isset($mpi->getDeCode($mpi->specification)['other'])) checked @endif>
                        <label>Other: {{ $mpi->getDeCode($mpi->specification)['other'] ?? '' }}</label>
                    </td>
                </tr>
                <tr>
                    <td class="left">
                        <label>Edition : {{ $mpi->getDeCode($mpi->specification)['edition'] ?? '' }}</label>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col">
            <table class="info-table1">
                <tr>
                    <td style="padding-bottom: 4px;font-weight:bold;text-align:center;">
                        Surface Condition </td>
                </tr>

                <tr>
                    <td>
                        <input class="frameless center" type="text" style="width: 100%;"
                            value="{{ $mpi->getDeCode($mpi->surface_condition)[0] ?? '' }}">
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <table class="info-table1">
        <tr>
            <td style="padding-bottom: 4px; font-weight: bold; text-align: center;">
                Result
            </td>
        </tr>
        <tr>
            <td>
                <div id="description-container">
                    ** NDT: Magnetic Particle Inspection Carried Out On Available Critical Areas For
                    The Above Description As Per The Figure Below <b>We Found</b>
                    @if ($mpi->acceptance == 1)
                        All inspected areas found free from surface discontinuities at the time of inspection
                    @endif

                    <div id="description-result" style="white-space: pre-line;">
                        {{ $mpi->result }}
                    </div>


                    @if ($mpi->acceptance == 1)
                        Inspection&nbsp;&nbsp;&nbsp;&nbsp;<b>Accepted</b>
                    @elseif($mpi->acceptance == 0)
                        Inspection&nbsp;&nbsp;&nbsp;&nbsp;<b>Rejected</b>
                    @endif

                </div>

            </td>
        </tr>
    </table>



    <table class="info-table1">
        <tr>
            <td class="table1-label" style=" width:5%;">Note:-</td>
            <td class="table1-content" style=" width: 90%;">{{ $mpi->note }}</td>
        </tr>
    </table>


    {{-- @php

dd($mpi->photos->url);

@endphp  --}}

    @include('website/reports/pages/Lifting/MPI/photos')



    <table class="info-table1 frameless-table" style="height: 20px;">
        <tbody>
            @if (isset($mpi->getDeCode($mpi->equipment)['other_name']))
                <br><br>
            @endif
            <tr>
                {{-- operator  --}}
                <td style="width:auto; text-align:left">
                    <div><b>Inspector : </b> {{ $mpi->getUser->full_name }}</div>
                    <br>
                    <div><b>Qualification : </b> ASNT II</div>
                    <br>
                    <div><b>Signature : </b> {{ $mpi->getUser->full_name }}</div>
                </td>



                {{-- supervisor  --}}
                <td class="left">
                    @if (isset($mpi->supervisor))
                        <b>Supervisor : </b>{{ $mpi->supervisor }}
                    @endif
                </td>

            </tr>
        </tbody>
    </table>
@endsection
@section(' script') @endsection

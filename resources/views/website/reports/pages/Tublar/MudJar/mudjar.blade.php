@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC ' . ucfirst($mudjar->type) . ' Inspection Reports')
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/mudjar/css/style.css') }}">
    @if ($mudjar->getAccept->value == 2)
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
@section('customHeader', 'Tublar Inspection Services')
@section('reports')
    <div class="center">
        <b>{{ ucfirst($mudjar->type) . ' Inspection Reports' }}</b>
    </div>
    <table class="info-table1">
        <tr>
            <td class="table1-label">Tool:</td>
            <td class="table1-content">{{ $mudjar->tool }}</td>
            <td class="table1-label">Serial :</td>
            <td class="table1-content" colspan="2">{{ $mudjar->serial }}</td>

        </tr>
        <tr>
            <td class="table1-label">Client:</td>
            <td class="table1-content">{{ $mudjar->getOrders->companies->name }}</td>
            <td class="table1-label">Report No :</td>
            <td class="table1-content" colspan="2">{{ $mudjar->report_number }}</td>
        </tr>
        <tr>
            <td class="table1-label">Location :</td>
            <td class="table1-content">{{ $mudjar->getOrders->rigs->name }}</td>
            <td class="table1-label">Date :</td>
            <td class="table1-content" colspan="2">{{ $mudjar->date }}</td>
        </tr>
        <tr>
            <td class="table1-label">Address :</td>
            <td class="table1-content">{{ $mudjar->getOrders->rigs->location }}</td>
            <td>Type Of Inspection</td>
            <td>CONN</td>
            <td>Body</td>
        </tr>
        <tr>

            <td class="table1-label" rowspan="7">Inspection Procedure</td>
            <td class="table1-content" rowspan="7">{{ $mudjar->getDeCode($mudjar->visual)['conn'] ?? '' }}</td>
            <td class="table1-content">Visual Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->visual)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->visual)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Boroscopic Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->boroscopic)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->boroscopic)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Dimensional Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->dimensional)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->dimensional)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Magnetic Particle Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->liquid_penetrant)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->liquid_penetrant)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Liquid Penetrant Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->mpi)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->mpi)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Ultrasonic Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->ultrasonic)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->ultrasonic)['body'] ?? '' }}</td>
        </tr>
        <tr>

            <td class="table1-content">Eddy Current Inspection</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->eddy_current)['conn'] ?? '' }}</td>
            <td class="table1-content">{{ $mudjar->getDeCode($mudjar->eddy_current)['body'] ?? '' }}</td>
        </tr>

    </table>
    {{-- content table --}}
    <table class="info-table1">
        <tbody>
            <tr>

                <td colspan="3"><b> </b></td>
                <td colspan="3"><b>Box </b></td>
                @if ($mudjar->type == 'mud')
                    <td><b>Body Thread</b></td>
                @endif
                <td colspan="3"><b>Pin</b></td>

            </tr>
            <tr>
                <td style="width: 10% "><b>Serial No </b></td>
                <td style="width: 40% "><b>Description </b></td>
                <td style="width: 5% "><b>Length </b></td>
                <td style="width: 10% "><b>Thread </b></td>
                <td style="width: 5% "><b> OD</b></td>
                <td style="width: 5% "><b>Cond</b></td>
                @if ($mudjar->type == 'mud')
                    <td style="width: 10% "><b>Cond</b></td>
                @endif
                <td style="width: 5% "><b>Conn </b></td>
                <td style="width: 5% "><b> ID</b></td>
                <td style="width: 5% "><b>Cond</b></td>
            </tr>
            @foreach ($mudjar->getDesc as $index => $body)
                <tr>
                    <td style="width: 10% ">{{ getDecode($body->description)['serial_no'] ?? '' }} </td>
                    <td style="width: 40% ">{{ getDecode($body->description)['description'] ?? '' }}</td>
                    <td style="width: 5% ">{{ getDecode($body->description)['length'] ?? '' }} </td>
                    <td style="width: 10% ">{{ getDecode($body->description)['box_thread'] ?? '' }} </td>
                    <td style="width: 5% "> {{ getDecode($body->description)['box_od'] ?? '' }}</td>
                    <td style="width: 5% ">{{ getDecode($body->description)['box_cond'] ?? '' }}</td>
                    @if ($mudjar->type == 'mud')
                        <td style="width: 10% ">{{ getDecode($body->description)['body_thread_cond'] ?? '' }}</td>
                    @endif
                    <td style="width: 5% ">{{ getDecode($body->description)['pin_conn'] ?? '' }} </td>
                    <td style="width: 5% "> {{ getDecode($body->description)['pin_id'] ?? '' }}</td>
                    <td style="width: 5% ">{{ getDecode($body->description)['pin_cond'] ?? '' }}</td>
                </tr>
            @endforeach
            <tr>
                <td><b>Summary</b></td>
                @if ($mudjar->type == 'mud')
                    <td colspan="9">{{ $mudjar->summary }} <b>{{ ' ' . $mudjar->getAccept->name }}</td>
                @else
                    <td colspan="8">{{ $mudjar->summary }} <b>{{ ' ' . $mudjar->getAccept->name }}</b> </td>
                @endif
            </tr>
        </tbody>
    </table>
    {{-- end content table --}}



    <div class="fixedBottom">
        <table class="info-table1 frameless-table">
            <tbody>
                <tr style="font-size:110%;">
                    <td class="left">
                        <b>Inspector:</b> {{ $mudjar->getUser->full_name }}
                    </td>
                    <td class="right">
                        <b>Date:</b> {{ $mudjar->date }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


@endsection
@section(' script') @endsection

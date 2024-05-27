@extends('website.reports.Layouts.Horizontal.master')
@section('title',  "STC Inspection Reports")
@section('style')
    <link rel="stylesheet" href="{{ public_path('website/assets/pages/tools/css/style.css') }}">

@endsection
@section('customHeader',"Tublar Inspection Services")
@section('reports')
    <table class="contentTable">
            {!! $tubs->description !!}
    </table>
            {{--    <div class="center">--}}
{{--        <b>{{strtoupper($tools->type).ucwords(" subs Inspection Reports")}}</b>--}}
{{--    </div>--}}
{{--    <table class="contentTable">--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <th>Client</th>--}}
{{--            <td>{{$tools->getOrders->companies->name}}</td>--}}
{{--            <th>Address</th>--}}
{{--            <td>{{$tools->getOrders->rigs->name}}</td>--}}
{{--            <th>location</th>--}}
{{--            <td>{{$tools->getOrders->rigs->location}}</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th>status</th>--}}
{{--            <td>{{$tools->status}}</td>--}}
{{--            <th>date of inspection</th>--}}
{{--            <td>{{$tools->st_date}}</td>--}}
{{--            <th>due date insp</th>--}}
{{--            <td>{{$tools->fin_date}}</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th>Work Order</th>--}}
{{--            <td>{{$tools->work_order}}</td>--}}
{{--            <th>report number</th>--}}
{{--            <td>{{$tools->report_num}}</td>--}}
{{--            <th>specification</th>--}}
{{--            <td>{{$tools->spec}}</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th> insp methods</th>--}}
{{--            <td colspan="3">{{$tools->methods}}</td>--}}
{{--            <th> procedure</th>--}}
{{--            <td >{{$tools->procedure}}</td>--}}

{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}

    {{-- description table--}}
{{--    @include("website.reports.pages.Tublar.Tools.desc.".str_replace('*','-',$tools->type))--}}
    {{-- end description table --}}

{{--    <table class="contentTable">--}}

{{--        <tbody class="left">--}}
{{--        <tr>--}}
{{--            <th class="left">Summary</th>--}}
{{--            <td class="left" colspan="3" >{{ $tools->summary}}</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    <table class="info-table1 frameless-table" style="height: 10px;">--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            --}}{{-- operator  --}}
{{--            <td style="width:auto; text-align:left">--}}
{{--                <div><b>Customer Signuture : </b> </div>--}}
{{--            </td>--}}
{{--            <td class="left">--}}
{{--                <b>Inspector Signature : </b>{{ $tools->getUser->full_name}}--}}
{{--            </td>--}}

{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--    <table class="abb">--}}
{{--        <thead>--}}
{{--        --}}{{--  <tr>--}}
{{--            <th colspan="14">Data Abbrevations</th>--}}
{{--        </tr>  --}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td class="abb-tx">O.D</td>--}}
{{--            <td abb-ty>Outside Diameter</td>--}}
{{--            <td class="abb-tx">WO</td>--}}
{{--            <td abb-ty>Wash-Out</td>--}}
{{--            <td class="abb-tx">BB</td>--}}
{{--            <td abb-ty>Bell-out Box</td>--}}
{{--            <td class="abb-tx">B</td>--}}
{{--            <td abb-ty>Blade Length</td>--}}

{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="abb-tx">C</td>--}}
{{--            <td class="abb-ty">Cracked</td>--}}
{{--            <td class="abb-tx">PS</td>--}}
{{--            <td class="abb-ty">Pitted Seal</td>--}}
{{--            <td class="abb-tx">OW</td>--}}
{{--            <td class="abb-ty">OD Wear</td>--}}
{{--            <td class="abb-tx">C'Bore</td>--}}
{{--            <td class="abb-ty">Counter Bore</td>--}}

{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="abb-tx">SD</td>--}}
{{--            <td class="abb-ty">Seal Damaged</td>--}}
{{--            <td class="abb-tx">C</td>--}}
{{--            <td class="abb-ty">Top Neck Length</td>--}}
{{--            <td class="abb-tx">IC</td>--}}
{{--            <td class="abb-ty">Internal Corrosion</td>--}}
{{--            <td class="abb-tx">B'Back</td>--}}
{{--            <td class="abb-ty">Boreback</td>--}}


{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="abb-tx">SD</td>--}}
{{--            <td class="abb-ty">Seal Damaged</td>--}}
{{--            <td class="abb-tx">C</td>--}}
{{--            <td class="abb-ty">Top Neck Length</td>--}}
{{--            <td class="abb-tx">IC</td>--}}
{{--            <td class="abb-ty">Internal Corrosion</td>--}}
{{--            <td class="abb-tx">B'Back</td>--}}
{{--            <td class="abb-ty">Boreback</td>--}}

{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
@endsection
@section(' script') @endsection

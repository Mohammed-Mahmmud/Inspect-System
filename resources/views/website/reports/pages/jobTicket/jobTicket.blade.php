@extends('website.reports.Layouts.Vertical.master')
@section('title', 'STC Job TIcket')
@section('style')
<link rel="stylesheet" href="{{ public_path('website/assets/pages/jobticket/css/style.css') }}">
@endsection
@section('customHeader',"STC Job Ticket")
@section('reports')
<div style="text-align: center;">
    <b>Job Ticket</b>
</div>

<table class="info-table1">
    <tr>

        <td class="table1-label">W.O No:</td>
        <td class="table1-content">{{$jobTicket->work_number}}</td>
        <td class="table1-label">ISPR :</td>
        <td class="table1-content">{{$jobTicket->ispr}} </td>
    </tr>
    <tr>
        <td class="table1-label">Customer:</td>
        <td class="table1-content">{{ $jobTicket->getOrders->companies->name}} </td>
        <td class="table1-label">Well Name :</td>
        <td class="table1-content">{{$jobTicket->well_name}}</td>
    </tr>
    <tr>
        <td class="table1-label">Address :</td>
        <td class="table1-content">{{$jobTicket->getOrders->Companies->location}} </td>
        <td class="table1-label">Rig :</td>
        <td class="table1-content">{{ $jobTicket->getOrders->rigs->name}}</td>
    </tr>


    <tr>
        <td class="table1-label">Work Location :</td>
        <td class="table1-content">{{ $jobTicket->getOrders->rigs->location}}</td>
        <td class="table1-label"> Ref.No :</td>
        <td class="table1-content">{{$jobTicket->ref_number}}</td>
    </tr>
    <tr>
        <td class="table1-label">Start Date:</td>
        <td class="table1-content">{{$jobTicket->start_date}}</td>
        <td class="table1-label">End Date :</td>
        <td class="table1-content"> {{$jobTicket->end_date}} </td>
    </tr>
</table>





{{-- content table  --}}
<table class="info-table1">
    <tbody>
        <tr>
            <td style="width: 10% "><b>Contract Code </b></td>
            <td style="width: 10% "><b>Quantity </b></td>
            <td style="width: 40% "><b>Description </b></td>
            <td style="width: 10% "><b>OD Size </b></td>
            <td style="width: 10% "><b>Range</b></td>
            <td style="width: 10% "><b>Unit price -$</b></td>
            <td style="width: 10% "><b>Total price - $</b></td>
        </tr>
        @foreach($jobTicket->jobTicketContents as $item)
        <tr>
            <td colspan=7>{{ $item->main_description }}</td>
        </tr>
        <tr>
            <td style="width: 10% ">{{ $item->contract_code }}</td>
            <td style="width: 10% ">{{ $item->quantity }}</td>
            <td style="width: 40% ">{{ $item->description }}</td>
            <td style="width: 8% ">{{ $item->od_size }}</td>
            <td style="width: 8% ">{{ $item->range }}</td>
            <td style="width: 11% ">{{ $item->unit_price }}</td>
            <td style="width: 11% ">{{ $item->total_price }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan=4><b>Total Price of Job Ticket ($) :</b></td>
            <td colspan=3>{{ $jobTicket->job_price }}</td>
        </tr>
    </tbody>
</table>
{{-- end content table  --}}



<table class="info-table1 frameless-table" style="height: 20px;">
    <tbody>
        <tr>
            {{-- Approval  --}}
            <td class="left">

                <b>Approval : </b>{{ $jobTicket->approval }}


            </td>
            {{-- signture logo  --}}
            <td>
                {{-- <img src="https://cloudinary-marketing-res.cloudinary.com/images/w_1000,c_scale/v1679921049/Image_URL_header/Image_URL_header-png?_i=AA" alt="" width="50%" height="50" />  --}}
            </td>
            {{-- operator  --}}
            <td style="width:auto;">
                <b>Operator Sign : </b>{{ $jobTicket->getUsers->full_name }}
                {{-- <label style="display: inline-block;"><b>Operator Sign :</b> </label>
                <input class="frameless" type="text" value="{{ $jobTicket->getUsers->name }}"> --}}
            </td>

        </tr>
    </tbody>
</table>
@endsection
@section(' script') @endsection

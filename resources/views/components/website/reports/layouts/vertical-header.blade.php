<table style="margin-top:-30px;">
    <tr>
        <td style="text-align: center;">
            <img src="{{ $image }}" alt="" height="80" width="100%">
        </td>
        <td>
            <h5>{{ ucwords($header['title']) }}
                <br>
                @yield('customHeader')
            </h5>
        </td>
        <td class="center">
            <div class="center" style="font-size: 60%;">
                {{ ucwords($header['address']) }}, Phone: {{ $header['phone1'] }} ,{{ $header['phone2'] }}
                <br>Email:- {{ $header['email1'] }}, {{ $header['email2'] }}
                <br>
                Fax:- {{ $header['fax'] }} Website:- {{ $header['website'] }},
            </div>
            <div class="center" style="font-size: 62%;">
                Commercial Registration No: {{ $header['Commercial Registration No'] }}
                <br>
                EGPC Registration No:{{ $header['EGPC Registration No'] }}
                <br>
                Doc Ref : &nbsp;&nbsp;&nbsp;&nbsp;
                Tax ID Number: {{ $header['Tax ID Number'] }}
            </div>
        </td>
    </tr>
</table>

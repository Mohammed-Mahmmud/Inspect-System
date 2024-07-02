@props([
    'reportTitle' => false,
])
<div>
    <table style="margin-top:-35px;">
        <tbody>
            <tr>
                <td style="text-align: center; width: 30%">
                    <img src="{{ $image }}" alt="" height="80" width="100%">
                </td>
                <td style="width: 35%">
                    <h4 style="text-align: center; font-size: 100%;">{{ ucwords($header['title']) }}
                        <br>
                        {{ $reportTitle }}
                    </h4>
                </td>
                <td style="font-size: 70%; width: 35%">
                    <div> {{ ucwords($header['address']) }}- Phone: {{ $header['phone1'] }}, </div>
                    <div>{{ $header['phone2'] }} - Emails: {{ $header['email1'] }}, {{ $header['email2'] }}</div>
                    <div>Website: {{ $header['website'] }} - Commercial Registration No:
                        {{ $header['Commercial Registration No'] }}
                    </div>
                    <div>Fax: {{ $header['fax'] }} - EGPC Registration No:{{ $header['EGPC Registration No'] }}</div>
                    <div> Tax ID Number: {{ $header['Tax ID Number'] }}</div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

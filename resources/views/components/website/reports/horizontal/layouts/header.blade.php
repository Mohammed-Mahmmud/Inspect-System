<table style="margin-top:-35px;">
    <tbody>
        <tr>
            <td style="text-align: center;">
                <img src="{{ $image }}" alt="headerImage" height="70" width="65%">
            </td>
            <td>
                <h4>{{ ucwords($header['title']) }}
                    <br>
                    @yield('customHeader')
                </h4>
            </td>
            <td style="font-size: 70% " width="auto">
                <div> {{ ucwords($header['address']) }}- Phone: {{ $header['phone1'] }}, </div>
                <div>{{ $header['phone2'] }} - Emails: {{ $header['email1'] }}, {{ $header['email2'] }}</div>
                <div>Website: {{ $header['website'] }} - Commercial Registration No:
                    {{ $header['Commercial Registration No'] }}</div>
                <div>Fax: {{ $header['fax'] }} - EGPC Registration No:{{ $header['EGPC Registration No'] }}</div>
                <div> Tax ID Number: {{ $header['Tax ID Number'] }} - Ref.No:</div>
            </td>
        </tr>
    </tbody>
</table>

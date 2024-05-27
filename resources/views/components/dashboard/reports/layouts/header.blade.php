@props([
'reportTitle' => false,
])
<div>
<table style="margin-top:-35px;">
    <tbody>
    <tr>
        <td style="text-align: center;">
            <img src="{{ $image }}" alt="" height="100" width="80%">
        </td>
        <td>
            <h4 style="text-align: center; font-size: 100%">{{ ucwords($title) }}
                <br>
                {{ $reportTitle }}
            </h4>
        </td>
        <td style="font-size: 70% " width="auto">
           <div> {{ ucwords($address) }}- Phone: {{ $phone1 }}, </div>
            <div>{{ $phone2 }} - Emails: khaled.soliman@stc-eg.com, abbas@stc-eg.com</div>
            <div>Website: www.stc-eg.com   -   Commercial Registration No: 76451</div>
            <div>Fax: +20225175939   -    EGPC Registration No:122 / Dec 2022</div>
            <div> Tax ID Number: 479-427-860   -   Ref.No:</div>
        </td>
    </tr>
    </tbody>
</table>
</div>
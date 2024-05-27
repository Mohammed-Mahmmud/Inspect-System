<!-- Rounded Ribbon -->
<div class="card ribbon-box border shadow-none mb-lg-0">
    <div class="card-body">
        <div class="ribbon-content mt-4 text-muted">
            <x-dashboard.reports.layouts.header  reportTitle="{{ ucwords('tubular inspection system') }}"/>
<div class="center">
    <b>{{strtoupper($examType).ucwords(" subs Inspection Reports")}}</b>
</div>
<table class="contentTable">
<tbody>
<tr>
    <th>Customer</th>
    <td><input class ="form-control" type="text"></td>
    <th>Purchase Order No</th>
    <td><input class ="form-control" type="text"></td>
    <th>Date of Insp</th>
    <td><input class ="form-control" type="date"></td>
</tr>
    {{-- {{ dd($orders) }} --}}
<tr>
    <th>Insp Location</th>
    <td><input class ="form-control" type="text"></td>
    <th>Job Ticket No</th>
    <td colspan="3">
        <x-default.dropdown class="form-control" label="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" name="order_id" id="order_id" disabledOption="{{ ucwords('Job Ticket Numbers') }}" :data="$orders" selectedData="{{ optional($tubs->getOrders)->id }}" span="{{ TranslationHelper::translate(ucwords('JobTicket Number')) }}" />
    </td>
</tr>
</tbody>
</table>

{{-- description table--}}
{{-- @include("website.reports.pages.Tublar.Tools.desc.".str_replace('*','-',$tools->type)) --}}
{{-- end description table --}}

<table class="contentTable">

    <tbody class="left">
        <tr>
            <th class="left">Summary</th>
            <td class="left" colspan="3" >welcme</td>
        </tr>
    </tbody>
</table>
<table class="info-table1 frameless-table" style="height: 10px;">
    <tbody>
        <tr>
            {{-- operator  --}}
            <td style="width:auto; text-align:left">
                <div><b>Customer Signuture : </b> </div>
            </td>
            <td class="left">
                <b>Inspector Signature : </b>welcome
            </td>

        </tr>
    </tbody>
</table>
<table class="abb">
    <thead>
        {{--  <tr>
            <th colspan="14">Data Abbrevations</th>
        </tr>  --}}
    </thead>
    <tbody>
        <tr>
            <td class="abb-tx">O.D</td>
            <td abb-ty>Outside Diameter</td>
            <td class="abb-tx">WO</td>
            <td abb-ty>Wash-Out</td>
            <td class="abb-tx">BB</td>
            <td abb-ty>Bell-out Box</td>
            <td class="abb-tx">B</td>
            <td abb-ty>Blade Length</td>

        </tr>
        <tr>
            <td class="abb-tx">C</td>
            <td class="abb-ty">Cracked</td>
            <td class="abb-tx">PS</td>
            <td class="abb-ty">Pitted Seal</td>
            <td class="abb-tx">OW</td>
            <td class="abb-ty">OD Wear</td>
            <td class="abb-tx">C'Bore</td>
            <td class="abb-ty">Counter Bore</td>

        </tr>
        <tr>
            <td class="abb-tx">SD</td>
            <td class="abb-ty">Seal Damaged</td>
            <td class="abb-tx">C</td>
            <td class="abb-ty">Top Neck Length</td>
            <td class="abb-tx">IC</td>
            <td class="abb-ty">Internal Corrosion</td>
            <td class="abb-tx">B'Back</td>
            <td class="abb-ty">Boreback</td>


        </tr>
        <tr>
            <td class="abb-tx">SD</td>
            <td class="abb-ty">Seal Damaged</td>
            <td class="abb-tx">C</td>
            <td class="abb-ty">Top Neck Length</td>
            <td class="abb-tx">IC</td>
            <td class="abb-ty">Internal Corrosion</td>
            <td class="abb-tx">B'Back</td>
            <td class="abb-ty">Boreback</td>

                  </tr>
    </tbody>
        </table>
            <x-dashboard.reports.layouts.footer />
        </div>
    </div>
</div>



{{--

<br/>
<table style="border-collapse:collapse;margin-left:5.391pt" cellspacing="0">
    <tr style="height:62pt">
        <td style="width:258pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p style="padding-left: 46pt;text-indent: 0pt;text-align: left;"><span><table border="0" cellspacing="0"
                                                                                          cellpadding="0"><tr><td><img
                    width="222" height="60"
                  ></td></tr></table></span>
            </p>
        </td>
        <td style="width:257pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="padding-top: 3pt;text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s1" style="padding-left: 60pt;text-indent: -32pt;text-align: left;">Skills For Technology And
                Coring STC Tublar Inspection Services</p></td>
        <td style="width:258pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s2" style="padding-top: 1pt;text-indent: 0pt;text-align: center;">5H/6 Al Nasr Street, New Maadi,
                Cairo, Egypt,- Phone: +201007666103,</p>
            <p style="padding-left: 7pt;padding-right: 6pt;text-indent: 0pt;text-align: center;"><a
                    href="mailto:khaled.soliman@stc-eg.com" class="s3" target="_blank">+201006617985+201006617985 -
                Emails: </a><a href="mailto:abbas@stc-eg.com" class="s3" target="_blank">khaled.soliman@stc-eg.com,
                abbas@stc-eg.com</a></p>
            <p class="s2" style="padding-left: 19pt;padding-right: 18pt;text-indent: 0pt;text-align: center;"><a
                    href="http://www.stc-eg.com/" class="s3" target="_blank">Website: </a>www.stc-eg.com - Commercial
                Registration No: 76451 Fax: +20225175939 - EGPC Registration No:122 / Dec 2022 Tax ID Number:
                479-427-860 - Ref.No:</p></td>
    </tr>
</table>
<h1 style="padding-top: 7pt;text-indent: 0pt;text-align: center;">PIN*PIN Subs Inspection Reports</h1>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<table style="border-collapse:collapse;margin-left:5.391pt" cellspacing="0">
    <tr style="height:12pt">
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Client</p>
        </td>
        <td style="width:194pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">test
                comapny</p></td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">
                Address</p></td>
        <td style="width:194pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">
                rig15</p></td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">
                Location</p></td>
        <td style="width:193pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">
                Architecto soluta ni</p></td>
    </tr>
    <tr style="height:21pt">
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="padding-top: 5pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">Status</p></td>
        <td style="width:194pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;padding-left: 1pt;text-indent: 0pt;text-align: center;">Velit
                perferendis ma</p></td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-left: 1pt;padding-right: 2pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Date Of
                Inspection</p></td>
        <td style="width:194pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;padding-left: 1pt;text-indent: 0pt;text-align: center;">2009-02-17</p>
        </td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="padding-top: 5pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">Due Date
                Insp</p></td>
        <td style="width:193pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;padding-left: 1pt;text-indent: 0pt;text-align: center;">1975-06-19</p>
        </td>
    </tr>
    <tr style="height:12pt">
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Work
                Order</p></td>
        <td style="width:194pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">In magni
                odio ut ex</p></td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Report
                Number</p></td>
        <td style="width:194pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">
                STC-11/24-Test Comapny-Rig15-PIN*PIN-1</p></td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">
                Specification</p></td>
        <td style="width:193pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">
                Recusandae Praesent</p></td>
    </tr>
    <tr style="height:12pt">
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Insp
                Methods</p></td>
        <td style="width:452pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            colspan="3"><p class="s5"
                           style="padding-top: 1pt;padding-left: 2pt;text-indent: 0pt;line-height: 9pt;text-align: center;">
            [&quot;visual&quot;,&quot;boroscopic&quot;,&quot;dimensional&quot;,&quot;mag particle&quot;,&quot;eddy
            current&quot;,&quot;liquid penet&quot;,&quot;ultrasonic&quot;]</p></td>
        <td style="width:64pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: left;">
                Procedure</p></td>
        <td style="width:193pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-top: 1pt;padding-left: 1pt;text-indent: 0pt;line-height: 9pt;text-align: center;">
                Excepturi aut corpor</p></td>
    </tr>
</table>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<table style="border-collapse:collapse;margin-left:5.391pt" cellspacing="0">
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            rowspan="3"><p style="padding-top: 1pt;text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s4" style="text-indent: 0pt;text-align: center;">#</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            rowspan="3"><p class="s4" style="padding-top: 5pt;padding-left: 11pt;text-indent: -4pt;text-align: left;">
            Serial No.</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            rowspan="3"><p class="s4" style="padding-top: 5pt;padding-left: 13pt;text-indent: -11pt;text-align: left;">
            Descripti on</p></td>
        <td style="width:71pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            colspan="2" rowspan="2"><p class="s4"
                                       style="padding-top: 5pt;padding-left: 15pt;text-indent: 0pt;text-align: left;">
            Connection</p></td>
        <td style="width:105pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            colspan="3" rowspan="2"><p class="s4"
                                       style="padding-top: 5pt;padding-left: 35pt;text-indent: 0pt;text-align: left;">
            Condition</p></td>
        <td style="width:492pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            colspan="14"><p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Dimensional</p>
        </td>
    </tr>
    <tr style="height:10pt">
        <td style="width:211pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            colspan="6"><p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin1</p></td>
        <td style="width:211pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            colspan="6"><p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Body</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
            rowspan="2"><p class="s4" style="padding-top: 5pt;padding-left: 1pt;text-indent: 0pt;text-align: left;">
            Remarks</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin 1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin 2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin 1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin 2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Body</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">OD</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">ID</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">SRG</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">SRG</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Bevel</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">OD</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">ID</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">SRG</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">SRG</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Pin</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Bevel</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s4" style="text-indent: 0pt;line-height: 8pt;text-align: center;">Overall</p></td>
    </tr>
    <tr style="height:30pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">2121212</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">21</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 10pt;text-align: center;">Tempore nostrud com</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">12</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">21</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">12</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">12</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">21</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">12</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5"
               style="padding-left: 1pt;padding-right: 1pt;text-indent: 0pt;line-height: 10pt;text-align: center;">
                Reprehen derit saepe</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">5</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">4564</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">5645</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p style="text-indent: 0pt;text-align: left;"><br/></p>
            <p class="s5" style="text-indent: 0pt;text-align: center;">454</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">2</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">545</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">545</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">3</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">545</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">4</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">4</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">545</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">4</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">6</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">45</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">454</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">7</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">51</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">5</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">11</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">34</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">34</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">381</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">81</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">01</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">1</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">54</p></td>
    </tr>
    <tr style="height:20pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">8</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">164</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-left: 5pt;text-indent: -2pt;line-height: 10pt;text-align: left;">Aut nihil id
                est si</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">843</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">51</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">54</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">48</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">48</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">848</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">44</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">8</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">8</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">48</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">4</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="padding-top: 5pt;text-indent: 0pt;text-align: center;">88</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">9</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">48</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">884</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">4</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">48</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">4884</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">48</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">844</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">4884</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">848</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">848</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">10</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">884</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">48</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
    </tr>
    <tr style="height:10pt">
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">11</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">848</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">88</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">884</p></td>
        <td style="width:36pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">8484</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
        <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s5" style="text-indent: 0pt;line-height: 8pt;text-align: center;">84</p></td>
    </tr>
</table>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<div class="textbox"
     style="border:0.8pt solid #000000;display:block;left:0.4pt;min-height:11.9pt;top:77.7pt;width:695.8pt;"><p
        class="s5" style="padding-top: 1pt;text-indent: 0pt;text-align: left;">Dolore natus cupidat</p></div>
<div class="textbox"
     style="border:0.8pt solid #000000;display:block;left:0.4pt;min-height:11.9pt;top:0.4pt;width:77.3pt;"><p class="s4"
                                                                                                              style="padding-top: 1pt;text-indent: 0pt;text-align: left;">
    Summary</p></div>
<p style="padding-left: 4pt;text-indent: 0pt;text-align: left;"/>
<p style="padding-top: 7pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">Customer Signuture : Inspector
    Signature : <span class="s6">Mohamed Khater User</span></p>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<table style="border-collapse:collapse;margin-left:6.141pt" cellspacing="0">
    <tr style="height:11pt">
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">O.D</p></td>
        <td style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Outside
                Diameter</p></td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">WO</p></td>
        <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Wash-Out</p>
        </td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">BB</p></td>
        <td style="width:129pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Bell-out
                Box</p></td>
        <td style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">B</p></td>
        <td style="width:125pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Blade
                Length</p></td>
    </tr>
    <tr style="height:11pt">
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">C</p></td>
        <td style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Cracked</p>
        </td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">PS</p></td>
        <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Pitted Seal</p>
        </td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">OW</p></td>
        <td style="width:129pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">OD Wear</p>
        </td>
        <td style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">C&#39;Bore</p>
        </td>
        <td style="width:125pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Counter
                Bore</p></td>
    </tr>
    <tr style="height:11pt">
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">SD</p></td>
        <td style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Seal
                Damaged</p></td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">C</p></td>
        <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Top Neck
                Length</p></td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">IC</p></td>
        <td style="width:129pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Internal
                Corrosion</p></td>
        <td style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">B&#39;Back</p>
        </td>
        <td style="width:125pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Boreback</p>
        </td>
    </tr>
    <tr style="height:11pt">
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">SD</p></td>
        <td style="width:124pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Seal
                Damaged</p></td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">C</p></td>
        <td style="width:118pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Top Neck
                Length</p></td>
        <td style="width:60pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">IC</p></td>
        <td style="width:129pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Internal
                Corrosion</p></td>
        <td style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">B&#39;Back</p>
        </td>
        <td style="width:125pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
            <p class="s7" style="padding-top: 1pt;text-indent: 0pt;line-height: 8pt;text-align: center;">Boreback</p>
        </td>
    </tr>
</table>
<p style="text-indent: 0pt;text-align: left;"><br/></p>
<p style="padding-left: 5pt;text-indent: 0pt;text-align: left;"><span><table border="0" cellspacing="0" cellpadding="0"><tr><td><img
        width="1032" height="27"></td></tr></table></span>
</p> --}}

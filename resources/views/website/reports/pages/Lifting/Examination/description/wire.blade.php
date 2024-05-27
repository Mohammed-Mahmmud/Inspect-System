 <td class="left">
     <b style="text-decoration: underline;"> {{ $examination->desc_header }}</b><br><br>
     {{ $examination->desc_content }}<br>
     <b>DIAMETER:</b> {{ $examination->diameter }} {{ $examination->diameter_unit }} <br>
     <b>LENGTH:</b> {{ $examination->length }} {{ $examination->length_unit }} <br>
     @if(isset($examination->location))
     <b>LOCATION:</b> {{ $examination->location }} <br>
    @endif
     EXAMINED ACCORDING TO <br>
     BS EN 13414-2:2003+A2:2008
 </td>
 <td>{{ $examination->manufature_date }}</td>
 <td>{{ $examination->swl }}</td>

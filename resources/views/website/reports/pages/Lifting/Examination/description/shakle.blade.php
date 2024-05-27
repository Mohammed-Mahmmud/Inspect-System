 <td class="left">
     <b style="text-decoration: underline;"> {{ $examination->desc_header }}</b><br>
     MANUFACTURER : {{ $examination->desc_manufature }}<br>
     SIZE: {{ $examination->getShakleSize->size }}<br>
    @if(isset($examination->desc_type))
     TYPE: {{ $examination->desc_type }} <br>
     @endif
     <br>
     EXAMINED ACCORDING TO BS EN<br>
     13889:2003+A1:2008
     <br>

 </td>
 <td>{{ $examination->manufature_date }}</td>
 <td>{{$examination->getShakleSize->swl}}</td>

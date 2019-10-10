<?php $number=1;?>
@foreach ($exchangelogs as $exchangelog )
<tr class="odd gradeX">




	<td class="row_data" style="width:10px">{{$number++}}</td>
	<td class="row_data" style="width:100px"> {{$exchangelog->account_number}} </td>
	<td class="row_data" style="width:100px"> {{$exchangelog->from}}/{{$exchangelog->to}} </td>
	<td class="row_data" style="width:100px">{{$exchangelog->operation}} </td>
	<td class="row_data" style="width:100px">{{number_format($exchangelog->amount_from, 2)}}{{$exchangelog->from}} </td>
	<td class="row_data" style="width:100px">{{number_format($exchangelog->amount_to, 2)}}{{$exchangelog->to}} </td>
	<td class="row_data" style="width:100px">{{$exchangelog->sale}} </td>
	<td class="row_data" style="width:100px">{{$exchangelog->buy}} </td>
	<td class="row_data" style="width:120px">{{$exchangelog->created_at}} </td>

</tr>
@endforeach

<tr>
	<td colspan="9" align="center">
		{{ $exchangelogs->links() }}
	</td>
</tr>
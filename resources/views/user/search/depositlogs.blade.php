<?php $number=1;?>
@foreach ($deposit as $log )
<tr class="odd gradeX">
	<td class="row_data" style="width:10px">{{$number++}}</td>
	<td class="row_data" style="width:150px"> {{$log->senderAccount}} </td>
	<td class="row_data" style="width:150px"> {{$log->senderName}} </td>
	<td class="row_data" style="width:100px">{{number_format($log->balance, 2)}}</td>
	<td class="row_data" style="width:150px">{{$log->coin}} </td>
	<td class="row_data" style="width:50px">{{$log->created_at}} </td>


</tr>
@endforeach
<tr>
	<td colspan="6" align="center">
    {{ $deposit->links() }}
	</td>
</tr>
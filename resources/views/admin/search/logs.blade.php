<?php $number=1;?>
@foreach ($logs as $log )
<tr class="odd gradeX">




	<td class="row_data" style="width:10px">{{$number++}}</td>
	<td class="row_data" style="width:120px"> {{$log->senderAccount}} </td>
	<td class="row_data" style="width:120px"> {{$log->senderName}} </td>
	<td class="row_data" style="width:120px">{{$log->receiverAccount}} </td>
	<td class="row_data" style="width:120px"> {{$log->receiverName}} </td>
	<td class="row_data" style="width:120px">{{number_format($log->balance, 2)}}</td>
	<td class="row_data" style="width:120px">{{$log->coin}} </td>
	<td class="row_data" style="width:120px">{{$log->created_at}} </td>


</tr>
@endforeach
<tr>
	<td colspan="8" align="center">
		{{ $logs->links() }}
	</td>
</tr>
<?php $number=1;?>
@foreach ($office_logs as $office_log )
<tr class="odd gradeX">




	<td class="row_data" style="width:10px">{{$number++}}</td>
	<td class="row_data" style="width:100px"> {{$office_log->senderAccount}} </td>
		<td class="row_data" style="width:100px"> {{$office_log->senderName}} </td>
	<td class="row_data" style="width:100px">{{$office_log->officeName}} </td>
	<td class="row_data" style="width:100px">{{$office_log->officeAccount}} </td>
	<td class="row_data" style="width:100px">{{$office_log->reciverName}} </td>
	<td class="row_data" style="width:100px">{{$office_log->reciverID}} </td>
	<td class="row_data" style="width:100px">{{$office_log->reciverPhone}} </td>
	<td class="row_data" style="width:100px">{{$office_log->coin}} </td>
	<td class="row_data" style="width:100px">{{number_format($office_log->balance_before_fee, 2)}} </td>
	<td class="row_data" style="width:100px">{{$office_log->office_fee}} {{$office_log->coin}} </td>
		<td class="row_data" style="width:100px">{{$office_log->website_fee}} {{$office_log->coin}}</td>

	@if($office_log->status_id==1)
	<td class="row_data" style="width:100px; color:#FF9990">{{$office_log->status->status}} </td>
	@elseif($office_log->status_id==2)
	<td class="row_data" style="width:100px; color:#32CD32">{{$office_log->status->status}} </td>
	@elseif($office_log->status_id==3)
	<td class="row_data" style="width:100px; color:#FF0000">{{$office_log->status->status}} </td>
	@endif

	<td class="row_data" style="width:100px">{{$office_log->created_at}} </td>
</tr>
@endforeach
<tr>
	<td colspan="14" align="center">
		{{ $office_logs->links() }}
	</td>
</tr>
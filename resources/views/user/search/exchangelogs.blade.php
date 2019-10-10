
		<?php $number=1;?>
		@foreach ($logs as $log )
		<tr class="odd gradeX">
			<td class="row_data" style="width:10px">{{$number++}}</td>
			<td class="row_data" style="width:100px"> {{$log->from}}/{{$log->to}} </td>
			<td class="row_data" style="width:70px">{{$log->operation}} </td>
			<td class="row_data" style="width:150px">{{number_format($log->amount_from, 2)}}{{$log->from}} </td>
			<td class="row_data" style="width:150px">{{number_format($log->amount_to, 2)}}{{$log->to}} </td>
			<td class="row_data" style="width:70px">{{$log->sale}} </td>
			<td class="row_data" style="width:70px">{{$log->buy}} </td>
			<td class="row_data" style="width:170px">{{$log->created_at}} </td>

		</tr>
		@endforeach
		<tr>
	<td colspan="8" align="center">
    {{ $logs->links() }}
	</td>
</tr>
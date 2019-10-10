<?php $number=1;?>
@foreach( $offices as $office )
<tr class="odd gradeX">
<td class="row_data" style="width:50px">{{$number++}}</td>
	<td class="row_data" style="width:100px">{{$office->office->office_name}} </td>
	<td class="row_data" style="width:100px">{{$office->country->name}} </td>
		<td class="row_data" style="width:150px">{{$office->office->address}} </td>
	<td class="row_data" style="width:50px">{{$office->office->fee}}% </td>
</tr>
@endforeach
<tr>
	<td colspan="5" align="center">
	{{ $offices->links() }}
	</td>
</tr>
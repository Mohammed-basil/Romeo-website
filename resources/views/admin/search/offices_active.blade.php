@foreach ($offices as $office )
                                                <tr class="odd gradeX">

                                                   
                                                        
                                                   
                                                 <td class="row_data" style="font-size: 14px;text-align:center">{{$number++}}</td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center"> {{$office->first_name}} {{$office->last_name}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center"> {{$office->office->office_name}}</td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center" >{{$office->country->name}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center"> {{$office->office->address}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center">{{$office->account_number}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center">  <a href="#" class="pop">
                                                        <img id="imageresource"  src=" {{asset($office->image)}}" alt="" width="60px" height="60px" style="border-radius:50%"></a>
                                                    </td>
                                             
                                                    <td style="font-size: 14px;text-align:center"> 
                                                        @if($office->active==0)
                                                        <a href="{{ route('office.active',$office->id) }}" class="btn btn-success btn-sm">تنشيط </a>
                                                          <a href="{{ route('office.reject',$office->id) }}" class="btn btn-danger btn-sm">رفض </a>
                                                       @endif
                                                            </td>
                                                    
													
                                                   
                                                </tr>
                                                
                                                @endforeach
<tr>
	<td colspan="8" align="center">
		{{ $offices->links() }}
	</td>
</tr>
@foreach ($users as $user )
                                                <tr class="odd gradeX">

                                                   
                                                        
                                                   
                                                 <td class="row_data" style="font-size: 14px;text-align:center">{{$number++}}</td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center"> {{$user->first_name}} {{$user->last_name}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center" >{{$user->country->name}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center">{{$user->account_number}} </td>
                                                    <td class="row_data" style="font-size: 14px;text-align:center">  <a href="#" class="pop">
                                                        <img id="imageresource"  src=" {{asset($user->image)}}" alt="" width="60px" height="60px" style="border-radius:50%"></a>
                                                    </td>
                                             
                                                    <td style="font-size: 13px;text-align:center"> 
                                                        @if($user->active==0)
                                                        <a href="{{ route('user.active',$user->id) }}" class="btn btn-success btn-sm">تنشيط </a>
                                                        
                                                        <a href="{{ route('user.reject',$user->id) }}" class="btn btn-danger btn-sm">رفض </a>
                                                        @endif
                                                            </td>
                                                    
													
                                                   
                                                </tr>
                                                
                                                @endforeach
<tr>
	<td colspan="6" align="center">
		{{ $users->links() }}
	</td>
</tr>
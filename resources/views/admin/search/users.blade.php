<?php $number=1;?>
                                                    @foreach ($users as $user )
                                                <tr class="odd gradeX">
                                                 <td class="row_data" style="font-size: 13px;text-align:center">{{$number++}}</td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center"> {{$user->first_name}} {{$user->last_name}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$user->account_number}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center" >{{$user->phonenum}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$user->country->name}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{number_format($user->point->USD, 2)}} </td>
                                                    <td class="row_data"  style="font-size: 13px;text-align:center">{{number_format($user->point->NIS, 2)}}</td>
                                                    <td class="row_data"  style="font-size: 13px;text-align:center">{{number_format($user->point->SAR, 2)}}</td>
                                                    <td class="row_data"  style="font-size: 13px;text-align:center">{{number_format($user->point->JOD, 2)}}</td>
                                                    <td style="font-size: 13px;text-align:center"> 
                                                        @if($user->isBanned())
                                                        <a href="{{ route('users.revokeuser',$user->id) }}" class="btn btn-success btn-sm"> الغاء الحظر</a>
                                                        @else
                                                        <a class="btn btn-danger ban btn-sm" data-id="{{ $user->id }}" data-action="{{ URL::route('users.ban') }}"> حظر</a>
                                                        @endif
                                                            </td>
                                                    
													<td style="font-size: 13px;text-align:center">
                   

                                                      
                                                      <from>
                                                            {{csrf_field()}}
                                                   <button type="submit" title="الصلاحيات" style="width:33px ; height:33px; margin-right:10px;" onclick="return func({{$user->id}})"  class="btn btn-outline btn-circle btn-sm blue open-AddBookDialog">
                                                     <i style="margin-right:-2px " class="fa fa-edit"></i>
                                                   </button>
                                                </form>
                                                    </td>
                                                   
                                                </tr>
                                                @endforeach
<tr>
	<td colspan="11" align="center">
		{{ $users->links() }}
	</td>
</tr>
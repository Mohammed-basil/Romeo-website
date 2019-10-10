<?php $number=1;?>
                                                    @foreach ($offices as $office )
                                                <tr class="odd gradeX">

                                                   
                                                        
                                                   
                                                 <td class="row_data" style="font-size: 13px;text-align:center">{{$number++}}</td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center"> {{$office->first_name}} {{$office->last_name}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$office->office->office_name}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$office->account_number}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center" >{{$office->phonenum}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$office->office->fee}} %</td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$office->country->name}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{$office->office->address}} </td>
                                                    <td class="row_data" style="font-size: 13px;text-align:center">{{number_format($office->point->USD, 2)}} </td>
                                                    <td class="row_data"  style="font-size: 13px;text-align:center">{{number_format($office->point->NIS, 2)}}</td>
                                                    <td class="row_data"  style="font-size: 13px;text-align:center">{{number_format($office->point->SAR, 2)}}</td>
                                                    <td class="row_data"  style="font-size: 13px;text-align:center">{{number_format($office->point->JOD, 2)}}</td>
                                                    <td style="font-size: 13px;text-align:center"> 
                                                        @if($office->isBanned())
                                                        <a href="{{ route('offices.revokeuser',$office->id) }}" class="btn btn-success btn-sm"> الغاء الحظر</a>
                                                        @else
                                                        <a class="btn btn-danger ban btn-sm" data-id="{{ $office->id }}" data-action="{{ URL::route('offices.ban') }}"> حظر</a>
                                                        @endif
                                                            </td>
                                                    
													<td style="font-size: 13px;text-align:center">
                   

                                                      
                                                <from>
                                                            {{csrf_field()}}
                                                   <button type="submit" title="الصلاحيات" style="width:33px ; height:33px; " onclick="return func2({{$office->id}})"  class="btn btn-outline btn-circle btn-sm blue open-AddBookDialog">
                                                     <i style="margin-right:-2px " class="fa fa-edit"></i>
                                                   </button>
                                                </form>
                                                    </td>
                                                   
                                                </tr>
                                                @endforeach
<tr>
	<td colspan="14" align="center">
		{{ $offices->links() }}
	</td>
</tr>
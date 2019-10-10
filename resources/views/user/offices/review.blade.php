@extends('layouts.include')
@section('title')
مراجعة طلبات إرسال الأموال
    @endsection
@section('content')

<div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" style="background: #eef1f5;">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                      
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                         <div style="margin-left:0.1% ;margin-right:0.1% ;margin-top:-5px;" class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                <span  style="color: #3666be;"> الرئيسية </span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span> مراجعة طلبات إرسال الأموال</span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div style="margin-top:10px;"  class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                            
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light portlet-fit bordered">
                                <div  class="portlet-title tabbable-line">
                                                    <div style="width:100%" class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">مراجعة طلبات إرسال الأموال</span>
                                                       </div>
                                                    
                                            </div>
                                    <div class="portlet-body">
                                        
                                    <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                                <tr>
                                                <th style="width:10px">#</th>
                                                    <th style="width:100px" >رقم حساب المرسل  </th>
                                                    <th style="width:100px"> اسم المستفيد</th>
                                                    <th style="width:100px"> رقم هوية المستفيد</th>
                                                    <th style="width:100px" >رقم جوال المستفيد  </th>
                                                    <th style="width:100px"> العملة </th>
                                                    <th style="width:100px"> المبلغ</th>
                                                    <th style="width:100px"> العمولة</th>
                                                    <th style="width:100px"> التاريخ</th>
                                                    <th style="width:100px"> الإجراء</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $number=1;?>
                                                    @foreach ($logs as $office_log )
                                                    
                                                        
                                                  
                                                <tr class="odd gradeX">

                                                   
                                                        
                                                   
                                                 <td class="row_data" style="width:10px">{{$number++}}</td>
                                                    <td class="row_data" style="width:100px"> {{$office_log->senderAccount}}  </td>
                                                    <td class="row_data" style="width:100px">{{$office_log->reciverName}} </td>
                                                    <td class="row_data"  style="width:100px">{{$office_log->reciverID}} </td>
                                                    <td class="row_data"  style="width:100px">{{$office_log->reciverPhone}} </td>
                                                    <td class="row_data"  style="width:100px">{{$office_log->coin}} </td>
                                                    <td class="row_data"  style="width:100px">{{number_format($office_log->balance_before_fee, 2)}} </td>
                                                    <td class="row_data"  style="width:100px">{{$office_log->fee}} %</td>
                                                    <td class="row_data"  style="width:100px">{{$office_log->created_at}} </td>
                                               
                                                    <td class="row_data"  style="width:100px">
                                                        
                                          
                                                <button type="submit" onclick="return func5({{$office_log->id}})" class="btn btn-fx blue open-AddBookDialog">تم التسليم 
                                                <i  class="fa fa-check "></i>
                                            </button>
                                                   
                                                   
                                           <a href="{{ route('office.send.reject',$office_log->id) }}" class="btn btn-fx red ">رفض  
                                                <i class="fa fa-times"></i>
                                            </a>
                                                     </td>
                                                    </tr>
                                                   
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                        {{ $logs->links() }}
                                    </div>
                                    
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                                
                            </div>
                        </div>
                        </div> </div>
                            
                            </div>
                        </div>
                        <!-- END CONTENT BODY -->
                    </div>
                    
            
        
                <!-- END QUICK SIDEBAR -->
            </div>
            
            <!-- Modal -->
     
      <!-- Modal -->
      
      

      
      
       <div class="modal fade" id="myModal5" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div id="printd" class="modal_body" style="margin:20px;">
				<a href="/office/log" class="close" >&times;</a>
				<br>
				<center id="top" style="border-bottom: 1px solid #EEE;">
					<div>
						<h2 id="office_modal1" style="margin-top:0px; color:#32c5d2">rOmeo</h2>
					</div>
				</center>
				<br>
				<div class="col-md-6" id="review_modal_body">
				</div>
			</div>
			<br><br><br><br><br><br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
				<br>
			<div class="form-group">
				<center>
					<input type="button" onclick="javascript:printDiv('printd')" value="طباعة وصل" class="btn btn-success success"/>					<a class="btn btn default" href="/office/log">إلغاء</a>
				</center>
			</div>
			<br>
		</div>
	</div>
</div>
       




    @endsection
  




@extends('layouts.include')

@section('title')
حسابات المستخدمين 
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
                                <span  style="color: #3666be;"> الحسابات </span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span> حسابات المستخدمين  </span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div style="margin-top:10px;"  class="profile-content">
                        <div class="row">
                            

<div class="col-md-12">
                                            <!-- BEGIN PORTLET -->
                                            <div class="portlet light ">
                                             
                                                <div class="portlet-body">
                                                        <div class="tab-content " >
                                                        <div class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                            <div class="portlet light portlet-fit bordered">
                                <div  class="portlet-title tabbable-line">
                                                    <div style="width:100%" class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                      
                                            <div class="form-group">
															<label class="col-md-1 control-label" style="line-height: 30px;">
																بحث : </label>
															<div class="col-md-3" style="margin-right: -30px;line-height: 0px;">
																<input type="text" name="search" id="search" class="form-control" />
															</div>
															<a href="/excel_admin_users" style="float:left" class="btn green btn-outline">Excel</a>
														</div>
													</div>
                                    <div class="portlet-body">
                                        
                                        <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                        <tr>
                                        <th colspan="5"></th>
                                        <th colspan="4" style="text-align:center">الأرصدة</th>
                                        <th colspan="2"></th>
                                        <tr>
                                                <tr>
                                                <th style="font-size: 13px;text-align:center">#</th>
                                                    <th style="font-size: 13px;text-align:center" >الاسم  </th>
                                                    <th style="font-size: 13px;text-align:center"> رقم الحساب</th>
                                                    <th style="font-size: 13px;text-align:center"> رقم الجوال</th>
                                                    <th style="font-size: 13px;text-align:center"> الدولة </th>
                                                    <th style="font-size: 13px;text-align:center">الدولار الأمريكي</th>
                                                    <th style="font-size: 13px;text-align:center">الشيكل الإسرائيلي</th>
                                                    <th style="font-size: 13px;text-align:center">الريال السعودي</th>
                                                    <th style="font-size: 13px;text-align:center">الدينار   الاردني</th>
													<th style="font-size: 13px;text-align:center">فعال </th>
                                                     <th style="font-size: 13px;text-align:center"> الصلاحيات </th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                           
                                            @include('admin.search.users')
															</tbody>
														</table>
														<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                                                        <input type="hidden" name="hidden_url" id="hidden_url" value="admin/users" />
                                    </div>
                                    
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                                 </div>
                                                                        </div>

                                                            </div>
                                                      
                                                        </div>
                                                    </div>
                                                    <!--END TABS-->
                                                </div>
                                                <br>
                                            </div>
                                            <!-- END PORTLET -->

                        </div>
                        </div> 
						
						</div>
                            
                            </div>
                        </div>
                        <!-- END CONTENT BODY -->
                    </div>
                    
            
        
                <!-- END QUICK SIDEBAR -->
            </div>
            
            <!-- Modal -->
     
            
            
            <div class="modal fade" id="myModal" role="dialog" >
    <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">الصلاحيات</h4>
          </div>
          <div id="permission_modal_body">
          
        </div>
         
            </div>
        </div>
      </div>




     


    @endsection
    
  
































                        
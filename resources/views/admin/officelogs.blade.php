@extends('layouts.include')

@section('title')
سجل المكاتب
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
                                <span  style="color: #3666be;"> سجل العمليات </span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span> سجل المكاتب  </span>
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
                                                    <!--BEGIN TABS-->
                                             <div class="tab-content">
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
															<a href="/excel_admin_office_log" style="float:left" class="btn green btn-outline">Excel</a>
														</div>
													</div>
                                    <div class="portlet-body">
                                        
                                    <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                                <tr>
                                                <th style="width:10px">#</th>
                                                    <th style="width:100px" >رقم حساب المرسل  </th>
                                                        <th style="width:100px" >اسم المرسل  </th>
                                                    <th style="width:100px"> اسم المكتب </th>
                                                    <th style="width:100px"> رقم حساب المكتب</th>
                                                    <th style="width:100px"> اسم المستفيد</th>
                                                    <th style="width:100px"> رقم هوية المستفيد</th>
                                                    <th style="width:100px" >رقم جوال المستفيد  </th>
                                                    <th style="width:100px"> العملة </th>
                                                    <th style="width:100px"> المبلغ</th>
                                                    <th style="width:100px"> عمولة المكتب</th>
                                                    <th style="width:100px"> عمولة الموقع</th>
                                                    <th style="width:100px"> الحالة</th>
                                                    <th style="width:100px"> التاريخ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @include('admin.search.officelogs')
															</tbody>
														</table>
														<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                                                        <input type="hidden" name="hidden_url" id="hidden_url" value="admin/officelogs" />
                                                        
                                    </div>
                                    
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                                 </div>
                                                                        </div>
                                                                        </div>

                                                            </div>
                                                        </div>
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
     
      
              </div>
    @endsection 
@extends('layouts.include')
@section('title')
تنشيط حسابات المستخدمين 
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
                                <span  style="color: #3666be;"> تنشيط الحسابات </span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span> تنشيط حسابات المستخدمين </span>
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
                                                        <div class="form-group">
															<label class="col-md-1 control-label" style="line-height: 30px;">
																بحث : </label>
															<div class="col-md-3" style="margin-right: -30px;line-height: 0px;">
																<input type="text" name="search" id="search" class="form-control" />
															</div>
														</div>
													</div>
                                    <div class="portlet-body">
                                        
                                        <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                                <tr>
                                                <th style="font-size: 14px;text-align:center">#</th>
                                                    <th style="font-size: 14px;text-align:center" >الاسم  </th>
                                                    <th style="font-size: 14px;text-align:center"> الدولة </th>
                                                    <th style="font-size: 14px;text-align:center"> رقم الحساب</th>
                                                    <th style="font-size: 14px;text-align:center"> صورة الهوية</th>
													<th style="font-size: 14px;text-align:center">فعال </th>
											
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @include('admin.search.users_active')
															</tbody>
														</table>
														<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                                                        <input type="hidden" name="hidden_url" id="hidden_url" value="admin/users_active" />
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
     
            <div class="modal fade" id="imagemodal" >
                <div class="modal-dialog modal-lg">
                    <div class="modal-content c-square">
                        <div class="modal-header">
                        <span >صورة الهوية</span>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       <div class="modal-body" >
                                <img src="" class="imagepreview"  style="height:430px ;width:100%" >
                            
                        </div>
                    </div>
                </div>
            </div>
            

      
    </div>




    @endsection
  
@extends('layouts.include')
@section('title')
عمولة الموقع
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
                                <span  style="color: #3666be;"> العملات </span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span> عمولة الموقع </span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div style="margin-top:10px;"  class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                            
                                    <div class="portlet light portlet-fit bordered">
                                        <div  class="portlet-title tabbable-line">
                                                            <div style="width:100%" class="caption caption-md">
                                                                <i class="icon-globe theme-font hide"></i>
                                                                <span class="caption-subject font-blue-madison bold uppercase">عمولة الموقع</span>
                                                            </div>
                                                            
                                                    </div>
                                    <div class="portlet-body">
                                    <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                                <tr>
                                                <th style="width:10px">#</th>
                                                    <th style="width:150px" >العمولة  </th>
                                                    
                                                    <th style="width:150px"> تعديل</th>
                                                   

                                                </tr>
                                            </thead>
                                            <tbody>
                                                   
                                                    
                                                <tr class="odd gradeX">

                                                        <form action="{{route('fee.update')}}" method="POST" >
                                                                {{csrf_field()}}
                                                        
                                                   
                                                 <td class="row_data" style="width:10px">{{$number++}}</td>
                                                    <td class="row_data" style="width:150px"> <input name="fee" value=" {{$fee->fee}} " required> % </td>
                                                    
                                                    
                                                    <td style="width:70px">
                                                          <button type="submit" class="btn btn-outline btn-circle btn-sm purple fa fa-edit" onclick=" return confirm('هل أنت متأكد تنفيذ التعديل " title="تعديل"></button>
                                                     

                                                    </td>
                                                </form>
                                                </tr>
                                               
                                              
                                            </tbody>
                                        </table>
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
            




    @endsection
  
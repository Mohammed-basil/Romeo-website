@extends('layouts.include')
@section('title')
أسعار العملات
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
                                    <span> أسعار العملات </span>
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
                                                        <span class="caption-subject font-blue-madison bold uppercase">أسعار العملات </span>
                                                    </div>
                                                    
                                            </div>
                                      
                                    <div class="portlet-body">
                                        

                                                  
                                        
                                        <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                                <tr>
                                                <th style="width:10px">#</th>
                                                    <th style="width:150px" >العملة  </th>
                                                    <th style="width:150px"> سعر البيع </th>
                                                    <th style="width:100px">  سعر الشراء</th>
                                                    <th style="width:150px"> تعديل</th>
                                                   

                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($currencies as $currency )
                                                    
                                                <tr class="odd gradeX">

                                                        <form action="{{route('currencies.update',['id'=>$currency->id])}}" method="POST" >
                                                                {{csrf_field()}}
                                                        
                                                   
                                                 <td class="row_data" style="width:10px">{{$number++}}</td>
                                                    <td class="row_data" style="width:150px"> {{$currency->c1}}-{{$currency->c2}} </td>
                                                    <td class="row_data" style="width:150px" ><input name="buy" value=" {{$currency->buy}} " required></td>
                                                    <td class="row_data" style="width:100px"><input name="sale" value="{{$currency->sale}} " required> </td>
                                                    
													<td style="width:70px">
                                                          <button type="submit" class="btn btn-outline btn-circle btn-sm purple fa fa-edit" onclick=" return confirm('هل أنت متأكد تنفيذ التعديل " title="تعديل"></button>
                                                     

                                                    </td>
                                                </form>
                                                </tr>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>

                                        
                                    </div>
                                </div>

                                
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
  
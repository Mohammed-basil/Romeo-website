@extends('layouts.include')
@section('title')
محفظة أرباح إرسال الأموال
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
                                <span  style="color: #3666be;"> المحافظ </span>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span> محفظة أرباح إرسال الأموال </span>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div style="margin-top:10px;"  class="profile-content">
                        <div class="row">
                        <div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title tabbable-line">
						<div class="caption caption-md">
							<i class="icon-globe theme-font hide"></i>
							<span class="caption-subject font-blue-madison bold "> محفظة أرباح إرسال الأموال </span>
						</div>
					</div>
					<div class="portlet-body form">

						<div class="inbox-sidebar">
							<ul class="inbox-nav" style="min-height: 289px;">
								<li>
									<div style="padding: 8px 16px;"> رصيد الدولار الأمريكي
										<span  class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->USD, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;">رصيد الشيكل الإسرائيلي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->NIS,2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد الريال السعودي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->SAR, 2)}}</span>
									</div>
                                </li>
                                <li>
									<div style="padding: 8px 16px;"> رصيد الجنيه المصري
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->EGP, 2)}}</span>
									</div>
                                </li>
                                <li>
									<div style="padding: 8px 16px;"> رصيد الدينار الاردني
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->JOD, 2)}}</span>
									</div>
                                </li>
                                <li>
									<div style="padding: 8px 16px;"> رصيد اليورو الاوروبي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->EUR, 2)}}</span>
									</div>
                                </li>
                                <li>
									<div style="padding: 8px 16px;"> رصيد الليرة التركية
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($fee->TRY, 2)}}</span>
									</div>
                                </li>
							</ul>
						</div>
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
  
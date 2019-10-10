@extends('layouts.include') @section('title') حسابي @endsection @section('content')
<div class="page-content-wrapper">
	<div class="page-content" style="background: #eef1f5;">
		<div style="margin-left:0.1% ;margin-right:0.1% ;margin-top:-5px;" class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<span style="color: #3666be;"> الرئيسية </span>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<span>حسابي</span>
				</li>
			</ul>

		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="portlet light bordered">
					<div class="portlet-title tabbable-line">
						<div class="caption caption-md">
							<i class="icon-globe theme-font hide"></i>
							<span class="caption-subject font-blue-madison bold "> محفظتي</span>
						</div>
					</div>
					<div class="portlet-body form">

						<div class="inbox-sidebar">
							<ul class="inbox-nav" style="min-height: 289px;">
								<li>
									<div style="padding: 8px 16px;"> رصيد الدولار الأمريكي
										<span  class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->USD, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;">رصيد الشيكل الإسرائيلي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->NIS,2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد الريال السعودي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->SAR, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد الجنيه المصري
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->EGP, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد الدينار الاردني
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->JOD, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد اليورو الاوروبي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->EUR, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد الليرة التركية
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->TRY, 2)}}</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-6">
				<div class="portlet light bordered">
					<div class="portlet-title tabbable-line" style="padding-top: 10px;">
						<i class="icon-globe theme-font hide"></i>
						<span class="caption-subject font-blue-madison bold "> بيانات المستخدم </span>
						<button type="submit" style="float:left" class="btn btn-outline  btn-sm red " data-toggle="modal" data-target="#modal_1">تغيير كلمة المرور</button>
						<button type="submit" style="float:left; margin-left:10px" class="btn btn-outline  btn-sm blue " data-toggle="modal" data-target="#modal_11">تعديل البيانات الشخصية</button>

					</div>
					<br>
					<div class="profile-usertitle-name" style=" margin-top: -20px;">
						<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
							<table class="table table-hover table-light">
								<thead>
									<tr>
										<th colspan="2">
											<span class="caption-subject font-blue-madison bold " style="font-size: 20px;"> رقم الحساب : {{ $user->account_number }} </span>
										</th>
									</tr>
								</thead>

								<tr title="الاسم ">
									<td>
										<span class="profile-stat-text" style="font-size: 15px; color:#ADDDEA;">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-user"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;">{{$user->first_name}} {{$user->last_name}}</span>
									</td>
								</tr>

								<tr title="البريد الالكتروني">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-at"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->email}}</span>
									</td>

								</tr>
								<tr title="رقم الهوية">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fas fa-id-card"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->userID}}</span>
									</td>

								</tr>
								<tr title="رقم الجوال">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-mobile"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->phonenum}}</span>
									</td>

								</tr>
								@if($user->category_id == 2)
								<tr title="اسم المكتب">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-building"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->office->office_name}}</span>
									</td>

								</tr>
								<tr title="رقم هاتف المكتب">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-phone"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->office->office_phonenum}}</span>
									</td>

								</tr>
								<tr title="العمولة">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 13px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fas fa-percent"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->office->fee}}%</span>
									</td>

								</tr>
								@endif

								<tr title="الدولة">
									<td>
										<span class="profile-stat-text" style="font-size: 15px; color:#ADDDEA	;">
											<i style="width: auto;color:#ADDDEA;" class="fa fa-globe"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;">{{$user->country->name}}</span>
									</td>
								</tr>

								@if($user->category_id == 2)
								<tr title="العنوان">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-map-marker"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;"> {{$user->office->address}}</span>
									</td>

								</tr>
							
								@endif

							</table>

						</div>

					</div>
				</div>


			</div>
			<div class="col-md-12">
				<div class="portlet light ">
					<div class="portlet-title tabbable-line">

						<div class="caption caption-md">
							<i class="icon-globe theme-font hide"></i>
							<span class="caption-subject font-blue-madison bold uppercase"> سجل العمليات</span>
						</div>
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
									<h4>إرسال الأموال </h4>
								</a>
							</li>
							<li>
								<a href="#tab_1_2" data-toggle="tab">
									<h4>تبديل العملات </h4>
								</a>
							</li>
							<li>
								<a href="#tab_1_6" data-toggle="tab">
									<h4>التحويل المكتبي </h4>
								</a>
							</li>
						</ul>
					</div>
					<div class="portlet-body">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<div class="portlet light ">
									<span class="caption-subject font-blue-madison bold uppercase"> إرسال الأموال</span>
									<div class="portlet-title tabbable-line" style="margin-top: -30px;">
										<ul class="nav nav-tabs">
											<li class="active">
												<a href="#tab_1_3" data-toggle="tab">
													<h4>سحب </h4>
												</a>
											</li>
											<li>
												<a href="#tab_1_4" data-toggle="tab">
													<h4>ايداع </h4>
												</a>
											</li>
										</ul>
									</div>
									<div class="portlet-body">
										<div class="tab-content">
											<div class="tab-pane active" id="tab_1_3">
												<div class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<div class="col1">
														<div class="cont">
															<div class="portlet light portlet-fit bordered">
																<div class="portlet-title tabbable-line">
																	<div style="width:100%" class="caption caption-md">
																		<i class="icon-globe theme-font hide"></i>
																		<span class="caption-subject font-blue-madison bold uppercase"> السحب </span>

																	</div>

																</div>
																<div class="portlet-body">
																	<table class="table table-striped table-hover table-bordered table_sample">
																		<thead>
																			<tr>
																				<th style="width:10px">#</th>
																				<th style="width:100px">رقم حساب المستقبل </th>
											<th style="width:100px">اسم  المستقبل </th>									<th style="width:100px"> المبلغ</th>
																				<th style="width:100px"> العملة</th>
																				<th style="width:200px"> التاريخ</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php $number=1;?>
																			@foreach ($withdrawals as $log )
																			<tr class="odd gradeX">




																				<td class="row_data" style="width:10px">{{$number++}}</td>
																				<td class="row_data" style="width:150px"> {{$log->receiverAccount}} </td>
											<td class="row_data" style="width:150px"> {{$log->receiverName}} </td>
											<td class="row_data" style="width:100px">{{number_format($log->balance, 2)}} </td>
																				<td class="row_data" style="width:150px">{{$log->coin}} </td>
																				<td class="row_data" style="width:50px">{{$log->created_at}} </td>


																			</tr>
																			@endforeach

																		</tbody>

																	</table>

																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="tab-pane" id="tab_1_4">
												<div class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
													<div class="col1">
														<div class="cont">
															<div class="portlet light portlet-fit bordered">
																<div class="portlet-title tabbable-line">
																	<div style="width:100%" class="caption caption-md">
																		<i class="icon-globe theme-font hide"></i>
																		<span class="caption-subject font-blue-madison bold uppercase"> الإيداع</span>

																	</div>

																</div>
																<div class="portlet-body">
																	<table class="table table-striped table-hover table-bordered table_sample">
																		<thead>
																			<tr>
																				<th style="width:10px">#</th>
																				<th style="width:100px">رقم حساب المرسل </th>
																				<th style="width:100px">اسم  المرسل </th>										<th style="width:100px"> المبلغ</th>
																				<th style="width:100px"> العملة</th>
																				<th style="width:200px"> التاريخ</th>
																			</tr>
																		</thead>
																		<tbody>
																			<?php $number=1;?>
																			@foreach ($deposit as $log )
																			<tr class="odd gradeX">




																				<td class="row_data" style="width:10px">{{$number++}}</td>
																				<td class="row_data" style="width:150px"> {{$log->senderAccount}} </td>
										<td class="row_data" style="width:150px"> {{$log->senderName}} </td>
																												<td class="row_data" style="width:100px">{{number_format($log->balance, 2)}}  </td>
																				<td class="row_data" style="width:150px">{{$log->coin}} </td>
																				<td class="row_data" style="width:50px">{{$log->created_at}} </td>


																			</tr>
																			@endforeach

																		</tbody>

																	</table>
																</div>
															</div>
														</div>
													</div>

												</div>

											</div>
										</div>
									</div>
									<!--END TABS-->
								</div>

							</div>
							<div class="tab-pane" id="tab_1_2">
								<div class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
									<div class="col1">
										<div class="cont">
											<div class="portlet light portlet-fit bordered">
												<div class="portlet-title tabbable-line">
													<div style="width:100%" class="caption caption-md">
														<i class="icon-globe theme-font hide"></i>
														<span class="caption-subject font-blue-madison bold uppercase"> تبديل العملات</span>

													</div>

												</div>
												<div class="portlet-body">
													<table class="table table-striped table-hover table-bordered table_sample">
														<thead>
															<tr>
																<th style="width:10px">#</th>
																<th style="width:100px">العملة </th>
																<th style="width:70px"> العملية </th>
																<th style="width:150px"> من</th>
																<th style="width:150px"> الى</th>
																<th style="width:70px">سعر البيع</th>
																<th style="width:70px">سعر الشراء</th>
																<th style="width:170px"> التاريخ</th>
															</tr>
															</tr>
														</thead>
														<tbody>
															<?php $number=1;?>
															@foreach ($logs as $log )
															<tr class="odd gradeX">




																<td class="row_data" style="width:10px">{{$number++}}</td>
																<td class="row_data" style="width:100px"> {{$log->from}}/{{$log->to}} </td>
																<td class="row_data" style="width:70px">{{$log->operation}} </td>
																<td class="row_data" style="width:150px">{{number_format($log->amount_from, 2)}}{{$log->from}} </td>
																<td class="row_data" style="width:150px">{{number_format($log->amount_to, 2)}}{{$log->to}} </td>
																<td class="row_data" style="width:70px">{{$log->sale}} </td>
																<td class="row_data" style="width:70px">{{$log->buy}} </td>
																<td class="row_data" style="width:170px">{{$log->created_at}} </td>

															</tr>
															@endforeach

														</tbody>
													</table>

												</div>
											</div>
										</div>
									</div>

								</div>


							</div>
							<div class="tab-pane" id="tab_1_6">
								<div class="scroller" style="height: 550px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
									<div class="col1">
										<div class="cont">
											<div class="portlet light portlet-fit bordered">
												<div class="portlet-title tabbable-line">
													<div style="width:100%" class="caption caption-md">
														<i class="icon-globe theme-font hide"></i>
														<span class="caption-subject font-blue-madison bold uppercase">التحويل المكتبي</span>

													</div>

												</div>
												<div class="portlet-body">
													<table class="table table-striped table-hover table-bordered table_sample">
														<thead>
															<tr>
																<th style="width:10px">#</th>
																@if(Auth::user()->category_id==2)
																<th style="width:100px">رقم حساب المرسل </th>
																	<th style="width:100px">اسم  المرسل </th>
																<th style="width:100px"> اسم المكتب </th>
																<th style="width:100px"> رقم حساب المكتب</th>
																@elseif(Auth::user()->category_id==1)
																<th style="width:100px"> اسم المكتب </th>
																<th style="width:100px"> رقم حساب المكتب</th>
																@endif

																<th style="width:100px"> اسم المستفيد</th>
																<th style="width:100px"> رقم هوية المستفيد</th>
																<th style="width:100px">رقم جوال المستفيد </th>
																<th style="width:100px"> العملة </th>
																<th style="width:100px"> المبلغ</th>
																<th style="width:100px"> العمولة</th>
																<th style="width:100px"> الحالة</th>
																<th style="width:100px"> التاريخ</th>
															</tr>
														</thead>
														<tbody>
															<?php $number=1;?>
															@foreach ($office as $office_log )
															<tr class="odd gradeX">




																<td class="row_data" style="width:10px">{{$number++}}</td>
																@if(Auth::user()->category_id==2)
																<td class="row_data" style="width:100px"> {{$office_log->senderAccount}} </td>
																					<td class="row_data" style="width:100px"> {{$office_log->senderName}} </td>
																<td class="row_data" style="width:100px">{{$office_log->officeName}} </td>
																<td class="row_data" style="width:100px">{{$office_log->officeAccount}} </td>
																@elseif(Auth::user()->category_id==1)
																<td class="row_data" style="width:100px">{{$office_log->officeName}} </td>
																<td class="row_data" style="width:100px">{{$office_log->officeAccount}} </td>
																@endif

																<td class="row_data" style="width:100px">{{$office_log->reciverName}} </td>
																<td class="row_data" style="width:100px">{{$office_log->reciverID}} </td>
																<td class="row_data" style="width:100px">{{$office_log->reciverPhone}} </td>
																<td class="row_data" style="width:100px">{{$office_log->coin}} </td>
																<td class="row_data" style="width:100px">{{number_format($office_log->balance_before_fee, 2)}} </td>
																<td class="row_data" style="width:100px">{{$office_log->fee}}% </td>

																@if($office_log->status_id==1)
																<td class="row_data" style="width:100px; color:#FF9990">{{$office_log->status->status}} </td>
																@elseif($office_log->status_id==2)
																<td class="row_data" style="width:100px; color:#32CD32">{{$office_log->status->status}} </td>
																@elseif($office_log->status_id==3)
																<td class="row_data" style="width:100px; color:#FF0000">{{$office_log->status->status}} </td>
																@endif

																<td class="row_data" style="width:100px">{{$office_log->created_at}} </td>
															</tr>
															@endforeach

														</tbody>
													</table>

												</div>
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
	<div class="modal fade" id="modal_1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content c-square">
				<div class="modal-header">
					<span>تغيير كلمة المرور</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>

					</button>

				</div>
				<form class="form-horizontal" method="POST" action="{{ route('password.update') }}">
					{{ csrf_field() }}

					<div class="modal-body">

						<div class="col-md-9">

							<label for="current-password" class="col-sm-4 control-label">كلمة المرور الحالية</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="password" class="form-control" id="current-password" name="current-password" required>
								</div>
							</div>
							<label for="password" class="col-sm-4 control-label">كلمة المرور الجديدة</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required title="كلمة المرور لا تقل عن 8 أحرف ، تشمل حروف كبيرة وصغيرة وأرقام ورموز" required>
								</div>
							</div>
							<label for="password_confirmation" class="col-sm-4 control-label"> تأكيد كلمة المرور</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required title="كلمة المرور لا تقل عن 8 أحرف ، تشمل حروف كبيرة وصغيرة وأرقام ورموز" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-6">
								<button type="submit" class="btn btn-danger">حفظ</button>
								<a class="btn btn default" data-dismiss="modal">إلغاء</a>
							</div>
						</div>



					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modal_11">
		<div class="modal-dialog modal-lg">
			<div class="modal-content c-square">
				<div class="modal-header">
					<span>تعديل البيانات الشخصية</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>

					</button>

				</div>
				<form class="form-horizontal" method="POST" action="{{route('profile.update',['id'=>$user->id])}}">
					{{ csrf_field() }}

					
					<div class="modal-body">

						<div class="col-md-9">
						@if($user->category_id == 2)
							<label for="office_name" class="col-sm-4 control-label">اسم المكتب</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="text" class="form-control" id="office_name" name="office_name" value="{{$user->office->office_name}}" required>
								</div>
							</div>
							
							<label for="current-office_phonenum" class="col-sm-4 control-label">رقم هاتف المكتب</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="text" class="form-control" id="office_phonenum" name="office_phonenum"  value="{{$user->office->office_phonenum}}" required>
								</div>
							</div>
							@endif
							<label for="current-phonenum" class="col-sm-4 control-label">رقم الجوال</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="text" class="form-control" id="phonenum" name="phonenum" title="رقم الجوال يتكون من 10 الي 13 خانة" pattern="[0-9]{10,13}" value="{{$user->phonenum}}" required>
								</div>
							</div>
							@if($user->category_id == 2)
							<label for="fee" class="col-sm-4 control-label">العمولة</label>
							<div class="col-sm-8">
							<div class="form-group">
							<div class="input-group">
                                                      
														<input type="number" class="form-control" id="fee" name="fee" value="{{$user->office->fee}}" required> 
														<span class="input-group-addon" >
                                                            <i class="fas fa-percent"></i>
                                                        </span>
														</div>
								
														</div></div>
							@endif
							<label for="country" class="col-sm-4 control-label">الدولة</label>
							<div class="col-sm-8">
								<div class="form-group">
									<select id="country" name="country" class="form-control">
										@foreach ($countries as $country ) @if($country->id==$user->country->id)
										<option value="{{$country->id}}" selected>{{$country->name}}</option>
										@else
										<option value="{{$country->id}}">{{$country->name}}</option>
										@endif @endforeach

									</select>
								</div>
							</div>
							@if($user->category_id == 2)
							<label for="address" class="col-sm-4 control-label">العنوان</label>
							<div class="col-sm-8">
								<div class="form-group">
									<input type="text" class="form-control" id="address" name="address" value="{{$user->office->address}}" required>
								</div>
							</div>
							@endif
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-6">
								<button type="submit" class="btn btn-danger">حفظ</button>
								<a class="btn btn default" data-dismiss="modal">إلغاء</a>
							</div>
						</div>



					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('layouts.include') @section('title') الدعم الفني @endsection @section('content')
<div class="page-content-wrapper">
	<div class="page-content" style="background: #eef1f5;">
		<div style="margin-left:0.1% ;margin-right:0.1% ;margin-top:-5px;" class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<span style="color: #3666be;"> الرئيسية </span>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<span>الدعم الفني</span>
				</li>
			</ul>

		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="portlet light bordered">
					<div class="portlet-title tabbable-line" style="padding-top: 10px;">
						<i class="icon-globe theme-font hide"></i>
						<span class="caption-subject font-blue-madison bold ">التواصل</span>
					</div>
					<br>
					<div class="profile-usertitle-name" style="  margin-top: -20px;">
						<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
							<table  class="table table-hover table-light">
							    @if($contact->mail != null)
								<tr title="البريد الالكتروني">
									<td>
									    	<span class="profile-stat-text" style="font-size: 15px; color:#ADDDEA;">
											<i style="width: auto; color:#ADDDEA;" class="fa fa-at"></i>
										</span>
										</td>
										<td>
										<span class="profile-stat-title" style="font-size: 15px;">البريد الالكتروني : {{$contact->mail}}</span>
									</td>
										</tr>
										@endif
										@if($contact->facebook != null)
								<tr title="حساب الفيسبوك ">
								    	<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-facebook"></i>
										</span>
									</td>
										<td>
										<span class="profile-stat-title" style="font-size: 15px;"><a target="_blank" href="{{$contact->facebook}}">فيسبوك </span>
										
									</td>
										</tr>
											@endif
										@if($contact->twitter != null)
								<tr title="حساب التويتر ">
								    	<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-twitter"></i>
										</span>
									</td>
										<td>
										<span class="profile-stat-title" style="font-size: 15px;"><a target="_blank" href="{{$contact->twitter}}">تويتر</span>
									</td>
										</tr>
											@endif
										@if($contact->instagram != null)
								<tr title="حساب الانستجرام ">
								    	<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-instagram"></i>
										</span>
									</td>
										<td>
										<span class="profile-stat-title" style="font-size: 15px;"><a target="_blank" href="{{$contact->instagram}}">انستغرام</span>
									</td>
										</tr>
											@endif
										@if($contact->youtube != null)
								<tr title="قناة اليوتيوب ">
								    	<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-youtube"></i>
										</span>
									</td>
										<td>
										<span class="profile-stat-title" style="font-size: 15px;"><a target="_blank" href="{{$contact->youtube}}">يوتيوب</span>
									</td>
										</tr>
										@endif
										@if($contact->linkedin != null)
								<tr title="حساب اللينكد إن ">
								    	<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-linkedin"></i>
										</span>
									</td>
										<td>
										<span class="profile-stat-title" style="font-size: 15px;"><a target="_blank" href="{{$contact->linkedin}}">لينكد إن</span>
									</td>
								</tr>
								@endif
@if(count($whatsapp))
								<tr title="رقم الواتس">
									<td>
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-whatsapp"></i>
										</span>
									</td>
									<td>
										<span class="profile-stat-title" style="font-size: 15px;">رقم الواتس :  ‬ </span>
										
										<?php $i=0 ?>
										@foreach($whatsapp as $whats)
										@if($i == 0)
											<span  class="profile-stat-title" style="padding-right:0px ;font-size: 15px;"> {{$whats->phonenum}}‬ </span>
											@else
												<span class="profile-stat-title" style="font-size: 15px;padding-right:83px"> {{$whats->phonenum}}‬ </span>
											@endif
											<?php $i=1 ?>
											<br >
										@endforeach
									</td>

								</tr>
								@endif
							</table>

						</div>

					</div>
				</div>


			</div>
		

		</div>
	</div>
</div>
@endsection
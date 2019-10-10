@extends('layouts.include') @section('title') إرسال الأموال @endsection @section('content')
<div class="page-content-wrapper">
	<div class="page-content" style="background: #eef1f5;">
		<div style="margin-left:0.1% ;margin-right:0.1% ;margin-top:-5px;" class="page-bar">
			<ul class="page-breadcrumb">
				<li>
					<span style="color: #3666be;"> العمليات </span>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<span>إرسال الأموال</span>
				</li>
			</ul>

		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-5">
				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 50px 20px;">
					<h1 class="page-title" style="text-align:center">محفظتي
					</h1>
					<hr>
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
			<div class="col-md-7">
				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 30px 20px;">
					<h1 class="page-title" style="text-align:center">أسعار العملات
					</h1>
					<hr>
					<div class="portlet-body form">
						<div class="form-group">
							<label class="col-md-2 control-label" style="line-height: 30px;">
								بحث : </label>
							<div class="col-md-3" style="margin-right: -30px;line-height: 0px; margin-bottom: 25px;">
								<input type="text" name="search" id="search" class="form-control" />
							</div>
						</div>
						<div class="inbox-sidebar">
							<ul class="inbox-nav" style="min-height: 289px;">
								<table class="table table-striped table-bordered  mydatatable " style="width:100% ; height:100px">
									<thead>
										<tr>
										<th style="width:50px"># </th>
											<th style="width:100px">المكتب </th>
											<th style="width:100px"> الدولة </th><th style="width:150px"> العنوان </th>
											<th style="width:50px"> العمولة</th>
										</tr>
									</thead>
									<tbody>
										@include('user.search.office')
									</tbody>
								</table>
								<input type="hidden" name="hidden_page" id="hidden_page" value="1" />
								<input type="hidden" name="hidden_url" id="hidden_url" value="office" />
							</ul>
						</div>
					</div>
				</div>
				<br>
				<br>
			</div>
			<div class="col-md-12">

				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 50px 20px; min-height: 470px;">
					<h1 class="page-title" style="text-align:center">عملية إرسال الأموال

					</h1>
					<hr>
					<form role="form" id="formfield1" action="{{route('office.confirm')}}" method="post">
						{{csrf_field()}}
						<div class="portlet-body form">
							<div class="col-md-6">
								<div style="text-align:center">بيانات المكتب</div>
								<br>
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon " style="min-width:94px;" id="sizing-addon1"> الدولة</span>
										<select class="form-control dynamic " required name="country_office" id="country_office" data-dependent="office_country">
											<option value="">اختر الدولة</option>
											@foreach ( $countries as $country)
											<option value="{{$country->id}}">{{$country->name}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon " style="min-width:94px;" id="sizing-addon1"> المكتب</span>
										<select class="form-control " id="office_country" name="office" required>
											<option value="">اختر المكتب</option>
										</select>
									</div>
								</div>
								{{ csrf_field() }}
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon " style="min-width:94px;" id="sizing-addon1"> العملة</span>
										<select class="form-control " id="coin1" name="coin" required>
											@foreach ( $currencies as $currence)
											<option value="{{$currence->ar}}">{{$currence->ar}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon" style="min-width:94px" id="sizing-addon1">المبلغ</span>
										<input type="number" class="form-control " placeholder="" aria-describedby="sizing-addon1" id="balance1" name="balance" required> </div>
								</div>
							</div>
							<div class="col-md-6" style="float:left">
								<div style="text-align:center">بيانات المستلم</div>
								<br>
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon" style="min-width:94px" id="sizing-addon1">الاسم</span>
										<input name="name" id="name" type="text" class="form-control" placeholder="" aria-describedby="sizing-addon1" required> </div>
								</div>
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon" style="min-width:94px" id="sizing-addon1">رقم الهوية</span>
										<input name="id_number" id="id_number" pattern="[0-9]{9}" type="text" class="form-control" pattern="[0-9]{9,13}" placeholder="" aria-describedby="sizing-addon1" required title="رقم الهوية يتكون من 9 الي 13 خانة"> </div>
								</div>
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon" style="min-width:94px" id="sizing-addon1">رقم الجوال</span>
										<input name="phone" id="phone" type="text" class="form-control" pattern="[0-9]{10,13}" placeholder="" aria-describedby="sizing-addon1" required title="رقم الجوال يتكون من 10 الي 13 خانة"> </div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-actions right" style="text-align: center;">
									<br>
									<button type="submit" class="btn green" style="min-width:94px" id="confirm-send-submit-Btn1" data-toggle="modal" data-target="#confirm-send-submit1">إرسال الأموال</button>
								</div>
							</div>

						</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="confirm-send-submit1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal_body" style="margin:20px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<br>
				<center id="top" style="border-bottom: 1px solid #EEE;">
					<div>
						<h2 id="office_modal1" style="margin-top:0px; color:#32c5d2"></h2>
					</div>
				</center>
				<br>
				<div class="col-md-6">
					<div style="font-size: 1.1em; color:#32c5d2">بيانات التحويل</div>
					<br> اسم المستلم :
					<abbr id="name_modal1"> </abbr>
					<br> رقم هوية المستلم :
					<abbr id="id_number_modal1"></abbr>
					<br> رقم جوال المستلم :
					<abbr id="phone_modal1"></abbr>
					<br> المبلغ المراد تحويله :
					<abbr id="balance_modal1"> </abbr>
					<abbr id="coin_modal1"></abbr>
				</div>
			</div>
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
					<a href="#" id="submit1" class="btn btn-success success">تأكيد</a>
					<a class="btn btn default" data-dismiss="modal">إلغاء</a>
				</center>
			</div>
			<br>
		</div>
	</div>
</div>
</div>
@endsection
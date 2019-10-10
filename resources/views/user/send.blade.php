@extends('layouts.include') @section('title') إرسال الأموال @endsection @section('content')
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
		<!-- END PAGE BAR -->
		<!-- END PAGE TITLE-->
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
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->USD, 2)}}</span>
									</div>
								</li>
								<li>
									<div style="padding: 8px 16px;"> رصيد الشيكل الإسرائيلي
										<span class="badge badge-success" style="font-size: 16px!important;height: 27px;padding: 6px 10px 6px 10px;float: left;">{{number_format($balance->NIS, 2)}}</span>
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

				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 50px 20px;">
					<h1 class="page-title" style="text-align:center">عملية إرسال الأموال

					</h1>
					<hr>
					<div class="portlet-body form">

						<form role="form" id="formfield" action="{{route('send.confirm')}}" method="post">
							{{csrf_field()}}
							<div class="form-body">
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1">رقم الحساب</span>
										<input id="account_number" name="account_number" type="text" class="form-control dynamic1" placeholder="" data-dependent="recevier_name" aria-describedby="sizing-addon1" required> </div>
								</div>
								<div class="form-group">
									<div class="input-group " id="recevier_name">
										</div>
								</div>
								<div class="form-group">
									<div class="input-group ">
										<span class="input-group-addon " style="min-width:94px;" id="sizing-addon1"> العملة</span>
										<select class="form-control " id="coin" name="coin" required>
											@foreach ( $currencies as $currence)
											<option value="{{$currence->ar}}">{{$currence->ar}}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon" style="min-width:94px" id="sizing-addon1">المبلغ</span>
										<input type="number" class="form-control " placeholder="" aria-describedby="sizing-addon1" id="balance" name="balance" required> </div>
								</div>

							</div>
							<div class="form-actions right" style="text-align: center;">
								<br>
								<button type="submit" class="btn green" style="min-width:94px" id="confirm-send-submit-Btn" data-toggle="modal" data-target="#confirm-send-submit">إرسال الأموال</button>


							</div>
						</form>
					</div>
				</div>

			</div>

		</div>

	</div>
</div>

<div class="modal fade" id="confirm-send-submit" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal_body" style="margin:20px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<br>
				<center id="top" style="border-bottom: 1px solid #EEE;">
					<i class="fas fa-exchange-alt fa-3x" style=" color:#32c5d2"></i>
					<div>
						<h3 style="margin-top:0px; color:#32c5d2">إرسال الأموال</h3>
					</div>
					<!--End Info-->	
				</center>
				<br>
					 اسم المستقبل : <abbr id="name_modal"></abbr>
				
				<br>
					رقم حساب المستقبل : <abbr id="account_number_modal"></abbr>
					<br>
					المبلغ :
					<abbr id="balance_modal"> </abbr>
					<abbr id="coin_modal"></abbr> 
				<br>
				<br>
				<br>


				<div class="form-group">
				<center>
						<a href="#" id="submit" class="btn btn-success success">تأكيد</a>
						<a class="btn btn default" data-dismiss="modal">إلغاء</a>
						</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
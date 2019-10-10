@extends('layouts.include') @section('title') تبديل العملات @endsection @section('content')
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
					<span>تبديل العملات</span>
				</li>
			</ul>

		</div>
		<br>
		<br>
		<!-- END PAGE BAR -->
		<!-- END PAGE TITLE-->
		<div class="row">
			<div class="col-md-6">
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

			<div class="col-md-6">
				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 30px 20px;">
					<h1 class="page-title" style="text-align:center">أسعار العملات
					</h1>
					<hr>
					<div class="portlet-body form">

						<div class="inbox-sidebar">
						<div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
							<ul class="inbox-nav" style="min-height: 260px;">
								<table class="table table-striped table-hover table-bordered table_sample">
									<thead>
										<tr>
											<th style="width:10px">#</th>
											<th style="width:150px">العملة </th>
											<th style="width:150px"> سعر البيع </th>
											<th style="width:100px"> سعر الشراء</th>



										</tr>
									</thead>
									<tbody>
										@foreach ($currencies as $currency )

										<tr class="odd gradeX">
											<td class="row_data" style="width:10px">{{$number++}}</td>
											<td class="row_data" style="width:150px"> {{$currency->c1}}-{{$currency->c2}} </td>
											<td class="row_data" style="width:150px"> {{$currency->buy}} </td>
											<td class="row_data" style="width:100px">{{$currency->sale}} </td>


										</tr>
										@endforeach

									</tbody>
								</table>
							</ul>
						</div></div>
					</div>
				</div>
				<br>
				<br>
			</div>

			<div class="col-md-12">

				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 30px 20px;">
					<h1 class="page-title" style="text-align:center">عملية تبديل العملات
					</h1>
					<hr>
					<br>
					<div class="portlet-body form">

						<form role="form" id="formfield_exchange" action="{{route('exchanges')}}" method="post">
							{{csrf_field()}}
							<div class="form-body">

								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<select name="c1" id="c1" class="form-control input-lg dynamic3 " data-dependent="balance_after" required>
												@foreach ( $coins as $coin)
												<option value="{{$coin->ar}}">{{$coin->ar}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<div class="col-md-2">
										<i style="font-size:40px; margin-top:15px;margin-right:50px" class="far fa-arrow-alt-circle-left"></i>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<select name="c2" id="c2" class="form-control input-lg dynamic3" data-dependent="balance_after" required>
												@foreach ( $coins as $coin)
												<option value="{{$coin->ar}}">{{$coin->ar}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<br>
								<div class="form-group">
									<div class="input-group input-group-lg">
										<span class="input-group-addon" id="sizing-addon1">المبلغ</span>
										<input id="balance" name="balance" type="number" class="form-control dynamic2"  data-dependent="balance_after" aria-describedby="sizing-addon1" required> </div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-lg" id="balance_after"></div>
							</div>
							<div class="form-actions right" style="text-align: center;">
								<button type="submit" class="btn green" style="min-width:94px" id="confirm-exchange-submit-Btn" data-toggle="modal" data-target="#confirm-exchange-submit">تبديل العملات</button>

							</div>
						</form>
					</div>
				</div>
				<br>
				<br>
				<br>
			</div>
		</div>
	</div>

</div>
</div>
<div class="modal fade" id="confirm-exchange-submit" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal_body" style="margin:20px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>

				<br>
				<center id="top" style="border-bottom: 1px solid #EEE;">
					<i class="fas fa-exchange-alt fa-3x" style=" color:#32c5d2"></i>
					<div>
						<h3 style="margin-top:0px; color:#32c5d2">تبديل العملات</h3>
					</div>
					<!--End Info-->
				</center>
				<br>
					 من :<abbr id="coin1_modal"></abbr>
					<br>
					الى :<abbr id="coin2_modal"></abbr>
					<br>
				<br>
				<br>
				<br>

				<div class="form-group">
					<center>
						<a href="#" id="submit_exchange" class="btn btn-success success">تأكيد</a>
						<a class="btn btn default" data-dismiss="modal">إلغاء</a>
					</center>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
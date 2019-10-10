@extends('layouts.include') @section('title') الدعم الفني  @endsection @section('content')
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
					<span style="color: #3666be;"> الصلاحيات </span>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<span>الدعم الفني </span>
				</li>
			</ul>

		</div>
		<br>
		<br>
		<!-- END PAGE BAR -->
		<!-- END PAGE TITLE-->
		<div class="row">
			<div class="col-md-6">
				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 50px 20px; min-height:535px">
					<h1 class="page-title" style="text-align:center">الواتساب
					</h1>
					<hr>
					<div class="portlet-body form">

						<div class="inbox-sidebar">
						
						   <table class="table table-striped table-hover table-bordered table_sample"  >
                                        <thead>
                                                <tr>
                                                <th style="width:10px">#</th>
                                                    <th style="width:150px" >رقم الواتساب  </th>
 <th style="width:150px" > الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <tr class="odd gradeX">

                                                        <form action="{{route('whatsapp.create')}}" method="POST" >
                                                                {{csrf_field()}}
                                                        
                                                   
                                                 <td class="row_data" style="width:10px">#</td>
                                                    <td class="row_data" style="width:150px"> <input name="phonenum" value="" required> </td>
                                                    
													<td style="width:70px">
                                                          <button type="submit" class="btn btn-outline btn-circle btn-sm purple fa fa-plus" title="إضافة"></button>
                                                     

                                                    </td>
                                                </form>
                                                </tr>
                                                <?php $number=0 ?>
                                                    @foreach ($whatsapp as $whats )
                                                    
                                                <tr class="odd gradeX">

                                                        <form action="{{route('whatsapp.update',['id'=>$whats->id])}}" method="POST" >
                                                                {{csrf_field()}}
                                                        
                                                   
                                                 <td class="row_data" style="width:10px">{{$number++}}</td>
                                                    <td class="row_data" style="width:150px"><input name="phonenum" value="{{$whats->phonenum}}  " required>  </td>
                                                    
													<td style="width:70px">
                                                          <button type="submit" class="btn btn-outline btn-circle btn-sm purple fa fa-edit" onclick=" return confirm('هل أنت متأكد تنفيذ التعديل " title="تعديل"></button>
                                                     
  <a href="{{route('whatsapp.delete',['id'=>$whats->id])}}"  class="btn btn-outline btn-circle btn-danger  fa fa-trash">
                                        </a>
                                            
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
			<div class="col-md-6">

				<div class="portlet light bordered" style="margin-bottom: 0px;padding:8px 50px 20px;">
					<h1 class="page-title" style="text-align:center">  مواقع التواصل الاجتماعي

					</h1>
					<hr>
					<div class="portlet-body form">
<form role="form"  action="{{route('socialmedia.update')}}" method="post">
							{{csrf_field()}}
							<div class="form-body">
							    <div class="form-group">
							<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1">البريد الالكتروني</span>
										<input name="email" type="text" value="{{$contact->mail}}" class="form-control dynamic1" placeholder=""  aria-describedby="sizing-addon1" required> </div>
										</div>
										<div class="form-group">
											<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1">رابط الفيسبوك </span>
										<input name="facebook" type="text" value="{{$contact->facebook}}"  class="form-control dynamic1" placeholder=""  aria-describedby="sizing-addon1" required> </div>
										</div>
										<div class="form-group">
											<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1">رابط التويتر</span>
										<input name="twitter" value="{{$contact->twitter}}"  type="text" class="form-control dynamic1" placeholder=""  aria-describedby="sizing-addon1" required> </div>
											</div>
										<div class="form-group">
											<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1"> رابط الانستجرام</span>
										<input name="instagram" value="{{$contact->instagram}}"  type="text" class="form-control dynamic1" placeholder=""  aria-describedby="sizing-addon1" required> </div>
											</div>
										<div class="form-group">
										
											<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1">رابط قناة اليوتيوب</span>
										<input name="youtube" value="{{$contact->youtube}}" type="text" class="form-control dynamic1" placeholder=""  aria-describedby="sizing-addon1" required> </div>
								
								</div>
									<div class="form-group">
										
											<div class="input-group ">
										<span class="input-group-addon" id="sizing-addon1">رابط لينكد إن</span>
										<input name="linkedin" value="{{$contact->linkedin}}" type="text" class="form-control dynamic1" placeholder=""  aria-describedby="sizing-addon1" required> </div>
								
								</div>
							</div>
							<div class="form-actions right" style="text-align: center;">
								<br>
								<button type="submit" class="btn green" style="min-width:94px" > تعديل</button>

								<button type="button" class="btn default" style="min-width:94px">إلغاء</button>

							</div>
						</form>
						
					</div>
				</div>

			</div>

		</div>

	</div>
</div>

@endsection
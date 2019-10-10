<!DOCTYPE html>
<html lang="en" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <link rel="icon" href="{{asset('icon1.ico')}}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page ofRTL  Theme #1 for editable datatable samples"
        name="description" />
        <meta content="" name="author" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

        <link href="{{asset('css/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/pages/css/profile-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="{{asset('css/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/css/components-rtl.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('css/assets/global/css/plugins-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/layouts/layout/css/layout-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/layouts/layout/css/themes/darkblue-rtl.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('css/assets/layouts/layout/css/custom-rtl.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/fancybox/source/jquery.fancybox.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/css1.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
       
       
        <link href="{{asset('css/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css')}}" rel="stylesheet" type="text/css" />
       <style>
       .text {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   line-height: 16px;     /* fallback */
   max-height: 32px;      /* fallback */
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;
}

 </style>
       
    </head>
   


        <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
            <div class="page-wrapper">
                <div class="page-header navbar navbar-fixed-top"><div class="page-header-inner "><div class="page-logo">
                            <a href="{{ route('user.profile') }}">
                            <img src="{{asset('images/logo.png')}}" alt="logo" class="logo-default" /> </a>
                            <div class="menu-toggler sidebar-toggler">
                                <span></span>
                            </div>
                        </div><a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span></span>
                        </a><div class="top-menu">
                            <ul class="nav navbar-nav pull-right">
                                      <li class="dropdown dropdown-extended dropdown-tasks " id="header_task_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-bell"></i>
                                                <span id ="count_notifiction" class="badge badge-default">{{	count(Auth()->user()->unreadNotifications)  }}</span>
                                            </a>
                                            <ul  class="dropdown-menu">
                                                <li class="external">
                                                <h3 style="margin-right:150px ; font-size:18px ">
                                                <a href="{{ route('notifiction.AllAsRead')}}">تحديد كمقروء</a></h3>
                                                </li>
                                                <li>
            
                                                    <ul id="notifications" class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
            
            
                                                            @foreach (Auth()->user()->unreadNotifications as $notification) 
                                                            
                                                                
                                                           
                                             
                                                        <li>
                                                        <a href="{{ route('notifiction.AsRead',$notification->id) }}">
                                                                <span class="from">
                                                            تم ايداع رصيد بقيمة {{ $notification->data['log']['balance'] }} {{ $notification->data['log']['coin']}}  
                                                            <br>
                                                              المودع {{ $notification->data['log']['senderName']}} 
                                                             <br>
                                                             رقم حساب المودع {{ $notification->data['log']['senderAccount']}} 
                                                             <br>
                                                             
                                                                    </span>
                                                               
                                                            </a>
                                                        </li>

                                                            @endforeach


            
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                         <li class="dropdown dropdown-user" style="
    padding: 17px 10px 10px;
">
                                        <span class="username username-hide-on-mobile" style="color:#fff ; text-align:center ; "> رقم الحساب : {{Auth::user()->account_number}} </span>
                                </li>
                                 <li class="dropdown dropdown-user">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <!--<img alt="" class="img-circle" src="../assets/layouts/layout/img/avatar3_small.jpg" />-->
                                        <span class="username username-hide-on-mobile"> {{Auth::user()->first_name}} {{Auth::user()->last_name}} </span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-default">
                                        <li>
                                            <a  href="/logout">
                                                <i class="icon-key"></i> تسجيل خروج</a>
                                        </li>
                                        </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="page-container">
                <div class="page-sidebar-wrapper">
                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                               
                               <li class="sidebar-toggler-wrapper hide">
                                    <div class="sidebar-toggler">
                                        <span></span>
                                    </div>
                                </li>
                                
                                <li class="heading">
                                    <h3 class="title" style="color:#fff;font-family:Open Sans,Segoe UI Semibold;font-size: 14px;">
                                        الرئيسية</h3>
                                </li>
                                <li class="nav-item start ">
                                    <a href="{{ route('user.profile') }}" class="nav-link nav-toggle">
                                        <i class="icon-user"></i>
                                        <span class="title">حسابي</span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                       <i class="fas fa-exchange-alt"></i>
                                        <span class="title"> إرسال الأموال</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item start ">
                                                <a href="{{ route('send') }}" class="nav-link nav-toggle">
                                                       
                                                        <span class="title">إرسال أموال مباشر</span>
                                                    </a>
                                        </li>
                                        <li class="nav-item start ">
                                                <a href="{{ route('offices.send') }}" class="nav-link nav-toggle">
                                                     
                                                        <span class="title">إرسال أموال من خلال مكتب معتمد</span>
                                                    </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item start ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        
                                    <i class="fas fa-coins"></i>
                                        <span class="title">العملات</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                <li class="nav-item start ">
                                    <a href="{{ route('index.exchange') }}" class="nav-link nav-toggle">
                                      
                                        <span class="title">تبديل العملات</span>
                                    </a>
                                </li>
                                 <li class="nav-item start ">
                                    <a href="{{ route('currencies.price') }}" class="nav-link nav-toggle">
                                        <span class="title">أسعار العملات</span>
                                    </a>
                                </li>

                                
                              

                                    </ul>
                                    
                                </li>
                                  @if(Auth::user()->category_id == 2)
                                <li class="nav-item start ">
                                    <a href="{{ route('send.review') }}" class="nav-link nav-toggle">
                                        <i class="fa fa-search"></i>
                                        <span class="title">مراجعة طلبات التحويل</span>
                                         @if($notify_offices_review > 0)
                                        <span class="badge badge-success"style="margin-left:20px;margin-top:5px">{{$notify_offices_review}}</span>
                                        @endif
                                    </a>
                                </li>
                                @endif
                                <li class="nav-item start ">
                                    <a href="{{ route('user.offices') }}" class="nav-link nav-toggle">
                                         <i class="fa fa-building"></i>
                                        <span class="title">المكاتب المعتمدة </span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="javascript:;" class="nav-link nav-toggle">
                                        <i class="fa fa-history"></i>
                                        <span class="title">سجل العمليات</span>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="nav-item start ">
                                                <a href="{{ route('user.withdrawlogs') }}" class="nav-link nav-toggle">
                                                       <span class="title">سجل السحب</span>
                                                    </a>
                                        </li>
                                        <li class="nav-item start ">
                                                <a href="{{ route('user.depositlogs') }}" class="nav-link nav-toggle">
                                                        <span class="title">سجل الإيداع</span>
                                                    </a>
                                        </li>
                                        <li class="nav-item start ">
                                                <a href="{{ route('user.exchangelogs') }}" class="nav-link nav-toggle">
                                                       <span class="title">سجل تبديل العملات</span>
                                                    </a>
                                        </li>
                                        <li class="nav-item start ">
                                                <a href="{{ route('user.officelogs') }}" class="nav-link nav-toggle">
                                                       <span class="title">سجل المكاتب</span>
                                                    </a>
                                        </li>
                                    </ul>
                                </li>

    <li class="nav-item start ">
                                    <a href="{{ route('contact') }}" class="nav-link nav-toggle">
                                    <i class="fa fa-phone-square"></i>
                                        <span class="title">الدعم الفني</span>
                                    </a>
                                </li>

                          

                                <br>
                                @if(count(Auth::user()->pages)>0)
                                <li class="heading">
                                    <h3 class="title" style="color:#fff;font-family:Open Sans,Segoe UI Semibold;font-size: 14px;">
                                        الصلاحيات</h3>
                                       
                                    </li>
                                    @endif
                                    <?php $x=0; $l=0; ?>
                                @foreach (auth()->user()->pages->sortBy('order_id') as $page) 
                                @if($l==1)    
                                @if($x==1 and $page->parent_id == null)
                                 <?php $x=0; ?>
                                 </a>
                                 </li>
                                 </ul>
                                </li>
                                @elseif($x==0 and $page->parent_id  != null)
                                <?php $x=1;?>
                                        <span class="arrow"></span>
                                    </a>
                                    <ul class="sub-menu">
                                    @else
                                </a>
                                </li>
                                @endif

                                @endif
                                <?php $l=1;?>
                                <li class="nav-item start ">
                                    <a href="{{$page->url}}" class="nav-link nav-toggle">
                                        <i class="{{$page->icon}}"></i>
                                        <span class="title">{{$page->name}}</span>
                                        @if($page->id == 4 && $notify_office + $notify_user > 0)
                                         <span class="badge badge-success "style="margin-left:20px;margin-top:5px">{{$notify_office + $notify_user}} </span>
                                         @elseif($page->id == 5 && $notify_user > 0)
                                         <span class="badge badge-success">{{$notify_user}}</span>
                                         @elseif($page->id == 6 && $notify_office > 0)
                                         <span class="badge badge-success">{{$notify_office}}</span>
                                         @endif
                                       
                                @endforeach
                                @if($x==1)
                                 </a>
                                 </li>
                                 </ul>
                                </li>
                                @else
                                 </a>
                                 </li>
                                @endif
                                </ul>
                                </div>
                        
                        </div>
                    
                                    
                        @yield('content')
                                    </div>
                                    <div class="page-footer" style="background-color: #364150;text-align: center;">
                <div class="page-footer-inner" style="float: inherit;" > 2019 &copy; Romeo By
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100002145037644">Mohammed Abed Al-lateef</a> &nbsp;|&nbsp;
                   </div>
            </div>
                            </div>
           
                            
                            
                           

                          
                            <script type="text/javascript">
                                $("body").on("click",".ban",function(){
                            
                            
                                  var current_object = $(this);
                            
                            
                                  bootbox.dialog({
                                  message: "<form class='form-inline add-to-ban' method='POST'><div class='form-group'><textarea class='form-control reason' rows='4' style='width:500px' placeholder='أدخل سبب الحظر.'></textarea></div></form>",
                                  title: "حظر",
                                  buttons: {
                                    success: {
                                      label: "حظر",
                                      className: "btn btn-danger ",
                                      callback: function() {
                                            var baninfo = $('.reason').val();
                                            var token = $("input[name='_token']").val();
                                            var action = current_object.attr('data-action');
                                            var id = current_object.attr('data-id');
                            
                            
                                            if(baninfo == ''){
                                                $('.reason').css('border-color','red');
                                                return false;
                                            }else{
                                                $('.add-to-ban').attr('action',action);
                                                $('.add-to-ban').append('<input name="_token" type="hidden" value="'+ token +'">')
                                                $('.add-to-ban').append('<input name="id" type="hidden" value="'+ id +'">')
                                                $('.add-to-ban').append('<input name="baninfo" type="hidden" value="'+ baninfo +'">')
                                                $('.add-to-ban').submit();
                                            }
                            
                            
                                      }
                                    },
                                    danger: {
                                      label: "إلغاء",
                                      className: "btn btn default",
                                      callback: function() {
                                        // remove
                                      }
                                    },
                                  }
                                });
                            });
                            </script>


<script type="text/javascript"  src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"> </script>

      <!-- BEGIN CORE PLUGINS -->

      <script src="{{asset('css/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/pages/scripts/table-datatables-responsive.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/pages/scripts/table-datatables-editable.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('css/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>


     
     <script src="{{asset('css/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>

     <script src="{{asset('css/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
     <script src="{{asset('css/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('css/assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
      
      <script src="{{asset('js/toastr.min.js')}}"></script>
      <script>
          @if (Session::has('success'))
      
          toastr.success("{{Session::get('success')}}");
              
          @endif
      
          @if (Session::has('info'))
      
          toastr.info("{{Session::get('info')}}");
              
          @endif
      
          
      </script>
      <script>
            
             function func(id){
                 $.ajax({
                     url: '/user/permission',
                     dataType: 'html',
                     method: 'GET',
                     data:{
                         id: id
                     },
                     success: function(data){
                           $('#myModal').modal('show');
                         $('#permission_modal_body').html(data);
             
                     }
                 });
             }
             
             $('#modal_2').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) 
                var category = button.data('category') 
                var modal = $(this)
                modal.find('.modal-body #category').val(category);
          })
      </script>
      
      
      
      
      <script>
            
             function func5(id){
                 $.ajax({
                     url: '/office/send/review/accept',
                     dataType: 'html',
                     method: 'GET',
                     data:{
                         id: id
                     },
                     success: function(data){
                           $('#myModal5').modal('show');
                         $('#review_modal_body').html(data);
             
                     }
                 });
             }
             
            
      </script>

      <script>
        $(function() {
          $('.pop').on('click', function() {
              $('.imagepreview').attr('src', $(this).find('img').attr('src'));
              $('#imagemodal').modal('show');   
          });		
  });
         </script>
          <script>
            
            function func2(id){
                $.ajax({
                    url: '/office/permission',
                    dataType: 'html',
                    method: 'GET',
                    data:{
                        id: id
                    },
                    success: function(data){
                          $('#myModal').modal('show');
                        $('#permission_modal_body').html(data);
            
                    }
                });
            }
            
            $('#modal_2').on('show.bs.modal', function (event) {
               var button = $(event.relatedTarget) 
               var category = button.data('category') 
               var modal = $(this)
               modal.find('.modal-body #category').val(category);
         })
     </script>

     <script>
       $(function() {
         $('.pop').on('click', function() {
             $('.imagepreview').attr('src', $(this).find('img').attr('src'));
             $('#imagemodal').modal('show');   
         });		
 });
        </script>

         <script>
          
            $('#confirm-send-submit-Btn').click(function() {
                var account_number= $('#account_number').val();
                var recevier_name= $('#recevier_name2').val();
                var balance=$('#balance').val();
                var coin=$('#coin').val();
       /* when the button in the form, display the entered values in the modal */
        $('#name_modal').text(recevier_name);
       $('#account_number_modal').text(account_number);
       $('#balance_modal').text(balance);
       $('#coin_modal').text(coin);
  });

  
  $('#submit').click(function(){
       /* when the submit button in the modal is clicked, submit the form */
      $('#formfield').submit();
  });

    </script>
    <script>
          
            $('#confirm-exchange-submit-Btn').click(function() {
                var coin1=$('#balance').val() + $('#c1').val();
                var coin2=$('#balance_after2').val()+$('#c2').val();
       /* when the button in the form, display the entered values in the modal */
       $('#coin1_modal').text(coin1);
       $('#coin2_modal').text(coin2);
  });
  
  $('#submit_exchange').click(function(){
       /* when the submit button in the modal is clicked, submit the form */
      $('#formfield_exchange').submit();
  });

    </script>
    <script>
          
            $('#confirm-send-submit-Btn1').click(function() {
                var balance=$('#balance1').val();
                var coin=$('#coin1').find(":selected").text();
                var office=$('#office_country').find(":selected").text();
                var name=$('#name').val();
                var id_number=$('#id_number').val();
                var phone=$('#phone').val();
       /* when the button in the form, display the entered values in the modal */
       
  if (id_number.length < 9|| id_number.length > 17  ) {
      alert("الرجاء التأكد من رقم الهوية");
    return false;
  }else if ( phone.length < 8 || phone.length > 15 ) {
      alert("الرجاء التأكد من رقم الجوال");
    return false;
  }
  else{
       $('#balance_modal1').text(balance);
       $('#coin_modal1').text(coin);
       $('#office_modal1').text(office);
       $('#name_modal1').text(name);
       $('#id_number_modal1').text(id_number);
       $('#phone_modal1').text(phone);
  }
  
  
      
  });
  
  $('#submit1').click(function(){
       /* when the submit button in the modal is clicked, submit the form */
      $('#formfield1').submit();
  });

    </script>
    <script>
            $(document).ready(function(){
            
             $('.dynamic').change(function(){
              if($(this).val() != '')
              {
               var value = $(this).val();
               var dependent = $(this).data('dependent');
               var _token = $('input[name="_token"]').val();
               $.ajax({
                url:"{{ route('office.fetch') }}",
                method:"POST",
                data:{ value:value, _token:_token, dependent:dependent},
                success:function(result)
                {
                 $('#'+dependent).html(result);
                }
            
               })
              }
             });
            
             $('#country_office').change(function(){
              $('#office_country').val('');
             });
            
             
            
            });

            </script>


              <script>
            $(document).ready(function(){
            
             $('.dynamic1').keyup(function(){
              if($(this).val() != null)
              {
               var value = $(this).val();
               var dependent = $(this).data('dependent');
               var _token = $('input[name="_token"]').val();
               $.ajax({
                url:"{{ route('send.fetch') }}",
                method:"POST",
                data:{ value:value, _token:_token, dependent:dependent},
                success:function(result)
                {
                 $('#'+dependent).html(result);
                }
            
               })
              }
             });

             
             
            
             $('#account_number').change(function(){
              $('#recevier_name').val('');
             });
            
             
            
            });

            </script>


              <script>
            $(document).ready(function(){
            
             $('.dynamic2').keyup(function(){
              if($(this).val() != null)
              {
               var value = $(this).val();
               var c1 = $('#c1').val();
               var c2 = $('#c2').val();
               var dependent = $(this).data('dependent');
               var _token = $('input[name="_token"]').val();
               $.ajax({
                url:"{{ route('exchange.fetch') }}",
                method:"POST",
                data:{ value:value, c1:c1, c2:c2, _token:_token, dependent:dependent},
                success:function(result)
                {
                 $('#'+dependent).html(result);
                }
            
               })
              }
             });
             $('#balance').change(function(){
              $('#balance_after').val('');
             });
            
            });
             $(document).ready(function(){
              $('.dynamic3').change(function(){
              if($(this).val() != '')
              {
               var value = $('#balance').val();
               var c1 = $('#c1').val();
               var c2 = $('#c2').val();
               var dependent = $(this).data('dependent');
               var _token = $('input[name="_token"]').val();
               $.ajax({
                url:"{{ route('exchange.fetch') }}",
                method:"POST",
                data:{ value:value, c1:c1, c2:c2, _token:_token, dependent:dependent},
                success:function(result)
                {
                 $('#'+dependent).html(result);
                }
            
               })
              }
             });
            
             $('#balance').change(function(){
              $('#balance_after').val('');
             });
            
             
            
            });

            </script>




    <script>
$(document).ready(function(){

 function clear_icon()
 {
  $('#id_icon').html('');
  $('#post_title_icon').html('');
 }

 function fetch_data(page, query ,url)
 {
  $.ajax({
   url:"/search/"+url+"?page="+page+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $('#search').val();
  var page = $('#hidden_page').val();
  var url = $('#hidden_url').val();
  fetch_data(page,query , url);
 });

 $(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var query = $('#search').val();
  var url = $('#hidden_url').val();
  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page,query ,url);
 });

});
</script>
          @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
<script>
$(function() {
    $('#myModal1').modal('show');
});
</script>
@endif

<script language="javascript" type="text/javascript">
function printDiv(divID) {
//Get the HTML of div

var divElements = document.getElementById(divID).innerHTML;

//Get the HTML of whole page
var oldPage = document.body.innerHTML;

//Reset the pages HTML with divs HTML only

     document.body.innerHTML = 

     "<html><head><title></title></head><body>" + 
     divElements + "</body>";



//Print Page
window.print();

//Restore orignal HTML
 window.location = "/office/log";

}
</script>
    </body>

</html>

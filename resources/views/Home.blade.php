<!doctype html>
<html class="no-js" lang="ar">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Romeo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{asset('css/css/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('css/css/animate.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{asset('css/css/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('css/css/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('css/css/owl.carousel.min.css')}}">
    <!-- bxslider css -->
    <!--flaticon css -->
    <link rel="stylesheet" href="{{asset('css/css/flaticon.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('css/css/font-awesome.min.css')}}">
    <link href="{{asset('css/css/video-js.css')}}" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('css/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('js/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{asset('images/images/banner/loader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--Header area start here-->
    <div section-scroll='0' class="wd_scroll_wrap">
        <header class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6" >
                        <div class="logo-area">
                            <a href="/"><img src="{{asset('images/images/logo/logo1.png')}}" alt="logo" /></a>
                        </div>
                    </div>
                    <!-- Mobile Menu  Start -->
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-6" style="line-height: 60px">
                        <div class="menu-area  hidden-xs">
                            <nav class="wd_single_index_menu btc_main_menu">
                                <ul style="font-weight: 700; font-size:20px ;float:right">
								<li style="float:right;padding-left: 10px;"><a style="font-weight: 700; font-size:16px" href="0">الرئيسية</a></li>
                                    <li style="float:right"><a style="font-weight: 700; font-size:16px;float:right;" href="1">من نحن</a></li>
                                    <li style="float:right;"><a style="font-weight: 700; font-size:16px;float:right;" href="2">الخدمات</a></li>
                                    <li style="float:right;"><a style="font-weight: 700; font-size:16px;float:right;" href="7">التواصل</a></li>
                                    
                                </ul>
                            </nav>
                            
                                @if(Auth::check())
                                <div class="login-btn" style="float:left ; margin-right:5px">
                                <a href="/profile" class="btn1"><span>حسابي </span><i class="fa fa-user"></i></a>
                            </div>
							 <div class="login-btn" style="float:left ; margin-left:0px">
                                <a href="/logout" class="btn1"><span>تسجيل خروج</span><i class="fa fa-user"></i></a>
                            </div>
                                @else
                                <div class="login-btn" style="float:left ; margin-right:5px">
                                <a href="/login" class="btn1"><span>تسجيل دخول</span><i class="fa fa-user"></i></a>
                            </div>
							 <div class="login-btn" style="float:left ; margin-left:0px">
                                <a href="/register" class="btn1"><span>التسجيل</span><i class="fa fa-user"></i></a>
                            </div>
                            @endif
                        </div>
                        <!-- mobile menu area start -->
                        <div class="rp_mobail_menu_main_wrapper visible-xs">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="toggle">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                            <g>
                                                <g>
                                                    <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#fff" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#fff" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#fff" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#fff" />
                                                </g>
                                                <g>
                                                    <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#fff" />
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div id="sidebar">
                                <h1><a href="#">Romeo </a></h1>
                                <div id="toggle_close">&times;</div>
                                <div id='cssmenu' class="wd_single_index_menu">
                                    <ul>
                                        <li><a href="0">الرئيسية</a></li>
                                        <li><a href="1">من نحن</a></li>
                                        <li><a href="2">الخدمات</a></li>
                                        <li><a href="7">التواصل</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu  End -->
                    </div>
                </div>
            </div>
        </header>
        <!--Header area end here-->
        <!--Slider area start here-->
        <section class="slider-area">
            <canvas>
                <script src="{{asset('js/js/three.js')}}"></script>
                <script src="{{asset('js/js/stats.min.js')}}"></script>
                <script src="{{asset('js/js/Projector.js')}}"></script>
                <script src="{{asset('js/js/CanvasRenderer.js')}}"></script>
            </canvas>
            
            
             <div id="particles-js">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-captions caption-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="slider-content">
                                                
                                                <h2 data-animation="animated bounceInLeft">روميو - إرسال الأموال <br>بسهولة وأمان</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs hidden-sm">
                                            <div class="btc_timer_section_wrapper">
                                                <div id="clockdiv">
                                                    <img src="{{asset('images/images/icons/s1.jpg')}}" style=" width: 500px;height: 250px;" alt=""/>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            
            
        </section>
        <!--Slider area end here-->
         <section class="currency-area">
            <div class="container-fliud">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>TRY
                                       <br> <br><span>ليرة تركية</span></h2>
                                </div>
                            </div>
                        </div>
                        
                         <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>JOD
                                        <br><br><span>يورو أوروبي</span></h2>
                                </div>
                            </div>
                        </div>
                        
                         <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>EUR
                                       <br><br><span>دينار أردني</span></h2>
                                </div>
                            </div>
                        </div>
                         <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>EGP
                                        <br><br><span>جنيه مصري</span></h2>
                                </div>
                            </div>
                        </div>
                         <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>SAR
                                        <br><br><span>ريال سعودي</span></h2>
                                </div>
                            </div>
                        </div>
                         <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>NIS
                                       <br> <br><span>شيكل إسرائيلي</span></h2>
                                </div>
                            </div>
                        </div>
                         <div class="rete-list bt_title wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; width:192px">
                            <div class="content" style=" text-align: -webkit-center;">
                                <div class="con">
                                    <h2>USD
                                        <br><br><span>دولار أمريكي</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--About area start here-->
   <div section-scroll='1' class="wd_scroll_wrap">
        <section class="about-area pd-t70 pd-b100 jarallax bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="text-align:right">
                        <div class="about-content">
                            <h2 class="f-40 fw-400 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">من نحن</h2>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;"> نحن شركة عربية رائدة في مجال تحويل الاموال عبر الحدود , بكل سهولة عبر موقع روميو والتطبيق يسهل التحويل والاستلام  , شحن رصيد روميو لديك عبر وكيل لنا محلي معتمد , يساعد الاشخاص والشركات على نقل الاموال دون قيود ملزمة لدينا معاملات منجزة من مطلع 
2018  </p>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;"> نستمر في ابتكار طرق جديدة وتطويرها للارسال عبر وكلاء دوليين جدد لتلبية احتياجيات المشتركين والمستهلكين , العمولات عند التحويل نسبية</P>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right:25px">
                        <div class="about-img  wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <img src="{{asset('images/images/about/1.png')}}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About area end here-->
        <div class="sud">
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 181.1" style="enable-background:new 0 0 1920 181.1;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #f6f6ff;
                    }
                </style>
                <g>
                    <path class="st0" d="M0,80c0,0,28.9-4.2,43-13c14.3-9,71-35.7,137,5c17.3,7.7,33.3,13,48,11c17.3,0.3,50.3,4.7,66,23
                     c20.3,9.7,68,40.3,134-12c24-11,59-16.3,104,2c21,7.3,85,27.7,117-14c24-30.7,62.7-55,141-12c26,10.3,72,14.7,110-14
                     c37.7-19,89.7-29,122,53c23,32.7,47.7,66.3,97,26c24-22.7,51-78.3,137-38c0,0,28.3,15.7,52,15c23.7-0.7,50.7,4.3,76,41
                     c19.7,19.7,71,36.7,121-2c0,0,22.3-16,55-12c0,0,32.7,6.7,56-71c23.3-76,79-92,122-29c9.3,13.7,25,42,62,43c37,1,51.7,25.3,67,48
                     c15.3,22.7,51,22.7,53,23v28.1H0V80z" />
                </g>
            </svg>
        </div>
    </div>
    <div section-scroll='2' class="wd_scroll_wrap">
        <section class="projects bg-img pd-t100 pd-b70 jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">الخدمات</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="project-list wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <div class="content">
                                <span class="icons"><img src="{{asset('images/images/icons/6.png')}}" alt=""/></span>
                                <h3>إرسال <br>الأموال</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="project-list wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                            <div class="content">
                                <span class="icons"><img src="{{asset('images/images/icons/7.png')}}" alt=""/></span>
                                <h3>سلامة <br>الأموال </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="project-list wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                            <div class="content">
                                <span class="icons"><img src="{{asset('images/images/icons/8.png')}}" alt=""/></span>
                                <h3>تعدد <br>العملات</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="project-list wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                            <div class="content">
                                <span class="icons"><img src="{{asset('images/images/icons/9.png')}}" alt=""/></span>
                                <h3>تبديل <br>العملات</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="project-list wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                            <div class="content">
                                <span class="icons"><img src="{{asset('images/images/icons/11.png')}}" alt=""/></span>
                                <h3>تحويل من  <br>خلال مكتب معتمد</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="project-list  wow  fadeInUp animated" data-wow-duration="2.4s" style="visibility: visible; animation-duration: 2.4s; animation-name: fadeInUp;">
                            <div class="content">
                                <span class="icons"><img src="{{asset('images/images/icons/support.png')}}" style="width:110px" alt=""/></span>
                                <h3>الدعم  <br>الفني  </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   <div section-scroll='7' class="wd_scroll_wrap"  style="background: #ebebf5;">
      <footer class="foo-bot"  style="background: #ebebf5;">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="copyright wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;"> <p>للتواصل و الدعم الفني :
                         
										 @foreach ($whatsapp as $whats )
											<i style="width: auto; color:#ADDDEA;padding-right:10px" class="fa fa-whatsapp"></i>
											<span>{{$whats->phonenum}}</span>
										@endforeach
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="foo-link wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                                <ul>
                                    @if($contact->mail != null)
                                   <li><a href="{{$contact->mail}}">البريد الالكتروني</a></li>
                                   @endif
                                   @if($contact->youtube != null)
                                   <li><a href="{{$contact->youtube}}">يوتيوب</a></li>
                                   @endif
                                   @if($contact->linkedin != null)
                                    <li><a href="{{$contact->linkedin}}">لينكيد إن</a></li>
                                    @endif
                                    @if($contact->instagram != null)
                                    <li><a href="{{$contact->instagram}}">انيستغرام</a></li>
                                    @endif
                                    @if($contact->twitter != null)
                                    <li><a href="{{$contact->twitter}}"> تويتر</a></li>
                                    @endif
                                    @if($contact->facebook != null)
                                    <li><a href="{{$contact->facebook}}">فيسبوك</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="copyright wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; text-align:center">
                                <p style="text-align:center">© 2019 <a href="#"><span>Romeo</span></a> | All rights reserved. Design by
                                    <a href="https://www.facebook.com/profile.php?id=100002145037644" target="_blank"> <span>Mohammed Abed Al-lateef</span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!--Footer area end here-->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{asset('js/js/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- tether js -->
    <script src="{{asset('js/js/tether.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/js/bootstrap.min.js')}}"></script>
    <!-- owl.carousel js -->
    <script src="{{asset('js/js/owl.carousel.min.js')}}"></script>
    <!-- meanmenu js -->
    <script src="{{asset('js/js/jquery.meanmenu.js')}}"></script>
    <!-- jquery-ui js -->
    <script src="{{asset('js/js/jquery-ui.min.js')}}"></script>
    <!-- easypiechart js -->
    <script src="{{asset('js/js/jquery.easypiechart.min.js')}}"></script>
    <!-- particles js -->
    <!-- wow js -->
    <script src="{{asset('js/js/wow.min.js')}}"></script>
    <!-- smooth-scroll js -->
    <script src="{{asset('js/js/smooth-scroll.min.js')}}"></script>
    <script src="{{asset('js/js/particles.min.js')}}"></script>
    <!-- plugins js -->
    <script src="{{asset('js/js/plugins.js')}}"></script>
    <!-- EChartJS JavaScript -->
    <script src="{{asset('js/js/echarts-en.min.js')}}"></script>
    <script src="{{asset('js/js/echarts-liquidfill.min.js')}}"></script>
    <script src="{{asset('js/js/vc_round_chart.min.js')}}"></script>
    <script src="{{asset('js/js/videojs-ie8.min.js')}}"></script>
    <script src="{{asset('js/js/video.js')}}"></script>
    <script src="{{asset('js/js/Youtube.min.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('js/js/main.js')}}"></script>
</body>

</html>
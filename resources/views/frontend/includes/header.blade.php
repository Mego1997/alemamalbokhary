<!-- preloader start here -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- preloader ending here -->

<!-- Header Section Starts Here -->
<header class="header-3 pattern-1" style="direction: rtl !important;">
    <div class="container">
        <div class="row align-items-center justify-content-center ">
            <div class="col-xl-3 col-12">
                <div class="mobile-menu-wrapper d-flex flex-wrap align-items-center justify-content-between">
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="logo">
                        <a href="{{ url('/')}}">
                            <img src="{{ url('public/frontend/assets/images/logo.png') }}
                                " alt="logo" height="120px">
                        </a>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-12">
                <div class="header-top">
                    <div class="header-top-area">
                        <ul class="left lab-ul">
                            <li class="d-flex">
                                <i class="icofont-ui-call ms-2"></i>
                                <span style="direction: ltr;">0100 909 2853 </span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt ms-2"></i>
                                <span>الستاموني - بلقاس - المنصورة</span>

                            </li>
                        </ul>
                        <ul class="social-icons lab-ul d-flex">
                            <li>
                                <a href="https://www.facebook.com/sh.m.basuoni"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/Mohamadbasuoni"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@dr.mohamadbasuoni"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="header-wrapper">
                        <div class="menu-area justify-content-between w-100">
                            <ul class="menu lab-ul">
                                <li>
                                    <a href="{{ url('/')}}">الصفحة الرئيسية</a>
                                </li>
                                <li>
                                    <a href="{{ url('/about')}}">عن الجمعية</a>
                                </li>
                                <li>
                                    <a href="{{ url('/gallery')}}">مكتبة الصور</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/trips')}}">رحلات</a></li>
                                        <li><a href="{{ url('/photos')}}"> 
إحتفالات 6 أكتوبـر                                        </a></li>
                                        <li><a href="{{ url('/kg')}}">الحضانة</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ url('/events')}}">الخدمات</a>
                                    <ul class="submenu">
                                        <li><a href="{{ url('/kg-serv')}}">الحضانة</a></li>
                                        <li><a href="{{ url('/helps')}}">
                                                المساعدات الاجتماعية
                                            </a>
                                        </li>
                                        <li><a href="{{ url('/edu')}}">التعليم والتدريب</a></li>
                                        <li><a href="{{ url('/health')}}">الرعاية الصحية</a></li>
                                        <li><a href="{{ url('/quran')}}">تحفيظ القران</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/blogs')}}">المدونة</a></li>
                                <li><a href="{{ url('/contact')}}">إتصل بنا</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section Ends Here-->

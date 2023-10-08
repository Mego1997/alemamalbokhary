@extends('frontend.includes.master')
@section('title','مكتبة الصور')
@section('body')

    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div><img class="overlay" src="public/frontend/assets/images/banner.jpg" alt="gallery-img">
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">مكتبة الصور</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('/')}}">الرئيسية</a></li>
                    <li><a class="active">مكتبة الصور</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Events Section start here -->
    <section class="event-section padding-tb padding-b shape-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="event-content">

                        <div class="event-bottom">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item mb-4">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="public/frontend/assets/images/new/oct.png" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="{{ url('/photos')}}">إحتفالات 6 أكتوبر</a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li><span>6,2022 أكتوبر</span> <i class="icofont-calendar"></i>
                                                    </li>
                                                    <li><span>
                                                            الستاموني - بلقاس - المنصورة
                                                        </span>
                                                        <i class="icofont-location-pin"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md col-12">
                                    <div class="event-item lab-item mb-4">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="public/frontend/assets/images/new/trip.jpg" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="{{ url('/trips')}}">
                                                        رحـلات
                                                    </a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li> <span>24,2022 ديسمبر</span> <i class="icofont-calendar"></i>
                                                    </li>
                                                    <li> <span>
                                                            الستاموني - بلقاس - المنصورة
                                                        </span>
                                                        <i class="icofont-location-pin"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item mb-4">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="public/frontend/assets/images/new/kg.jpg" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="{{ url('/kg')}}">
                                                    الحضانة
                                                    </a></h5>
                                                <ul class="lab-ul event-date">
                                                    <li>

                                                        <span>3,2022 نوفمبر</span>
                                                        <i class="icofont-calendar"></i>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            الستاموني - بلقاس - المنصورة
                                                        </span>
                                                        <i class="icofont-location-pin"></i>
                                                    </li>
                                                </ul>
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
    <!-- Events Section end here -->

@endsection
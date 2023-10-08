@extends('frontend.includes.master')
@section('title','التعليم والتدريب')
@section('body')

    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div><img class="overlay" src="public/frontend/assets/images/bg.jpeg" alt="gallery-img">
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">التعليم والتدريب</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('/')}}">الرئيسية</a></li>
                    <li><a class="active">التعليم والتدريب</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-section padding-tb shape-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <h2 class="text-center">
                        لا يوجد بيانات
                    </h2>
                </div>
            </div>
        </div>
    </section>

@endsection
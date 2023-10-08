@extends('frontend.includes.master')
@section('title','جمعية الإمام البخاري بالستامونى')
@section('body')

    <!-- Banner Section start here -->
    <section class="banner-section">
        <div class="container">
            <div class="row align-items-center flex-column-reverse  flex-md-row">

                <div class="col-md-6">
                    <div class="banner-item">
                        <div class="banner-inner">
                            <div class="banner-content align-middle">
                                <h1><span class="">And Allah Invites To <br class="d-none d-lg-block">
                                        The </span>Home Of Peace</h1>
                                <p>The most beloved actions to Allah are those performed consistently, even if they are
                                    few</p>
                                <a href="#" class="lab-btn mt-3"><i class="icofont-heart-alt"></i> Donate Now </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="banner-item">
                        <div class="banner-inner">
                            <div class="banner-thumb">
                                <img src="{{ url('public/frontend/assets/images/bg.jpg') }}" class="img-fluid" alt="Banner-image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Banner Section end here -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-1" dir="rtl">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-content">
                                <div class="header-title text-start m-0">
                                    <h5>About Our History</h5>
                                    <h2 class="mb-0">Islamic Center For Muslims To
                                        Achieve Spiritual Goals</h2>
                                </div>
                                <h5 class="my-4">Our Promise To Uphold The Trust Placed.</h5>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi molestias culpa
                                    reprehenderit delectus, ullam harum, voluptatum numquam ati nesciunt odit quis
                                    corrupti magni quam consequatur sint ipsum tecto exercitationem, illo quisquam.
                                    Reprehenderit ut placeat cum adantium nam magnam blanditiis sequi modi! Nesciunt,
                                    repudiandae eos eniam quod maxime corrupti eligendi ea in animi.</p>
                                <a href="#" class="lab-btn mt-4"><i class="icofont-heart-alt"></i> Ask About Islam </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <div class="img-grp">
                                    <div class="about-circle-wrapper">
                                        <div class="about-circle-2"></div>
                                        <div class="about-circle"></div>
                                    </div>
                                    <div class="about-fg-img">
                                        <img src="{{ url('public/frontend/assets/images/about/02.png') }}" alt="about-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end here -->

    <!-- Feature Section Start Here -->
    <section class="feature-section bg-ash padding-tb" dir="rtl">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item text-xs-center">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/frontend/assets/images/feature/01.png') }}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Quran Studies</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Sponsor Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/frontend/assets/images/feature/02.png') }}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Islamic Classes</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Donate Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/frontend/assets/images/feature/03.png') }}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Islamic Awareness</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Join Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="lab-item feature-item">
                        <div class="lab-inner">
                            <div class="lab-thumb">
                                <img src="{{ url('public/frontend/assets/images/feature/04.png') }}" alt="feature-image">
                            </div>
                            <div class="lab-content">
                                <h5>Islamic Services</h5>
                                <p>Lorem ipsum dolor sit, amet is consectetur adipisicing elit.Its expedita porro natus
                                </p>
                                <a href="#" class="text-btn">Get Involved!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End Here -->

    <!-- Service section start here -->
    <section class="service-section padding-tb padding-b shape-2" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Islamic Center Services</h5>
                        <h2>Ethical And Moral Beliefs That Guides
                            To The Straight Path!</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row g-0 justify-content-center service-wrapper">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="lab-item service-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ url('public/frontend/assets/images/service/01.jpg') }}" alt="Service-image">
                                    </div>
                                    <div class="lab-content pattern-2">
                                        <div class="lab-content-wrapper">
                                            <div class="content-top">
                                                <div class="service-top-thumb"><img src="{{ url('public/frontend/assets/images/service/01.png') }}"
                                                                                    alt="service-icon"></div>
                                                <div class="service-top-content">
                                                    <span>Building Upgrades</span>
                                                    <h5><a href="#"> Mosque Development</a></h5>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <p>Lorem ipsum, dolor sit amet sectetur adipisicing elit. Vel dicta
                                                    beatae del voluptas apelas de.</p>
                                                <a href="#" class="text-btn">Read More +</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="lab-item service-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ url('public/frontend/assets/images/service/02.jpg') }}" alt="Service-image">
                                    </div>
                                    <div class="lab-content pattern-2">
                                        <div class="lab-content-wrapper">
                                            <div class="content-top">
                                                <div class="service-top-thumb"><img src="{{ url('public/frontend/assets/images/service/02.png') }}"
                                                                                    alt="service-icon"></div>
                                                <div class="service-top-content">
                                                    <span>Help Poor</span>
                                                    <h5><a href="#">Charity And Donation</a> </h5>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <p>Lorem ipsum, dolor sit amet sectetur adipisicing elit. Vel dicta
                                                    beatae del voluptas apelas de.</p>
                                                <a href="#" class="text-btn">Read More +</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="lab-item service-item">
                                <div class="lab-inner">
                                    <div class="lab-thumb">
                                        <img src="{{ url('public/frontend/assets/images/service/03.jpg') }}" alt="Service-image">
                                    </div>
                                    <div class="lab-content pattern-2">
                                        <div class="lab-content-wrapper">
                                            <div class="content-top">
                                                <div class="service-top-thumb"><img src="{{ url('public/frontend/assets/images/service/03.png') }}"
                                                                                    alt="service-icon"></div>
                                                <div class="service-top-content">
                                                    <span>Donate & Help</span>
                                                    <h5><a href="#">Poor Woman Marriage</a> </h5>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <p>Lorem ipsum, dolor sit amet sectetur adipisicing elit. Vel dicta
                                                    beatae del voluptas apelas de.</p>
                                                <a href="#" class="text-btn">Read More +</a>
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
    <!-- Service section end here -->

    <!-- Program section start Here -->
    <section class="program-section padding-tb bg-img"
             style="background: url({{ url('public/frontend/assets/images/program/bg.jpg') }}) rgba(5, 21, 57, 0.7); background-blend-mode: overlay;"
             dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Urgent Campaign</h5>
                        <h2 class="mb-4">Free And Complete Guide To All Muslims</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="progress-item-wrapper text-center">
                        <div class="progress-item mb-4">
                            <div class="progress-bar-wrapper progress" data-percent="50%">
                                <div class="progress-bar progress-bar-striped progress-bar-animated"></div>
                            </div>
                            <div class="progress-bar-percent d-flex align-items-center justify-content-center">50
                                <sup>%</sup>
                            </div>

                            <ul class="progress-item-status lab-ul d-flex justify-content-between">
                                <li>Raised<span> $24,000</span></li>
                                <li>Gold<span> $34,900</span></li>
                            </ul>
                        </div>
                        <a href="#" class="lab-btn"><i class="icofont-heart-alt"></i> Donate Now </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- upcoming program -->
    <div class="upcoming-programs" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="donation-part bg-img">
                        <div class="donation-content">
                            <h5>Help The Poor</h5>
                            <h2>Donations For The
                                Nobel Causes</h2>
                            <p>Give the best quality of security systems and
                                facility of latest technlogy for the people get
                                awesome.</p>
                            <a href="#" class="lab-btn"> <i class="icofont-heart-alt"></i> See All Causes </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="programs-item-part">
                        <div class="program-desc d-flex justify-content-between">
                            <p>We offer security solutions and cost effective service for our client
                                are safe and secure in any situation.</p>
                            <ul class="lab-ul">
                                <li><a href="#" class="program-next"><i class="icofont-arrow-left"></i></a></li>
                                <li><a href="#" class="program-prev"><i class="icofont-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="program-item-container">
                            <div class="program-item-wrapper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="program-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="#">
                                                        <img src="{{ url('public/frontend/assets/images/program/02.jpg') }}" alt="program-image">
                                                    </a>
                                                    <div class="lab-thumb-content">
                                                        <div class="progress-item">
                                                            <ul
                                                                class="progress-item-status lab-ul d-flex justify-content-between mb-2">
                                                                <li>Raised<span> $24,000</span></li>
                                                                <li>Gold<span> $34,900</span></li>
                                                            </ul>
                                                            <div class="progress-bar-wrapper progress"
                                                                 data-percent="50%">
                                                                <div
                                                                    class="progress-bar progress-bar-striped progress-bar-animated">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="progress-bar-percent d-flex align-items-center justify-content-center">
                                                                50 <sup>%</sup> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lab-content">
                                                    <span>food distribution</span>
                                                    <h5><a href="#">American Muslim: Choosing Remain
                                                            Still This Ramadan</a> </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" dir="ltr">
                                        <div class="program-item">
                                            <div class="lab-inner">
                                                <div class="lab-thumb">
                                                    <a href="#">
                                                        <img src="{{ url('public/frontend/assets/images/program/03.jpg') }}" alt="program-image">
                                                    </a>
                                                    <div class="lab-thumb-content">
                                                        <div class="progress-item">
                                                            <ul
                                                                class="progress-item-status lab-ul d-flex justify-content-between mb-2">
                                                                <li>Raised<span> $24,000</span></li>
                                                                <li>Gold<span> $34,900</span></li>
                                                            </ul>
                                                            <div class="progress-bar-wrapper progress"
                                                                 data-percent="70%">
                                                                <div
                                                                    class="progress-bar progress-bar-striped progress-bar-animated">
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="progress-bar-percent d-flex align-items-center justify-content-center">
                                                                70 <sup>%</sup> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lab-content">
                                                    <span>food distribution</span>
                                                    <h5><a href="#">How to Teach The Kids Ramadan
                                                            Isn’t About Food</a> </h5>
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
        </div>
    </div>
    <!-- Program section end Here -->

    <!-- Faith section start here -->
    <section class="faith-section padding-tb shape-3" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>The Pillars of Islam</h5>
                        <h2>Ethical And Moral Beliefs That Guides
                            To The Straight Path!</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="faith-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                                 aria-labelledby="sahadah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/faith/01.png') }}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Shahadah <span>(Faith)</span> </h4>
                                            <p>The Shahadah, is an Islamic creed, one of the Five Pillars of Islam and
                                                part of the Adhan. It reads: "I bear witness that there is no deity but
                                                God, and I bear witness that Muhammad is the messenger of God."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/faith/02.png') }}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Salaah <span>(Prayer)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/faith/03.png') }}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Sawm <span>(Fasting)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/faith/04.png') }}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Zakat <span>(Almsgiving)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                                <div class="lab-item faith-item tri-shape-1 pattern-2">
                                    <div class="lab-inner d-flex align-items-center">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/faith/05.png') }}" alt="faith-image">
                                        </div>
                                        <div class="lab-content">
                                            <h4>Hajj <span>(Pilgrimage)</span> </h4>
                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                                the afternoon, after sunset, and early at night. These prayers can be
                                                said anywhere, prayers that are said in company of others are better
                                                than those said alone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"
                                   role="tab" aria-controls="sahadah-tab" aria-selected="true">
                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/01.png') }}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"
                                   aria-controls="salah-tab" aria-selected="false">
                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/02.png') }}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"
                                   aria-controls="sawm-tab" aria-selected="false">
                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/03.png') }}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"
                                   aria-controls="zakat-tab" aria-selected="false">
                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/04.png') }}" alt="faith-icon">
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                   aria-controls="hajj-tab" aria-selected="false">
                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/05.png') }}" alt="faith-icon">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faith section end here -->

    <!-- Qoute Section start Here -->
    <div class="qoute-section padding-tb">
        <div class="qoute-section-wrapper">
            <div class="qoute-overlay"></div>
            <div class="container">
                <div class="qoute-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lab-item qoute-item">
                                <div class="lab-inner d-flex align-items-center" dir="rtl">
                                    <div class="lab-thumb">
                                        <span>Quote From
                                            Prophat</span>
                                        <i class="icofont-quote-left"></i>
                                    </div>
                                    <div class="lab-content">
                                        <blockquote class="blockquote">
                                            <p>Hazrat Mohammod (s) Said <span>"It is Better For Any Of You
                                                    To Carry A Load Of Firewood On His Own Back Than To
                                                    Beg From Someone Else"</span> </p>
                                            <footer class="blockquote-footer bg-transparent">Riyadh-Us-Saleheen, Chapter
                                                59, hadith 540
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qoute Section end Here -->

    <!-- Events Section start here -->
    <section class="event-section padding-tb padding-b shape-4" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-title">
                        <h5>Upcoming Events</h5>
                        <h2>Ethical And Moral Beliefs That Guides
                            To The Straight Path!</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="event-content">
                        <div class="event-top tri-shape-2 pattern-2">
                            <div class="event-top-thumb">
                                <img src="{{ url('public/frontend/assets/images/event/01.jpg') }}" alt="Upcoming-event">
                            </div>
                            <div class="event-top-content">
                                <div class="event-top-content-wrapper">
                                    <h3><a href="#">Helping Hands For Poor People
                                            Marriage Event</a> </h3>
                                    <div class="date-count-wrapper">
                                        <ul class="lab-ul event-date">
                                            <li> <span>December 24,2021</span> <i class="icofont-calendar"></i></li>
                                            <li> <span>New York AK United
                                                    States</span> <i class="icofont-location-pin"></i></li>
                                        </ul>
                                        <ul class="lab-ul event-count" data-date="July 05, 2021 21:14:01">
                                            <li>
                                                <span class="days">34</span>
                                                <div class="count-text">Days</div>
                                            </li>
                                            <li>
                                                <span class="hours">09</span>
                                                <div class="count-text">Hours</div>
                                            </li>
                                            <li>
                                                <span class="minutes">32</span>
                                                <div class="count-text">Muni</div>
                                            </li>
                                            <li>
                                                <span class="seconds">32</span>
                                                <div class="count-text">Seco</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="event-bottom">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="{{ url('public/frontend/assets/images/event/02.jpg') }}" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="#">If Islam Teaches Peace, Why Are
                                                        there Radical Muslims?</a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li> <span>December 24,2021</span> <i class="icofont-calendar"></i>
                                                    </li>
                                                    <li> <span>New York AK United
                                                            States</span> <i class="icofont-location-pin"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md col-12">
                                    <div class="event-item lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="{{ url('public/frontend/assets/images/event/03.jpg') }}" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="#">American Muslim: Choosing Remain
                                                        Still This Ramadan</a> </h5>
                                                <ul class="lab-ul event-date">
                                                    <li> <span>December 24,2021</span> <i class="icofont-calendar"></i>
                                                    </li>
                                                    <li> <span>New York AK United
                                                            States</span> <i class="icofont-location-pin"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="event-item lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <img src="{{ url('public/frontend/assets/images/event/04.jpg') }}" alt="event-image">
                                            </div>
                                            <div class="lab-content">
                                                <h5><a href="#"> How To Teach Kids Ramadan
                                                        Isn’t About Food</a></h5>
                                                <ul class="lab-ul event-date">
                                                    <li> <span>December 24,2021</span> <i class="icofont-calendar"></i>
                                                    </li>
                                                    <li> <span>New York AK United
                                                            States</span><i class="icofont-location-pin"></i></li>
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

    <!-- Our Team Section Start -->

    <section class="team">
        <div class="container py-5">
            <div class="row">
                <h2 class="text-center mb-4">Our Team</h2>
                <div class="col-12">
                    <div class="team-item-wrapper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">
                                        </div>
                                        <div class="lab-content">
                                            <a href="#">
                                                <h6 class="card-title mb-0">Hamad Bin Jasim</h6>
                                            </a>
                                            <p class="card-text mb-3">Hafiz Quran Scholor</p>
                                            <div class="social-share">
                                                <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                                <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                                <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                                <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">
                                        </div>
                                        <div class="lab-content">
                                            <a href="#">
                                                <h6 class="card-title mb-0">Hamad Bin Jasim</h6>
                                            </a>
                                            <p class="card-text mb-3">Hafiz Quran Scholor</p>
                                            <div class="social-share">
                                                <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                                <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                                <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                                <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">
                                        </div>
                                        <div class="lab-content">
                                            <a href="#">
                                                <h6 class="card-title mb-0">Hamad Bin Jasim</h6>
                                            </a>
                                            <p class="card-text mb-3">Hafiz Quran Scholor</p>
                                            <div class="social-share">
                                                <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                                <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                                <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                                <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">
                                        </div>
                                        <div class="lab-content">
                                            <a href="#">
                                                <h6 class="card-title mb-0">Hamad Bin Jasim</h6>
                                            </a>
                                            <p class="card-text mb-3">Hafiz Quran Scholor</p>
                                            <div class="social-share">
                                                <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                                <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                                <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                                <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">
                                        </div>
                                        <div class="lab-content">
                                            <a href="#">
                                                <h6 class="card-title mb-0">Hamad Bin Jasim</h6>
                                            </a>
                                            <p class="card-text mb-3">Hafiz Quran Scholor</p>
                                            <div class="social-share">
                                                <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                                <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                                <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                                <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card mb-4 text-center border-none team-item-1 pattern-2">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">
                                        </div>
                                        <div class="lab-content">
                                            <a href="#">
                                                <h6 class="card-title mb-0">Hamad Bin Jasim</h6>
                                            </a>
                                            <p class="card-text mb-3">Hafiz Quran Scholor</p>
                                            <div class="social-share">
                                                <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>
                                                <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>
                                                <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>
                                                <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>
                                                <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="team-ul-pag d-flex justify-content-center mt-3 list-unstyled">
                        <li><a href="#" class="program-next bg-dark text-white"><i class="icofont-arrow-right"></i></a></li>
                        <li><a href="#" class="program-prev bg-dark text-white"><i class="icofont-arrow-left"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section End -->

@endsection

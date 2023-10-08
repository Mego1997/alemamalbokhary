@extends('frontend.includes.master')
@section('title','تواصل معنا')
@section('body')

<!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div><img class="overlay" src="public/frontend/assets/images/comm.jpg" alt="gallery-img">
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">توصل معنا من خلال البريد الالكتروني</h4>
                <ul class="lab-ul">
                    <li><a href="index.html">الرئيسية</a></li>
                    <li><a class="active">توصل معنا</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- Contact Us Section Start Here -->
    <div class="contact-section">
        <div class="contact-top padding-tb aside-bg padding-b">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-title">
                                <h5>احصل على المعلومات
                                </h5>
                                <p>تفاصيل معلومات الاتصال الخاصة بنا وتابعنا على وسائل التواصل الاجتماعي

                                </p>
                            </div>
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="public/frontend/assets/images/contact/01.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">عنوان المكتب
</span>
                                            <p> الستاموني - بلقاس - المنصورة</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="public/frontend/assets/images/contact/02.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">رقم التليفون
</span>
                                            <p>
                                                2853 909 0100
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="public/frontend/assets/images/contact/03.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">ارسل بريد
</span>
                                            <p>
                                                drmohamadbasuoni@gmail.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="public/frontend/assets/images/contact/04.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">موقعنا</span>
                                            <p>www.alemamalbokhary.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <form action="#" method="POST" id="commentform" class="comment-form">
                                    <input type="text" name="name" class="" placeholder="الاسم*">
                                    <input type="email" name="email" class="" placeholder="البريد الالكتروني*">
                                    <textarea name="text" id="role" cols="30" rows="9"
                                        placeholder="الرسالة*"></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>أرسل رسالتك</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.227736753981!2d90.38698831452395!3d23.739256984594892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c740f17d1%3A0xdd3daab8c90eb11f!2sCodexCoder!5e0!3m2!1sbn!2sbd!4v1610134370994!5m2!1sbn!2sbd"
                                    allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Us Section ENding Here -->


@endsection
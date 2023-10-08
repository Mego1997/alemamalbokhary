@extends('frontend.includes.master')
@section('title','عن الجمعية')
@section('body')
    <!-- Page Header Section Start Here -->
    <section class="page-header bg_img padding-tb">
        <div class="overlay"></div><img class="overlay" src="public/frontend/assets/images/bg.jpeg" alt="gallery-img">
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">عن الجمعية</h4>
                <ul class="lab-ul">
                    <li><a href="{{ url('/')}}">الرئيسية</a></li>
                    <li><a class="active">حول الجمعية</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <!-- About section start here -->
    <section class="about-section padding-tb shape-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="lab-item">
                        <div class="lab-inner">
                            <div class="lab-content">
                                <div class="header-title text-start m-0">
                                    <h5>حول الجمعية
                                    </h5>
                                    <h2 class="mb-0">الجمعية الخيرية بالستاموني
                                    </h2>
                                </div>
                                <h5 class="my-4">
                                    هي منظمة غير ربحية تهدف إلى تقديم المساعدة والدعم للفئات المحتاجة والأسر الأولى بالرعاية بمركز الستاموني.
                                </h5>
                                <p>
                                    تعمل الجمعية على تحسين الحياة الإجتماعية والإقتصادية لأفراد المجتمع الأولى بالرعاية من خلال توفير المساعدات المالية والمعنوية والخدمات الأخرى.
                                </p>
                            </div>
                            <div class="lab-content">

                                <h5 class="my-4">
                                    أهداف الجمعية :
                                </h5>
                                <p>
                                    • المساعدة الإجتماعية: تقديم المساعدة المالية والعينية للأفراد والأسر المحتاجة مثل توفير الغذاء والمأوى والملبس والرعاية الصحية.
                                    <br><br>
                                    • التعليم والتدريب: تقديم الفرص التعليمية والتدريبية للأفراد لتمكينهم من تحسين قدراتهم وفرص العمل.
                                    <br><br>
                                    • الرعاية الصحية: تقديم الخدمات الطبية والرعاية الصحية للفئات المحتاجة والمرضى غير القادرين على تحمل التكاليف الطبية.
                                    <br><br>
                                    • تعتمد الجمعية على التبرعات والمساهمات من الأفراد والمؤسسات لتمكينها من تحقيق أهدافها ومساعدة المحتاجين.
                                    <br><br>
                                    • العمل الخيري يلعب دورًا هامًا في بناء المجتمعات القوية والمترابطة والتخفيف من معاناة الفقراء والمحتاجين، ويساهم في تحقيق التنمية المستدامة والعدالة الإجتماعية.
                                    <br><br>
                                </p>
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
                                    <div class="about-fg-img" style="margin-right: -58px;">
                                        <img src="{{ url('public/frontend/assets/new/0222.png') }}" alt="about-image">
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
{{--    <section class="feature-section bg-ash padding-tb" dir="rtl">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item text-xs-center">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/frontend/assets/images/feature/01.png') }}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>دراسات القرآن</h5>--}}
{{--                                <p>--}}
{{--                                    تتضمن هذه الدراسات استقراء المعاني والسياقات اللغوية والتاريخية والتفسيرية المختلفة التي تتنوع في تفسير آيات القرآن.--}}
{{--                                </p>--}}
{{--                                --}}{{--                                <a href="#" class="text-btn">Sponsor Now!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/frontend/assets/images/feature/02.png') }}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>دروس إسلامية</h5>--}}
{{--                                <p>--}}
{{--                                    تهدف دروس الإسلامية إلى تعزيز الفهم الصحيح للإسلام وتوجيه الناس نحو تطبيق تعاليمه في حياتهم اليومية.--}}
{{--                                </p>--}}
{{--                                --}}{{--                                <a href="#" class="text-btn">تبرع الآن!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/frontend/assets/images/feature/03.png') }}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>توعية اسلامية</h5>--}}
{{--                                <p>--}}
{{--                                    تهدف التوعية الإسلامية إلى توجيه الأفراد والمجتمع بشكل عام نحو التصرف وفقًا لمبادئ وقيم الإسلام.--}}
{{--                                </p>--}}
{{--                                --}}{{--                                <a href="#" class="text-btn">انضم إلينا!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-sm-6 col-12">--}}
{{--                    <div class="lab-item feature-item">--}}
{{--                        <div class="lab-inner">--}}
{{--                            <div class="lab-thumb">--}}
{{--                                <img src="{{ url('public/frontend/assets/images/feature/04.png') }}" alt="feature-image">--}}
{{--                            </div>--}}
{{--                            <div class="lab-content">--}}
{{--                                <h5>الخدمات الإسلامية</h5>--}}
{{--                                <p>--}}
{{--                                    تشمل هذه الخدمات مجموعة واسعة من المجالات والأنشطة التي تخدم الأفراد والمجتمعات بشكل عام.--}}
{{--                                </p>--}}
{{--                                --}}{{--                                <a href="#" class="text-btn">شارك!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!-- Feature Section End Here -->

    <!-- Team section start here -->
{{--    <section class="team-section padding-tb">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="header-title">--}}
{{--                        <h5>Board Of Scholors</h5>--}}
{{--                        <h2>Our Scholar Whose Knowledge Is--}}
{{--                            Useful For Others</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="row justify-content-center pb-10">--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                            <div class="card text-center border-none team-item-1">--}}
{{--                                <div class="lab-inner">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="{{ url('public/frontend/assets/images/team/01.jpg') }}" class="card-img-top" alt="product">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <a href="#">--}}
{{--                                            <h6 class="card-title mb-0">Hamad Bin Jasim</h6>--}}
{{--                                        </a>--}}
{{--                                        <p class="card-text mb-3">Hafiz Quran Scholor</p>--}}
{{--                                        <div class="social-share">--}}
{{--                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>--}}
{{--                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>--}}
{{--                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>--}}
{{--                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>--}}
{{--                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                            <div class="card text-center border-none team-item-1">--}}
{{--                                <div class="lab-inner">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="{{ url('public/frontend/assets/images/team/02.jpg') }}" class="card-img-top" alt="product">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <a href="#">--}}
{{--                                            <h6 class="card-title mb-0">Sayyida Al-Hijaazi</h6>--}}
{{--                                        </a>--}}
{{--                                        <p class="card-text mb-3">Hafiz Quran Scholor</p>--}}
{{--                                        <div class="social-share">--}}
{{--                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>--}}
{{--                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>--}}
{{--                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>--}}
{{--                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>--}}
{{--                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                            <div class="card text-center border-none team-item-1">--}}
{{--                                <div class="lab-inner">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="{{ url('public/frontend/assets/images/team/03.jpg') }}" class="card-img-top" alt="product">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <a href="#">--}}
{{--                                            <h6 class="card-title mb-0">Ashraf Al-Maktum</h6>--}}
{{--                                        </a>--}}
{{--                                        <p class="card-text mb-3">Hafiz Quran Scholor</p>--}}
{{--                                        <div class="social-share">--}}
{{--                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>--}}
{{--                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>--}}
{{--                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>--}}
{{--                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>--}}
{{--                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">--}}
{{--                            <div class="card text-center border-none team-item-1">--}}
{{--                                <div class="lab-inner">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <img src="{{ url('public/frontend/assets/images/team/04.jpg') }}" class="card-img-top" alt="product">--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <a href="#">--}}
{{--                                            <h6 class="card-title mb-0">Ayesha Binte Alif</h6>--}}
{{--                                        </a>--}}
{{--                                        <p class="card-text mb-3">Hafiz Quran Scholor</p>--}}
{{--                                        <div class="social-share">--}}
{{--                                            <a href="#" class="m-1 twitter"><i class="icofont-twitter"></i></a>--}}
{{--                                            <a href="#" class="m-1 behance"><i class="icofont-behance"></i></a>--}}
{{--                                            <a href="#" class="m-1 instagram"><i class="icofont-instagram"></i></a>--}}
{{--                                            <a href="#" class="m-1 vimeo"><i class="icofont-vimeo"></i></a>--}}
{{--                                            <a href="#" class="m-1 linkedin"><i class="icofont-linkedin"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Team section end here -->

    <!-- Qoute Section start Here -->
{{--    <div class="qoute-section padding-tb">--}}
{{--        <div class="qoute-section-wrapper">--}}
{{--            <div class="qoute-overlay"></div>--}}
{{--            <div class="container">--}}
{{--                <div class="qoute-container">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="lab-item qoute-item">--}}
{{--                                <div class="lab-inner d-flex align-items-center">--}}
{{--                                    <div class="lab-thumb">--}}
{{--                                        <span>Quote From--}}
{{--                                            Prophat</span>--}}
{{--                                        <i class="icofont-quote-left"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="lab-content">--}}
{{--                                        <blockquote class="blockquote">--}}
{{--                                            <p>Hazrat Mohammod (s) Said <span>"It is Better For Any Of You--}}
{{--                                                    To Carry A Load Of Firewood On His Own Back Than To--}}
{{--                                                    Beg From Someone Else"</span> </p>--}}
{{--                                            <footer class="blockquote-footer bg-transparent">Riyadh-Us-Saleheen, Chapter--}}
{{--                                                59, hadith 540--}}
{{--                                            </footer>--}}
{{--                                        </blockquote>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Qoute Section end Here -->

    <!-- Faith section start here -->
{{--    <section class="faith-section padding-tb shape-3">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="header-title">--}}
{{--                        <h5>The Pillars of Islam</h5>--}}
{{--                        <h2>Ethical And Moral Beliefs That Guides--}}
{{--                            To The Straight Path!</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12">--}}
{{--                    <div class="faith-content">--}}
{{--                        <div class="tab-content" id="pills-tabContent">--}}
{{--                            <div class="tab-pane fade show active" id="shahadah" role="tabpanel"--}}
{{--                                 aria-labelledby="sahadah-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <img src="{{ url('public/frontend/assets/images/faith/01.png') }}" alt="faith-image">--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <h4>Shahadah <span>(Faith)</span> </h4>--}}
{{--                                            <p>The Shahadah, is an Islamic creed, one of the Five Pillars of Islam and--}}
{{--                                                part of the Adhan. It reads: "I bear witness that there is no deity but--}}
{{--                                                God, and I bear witness that Muhammad is the messenger of God."</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <img src="{{ url('public/frontend/assets/images/faith/02.png') }}" alt="faith-image">--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <h4>Salaah <span>(Prayer)</span> </h4>--}}
{{--                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                                the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                                said anywhere, prayers that are said in company of others are better--}}
{{--                                                than those said alone.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <img src="{{ url('public/frontend/assets/images/faith/03.png') }}" alt="faith-image">--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <h4>Sawm <span>(Fasting)</span> </h4>--}}
{{--                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                                the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                                said anywhere, prayers that are said in company of others are better--}}
{{--                                                than those said alone.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <img src="{{ url('public/frontend/assets/images/faith/04.png') }}" alt="faith-image">--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <h4>Zakat <span>(Almsgiving)</span> </h4>--}}
{{--                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                                the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                                said anywhere, prayers that are said in company of others are better--}}
{{--                                                than those said alone.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">--}}
{{--                                <div class="lab-item faith-item tri-shape-1 pattern-2">--}}
{{--                                    <div class="lab-inner d-flex align-items-center">--}}
{{--                                        <div class="lab-thumb">--}}
{{--                                            <img src="{{ url('public/frontend/assets/images/faith/05.png') }}" alt="faith-image">--}}
{{--                                        </div>--}}
{{--                                        <div class="lab-content">--}}
{{--                                            <h4>Hajj <span>(Pilgrimage)</span> </h4>--}}
{{--                                            <p>Each Muslim should pray five times a day: in the morning, at noon, in--}}
{{--                                                the afternoon, after sunset, and early at night. These prayers can be--}}
{{--                                                said anywhere, prayers that are said in company of others are better--}}
{{--                                                than those said alone.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"--}}
{{--                            role="tablist">--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"--}}
{{--                                   role="tab" aria-controls="sahadah-tab" aria-selected="true">--}}
{{--                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/01.png') }}" alt="faith-icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"--}}
{{--                                   aria-controls="salah-tab" aria-selected="false">--}}
{{--                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/02.png') }}" alt="faith-icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"--}}
{{--                                   aria-controls="sawm-tab" aria-selected="false">--}}
{{--                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/03.png') }}" alt="faith-icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"--}}
{{--                                   aria-controls="zakat-tab" aria-selected="false">--}}
{{--                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/04.png') }}" alt="faith-icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"--}}
{{--                                   aria-controls="hajj-tab" aria-selected="false">--}}
{{--                                    <img src="{{ url('public/frontend/assets/images/faith/faith-icons/05.png') }}" alt="faith-icon">--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Faith section end here -->
@endsection

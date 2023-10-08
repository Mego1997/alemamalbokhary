@extends('backend.master')
@section('title', 'Invoices')
@section('body')
    <div class="content-header row">
    </div>
    <div class="content-body">


        <div class="row grouped-multiple-statistics-card">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                <div class="d-flex align-items-start mb-sm-1 mb-xl-0 border-right-blue-grey border-right-lighten-5">
                                            <span class="card-icon primary d-flex justify-content-center mr-3">
                                                <i class="icon-user-follow primary font-large-2 float-right"></i>
                                            </span>
                                    <div class="stats-amount mr-3">
                                        <h3 class="heading-text text-bold-600">{{$students->count()}}</h3>
                                        <p class="sub-heading">عدد الطلاب </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                <div class="d-flex align-items-start mb-sm-1 mb-xl-0 border-right-blue-grey border-right-lighten-5">
                                            <span class="card-icon danger d-flex justify-content-center mr-3">
                                                <i class="icon-layers success font-large-2 float-right"></i>
                                            </span>
                                    <div class="stats-amount mr-3">
                                        <h3 class="heading-text text-bold-600">{{$employees->count()}}</h3>
                                        <p class="sub-heading">عدد الموظفين</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                <div class="d-flex align-items-start border-right-blue-grey border-right-lighten-5">
                                            <span class="card-icon success d-flex justify-content-center mr-3">
                                                <i class="icon-social-dropbox danger font-large-2 float-right"></i>
                                            </span>
                                    <div class="stats-amount mr-3">
                                        <h3 class="heading-text text-bold-600">{{$suppliers->count()}}</h3>
                                        <p class="sub-heading">عدد الموردين</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-3 col-sm-6 col-12">
                                <div class="d-flex align-items-start">
                                            <span class="card-icon warning d-flex justify-content-center mr-3">
                                                <i class="icon-globe warning font-large-2 float-right"></i>
                                            </span>
                                    <div class="stats-amount mr-3">
                                        <h3 class="heading-text text-bold-600">{{$classes->count()}}</h3>
                                        <p class="sub-heading">عدد الفصول</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- fitness target -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xl-3 col-lg-12 border-right-blue-grey border-right-lighten-5">
                                <div class="my-1 text-center">
                                    <div class="card-header mb-2 pt-0">
                                        <h2 class="primary font-large-2">الخزنة الرئيسية</h2>
                                        <h3 class="font-large-1 text-bold-200">{{$safe->balance}} جنية</h3>
                                        <h5 class="primary">الرصيد الحالي</h5>

                                    </div>
                                    <div class="card-content">
                                        <ul class="list-inline clearfix pt-1 mb-0">
                                            <li class="border-right-grey border-right-lighten-2 pr-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$safeD->sum('income')}} جنية</h2>
                                                <span class="primary"><span class="feather icon-arrow-up"></span>
                                                    ايرادات</span>
                                            </li>
                                            <li class="pl-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$safeD->sum('outgoings')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    مصروفات</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-12">
                                <div class="card">
                                    <div class="card-header border-0-bottom">
                                        <h4 class="card-title">اخر التحديثات</h4>
                                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div id="daily-activity" class="table-responsive height-350">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الايرادات</th>
                                                    <th>المصروفات</th>
                                                    <th>الرصيد الحالي</th>
                                                    <th>الملاحظات</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($safeD as $key => $safee)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $safee->income }}</td>
                                                        <td>{{ $safee->outgoings }}</td>
                                                        <td>{{ $safee->balance }}</td>
                                                        <td>{{ $safee->note }}</td>
                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ fitness target -->
        <!-- fitness target -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                <div class="my-1 text-center">
                                    <div class="card-header mb-2 pt-0">
                                        <h2 class="primary font-large-2">خزنة الحضانة</h2>
                                        <h3 class="font-large-1 text-bold-200">{{$hadana->balance}} جنية</h3>
                                        <h5 class="primary">الرصيد الحالي</h5>

                                    </div>
                                    <div class="card-content">
                                        <ul class="list-inline clearfix pt-1 mb-0">
                                            <li class="border-right-grey border-right-lighten-2 pr-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$hadanaa->sum('income')}} جنية </h2>
                                                <span class="primary"><span class="feather icon-arrow-up"></span>
                                                    ايرادات</span>
                                            </li>
                                            <li class="pl-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$hadanaa->sum('outgoings')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    مصروفات</span>
                                            </li>
                                            <li class="pl-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$inshop->sum('remaning')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    ديون كانتين</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                <div class="my-1 text-center">
                                    <div class="card-header mb-2 pt-0">
                                        <h2 class="primary font-large-2">خزنة الكتب</h2>
                                        <h3 class="font-large-1 text-bold-200">{{$books->balance}} جنية</h3>
                                        <h5 class="primary">الرصيد الحالي</h5>

                                    </div>
                                    <div class="card-content">
                                        <ul class="list-inline clearfix pt-1 mb-0">
                                            <li class="border-right-grey border-right-lighten-2 pr-1">
                                                <h2 class="grey darken-1 text-bold-400">{{$books->sum('income')}} جنية</h2>
                                                <span class="primary"><span class="feather icon-arrow-up"></span>
                                                    ايرادات</span>
                                            </li>
                                            <li class="pl-1">
                                                <h2 class="grey darken-1 text-bold-400">{{$books->sum('outgoings')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    مصروفات</span>
                                            </li>
                                            <li class="pl-1">
                                                <h2 class="grey darken-1 text-bold-400">{{$inbook->sum('remaning')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    ديون</span>
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
        <!--/ fitness target -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                <div class="my-1 text-center">
                                    <div class="card-header mb-2 pt-0">
                                        <h2 class="primary font-large-2">خزنة الملابس</h2>
                                        <h3 class="font-large-1 text-bold-200">{{$clothes->balance}} جنية</h3>
                                        <h5 class="primary">الرصيد الحالي</h5>

                                    </div>
                                    <div class="card-content">
                                        <ul class="list-inline clearfix pt-1 mb-0">
                                            <li class="border-right-grey border-right-lighten-2 pr-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$clothes->sum('income')}} جنية</h2>
                                                <span class="primary"><span class="feather icon-arrow-up"></span>
                                                    ايرادات</span>
                                            </li>
                                            <li class="pl-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$clothes->sum('outgoings')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    مصروفات</span>
                                            </li>
                                            <li class="pl-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$inclothes->sum('remaning')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    ديون </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                                <div class="my-1 text-center">
                                    <div class="card-header mb-2 pt-0">
                                        <h2 class="primary font-large-2">خزنة التبرعات</h2>
                                        <h3 class="font-large-1 text-bold-200">{{$donation->balance}} جنية</h3>
                                        <h5 class="primary">الرصيد الحالي</h5>

                                    </div>
                                    <div class="card-content">
                                        <ul class="list-inline clearfix pt-1 mb-0">
                                            <li class="border-right-grey border-right-lighten-2 pr-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$donations->sum('income')}} جنية</h2>
                                                <span class="primary"><span class="feather icon-arrow-up"></span>
                                                    ايرادات</span>
                                            </li>
                                            <li class="pl-2">
                                                <h2 class="grey darken-1 text-bold-400">{{$donations->sum('outgoings')}} جنية</h2>
                                                <span class="danger"><span class="feather icon-arrow-down"></span>
                                                    مصروفات</span>
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



@endsection

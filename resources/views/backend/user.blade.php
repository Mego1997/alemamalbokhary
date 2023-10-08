@extends('backend.master')
@section('title', 'Invoices')
@section('body')
    <div class="content-header row">
    </div>
    <div class="content-body">



        <!-- fitness target -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-xl-3 col-lg-12 border-right-blue-grey border-right-lighten-5">
                                <div class="my-1 text-center">
                                    <div class="card-header mb-2 pt-0">
                                        <h2 class="primary font-large-2">خزنة التبرعات</h2>
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

    </div>



@endsection

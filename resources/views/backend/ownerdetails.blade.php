@extends('backend.master')
@section('title', ' الخزنة')
@section('body')

    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h1 class="text-center text-bold-700 text-primary ">التقارير</h1>

                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                <li><a data-action="close"><i class="feather icon-x"></i></a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif



                                <p class="card-text"></p>
                                <div class="bg-light-success">
                                    <div class="m-2">
                                        {{-- start form--}}
                                        <form class="form"  method="post"
                                              enctype="multipart/form-data">

                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="form-section text-dark"><i
                                                                class="feather icon-edit-2"></i>الخزنة</h4>
                                                        <div class="form-group m-1">
                                                            <select id="safe" name="safe" class="custom-select border-primary"  id="">
                                                                <option value="1">الخزنة الرئيسية</option>
                                                                <option value="2">خزنة الحضانة</option>
                                                                <option value="3">خزنةالكتب</option>
                                                                <option value="4">خزنة الملابس</option>
                                                                <option value="5">خزنة التبرعات</option>
                                                                <option value="6">خزنة دار التحفيظ</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                            التاريخ</h4>
                                                        <div class="d-flex row">

                                                            <div class="input-group m-1 col-md-12">
                                                                <div class="input-group-prepend" id="button-addon1">
                                                                    <button class="btn btn-primary" type="button">من : </button>
                                                                </div>
                                                                <input type="date"  name="from" id="from" class="form-control"  aria-describedby="button-addon1">
                                                            </div>

                                                            <div class="input-group m-1 col-md-12">
                                                                <div class="input-group-prepend" id="button-addon1">
                                                                    <button class="btn btn-primary" type="button">إلي : </button>
                                                                </div>
                                                                <input type="date"  name="to" id="to" class="form-control"  aria-describedby="button-addon1">
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>



                                            </div>


                                            <div class="form-actions center text-bold-500">
                                                <button type="submit" id="detailgo" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> عرض
                                                </button>
                                                <button type="reset" class="btn btn-danger mr-1">
                                                    <i class="feather icon-x"></i> إلغاء
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <p class="text-center align-items-center text-bold-700"> الفترة الزمانية من : <input class="yasm" disabled> الي : <input class="yas" disabled></p>

                                <div class="row">
                                    <div class="input-group col-md-4">
                                        <div class="input-group-prepend" id="button-addon1">
                                            <button class="btn btn-primary " type="button">  اجمالي الايرادات</button>
                                        </div>
                                        <input type="text" id="income" class="form-control income"  aria-describedby="button-addon1" disabled>
                                    </div>
                                    <div class="input-group col-md-4">
                                        <div class="input-group-prepend" id="button-addon1">
                                            <button class="btn btn-primary" type="button">اجمالي المصروفات</button>
                                        </div>
                                        <input type="text" id="outgoing" class="form-control pr-2 outgoing"  aria-describedby="button-addon1" disabled>
                                    </div>

                                    <div class="input-group col-md-4">
                                        <div class="input-group-prepend" id="button-addon1">
                                            <button class="btn btn-primary " type="button">اجمالي الأرباح  </button>
                                        </div>
                                        <input type="text" id="finalprice" class="form-control finalprice"  aria-describedby="button-addon1" disabled>
                                    </div>

                                </div>

                                <table class="table table-striped table-responsive-sm table-bordered file-export dataTable mt-1" id="ownerdetails" id="DataTables_Table_10" role="grid" aria-describedby="DataTables_Table_10_info">
                                <thead class="bg-success">
                                <tr>
                                    <th>#</th>
                                    <th>الايرادات</th>
                                    <th>المصروفات</th>
                                    <th>الرصيد الحالي</th>
                                    <th>الملاحظات</th>
                                    <th>التاريخ</th>
                                </tr>
                                </thead>
                                <tbody class="text-bold-700" id="remove">


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOM - jQuery events table -->
    <!--/ Scroll - horizontal table -->

@endsection


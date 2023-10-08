@extends('backend.master')
@section('title', 'اضافة فاتورة')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">اضافة فاتورة</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/homepage') }}">الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/supplierinvoices') }}">الفواتير</a>
                            </li>
                            <li class="breadcrumb-item active">اضافة فاتورة</li>
                        </ol>
                    </div>
                </div>
            </div>
            {{--            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2"> --}}
            {{--                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown"> --}}
            {{--                    <div class="btn-group" role="group"> --}}
            {{--                        <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button> --}}
            {{--                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div> --}}
            {{--                    </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a> --}}
            {{--                </div> --}}
            {{--            </div> --}}
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">اضافة فاتورة</h4>
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
                                <div class="card-body">
{{--                                    @if ($errors->any())--}}
{{--                                        <div class="alert alert-danger">--}}
{{--                                            <ul>--}}
{{--                                                @foreach ($errors->all() as $error)--}}
{{--                                                    <li>{{ $error }}</li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                        @if (session('error'))
                                            <div class="alert alert-success">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                    <form class="form" action="{{ route('supplierinvoices.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>نوع المورد</h4>
                                                    <div class="form-group">

                                                        <select name="type_id"  class="select2 form-control"
                                                            id="type">
                                                            <option value=""> اختار النوع</option>
                                                            @foreach ($suppliertypes as $suppliertype)
                                                                <option value="{{ $suppliertype->id }}">{{ $suppliertype->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>اسم المورد</h4>
                                                    <div class="form-group">

                                                        <select name="supplier_id"  class="select2 form-control"
                                                            id="supplier">
                                                                <option value="">اسم المورد</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>اسم المنتج</h4>
                                                    <div class="form-group">

                                                        <select   class="select2 form-control"
                                                        id="brand">
                                                            <option value="">اسم المنتج</option>
                                                    </select>

                                                    </div>


                                                </div>


                                            </div>


                                            <div class="row">

                                                <div class="col-md-3">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>سعر الشراء</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="owner_price"
                                                            class="form-control border-primary" placeholder="سعر الشراء"
                                                            >
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>سعر البيع</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="student_price"
                                                            class="form-control border-primary" placeholder="سعر البيع"
                                                            >
                                                    </div>


                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>الكمية</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="quan"
                                                            class="form-control border-primary" placeholder="الكمية"
                                                            >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <h4 class="form-section text-dark"><i
                                                        class="feather icon-edit-2"></i>تأكيد الطلب</h4>
                                                    <div class="form-group">
                                                <button class="btn btn-primary" type="button" id="push">اضافة</button>
                                                    </div>
                                                </div>



                                            </div>
                                            <div class="row" >
                                                <table id="put" class="table table-striped table-bordered dom-jQuery-events text-white " style="background-color: grey !important">
                                                    <thead>
                                                        <tr>
                                                        <th>أسم المنتج</th>
                                                        <th>سعر المنتج</th>
                                                        <th>الكمية</th>
                                                        <th>الاجمالي</th>
                                                        <th>العمليات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                                </table>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-4">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>المدفوع</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="paid"
                                                            class="form-control border-primary" placeholder="المدفوع"
                                                            name="paid">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>إجمالي الفاتورة</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="total"
                                                            class="form-control border-primary total" placeholder="الاجمالي"
                                                            name="total" value="" readonly >

                                                    </div>


                                                </div>

                                                <div class="col-md-4">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>المتبقي</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="remaning"
                                                            class="form-control border-primary" placeholder="المتبقي"
                                                            name="remaning" readonly>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>ملاحظه</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="ملاحظة"
                                                            name="note">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> حفظ
                                    </button>
                                    <button type="reset" class="btn btn-warning mr-1">
                                        <i class="feather icon-x"></i> إلغاء
                                    </button>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>


@endsection

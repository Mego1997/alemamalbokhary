@extends('backend.master')
@section('title' , 'الطلاب')
@section('body')
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-right col-md-12 col-12 mb-1">
                <h3 class="content-header-title">فاتورة</h3>
            </div>
            <div class="content-header-left breadcrumbs-left breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">الفواتير</a>
                        </li>
                        <li class="breadcrumb-item active">الفاتورة
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- App invoice wrapper -->
            <section class="app-invoice-wrapper">
                <div class="row">
                    <div class="col-xl-9 col-md-8 col-12 printable-content">
                        <!-- using a bootstrap card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body p-2">
                                <!-- card-header -->
                                <div class="card-header px-0">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-7 col-xl-4 mb-50">
                                            <span class="invoice-id font-weight-bold">رقم الفاتورة #</span>
                                            <span>{{ $invoice->id }}</span>
                                        </div>
                                        <div class="col-md-12 col-lg-5 col-xl-8">
                                            <div class="d-flex align-items-center justify-content-end justify-content-xs-start">
                                                <div class="issue-date pr-2">
                                                    <span class="font-weight-bold no-wrap">التاريخ: </span>
                                                    <span>{{ $invoice->created_at }}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- invoice logo and title -->
                                <div class="invoice-logo-title row py-2">
                                    <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                                        <h2 class="text-primary">فاتورة</h2>
                                        <span>جمعية الامام البخاري</span>
                                    </div>
                                    <div class="col-6 d-flex justify-content-end invoice-logo">
                                        <img src="{{ url('public/backend/app-assets/images/logo/logo1.png') }}" alt="company-logo" height="100" width="100">
                                    </div>
                                </div>
                                <hr>

                                <!-- invoice address and contacts -->
                                <div class="row invoice-adress-info py-2">
                                    <div class="col-6 mt-1 from-info">
                                        <div class="info-title mb-1">
                                            <span>بيانات الطالب</span>
                                        </div>
                                        <div class="company-name mb-1">
                                            <span class="text-muted">{{ $invoice->students->name }}</span>
                                        </div>
                                        <div class="company-address mb-1">
                                            <span class="text-muted">{{ $invoice->students->parent_phone }}</span>
                                        </div>
                                        <div class="company-email  mb-1 mb-1">
                                            <span class="text-muted">{{ $invoice->students->address }}</span>
                                        </div>
                                        <div class="company-phone  mb-1">
                                            <span class="text-muted">{{ $invoice->students->gender == 'Male' ? 'ذكر' : 'أنثي'  }}</span>
                                        </div>
                                    </div>

                                </div>

                                <!--product details table -->
                                <div class="product-details-table py-2 table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                        <th scope="col">اجمالي المصروفات</th>
                                        <th scope="col">مدفوع </th>
                                        <th scope="col">المتبقي</th>
                                        <th scope="col">طريقه الدفع</th>
                                        <th scope="col">الملاحظه</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $invoice->requested_price }}</td>
                                                <td>{{ $invoice->paid }}</td>
                                                <td>{{ $invoice->remaning }}</td>
                                                <td>{{ $invoice->Payment_method->name }}</td>
                                                <td>{{ $invoice->note }}</td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <hr>

                                <!-- invoice total -->
                                <div class="invoice-total py-2">
                                    <div class="row">
                                        <div class="col-4 col-sm-6 mt-75">
                                            <p>شكرا لك</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- buttons section -->
                    <div class="col-xl-3 col-md-4 col-12 action-btns">
                        <div class="card">
                            <div class="card-body p-2">
                                <a href="{{ route('pdf.download', $invoice->id ) }}" class="btn btn-success btn-block mb-1"><i class="feather icon-credit-card mr-25 common-size"></i>طباعة</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    </div>
</div>
@endsection


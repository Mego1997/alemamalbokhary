<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Invoice - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="{{ url('public/backend/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/backend/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/custom-rtl.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/app-assets/css-rtl/pages/app-invoice.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/backend/assets/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('backend.includes.header')

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('backend.includes.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-right col-md-12 col-12 mb-1">
                    <h3 class="content-header-title">فاتورة</h3>
                </div>
                <div class="content-header-left breadcrumbs-left breadcrumbs-top col-md-6 col-12">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard/">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="/dashboard/donationsinvoices">الفواتير</a>
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
                        <div id="" class="col-xl-9 col-md-8 col-12 printable-content">
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
                                            <h2 class="text-primary">جمعية الامام البخاري</h2>
                                            {{-- <span>جمعية الامام البخاري</span> --}}
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
                                                <span>البيانات </span>
                                            </div>
                                            <div class="company-name mb-1">
                                                <span class="text-muted">{{ $invoice->donations->name }}</span>
                                            </div>
                                            <div class="company-address mb-1">
                                                <span class="text-muted">{{ $invoice->donations->phone }}</span>
                                            </div>
                                            <div class="company-email  mb-1 mb-1">
                                                <span class="text-muted">{{ $invoice->donations->address }}</span>
                                            </div>

                                        </div>

                                    </div>

                                    <!--product details table -->
                                    <div class="product-details-table py-2 table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                            <th scope="col">الاسم</th>
                                            <th scope="col">المبلغ</th>
                                            <th scope="col">الملاحظه</th>
                                            <th scope="col">التاريخ</th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>{{ $invoice->donations->name }}</td>
                                                    <td>{{ $invoice->paid }}</td>
                                                    <td>{{ $invoice->note }}</td>
                                                    <td>{{ $invoice->created_at}}</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>

                                    <!-- invoice total -->
                                    <div class="invoice-total py-2">
                                        <div class="row">
                                            <div class="col-4 col-sm-6 mt-75">
                                                <p>شكرا لك </p>
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
                                    <a href="#" class="btn btn-info btn-block mb-1 print-invoice"> <i class="feather icon-printer mr-25 common-size"></i> طباعة الفاتورة</a>

                                    {{-- <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-info btn-block mb-1"><i class="feather icon-edit-2 mr-25 common-size"></i>تعديل الفاتورة</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('backend.includes.footer')

    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    @include('backend.includes.script')
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

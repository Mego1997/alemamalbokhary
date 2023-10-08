@extends('backend.master')
@section('title', 'بروفايل الحالة')
@section('body')


    <!-- BEGIN: Content-->
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- users view start -->
        <section class="users-view">
            <!-- users view media object start -->
            <div class="row">
                <div class="col-12 col-sm-7">
                    <div class="media mb-2">
{{--                        <a class="mr-1" href="#">--}}
{{--                            <img src="{{ url('public/donations/' .$donation->img_id) }}" alt="users view avatar"--}}
{{--                                class="users-avatar-shadow rounded-circle" height="150" width="150">--}}
{{--                        </a>--}}
                        <div class="media-body pt-25">
                            <h4 class="media-heading"><span class="text-muted font-medium-1"></span><span
                                    class="users-view-username text-muted font-medium-1 "></span>الاسم : <span
                                    class="users-view-name">{{ $donation->name }} </span></h4>
                            <span>كود الطالب:</span>
                            <span class="users-view-id">{{ $donation->id }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">

                    <a href="{{ route('donations.edit', $donation->id) }}"
                        class="btn btn-sm btn-primary">تعديل</a>
                </div>
            </div>
            <!-- users view media object ends -->

            <!-- users view card details start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <h3 class="mb-1"><i class="feather icon-info"></i>بيانات الحالة:</h3>
                            <table class="table table-borderless mb-0 text-bold-700">
                                <tbody class="text-white bg-primary">

                                    <tr>
                                        <td>الاسم :</td>
                                        <td class="users-view-username">{{ $donation->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الميلاد:</td>
                                        <td>{{ $donation->birthday }}</td>
                                    </tr>
                                    <tr>
                                        <td>العنوان:</td>
                                        <td>{{ $donation->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>الجنس:</td>
                                        <td>{{ $donation->gender == 'Male' ? 'ذكر' : 'انثي' }}</td>
                                    </tr>
                                    <tr>
                                        <td>رقم التليفون:</td>
                                        <td>{{ $donation->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td> رقم البطاقة :</td>
                                        <td>{{ $donation->raqam }}</td>
                                    </tr>



                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

             <!-- users view card data start -->
             <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>فواتير الحالة</h3>
                            </div>



                            <div class="col-12 col-md-12">
                                <p class="card-text"></p>
                                <table class="table table-striped table-bordered zero-configuration">                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الحالة</th>
                                        <th>المبلغ</th>
                                        <th>الملاحظة</th>
                                        <th>التاريخ</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donation->invoices as $key => $invoice)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a
                                                    href="{{ route('donations.show', $invoice->donations->id) }}">{{ $invoice->donations->name }}</a>
                                            </td>
                                            <td>{{ $invoice->price }}</td>
                                            <td>{{ $invoice->note }}</td>
                                            <td>{{ $invoice->created_at }}</td>
                                            <td>

                                                <a href="{{ route('donationsinvoices.show', $invoice->id) }}"
                                                    class="btn btn-float btn-float-md btn-success">طباعة</a>

                                                <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal"
                                                    data-target="#danger{{ $invoice->id }}">حذف</button>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="danger{{ $invoice->id }}" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel10" aria-hidden="true">
                                            <form action="{{ route('donationsinvoices.destroy', $invoice->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-danger white">
                                                            <h4 class="modal-title" id="myModalLabel10">تأكيد الحذف</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>
                                                                هل انت متأكد من الحذف
                                                               ؟
                                                            </h5>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit"
                                                                class="btn btn-outline-danger">حذف</button>
                                                            <button type="button" class="btn grey btn-outline-secondary"
                                                                data-dismiss="modal">إغلاق</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @endforeach

                                </tbody>
                            </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- users view ends -->
    </div>


    <!-- END: Content-->



@endsection

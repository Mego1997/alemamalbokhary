@extends('backend.master')
@section('title', ' بروفايل السائق ')
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
                        <a class="mr-1" href="#">
                            <img src="{{  url('public/drivers/' .$driver->image) }}" alt="users view avatar"
                                class="users-avatar-shadow rounded-circle" height="64" width="64">
                        </a>
                        <div class="media-body pt-25">
                            <h4 class="media-heading"><span class="text-muted font-medium-1"></span><span
                                    class="users-view-username text-muted font-medium-1 "></span>الاسم : <span
                                    class="users-view-name">{{ $driver->name }} </span></h4>
                            <span>كود السائق:</span>
                            <span class="users-view-id">{{ $driver->id }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
                    <a href="#" class="btn btn-sm mr-25 border"><i
                            class="feather icon-message-square font-small-3"></i></a>
                    <a href="#" class="btn btn-sm mr-25 border">Profile</a>
                    <a href="#"
                        class="btn btn-sm btn-primary">Edit</a>
                </div>
            </div>
            <!-- users view media object ends -->

            <!-- users view card details start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-12">
                            <h3 class="mb-1"><i class="feather icon-info"></i>بيانات السائق:</h3>
                            <table class="table table-borderless mb-0 text-bold-700">
                                <tbody class="text-white bg-primary">

                                    <tr>
                                        <td>الاسم :</td>
                                        <td class="users-view-username">{{ $driver->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الميلاد:</td>
                                        <td>{{ $driver->birthday }}</td>
                                    </tr>
                                    <tr>
                                        <td>العنوان:</td>
                                        <td>{{ $driver->address }}</td>

                                    <tr>
                                        <td>رقم التليفون:</td>
                                        <td>{{ $driver->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>رقم البطاقة:</td>
                                        <td>{{ $driver->code }}</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- users view card details ends -->
            <!-- users view card data start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>الفواتير</h3>
                            </div>

                            <div class="col-12 col-md-12">
                                <div class="table-responsive">
                                    <p class="card-text"></p>
                                    <table class="table table-striped table-bordered zero-configuration text-bold-700">
                                        <thead class="text-white bg-primary">
                                            <tr>
                                                <th>#</th>
                                                <th>مدفوع </th>
                                                <th>المتبقي</th>
                                                <th>الاجمالى</th>
                                                <th>الملاحظه</th>
                                                <th>العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($invoices as $key => $invoice)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $invoice->paid }}</td>
                                                    <td>{{ $invoice->remaning }}</td>
                                                    <td>{{ $invoice->total }}</td>
                                                    <td>{{ $invoice->note == null ? 'لايوجد' : $invoice->note }}</td>
                                                    <td>
                                                        <a href="{{ route('driversinvoices.show', $invoice->id) }}"
                                                        class="btn btn-float btn-float-md btn-pink"><i
                                                            class="fa fa-file-pdf-o"></i></a>



{{--                                                        <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal"--}}
{{--                                                            data-target="#danger"> <i class="fa fa-trash"></i> </button>--}}
                                                    </td>
                                                </tr>
                                                <!-- Modal -->
{{--                                                <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"--}}
{{--                                                    aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                                    <form action="" method="POST">--}}
{{--                                                        @csrf--}}
{{--                                                        @method('delete')--}}
{{--                                                        <div class="modal-dialog" role="document">--}}
{{--                                                            <div class="modal-content">--}}
{{--                                                                <div class="modal-header bg-danger white">--}}
{{--                                                                    <h4 class="modal-title" id="myModalLabel10">Confirm Delete</h4>--}}
{{--                                                                    <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                        aria-label="Close">--}}
{{--                                                                        <span aria-hidden="true">&times;</span>--}}
{{--                                                                    </button>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-body">--}}
{{--                                                                    <h5>--}}
{{--                                                                        Are You Sure You Want To Delete--}}
{{--                                                                        " "--}}
{{--                                                                        ?--}}
{{--                                                                    </h5>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="modal-footer">--}}
{{--                                                                    <button type="submit"--}}
{{--                                                                        class="btn btn-outline-danger">Delete</button>--}}
{{--                                                                    <button type="button" class="btn grey btn-outline-secondary"--}}
{{--                                                                        data-dismiss="modal">Close</button>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

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

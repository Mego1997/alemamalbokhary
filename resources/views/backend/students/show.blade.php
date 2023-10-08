@extends('backend.master')
@section('title', 'بروفايل الطالب')
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
                            <img src="{{ url('public/students/' .$student->image) }}" alt="users view avatar"
                                class="users-avatar-shadow rounded-circle" height="150" width="150">
                        </a>
                        <div class="media-body pt-25">
                            <h4 class="media-heading"><span class="text-muted font-medium-1"></span><span
                                    class="users-view-username text-muted font-medium-1 "></span>الاسم : <span
                                    class="users-view-name">{{ $student->name }} </span></h4>
                            <span>كود الطالب:</span>
                            <span class="users-view-id">{{ $student->id }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">

                    <a href="{{ route('students.edit', $student->id) }}"
                        class="btn btn-sm btn-primary">تعديل</a>
                </div>
            </div>
            <!-- users view media object ends -->

            <!-- users view card details start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                            <div class="row bg-blue bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">

                                <div class="col-md-3 col-sm-4 p-2">

                                    <h3 class="form-section text-dark ">المصروفات الدراسية</h3>
                                    @if (count($student->hadana_invoices)<1)
                                    <h6 class="text-bg-info font-large mt-1">  لا توجد فواتير مسجله حالي</h6>
                                    @endif

                                    @foreach ($student->hadana_invoices as $key => $invoice)


                                    <h6 class="text-bg-info font-large mt-1">دفع: <span
                                            class="font-medium-5  align-middle">{{ $invoice->requested_price - $invoice->remaning }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">متبقي: <span
                                            class="font-medium-5   align-middle">{{ $invoice->remaning }} جنية</span></h6>
                                    <h6 class="text-bg-info font-large mt-1">الحالة: <span
                                            class="font-medium-5  align-middle">{{ $invoice->remaning == 0 ? 'خالص' : 'مديون' }}</span>
                                    </h6>
                                    @endforeach

                                </div>

                                <div class="col-md-3 col-sm-4 p-2">
                                    <h3 class="form-section text-dark">مصروفات الباص </h3>
                                    @if (count($student->bus)<1)
                                    <h6 class="text-bg-info font-large mt-1">  لا توجد فواتير مسجله حالي</h6>
                                    @endif

                                    @foreach ($student->bus as $key => $bus)
                                    <h6 class="text-bg-info font-large mt-1">دفع: <span
                                        class="font-medium-5  align-middle">{{ $bus->paid }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">متبقي: <span
                                        class="font-medium-5  align-middle">{{ $bus->remaning }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">الحالة: <span
                                        class="font-medium-5  align-middle">{{ $bus->remaning == 0 ? 'خالص' : 'مديون' }}</span>
                                    </h6>
                                    @endforeach

                                </div>

                                <div class="col-md-3 col-sm-4 p-2">
                                    <h3 class="form-section text-dark">مصروفات الكتب</h3>
                                    @if (count($books)<1)
                                    <h6 class="text-bg-info font-large mt-1">  لا توجد فواتير مسجله حالي</h6>
                                    @else
                                    <h6 class="text-bg-info font-large mt-1">المدفوع:
                                        <span class="font-medium-5  align-middle">{{ $books->sum('paid') }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">الخصم:
                                        <span class="font-medium-5  align-middle">{{ $books->sum('discount') }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">الاجمالي:
                                        <span class="font-medium-5  align-middle">{{ $books->sum('total') }} جنية</span>
                                    </h6>

                                    @endif

                                </div>

                                <div class="col-md-3 col-sm-4 p-2">
                                    <h3 class="form-section text-dark">مصروفات الملابس</h3>
                                    @if (count($clothes)<1)
                                    <h6 class="text-bg-info font-large mt-1">  لا توجد فواتير مسجله حالي</h6>
                                    @else
                                    <h6 class="text-bg-info font-large mt-1">المدفوع:
                                        <span class="font-medium-5  align-middle">{{ $clothes->sum('paid') }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">الخصم:
                                        <span class="font-medium-5  align-middle">{{ $clothes->sum('discount') }} جنية</span>
                                    </h6>
                                    <h6 class="text-bg-info font-large mt-1">الاجمالي:
                                        <span class="font-medium-5  align-middle">{{ $clothes->sum('total') }} جنية</span>
                                    </h6>
                                    @endif
                                </div>
                            </div>
                        <div class="col-12">
                            <h3 class="mb-1"><i class="feather icon-info"></i>بيانات الطالب:</h3>
                            <table class="table table-borderless mb-0">
                                <tbody>

                                    <tr>
                                        <td>الاسم :</td>
                                        <td class="users-view-username">{{ $student->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الميلاد:</td>
                                        <td>{{ $student->birthday }}</td>
                                    </tr>
                                    <tr>
                                        <td>العنوان:</td>
                                        <td>{{ $student->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>الجنس:</td>
                                        <td>{{ $student->gender == 'Male' ? 'ذكر' : 'انثي' }}</td>
                                    </tr>
                                    <tr>
                                        <td>رقم التليفون:</td>
                                        <td>{{ $student->parent_phone }}</td>
                                    </tr>
                                    <tr>
                                        <td> الفصل :</td>
                                        <td>{{ $student->class->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الألتحاق :</td>
                                        <td>{{ $student->join_date }}</td>
                                    </tr>
                                    <tr>
                                        <td> المواصلات :</td>
                                        <td>{{ $student->Delivery_methods->name }}</td>
                                    </tr>
                                    <tr>
                                        <td> هل كان في حضانة اخري:</td>
                                        <td>{{ $student->prev_hadana == 0 ? 'لا' : 'نعم' }}</td>
                                    </tr>
                                    <tr>
                                        <td>منسحب:</td>
                                        <td>{{ $student->withdrawal == 0 ? 'لا' : 'نعم' }}</td>
                                    </tr>
                                    <tr>
                                        <td>الأرشيف:</td>
                                        <td>{{ $student->archive == 0 ? 'لا' : 'نعم' }}</td>
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

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>فواتير المصروفات</h3>
                            </div>



                            <div class="col-12 col-md-12">
                                <p class="card-text"></p>
                                <table class="table table-striped table-bordered zero-configuration">                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>اسم الطالب</th>
                                                <th>طريقه الدفع</th>
                                                <th>مدفوع </th>
                                                <th>المتبقي</th>
                                                <th>التاريخ </th>
                                                <th>الحالة </th>
                                                <th>الملاحظه</th>
                                                <th>العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student->hadana_invoices as $key => $invoice)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><a
                                                            href="{{ route('students.show', $invoice->students->id) }}">{{ $invoice->students->name }}</a>
                                                    </td>
                                                    <td>{{ $invoice->Payment_method->name }}</td>
                                                    <td>{{ $invoice->paid }}</td>
                                                    <td>{{ $invoice->remaning }}</td>
                                                    <td>{{ Carbon\Carbon::parse($invoice->updated_at)->format('d/m/Y') }}</td>                                                </td>
                                                    <td><span
                                                        class="badge badge-success users-view-status">{{ $invoice->remaning == 0 ? 'خالص' : 'مديون' }}</span>
                                                     </td>
                                                      <td>{{ $invoice->note == null ? 'لايوجد' : $invoice->note }}</td>

                                                    <td>
                                                        @if ($invoice->remaning > 0 )

                                                            <a href="{{ route('invoices.edit', $invoice->id) }}"
                                                               class="btn btn-float btn-float-md btn-warning">دفع القسط</a>
                                                        @endif
                                                        <a href="{{ route('pdf2.hadana', $invoice->id) }}"
                                                            class="btn btn-float btn-float-md btn-success">طباعة</a>

                                                        <a href="{{ route('pdf.hadana', $invoice->id) }}"
                                                        class="btn btn-float btn-float-md btn-info">تفاصيل</a>


{{--                                                        <a href="{{ route('invoices.edit', $invoice->id) }}"--}}
{{--                                                            class="btn btn-float btn-float-md btn-warning">تعديل</a>--}}
{{--                                                        <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal"--}}
{{--                                                            data-target="#danger"> حذف</button>--}}
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
             <!-- users view card data start -->
             <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>فواتير الباص</h3>
                            </div>



                            <div class="col-12 col-md-12">
                                <p class="card-text"></p>
                                <table class="table table-striped table-bordered zero-configuration">                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الطالب</th>
                                        <th>اسم الخط</th>
                                        <th>سعر الخط</th>
                                        <th>الخصم </th>
                                        <th>الاجمالي</th>
                                        <th>الملاحظه</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($student->bus as $key => $invoice)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a
                                                    href="{{ route('students.show', $invoice->students->id) }}">{{ $invoice->students->name }}</a>
                                            </td>
                                            <td>{{ $invoice->locations->name }}</td>
                                            <td>{{ $invoice->locations->price }}</td>
                                            <td>{{ $invoice->discount }}</td>
                                            <td>{{ $invoice->total }}</td>
                                            <td>{{ $invoice->note }}</td>
                                            <td>

                                                <a href="{{ route('bussubscription.show', $invoice->id) }}"
                                                    class="btn btn-float btn-float-md btn-success">طباعة</a>

                                                @if($invoice->remaning > 0)





                                                <a href="{{ route('bussubscription.edit', $invoice->id) }}"
                                                    class="btn btn-float btn-float-md btn-warning">دفع قسط</a>

                                                @endif
{{--                                                <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal"--}}
{{--                                                    data-target="#danger{{ $invoice->id }}">حذف</button>--}}
                                            </td>
                                        </tr>
                                        <!-- Modal -->
{{--                                        <div class="modal fade text-left" id="danger{{ $invoice->id }}" tabindex="-1" role="dialog"--}}
{{--                                            aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                            <form action="" method="POST">--}}
{{--                                                @csrf--}}
{{--                                                @method('delete')--}}
{{--                                                <div class="modal-dialog" role="document">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header bg-danger white">--}}
{{--                                                            <h4 class="modal-title" id="myModalLabel10">Confirm Delete</h4>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            <h5>--}}
{{--                                                                Are You Sure You Want To Delete--}}
{{--                                                                " "--}}
{{--                                                                ?--}}
{{--                                                            </h5>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="submit"--}}
{{--                                                                class="btn btn-outline-danger">Delete</button>--}}
{{--                                                            <button type="button" class="btn grey btn-outline-secondary"--}}
{{--                                                                data-dismiss="modal">Close</button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
                                    @endforeach

                                </tbody>
                            </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- users view card data ends -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>فواتير الكتب</h3>
                            </div>



                            <div class="col-12 col-md-12">
                                <p class="card-text"></p>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>نوع الفاتورة</th>
                                            <th>طريقه الدفع</th>
                                            <th>مدفوع </th>
                                            <th>خصم</th>
                                            <th>اجمالي</th>
                                            <th>الملاحظه</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $key => $invoice)



                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><a
                                                        href="{{ route('students.show', $invoice->students->id) }}">{{ $invoice->students->name }}</a>
                                                </td>
                                                <td>{{ $invoice->type }}</td>
                                                <td>{{ $invoice->Payment_method->name }}</td>
                                                <td>{{ $invoice->paid }}</td>
                                                <td>{{ $invoice->discount }}</td>
                                                <td>{{ $invoice->total }}</td>
                                                <td>{{ $invoice->note == null ? 'لايوجد' : $invoice->note }}</td>

                                                <td>
                                                    <a href="{{ route('bookinvoices.show', $invoice->id) }}"
                                                        class="btn btn-float btn-float-md btn-success">طباعة</a>


{{--                                                    <a href="{{ route('bookinvoices.edit', $invoice->id) }}"--}}
{{--                                                        class="btn btn-float btn-float-md btn-warning">تعديل</a>--}}
{{--                                                    <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal"--}}
{{--                                                        data-target="#danger{{ $invoice->id }}">حذف</button>--}}
                                                </td>
                                            </tr>
                                            <!-- Modal -->
{{--                                            <div class="modal fade text-left" id="danger{{ $invoice->id }}" tabindex="-1" role="dialog"--}}
{{--                                                aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                                <form action="" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <div class="modal-dialog" role="document">--}}
{{--                                                        <div class="modal-content">--}}
{{--                                                            <div class="modal-header bg-danger white">--}}
{{--                                                                <h4 class="modal-title" id="myModalLabel10">Confirm Delete</h4>--}}
{{--                                                                <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                    aria-label="Close">--}}
{{--                                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="modal-body">--}}
{{--                                                                <h5>--}}
{{--                                                                    Are You Sure You Want To Delete--}}
{{--                                                                    " "--}}
{{--                                                                    ?--}}
{{--                                                                </h5>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="modal-footer">--}}
{{--                                                                <button type="submit"--}}
{{--                                                                    class="btn btn-outline-danger">Delete</button>--}}
{{--                                                                <button type="button" class="btn grey btn-outline-secondary"--}}
{{--                                                                    data-dismiss="modal">Close</button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
                                        @endforeach

                                    </tbody>
                                </table>                                            <tr>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

             <!-- users view card data ends -->
             <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12">

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>فواتير الملابس</h3>
                            </div>



                            <div class="col-12 col-md-12">
                                <p class="card-text"></p>
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>نوع الفاتورة</th>
                                            <th>طريقه الدفع</th>
                                            <th>مدفوع </th>
                                            <th>خصم</th>
                                            <th>اجمالي</th>
                                            <th>الملاحظه</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clothes as $key => $invoice)



                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td><a
                                                        href="{{ route('students.show', $invoice->students->id) }}">{{ $invoice->students->name }}</a>
                                                </td>
                                                <td>{{ $invoice->type }}</td>
                                                <td>{{ $invoice->Payment_method->name }}</td>
                                                <td>{{ $invoice->paid }}</td>
                                                <td>{{ $invoice->discount }}</td>
                                                <td>{{ $invoice->total }}</td>
                                                <td>{{ $invoice->note == null ? 'لايوجد' : $invoice->note }}</td>

                                                <td>
                                                    <a href="{{ route('bookinvoices.show', $invoice->id) }}"
                                                        class="btn btn-float btn-float-md btn-success">طباعة</a>


{{--                                                    <a href="{{ route('bookinvoices.edit', $invoice->id) }}"--}}
{{--                                                        class="btn btn-float btn-float-md btn-warning">تعديل</a>--}}
{{--                                                    <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal"--}}
{{--                                                        data-target="#danger{{ $invoice->id }}">حذف</button>--}}
                                                </td>
                                            </tr>
                                            <!-- Modal -->
{{--                                            <div class="modal fade text-left" id="danger{{ $invoice->id }}" tabindex="-1" role="dialog"--}}
{{--                                                aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                                <form action="" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <div class="modal-dialog" role="document">--}}
{{--                                                        <div class="modal-content">--}}
{{--                                                            <div class="modal-header bg-danger white">--}}
{{--                                                                <h4 class="modal-title" id="myModalLabel10">Confirm Delete</h4>--}}
{{--                                                                <button type="button" class="close" data-dismiss="modal"--}}
{{--                                                                    aria-label="Close">--}}
{{--                                                                    <span aria-hidden="true">&times;</span>--}}
{{--                                                                </button>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="modal-body">--}}
{{--                                                                <h5>--}}
{{--                                                                    Are You Sure You Want To Delete--}}
{{--                                                                    " "--}}
{{--                                                                    ?--}}
{{--                                                                </h5>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="modal-footer">--}}
{{--                                                                <button type="submit"--}}
{{--                                                                    class="btn btn-outline-danger">Delete</button>--}}
{{--                                                                <button type="button" class="btn grey btn-outline-secondary"--}}
{{--                                                                    data-dismiss="modal">Close</button>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
                                        @endforeach

                                    </tbody>
                                </table>                                            <tr>

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

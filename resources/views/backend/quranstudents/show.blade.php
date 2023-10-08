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
                            <img src="{{ url('public/quranstudents/' .$student->image) }}" alt="users view avatar"
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

                    <a href="{{ route('quranstudents.edit', $student->id) }}"
                        class="btn btn-sm btn-primary">تعديل</a>
                </div>
            </div>
            <!-- users view media object ends -->

            <!-- users view card details start -->
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                            <div class="row bg-blue bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">

                                <div class="col-md-12 col-sm-12 p-2">

                                    <h3 class="form-section text-center text-dark pb-2 ">الاجزاء المحفوظة</h3>

                                    @foreach ($classes as $classe)
                                        <div class="form-check form-check-inline">
                                            <button type="button" class="btn btn-sm btn-black mb-1 @foreach($classe->quranset as $clas)
                                                {{ ( $clas->quran_student_id == $student->id)? "bg-success text-white  " : "" }}
                                                @endforeach "
                                            >{{$classe->name}}</button>
                                        </div>
                                    @endforeach

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
                                        <td>تاريخ الألتحاق :</td>
                                        <td>{{ $student->join_date }}</td>
                                    </tr>

                                    <tr>
                                        <td> هل كان في مكان اخر:</td>
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

                                <h3 class="form-section text-dark"><i class="feather icon-edit-2"></i>جميع الفواتير</h3>
                            </div>



                            <div class="col-12 col-md-12">
                                <p class="card-text"></p>
                                <table class="table table-striped table-bordered zero-configuration">                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>اسم الطالب</th>
                                                <th>المبلغ</th>
                                                <th>الخصم </th>
                                                <th>الاجمالي</th>
                                                <th>التاريخ </th>
                                                <th>الملاحظه</th>
                                                <th>العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student->quraninvoice as $key => $invoice)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><a
                                                            href="{{ route('quranstudents.show', $invoice->quranstudent->id) }}">{{ $invoice->quranstudent->name }}</a>
                                                    </td>
                                                    <td>{{ $invoice->price }}</td>
                                                    <td>{{ $invoice->discounr }}</td>
                                                    <td>{{ $invoice->total }}</td>
                                                    <td>{{ Carbon\Carbon::parse($invoice->updated_at)->format('d/m/Y') }}</td>                                                </td>
                                                    <td>>{{ $invoice->note == null ? 'لايوجد' : $invoice->note }}</td>

                                                    <td>
                                                        <a href="{{ route('quraninvoices.show',$invoice->id) }}"
                                                            class="btn btn-float btn-float-md btn-success">طباعة</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
             <!-- users view card data start -->

        </section>
        <!-- users view ends -->
    </div>


    <!-- END: Content-->



@endsection

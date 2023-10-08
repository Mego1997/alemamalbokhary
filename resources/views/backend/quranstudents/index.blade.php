@extends('backend.master')
@section('title' , 'الطلاب')
@section('body')

    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title text-bold-700  ">جميع الطلاب</h4>
                        <a class="btn btn-outline-primary btn-md mt-1 " href="{{ asset('/dashboard/quranstudents/create') }}">
                            إضافة طالب
                        </a>
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



                                <div class="d-flex align-items-center justify-content-center text-primary  ">
                                    <h4 class="form-section m-1 pl-1 "><i class="feather icon-user"></i>بحث متقدم</h4>
                                </div>

                                <div class="bg-light-success">
                                    <div class="m-2">
                                 {{-- start form--}}
                                    <form class="form" action="{{ route('quranstudents.filter') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('get')

                                    <div class="form-body">

                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <h4 class="form-section text-dark text-bold-700"><i class="feather icon-edit-1"></i> الأجزاء</h4>
                                                <div class="form-group">
                                                    @foreach ($classes as $class)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input " type="checkbox" value="{{ $class->id }}"  name="class_id[]"  id="defaultCheck1">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                                {{$class->name}}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <h4 class="form-section text-dark text-bold-700"><i class="feather icon-edit-2"></i>
                                                    الجنس</h4>
                                                <div class="d-flex text-bold-600">

                                                    <div class="form-check form-check-inline pl-2">
                                                        <input class="form-check-input " type="radio" name="gender"
                                                               value="Female">
                                                        <label class="form-check-label" for="Female">
                                                            أنثي
                                                        </label>
                                                    </div>
                                                    <div class="form-check  form-check-inline ml-1 pl-5">
                                                        <input class="form-check-input " type="radio" name="gender"
                                                               value="Male">
                                                        <label class="form-check-label" for="Male">
                                                            ذكر
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-3">
                                                <h4 class="form-section text-dark text-bold-700"><i class="feather icon-edit-2"></i>
                                                    عدد الأجزاء</h4>
                                                <div class="form-group text-bold-600">
                                                    <input type="number" id="userinput1"
                                                           class="form-control border-primary"  placeholder="عدد الأجزاء"
                                                           name="count">
                                                </div>


                                            </div>



                                            <div class="col-md-3">
                                                <h4 class="form-section text-dark text-bold-700"><i class="feather icon-edit-2"></i>
                                                    العمر</h4>
                                                <div class="form-group text-bold-600">
                                                    <label>من :</label>
                                                    <input type="number" id="userinput1"
                                                           class="form-control border-primary" value="1" placeholder="من"
                                                           name="from">
                                                </div>

                                                <div class="form-group text-bold-600">
                                                    <label>الي :</label>
                                                    <input type="number" id="userinput1"
                                                           class="form-control border-primary" value="100"  placeholder="الي"
                                                           name="to">
                                                </div>
                                            </div>

                                        </div>



                                    </div>


                                    <div class="form-actions center text-bold-500">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> بحث
                                        </button>
                                        <button type="reset" class="btn btn-danger mr-1">
                                            <i class="feather icon-x"></i> إلغاء
                                        </button>
                                    </div>
                                </form>
                                   </div>
                               </div>

                       {{--    end form--}}

                                <p class="card-text"></p>
                <table class="table table-striped table-bordered zero-configuration">                                <thead>
                                    <tr class="text-bold-700">
                                        <th>الرقم</th>
                                        <th>صورة الطالب</th>
                                        <th>اسم الطالب</th>
                                        <th>نوع الطالب</th>
                                        <th>تاريخ الميلاد</th>
                                        <th>عدد الاجزاء</th>
                                        <th>تاريخ الإضافة</th>
                                        <th>العمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $key=> $student)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td><img src="{{ url('public/quranstudents/' .$student->image) }}" width="50" height="50" alt=""></td>
                                        <td><a href="{{ route('quranstudents.show', $student->id ) }}">{{$student->name }}</a></td>
                                        <td>{{$student->gender == 'Male' ? 'ذكر' : 'أنثي'}}</td>
                                        <td>{{Carbon\Carbon::parse($student->birthday)->format('d/m/Y')}}</td>
                                        <td>{{$student->quranset->count('quran_student_id')}}</td>
                                        <td>{{$student->created_at}}</td>
                                        <td>

                                            <a href="{{ route('quranstudents.edit', $student->id) }}"  class="btn btn-float btn-float-md btn-warning"> تعديل</a>
                                            <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal" data-target="#danger{{$student->id}}">حذف</button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="danger{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                        <form action="{{ route('quranstudents.destroy', $student->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger white">
                                                        <h4 class="modal-title" id="myModalLabel10">تأكيد الحذف</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h5>
                                                            هل انت متأكد من حذف
                                                            " {{$student->name}} "
                                                            ؟
                                                        </h5>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-outline-danger">حذف</button>
                                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">إغلاق</button>
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
    <!-- DOM - jQuery events table -->   <!--/ Scroll - horizontal table -->

@endsection



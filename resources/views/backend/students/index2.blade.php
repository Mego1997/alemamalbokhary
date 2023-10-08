@extends('backend.master')
@section('title' , 'المنسحبين')
@section('body')

    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">جميع المنسحبين</h4>
{{--                        <a class="btn btn-outline-primary btn-md mt-1 " href="{{ asset('/dashboard/students/create') }}">--}}
{{--                            إضافة طالب--}}
{{--                        </a>--}}
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
                            <table class="table table-striped table-bordered zero-configuration">                                <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>صورة الطالب</th>
                                    <th>اسم الطالب</th>
                                    <th>المدفوع للحضانة</th>
                                    <th>المدفوع للباص</th>
                                    <th>تاريخ الانسحاب</th>
                                    <th>العمليات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($students as $key=> $student)


                                        <tr>
                                        <td>{{$key + 1}}</td>
                                        <td><img src="{{ url('public/students/' .$student->image) }}" width="50" height="50" alt=""></td>
                                        <td><a href="{{ route('students.show', $student->id) }}">{{$student->name}}</a></td>
                                            @if($student->hadana_invoices == '[]' )
                                                <td>0 جنية</td>
                                            @else
                                                @foreach ($student->hadana_invoices as $invoice)
                                                    <td>{{$invoice->paid}} جنية</td>
                                                @endforeach
                                            @endif

                                            @if( $student->bus == '[]')
                                                <td>0 جنية</td>
                                            @else
                                                @foreach ($student->bus as $invoicee)
                                                    <td>{{$invoicee->paid}} جنية</td>
                                                @endforeach
                                            @endif

                                            <td>{{$student->updated_at}}</td>
                                        <td>
                                            @if( $student->hadana_invoices == '[]' and $student->bus == '[]')
                                               @else
                                                @if($student->Withdrawal == '[]')
                                            <a href="{{ route('withdrawal.hadana', $student->id) }}"  class="btn btn-float btn-float-md btn-black">استرجاع المبلغ للطالب</a>
                                                @else
                                                    <a href="{{ route('withdrawal.show', $student->id) }}"  class="btn btn-float btn-float-md btn-primary">طباعة الفاتورة</a>
                                                @endif
                                            @endif

                                            {{--                                            <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal" data-target="#danger{{$student->id}}">حذف</button>--}}
                                        </td>
                                    </tr>
                                    <!-- Modal -->
{{--                                    <div class="modal fade text-left" id="danger{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">--}}
{{--                                            @csrf--}}
{{--                                            @method('delete')--}}
{{--                                            <div class="modal-dialog" role="document">--}}
{{--                                                <div class="modal-content">--}}
{{--                                                    <div class="modal-header bg-danger white">--}}
{{--                                                        <h4 class="modal-title" id="myModalLabel10">تأكيد الحذف</h4>--}}
{{--                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                            <span aria-hidden="true">&times;</span>--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="modal-body">--}}
{{--                                                        <h5>--}}
{{--                                                            هل انت متأكد من حذف--}}
{{--                                                            " {{$student->name}} "--}}
{{--                                                            ؟--}}
{{--                                                        </h5>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="modal-footer">--}}
{{--                                                        <button type="submit" class="btn btn-outline-danger">حذف</button>--}}
{{--                                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">إغلاق</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
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

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
                        <h4 class="card-title">جميع الحالات</h4>
                        <a class="btn btn-outline-primary btn-md mt-1 " href="{{ asset('/dashboard/donations/create') }}">
                            إضافة حاله
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




                                                        <p class="card-text"></p>
                                                        <table class="table table-striped table-bordered zero-configuration text-bold-700">
                                                            <thead class="text-white bg-primary">
                                                            <tr>
                                                                <th> الكود</th>
                                                                <th> الاسم</th>
                                                                <th>العنوان</th>
                                                                <th>التليفون</th>
                                                                <th>صورة البطاقه</th>
                                                                <th> الرقم القومى</th>
                                                                <th> النوع</th>
                                                                <th>السبب</th>
                                                                <th>تاريخ الميلاد </th>
                                                                <th>العمليات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($donations as $key=> $donation)
                                                                <tr>
                                                                    <td>{{$key + 1}}</td>
                                                                    <td><a href="{{ route('donations.show', $donation->id) }}">{{$donation->name}}</a></td>
                                                                    <td>{{$donation->address}}</td>
                                                                    <td>{{$donation->phone}}</td>
                                                                    <td><img src="{{ url('public/donations/' .$donation->img_id) }}" width="70" height="70" alt=""></td>
                                                                    <td>{{$donation->raqam}}</td>
                                                                    <td>{{$donation->gender == 'Male' ? 'ذكر' : 'أنثي'}}</td>
                                                                    <td>{{$donation->reasons->reason}}</td>
                                                                    <td>{{Carbon\Carbon::parse($donation->birthday)->format('d/m/Y')}}</td>
                                                                    <td>

                                                                        <a href="{{ route('donations.edit', $donation->id) }}"  class="btn btn-float btn-float-md btn-warning">تعديل</a>
                                                                        <button class="btn btn-float btn-float-md btn-danger" data-toggle="modal" data-target="#danger{{$donation->id}}">حذف</button>
                                                                    </td>
                                                                </tr>
                                                                <!-- Modal -->
                                                                <div class="modal fade text-left" id="danger{{$donation->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
                                                                    <form action="{{route('donations.destroy',$donation->id )}}" method="POST">
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
                                                                                        " {{$donation->name}} "
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

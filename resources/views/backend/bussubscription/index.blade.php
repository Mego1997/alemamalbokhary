@extends('backend.master')
@section('title', 'Invoices')
@section('body')

    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">جميع الاشتراكات</h4>
                        <a class="btn btn-outline-primary btn-md mt-1 " href="{{ asset('/dashboard/bussubscription/create') }}">
                            إضافة فاتوره
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
                                    @foreach ($invoices as $key => $invoice)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a
                                                    href="{{ route('students.show', $invoice->students->id) }}">{{ $invoice->students->name }}</a>
                                            </td>
                                            <td>{{ $invoice->locations->name }}</td>
                                            <td>{{ $invoice->locations->price }}</td>
                                            <td>{{ $invoice->discount }}</td>
                                            <td>{{ $invoice->total }}</td>
                                            <td>{{ $invoice->note == null ? "لايوجد" : $invoice->note }}</td>
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
    </section>
    <!-- DOM - jQuery events table -->
    <!--/ Scroll - horizontal table -->

@endsection

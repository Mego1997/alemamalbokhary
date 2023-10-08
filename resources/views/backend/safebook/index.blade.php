@extends('backend.master')
@section('title', ' الخزنة')
@section('body')

    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">الخزنة</h4>

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



                            <table class="table table-striped table-bordered dom-jQuery-events text-bold-700">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>الايرادات</th>
                                        <th>المصروفات</th>
                                        <th>الرصيد الحالي</th>
                                        <th>الملاحظات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($safes as $key => $safe)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $safe->income }}</td>
                                            <td>{{ $safe->outgoings }}</td>
                                            <td>{{ $safe->balance }}</td>
                                            <td>{{ $safe->note }}</td>
                                        </tr>

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

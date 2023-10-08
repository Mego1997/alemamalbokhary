@extends('backend.master')
@section('title', 'مخزن الملابس')
@section('body')

    <!-- Scroll - horizontal table -->
    <!-- DOM - jQuery events table -->
    <section id="dom">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">جيمع الملابس</h4>
                        <a class="btn btn-outline-primary btn-md mt-1 " href="{{ asset('/dashboard/clothesinventory/create') }}">
                            إضافة ملابس
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

                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <button type="button" class="btn btn-danger text-dark font-medium-2">
                                        اجمالي اسعار الملابس : <span class="badge badge-danger text-dark font-medium-2">{{$inventories->sum('total')}} جنية</span>
                                    </button>
                                </div>


                            <p class="card-text"></p>
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الصنف</th>
                                        <th>اسم المورد</th>
                                        <th>الكمية</th>
                                        <th>سعر الشراء </th>
                                        <th>سعر البيع </th>
                                        <th>الإجمالي</th>
                                        <th>التاريخ</th>
                                        <th>العمليات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventories as $key => $inventory)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $inventory->name }} </td>
                                            <td>
                                                @if ( $inventory->supplier_id  == null )
                                                لايوجد
                                                @else
                                                <a href="{{ route('suppliers.show', $inventory->suppliers->id ) }}">{{$inventory->suppliers->name }}</a>
                                                @endif                                            </td>
                                            <td>{{ $inventory->quantity }}</td>
                                            <td>{{ $inventory->owner_price }}</td>
                                            <td>{{ $inventory->student_price }}</td>
                                            <td>{{ $inventory->total }}</td>
                                            <td>{{ $inventory->created_at }}</td>
                                            <td>

                                                <a href="{{ route('clothesinventory.edit', $inventory->id) }}"
                                                    class="btn btn-sm btn-warning">تعديل</a>
{{--                                                <button class="btn btn-sm btn-danger" data-toggle="modal"--}}
{{--                                                    data-target="#danger{{ $inventory->id }}">حذف--}}
{{--                                                </button>--}}
                                            </td>
                                        </tr>
                                        <!-- Modal -->
{{--                                        <div class="modal fade text-left" id="danger{{ $inventory->id }}" tabindex="-1"--}}
{{--                                            role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">--}}
{{--                                            <form action="{{ route('clothesinventory.destroy', $inventory->id) }}"--}}
{{--                                                method="POST">--}}
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
{{--                                                                هل انت متاكد من حذف--}}
{{--                                                                " {{ $inventory->name }}"--}}
{{--                                                                ?--}}
{{--                                                            </h5>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="submit"--}}
{{--                                                                class="btn btn-outline-danger">حذف</button>--}}
{{--                                                            <button type="button" class="btn grey btn-outline-secondary"--}}
{{--                                                                data-dismiss="modal">الغاء</button>--}}
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

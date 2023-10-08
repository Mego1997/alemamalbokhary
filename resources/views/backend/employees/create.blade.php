@extends('backend.master')
@section('title', 'اضافة موظف')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">اضافة موظف</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/admin/home') }}">الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/employees') }}">الموظفين</a>
                            </li>
                            <li class="breadcrumb-item active">اضافة موظف</li>
                        </ol>
                    </div>
                </div>
            </div>
            {{--            <div class="content-header-right col-md-6 col-12 mb-md-0 mb-2"> --}}
            {{--                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown"> --}}
            {{--                    <div class="btn-group" role="group"> --}}
            {{--                        <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings icon-left"></i> Settings</button> --}}
            {{--                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div> --}}
            {{--                    </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="feather icon-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="feather icon-pie-chart"></i></a> --}}
            {{--                </div> --}}
            {{--            </div> --}}
        </div>
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">اضافة موظف</h4>
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
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="form" action="{{ route('employees.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        الأسم </h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="الأسم"
                                                            name="name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        تاريخ الميلاد </h4>
                                                    <div class="form-group">
                                                        <input type="date" id="userinput1"
                                                            class="form-control border-primary" placeholder="تاريخ الميلاد"
                                                            name="birthday">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>تاريخ الالتحاق</h4>
                                                    <div class="form-group">
                                                        <input type="date" id="userinput1"
                                                            class="form-control border-primary" placeholder="تاريخ الالتحاق"
                                                            name="join_date">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>العنوان</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="العنوان"
                                                            name="address">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>رقم التليفون</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="رقم التليفون"
                                                            name="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>المؤهل الدراسي</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="ألمؤهل الدراسي"
                                                            name="degree">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>التخصص</h4>
                                                    <div class="form-group">


                                                        <select name="specialization_id" class="custom-select border-primary">
                                                            @foreach ($specializations as $specialization)

                                                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                                            @endforeach
                                                            </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>الراتب</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="الراتب"
                                                            name="salary">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        النوع</h4>
                                                    <div class="d-flex">

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                value="Female" >
                                                            <label class="form-check-label" for="Female">
                                                                انثي
                                                            </label>
                                                        </div>
                                                        <div class="form-check  form-check-inline ml-1">
                                                            <input class="form-check-input " type="radio" name="gender"
                                                                value="Male">
                                                            <label class="form-check-label" for="Male">
                                                                ذكر
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-1"></i>الفصل</h4>


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



                                            </div>

                                            <div class="row">

                                                <div class="form-group col-md-12">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i>
                                                        صورة شخصية  </h4>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="image">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-check-square-o"></i> حفظ
                                            </button>
                                            <button type="reset" class="btn btn-warning mr-1">
                                                <i class="feather icon-x"></i> إلغاء
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



@endsection

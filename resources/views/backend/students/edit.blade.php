@extends('backend.master')
@section('title', 'تعديل طالب')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">تعديل طالب</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/admin/home') }}">الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/student') }}">جميع الطلاب</a>
                            </li>
                            <li class="breadcrumb-item active">تعديل طالب</li>
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
                                <h4 class="card-title" id="basic-layout-colored-form-control">تعديل طالب</h4>
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
                                    <form class="form" action="{{ route('students.update', $student->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="form-body">

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        اسم الطالب</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary"
                                                            name="name" value="{{$student->name}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        تاريخ الميلاد</h4>
                                                    <div class="form-group">
                                                        <input type="date" id="userinput1"
                                                            class="form-control border-primary" placeholder="birthday"
                                                            name="birthday" value="{{$student->birthday}}">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>تاريخ الالتحاق</h4>
                                                    <div class="form-group">
                                                        <input type="date" id="userinput1"
                                                            class="form-control border-primary" placeholder="تاريخ الاتحاق"
                                                            name="join_date" value="{{$student->join_date}}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>العنوان</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="العنوان"
                                                            name="address" value="{{$student->address}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>رقم الموبايل</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="رقم التليفون"
                                                            name="parent_phone" value="{{$student->parent_phone}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        هل كان في حضانة أخري ؟
                                                    </h4>

                                                    <div class="d-flex">

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prev_hadana" id="yes" value="1"
                                                                {{ ($student->prev_hadana=="1")? "checked" : "" }}>
                                                            <label class="form-check-label" for="yes">
                                                                نعم
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline ml-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="prev_hadana" id="no" checked value="0"
                                                                {{ ($student->prev_hadana=="0")? "checked" : "" }}>
                                                            <label class="form-check-label" for="no">
                                                                لا
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        منسحب ؟
                                                    </h4>
                                                    <div class="d-flex">

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="withdrawal" id="yes" value="1"
                                                                {{ ($student->withdrawal=="1")? "checked" : "" }}>
                                                            <label class="form-check-label" for="yes">
                                                                نعم
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline ml-1">
                                                            <input class="form-check-input" type="radio"
                                                                name="withdrawal" id="no" checked value="0"
                                                                {{ ($student->withdrawal=="0")? "checked" : "" }}>
                                                            <label class="form-check-label" for="no">
                                                                لا
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        أرشيف ؟
                                                    </h4>
                                                    <div class="d-flex">

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="archive"
                                                                id="yes" value="1"
                                                                {{ ($student->archive=="1")? "checked" : "" }}>
                                                            <label class="form-check-label" for="yes">
                                                                نعم
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline ml-1">
                                                            <input class="form-check-input" type="radio" name="archive"
                                                                id="no" checked value="0"
                                                                {{ ($student->archive=="0")? "checked" : "" }}>
                                                            <label class="form-check-label" for="no">
                                                                لا
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>الفصل</h4>
                                                    <div class="form-group">

                                                        <select name="class" class="custom-select border-primary"  id="">
                                                            @foreach ($classes as $class)

                                                            <option   value="{{ $class->id }}"
                                                                {{ $class->id == $student->class_id ? 'selected' : '' }}
                                                                >{{ $class->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>وسيلة النقل
                                                    </h4>
                                                    <div class="form-group">


                                                        <select name="delivery_method_id" class="custom-select border-primary">
                                                            @foreach ($methods as $method)

                                                            <option value="{{ $method->id }}"
                                                                {{ $method->id == $student->delivery_method_id ? 'selected' : '' }}
                                                                >{{ $method->name }}</option>
                                                            @endforeach
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        الجنس</h4>
                                                    <div class="d-flex">

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                value="Female"
                                                                {{ ($student->gender=="Female")? "checked" : "" }}>
                                                            <label class="form-check-label" for="Female">
                                                                انثي
                                                            </label>
                                                        </div>
                                                        <div class="form-check  form-check-inline ml-1">
                                                            <input class="form-check-input " type="radio" name="gender"
                                                                value="Male"
                                                                {{ ($student->gender=="Male")? "checked" : "" }}>
                                                            <label class="form-check-label" for="Male">
                                                                ذكر
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="form-group col-md-6">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i>
                                                        الصورة الشخصية
                                                    </h4>

                                                    <img src="{{ url('public/students/' .$student->image) }}" width="50" height="50" alt="">
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="image" value="{{$student->image}}">
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
                                                <i class="feather icon-x"></i> إلفاء
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

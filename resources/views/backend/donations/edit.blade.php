@extends('backend.master')
@section('title', 'اضافة حاله')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">تعديل حاله</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/homepage') }}">الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/donations') }}">الحالات</a>
                            </li>
                            <li class="breadcrumb-item active">تعديل حاله</li>
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
                                <h4 class="card-title" id="basic-layout-colored-form-control">تعديل الحاله</h4>
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
                                    <form class="form" action="{{ route('donations.update', $donation->id) }}" method="post"
                                          enctype="multipart/form-data">
                                        @method('put')
                                        @csrf

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        الأسم </h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" placeholder="الأسم"
                                                               name="name"  value={{$donation->name}}>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>العنوان</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" placeholder="العنوان"
                                                               name="address"  value={{$donation->address}}>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        تاريخ الميلاد </h4>
                                                    <div class="form-group">
                                                        <input  type="date"  id="userinput1"
                                                                class="form-control border-primary" placeholder="التاريخ"
                                                                name="birthday"  value={{$donation->birthday}}>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>التليفون</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" placeholder="التليفون"
                                                               name="phone"  value={{$donation->phone}}>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        رقم البطاقه  </h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" placeholder="رقم البطاقه"
                                                               name="code"  value={{$donation->raqam}}>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i>
                                                        صوره البطاقه  </h4>
                                                    <img src="{{ url('public/donations/' .$donation->img_id) }}" width="50" height="50" alt="">
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="image"  value="{{$donation->img_id}}">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>الاسباب</h4>
                                                    <div class="form-group">

                                                        <select name="reason" class="custom-select border-primary"
                                                                id="reason">
                                                            @foreach ($reasons as $reason)

                                                                <option  {{ $donation->id == $donation->reason_id ? 'selected' : '' }} value="{{ $reason->id }}">{{ $reason->reason }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                        الجنس</h4>
                                                    <div class="d-flex">

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender"
                                                                   value="Female"  {{ ($donation->gender=="Female")? "checked" : "" }}>
                                                            <label class="form-check-label" for="Female">
                                                                أنثي
                                                            </label>
                                                        </div>
                                                        <div class="form-check  form-check-inline ml-1">
                                                            <input class="form-check-input " type="radio" name="gender"
                                                                   value="Male"     {{ ($donation->gender=="Male")? "checked" : "" }}>
                                                            <label class="form-check-label" for="Male">
                                                                ذكر
                                                            </label>
                                                        </div>
                                                    </div>

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

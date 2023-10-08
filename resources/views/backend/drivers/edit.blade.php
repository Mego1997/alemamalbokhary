@extends('backend.master')
@section('title', 'تعديل سائق')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">تعديل سائق</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/admin/home') }}">الصفحة الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/driver') }}">جميع السائقين</a>
                            </li>
                            <li class="breadcrumb-item active">تعديل سائق</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="basic-layout-colored-form-control">اضافه سائق </h4>
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
                                    <form class="form" action="{{ route('drivers.update',$driver->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                         اسم السائق</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="name"
                                                            name="name" value={{$driver->name}}>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i> رقم البطاقه</h4>
                                                    <div class="form-group">
                                                        <input type="number" id="userinput1"
                                                            class="form-control border-primary" placeholder="parent_phone"
                                                            name="code"  value={{$driver->code}}>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i>
                                                        صوره البطاقه  </h4>
                                                    <img src="{{  url('public/drivers/' .$driver->image) }}" width="50" height="50" alt="">                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file" name="image" value={{$driver->image}} >
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i class="feather icon-edit-2"></i>
                                                         تاريخ ميلاد السائق</h4>
                                                    <div class="form-group">
                                                        <input type="date" id="userinput1"
                                                            class="form-control border-primary" placeholder="birthday"
                                                            name="birthday"  value={{$driver->birthday}}>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>العنوان</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="address"
                                                            name="address"  value={{$driver->address}}>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i> التليفون</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                               class="form-control border-primary" placeholder="phone"
                                                               name="phone"  value={{$driver->phone}}>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">

                                                <div class="form-group col-md-12">
                                                    <h4 class="form-section text-dark"><i class="fa fa-photo"></i>
                                                         صوره السائق  </h4>
                                                    <img src="{{  url('public/drivers/' .$driver->image) }}" width="50" height="50" alt="">                                                    <label id="projectinput7" class="file center-block">
                                                        <input type="file" id="file1" name="image1"  value={{$driver->image1}}>
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

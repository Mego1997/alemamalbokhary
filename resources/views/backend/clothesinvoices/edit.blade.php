@extends('backend.master')
@section('title', 'Edit Invoices')
@section('body')

    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title mb-0">Edit Invoices</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/homepage') }}">Home Page</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard/clothesinvoices') }}">Invoices</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Invoices</li>
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
                                <h4 class="card-title" id="basic-layout-colored-form-control">Edit Invoice</h4>
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
                                    <form class="form" action="{{ route('clothesinvoices.update', $invoice->id ) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('put')

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>Student Name</h4>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <input type="hidden" id="userinput1"
                                                                class="form-control border-primary" placeholder="studentname"
                                                                name="student_id"  value="{{ $invoice->students->id }}">
                                                                <input type="text" id="userinput1"
                                                                class="form-control border-primary" placeholder="studentname"
                                                                name="student"  value="{{ $invoice->students->name}}" disabled >
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>Payment Method</h4>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <input type="hidden" id="userinput1"
                                                                class="form-control border-primary" placeholder="payment method"
                                                                name="payment_method_id"  value="{{ $invoice->payment_method->id}} " >
                                                                <input type="text" id="userinput1"
                                                                class="form-control border-primary" placeholder="payment method"
                                                                name="payment_method"  value="{{ $invoice->payment_method->name}} "disabled >
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">


                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>Paid</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="Paid"
                                                            name="paid">
                                                    </div>
                                                     @foreach ($requested_prices as $requested_price)
                                                            <div class="form-group">
                                                                <input type="hidden" id="userinput1"
                                                                    class="form-control border-primary"  value="{{ $invoice->requested_price }}" placeholder=""
                                                                    name="requested_price">
                                                            </div>

                                                            @endforeach


                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>Remaning</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="remaning"
                                                            name="remaning"  value="{{ $invoice->remaning }}" readonly>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="form-section text-dark"><i
                                                            class="feather icon-edit-2"></i>Note</h4>
                                                    <div class="form-group">
                                                        <input type="text" id="userinput1"
                                                            class="form-control border-primary" placeholder="Note"
                                                            name="note" value="{{ $invoice->note }}">
                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                <div class="form-actions right">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Save
                                    </button>
                                    <button type="reset" class="btn btn-warning mr-1">
                                        <i class="feather icon-x"></i> Cancel
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

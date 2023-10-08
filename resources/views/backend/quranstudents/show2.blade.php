@extends('backend.master')
@section('title' , 'الطلاب')
@section('body')
    <section id="social-cards">
        <div class="row">
            <div class="col-12 mt-3 mb-1">
                <h4 class="text-uppercase text-bold-700 text-primary">نتائج البحث :</h4>
            </div>
        </div>

        <div class="row">
            @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                @foreach($users as $user)
            <div class="col-sm6 ">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded bg-light-blue ">
                    <div class="col text-center ">
                        <img src="{{ url('public/quranstudents/' .$user->image) }}" class="rounded-circle  w-75 h-75 mt-4">
                    </div>
                    <div class="card-body text-center ">
                        <h1 class="card-title  ">{{$user->name}}</h1>
                        <a href="#" class="btn  btn-min-width mr-1 mb-1 btn-primary">
                            <i class="fa fa-user-circle"></i> <span class="pl-1 text-bold-700">البروفايل</span></a>-
                    </div>
                </div>
            </div>
            @endforeach

       



        {{ $users->appends(Request::except('page'))->links() }}




    </section>
@endsection

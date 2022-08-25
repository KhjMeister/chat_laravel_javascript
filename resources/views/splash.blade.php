@extends('layouts.app')
@section('content')
    <div class="pt-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div style="width: 200px; height: 200px">
                        <img style="border-radius: 50%" src="{{ asset('vendor/messenger/RV/img/avatars/avatar-male-4.jpg')}}" alt="">
                    </div>
                    <h3 class="mt-3">خوش آمدید</h3>

                    
                    <p class="text-muted mt-2">لطفا یکی از گزینه های زیر را انتخاب کنید</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="container">
            <noscript>
                <div class="alert alert-danger shadow h4"><span class="float-right"><i class="fa fa-js-square fa-2x"></i></span> به نظر می رسد در مرورگر شما جاوا اسکریپت  غیر فعال است برای استفاده لطفا آن را فعال کنید 
                    <a class="alert-link" rel="nofollow" target="_blank" href="https://www.enable-javascript.com/"> فعال کردن جاوا اسکریپت</a></div>
            </noscript>
            <div class="col-12 text-center">
                <button onclick="window.location.href='{{ route('login') }}'" type="button" class="btn btn-vip mb-2 text-white">ورود <i class="fa fa-sign-in"></i></button>
                <a class="d-block d-sm-none btn btn-lg btn-info" href="{{ route('login') }}">ورود <i class="fa fa-sign-in-alt"></i></a>
                <div class="mx-2 mt-2 d-block d-sm-inline h5"><span class="badge badge-dark"><i class="fa fa-angle-left"></i> <i class="fa fa-angle-right"></i></span></div>
                <button onclick="window.location.href='{{ route('register') }}'" type="button" class=" btn btn-vip mb-2 text-white">ثبت نام <i class="fa fa-user"></i></button>
                <a class="d-block d-sm-none btn btn-lg btn-info" href="{{ route('register') }}">ثبت نام <i class="fa fa-user-plus"></i></a>
            </div>
        </div>
    </div>
    @include('demo')
@endsection

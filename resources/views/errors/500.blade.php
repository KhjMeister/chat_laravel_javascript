@extends('layouts.app')
@section('title'){{ config('app.name') }} - Error @endsection
@section('content')

<div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div style="width: 200px; height: 200px">
                            <span class="logo mr-4"><img src="./vendor/messenger/RV/img/logo.gif" alt="" width=""></span> 
                        </div>
                        <h3 class="display-4"><i class="fa fa-exclamation-triangle"></i> خطای سرور</h3>
                        <p class="lead mt-5">درخواست شما با مشکل مواجه شد</p>
                        
                        <div class="col-12 text-center">   
                            <a class="btn btn-block btn-md btn-danger" href="/">برگشت به خانه <i class="fa fa-home"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection

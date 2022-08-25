<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="KCULpGQAVEiYeRxNnbS01EdgWd4MM1hfmt29fFmZLi0" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="FS">
    <meta name="apple-mobile-web-app-title" content="FS">
    <meta name="theme-color" content="#343a40">
    <meta name="msapplication-navbutton-color" content="#343a40">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <!-- <link rel="icon" type="image/png" sizes="192x192" href="{{asset('vendor/messenger/images/android-chrome-192x192.png')}}"> -->
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{asset('vendor/messenger/images/apple-touch-icon.png')}}">
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="{{asset('vendor/messenger/images/favicon-32x32.png')}}"> -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendor/messenger/images/favicon-16x16.png')}}"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Laravel messenger demo app by Richard Tippin. A full messenger suite for your new / existing laravel app! Private and group threads between multiple models, with real-time messaging, reactions, attachments, calling, chat bots, and more!">
    <meta name="keywords" content="laravel, demo, git, messenger, plugin, package, open, source, message, suite, php, javascript, bootstrap, framework, webrtc, tippin, jquery, MVC, ORM, OOP, discord, bots, calls, reactions" />
    <meta name="title" content="@yield('title', 'Messenger Demo')">
    <title>@yield('title', 'Video Rayan')</title>
    <link  href="{{ asset('vendor/messenger/RV/img/favicon2.gif') }}" type="image/png" rel="icon">

    <link  href="{{asset('vendor/messenger/RV/css/themify-icons.css')}}" rel="stylesheet">
    <link  href="{{asset('vendor/messenger/RV/css/font-awesome.min.css')}}" rel="stylesheet">
    <link  href="{{asset('vendor/messenger/RV/css/style.css')}}" rel="stylesheet">
    <link  href="{{asset('vendor/messenger/RV/css/styleRTL.css')}}" rel="stylesheet"> 
    <link  href="{{asset('vendor/messenger/RV/css/login.css')}}" rel="stylesheet">
    <style>
        body{
            background-color: #e6e6e6;
            direction: rtl;
        }
        input{direction: ltr; }
        label{font-size: .8rem;}
        .field-icon {
            float: right;
            margin-left: -25px;
            margin-top: -25px;
            position: relative;
            z-index: 2;
        }
        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
        }
    </style>
   
    @auth
       
    @else
     
    @endauth
    
    @stack('css')
</head>
<body>
<wrapper class="d-flex flex-column">
   
    <main id="FS_main_section" class="pt-5 mt-4 flex-fill">
        <div id="app">
            @yield('content')
        </div>
    </main>
</wrapper>
@guest
    @include('messenger::scripts')
@endguest
</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My-Shop') - For Laravel Artist</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('MyFontStyle')
</head>
<body>
{{--@if (config('app.debug'))--}}
    {{--@include('sudosu::user-selector')--}}
{{--@endif--}}
<div id="app" class="{{ route_class() }}-page">
    @include('layouts._header')
    <div class="container">
        @include('layouts._message')
        @yield('content')
    </div>
    @include('layouts._footer')
</div>
<!-- JS 脚本 -->
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{asset('/js/laroute.js')}}"></script>
<script src="https://cdn.bootcss.com/typed.js/2.0.5/typed.js"></script>
@stack('MyFontScripts')
@yield('scriptsAfterJs')
</body>
</html>

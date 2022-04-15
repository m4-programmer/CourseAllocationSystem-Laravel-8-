<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CourseAllocation') }}</title>
    <!-- CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/atlantis.min.css') }} ">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/popup_style.css') }} ">
    <!-- Fonts and icons -->
        <script type="text/javascript" src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
</head>
<div class="wrapper">
    
    @include("includes.admin_header")
    @include("../includes.admin_sidebar")
    @include("includes.admin_scripts")
    @yield("content")

    @include("includes.pop_up")
      @include("includes.table_scripts")
</div>
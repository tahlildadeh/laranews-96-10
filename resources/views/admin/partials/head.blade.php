<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@section('title'){{ config('app.name', 'Laravel') }}@show</title>

<!-- Bootstrap core CSS -->

<link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('assets/admin/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/animate.min.css') }}" rel="stylesheet">

<!-- Custom styling plus plugins -->
<link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/icheck/flat/green.css') }}" rel="stylesheet">
<link href="{{ asset('assets/admin/css/select/select2.min.css') }}" rel="stylesheet">
<!-- switchery -->
<link rel="stylesheet" href="{{ asset('assets/admin/css/switchery/switchery.min.css') }}" />

@section('styles')
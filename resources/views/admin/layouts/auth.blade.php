<!DOCTYPE html>
<html lang="en">

<head>
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

</head>

<body style="background:#F7F7F7;">

@yield('content')

<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>

<!--[if lt IE 9]>
<script src="{{ asset('assets/admin/../assets/js/ie8-responsive-file-warning.js') }}"></script>
<![endif]-->

<!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@stack('before-body-end')
<script>
    var d=@json(['a' => 12]);
</script>
</body>

</html>

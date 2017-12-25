<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/css/styles.css') }}" rel="stylesheet">
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
</head>
<body>
@include('admin.layouts.includes.header');

<div class="page-content">
    @if(Session::has('message'))
        <div class="alert alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
    @include('admin.layouts.includes.sidebar')
    <div class="col-md-10 display-area">
        <div class="row text-center">
            <div class="col-md-10 col-md-offset-1">
                <div class="content-box-large">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@include('admin.layouts.includes.footer');

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title','blogwebsite')</title>
	<link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css') }}"> 
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/templatemo-xtra-blog.css') }}" rel="stylesheet">



</head>
<body>
	@include('include.header')

    <div class="container-fluid">
        <main class="tm-main">

                  @yield('content')

            @include('include.footer')
        </main>
    </div>
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/templatemo-script.js') }}"></script>
</body>
</html>
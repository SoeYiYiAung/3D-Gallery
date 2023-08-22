<html>
<head>
<title>Inno Viz</title>
<meta name="viewport" content="width">
    <!--Download-->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    {{-- <script src="js/bootstrap.bundle.js"></script> --}}
    {{-- <link rel="stylesheet" href="css/home.css"> --}}
    
    <!-- Link to Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Link to Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
</style>
	<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>			
            @include('layout.header')

                @yield('content')
            
            @include('layout.footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
            
</body>

</html>
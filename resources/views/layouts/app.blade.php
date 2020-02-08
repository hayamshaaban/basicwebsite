<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

     <!-- Fonts awosome-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    @include('inc.navbar')
    <div class="container mt-3">
       
        @if(Request::is('/'))
        @include('inc.showtext')
        @endif
        <div class="row">
            <div class="col-md-8">
              @include('inc.errors')
              @include('inc.session')
                
                @yield('content')
            </div>
            <div class="col-md-4">
{{--@include('inc.sidebar')--}}       
     </div>

        </div>
    </div>
    <footer id="footer" class='text-center text-light fixed-bottom bg-dark pt-2 mt-5'>
        <p>Copyright &copy; 2020</p>
    </footer>
</body>
</html>

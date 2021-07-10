<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    </head>
    <body>
        <div class="container-fluid">
            @include('layouts.header')
            @include('layouts.menu')
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
            @include('layouts.footer')
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/popper.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
        </div>
    </body>
</html> 
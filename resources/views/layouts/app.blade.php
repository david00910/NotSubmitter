<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Expro Logistics</title>
</head>
<body>

    @include('inc.navbar')

    <div class="bodyContainer">
        @if(Request::is('/'))
            @include('inc.showcase')

        @endif
    <div class="container">
        <div class="row">

         <div class="col-md-8 col-lg-8">
           @include('inc.messages')
           @yield('content')
         </div>



            <div class="col-md-4 col-lg-4">
            @include('inc.sidebar')
         </div>
        </div>

    </div>
    </div>

    <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy; ExamProject 2018</p>
    </footer>

</body>
</html>

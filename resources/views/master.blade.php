<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::to( 'css/final.css') }}">
    <link rel="stylesheet" href="{{ URL::to (' css/bootstrap.css') }}">
    <link rel="stylesheet" href=" {{ URL::to (' css/font-awesome/css/font-awesome.css' ) }}">
    <link rel="stylesheet" href=" {{ URL::to (' css/font-awesome/css/font-awesome.min.css' ) }}">
    <link rel="stylesheet" href="{{ URL::to ('css/bootstrap.min.css' ) }}">

    @yield('styles')
</head>
<body>
   @yield('content') 

   <script type="text/javascript" src=" {{ URL::to('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src=" {{ URL::to (' js/projectscript.js ') }} "></script>
    <script type="text/javascript" src="{{ URL::to(' scripts/jquery-3.3.1.min.js ') }}"> </script>
   
    <script type="text/javascript" src=" {{ URL::to(' jquery/jquery-3.4.1.min.js ') }}"></script>
    <script type="text/javascript" src="{{ URL::to(' https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js ') }}"></script>
    <script type="text/javascript" src=" {{ URL::to(' js/bootstrap.min.js ') }} "></script>
    @yield('scripts')

</body>
</html>
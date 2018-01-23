<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sitio de novedades</title>

        <!-- CSS app dependencies -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link type="text/css" rel="stylesheet" href="{{asset('css/theme/app.theme.css')}}" media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">    

         <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body ng-app="app">

    <div class="row">
            @yield('content')
    </div>
       <!-- JS app dependencies -->
        <script type="text/javascript" src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    </body>
</html>

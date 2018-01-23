<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sitio de novedades') }}</title>
     <!-- CSS app dependencies -->
     <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link type="text/css" rel="stylesheet" href="{{asset('css/theme/app.theme.css')}}" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">    

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body ng-app="app">
    <div id="app" ng-controller="mainController">
        <div class="col-sm-3 no-padding">
            <!-- place inside a col-sm-3 tag -->
            
            <div class="sidebar-nav">
                <div class="sidebar-heading">
                    <h3>Sitio de novedades</h3>
                    <p>"Innovando desde adentro"</p>
                </div>
                <div class="navbar" role="navigation">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">{{config('app.name', 'Sitio de novedades')}}</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="ion-person"></i> Usuarios</a></li>
                        <li class="active"><a href="#"><i class="ion-android-plane"></i>Vacaciones</a></li>
                        <li><a href="permits"><i class="ion-android-document"></i> Licencias</a></li>
                        <li><a href="#"><i class="ion-cash"></i>Mis Ingresos</a></li>
                        <li><a href="#"><i class="ion-folder"></i> Otra Documentación</a></li>
                    </ul>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="sidebar-footer">
                    <img src="{{asset('/img/user-placeholder.png')}}" />
                    <div class="close-session">
                        <h5>Jean R. Robles G.</h5>
                        <a>Cerrar sesión</a>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-sm-9 no-padding main-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- JS app dependencies -->
    <script type="text/javascript" src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('node_modules/angular/angular.min.js')}}"></script>

    <!-- APP components -->
    <script type="text/javascript" src="{{asset('/js/client/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/client/controllers/permits.ctlr.js')}}"></script>
</body>
</html>

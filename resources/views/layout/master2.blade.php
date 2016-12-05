<html ng-app="smis">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title set in pageTitle directive -->
        <title page-title="">{{$title}}</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- <link href="{{URL('css/bootstrap.min.css')}}" rel="stylesheet"> -->

        <!-- Font awesome -->
        <!-- <link href="{{URL('font-awesome/css/font-awesome.css')}}" rel="stylesheet"> -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

        <!-- Main Inspinia CSS files -->
        <link id="loadBefore" href="{{URL('css/style.css')}}" rel="stylesheet">

        <script src="ResponsiveRetinaReadyMenu/js/modernizr.custom.js"></script>
        <link rel="stylesheet" type="text/css" href="ResponsiveRetinaReadyMenu/css/component.css">

    </head>

    <body>
    
        <div class="container">

            <nav class="navbar navbar-fixed-top" style="margin-bottom: 0">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button align="right" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                  <!-- <a class="navbar-brand" href="#">Sports Unit - University of Ruhuna</a> -->
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                 {{Auth::user()->username}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL('login')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                                <li><a href="/logout" ui-sref="login">
                            <i class="fa fa-power-off" aria-hidden="true"></i> Log out
                        </a></li>
                            <!-- <li><a data-toggle="modal" data-target="#o_records">Other Records</a></li> -->
                            </ul>
                    </li>
                  </ul>
                  @else
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{URL('login')}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                  </ul>
                  @endif
                </div>
              </div>
            </nav>
            <br>
            <br>    
            <div class="content">
                @yield('content')
            </div>   
        </div>
         <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/jquery.js"></script> -->

    <!-- AngularJS -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
    <!-- <script src="js/angular/angular.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    </body>
<html>

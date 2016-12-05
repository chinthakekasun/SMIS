<html ng-app="smis">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title set in pageTitle directive -->
    <title page-title="">{{$title}}</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- menu -->
    <link rel="stylesheet" type="text/css" href="menucss/style3.css" />

    <!-- Font awesome -->
    <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main Inspinia CSS files -->
    <link id="loadBefore" href="{{URL('css/style.css')}}" rel="stylesheet">

    <!-- Sweet alert -->
    <link id="loadBefore" href="{{URL('css/sweetalert.css')}}" rel="stylesheet">

     <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="js/jquery.js"></script> -->

    <script src="CreativeButtons/js/modernizr.custom.js"></script>
    <script src="CreativeButtons/js/classie.js"></script>

    <!-- AngularJS -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
    <!-- <script src="js/angular/angular.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/inspinia.js"></script> -->

    <!-- Sweet Alerts -->
    <script src="js/sweetalert.min.js"></script>



    <style type="text/css">
        ul.dropdown-menu {
            background-color: #263A47;
            color: #657C8C;
            width:220px;
        }
    </style>

</head>

<body>
@inject('notices', 'App\Http\Controllers\RequestController')
@inject('applications', 'App\Http\Controllers\ApplicationController')
@inject('entryforms', 'App\Http\Controllers\EntryformController' )
@inject('grounds', 'App\Http\Controllers\GroundController' )
<!-- Navigation -->
    <!-- ngInclude: 'views/common/navigation.html' -->
    <!-- <div class="ng-scope" ng-include="'views/common/navigation.html'"> -->
        <nav class="navbar-default navbar-static-side ng-scope" role="navigation">
            <div class="sidebar-collapse">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#side-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <?php
                    $image = Auth::user()->picurl;
                ?>
                <ul side-navigation="" class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <img alt="image" class="img-circle" src="{{URL($image)}}" width=50px hight=50px>
                        <span class="block m-t-xs">
                            <strong class="font-bold" style="color: white">{{Auth::user()->username}}</strong>
                            <br>
                        </span>       
                    </li>
                    <li>
                        <a href="{{URL('login')}}">
                            <i class="fa fa-home"></i><span class="nav-label">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL('/profile')}}">
                            <i class="fa fa-user"></i><span class="nav-label">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i><span class="nav-label">Practice schedule</span>
                        </a>
                    </li>
                     <li>
                        <a href="{{URL('notice')}}">
                            <i class="fa fa-thumb-tack"></i><span class="nav-label">Notices</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL('upcoming')}}">
                            <i class="fa fa-calendar"></i><span class="nav-label">Upcoming events</span>
                        </a>
                    </li>
                    @if (Auth::user()->role === 'director')
                    <li>
                        <a href="{{URL('requests')}}">
                            <i class="fa fa-plus-square"></i>
                                <span class="nav-label">
                                    Requests 
                                        @if($notices->show()+$entryforms->show()+$grounds->show() !== 0)
                                            <span class="label label-danger">
                                                {{$notices->show()+$entryforms->show()+$grounds->show()}}
                                            </span>
                                        @endif     
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL('manage')}}">
                            <i class="fa fa-users"></i><span class="nav-label">Manage users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL('facteams')}}">
                            <i class="fa fa-users"></i><span class="nav-label">Entry forms-{{date('Y')}}</span>
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->role === 'instructor')
                    <li>
                        <a href="{{URL('mysports')}}">
                            <i class="fa fa-futbol-o"></i>Team Players
                        </a>
                    </li>
                    <li>
                        <a href="{{URL('applied')}}">
                            <i class="fa fa-file"></i>
                                
                                    Applications
                                        @if($applications->show() !== 0)
                                            <span  class="label label-danger">
                                                {{$applications->show()}}
                                            </span>
                                        @endif     
                               
                        </a>
                    </li>
                    <!-- <li>
                        <a href="{{URL('manage')}}">
                            <i class="fa fa-users"></i><span class="nav-label">Manage users</span>
                        </a>
                    </li> -->
                    @endif

                    @if (Auth::user()->role === 'team_cap')
                    <li>
                        <a href="{{URL('teammembers')}}">
                            <i class="fa fa-users"></i><span class="nav-label">Team Members</span>
                        </a>
                    </li>
                    @endif

                    @if (Auth::user()->role === 'team_cap'||Auth::user()->role === 'faculty_cap')
                    <li>
                        <a href="{{URL('ground')}}">
                            <i class="fa fa-futbol-o"></i><span class="nav-label">Ground Reservation</span>
                        </a>
                    </li>       
                    @endif
                    @if (Auth::user()->role === 'faculty_cap')
                    <li>
                        <a href="{{URL('teamcard')}}">
                            <i class="fa fa-users"></i><span class="nav-label">Entry Forms</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>

<!-- Page wraper -->
    <!-- ng-class with current state name give you the ability to extended customization your view -->
    <div style="min-height: 573px;" id="page-wrapper" class="gray-bg dashboards.dashboard_1">
        
<!-- Page wrapper -->      
        <div class="row border-bottom ng-scope">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="/logout" ui-sref="login">
                            <i class="fa fa-power-off" aria-hidden="true"></i> Log out
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="Content">
            @yield('content')
        </div>

<!-- Footer -->
        <div class="footer">
            <div class="pull-right">
                Project of <strong>BSc</strong> Computer Science.
            </div>
            <div>
                <strong>Copyright</strong> DCS &copy; 2016-2017
            </div>
        </div>
        
    </div>
<html>

<!--<link rel="shortcut icon" href="src/images/logo.png">-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMIS</title>

    <!-- jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    

    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <!-- <link href="font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


    <!-- notification -->
    <!-- <link rel="stylesheet" type="text/css" href="notifications/css/demo.css"> -->
    <link rel="stylesheet" type="text/css" href="notifications/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="notifications/css/style.css">

    <script src="notifications/js/notification.js"></script>

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <style>
        #title{
             color: white;
            /*text-shadow: 4px 4px 4px #000000;*/
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }
    </style>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation"><b>
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                   SMIS
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Game Records<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#f_records">Inter Faculty Records</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#u_records">Inter University Records</a></li>
                            <!-- <li><a data-toggle="modal" data-target="#o_records">Other Records</a></li> -->
                      </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sports</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Upcoming Events</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-user"></span> {{Auth::user()->username}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{URL('home')}}"><span class="glyphicon glyphicon-log-in"></span> Dashboard</a></li>
                                <li><a href="/logout" ui-sref="login">
                            <i class="fa fa-power-off" aria-hidden="true"></i> Log out
                        </a></li>
                            <!-- <li><a data-toggle="modal" data-target="#o_records">Other Records</a></li> -->
                            </ul>
                    </li>
                  </ul>
                  @else
                    <li>
                    <!-- open modal -->
                        <a data-toggle="modal" data-target="#login" href="#">
                            <span class="glyphicon glyphicon-log-in"> Login </span>
                        </a>
                    </li>
                @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
   </b> </nav>

    <!--Login Modal -->
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login to continue</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form class="m-t" role="form" method="post" action="{{url('login')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="text" name="userid" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <button class="btn btn-md btn-primary btn-block" type="submit">Sign in</button><br>
                        <a class="btn btn-sm btn-white btn-block" ui-sref="forgot_password"><small>Forgot password?</small></a>
                    </form>
                    <p class="m-t"> <small>Sport Management Information System &copy; 2017</small> </p>
                </div>
            </div>
          </div>
        </div>
    </div> 
        
    <!--f_records Modal -->
    <div class="modal fade" id="f_records" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Inter Faculty Records</h4>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table table-hover">
                        <tr>
                            <td><strong>Sport/Game</strong></td>
                            <td><strong>Year</strong></td>
                            <td><strong>Athlete</strong></td>
                            <td><strong>Record</strong></td>
                        </tr>
                        @foreach($frecords as $frecord)
                        <tr>
                            <td>
                                {{$frecord->sport}}
                            </td>
                        
                            <td>
                                {{$frecord->year}}
                            </td>
                        
                            <td>
                                {{$frecord->athlete}}
                            </td>
                        
                            <td>
                                {{$frecord->record}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>

    <!--u_records Modal -->
        <div class="modal fade" id="u_records" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Inter University Records</h4>
            </div>
            <div class="modal-body">
                <div>
                    <table class="table table-hover">
                        <tr>
                            <td><strong>Sport/Game</strong></td>
                            <td><strong>Year</strong></td>
                            <td><strong>Athlete</strong></td>
                            <td><strong>Record</strong></td>
                        </tr>
                        @foreach($urecords as $urecord)
                        <tr>
                            <td>
                                {{$urecord->sport}}
                            </td>
                        
                            <td>
                                {{$urecord->year}}
                            </td>
                        
                            <td>
                                {{$urecord->athlete}}
                            </td>
                        
                            <td>
                                {{$urecord->record}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>


   
    <!--error Modal -->
     <!-- <script>
        $('#error_modal').modal('show');
    </script>
    <div class="modal fade" id="error_modal" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Error</h4>
            </div>
                <div class="modal-body">
                    <div class="alert alert-success">
                        <strong>Error!</strong> {{session('message')}}
                    </div>  
            </div>
          </div>
        </div>
    </div>  -->

    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="background: url(images/bg.jpg) no-repeat center center fixed;">
        <div class="container">
        <div class="row">
            @if(session('message'))
            <div class="tn-box tn-box-color-2">
                <p><strong>Error!</strong> {{session('message')}}
                </p><div class="tn-progress"></div>
            </div>
            <div class="tn-box tn-box-color-1">
    <p>Your settings have been saved successfully!</p>
    <div class="tn-progress"></div>
</div>
           <!--  <div class="col-sm-12">
            <div class="alert alert-success">
                <strong>Success!</strong> {{session('message')}}
            </div>
            </div> -->
            @elseif(session('message_success'))
            <div class="col-sm-12">
            <div class="alert alert-success">
                <strong>Success!</strong> {{session('message_success')}}
            </div>
            </div>
            @endif
                <div class="col-lg-12">
                    <img class="animated flip" src="images/logo.png" width="100px">
                    <h1 class="animated zoomInUp" id="title">Sports Management Information System</h1>
                    <h3 id="title" class="animated zoomInUp">University of Ruhuna</h3>
                    
                </div>
           
            
             </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>University Sports</h1>
                    <p>
                    In order to facilitate and encourage sports within the University, many facilities had been available. The University is equipped with a large Gymnasium which is the third best in Sri Lanka with seating capacity for 3000 spectators. Training facilities for many indoor sports activities are available here for students after 12.00 p.m. every week days.The University Playground was commissioned in 1998 and out door sports facilities are provided there.</p>
                    <br>
                    <h4><i>Sports & Games Offered</i></h4>
                    <div class="row">
                        <div class="col-sm-4">
                        <ul style="list-style-type:none">
                            <li>Athletics (Men & Women) </li>
                            <li>Volleyball (Men & Women) </li>
                            <li><a  href="{{URL('badminton')}}">Badminton (Men & Women)</a> </li>
                            <li>Table Tennis (Men & Women) </li>
                            <li>Elle (Men & Women)</li>
                            <li>Taekwondo (Men/women)</li>
                            <li>Carrom (Men/women) </li>

                        </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul style="list-style-type:none">
                                <li>Hockey (Men & Women) </li>
                                <li>Chess (Men & Women)</li>
                                <li><a  href="{{URL('basketball')}}">Basketball (Men & Women)</a> </li>
                                <li>Swimming (Men & Women)</li>
                                <li>Rugger (Men) </li>
                                <li>Tennis (Men) </li>
                                <li>Base ball (Men) </li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul style="list-style-type:none">
                                <li>Football (Men) </li>
                                <li>Cricket (Men) </li>
                                <li>Wrestling (Men) </li>
                                <li>Weight Lifting (Men & Women) </li>
                                <li>Road Race (Men) </li>
                                <li>Karate (Men & Women)</li>
                                <li>Netball </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Upcoming Events</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
<h2>STAFF OF PHYSICAL EDUCATION UNIT AND THEIR DUTIES</h2>
<div class="all"><div class="a">
<h3 align="center">Mr.P.N. Weerasinghe</h3>
<h4 align="center">Director of Physical Education</h4>
<table>
<tr><td><u><b>In Charge Sports</b></u>:</td><td>Chess,Cricket,Weightlifting.</td></tr>
<tr><td><u><b>Contact days</b></u>:</td><td>Weekdays at Wellamadama.</td></tr>
</table>
</div><br>

<table><tr><td><h4>INSTRUCTORS</h4></td><td><h4>CLERICAL STAFF</h4></td><td><h4>SUPPORTING STAFF</h4></td></tr>

<tr>
<td><div class="b">
    <h3 align="center">Ms.Vinitha De Silva</h3>
    <h4 align="center">Senior Instructor</h4>
    <table>
    <tr><td><u><b>In Charge Sports</b></u>:</td><td>Athletics, Carrom, Netball, Road Race.</td></tr>
    <tr><td><u><b>Coach</b></u>:</td><td>Athletics, Road Race.</td></tr>
    <tr><td><u><b>Contact days</b></u>:</td><td>Weekdays at Wellamadama.</td></tr>
    </table>
    </div>
</td>

<td>
    <div class="b">
    <h3 align="center">Retire</h3>
    <h4 align="center">Senior Staff Assistance(Clerical)</h4>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>All kind of Office works.
</td>
    </table>

<td>
    <div class="b">
    <h3 align="center">Mr.Sudath Perera</h3>
    <h4 align="center">Grounds Man</h4>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>Incharge of ground works,</td><tr><td></td><td>Issuing sports goods.</td></tr>
</tr>

    </table>
    </div>

    
</td>
</tr>

<tr>
<td><div class="c">
    <h3 align="center">Mr.K.H. Keerthi Kumara</h3>
    <h4 align="center">Instructor Grade II</h4>
    <table>
    <tr><td><u><b>In Charge Sports</b></u>:</td><td>Elle, Football, Hockey, Taekwondo.</td></tr>
    <tr><td><u><b>Coach</b></u>:</td><td>Athletics, Road Race.</td></tr>
    <tr><td><u><b>Contact days</b></u>:</td><td>Wednesday at Wellamadama.</td><tr><td></td><td>Other Weekdays at Mapalana.</td></tr></tr>
    </table>
    </div>

</td>

<td>
    <div class="b">
    <h3 align="center">Ms.I.U. Hettiarachchi</h3>
    <h4 align="center">Staff Assistance(Typist)</h4>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>All computer works,</td><tr><td></td><td>Preparing sports certificates,</td><tr><td></td><td>Maintain records of sports</td><tr><td></td><td>goods issuing.</td></tr></tr>
    </table>
    </div>
</td>
<td>
    <div class="b">
    <h3 align="center">Mr. M.J. Premarathne</h3>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>Incharge of Gymnasium,</td><tr><td></td><td>Issuing sports goods,</td><tr><td></td><td>Support office works</td></tr></tr>
    </table>
    </div>
</td>
</tr>


<tr>
<td><div class="d">
    <h3 align="center">Mr.Sanath Chandana</h3>
    <h4 align="center">Instructor Grade III</h4>
    <table>
    <tr><td><u><b>In Charge Sports</b></u>:</td><td>Karate, Swimming, Volleyball.</td></tr>
    <tr><td><u><b>Coach</b></u>:</td><td>Athletics.</td></tr>
    <tr><td><u><b>Contact days</b></u>:</td><td>Wednesday at Wellamadama</td><tr><td></td><td>Thrusday at Karapitiya.</td><tr><td></td><td>Other Weekdays at Hapugala.</td></tr></tr>
    </table>
    </div>
</td>

<td></td>

<td>
    <div class="b">
    <h3 align="center">Mr.Damith Kmara</h3>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>Incharge of Health Developing Center,</td><tr><td></td><td>Issuing sports goods,</td></tr><tr><td></td><td>Support office works.</td></tr></tr>
    </table>
    </div>
</td>

</tr>

<tr>
<td><div class="e">
    <h3 align="center">Mr.J.P. Anusha De Silva</h3>
    <h4 align="center">Instructor Grade III</h4>
    <table>
    <tr><td><u><b>In Charge Sports</b></u>:</td><td>Batminton, Baseball, Basketball, Table Tennis.</td></tr>
    <tr><td><u><b>Coach</b></u>:</td><td>batminton.</td></tr>
    <tr><td><u><b>Contact days</b></u>:</td><td>Monday & Friday at Hapuhala</td><tr><td></td><td>Other Weekdays at Wellamadama.</td></tr></tr>
    </table>
    </div>
</td>

<td></td>

<td>
    <div class="b">
    <h3 align="center">Mr.Ravindu Madushanka</h3>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>Support office works,</td><tr><td></td><td>Issuing sports goods</td></tr></tr>
    </table>
    </div><br>

    <div class="b">
    <h3 align="center">Mr.Sagara weerasinghe</h3>
    <table>
    <tr><td><u><b>Duty</b></u>:</td><td>Support Ground works,</td><tr><td></td><td>Issuing sports goods,</td><tr><td></td><td>Support office works.</td></tr></tr>
    </table>
    </div>
</td>

</tr>
</div>
</table>
</div>


<div class="f">
    <h3><u>KOIKA VOLUNTEER INSTRUCTOR</u></h3>
    <h4>Mr. Ji Hoon Hee<br>(Taekwondo coach)</h4>
</div>

<div class="g">
    <h3><u>Part Time Coaches</u></h3>
    <h4>(Till end of 2016)</h4>
    <ul>
        <li>Mr.Nihal Ranaweera<br><b>Volleyball coach</b></li></br>
        <li>Mr.Pryantha samaraweera<br><b>Football coach</b></li></br>
        <li>Mr.P.L.R. Sandamal<br><b>Karate coach</b></li></br>
        <li>Mr.W.N. Kodikara<br><b>Table Tennis coach</b></li></br>
        <li>Mr.N.M. Kushan Sandaruwan<br><b>Hockey coach</b></li></br>
        <li>Mr.W.s. Lilantha Dinesh<br><b>Basketball coach</b></li></br>
        <li>Mr.H.P.G.R. Lakshantha<br><b>Cricket coach</b></li></br>
        <li>Mr.D.N. Dammullage<br><b>Swimming coach</b></li></br>
        <li>Ms.A.B. Ashoka<br><b>Netball coach</b></li></br>
    </ul>
</div>


                    
                </div>
            </div>
        </div>
    </section>
</body>

</html>

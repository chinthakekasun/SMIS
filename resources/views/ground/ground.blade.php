@extends('layout.master')

@section('content')
<style type="text/css">
	#mainSearch, #indoorSearch, #hapugalaSearch, #karapitiyaSearch, #kamburupitiyaSearch
		{
	    background-image: url('/images/search.png'); /* Add a search icon to input */
	    background-size: 25px 25px;
	    background-position: 10px 12px; /* Position the search icon */
	    background-repeat: no-repeat; /* Do not repeat the icon image */
	    width: 75%; /* Full-width */
	    font-size: 16px; /* Increase font-size */
	    padding: 12px 20px 12px 40px; /* Add some padding */
	    border: 1px solid #ddd; /* Add a grey border */
	    margin-bottom: 10px; /* Add some space below the input */
		}
	#mainSelection, #indoorSelection, #hapugalaSelection, #karapitiyaSelection, #kamburupitiyaSelection
	{
   	float: right;
    background-size: 25px 25px;
    width: 25%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 9.5px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 10px; /* Add some space below the input */
	}
</style>
<div class="content">
	<div class="well span8">
        
  <h2>
  	University Grounds
  	<a style="float:right;" class="btn btn-info btn-outline " data-toggle="modal" data-target="#booking" href="#"">Booking</a>
  </h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Main Ground</a></li>
    <li><a data-toggle="tab" href="#menu1">Indoor Stadium</a></li>
    <li><a data-toggle="tab" href="#menu2">Hapugala</a></li>
    <li><a data-toggle="tab" href="#menu3">Karapitiya</a></li>
    <li><a data-toggle="tab" href="#menu4">Kamburupitiya</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <br>
     	<div class="row">
     		<div class="col-md-4">
	        	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7936.817053028478!2d80.5711715!3d5.9382942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b7efb631f%3A0x91879ad4c0b683e4!2sUniversity+Play+ground%2C+Tangalle+Road%2C+Matara!5e0!3m2!1sen!2slk!4v1479630262258" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	        </div>
	        <div class="col-md-8">
	        	<input type="text" id="mainSearch" onkeyup="searchMain()" placeholder="Search..." title="Type in a name">
	        	<select id="mainSelection" >
	        		<option value="0">by Date</option>
	        		<option value="1">by Time</option>
	        		<option value="2">by Faculty</option>
	        		<option value="3">by Sport</option>
	        	</select>
	        </div>
	        <div class="col-md-8"  style="overflow-x:hidden; height: 350px;">
	        	<table class="table table-hover">
	        		<tr>
	        			<td>Date</td>
	        			<td>Time</td>
	        			<td>Faculty</td>
	        			<td>Sport</td>
	        			<td></td>
	        		</tr>
	        	</table>
	        	<table class="table table-hover" id="main">
	        		@foreach($main as $main)
	        		<tr>
	        			<td>{{$main->date}}</td>
	        			<td>{{$main->stime}} ~ {{$main->etime}}</td>
	        			<td>{{$main->faculty}}</td>
	        			<td>{{$main->sport}}</td>
	        			@if($main->approval === 'Not approved')
	        			<td><span class="label label-danger">Not approved</span></td>
	        			@endif
	        		</tr>
	        		@endforeach
	        	</table>
	        </div>
	    </div>


    </div>
    <div id="menu1" class="tab-pane fade">
      <br>
     	<div class="row">
     		<div class="col-md-4">
	        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2228.331238955575!2d80.57583253223243!3d5.936137898643313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391acc95eebf%3A0x1af67b002583643c!2sIndoor+Sports+Complex%2C+Tangalle+Road%2C+Matara%2C+Sri+Lanka!5e0!3m2!1sen!2sus!4v1479633595883" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	        </div>
	        <div class="col-md-8">
	        	<input type="text" id="indoorSearch" onkeyup="searchIndoor()" placeholder="Search..." title="Type in a name">
	        	<select id="indoorSelection" >
	        		<option value="0">by Date</option>
	        		<option value="1">by Time</option>
	        		<option value="2">by Faculty</option>
	        		<option value="3">by Sport</option>
	        	</select>
	        </div>
	        <div class="col-md-8">
	        	<table class="table table-hover">
	        		<tr>
	        			<td>Date</td>
	        			<td>Time</td>
	        			<td>Faculty</td>
	        			<td>Sport</td>
	        			<td></td>
	        		</tr>
	        	</table>
	        	<table class="table table-hover" id="indoor">
	        		@foreach($indoor as $indoor)
	        		<tr>
	        			<td>{{$indoor->date}}</td>
	        			<td>{{$indoor->stime}} ~ {{$indoor->etime}}</td>
	        			<td>{{$indoor->faculty}}</td>
	        			<td>{{$indoor->sport}}</td>
	        			@if($indoor->approval === 'Not approved')
	        			<td><span class="label label-danger">Not approved</span></td>
	        			@endif
	        		</tr>
	        		@endforeach
	        	</table>
	        </div>
	    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <br>
     	<div class="row">
     		<div class="col-md-4">
	        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.1892563838464!2d80.18848616431261!3d6.081301495596278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1714baeb610a7%3A0x482a4bc469f44994!2sUniversity+Playground%2C+Hapugala%2C+Sri+Lanka!5e0!3m2!1sen!2sus!4v1479633994336" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	        </div>
	        <div class="col-md-8">
	        	<input type="text" id="hapugalaSearch" onkeyup="searchHapugala()" placeholder="Search..." title="Type in a name">
	        	<select id="hapugalaSelection" >
	        		<option value="0">by Date</option>
	        		<option value="1">by Time</option>
	        		<option value="2">by Faculty</option>
	        		<option value="3">by Sport</option>
	        	</select>
	        </div>
	        <div class="col-md-8">
	        	<table class="table table-hover">
	        		<tr>
	        			<td>Date</td>
	        			<td>Time</td>
	        			<td>Faculty</td>
	        			<td>Sport</td>
	        			<td></td>
	        		</tr>
	        	</table>
	        	<table class="table table-hover" id="hapugala">
	        		@foreach($hapugala as $hapugala)
	        		<tr>
	        			<td>{{$hapugala->date}}</td>
	        			<td>{{$hapugala->stime}} ~ {{$hapugala->etime}}</td>
	        			<td>{{$hapugala->faculty}}</td>
	        			<td>{{$hapugala->sport}}</td>
	        			@if($hapugala->approval === 'Not approved')
	        			<td><span class="label label-danger">Not approved</span></td>
	        			@endif
	        		</tr>
	        		@endforeach
	        	</table>
	        </div>
	    </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <br>
     	<div class="row">
     		<div class="col-md-4">
	        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.0628389783637!2d80.22651864048338!3d6.069520836790036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1717c1e492511%3A0x96487a715949610d!2sFaculty+of+Medicine+-+University+of+Ruhuna!5e0!3m2!1sen!2sus!4v1479634398230" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	        </div>
	        <div class="col-md-8">
	        	<input type="text" id="karapitiyaSearch" onkeyup="searchKarapitiya()" placeholder="Search..." title="Type in a name">
	        	<select id="karapitiyaSelection" >
	        		<option value="0">by Date</option>
	        		<option value="1">by Time</option>
	        		<option value="2">by Faculty</option>
	        		<option value="3">by Sport</option>
	        	</select>
	        </div>
	        <div class="col-md-8">
	        	<table class="table table-hover">
	        		<tr>
	        			<td>Date</td>
	        			<td>Time</td>
	        			<td>Faculty</td>
	        			<td>Sport</td>
	        			<td></td>
	        		</tr>
	        	</table>
	        	<table class="table table-hover" id="karapitiya">
	        		@foreach($karapitiya as $karapitiya)
	        		<tr>
	        			<td>{{$karapitiya->date}}</td>
	        			<td>{{$karapitiya->stime}} ~ {{$karapitiya->etime}}</td>
	        			<td>{{$karapitiya->faculty}}</td>
	        			<td>{{$karapitiya->sport}}</td>
	        			@if($karapitiya->approval === 'Not approved')
	        			<td><span class="label label-danger">Not approved</span></td>
	        			@endif
	        		</tr>
	        		@endforeach
	        	</table>
	        </div>
	    </div>
    </div>
    <div id="menu4" class="tab-pane fade">
      <br>
     	<div class="row">
     		<div class="col-md-4">
	        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.2907103722787!2d80.5644719441343!3d6.060737388008685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1469830a7fd6f%3A0xd05ee89f51959b11!2sFaculty+of+Agriculture+University+of+Ruhuna!5e0!3m2!1sen!2sus!4v1479634575096" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	        </div>
	        <div class="col-md-8">
	        	<input type="text" id="KamburupitiyaSearch" onkeyup="searchKamburupitiya()" placeholder="Search..." title="Type in a name">
	        	<select id="kamburupitiyaSelection" >
	        		<option value="0">by Date</option>
	        		<option value="1">by Time</option>
	        		<option value="2">by Faculty</option>
	        		<option value="3">by Sport</option>
	        	</select>
	        </div>
	        <div class="col-md-8">
	        	<table class="table table-hover">
	        		<tr>
	        			<td>Date</td>
	        			<td>Time</td>
	        			<td>Faculty</td>
	        			<td>Sport</td>
	        			<td></td>
	        		</tr>
	        	</table>
	        	<table class="table table-hover" id="kamburupitiya">
	        		@foreach($kamburupitiya as $kamburupitiya)
	        		<tr>
	        			<td>{{$kamburupitiya->date}}</td>
	        			<td>{{$kamburupitiya->stime}} ~ {{$kamburupitiya->etime}}</td>
	        			<td>{{$kamburupitiya->faculty}}</td>
	        			<td>{{$kamburupitiya->sport}}</td>
	        			@if($kamburupitiya->approval === 'Not approved')
	        			<td><span class="label label-danger">Not approved</span></td>
	        			@endif
	        		</tr>
	        		@endforeach
	        	</table>
	        </div>
	    </div>
    </div>
  </div>
</div>
<!--Login Modal -->
    <div class="modal fade" id="booking" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Enter details for booking</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="{{url('ground')}}" width="100%">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    	<div class="row">
                    		<div class="col-md-4">Venue:</div>
							<div class="col-md-8">	
								<select name="venue" class="form-control input-sm">
									<option selected="selected" value="mainGround">Main Ground</option>
									<option value="indoorStadium">Indoor Stadium</option>
									<option value="hapugala">Hapugala</option>
									<option value="karapitiya">Karapitiya</option>
									<option value="kamburupitiya">Kamburupitiya</option>
								</select>
								<br>
							</div>
							
							<div class="col-md-4">Date:</div>
							<div class="col-md-8">
								<input type="date" name="date" class="form-control input-sm" min="{{date('Y-m-d')}}" required=""><br>
							</div>
								
							<div class="col-md-4">Time:</div>
							<div class="col-md-4">
								<input type="time" name="startTime" class="form-control input-sm" required="">
							</div>
							<!-- <div class="col-md-2">to</div> -->		
							<div class="col-md-4">
								<input type="time" name="endTime" class="form-control input-sm" required=""><br>	
							</div>
							@if(Auth::user()->role === 'faculty_cap')
								<div class="col-md-4">Sport:</div>
								<div class="col-md-8">
									<select name="sport" class="form-control input-sm">
										<option selected="selected" value="Athletics">Athletics</option>
										<option value="Badminton">Badminton</option>
						                <option value="Baseball">Baseball</option>
						                <option value="Basketball">Basketball</option>
						                <option value="Carrom">Carrom</option>
						                <option value="Chess">Chess</option>
						                <option value="Cricket">Cricket</option>
						                <option value="Elle">Elle</option>
						                <option value="Football">Football</option>
						                <option value="Hockey">Hockey</option>
						                <option value="Karate">Karate</option>
						                <option value="Wrestling">Wrestling</option>
						                <option value="Taekwondo">Taekwondo</option>
						                <option value="Netbal">Netball</option>
						                <option value="Rugger">Rugger</option>
						                <option value="Swimming">Swimming</option>
						                <option value="Tabletennis">Tabletennis</option>
						                <option value="Tennis">Tennis</option>
						                <option value="Volleyball">Volleyball</option>
						                <option value="Weight Lifting">Weight Lifting</option>
						            </select><br>
								</div>
								<input type="hidden" name="faculty" value="{{Auth::user()->faculty}}">
							@else
								<input type="hidden" name="faculty" value="Reserved by University team">
								<input type="hidden" name="sport" value="{{Auth::user()->sport}}">
							@endif
									
							<div class="col-md-6"><input type="reset" name="reset" class="btn btn-warning"></div>
								
							<div class="col-md-6"><input type="submit" name="submit" class="btn btn-primary" value="Reserve"></div>
						</div>
                    </form>
                </div>
            </div>
          </div>

        </div>
    </div>
   <script src="js/groundFilter.js"></script> 
@endsection
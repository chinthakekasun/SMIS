@extends('layout.master2')

@section('content')
<link rel="stylesheet" href="css/unslider.css">
<div class="content">
    <div class="well span8">
		<h1 style="text-align:center;color:#4d4d4d;">Basketball</h1>
			
	<center><div class="my-slider" style="max-width: 575px; max-height: 300px;">
	<ul>
		<li><img width="100%" src="{{URL('images/games/basketball/1.jpg')}}"></li>
		<li><img width="100%" src="{{URL('images/games/basketball/2.jpg')}}"></li>
		<li><img width="100%" src="{{URL('images/games/basketball/3.jpg')}}"></li>
		<li><img width="100%" src="{{URL('images/games/basketball/4.jpg')}}"></li>
	</ul>
</div></center>

<h3><u>Facilities given by the Physical Education Department:</u></h3>
<table><td>
<ul >
	<li>Subsistance of Rs.500/= for each person per day for participation of Inter University Championships.</li></br>
	<li>T-shirts for University members on half of rate,If somebody will represent another sport also,it will be free of charge.</li></br>
	<li>Refreshment(Rs.50/=) for each University pool player per day after completion of the practice sessions.</li></br>
	<li>Provide Transport facilities to Wellamadama complex from other faculties(Agri./Medicine/Engineering).</li></br>
	<li>Hostel facilities for University team members.</li>
</ul></td><td>
@if(!Auth::check())
	<a href="{{URL('application','basketball')}}">
		<img src="{{URL('images/apply.png')}}" width="175px">
	</a>@endif
</td></table>

</div>
</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/unslider.js"></script>
<script>
		jQuery(document).ready(function($) {
			$('.my-slider').unslider({
				//animation: 'vertical',
				autoplay: true,
				infinite: true,
				arrows: false
			});
		});
	</script>
@endsection

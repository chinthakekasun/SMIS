<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="css/app.css"> -->
</head>
<body>

<form>

@foreach($teamcards as $teamcard)
	<h3>{{$teamcard->sport}} - {{$teamcard->team}}</h3>
	<h4>{{$teamcard->faculty}}</h4>
		<table border="0" width="75%">
			
			<?php
		    	$players = DB::table('entryformplayers')->where('entryform_id', $teamcard->id)->get();
			?>
			@foreach($players as $player)
				@if($player->role === 'captain')
				<tr>
					<td>Captain</td>
					<td>{{$player->name}}</td>
					<td>{{$player->user_id}}</td>
				</tr>
				@elseif($player->role === 'vice captain')
				<tr>
					<td>Vice Captain</td>
					<td>{{$player->name}}</td>
					<td>{{$player->user_id}}</td>
				</tr>
				@else
				<tr>
					<td></td>
					<td>{{$player->name}}</td>
					<td>{{$player->user_id}}</td>
				</tr>
				@endif
			@endforeach
		</table>
@endforeach

</form>


</body>
</html>
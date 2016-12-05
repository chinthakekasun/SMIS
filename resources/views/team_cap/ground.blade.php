@extends('layout.master')

@section('content')
<div class="content">
	<div class="well span8">
		<h1>Ground Reservation</h1>		
		<form >
			<table>
			<tr><td>
					Faculty:</td><td><select class="form-control" name="combination">
					<option selected="selected" value="Sci">Sciece</option>
					<option value="mgt">Management</option>
					<option value="art">Humanities & social Sci.</option>
					<option value="Fms">Fisheries & Marine Sci.</option>
					<option value="eng">Engineering</option>
					<option value="mdc">Medicine</option>
					<option value="agr">Agriculture</option>					
				</select></td>
			</tr>
			
			<tr><td>			
			Date:</td><td><input class="form-control" type="date" /> 
			</td></tr>
			
			<tr><td>			
			Time:</td><td><input type="time" class="form-control"> to <input type="time" class="form-control">
			</td></tr>
			
			<tr><td>			
			Venue:</td><td>
				<select name="combination">
					<option selected="selected" value="Gym">Indoor Stadium</option>
					<option value="ground">Outdoor Stadium</option>
				</select>
			</td></tr>

			<tr><td>Reason:</td><td>
			<textarea rows="4" cols="50">
			
			</textarea>
			</td></tr>

			<tr><td><input type="button" value="Submit" /></td><td><input type="button" value="Clear" /></td><td>
			</table>		
		</form>
	</div>
</div>
@endsection

@extends('layout.master')

@section('content')
<div class="content">
    <div class="well span8">
    @foreach($applications as $application)
    <h2>Application form for {{$application->appliedfor}}</h2>
    <hr>
    @if(session('message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{session('message')}}
        </div>  
    @endif
    <table width="50%">
    	<tr>
    		<td>Name with Initials</td>
    		<td>:</td>
    		<td>{{$application->name}}</td>
    	</tr>
    	<tr>
    		<td>Index Number</td>
    		<td>:</td>
    		<td>{{$application->indexnumber}}</td>
    	</tr>
    	<tr>
    		<td>Faculty</td>
    		<td>:</td>
    		<td>{{$application->faculty}}</td>
    	</tr>
    	<tr>
    		<td>Level</td>
    		<td>:</td>
    		<td>{{$application->level}}</td>
    	</tr>
    	<tr>
    		<td>Date of birth</td>
    		<td>:</td>
    		<td>{{$application->dateofbirth}}</td>
    	</tr>
    	<tr>
    		<td>Address</td>
    		<td>:</td>
    		<td>{{$application->address1}}</td>
    	</tr>
    	<tr>
    		<td></td>
    		<td></td>
    		<td>{{$application->address2}}</td>
    	</tr>
    	<tr>
    		<td></td>
    		<td></td>
    		<td>{{$application->address3}}</td>
    	</tr>
    	<tr>
    		<td>Telephone number</td>
    		<td>:</td>
    		<td>{{$application->tele}}</td>
            @if(Auth::user()->role === 'instructor')
    		<td>
    			<form id="email" method="post">
    				<input type="hidden" name="_token" value="{{csrf_token()}}">
                  	<input type="hidden" name="tele" value="{{$application->tele}}">
                  	<a href="#">
        				<button type="submit" class="btn btn-info  dim btn-small-dim btn-outline" data-toggle="tooltip" title="Send confirmation SMS"><i class="fa fa-phone"></i></button>
        			</a>
    			</form>
    		</td>
            @endif
    	</tr>
    	<tr>
    		<td>E-mail</td>
    		<td>:</td>
    		<td>{{$application->email}}</td>
    		<td>
    		@if(Auth::user()->role === 'instructor')
    			<form id="email" method="post" action="{{URL('sendmail')}}">
    				<input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$application->id}}">
                  	<input type="hidden" name="name" value="{{$application->name}}">
                  	<input type="hidden" name="email" value="{{$application->email}}">
                  	<a href="#">
        				<button type="submit" class="btn btn-info  dim btn-small-dim btn-outline" data-toggle="tooltip" title="Send confirmation E-mail"><i class="fa fa-envelope"></i></button>
        			</a>
    			</form>
            @endif
    		</td>
    	</tr>
    </table>
    @endforeach
 	</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
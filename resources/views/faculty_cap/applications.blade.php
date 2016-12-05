@extends('layout.master')

@section('content')
    <div class='content'>
        <div class='well span8'>
        <h1>Applications confirmed by the instructor</h1>
        	<div class='well span8'>
        			@foreach($applications as $application)
        			<a class="btn btn-link" href="{{URL('viewapplication',$application->id)}}">
        				{{$application->name}} - {{$application->indexnumber}}
        			</a>
        			<br>
        			@endforeach
        	</div>
        </div>
	</div>
@endsection
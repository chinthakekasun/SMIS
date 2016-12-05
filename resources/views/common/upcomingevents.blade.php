@extends('layout.master')

@section('content')
	<div class="content">
    	<div class="well span8">
    		<h2>
    			Upcoming Events
    				<a style="float:right;" class="btn btn-info btn-sm" href="{{URL('newevent')}}">
    					<i class="fa fa-calendar-plus-o" aria-hidden="true"></i> New event
    				</a>
    		</h2>

            <div class="alert alert-info">
                No new upcoming events!
            </div>
        </div>
    </div>
@endsection
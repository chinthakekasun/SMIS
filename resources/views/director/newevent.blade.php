@extends('layout.master')

@section('content')
	<div class="content">
    	<div class="well span8">
    		<h2>New Event</h2>
            <form class="m-t" role="form" method="post" action="{{URL('newevent')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="postedby" value="{{Auth::user()->username}}">
                <input type="hidden" name="role" value="{{Auth::user()->role}}">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Event title" required="">
                        <br>
                    <!-- </div>
                    <div class="col-md-6"> -->
                        <textarea name="description" rows="5" placeholder="Event description" class="form-control" required=""></textarea>
                        <br>
                    <!-- </div>
                    <div class="col-md-6"> -->
                        <input type="date" name="date" class="form-control" min="{{date('Y-m-d')}}" required="">
                        <br>
                    <!-- </div>-->

                        <input style="width: 250px; float: left" type="time" name="stime" class="form-control" required="" > 

                        <h4 style="float: left;"> to </h4>

                        <input style="width: 250px; float: right" type="time" name="etime" class="form-control" required="">
                        <br>
                        <br>
                        <br>
                        <input type="text" name="venue" class="form-control" placeholder="Venue" required="">
                        <br>
                        <input  class="btn btn-success" type="submit" name="submit" value="Add event">
                        <br>
                    </div>
                    </div>
                    </form>   
            </div>
    </div>
@endsection
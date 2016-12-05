@extends('layout.master')

@section('content')
<!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script> -->
<div class="content">
    <div class="well span8">	
		<h3>Upload notices</h3>
		<form action="{{url('upld')}}"  method="post">
			<input type="text" name="title" class="form-control" width="100%" placeholder="Title" required="">
			<br>
			<textarea class="form-control" name="body" rows="10" cols="100" placeholder="Body" required=""></textarea>
			Or browse the file here:<br>
			<input type="file" name="file" class="form-control">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="postedby" value="{{Auth::user()->username}}">
			@if (Auth::user()->role === 'director')
				<input type="hidden" name="approval" value="true">
			@else
				<input type="hidden" name="approval" value="false">
			@endif
			<br>
			<button class="btn btn-sm btn-primary" type="submit">
				Upload
			</button><br>
		</form>
	</div>
</div>
@endsection
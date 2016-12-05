@extends('layout.master')

@section('content')
<!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script> -->
<div class="content">
    <div class="well span8">	
		<h3>Edit notices</h3>
		@foreach($notices as $notice)
		<form action="{{url('update')}}"  method="post">
			<input type="hidden" name="id" value="{{$notice->id}}">
			<input type="text" name="title" class="form-control" width="100%" value="{{$notice->title}}" required="">
			<br>
			<textarea class="form-control" name="body" rows="10" cols="100" required="">{{$notice->body}}</textarea>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<br>
			<button class="btn btn-sm btn-primary" type="submit">
				Upldate
			</button><br>
		</form>
		@endforeach
	</div>
</div>
@endsection
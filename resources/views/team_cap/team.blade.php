@extends('layout.master')

@section('content')
<div class="content">
	<div class="well span8">
		<h1>My team</h1>
		<div class="well span8">
			<table class="table table-hover">
					<tr style="font-family: sans-serif;">
						<td>Index Number</td>
						<td>Name</td>
						<td>Faculty</td>
						<td>Level</td>
						<td></td>
					</tr>
				@foreach($players as $player)
					<tr>
						<td>{{$player->user_id}}</td>
						<td>{{$player->name}}</td>
						<td>{{$player->faculty}}</td>
						<td>{{$player->level}}</td>
						<td>
							<a data-toggle="modal" data-target="#message{{$player->id}}" href="#">
        						<button class="btn btn-info btn-sm btn-outline">
        							<i class="fa fa-envelope"></i>
        						</button>
        					</a>
						</td>

	<!--Message Modal -->
    <div class="modal fade" id="message{{$player->id}}" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Send a message to {{$player->name}}</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form class="m-t" role="form" method="post" action="{{url('playermessage')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="subject">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message" rows="4"></textarea>
                        </div>
                        <button class="btn btn-md btn-success btn-block" type="submit">Send</button>
                    </form>
                </div>
            </div>
          </div>
        </div>
    </div>

					</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>


@endsection
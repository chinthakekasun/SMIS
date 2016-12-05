@extends('layout.master')

@section('content')
    <div class='content'>
        <div class='well span8'>
            <h2>Entry forms for the Inter Faculty Sport Meet - {{date('Y')}}
            <a style="float:right; width: 175px;" class="btn btn-info btn-outline btn-xs" href="{{URL('confirmedapp')}}">Applicarions</a>
            <br>
            <a style="float:right; width: 175px;" class="btn btn-info btn-outline btn-xs" href="{{URL('entryform')}}">Upload Entry Forms-{{date('Y')}}</a>
            </h2>
            <h3>Faculty of {{Auth::user()->faculty}}</h3>
            @if(count($teamcards) === 0)
            <div class="alert alert-danger">
  				    <center>You haven't submitted any Entry form for the Inter Faculty Sport Meet - {{date('Y')}}!</center>
        	 </div>
        	@else
            {{$teamcards->render()}}
            <div class="well span8">
            @foreach($teamcards as $teamcard)
		        	
                <div class="timeline-item">
                    <table width="100%">
                      <tr>
                          <td width="75%">
                              <h3 class="timeline-header">
                                <a href="#demo{{$teamcard->id}}">
                                  {{$teamcard->sport}} - {{$teamcard->team}}
                                  @if ($teamcard->approval === 'false')
                                    <span class="label label-danger">Not Approved</span>
                                  @endif
                                </a>
                              </h3>
                          </td>
                      <td>
                            <a href="#demo{{$teamcard->id}}" class="btn btn-primary btn-outline btn-xs" data-toggle="collapse">
                                <span class="glyphicon glyphicon-tag"></span> View team
                            </a>
                            @if ($teamcard->approval === 'false')
                              <a href="{{URL('remove',$teamcard->id)}}">
                                <button class="btn btn-danger btn-outline btn-xs" onclick="return confirm('Are you sure? Your will not be able to recover this entry-form!');">
                                    <span class="glyphicon glyphicon-trash"></span>  Remove
                                </button>
                              </a>
                            @endif
                      </td>
                    </tr>
                  </table>
                  <?php
                    $players = DB::table('entryformplayers')->where('entryform_id', $teamcard->id)->get();
                  ?>
                  
                  <div id="demo{{$teamcard->id}}" class="collapse">
                                <table class="table table-hover">
                                @foreach($players as $player)
                                  <tr>
                                    <td>{{$player->name}}</td>
                                    <td>{{$player->user_id}}</td>
                                    <td>{{$player->role}}</td>
                                  </tr>
                                @endforeach
                                </table>
                  </div>
                </div>
  						@endforeach
            </div>
          @endif
      </div>
	</div>
@endsection
@extends('layout.master')

@section('content')
<div class="content">
    <div class="well span8">	
		<h2>Requests</h2>

		  <ul class="nav nav-tabs">
		    <li class="active">
		    	<a data-toggle="tab" href="#notices">
		    		Notices <span class="badge">{{$num_notices}}</span>
		    	</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#faculty_team_cards">
		    		Faculty team cards - {{date('Y')}} <span class="badge">{{$num_teamcards}}</span>
		    	</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#sports_equipments">
		    		Ground Reservations <span class="badge">{{$num_grounds}}</span>
		    	</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#other">
		    		Other requests <span class="badge">0</span>
		    	</a>
		    </li>
		  </ul>

		  <div class="tab-content">

		    <div id="notices" class="tab-pane fade in active">
		    <br>
		    	@if($num_notices !== 0)
		    	{{$notices->render()}}
		     	@foreach($notices as $notice)
        		<div class="well span8">
                <div class="timeline-item">
                    <table width="100%">
                    <tr>
                        <td width="75%">
                            <span class="time"><i class="fa fa-clock-o"></i>{{$notice->date}}</span>
                                <h3 class="timeline-header"><a href="#demo{{$notice->id}}">{{$notice->title}}</a></h3>
                        </td>
                    <td>
                    
						<a href="#demo{{$notice->id}}" class="btn btn-primary btn-outline btn-xs" data-toggle="collapse">
                            <span class="glyphicon glyphicon-paperclip"></span> Read more
                        </a>
						<a href="{{URL('publish',$notice->id)}}">  
						<button  class="btn btn-success btn-outline btn-xs">
						            <i class="fa fa-check"></i>Publish
						</button>
            </a> 
            <a href="{{URL('delete',$notice->id)}}">
                <button class="btn btn-danger btn-outline btn-xs">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>  Delete
                </button>
            </a> 
                </td>
            </tr>
            </table>
                    <div id="demo{{$notice->id}}" class="collapse">
                              {{$notice->body}}
                    </div>
                </div>
            </div>   
        	@endforeach
        	@else
        	<div class="alert alert-info">
  				  No new requests!
			   </div>
        	@endif
		    </div>

		    <div id="faculty_team_cards" class="tab-pane fade">
		      <h4>Faculty team card registration</h4>
          @if($num_teamcards !== 0)
		      {{$teamcards->render()}}
            <div class="well span8">
            @foreach($teamcards as $teamcard)
		        	
                <div class="timeline-item">
                    <table width="100%">
                      <tr>
                          <td width="65%">
                              <h3 class="timeline-header">
                                <a href="#demo{{$teamcard->id}}">
                                  {{$teamcard->sport}} - {{$teamcard->team}}
                                </a>
                              </h3>
                          </td>
                      <td>
                        
                        <a href="#demo{{$teamcard->id}}" class="btn btn-primary btn-outline btn-xs" data-toggle="collapse">
                                <span class="glyphicon glyphicon-tag"></span> View team
                        </a>
                        <a href="{{URL('approveteamcards', $teamcard->id)}}">
                            <button class="btn btn-success btn-outline btn-xs">
                                    <i class="fa fa-check"></i>  Approve
                            </button>
                        </a>
                        <a href="{{URL('createpdf', $teamcard->id)}}">
                            <button class="btn btn-info btn-outline btn-xs">
                                    <i class="fa fa-file-pdf-o" ></i>  Download
                            </button>
                        </a>
                        <a href="{{URL('remove', $teamcard->id)}}">
                            <button class="btn btn-danger btn-outline btn-xs">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>  Remove
                            </button>
                        </a>
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
		            @else
                    <div class="alert alert-info">
                      No new requests!
                    </div>
                @endif
		    </div>

		    <div id="sports_equipments" class="tab-pane fade">
		      <br>
          @if($num_grounds !== 0)
          {{$notices->render()}}
          
            <div class="well span8">
                <div class="timeline-item">
                    <table width="100%">
                      <tr>
                        <td>Venue</td>
                        <td>Date</td>
                        <td>Time</td>
                        <td>Requested by</td>
                        <td>Faculty</td>
                        <td>Sport</td>
                        <td></td>
                      </tr>
                      @foreach($grounds as $ground)
                      <tr style="font-size: 15px">
                        <td>{{$ground->venue}}</td>
                        <td>{{$ground->date}}</td>
                        <td>{{$ground->stime}} ~ {{$ground->etime}}</td>
                        <td>{{$ground->requestedby}}</td>
                        <td>{{$ground->faculty}}</td>
                        <td>{{$ground->sport}}</td>
                        <td>
                          <a href="{{URL('groundApprove', $ground->id)}}">
                              <button  class="btn btn-primary btn-outline btn-xs">
                                <i class="fa fa-check"></i> Approve
                              </button> 
                          </a>
                          <a href="{{URL('groundReject', $ground->id)}}">
                              <button class="btn btn-danger btn-outline btn-xs">
                                <i class="fa fa-times"></i> Reject
                              </button>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                    </table>
                </div>
            </div>  
          @else
          <div class="alert alert-info">
            No new ground reservations!
         </div>
          @endif
		    </div>

		    <div id="other" class="tab-pane fade">
		      <h4>Other requests</h4>
		    </div>

		  </div>
		
	</div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
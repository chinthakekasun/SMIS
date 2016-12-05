@extends('layout.master')

@section('content')
    <div class='content'>
        <div class='well span8'>
            <h2>Entry forms for the Inter Faculty Sport Meet - {{date('Y')}}
            </h2>
            <h3>Faculty of {{Auth::user()->faculty}}</h3>
            @if(count($teamcards) === 0)
            <div class="alert alert-danger">
  				    <center>You haven't submitted any Entry form for the Inter Faculty Sport Meet - {{date('Y')}}!</center>
        	 </div>
        	@else
        		<?php
        			$num = 1;
        		?>
            {{$teamcards->render()}}
            <div class="well span8">
            @foreach($teamcards as $teamcard)
		        	
                <div class="timeline-item">
                    <table width="100%">
                      <tr>
                          <td width="75%">
                              <h3 class="timeline-header">
                                <a href="#demo{{$num}}">
                                  {{$teamcard->sport}} - {{$teamcard->gender}}
                                </a>
                              </h3>
                          </td>
                      <td>
                        <form method="post" action="{{url('remove')}}">  
                            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <input type="hidden" name="id" value="{{$teamcard->id}}">
                            <a href="#demo{{$num}}" class="btn btn-primary btn-outline btn-xs" data-toggle="collapse">
                                <span class="glyphicon glyphicon-tag"></span> View team
                            </a>
                            @if ($teamcard->approval === 'false')
                                <button class="btn btn-danger btn-outline btn-xs" type="submit" onclick="return confirm('Are you sure? Your will not be able to recover this entry-form!');" data-toggle="tooltip" title="Are you sure you want to delete this entry-form?">
                                    <span class="glyphicon glyphicon-trash"></span>  Remove
                                </button>
                            @endif
                        </form>
                      </td>
                    </tr>
                  </table>
                  <div id="demo{{$num}}" class="collapse">
                                <table class="table table-hover">
                                  <tr>
                                    <td>Captain</td>
                                    <td>{{$teamcard->captain}}</td>
                                    <td>{{$teamcard->captainid}}</td>
                                  </tr>
                                  <tr>
                                    <td>Vice Captain</td>
                                    <td>{{$teamcard->vcaptain}}</td>
                                    <td>{{$teamcard->vcaptainid}}</td>
                                  </tr>
                                </table>
                  </div>
                </div>
              
  							<?php
								$num++;
							?>
  						@endforeach
              </div>
              </div>
				        </div>
          </div>
         @endif
        	
        <!-- </div>
    </div> -->
    <script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
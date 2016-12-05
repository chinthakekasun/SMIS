@extends('layout.master')

@section('content')
<div class="content">
    <div class="well span8">	
		<h2>New Notices</h2>

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
</div>
@endsection
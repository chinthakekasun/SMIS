@extends('layout.master')

@section('content') 
<div class="content">
    <div class="well span8">
        <!-- <div class="well span8">	 -->
    		<h2>View notices
            @if (Auth::user()->role !== 'player')
            <a style="float:right;" class="btn btn-info btn-outline btn-xs" href="{{URL('upld')}}">Upload Notices</a></h2>
            @else
            <a style="float:right;" class="btn btn-info btn-outline btn-xs" href="#">Upload Notices</a></h3>
            @endif
            {{$notices->render()}}
            @foreach($notices as $notice)
            @if($notice->approval==='false')
                @if(Auth::user()->username === $notice->postedby)
                <div class="well span8">

                    <div class="timeline-item">
                    <table width="100%">
                <tr>
                    <td width="75%">
                    <span class="time"><i class="fa fa-clock-o"></i>{{$notice->date}}</span>
                    <h3 class="timeline-header"><a href="#demo{{$notice->id}}">{{$notice->title}} - <span class="label label-danger">Not approved</span></a></h3>
    

                    </td>
                    <td>
                        <a href="#demo{{$notice->id}}" class="btn btn-primary btn-outline btn-xs" data-toggle="collapse">
                                <span class="glyphicon glyphicon-paperclip"></span> Read more
                        </a> 
                        <a href="{{URL('editnotice',$notice->id)}}">
                            <button class="btn btn-success btn-outline btn-xs">
                                <span class="glyphicon glyphicon-pencil"></span>  Edit
                            </button>
                        </a>
                        <a href="{{URL('delete',$notice->id)}}">
                            <button class="btn btn-danger btn-outline btn-xs">
                                <span class="glyphicon glyphicon-trash"></span>  Delete
                            </button>
                        </a>     
                </td>
            </tr></table>
                    <div id="demo{{$notice->id}}" class="collapse">
                              {{$notice->body}}
                    </div>
                </div>    
                </div>
               @endif 
            @else
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
                        @if (Auth::user()->role === 'director')
                            <a href="{{URL('delete',$notice->id)}}">
                                <button class="btn btn-danger btn-outline btn-xs"
                                    <span class="glyphicon glyphicon-trash"></span>  Delete
                                </button>
                            </a>
                        @endif
                </td>
            </tr>
            </table>
                    <div id="demo{{$notice->id}}" class="collapse">
                              {{$notice->body}}
                    </div>
                </div>
            </div>
            @endif  
        @endforeach

	</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
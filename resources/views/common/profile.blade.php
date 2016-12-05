@extends('layout.master')

@section('content')
	<div class="content">
    	<div class="well span8">
    		<table>
    			<tr>
    				<td>
    					<img src="{{Auth::user()->picurl}}" class="img-circle circle-border m-b-md" alt="profile" width="100px">
    				</td>
    				<td>
    					<h2>{{Auth::user()->username}}</h2>
    				</td>
    			</tr>
    			<tr>
    				<td>
                        <a href="{{URL('/edit_profile')}}" class="btn btn-success" role="button">
                            <i class="fa fa-pencil-square-o"></i>Edit Profile</button>
                        </a>              
    				</td>
    			</tr>
    		</table>
        </div>
    </div>
@endsection
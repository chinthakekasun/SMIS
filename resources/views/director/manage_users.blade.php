@extends('layout.master')

@section('content')
<div class="content">
    <div class="well span8">
    <h3>Manage Users</h3>
    <!-- <a href="#" style="float:right;" class="btn btn-success">New user</a> -->

    <ul class="nav nav-tabs">
		    <li class="active">
		    	<a data-toggle="tab" href="#teams">
		    		University Teams
		    	</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#faculty_captains">
		    		Faculty captains
		    	</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#team_captains">
		    		Team captains
		    	</a>
		    </li>
		    <li>
		    	<a data-toggle="tab" href="#new">
		    		New User
		    	</a>
		    </li>
		  </ul>

    	<div class="tab-content">

		    <div id="teams" class="tab-pane fade in active">
		    <h4>Team management</h4>
		    </div>

		    <div id="faculty_captains" class="tab-pane fade">
		      <h4>Add or change faculty captains</h4>
		    </div>

		    <div id="team_captains" class="tab-pane fade">
		      <h4>Add or change team captains</h4>
		    </div>

		    <div id="new" class="tab-pane fade">

		      <form class="m-t" role="form" method="post" action="{{URL('newuser')}}">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <table padding="15px">
            <th>
                <h3>Enter details.</h3><br>
            </th>
                <tr>
                    <td>
                        User ID:
                    </td>
                    <td>
                        <input type="text" name="userid" class="form-control" placeholder="eg: scXXXX">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Full name:
                    </td>
                    <td>
                        <input type="text" name="username" class="form-control" placeholder="Name">
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Faculty:
                    </td>
                    <td>
                        <select name="faculty" class="form-control">
                            <option value="science">
                                Science
                            </option>
                            <option>
                                Engineering
                            </option>
                            <option>
                                Medical
                            </option>
                            <option>
                                Agriculture
                            </option>
                            <option>
                                Management
                            </option>
                            <option>
                                Fisharies and marine sciences
                            </option>
                            <option>
                                HSS
                            </option>
                        </select>
                        <br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Position:
                    </td>
                    <td>
                        <select name="role" class="form-control">
                            <option value="player">
                                Player
                            </option>
                            <option value="team_cap">
                                Team captain
                            </option>
                            <option value="faculty_cap">
                                Faculty Captain
                            </option>
                        </select>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" class="btn btn-info" value="Add user">
                    </td>
                </tr>
            </table>
            </form>
		    </div>

		  </div>

    </div>
</div>
@endsection
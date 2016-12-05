@extends('layout.master')

@section('content')
<link rel="stylesheet" type="text/css" href="{{URL('css/rating.css')}}">
<div class="content">
    <div class="well span8">

  <h2>Players - {{$game}}</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">University team</a></li>
    <li><a data-toggle="tab" href="#menu1">University pool players</a></li>
    <li><a data-toggle="tab" href="#menu2">Faculty players</a></li>
    <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active"><br>
      

    </div>
    <div id="menu1" class="tab-pane fade"><br>
      @if($num_pool_players !== 0)
      <table width="100%" class="table table-hover">
        @foreach($pool_players as $pool_player)
        <tr>
        <form id="pool" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}"> 
          <input type="hidden" name="id" value="{{$pool_player->id}}">
          <input type="hidden" name="user_id" value="{{$pool_player->user_id}}">
          <input type="hidden" name="name" value="{{$pool_player->name}}">
          <input type="hidden" name="faculty" value="{{$pool_player->faculty}}">
          <input type="hidden" name="sport" value="{{$pool_player->sport}}">
          <td>{{$pool_player->name}}</td>
          <td>{{$pool_player->user_id}}</td>
          <td style="color: red;">{{$pool_player->approval}}</td>
          <td>RATING</td>
          <td>
            @if($pool_player->approval !== "Not approved")
            <button class="btn btn-primary btn-outline btn-xs" type="submit" onclick="managePool('/addtoteam')">Add to university team</button>
            @endif
          </td>
          <td><!-- <button class="btn btn-danger btn-outline btn-xs" type="submit" onclick="submitForm('/addtopool')">Remove</button> -->Remove</td>
        </form>
        </tr>
        @endforeach
      </table>
      @else
        <div class="alert alert-danger">
          <center>There are no players in University {{$game}} pool</center>
        </div>
      @endif

    </div>
    <div id="menu2" class="tab-pane fade"><br>
      @if($num_faculty_players !== 0)
        @foreach($faculty_players as $f_players)
          <?php
            $players = DB::table('entryformplayers')->where('entryform_id', $f_players->id)->orderBy('rating', 'desc')->get()
          ?>
          <table class="table table-hover" width="100%">
            <tr><td width="15%">{{$f_players->faculty}}</td></tr>
            @foreach($players as $player)
            <form id="approve" method="post" action="/addtopool">
                <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                <input type="hidden" name="id" value="{{$player->id}}">
                <input type="hidden" name="sport" value="{{$game}}">
                <input type="hidden" name="user_id" value="{{$player->user_id}}">
                <input type="hidden" name="name" value="{{$player->name}}">
                <input type="hidden" name="faculty" value="{{$f_players->faculty}}">
                <tr>
                  <td></td>
                  <td>{{$player->name}}</td>
                  <td>{{$player->user_id}}</td>
                  <td>{{$player->role}}</td>
                  <td>
                    <div class="rating">
                      <span><a data-toggle="tooltip" title="Exellent" href="{{URL('rate','5')}}"> ☆ </a></span>
                      <span><a data-toggle="tooltip" title="Good" href="{{URL('rate','4')}}"> ☆ </a></span>
                      <span><a data-toggle="tooltip" title="Average" href="{{URL('rate','3')}}"> ☆ </a></span>
                      <span><a data-toggle="tooltip" title="Poor" href="{{URL('rate','2')}}"> ☆ </a></span>
                      <span><a data-toggle="tooltip" title="Very poor" href="{{URL('rate','1')}}"> ☆ </a></span>
                      <!-- <span><a href="{{URL('rate','5')}}"><button>☆</button></a></span>
                      <span><a href="{{URL('rate','4')}}"><button>☆</button></a></span>
                      <span><a href="{{URL('rate','3')}}"><button>☆</button></a></span>
                      <span><a href="{{URL('rate','2')}}"><button>☆</button></a></span>
                      <span><a href="{{URL('rate','1')}}"><button>☆</button></a></span> -->
                    </div>
                  </td>
                  <td>
                    {{$player->status}}
                  </td>
                  <td>
                  @if($player->status === "")
                  <!-- <button class="btn btn-primary btn-outline btn-xs" type="submit" onclick="submitForm('/addtopool')" name="add_to_pool">Add to University pool</button> -->
                  <button class="btn btn-primary btn-outline btn-xs" type="submit">Add to University pool</button>
                  @endif
                  </td>
                </tr>
            </form>
            @endforeach
          </table>
        @endforeach
      @else
        <div class="alert alert-danger">
          <center>Faculty captains havent submitted teams for year {{date('Y')}}</center>
        </div>
      @endif
    </div>
    <!-- <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div> -->
</div>
    </div>
</div>
<script>
    function submitForm(action)
    {
        document.getElementById('approve').action = action;
        document.getElementById('approve').submit();
    }

    function managePool(action)
    {
        document.getElementById('pool').action = action;
        document.getElementById('pool').submit();
    }
</script>
<script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
@extends('layout.master')

@section('content')
<div class="content">
    <div class="well span8">  
    <h2>Applications</h2>

      <ul class="nav nav-tabs">
        <li class="active">
          <a data-toggle="tab" href="#badminton">
            Badminton <span class="badge">{{$num_badminton}}</span>
          </a>
        </li>
        <li>
          <a data-toggle="tab" href="#basketball">
            Basketball <span class="badge">{{$num_basketball}}</span>
          </a>
        </li>
        <li>
          <a data-toggle="tab" href="#old">
            Confirmed Applications <!-- <span class="badge">{{$num_basketball}}</span> -->
          </a>
        </li>
      </ul>

      <div class="tab-content">

        <div id="badminton" class="tab-pane fade in active">
        <br>
        @if($num_badminton !== 0)
          @foreach($badminton as $badminton)
                
                          <a class="btn btn-link" href="{{URL('viewapplication',$badminton->id)}}">
                            {{$badminton->name}} - {{$badminton->indexnumber}}
                                <img src="images/new.jpg" width="40px">
                          </a><br>      
              @endforeach
            @else
              <div class="alert alert-danger">
              No new applications!
          </div>
            @endif
         
        </div>

        <div id="basketball" class="tab-pane fade">
          <br>
           @if($num_basketball !== 0)
            @foreach($basketball as $basketball)
                <a class="btn btn-link" href="{{URL('viewapplication',$basketball->id)}}">
                  {{$basketball->name}} - {{$basketball->indexnumber}}
                  <img src="images/new.jpg" width="40px">
                </a>
                  
                <br>   
              @endforeach
            @else
              <div class="alert alert-danger">
              No new applications!
          </div>
            @endif
                
        </div>

        <div id="old" class="tab-pane fade">
          <br>
          {{$old->render()}}
            @if($num_old !== 0)
              @foreach($old as $old)
                <a class="btn btn-link" href="{{URL('viewapplication',$old->id)}}">
                  {{$old->name}} - {{$old->indexnumber}}
                </a>
                <br>   
              @endforeach
            @else
              <div class="alert alert-danger">
              No confirem applications!
          </div>
            @endif      
        </div>

        

      </div>
    
  </div>
</div>
<!-- <script>
	$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script> -->

@endsection
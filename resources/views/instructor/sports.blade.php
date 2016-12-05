@extends('layout.master')

@section('content')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="content">
    <!-- <div class="well span8"> -->
    
        <div class="col-md-6" id="basketball" width="50%">
                    <h1 class="font-bold">
                        Basketball
                    </h1>
                    <a href="{{URL('teamplayers','basketball')}}"><img src="images/basketball.jpg" width="400px"></a>
                    
          </div>
          <div class="col-md-6" id="badminton">
                    <h1 class="font-bold">
                        Badminton
                    </h1>
                    <a href="{{URL('teamplayers','badminton')}}"><img src="images/badminton.jpg" width="250px"></a>
                    
          </div>

    <!-- </div> -->
</div>
<script>
  $( function() {
    $( "#basketball" ).draggable();
    $( "#badminton" ).draggable();
  } );
</script>
<!-- <script>
  $( function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
  </script> -->
@endsection

@extends('layouts.app')


@section('content')

<script src="/gunesh/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/gunesh/bootstrap/dist/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row">
		<table class="table color-table primary-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>A Varinati</th>
                                            <th>Ingilis Dili Imtahani</th>
                                            
                                            <th></th>
                                            <th>10 Dəqiqə Qaldı</th>



                                        </tr>
                                    </thead>
                                    </table>
                                    @foreach($test as $tes)
                                    <div class="col-md-12">
                                    	<h3>1 &nbsp; {{$tes->title}} </h3><br>
                                    	<form action="/test/check" method="POST">

                                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                     <input type="hidden" name="id" value="{{$tes->id}}">

                                    	<div class="checkbox checkbox-circle">
                                            <input name="answer" value="a" class="a" id="checkbox8" type="checkbox">
                                            <label for="checkbox8">A){{$tes->a}} </label>
                                        </div> 
                                        <br>
                                        <div class="checkbox checkbox-circle">
                                            <input  name="answer" value="b" class="b" id="checkbox7" type="checkbox">
                                            <label for="checkbox7">B){{$tes->b}}</label>
                                        </div> 
                                        <br>
                                        <div class="checkbox checkbox-circle">
                                            <input name="answer" value="c"  class="c " id="checkbox66" type="checkbox">
                                            <label for="checkbox66">C){{$tes->c}}</label>
                                        </div> 
                                        <br>
                                        <div class="checkbox checkbox-circle">
                                            <input name="answer" value="d"  class="d" id="checkbox5" type="checkbox" >
                                            <label for="checkbox5"> D){{$tes->d}} </label>
                                        </div> 
                                        <br>
                                        <input type="submit" name="">
                                        </form>
                                    </div>
                                    @endforeach
                                    Növbəti Sual>>>>
                                   
	</div>
</div>

<!-- js -->
<script type="text/javascript">
 


    $(document).ready(function(){
    $(".a").click(function(){
    	 if (this.checked) {
    $(".b").attr("disabled", true);
    $(".c").attr("disabled", true);
    $(".d").attr("disabled", true);


  
  } else {
  
      $(".b").removeAttr("disabled");
      $(".c").removeAttr("disabled");
      $(".d").removeAttr("disabled");

  }
  // b ya keciremm


 // $(".b").css({"cursor":"not-allowed"});
 // $(".c").css({"cursor":"not-allowed"});

 // $(".d").css({"pointer-events": "none;"});

    // $( ".b" ).addClass( "disabled" );
    // $( ".c" ).addClass( "disabled" );
    // $( ".d" ).addClass( "disabled" );
    // $(".b").attr("disabled", true);
    });

  
});
  // b ya keciremm


    $(document).ready(function(){
    $(".b").click(function(){
    	 if (this.checked) {
    $(".a").attr("disabled", true);
    $(".c").attr("disabled", true);
    $(".d").attr("disabled", true);


  
  } else {
  
      $(".a").removeAttr("disabled");
      $(".c").removeAttr("disabled");
      $(".d").removeAttr("disabled");

  }
 
    });
  

  
});
  // c ya keciremm  
   $(document).ready(function(){
    $(".c").click(function(){
    	 if (this.checked) {
    $(".a").attr("disabled", true);
    $(".b").attr("disabled", true);
    $(".d").attr("disabled", true);


  
  } else {
  
      $(".a").removeAttr("disabled");
      $(".b").removeAttr("disabled");
      $(".d").removeAttr("disabled");

  }
 
    });
  

  
});
  // d ya keciremm
   $(document).ready(function(){
    $(".d").click(function(){
    	 if (this.checked) {
    $(".a").attr("disabled", true);
    $(".c").attr("disabled", true);
    $(".b").attr("disabled", true);


  
  } else {
  
      $(".a").removeAttr("disabled");
      $(".c").removeAttr("disabled");
      $(".b").removeAttr("disabled");

  }
 
    });
  

  
});
  // c ya keciremm  
</script>
@stop

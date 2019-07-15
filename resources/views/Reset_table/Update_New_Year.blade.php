@extends('layouts.app')

@section('content')

<div class="container">
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a><br><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
             <div class="card">
                    <div class="card-header">Reset Table</div><br><br>
                    


                    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/style7.css" rel="stylesheet" /> 
<div class="container">
	<div class="row">
	    

        <div class="col-md-12">
	        <h3>Welcome To Reset System for new Academic Year</h3>
	    </div>
	    <div class="col-md-12">
	        <div class="lisitemap-section">
    		<ul>
    			<li><a>01) first update the all Levels</a></li>
    			<li><a>02) Then add the new Students to the system </a></li>
    		
          <div class="card-body">

    
<a href="{{ route('update.level') }}"><button href="atts_1s"  type="submit" class="btn btn-danger" title="Delete Atts 1S" onclick="return confirm(&quot;Update the levels?&quot;)">Update All the Levels</button>
             
           
             
  </div>
    		</ul>
		</div>
	    </div>
	   
		
	</div>
</div>
                    
                    </div>
                    </div>
                    </div>
                    </div>
                    @endsection
 
    


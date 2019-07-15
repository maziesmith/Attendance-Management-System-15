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
	        <h3>Reset for new semester update</h3>
	    </div>
	    <div class="col-md-12">
	        <div class="lisitemap-section">
    		<ul>
    			<li><a>01) First get the report/summary of poor attendance in level</a></li>
    			<li><a>02) Then Backup the old attendance data</a></li>
    			<li><a>03) After that  reset the old table sheet</a></li>
    			<li><a>04) Then add the new subject data instead of old subject data using the edit button</a></li>
    			<li><a>05) Finally view the new attendance sheet</a></li>
				
                      
					  
    		</ul>
		</div>
	    </div>

        <div class="col-md-12">
	        <h3>Reset for new acadamic year update</h3>
	    </div>
	    <div class="col-md-12">
	        <div class="lisitemap-section">
    		<ul>
    			<li><a>01) Finish the first 3 steps like semester update</a></li>
    			<li><a>02) Then click the update the new academic year button</a></li>
    			<li><a>03) Then update the levels and enter the new students</a></li>
                        <li><a>04) Finally edit subject and see the new attendance sheet</a></li><br>
				<div class="caption" class="pull-left"><a href="{{ url('/table__course__1s__students/reset') }}" class="btn btn-primary icon  pull-right">Start Update Now</a></div>
    			
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
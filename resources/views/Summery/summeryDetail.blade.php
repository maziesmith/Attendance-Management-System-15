@extends('layouts.app')

@section('content')

<div class="container">
     <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a><br><br>
    <div class="row justify-content-center">
        
        <div class="col-md-12">
             <div class="card">
                 
                    <div class="card-header">Reset Table</div><br><br>
                    
<div class="container">
	<div class="row">
	    <div class="col-md-12">
                <form action="/Final_Sumarry_Report" method="post">	
                    @csrf
	       <label1> 01) Date (Today) : 
                   <input type = "date" name = "DateToday" required="true" >
                </label1>  <br><br></li>
                              
                <label2> 02) Name of Department Head : 
                   <input type = "text" name = "DepartmentHead" required="true"  >
                </label2><br><br>
                
                <label2> 03) ECE Year : 
                   <input type = "text" name = "ECE" required="true" pattern="[0-9]{4}"   >
                </label2><br> <br> 
               
                <label3>04) Semester :
                        <select name = "Semester" required="required" >
                            <option value = "" > ..Please choose one option.. </option>
                            <option value = "Semester -  I" > Semester -  I </option>
                            <option value = "Semester -  II" >Semester -  II </option>
                        </select>
                  
               </label3>
               
                <br> <br>
                
                 <label1> 05) Attendance mark until : 
                   <input type = "date" name = "AttendanceDate" required="true"   >
                </label1>  <br><br>

    			  <button type="submit" name ="save" value="save" class="btn btn-primary icon  pull-right">Get Summary Now</button>
                </form><br><br>
                          </div>
                    </div>
                    </div></div>
                    </div>
                    </div></div>
                    @endsection
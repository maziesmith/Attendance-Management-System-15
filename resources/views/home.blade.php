@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="css/style1.css" rel="stylesheet" />  
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-9">
             <div class="card">
                    <div class="card-header">Option</div><br><br>
                    <div class="text-center">



                   
<!------ Include the above in your HEAD tag ---------->
<link href="css/style3.css" rel="stylesheet" /> 
@can('isAdmin')

<div class="container">
	

<div class="container-fluid" id="inventory">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                 
            
 
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Admin Panel</h2>
    </div>
    <ul class="row">

    <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/adminStudentView') }}">Individual Student Attendance</a></h3>
            
          </div>
      </li>

      <li class="col-12 col-md-6 col-lg-6">
          
          
          
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/1s_attendance') }}">Add Attendance</a></h3>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/table__course__1s__students') }}">View Attendance</a></h3>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/userPermission') }}">Add Users</a></h3>
            
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/table_-lecture') }}">Lecturer Table</a></h3>
            
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/atts_1s') }}">Student Table</a></h3>
            
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-6">
          <div class="cnt-block equal-hight" style="height: 100px;">
            
            <h3><a href="{{ url('/updateS') }}">Reset Table</a></h3>
            
          </div>
      </li>
      
      
    </ul>
  </div>
</section>
</div>


<!-- Inventory - END -->
</div>
@endcan

@can('isStudent')

<link href="css/style3.css" rel="stylesheet" />  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
        <h2>Logged in as Student</h2>
    </div>
    <ul class="row">
      <li class="col-10 col-md-6 col-lg-5">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure> 
            <h3><a>
            @foreach($data as $data1)
            {{ $data1->name }}
            @endforeach

            @foreach($dat as $dat1)
            {{ $dat1->name }}
            @endforeach

            @foreach($da as $da1)
            {{ $da1->name }}
            @endforeach

            @foreach($d as $d1)
            {{ $d1->name }}
            @endforeach

            @foreach($infor as $d1)
            {{ $d1->name }}
            @endforeach

            @foreach($info as $d1)
            {{ $d1->name }}
            @endforeach

            @foreach($inf as $d1)
            {{ $d1->name }}
            @endforeach

            @foreach($in as $d1)
            {{ $d1->name }}
            @endforeach

            @foreach($i as $d1)
            {{ $d1->name }}
            @endforeach
    
            </a></h3>
            
             <a>
            @foreach($data as $data1)
            {{ $data1->Reg_No }}
            @endforeach

            @foreach($dat as $dat1)
            {{ $dat1->Reg_No }}
            @endforeach

            @foreach($da as $da1)
            {{ $da1->Reg_No }}
            @endforeach

            @foreach($d as $d1)
            {{ $d1->Reg_No }}
            @endforeach

            @foreach($infor as $d1)
            {{ $d1->Reg_No }}
            @endforeach

            @foreach($info as $d1)
            {{ $d1->Reg_No }}
            @endforeach

            @foreach($inf as $d1)
            {{ $d1->Reg_No }}
            @endforeach

            @foreach($in as $d1)
            {{ $d1->Reg_No }}
            @endforeach

            @foreach($i as $d1)
            {{ $d1->Reg_No }}
            @endforeach
        
        
            </a>
 
          </div>
      </li>
      <li>
      <a href="{{ url('/student') }}" title="View"><button class="btn btn-primary "><i  aria-hidden="true"></i>View Attendance -> </button></a>
      </li>
                
      
    </ul>
  </div>
</section>
  @endcan
  
  		
		<!--Lecturer View-->
<!--Lecturer View-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style3.css" rel="stylesheet" />  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@can('isLecturer')

<section class="our-webcoderskull padding-lg">
  <div class="container" align = "center">
    <div class="row heading heading-icon" align = "center">
        <h2>Logged in as a Lecturer</h2>
    </div>

    <ul class="row" align = "center" >
    <div class="container" align = "center">
      <li class="col-10 col-md-6 col-lg-6"  align = "center">
          <div class="cnt-block equal-hight" style="height: 349px;" align ="center" >
          
            <figure><img  align = "center" src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=" "></figure>
            <h3>

            <br><br>

            @foreach($Ldata as $ld)
            {{ $ld->name }}
            @endforeach
              -
            @foreach($Ldata as $ld)
            {{ $ld->RegistrationNo }}
            @endforeach
             </h3>
          </div>
        <a href="{{ url('/LecturerViewS') }}" class="btn btn-success btn" title="Edit Profile">
            <i class="fa fa-plus" aria-hidden="true"></i> S-COURSE</a>
        <a href="{{ url('/LecturerViewG') }}" class="btn btn-success btn" title="Edit Profile">
            <i class="fa fa-plus" aria-hidden="true"></i> G-COURSE</a>
          </div> 
            
            </h3>
          </div>
      </li>
      </ul>
  </div>
  </section>

 @endcan



                
<!--Head Of the Department-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/style3.css" rel="stylesheet" />  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@can('isHeadOfTheDepartment')

<section class="our-webcoderskull padding-lg">
  <div class="container" align = "center">
    <div class="row heading heading-icon" align = "center">
        <h2>Logged in as a Head Of The Deparment</h2>
    </div>

    <ul class="row" align = "center" >
    <div class="container" align = "center">
      <li class="col-10 col-md-6 col-lg-6"  align = "center">
          <div class="cnt-block equal-hight" style="height: 349px;" align ="center" >
          
          <figure><img align = "center" src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3>

            <br><br>

            @foreach($Ldata as $ld)
            {{ $ld->name }}
            @endforeach
              -
            @foreach($Ldata as $ld)
            {{ $ld->RegistrationNo }}
            @endforeach
             </h3>
             </div>
          <a href="{{ url('/HeadOfTheDepartmentS') }}" class="btn btn-success btn" title="Edit Profile">
            <i class="fa fa-plus" aria-hidden="true"></i> S-COURSE</a>
          <a href="{{ url('/HeadOfTheDepartmentG') }}" class="btn btn-success btn" title="Edit Profile">
            <i class="fa fa-plus" aria-hidden="true"></i> G-COURSE</a>
        </div>
            
            </h3>
          </div>
      </li>
      </ul>
  </div>
  </section>



     
                    
                    
 

@endcan  
  
  
    </div>
</div>
    </div>
    </div>
                    </div>
</div>
    </div>
    </div>
@endsection
 
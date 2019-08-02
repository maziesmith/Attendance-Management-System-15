@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=>
                      
                                        
  <br><br>
  @foreach($data as $data1)
                            @endforeach
               <div class="card">
                    <div class="card-header">Attendance table of course </div>
                    <div class="card-body">

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
    
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/style4.css" rel="stylesheet" />  

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section>
<div class="container">

	
		<div class="row mbr-justify-content-center">
        <div class="col-lg-12 mbr-col-md-10">
                <div class="wrap">
                <div class="cnt-block equal-hight">
            <img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt="">
            </div>
                    <div class="text-wrap vcenter">
                        <h1 class="mbr-fonts-style mbr-bold mbr-section-title8 display-8">Name :
                        @foreach($data as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->name }}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->name }}
                        @endforeach
                        
                         </h1>
                        <p class="mbr-fonts-style text1 mbr-text display-6"> 
                        @foreach($data as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->Reg_No }}
                        @endforeach
                        
                        </p>
                    </div>
                </div>
            </div>
        <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                        @foreach($abc as $data1)
                        {{ $data1->name}}
                        @endforeach
                        
                        </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                        @foreach($abd as $data1)
                        {{ $data1->name}}
                        @endforeach
                       
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage1}}
                        @endforeach
                        
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                            @foreach($abe as $data1)
                        {{ $data1->name}}
                        @endforeach
                      
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage2}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                            @foreach($abf as $data1)
                        {{ $data1->name}}
                        @endforeach
                        
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage3}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                   
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                            @foreach($abg as $data1)
                        {{ $data1->name}}
                        @endforeach
                    
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage4}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                   
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                            @foreach($abh as $data1)
                        {{ $data1->name}}
                        @endforeach
                       
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage5}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                            @foreach($abi as $data1)
                        {{ $data1->name}}
                        @endforeach
                        
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage6}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                            <span>
                            @foreach($abj as $data1)
                        {{ $data1->name}}
                        @endforeach
                            </span>
                        </h2>
                        <h1><p class="mbr-fonts-style text1 mbr-text display-6">
                        @foreach($data as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($dat as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($da as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($d as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($infor as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($info as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($inf as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($in as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        @foreach($i as $data1)
                        {{ $data1->precentage7}}
                        @endforeach
                        %
                        </p></h1>
                    </div>
                </div>
            </div>

            

            
        </div>

</div>

</section>        
                  
                 
           
        <div class="panel-footer">
            
        </div>
         </div>
 
        
         </div>
      </div> 
    </div> 
    </div>
             </div>
     </div>
 
        
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu</button></a>
<a href="{{ url('/table__course__3s__students') }}" title="Go back to main menu"><button class="btn btn-primary "><i class="fa fa-arrow-left" aria-hidden="true"></i>Attendance Menu  </button></a>                            
                     
                                        
  <br><br>

               <div class="card">
                    <div class="card-header">Attendance table of course {{$data->name}} </div>
                    <div class="card-body">
    
    <table class="table">
                    <thead>
                        <tr class="tr btn-dark">
                            
    <th>Course Code :{{$data->code}}  </th>
    <th>Course Name :{{$data->name}}</th>
    <th>date :{{$SingleData->date}}</th>
    <th>Start_Time :{{$SingleData->Start_Time}}</th>
    <th>End_Time :{{$SingleData->End_Time}}</th>
    <th>Hall :{{$SingleData->hall}}</th>
    <th>No of Lectures :{{$SingleData->nooflectures}} </th>  
    
     </tr>
                    </thead>  </table>
    
      
                        <form method="GET" action="{{ route('3s_sub1.3s_sub1.index_3S_sub1', $data->id ) }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form><br><br>

 

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Registration   No</th>
                            <th>Name</th>
                            
                            <th>Lecture attend</th>
                            <th>Percentage</th>
                         
                        </tr>
                    </thead>
                    <tbody>


 @foreach($atts as $att)
 <tr>

         @if( $att->precentage <$items->precentage)                         
                            <td style="background: red">{{ $att->id }}</td>
                            <td style="background: red">{{ $att->Reg_No }}</td>
                            <td style="background: red">{{ $att->name }}</td>
                          
                            <td style="background: red">{{ $att->lectureattend }}</td>
                            <td style="background: red">{{ $att->precentage }}%</td>
                                
         @else
                            <td>{{ $att->id }}</td>
                            <td>{{ $att->Reg_No }}</td>
                            <td>{{ $att->name }}</td>
                           
                            <td>{{ $att->lectureattend }}</td>
                            <td style="background: ">{{ $att->precentage }}%</td>
         @endif  
   

                   </tr>       
                    @endforeach
                    </tbody>
                </table>
                   
            </div>
        </div>
            
           
                  <a id = "r"></a>
                 
           
        <div class="panel-footer">
            {!! $atts->render() !!}
        </div>
         </div>
 
        
         </div>
      </div> 
    </div> 
    </div>
             </div>
     </div>
 
        
@endsection
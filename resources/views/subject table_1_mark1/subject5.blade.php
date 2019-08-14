@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>
                      <a href="{{ url('/1s_attendance') }}" title="Go back to main menu"><button class="btn btn-primary "><i class="fa fa-arrow-left" aria-hidden="true"></i>Attendance Menu  </button></a>                        
  <br><br>
 
                <div class="card">
                    <div class="card-header">Attendance table of course {{$data->name}}</div>
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
   
    <table class="table">
                    <thead>
                        <tr class="tr btn-dark">
    
    <th>Course Code :{{$data->code}}  </th>
    <th>Course Name :{{$data->name}}</th>
 
     </tr>
                    </thead>  </table>
    
     <font color="red">*All students default mark as a present</font><br><br>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">
               <form  method="post" action="/attendance_mark4S1">
                                    @csrf    
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Registration No</th>
                            <th>Name</th>
                            <th>Attendance</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($atts as $att)
                     @if( $att->is_saved4==0)
                        <tr>
                           <td>{{ $att->id }}</td>
                            <td>{{ $att->Reg_No }}</td>
                            <td>{{ $att->name }}</td>
                            
                            <td>
                              <input type="checkbox"  name="my_checkbox4[]"  value="{{$att->id}}">
                                                        @else
                                                         @if($att->attend_mark4==1)
                                                           <td>{{ $att->id }}</td>
                                                        <td style="background: Teal">{{ $att->Reg_No }}</td>
                                                        <td style="background: Teal">{{ $att->name }}</td>
                                                        <td style="background: Teal">Not Attend</td>
                                                        @else
                                                        <td>{{ $att->id }}</td>
                                                        <td>{{ $att->Reg_No }}</td>
                                                        <td>{{ $att->name }}</td>
                                                        <td>Attend</td>
                                                         @endif
                                                         @endif                                
                                 
                            </td>
                                
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                  @if( $att->is_saved4==0)
                                         <button type="submit" class="btn btn-primary"> save</button>  
                                     @endif                    
                     </form>  
                                     @if( $att->is_saved4==1)
                                            <a href="{{ route('tharu4S1', $att->id ) }}" class="btn btn-primary" title="Edit Atts">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">reset</span>
                                        </a> 
                                     @endif
            </div>
        </div>
            
           
            
                  <a id = "r"></a>
           
        <div class="panel-footer">
            {!! $atts->render() !!}
        </div>
         </div> <table class="table">
             
                    <thead>
                        <tr class="tr btn-dark">
                           <th> 
                                @if( $att->is_saved4==1)
                               <form class="form-horizontal" method="post" action="{{ route('hour4.index', $data->id ) }}" >  
        {{-- <label style="text-align: center;  position: relative ; left:3%" ><b>Hours :</b> :</label>
        <input type="number"  name="name" placeholder="Enter lecture hours"  name="hour" minlength="1" maxlength="200"  max="10" min="1" required="true"  style="background-color:yellow; text-align: center;  position: relative ; left:3%" >    
       
        
        <button class="btn btn-primary" type="submit" name="submit2"  style="position: relative ; left:26%  ">submit the attendance </button> --}}
        <label style="text-align: center;  position: relative ; left:3%" ><b>Date :</b> :</label>
        <input type="date" placeholder="YYYY-MM-DD"  name="date" required="true"  pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" style="text-align: center;  position: relative ; left:3%" >                                                
    <label style="text-align: center;  position: relative ; left:3%" ><b>Start Time :</b> :</label>
        <input type="time" name="ST" required="true"  style="text-align: center;  position: relative ; left:3%" >
    <label style="text-align: center;  position: relative ; left:3%" ><b>End Time :</b> :</label>
        <input type="time"  name="ET" required="true"  style="text-align: center;  position: relative ; left:3%" >
    <label style="text-align: center;  position: relative ; left:3%" ><b>Hall :</b> :</label>
        <select value="hall" name = "hall" style="text-align: center;  position: relative ; left:3%">
            <option value = "CUL-1"> CUL-1 </option>
            <option value = "CUL-2"> CUL-2 </option>
            <option value = "Lab-1"> Lab-1 </option>
            <option value = "P1"> P1 </option>
            <option value = "other"> other </option>
        </select> 
        
        <button class="btn btn-primary" type="submit" name="submit2"  style="position: relative ; left:7%  ">submit the attendance </button>       
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form> </th>
   
                          
                        </tr>
                    </thead>  </table> 
        @endif
  
         </div>
      </div> 
    </div> 
    </div>
             </div>
     </div>
 
       
@endsection



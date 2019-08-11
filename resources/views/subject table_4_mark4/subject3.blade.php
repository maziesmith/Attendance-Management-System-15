@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>
                      <a href="{{ url('/4s_attendance') }}" title="Go back to main menu"><button class="btn btn-primary "><i class="fa fa-arrow-left" aria-hidden="true"></i>Attendance Menu  </button></a>                        
  <br><br>
  @foreach($data as $data1)
                            @endforeach
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

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                           
                            <th>Registration No</th>
                            <th>Name</th>
                            <th>Attendance</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($att4s as $att)
                        <tr>
                            
                            <td>{{ $att->Reg_No }}</td>
                            <td>{{ $att->name }}</td>
                            
                            <td>
                            @if($att->attend_mark2 )
                                 
                                 <a href="{{ route('atts_4s.att4s.edit2s', $att->id ) }}"  title="change the attendance" ><button class="btn btn-danger "><i class="fa fa-arrow-left" aria-hidden="true"></i>Not Attended </button></a> 
                                
                            @else
                              <a href="{{ route('atts_4s.att4s.edit2s', $att->id ) }}"  title="change the attendance" ><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>  Attended</button></a> 
                                
                            @endif 
                            
                   
                            </td>
                           
                            
                            <td>
                                
                           
                            </td>
                                
                        </tr>
                        
                     
                    @endforeach
                      
                    </tbody>
                </table>
                   
   
                
            </div>
        </div>
         
            
                  <a id = "r"></a>
           
        <div class="panel-footer">
            {!! $att4s->render() !!}
        </div>
         </div>
        
        @if( $att4s->currentpage()==$att4s->lastPage())
 <table class="table">
                    <thead>
                        <tr class="tr btn-dark">
                           <th>  <form class="form-horizontal" method="post" action="{{ route('hours4s.index', $data->id ) }}" >  
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
        
        <button class="btn btn-primary" type="submit" name="submit2"  style="position: relative ; left:15%  ">submit the attendance </button><input type="hidden" name="_token" value="{{ csrf_token() }}">
        
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


@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                  <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a href="{{ url('/table__course__1g__students/reset') }}" title="EditData"><button class="btn btn-danger "><i class="fa fa-arrow-left" aria-hidden="true"></i>General CS student course table </button></a>
                     <a href="{{ url('/table__course__1s__students/reset') }}" title="EditData"><button class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>Direct CS  student course table</button></a>
                      <a href="{{ url('/update') }}" title="EditData"><button class="btn btn-danger" style="background-color:purple; text-align: center;  position: relative ; left:22%"><i class="fa fa-arrow-left" aria-hidden="true" ></i>Update to new academic year</button></a>

                     <br><br>
                     <a href="{{ url('/table__course__1g__students/reset') }}" title="EditData"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level->level}} </button></a>
                     <a href="{{ url('/table__course__g__students/reset') }}" title="EditData"><button class="btn btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level1->level}}</button></a>
                      <a href="{{ url('/table__course__3g__students/reset') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level2->level}} </button></a>
                       <a href="{{ url('/table__course__3m__students/reset') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level3->level}}</button></a>
                        <a href="{{ url('/table__course__4m__students/reset') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level4->level}} </button></a>

                     
                     
                </div><br>
                    <div class="card">
                    <div class="card-header">Table Course of {{$level->level}} Students</div>
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
     <div class="panel panel-default">

        <div class="panel-heading clearfix">

        </div></div>
    
      <form class="form-horizontal" method="post" action="{{ route('table__course__s__students.table__course__s__students.precentage1') }}" >  
        <label style="text-align: center;  position: relative ; left:3%" ><b>Poor attendance percentage :</b> :</label>
        <input type="number"  name="name"  name="hour" value="{{$items->precentage}}" minlength="1" maxlength="200" required="true"  min="0" max="100" style="background-color:yellow; text-align: center;  position: relative ; left:3%" >    
       
        
        <button class="btn btn-primary" type="submit" name="submit2"  style="position: relative ; left:6%  ">Change  </button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                 <a href="{{route('atts1g.backup')}}" class="btn btn-success" title="get the back up" style="position: relative ; left:39%">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Summary </span>
                                            
                                           <a href="{{route('finalBackup1')}}" class="btn btn-success" title="get the back up" style="position: relative ; left:22%">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Backup </span>
                                        </a> 
                                            
                                            <a href="{{route('reset1')}}" class="btn btn-danger" title="reset the table" onclick="return confirm(&quot;Reset the all subjects in this level?&quot;)"  style="position: relative ; left:34%">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Reset </span>
                                        </a>
                

                
    </form> 
    
    
    
      
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                 <table class="table table-responsive ">
                     <table class="table">
                    <thead>
                        <tr>
                           
                            <th>Code</th>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Lecture_id</th>
                           
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tableCourseSStudentsObjects as $tableCourseSStudents)
                        <tr>
                         
                            <td>{{ $tableCourseSStudents->code }}</td>
                            <td>{{ $tableCourseSStudents->name }}</td>  
                            <td>{{ $tableCourseSStudents->Level }}</td>
                            <td>{{ $tableCourseSStudents->Lecture_id }}</td>
                      
                       
                            
                            <td>

                                      
                                
                                    
                                        
                                        <a href="{{ route('table__course__1g__students.table__course__1g__students.edit4', $tableCourseSStudents->id ) }}" class="btn btn-primary" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Edit</span>
                                        </a>
                                        
                                        
                                    </div>

                                </form>
                                
                            </td>
                        </tr>     
                    @endforeach
                    </tbody>
                </table>
                 

            </div>
        </div>

        <div class="panel-footer">
        
        </div>
        
      
    
    </div>
    </div></div></div></div>
@endsection

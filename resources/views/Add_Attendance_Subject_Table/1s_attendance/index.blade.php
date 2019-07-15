@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                  <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                     <a href="{{ url('/1g_attendance') }}" title="EditData"><button class="btn btn-primary "><i class="fa fa-arrow-left" aria-hidden="true"></i>General CS attendance table </button></a>
                     <a href="{{ url('/1s_attendance') }}" title="EditData"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>Direct CS  attendance table</button></a>
                     
                      <br><br>
                     
                     <a href="{{ url('/1s_attendance') }}" title="EditData"><button class="btn btn-danger "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level->level}}  </button></a>
                     <a href="{{ url('/2s_attendance') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level1->level}}  </button></a>
                     <a href="{{ url('/3s_attendance') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level2->level}}  </button></a>
                     <a href="{{ url('/4s_attendance') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level3->level}}  </button></a>
                     &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
                     
                     
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
      
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                 <table class="table table-responsive ">
                     <table class="table">
                    <thead>
                        <tr>
                          
                            <th>Code</th>
                            <th>Name</th>
                            
                         
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tableCourseSStudentsObjects as $tableCourseSStudents)
                        <tr>
                            
                            <td>{{ $tableCourseSStudents->code }}</td>
                            <td>{{ $tableCourseSStudents->name }}</td>
                           
                          
                            
                            <td>

                                <form method="POST" action="{!! route('hour4.index', $tableCourseSStudents->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    
                                <a href="{{ route('1s_mark1.1s_mark1.index', $tableCourseSStudents->id ) }}" class="btn btn-primary" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Add Attendance</span>
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

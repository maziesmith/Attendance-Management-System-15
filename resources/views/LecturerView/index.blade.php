@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3><b><i>Course Details</i></b></h3></div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>CourseCode</th>
                                        
                                        <th>Level</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->coursename }}</td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->level }}</td>
                                        <td>

                                        @if($item->level=="1S")
                                        <a href="{{ route('1s_sub1.1s_sub1.index_1S_sub1', $item->idcourse ) }}" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="2S")
                                        <a href="{{ route('2s_sub1.2s_sub1.index_2S_sub1', $item->idcourse ) }}" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="3S")
                                        <a href="{{ route('3s_sub1.3s_sub1.index_3S_sub1', $item->idcourse ) }}" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="4S")
                                        <a href="{{ route('4s_sub1.4s_sub1.index_4S_sub1', $item->idcourse ) }}" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="1G")
                                        <a href="#" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="2G")
                                        <a href="#" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="3G")
                                        <a href="#" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="3M")
                                        <a href="#" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif
                                        @if($item->level=="4M")
                                        <a href="#" class="btn btn-warning" title="Edit Table  Course  S  Students">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">View Attendance</span>
                                        </a>
                                        @endif


                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                
                            </table>
                            
                        </div>
                        </div>
                        </div>
                    </div>
                       
           
        </div>
  
    
                       
            
@endsection


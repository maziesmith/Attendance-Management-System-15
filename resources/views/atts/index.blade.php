@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=>
                       <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                
                     <a href="{{ url('/atts_1gs') }}" title="EditData"><button class="btn btn-primary "><i class="fa fa-arrow-left" aria-hidden="true"></i>General CS student course table </button></a>
                     
                     <a href="{{ url('/atts_1s') }}" title="EditData"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i>Direct CS  student course table</button></a>
                       <a href="{{ url('/table__course__1s__students') }}" title="EditData"><button class="btn btn-danger" style="background-color:purple; text-align: center;  position: relative ; left:22%"><i class="fa fa-arrow-left" aria-hidden="true" ></i>Update the Courses</button></a>
                     
                     <br><br>
                      <a href="{{ url('/atts_1s') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level->level}} </button></a>
                     <a href="{{ url('/atts') }}" title="EditData"><button class="btn btn-danger "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level1->level}} </button></a>
                     <a href="{{ url('/atts_3s') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level2->level}} </button></a>
                     <a href="{{ url('/atts_4s') }}" title="EditData"><button class="btn btn-success "><i class="fa fa-arrow-left" aria-hidden="true"></i>{{$level3->level}} </button></a>
                     
                     <br>
                     
   <br>

            </div>
                 <div class="card">
                    <div class="card-header">Table of {{$level1->level}} students</div>
                    <div class="card-body">
                         <div class="panel panel-default">

        <div class="panel-heading clearfix">
 <div class="panel-body panel-body-with-table">
            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('atts.atts.create') }}" class="btn btn-success" title="Create New Atts">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">Add new</span>
                </a>
            </div>

        </div>
         
        <form method="GET" action="{{ url('/atts') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                             </div></div>
                       <br>
                             
    
             @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
     
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table ">
                    <thead>
                        <tr>
                            
                            <th>Registration  No</th>
                            <th>Name</th>
                         

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($attsObjects as $atts)
                        <tr>
                           
                            <td>{{ $atts->Reg_No }}</td>
                            <td>{{ $atts->name }}</td>
                            

                            <td>

                                <form method="POST" action="{!! route('atts.atts.destroy', $atts->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                       
                                        <a href="{{ route('atts.atts.edit', $atts->id ) }}" class="btn btn-primary" title="Edit Atts">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">Edit</span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Atts" onclick="return confirm(&quot;Delete the Students?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true">Delete</span>
                                        </button>
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
            {!! $attsObjects->render() !!}
</div>
        
       
     </div>
                </div>
            </div>
        </div>
    
@endsection
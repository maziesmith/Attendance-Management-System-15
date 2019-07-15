@extends('layouts.app')

@section('content')
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      </div><br>
                   

                <div class="card">
                    <div class="card-header">Set User Permission</div>
                    <div class="card-body">
                    <a href="{{ url('/userPermission/addnew') }}" class="btn btn-success btn" title="Add New Table_Lecture">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                        
                       
                        

                        <form method="GET" action="{{ url('/userPermission') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
      <br>
      <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>name</th>
                                        <th>RegistrationNo</th>
                                        <th>UserType</th>
                                        
                                        <th>email</th>
                                        <th>IsConfirmed</th>

                                        <th>Action</th>
                                        
                                       
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->RegistrationNo}}</td>
                                        <td>{{ $item->UserType }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{$item->IsConfirmed}}</td>
                                        <td>
                                            @if(!$item->IsConfirmed)
                                            <a href = '/Active/{{$item->id}}' class="btn btn-warning" >notActive</a>
                                            @else
                                            <a href = '/notActive/{{$item->id}}' class="btn btn-success" >Active</a>
                                            @endif

                                            <form method="POST" action="{{ url('userPermission' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                                            
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
    </div>
@endsection

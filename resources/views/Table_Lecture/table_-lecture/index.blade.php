@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                 <div class=>
                      <a href="{{ url('/home') }}" title="Go back to main menu"><button class="btn btn-warning "><i class="fa fa-arrow-left" aria-hidden="true"></i>Admin Menu  </button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    
                    
                    
                </div><br>
                <div class="card">
                    <div class="card-header">Table of lecturer</div>
                    <div class="card-body">
                         <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <div class="btn-group btn-group-sm pull-right" role="group">
                        <a href="{{ url('/table_-lecture/create') }}" class="btn btn-success btn-sm" title="Add New Table_Lecture">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
            </div>
                        <form method="GET" action="{{ url('/table_-lecture') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Lecturer ID</th><th>Name</th><th>Email</th><th>Action</th>
                                </thead>
                                <tbody>
                                @foreach($table_lecture as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->Email }}</td>
                                        <td>
                                            <a href="{{ url('/table_-lecture/' . $item->id) }}" title="View Table_Lecture"><button class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/table_-lecture/' . $item->id . '/edit') }}" title="Edit Table_Lecture"><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                           
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $table_lecture->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

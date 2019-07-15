@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Table_Lecturer {{ $table_lecture->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/table_-lecture') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/table_-lecture/' . $table_lecture->id . '/edit') }}" title="Edit Table_Lecture"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('table_lecture' . '/' . $table_lecture->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                           
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $table_lecture->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $table_lecture->name }} </td></tr><tr></tr><tr><th> Email </th><td> {{ $table_lecture->Email }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

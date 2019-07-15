@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    
                           <div class="card-header">Edit Course G {{ $tableCourseGStudent->id }}</div>
                  <div class="card-body">  
           
                <a href="{{ url('/table__course__1g__students/reset')}}" class="btn btn-warning" title="Show All Table  Course  G  Student">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true">Back</span>
                </a><br><br>
                 
        

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('table__course__g__students.table__course__g__student.update', $tableCourseGStudent->id) }}" id="edit_table__course__g__student_form" name="edit_table__course__g__student_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('table__course__g__students.form', [
                                        'tableCourseGStudent' => $tableCourseGStudent,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
        </div>        
    </div>
            </div>        
    </div>
        

@endsection
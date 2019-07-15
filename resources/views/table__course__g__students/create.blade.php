@extends('layouts.app')

@section('content')

<div class="container">
      
       <div class="row justify-content-center">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Table Course G</div>
                    <div class="card-body">
                <a href="{{ route('table__course__g__students.table__course__g__student.index') }}" class="btn btn-warning" title="Show All Table  Course  G  Student">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true">Back</span>
                </a><br><br>
           
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('table__course__g__students.table__course__g__student.store') }}" accept-charset="UTF-8" id="create_table__course__g__student_form" name="create_table__course__g__student_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('table__course__g__students.form', [
                                        'tableCourseGStudent' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Create">
                    </div>
                </div>

            </form>

        </div>
    </div>
                </div>
                            </div>
 </div>

@endsection



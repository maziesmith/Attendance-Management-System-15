@extends('layouts.app')

@section('content')
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                  <div class="card-header">Table Course G {{ $tableCourseGStudent->id }}</div>
                    <div class="card-body">

 <form method="POST" action="{!! route('table__course__g__students.table__course__g__student.destroy', $tableCourseGStudent->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('table__course__g__students.table__course__g__student.index') }}" class="btn btn-warning" title="Show All Table  Course  G  Student">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true">Back</span>
                    </a>    
                    
                    <a href="{{ route('table__course__g__students.table__course__g__student.edit', $tableCourseGStudent->id ) }}" class="btn btn-primary " title="Edit Table  Course  G  Student">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true">Edit</span>
                    </a>

                   
                </div>
 </form><br>
          <div class="table-responsive">
                            <table class="table">
            <tr>                    </tbody>
            <th>Code</th>
            <td>{{ $tableCourseGStudent->code }}</td></tr>
            <tr>
            <th>Name</th>
            <td>{{ $tableCourseGStudent->name }}</td></tr>
            <tr>
            <th>Level</th>
            <td>{{ $tableCourseGStudent->Level }}</td></tr>
            </tbody>
                   </table>
               </div>
        </div>
      </div>
    </div>
</div>
</div>

@endsection
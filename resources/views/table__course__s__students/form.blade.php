
<div class="form-group {{ $errors->has('code') ? 'has-error' : '' }}">
    <label for="code" class="col-md-2 control-label">Code</label>
    <div class="col-md-10">
        <input class="form-control" name="code" type="text" id="code" value="{{ old('code', optional($tableCourseSStudents)->code) }}" maxlength="191" placeholder="Enter code here..."  required="true">
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($tableCourseSStudents)->name) }}" maxlength="191" placeholder="Enter name here..."   required="true">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>




<div class="form-group {{ $errors->has('Lecture_id') ? 'has-error' : '' }}">
    <label for="Lecture_id" class="col-md-2 control-label">Lecturer_id</label>
    <div class="col-md-10">

    <select id = "Lecture_id" name ="Lecture_id" class="form-control">
        <option class = "form-control" name = "Lecture_id" maxlength = "191">{{old('Lecture_id',optional($tableCourseSStudents)->Lecture_id)}}</option>
        @foreach($dat as $data)
        <option class = "form-control" name = "Lecture_id" maxlength = "191" value = "{{$data->id}}">({{$data->id}}) - {{$data->name}}</option>
        @endforeach
    </select>
        
        {!! $errors->first('Lecture_id', '<p class="help-block">:message</p>') !!}
              
        </div>
    </div>
        
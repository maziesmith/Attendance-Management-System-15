<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($table_lecture->name) ? $table_lecture->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
    <label for="Email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="Email" type="text" id="Email" value="{{ isset($table_lecture->Email) ? $table_lecture->Email : ''}}" >
    {!! $errors->first('Email', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

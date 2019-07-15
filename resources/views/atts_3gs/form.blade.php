
<div class="form-group {{ $errors->has('Reg_No') ? 'has-error' : '' }}">
    <label for="Reg_No" class="col-md-2 control-label">Reg  No</label>
    <div class="col-md-10">
        <input class="form-control" name="Reg_No" type="text" id="Reg_No" value="{{ old('Reg_No', optional($atts3gs)->Reg_No) }}" minlength="1" maxlength="20" required="true" placeholder="Enter reg  no here...">
        {!! $errors->first('Reg_No', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($atts3gs)->name) }}" minlength="1" maxlength="60" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>


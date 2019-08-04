<div class="form-group {{ $errors->has('lectureattend') ? 'has-error' : '' }}">
    <label for="lectureattend" class="col-md-2 control-label">Lectureattend</label>
    <div class="col-md-10">
        <input class="form-control" name="lectureattend" type="number" id="lectureattend" value="{{ old('lectureattend', optional($atts)->lectureattend) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter lectureattend here...">
        {!! $errors->first('lectureattend', '<p class="help-block">:message</p>') !!}
    </div>
</div>

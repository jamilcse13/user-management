@if(isset($teacher) && $teacher)
    {!! Form::model($teacher, ['url' => 'teachers/' . $teacher->id, 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'teachers', 'class' => 'form-horizontal']) !!}
@endif

<div class="form-group">
    {!! Form::label('name', 'Name', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-7">
        {!! Form::text('name', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        <span class="text-danger">{!! $errors->first('name') !!}</span>
    </div>
</div>

<div class="form-group">
    {!! Form::label('father_name', 'Father Name', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-7">
        {!! Form::text('father_name', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        <span class="text-danger">{!! $errors->first('father_name') !!}</span>
    </div>
</div>

<div class="form-group">
    {!! Form::label('mother_name', 'Mother Name', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-7">
        {!! Form::text('mother_name', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        <span class="text-danger">{!! $errors->first('mother_name') !!}</span>
    </div>
</div>

<div class="form-group">
    {!! Form::label('dob', 'Date of Birth', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-7">
        {!! Form::date('dob', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        <span class="text-danger">{!! $errors->first('dob') !!}</span>
    </div>
</div>

<div class="form-group">
    {!! Form::label('joining_date', 'Joining Date', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-7">
        {!! Form::date('joining_date', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        <span class="text-danger">{!! $errors->first('joining_date') !!}</span>
    </div>
</div>

<div class="form-group">
    {!! Form::label('dept', 'Department', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-7">
        {!! Form::text('dept', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
        <span class="text-danger">{!! $errors->first('dept') !!}</span>
    </div>
</div>

<div class="form-group">
    <div class="col-md-7 col-md-offset-3">
        {!! Form::submit('Save',['class' => 'btn btn-primary']) !!}
        <a data-dismiss="modal" href="{{ url('teachers') }}" class="btn btn-danger">Cancel</a>
    </div>
</div>

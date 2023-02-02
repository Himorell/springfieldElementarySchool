<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_students') }}
            {{ Form::select('id_students',$students, $score->id_students, ['class' => 'form-control' . ($errors->has('id_students') ? ' is-invalid' : ''), 'placeholder' => 'Id Students']) }}
            {!! $errors->first('id_students', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mark') }}
            {{ Form::text('mark', $score->mark, ['class' => 'form-control' . ($errors->has('mark') ? ' is-invalid' : ''), 'placeholder' => 'Mark']) }}
            {!! $errors->first('mark', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quarter') }}
            {{ Form::text('quarter', $score->quarter, ['class' => 'form-control' . ($errors->has('quarter') ? ' is-invalid' : ''), 'placeholder' => 'Quarter']) }}
            {!! $errors->first('quarter', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subject') }}
            {{ Form::text('subject', $score->subject, ['class' => 'form-control' . ($errors->has('subject') ? ' is-invalid' : ''), 'placeholder' => 'Subject']) }}
            {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('course') }}
            {{ Form::text('course', $score->course, ['class' => 'form-control' . ($errors->has('course') ? ' is-invalid' : ''), 'placeholder' => 'Course']) }}
            {!! $errors->first('course', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('academicYear') }}
            {{ Form::text('academicYear', $score->academicYear, ['class' => 'form-control' . ($errors->has('academicYear') ? ' is-invalid' : ''), 'placeholder' => 'Academicyear']) }}
            {!! $errors->first('academicYear', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

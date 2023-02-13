<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('academicYear') }}
            {{ Form::text('academicYear', $score->academicYear, ['class' => 'form-control' . ($errors->has('academicYear') ? ' is-invalid' : ''), 'placeholder' => 'academicYear']) }}
            {!! $errors->first('academicYear', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('course') }}
            {{ Form::text('course', $score->course, ['class' => 'form-control' . ($errors->has('course') ? ' is-invalid' : ''), 'placeholder' => 'Course']) }}
            {!! $errors->first('course', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('subject') }}
            {{ Form::text('subject', $score->subject, ['class' => 'form-control' . ($errors->has('subject') ? ' is-invalid' : ''), 'placeholder' => 'Subject']) }}
            {!! $errors->first('subject', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_students') }}
            {{ Form::select('id_students', $students, $score->id_students, ['class' => 'form-control' . ($errors->has('id_students') ? ' is-invalid' : ''), 'placeholder' => 'Id Students']) }}
            {!! $errors->first('id_students', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('quarter') }}
            {{ Form::text('quarter', $score->quarter, ['class' => 'form-control' . ($errors->has('quarter') ? ' is-invalid' : ''), 'placeholder' => 'Quarter']) }}
            {!! $errors->first('quarter', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mark 1') }}
            {{ Form::text('mark1', $score->mark1, ['id' => 'mark1','class' => 'form-control' . ($errors->has('mark1') ? ' is-invalid' : ''), 'placeholder' => 'Mark1']) }}
            {!! $errors->first('mark1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mark 2') }}
            {{ Form::text('mark2', $score->mark2, ['id' => 'mark2','class' => 'form-control' . ($errors->has('mark2') ? ' is-invalid' : ''), 'placeholder' => 'Mark2']) }}
            {!! $errors->first('mark2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mark 3') }}
            {{ Form::text('mark3', $score->mark3, ['id' => 'mark3','class' => 'form-control' . ($errors->has('mark3') ? ' is-invalid' : ''), 'placeholder' => 'Mark3']) }}
            {!! $errors->first('mark3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('average', 'Average') }}
            {{ Form::text('average', $score->average, ['class' => 'form-control' . ($errors->has('average') ? '
            is-invalid' : ''), 'placeholder' => 'Average']) }}
            {!! $errors->first('average', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary"onclick="return confirm('Are you sure to submit this score? {{ $score->alertName}} - ID {{$score->id }}')">Submit</button>
    </div>
</div>

<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_evento') }}
            {{ Form::text('id_evento', $eventestudent->id_evento, ['class' => 'form-control' . ($errors->has('id_evento') ? ' is-invalid' : ''), 'placeholder' => 'Id Evento']) }}
            {!! $errors->first('id_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_estudiante') }}
            {{ Form::text('id_estudiante', $eventestudent->id_estudiante, ['class' => 'form-control' . ($errors->has('id_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Estudiante']) }}
            {!! $errors->first('id_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
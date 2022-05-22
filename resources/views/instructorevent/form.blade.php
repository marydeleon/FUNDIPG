<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_evento') }}
            {{ Form::text('id_evento', $instructorevent->id_evento, ['class' => 'form-control' . ($errors->has('id_evento') ? ' is-invalid' : ''), 'placeholder' => 'Id Evento']) }}
            {!! $errors->first('id_evento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_instructor') }}
            {{ Form::text('id_instructor', $instructorevent->id_instructor, ['class' => 'form-control' . ($errors->has('id_instructor') ? ' is-invalid' : ''), 'placeholder' => 'Id Instructor']) }}
            {!! $errors->first('id_instructor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

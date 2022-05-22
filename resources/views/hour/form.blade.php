<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $hour->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha' ]) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio') }}
            {{ Form::text('inicio', $hour->inicio, ['class' => 'form-control'  . ($errors->has('inicio') ? ' is-invalid' : ''), 'placeholder' => 'Inicio']) }}
            {!! $errors->first('inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fin') }}
            {{ Form::text('fin', $hour->fin, ['class' => 'form-control' . ($errors->has('fin') ? ' is-invalid' : ''), 'placeholder' => 'Fin']) }}
            {!! $errors->first('fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

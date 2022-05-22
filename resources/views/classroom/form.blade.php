<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $classroom->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aforo_total') }}
            {{ Form::text('aforo_total', $classroom->aforo_total, ['class' => 'form-control' . ($errors->has('aforo_total') ? ' is-invalid' : ''), 'placeholder' => 'Aforo Total']) }}
            {!! $errors->first('aforo_total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aforo_restante') }}
            {{ Form::text('aforo_restante', $classroom->aforo_restante, ['class' => 'form-control' . ($errors->has('aforo_restante') ? ' is-invalid' : ''), 'placeholder' => 'Aforo Restante']) }}
            {!! $errors->first('aforo_restante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

            <div class="form-group">
                <label>Esta Disponible?</label>
                <Select name="diponibilidad" id="diponibilidad" class="form-control" required="required">
                    <option value="Disponible">Disponible </option>
                    <option value="No disponible">No disponible</option>

                </Select>
              </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
</div>

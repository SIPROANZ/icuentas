<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $ingresoscuenta->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $ingresoscuenta->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('cuenta') }}
            {{ Form::select('cuenta_id', $cuentas, $ingresoscuenta->cuenta_id, ['class' => 'form-control' . ($errors->has('cuenta_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Cuenta']) }}
            {!! $errors->first('cuenta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>

    <br>


    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
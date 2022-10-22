<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $pago->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto a abonar']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('cuentas') }}
            {{ Form::select('cuenta_id', $cuentas, $pago->cuenta_id, ['class' => 'form-control' . ($errors->has('cuenta_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una cuenta']) }}
            {!! $errors->first('cuenta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('bancos') }}
            {{ Form::select('banco_id', $bancos, $pago->banco_id, ['class' => 'form-control' . ($errors->has('banco_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un banco']) }}
            {!! $errors->first('banco_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>

    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
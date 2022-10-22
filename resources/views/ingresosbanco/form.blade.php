<div class="box box-info padding-1">
    <div class="box-body">
    <div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $ingresosbanco->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Ingrese el Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $ingresosbanco->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('Nombre del Banco') }}
            {{ Form::select('banco_id', $bancos, $ingresosbanco->banco_id, ['class' => 'form-control' . ($errors->has('banco_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Banco']) }}
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
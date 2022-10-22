<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('nombre del Banco') }}
            {{ Form::text('nombre', $banco->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('saldo') }}
            {{ Form::text('saldo', $banco->saldo, ['class' => 'form-control' . ($errors->has('saldo') ? ' is-invalid' : ''), 'placeholder' => 'Saldo']) }}
            {!! $errors->first('saldo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('tipo cambio') }}
            {{ Form::select('tipocambio', ['Bolivar' => 'Bolivares', 'Dolar' => 'Dolares'],$banco->tipocambio, ['class' => 'form-control' . ($errors->has('tipocambio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un tipo']) }}
            {!! $errors->first('tipocambio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
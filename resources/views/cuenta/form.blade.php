<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row">

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('nombre de la cuenta') }}
            {{ Form::text('nombre', $cuenta->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('monto base') }}
            {{ Form::text('montobase', $cuenta->montobase, ['class' => 'form-control' . ($errors->has('montobase') ? ' is-invalid' : ''), 'placeholder' => 'Monto base']) }}
            {!! $errors->first('montobase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('monto vigente') }}
            {{ Form::text('montovigente', $cuenta->montovigente, ['class' => 'form-control' . ($errors->has('montovigente') ? ' is-invalid' : ''), 'placeholder' => 'Monto vigente']) }}
            {!! $errors->first('montovigente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

        </div>


    </div>
   
    <br>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
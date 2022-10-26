<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $socio->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capital') }}
            {{ Form::text('capital', $socio->capital, ['class' => 'form-control' . ($errors->has('capital') ? ' is-invalid' : ''), 'placeholder' => 'Capital']) }}
            {!! $errors->first('capital', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('utilidad') }}
            {{ Form::text('utilidad', $socio->utilidad, ['class' => 'form-control' . ($errors->has('utilidad') ? ' is-invalid' : ''), 'placeholder' => 'Utilidad']) }}
            {!! $errors->first('utilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
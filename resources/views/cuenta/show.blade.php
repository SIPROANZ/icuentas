@extends('layouts.app')

@section('template_title')
    {{ $cuenta->name ?? 'Show Cuenta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cuentas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cuenta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Montobase:</strong>
                            {{ $cuenta->montobase }}
                        </div>
                        <div class="form-group">
                            <strong>Montovigente:</strong>
                            {{ $cuenta->montovigente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

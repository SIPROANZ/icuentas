@extends('layouts.app')

@section('template_title')
    {{ $ingresoscuenta->name ?? 'Show Ingresoscuenta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingresoscuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresoscuentas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingresoscuenta->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Cuenta Id:</strong>
                            {{ $ingresoscuenta->cuenta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

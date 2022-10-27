@extends('layouts.app')

@section('template_title')
    {{ $ingresoscapitale->name ?? 'Show Ingresoscapitale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingresoscapitale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresoscapitales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingresoscapitale->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $ingresoscapitale->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Socio Id:</strong>
                            {{ $ingresoscapitale->socio_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

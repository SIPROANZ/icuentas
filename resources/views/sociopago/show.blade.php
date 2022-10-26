@extends('layouts.app')

@section('template_title')
    {{ $sociopago->name ?? 'Show Sociopago' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sociopago</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sociopagos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $sociopago->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $sociopago->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Socio Id:</strong>
                            {{ $sociopago->socio_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

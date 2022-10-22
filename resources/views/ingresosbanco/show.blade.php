@extends('layouts.app')

@section('template_title')
    {{ $ingresosbanco->name ?? 'Show Ingresosbanco' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ingresosbanco</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresosbancos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                    <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $ingresosbanco->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingresosbanco->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Banco Id:</strong>
                            {{ $ingresosbanco->banco_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

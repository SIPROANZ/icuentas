@extends('layouts.app')

@section('template_title')
    Create Ingresoscuenta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Ingresos a Cuenta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ingresoscuentas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ingresoscuenta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.app')

@section('template_title')
    Ingresoscuenta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingresos a cuenta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingresoscuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Ingreso a cuenta') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Concepto</th>
										<th>Monto</th>
										<th>Nombre de la cuenta</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingresoscuentas as $ingresoscuenta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $ingresoscuenta->concepto }}</td>
											<td>{{ $ingresoscuenta->monto }}</td>
											<td>{{ $ingresoscuenta->cuenta->nombre }}</td>

                                            <td>
                                                <form action="{{ route('ingresoscuentas.destroy',$ingresoscuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingresoscuentas.show',$ingresoscuenta->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingresoscuentas.edit',$ingresoscuenta->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ingresoscuentas->links() !!}
            </div>
        </div>
    </div>
@endsection

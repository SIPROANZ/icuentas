@extends('layouts.app')

@section('template_title')
    Banco
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Bancos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bancos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Banco') }}
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
                                        
										<th>Nombre del Banco</th>
										<th>Saldo</th>
										<th>Tipo de cambio</th>

                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bancos as $banco)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $banco->nombre }}</td>
											<td>{{ $banco->saldo }}</td>
											<td>{{ $banco->tipocambio }}</td>

                                            <td>
                                                <form action="{{ route('bancos.destroy',$banco->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bancos.show',$banco->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bancos.edit',$banco->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $bancos->links() !!}
            </div>
        </div>
    </div>
@endsection

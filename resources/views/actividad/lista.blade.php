@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 24px;">Usuarios</span>
                    <a href="{{route('unidadgeneral.create')}}" class="btn btn-primary btn-sm" style="float: right;">Nuevo Beneficiario</a>
                </div>

                <div class="card-body">      
                    <table id="tblGeneral" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre(s)</th>
                            <th scope="col">Apellido(s)</th>
                            <th scope="col">Documento</th>                            
                            <th scope="col">Centro de Vida- Grupo Organizado</th>                            
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $usuario->general_nombre }}</td>                               
                                <td>{{ $usuario->general_apellidos }}</td>                               
                                <td>{{ $usuario->general_documento }}</td>                                
                                <td>{{ $usuario->centro_vida->nombre }}</td>                                
                                <td>
                                  <a href="{{route('unidadgeneral.show', $usuario)}}" class="btn btn-success btn-sm">Kit</a>                                    
                                  <a href="{{route('unidadgeneral.ver', $usuario)}}" class="btn btn-success btn-sm">Ver</a>                                    
                                  <a href="{{route('unidadgeneral.edit', $usuario)}}" class="btn btn-success btn-sm">Editar</a>                                    
                                  <form action="{{ route('unidadgeneral.destroy', $usuario) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta Seguro?')">Borrar</button>
                                    </form>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- fin card body -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

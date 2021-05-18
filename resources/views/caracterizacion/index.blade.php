@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 24px;">Caracterización</span>
                    <a href="{{route('caracterizacion.create')}}" class="btn btn-primary btn-sm" style="float: right;">Nuevo</a>
                </div>

                <div class="card-body">      
                <table id="tblCaracterizacion" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre(s) y Apellido(s)</th>
                            <th scope="col">Documento</th>                            
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($caracterizaciones as $caracterizacion)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $caracterizacion->nombres." ".$caracterizacion->apellidos }}</td>                               
                                <td>{{ $caracterizacion->documento }}</td>                               
                                <td>
                                <a href="{{route('caracterizacion.show', $caracterizacion->id)}}" class="btn btn-success btn-sm">Ver</a>                                    
                                {{-- <a href="{{route('unidadgeneral.show', $usuario)}}" class="btn btn-success btn-sm">Kit</a>                                    
                                  <a href="{{route('unidadgeneral.edit', $usuario)}}" class="btn btn-success btn-sm">Editar</a>                                    
                                  <form action="{{ route('unidadgeneral.destroy', $usuario) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta Seguro?')">Borrar</button>
                                    </form> --}}                                   
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

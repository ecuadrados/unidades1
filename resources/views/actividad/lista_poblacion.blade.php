
@extends('admin.layout')

@section('content')
<!-- listado de Actividades -->
@if(count($poblacion)>0)
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Listado de Población</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">      
                <table id="tblActividadPoblacion" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre(s) y Apellido(s)</th>                                               
                        <th scope="col">Sexo</th>
                        <th scope="col">Documento</th>
                        <th scope="col">edad</th>                      
                        <th scope="col">Telefono</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Victima</th>
                        <th scope="col">Discapacidad</th>
                        <th scope="col">Unidad Comunera</th>
                        <th scope="col">Lugar Actividad</th>
                        <th scope="col">Barrio</th>
                        <th scope="col">Actividad</th>
                        <th scope="col">Meta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($poblacion as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nombres_completos }}</td>
                            <td>{{ $item->sexo }}</td>
                            <td>{{ $item->documento }}</td>
                            <td>{{ $item->edad }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->celular }}</td>
                            <td>{{ $item->victima }}</td>
                            <td>{{ $item->discapacidad }}</td>
                            <td>{{ $item->unidad_comunera }}</td>
                            <td>{{ $item->lugar_actividad }}</td>
                            <td>{{ $item->barrio->nombre }}</td>
                            <td>{{ $item->actividad->nombre }}</td>
                            <td>{{ $item->actividad->meta->nombre }}</td>
                            {{--<td>                                                                     
                              <a href="{{route('actividad.show', $item)}}" class="btn btn-success btn-sm">Población</a>
                              <a href="{{route('actividad.show', $item)}}" class="btn btn-success btn-sm">Estadisicas Población</a>
                              <a href="{{route('contratista.edit', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('actividad.destroy', $item) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta Seguro?')">Borrar</button>
                                </form> 
                            </td>--}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- fin card body -->
            </div>
        </div>
    </div>
</div>
@else
}<h3>Esta actividad no tiene población</h3>
@endif 
@endsection
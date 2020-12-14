
@extends('admin.layout')

@section('content')
<div class="callout callout-info">
  <h5> Meta:</h5>
  {{ $meta->nombre }}
</div>
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Insertar Actividad</h3>
    <div class="card-tools">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->  
  <div class="card-body">
        
            <form action="{{ route('actividad.store') }}" class="d-inline" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Actividad</label>
                    <textarea name="nombre" class="form-control" id="nombre" placeholder="Ingrese Actividad para esta meta" rows="3" cols="40"></textarea>
                    <input type="hidden" id="meta_id" name="meta_id" value="{{$meta->id}}">
                  </div>                   
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>                      
  </div>
  <!-- /.card-body --> 
</div>
<!-- listado de Actividades -->
@if(count($actividad)>0)
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Lista de Actividades para esta meta</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <div class="card-body">      
                <table id="tblActividad" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Actividad</th>                                               
                        <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($actividad as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nombre }}</td>
                            <td>                                                                     
                            <a href="{{route('actividad.show', $item)}}" class="btn btn-success btn-sm">Crear Población</a>
                              <a href="{{route('actividad.verpoblacion', $item)}}" class="btn btn-success btn-sm">Ver Población</a>
                              {{-- <a href="{{route('contratista.edit', $item)}}" class="btn btn-warning btn-sm">Editar</a>--}}
                                <form action="{{ route('actividad.destroy', $item) }}" class="d-inline" method="POST">
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
@else
  <h3>Esta meta no tiene actividades</h3>
@endif
@endsection
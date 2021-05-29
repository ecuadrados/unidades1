
@extends('admin.layout')

@section('content')
<div class="callout callout-info">
  <h4> Meta: {{ $meta->nombre }}</h4>

  <div class="row">
    <div class="col-md-3">
      <h5><span class="badge badge-success">Cauntificación Meta: {{ $meta->valor }}</span></h5>     
    </div>
    <div class="col-md-3">
      <h5><span class="badge badge-success">Cauntificación Meta x Año: {{ ceil($meta->valor / 4) }}</span></h5>
    </div>
    <div class="col-md-3">
      <h5><span class="badge badge-success">Meta Actual: {{ $sumPoblacion }}</span></h5>
    </div>
    <div class="col-md-3">
      <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:{{  $sumPoblacion * 100 / $meta->valor}}%" aria-valuemax="100"></div>
      </div>
    </div>
    <!-- Meta Sugerida -->
    <div class="col-md-3">
      <h5><span class="badge badge-success">Meta Sugerida: {{ $meta->meta_sugerida }}</span></h5>     
    </div>
    <div class="col-md-3">
      <h5><span class="badge badge-success">Meta Sugerida x Año: {{ ceil($meta->meta_sugerida / 4) }}</span></h5>
    </div>
    <div class="col-md-3">
      <h5><span class="badge badge-success">Meta Actual: {{ $sumPoblacion }}</span></h5>
    </div>
    <div class="col-md-3">
      <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:{{  $sumPoblacion * 100 / $meta->valor}}%" aria-valuemax="100"></div>
      </div>
    </div>
  </div>
  @if($meta->observacion !="")
  <div class="row">
    <div class="col-md-12">
      <p><strong>Observación:</strong> {{ $meta->observacion }}</p>
    </div>
  </div>
   @endif
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
                            <a href="{{route('actividad.listarpoblacion', $item)}}" class="btn btn-success btn-sm">Listar Población</a>
                              <a href="{{route('actividad.verpoblacion', $item)}}" class="btn btn-success btn-sm">Estadistica Población</a>
                              {{-- <a href="{{route('contratista.edit', $item)}}" class="btn btn-warning btn-sm">Editar</a>--}}
                              @if ( @Auth::user()->hasRole('infancia') || @Auth::user()->hasRole('admin')  )
                                <form action="{{ route('actividad.destroy', $item) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta Seguro?')">Borrar</button>
                                </form> 
                              @endif
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
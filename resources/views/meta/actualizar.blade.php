@extends('admin.layout')

@section('content')

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Actualizar Meta</h3>
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              @if ( session('mensaje') )
                    <div class="alert alert-success mt-2">{{ session('mensaje') }}</div>
              @endif
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('meta.update', $meta->id)}}">
              @csrf
              @method('PUT')
              @if( !$errors->isEmpty() )
                  <div class="alert alert-danger">
                      @foreach ( $errors->all() as $error )
                          <strong>{{$error}}</strong><br>
                      @endforeach
                  </div>
              @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Meta</label>
                    <textarea name="nombre" class="form-control" id="nombre" placeholder="Ingrese Meta" rows="3" cols="40">{{ $meta->nombre }}</textarea>
                  </div> 
                  <div class="form-group">
                    <label for="nombre">Cuantificación de meta</label>
                    <input type="number" min="1" name="valor" class="form-control" id="valor" value="{{ $meta->valor }}" placeholder="Ingrese Cuantificación de meta">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Meta Sugerida</label>
                    <input type="number" min="1" name="meta_sugerida" class="form-control" id="meta_sugerida" value="{{ $meta->meta_sugerida }}" placeholder="Ingrese Meta Sugerida">
                  </div>
                  <div class="form-group">
                    <label>Programa</label>
                        <select class="form-control" name="programa" id="programa" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Primera Infancia"  {{ ($meta->programa == "Primera Infancia")? 'selected':'' }}>Primera Infancia</option>
                          <option value="Infancia Protección" {{ ($meta->programa == "Infancia Protección")? 'selected':'' }}>Infancia Protección</option> 
                          <option value="Lúdica y Participación" {{ ($meta->programa == "Lúdica y Participación")? 'selected':'' }}>Primera Infancia</option>
                          <option value="Fortalecimiento Familiar" {{ ($meta->programa == "Fortalecimiento Familiar")? 'selected':'' }}>Fortalecimiento Familiar</option>                        
                        </select>                    
                    </div>
                    <div class="form-group">
                      <label>Observación</label>
                      <textarea name="observacion" class="form-control" id="observacion" rows="3" cols="40">{{ $meta->observacion }}</textarea>
                    </div>
                  <!-- <div class="form-group">
                    <label for="contratista_fecha_inicio">Fecha</label>
                    <input type="date" name="fecha_meta" class="form-control" id="fecha_meta" required>
                  </div>               -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- container -->
</section>
@endsection
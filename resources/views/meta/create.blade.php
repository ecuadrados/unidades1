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
                <h3 class="card-title">Registrar Meta</h3>
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
              <form method="POST" action="{{route('meta.store')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nombre">Meta</label>
                    <textarea name="nombre" class="form-control" id="nombre" placeholder="Ingrese Meta" rows="3" cols="40"></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="nombre">Cuantificación de meta</label>
                    <input type="number" min="0" name="valor" class="form-control" id="valor" placeholder="Ingrese Cuantificación de meta">
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
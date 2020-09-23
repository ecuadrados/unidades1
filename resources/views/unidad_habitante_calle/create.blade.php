@extends('admin.layout')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar Datos</h3>
              </div>
             
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('unidadhabitantecalle.store')}}">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="contratista_nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre" required>
                  </div>
                  <div class="form-group">
                  <label>Tipo Documento</label>
                  <select class="form-control select2" name="tipo_documento" style="width: 100%;" required>
                        <option value="">--- Selecione Tipo Documento ---</option>
                        <option value="Cédula">Cédula</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Registro Civil">Registro Civil</option>
                   </select>
                </div>
                  <div class="form-group">
                    <label for="contratista_cedula">Documento</label>
                    <input type="text" name="documento" class="form-control" id="documento" placeholder="Ingrese Documento" required>
                  </div>
                  <div class="form-group">
                    <label for="contratista_fecha_inicio">Fecha Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" required>
                  </div>
                  <div class="form-group">
                    <label for="contratista_nombre">Edad</label>
                    <input type="text" name="edad" class="form-control" id="edad" placeholder="Ingrese Edad">
                  </div>
                  <div class="form-group">
                    <label for="contratista_nombre">Dirección</label>
                    <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingrese Dirección">
                  </div>
                  <div class="form-group">
                    <label for="contratista_nombre">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese Teléfono">
                  </div>
                <!-- /.card-body -->
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
      @endsection
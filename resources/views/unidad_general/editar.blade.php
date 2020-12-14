@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="card-header">
  <h3 class="card-title">Actualizar Usuarios</h3>
</div>
<div class="row">
        <form method="POST" action="{{route('unidadgeneral.update',$usuario->id)}}">
        @method('PUT')      
        @csrf
          <div class="col-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-general-tab" data-toggle="pill" href="#custom-tabs-three-general" role="tab" aria-controls="custom-tabs-three-general" aria-selected="true">Actualizar</a>
                  </li>                                   
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-general" role="tabpanel" aria-labelledby="custom-tabs-three-general-tab">
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="contratista_nombre">Nombre(s)</label>
                      <input type="text" name="general_nombre" class="form-control" id="general_nombre" placeholder="Ingrese Nombre" value="{{ $usuario->general_nombre }}" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="contratista_nombre">Apellido(s)</label>
                        <input type="text" name="general_apellidos" class="form-control" id="general_apellidos" placeholder="Ingrese Apellidos" value="{{ $usuario->general_apellidos }}" required>
                      </div>
                    <div class="form-group col-4">
                      <label>Tipo Documento</label>
                      <select class="form-control select2" name="general_tipo_documento" style="width: 100%;">
                        <option value="">--- Selecione Tipo Documento ---</option>
                        <option value="Cédula" @if ($usuario->general_tipo_documento == "Cédula" )
                            selected="selected" @endif>Cédula</option>
                        <option value="Tarjeta de Identidad"@if ($usuario->general_tipo_documento == "Tarjeta de Identidad" )
                            selected="selected" @endif>Tarjeta de Identidad</option>
                        <option value="Registro Civil"@if ($usuario->general_tipo_documento == "Registro Civil" )
                            selected="selected" @endif>Registro Civil</option>
                      </select>
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_cedula">Documento</label>
                      <input type="text" name="general_documento" class="form-control" id="general_documento" placeholder="Ingrese Documento" value="{{ $usuario->general_documento }}" required>
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_fecha_inicio">Fecha Nacimiento</label>
                      <input type="date" name="general_fecha_nacimiento" class="form-control" id="general_fecha_nacimiento" value="{{ $usuario->general_fecha_nacimiento }}">
                    </div>   
                    <div class="form-group col-4">
                      <label for="contratista_nombre">Dirección</label>
                      <input type="text" name="general_direccion" class="form-control" id="general_direccion" placeholder="Ingrese Dirección" value="{{ $usuario->general_direccion }}">
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_nombre">Teléfono</label>
                      <input type="text" name="general_telefono" class="form-control" id="general_telefono" placeholder="Ingrese Teléfono" value="{{ $usuario->general_telefono }}">
                    </div>                   
                    <div class="form-group col-4">
                  <label>Centro de Vida / Grupo Organizado</label>
                  <select class="form-control select2" name="general_centro_vida" style="width: 100%;" required>
                        <option value="">--- Selecione ---</option>
                          @foreach ($centroVida as $centro_vida)
                            <option value="{{ $centro_vida->id }}"
                            @if ($centro_vida->id == $usuario->centro_vida_id )
                            selected="selected"
                            @endif>{{ $centro_vida->nombre }}</option>>
                          @endforeach
                   </select>
                </div>                   
                    <div class="form-group col-6">
                      <label for="contratista_nombre">Nombre y Apellidos del Acudiente</label>
                      <input type="text" name="general_nombre_acudiente" class="form-control" id="general_nombre_acudiente" placeholder="Ingrese Nombre" value="{{ $usuario->general_nombre_acudiente }}">
                    </div>
                    <div class="form-group col-6">
                      <label for="contratista_cedula">Documento del Acudiente</label>
                      <input type="text" name="general_documento_acudiente" class="form-control" id="general_documento_acudiente" placeholder="Ingrese Documento" value="{{ $usuario->general_documento_acudiente }}">
                    </div>
                </div> 
                  <!-- row  -->                
                </div><!-- tab-pane fade  -->                                  
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        </div>
      </div>
      <!-- container -->
      @endsection
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
        <form method="POST" action="{{route('unidadgeneral.store')}}">
        <!-- <div class="form-group">
                    <label for="contratista_nombre">Edad</label>
                    <input type="text" name="edad" class="form-control" id="edad" placeholder="Ingrese Edad">
                  </div>     -->
              @csrf
          <div class="col-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-general-tab" data-toggle="pill" href="#custom-tabs-three-general" role="tab" aria-controls="custom-tabs-three-general" aria-selected="true">Generales</a>
                  </li>                 
                  <!-- <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-familiar-tab" data-toggle="pill" href="#custom-tabs-three-familiar" role="tab" aria-controls="custom-tabs-three-familiar" aria-selected="false">Composición Familiar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-psicosocial-tab" data-toggle="pill" href="#custom-tabs-three-psicosocial" role="tab" aria-controls="custom-tabs-three-psicosocial" aria-selected="false">Aspecto Psicosocial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-interes-tab" data-toggle="pill" href="#custom-tabs-three-interes" role="tab" aria-controls="custom-tabs-three-interes" aria-selected="false">Datos de Interes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-diferencial-tab" data-toggle="pill" href="#custom-tabs-three-diferencial" role="tab" aria-controls="custom-tabs-three-diferencial" aria-selected="false">Condición Diferencial</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-observaciones-tab" data-toggle="pill" href="#custom-tabs-three-observaciones" role="tab" aria-controls="custom-tabs-three-observaciones" aria-selected="false">Observaciones</a>
                  </li> -->
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-general" role="tabpanel" aria-labelledby="custom-tabs-three-general-tab">
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="contratista_nombre">Nombre(s)</label>
                      <input type="text" name="general_nombre" class="form-control" id="general_nombre" placeholder="Ingrese Nombre" required>
                    </div>
                    <div class="form-group col-4">
                        <label for="contratista_nombre">Apellido(s)</label>
                        <input type="text" name="general_apellidos" class="form-control" id="general_apellidos" placeholder="Ingrese Apellidos" required>
                      </div>
                    <div class="form-group col-4">
                      <label>Tipo Documento</label>
                      <select class="form-control select2" name="general_tipo_documento" style="width: 100%;">
                        <option value="">--- Selecione Tipo Documento ---</option>
                        <option value="Cédula">Cédula</option>
                        <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                        <option value="Registro Civil">Registro Civil</option>
                      </select>
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_cedula">Documento</label>
                      <input type="text" name="general_documento" class="form-control" id="general_documento" placeholder="Ingrese Documento" required>
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_fecha_inicio">Fecha Nacimiento</label>
                      <input type="date" name="general_fecha_nacimiento" class="form-control" id="general_fecha_nacimiento">
                    </div>   
                    <div class="form-group col-4">
                      <label for="contratista_nombre">Dirección</label>
                      <input type="text" name="general_direccion" class="form-control" id="general_direccion" placeholder="Ingrese Dirección">
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_nombre">Teléfono</label>
                      <input type="text" name="general_telefono" class="form-control" id="general_telefono" placeholder="Ingrese Teléfono">
                    </div>
                    <!-- <div class="form-group col-4">
                      <label for="contratista_fecha_inicio">Kit</label>
                      <br>
                        <input type="radio" id="kitSi" name="general_kit" value="Si">
                        <label for="vecindadSi">Si</label>
                        <input type="radio" id="kitNo" name="general_kit" value="No">
                        <label for="vecindadNo">No</label>
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_fecha_inicio">Fecha Kit</label>
                      <input type="date" name="general_kit_fecha" class="form-control" id="general_kit_fecha" required>
                    </div>   -->
                    <div class="form-group col-4">
                  <label>Centro de Vida / Grupo Organizado</label>
                  <select class="form-control select2" name="general_centro_vida" style="width: 100%;" required>
                        <option value="">--- Selecione ---</option>
                        @foreach ($centroVida as $centro_vida)
                            <option value="{{ $centro_vida->id }}">{{ $centro_vida->nombre }}</option>
                        @endforeach
                   </select>
                </div>
                    <!-- <div class="form-group col-4">
                      <label for="contratista_fecha_inicio">Nuevo Beneficiario</label>
                      <br>
                        <input type="radio" id="beneficiarioSi" name="general_nuevo_beneficiario" value="Si">
                        <label for="vecindadSi">Si</label>
                        <input type="radio" id="beneficiarioNo" name="general_nuevo_beneficiario" value="No">
                        <label for="vecindadNo">No</label>
                    </div> -->
                      <div class="form-group col-6">
                        <label for="contratista_nombre">Nombre y Apellidos del Acudiente</label>
                        <input type="text" name="general_nombre_acudiente" class="form-control" id="general_nombre_acudiente" placeholder="Ingrese Nombre">
                      </div>
                      <div class="form-group col-6">
                        <label for="contratista_cedula">Documento del Acudiente</label>
                        <input type="text" name="general_documento_acudiente" class="form-control" id="general_documento_acudiente" placeholder="Ingrese Documento">
                      </div>
                  </div> 
                  <!-- row  -->
                  <div class="row">
                    <!-- <div class="form-group col-4">
                      <label>Barrio</label>
                      <select class="form-control select2" name="barrio" style="width: 100%;">
                            <option value="">--- Selecione Barrio ---</option>
                            <option value="1">Blas de Lezo</option>
                            <option value="2">Chile</option>
                            <option value="3">Nuevo Bosque</option>
                      </select>
                    </div>                 -->
                                                       
                  </div>
                  <!-- row  -->
                </div><!-- tab-pane fade  -->                 
                  <!-- <div class="tab-pane fade" id="custom-tabs-three-familiar" role="tabpanel" aria-labelledby="custom-tabs-three-familiar-tab">
                     familiar
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-psicosocial" role="tabpanel" aria-labelledby="custom-tabs-three-psicosocial-tab">
                    <div class="row">
                      <div class="form-group col-12">
                        <label class="col-2">Salud: </label>
                        <input type="checkbox" name="mentales" value="Mentales">
                        <label for="mentales" style="margin-right: 1rem;"> Mentales</label>
                        <input type="checkbox" name="sustancias" value="Sustancias Psicoactivas">
                        <label for="sustancias"style="margin-right: 1rem;"> Sustancias Psicoactivas</label>
                        <input type="checkbox" name="fisicas" value="Enfermedades Fisicas">
                        <label for="fisicas"style="margin-right: 1rem;"> Enfermedades Fisicas</label>
                      </div>
                      <label class="col-2">Social: </label>
                      <div  class="form-group col-10">
                      <input type="checkbox" name="familiares" value="Problemas Familiares">
                        <label for="familiares" style="margin-right: 1rem;"> Problemas Familiares</label>
                      </div>
                      <label class="col-1">Cuales: </label>
                      <div class="form-group col-12">
                        <textarea name="textarea" rows="4" cols="100"></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-interes" role="tabpanel" aria-labelledby="custom-tabs-three-interes-tab">
                     interes
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-diferencial" role="tabpanel" aria-labelledby="custom-tabs-three-diferencial-tab">
                     diferencial
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-observaciones" role="tabpanel" aria-labelledby="custom-tabs-three-observaciones-tab">
                     observaciones
                  </div> -->
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
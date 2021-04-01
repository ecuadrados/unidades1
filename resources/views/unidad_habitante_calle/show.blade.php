@extends('admin.layout')

@section('content')
<div class="container-fluid">
  <div class="row">     
    <div class="col-12 col-md-12 col-sm-12">
      <div class="card card-primary card-outline card-tabs">
        <div class="card-header p-0 pt-1 border-bottom-0">
          <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-tabs-three-general-tab" data-toggle="pill" href="#custom-tabs-three-general" role="tab" aria-controls="custom-tabs-three-general" aria-selected="true">Generales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-tabs-three-escolaridad-tab" data-toggle="pill" href="#custom-tabs-three-escolaridad" role="tab" aria-controls="custom-tabs-three-escolaridad" aria-selected="false">Escolaridad</a>
            </li>
            <li class="nav-item">
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
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-three-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-three-general" role="tabpanel" aria-labelledby="custom-tabs-three-general-tab">
            <div class="row">
              <div class="form-group col-4">
                <label for="fecha_aplicacion">Fecha Aplicación:</label>
                {{$habitante->fecha_aplicacion}}
              </div>
              <div class="form-group col-8">
                <label for="zona">Zona de Intervención:</label>
                {{$habitante->zona}}
              </div>
            </div>
            <div class="row">
              <div class="form-group col-4">
                <label for="nombre">Nombre y Apellidos:</label>
                {{$habitante->nombre}}
              </div>
              <div class="form-group col-4">
                <label>Tipo Documento:</label>
                {{$habitante->tipo_documento}}            
            </div>
              <div class="form-group col-4">
              {{$habitante->documento}}                           
              </div>
            </div> 
            <!-- row  -->
            <div class="row">
            <div class="form-group col-4">
                <label for="sexo">Sexo:</label>
                {{$habitante->sexo}}                                          
              </div>
              <div class="form-group col-4">
                <label for="fecha_nacimiento">Fecha Nacimiento:</label>
                {{$habitante->fecha_nacimiento}}                                                          
              </div>
              <div class="form-group col-4">
                <label for="pais">País Nacimiento:</label>
                {{$habitante->pais}}                                                                        
              </div>
              <div class="form-group col-4">
                <label for="departamento">Departamento Nacimiento:</label>
                {{$habitante->departamento}}                                                                                        
              </div>
              <div class="form-group col-4">
                <label for="municipio">Municipio Nacimiento:</label>
                {{$habitante->municipio}}                                                                                                        
              </div>                                      
              <div class="form-group col-4">
                <label for="vecindad">Certificado de Vecindad:</label>
                {{$habitante->vecindad}}                                                                                                        
              </div>
            </div>
            <!-- row -->
            <div class="row">
            <div class="form-group col-4">
                <label for="tiempo">Tiempo Residencia:</label>
                {{$habitante->tiempo}}                                                                                                        
              </div>
              <div class="form-group col-4 col-md-4 col-sm-12">
                <label>Barrio Residencia:</label>
                {{$habitante->barrio}}                                                                                                                        
              </div>                  
              <div class="form-group col-4">
                <label for="sector">Sector Residencia:</label>
                {{$habitante->sector}}                                                                                                                        
              </div>
              <div class="form-group col-4">
                <label for="direccion">Dirección Residencia:</label>
                {{$habitante->direccion}}                                                                                                                        
              </div>
              <div class="form-group col-4">
              <label for="telefono">Teléfono:</label>
              {{$habitante->telefono}}                                                                                                                                    
              </div>                   
              <div class="form-group col-4">
                <label>Estado Civil:</label>
                {{$habitante->estado_civil}}                                                                                                                                    
              </div>
            </div>
            <!-- row  -->
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-escolaridad" role="tabpanel" aria-labelledby="custom-tabs-three-escolaridad-tab">
                <div class="row">
                  <div class="form-group col-4">
                    <label>Nivel Educativo:</label>
                    {{$habitante->escolaridad}}                                                                                                                                    
                </div>
                  <div class="form-group col-8">
                    <label for="otra_escolaridad">Cual:</label>
                    {{$habitante->otra_escolaridad}}                                                                                                                                                        
                  </div>
                </div> 
                <!-- row -->
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-familiar" role="tabpanel" aria-labelledby="custom-tabs-three-familiar-tab">
                                                                          <!-- row -->
            <table id="tblPoblacionHC" class="table table-bordered table-striped">
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Completo</th>                                               
                  <th scope="col">Edad</th>
                  <th scope="col">Ocupación</th>
                  <th scope="col">Escolaridad</th>
                  <th scope="col">Parentesco</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($habitantes_familiar as $habitante_familiar)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $habitante_familiar->nombre_apellido }}</td>                               
                    <td>{{ $habitante_familiar->edad }}</td> 
                    <td>{{ $habitante_familiar->ocupacion }}</td>                               
                    <td>{{ $habitante_familiar->grado_escolaridad }}</td>                               
                    <td>{{ $habitante_familiar->parentesco }}</td>                                                  
                </tr>
                @endforeach
              </tbody>
            </table>

            </div>
            <div class="tab-pane fade" id="custom-tabs-three-psicosocial" role="tabpanel" aria-labelledby="custom-tabs-three-psicosocial-tab">
              <div class="row">
                <div class="form-group col-12">
                  <label class="col-2">Salud: </label>
                  <label for="mentales" style="margin-right: 1rem;"> Mentales: {{ $habitante->mentales?"Si":"No" }}</label>
                  <label for="sustancias_psicoactivas"style="margin-right: 1rem;"> Sustancias Psicoactivas: {{ $habitante->sustancias_psicoactivas?"Si":"No" }}</label>
                  <label for="enfermedades_fisicas"style="margin-right: 1rem;"> Enfermedades Fisicas: {{ $habitante->enfermedades_fisicas?"Si":"No" }}</label>
                </div>
                <label class="col-2">Social: </label>
                <div  class="form-group col-10">
                  <label for="problemas_familiares" style="margin-right: 1rem;"> Problemas Familiares: {{ $habitante->problemas_familiares?"Si":"No" }}</label>
                </div>
                <label>Cuales Problemas Familiares: </label>
                <div class="form-group col-12">
                  {{ $habitante->cuales_problemas_familiares}}
                  </div>
              </div>
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-interes" role="tabpanel" aria-labelledby="custom-tabs-three-interes-tab">
                <div class="form-group col-4">
                  <label for="ingreso_mensual">Ingreso Mensual:</label>
                  {{ $habitante->ingreso_mensual}}
                </div>
                <div class="form-group col-6">
                  <label for="observaciones_economicas">Observaciones</label>
                  {{ $habitante->observaciones_economicas}}
                </div>
                <div class="form-group col-6">
                  <label for="aspecto_social">Aspecto Social</label>
                  {{ $habitante->aspecto_social}}
                </div>
                
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-diferencial" role="tabpanel" aria-labelledby="custom-tabs-three-diferencial-tab">
              <div class="row">
                <div class="form-group col-12">
                  <label class="col-2">Raza o etnia: </label>
                  {{ $habitante->etnia}}                
                </div>
                <label class="col-2">Discapacidad: </label>
                <div  class="form-group col-10">
                  {{ $habitante->intelectual}}                                
                </div>
                <label class="col-2">Orientación Sexual: </label>
                <div  class="form-group col-10">
                  {{ $habitante->orientacion_sexual}}                                                             
                </div>                      
              </div>
            </div>
            <div class="tab-pane fade" id="custom-tabs-three-observaciones" role="tabpanel" aria-labelledby="custom-tabs-three-observaciones-tab">
            <label>Observaciones Generales: </label>
              {{ $habitante->observaciones_generales}}                                                             
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>         
  </div>
</div>
      <!-- container -->
 @endsection
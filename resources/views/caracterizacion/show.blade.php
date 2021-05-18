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
              <a class="nav-link" id="custom-tabs-three-familiar-tab" data-toggle="pill" href="#custom-tabs-three-familiar" role="tab" aria-controls="custom-tabs-three-familiar" aria-selected="false">Composición Familiar</a>
            </li>                      
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="custom-tabs-three-tabContent">
            <div class="tab-pane fade show active" id="custom-tabs-three-general" role="tabpanel" aria-labelledby="custom-tabs-three-general-tab">           
            <div class="row">
              <div class="form-group col-4">
                <label for="nombre">Nombre y Apellidos:</label>
                {{$caracterizacion->nombres." ".$caracterizacion->apellidos}}
              </div>
              <div class="form-group col-4">
                <label>Tipo Documento:</label>
                {{$caracterizacion->tipo_documento}}            
            </div>
              <div class="form-group col-4">
              {{$caracterizacion->documento}}                           
              </div>
            </div> 
            <!-- row  -->
            <div class="row">
            <div class="form-group col-4">
                <label for="sexo">Edad:</label>
                {{$caracterizacion->edad}}                                          
              </div>
              <div class="form-group col-4">
                <label for="fecha_nacimiento">Genero:</label>
                {{$caracterizacion->genero}}                                                          
              </div>
              <div class="form-group col-4">
                <label for="pais">Dirección:</label>
                {{$caracterizacion->direccion}}                                                                        
              </div>
              <div class="form-group col-4">
                <label for="departamento">Barrio:</label>
                {{$caracterizacion->barrio}}                                                                                             
              </div>
              <div class="form-group col-4">
                <label for="municipio">Localidad:</label>
                {{$caracterizacion->localidad}}                                                                                                        
              </div>                                      
              <div class="form-group col-4">
                <label for="vecindad">Estrato:</label>
                {{$caracterizacion->estrato}}                                                                                                        
              </div>
            </div>
            <!-- row -->
            <div class="row">
            <div class="form-group col-4">
                <label for="tiempo">Celular:</label>
                {{$caracterizacion->celular}}                                                                                                        
              </div>
              <div class="form-group col-4 col-md-4 col-sm-12">
                <label>Otro Contacto:</label>
                {{$caracterizacion->otro_contacto}}                                                                                                                        
              </div>                  
              <div class="form-group col-4">
                <label for="sector">Email:</label>
                {{$caracterizacion->email}}                                                                                                                        
              </div>
              <div class="form-group col-4">
                <label for="direccion">Estado Civil:</label>
                {{$caracterizacion->estado_civil}}                                                                                                                        
              </div>
              <div class="form-group col-4">
              <label for="telefono">Condiciones de Viviendda:</label>
              {{$caracterizacion->condiciones_vivienda}}                                                                                                                                    
              </div>                   
              <div class="form-group col-4">
                <label>Tipo de Vivienda:</label>
                {{$caracterizacion->tipo_vivienda}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Cuartos:</label>
                {{$caracterizacion->cuantos_cuartos}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Hogares:</label>
                {{$caracterizacion->cuantos_hogares}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Servicios Públicos:</label>
                {{$caracterizacion->servicio_publico}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Agua:</label>
                {{$caracterizacion->agua}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Electricidad:</label>
                {{$caracterizacion->electricidad}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Gas:</label>
                {{$caracterizacion->gas}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Alcantarillado:</label>
                {{$caracterizacion->alcantarillado}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Internet:</label>
                {{$caracterizacion->internet}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Etnia:</label>
                {{$caracterizacion->etnia}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Discapacidad:</label>
                {{$caracterizacion->persona_discapacidad}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Victima:</label>
                {{$caracterizacion->victima_conflicto}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Joven Riesgo:</label>
                {{$caracterizacion->joven_riesgo}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Madre Cabeza de Hogar:</label>
                {{$caracterizacion->madre_cabeza}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Migrante Venezolano:</label>
                {{$caracterizacion->migrante_venezolano}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Certificado de Permanencia:</label>
                {{$caracterizacion->certificado_permanencia}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Nivel Academico:</label>
                {{$caracterizacion->nivel_academico}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Programa de Salud:</label>
                {{$caracterizacion->programa_salud}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Eps:</label>
                {{$caracterizacion->nombre_eps}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Sisben:</label>
                {{$caracterizacion->sisben}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Puntaje Sisben:</label>
                {{$caracterizacion->puntaje_sisben}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Observaciones:</label>
                {{$caracterizacion->observaciones}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Persona a Cargo:</label>
                {{$caracterizacion->personas_Cargo}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Cuantas Personas:</label>
                {{$caracterizacion->cuantas_persona}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Niños Escolaridad:</label>
                {{$caracterizacion->niños_Escolaridad}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Situacion Calle:</label>
                {{$caracterizacion->situacion_calle}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Consume Sustancias:</label>
                {{$caracterizacion->consume_sustancia}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Violancia Intrafamiliar:</label>
                {{$caracterizacion->violencia_intrafamiliar}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Pertenece a Organización:</label>
                {{$caracterizacion->pertenece_organizacion}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Empleado:</label>
                {{$caracterizacion->empleado}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Desempleado:</label>
                {{$caracterizacion->desempleado}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Trabajador Independiente:</label>
                {{$caracterizacion->trabajador_independiente}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Informal:</label>
                {{$caracterizacion->informal}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Formal:</label>
                {{$caracterizacion->formal}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Ideas de Negocio:</label>
                {{$caracterizacion->ideas_negocio}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Cual Idea:</label>
                {{$caracterizacion->cual_idea}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Emprendimiento:</label>
                {{$caracterizacion->emprendimiento}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Fortalecimiento:</label>
                {{$caracterizacion->fortalecimiento}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Programa Gubernamental:</label>
                {{$caracterizacion->programa_gubernamental}}                                                                                                                                    
              </div>
              <div class="form-group col-4">
                <label>Fecha de Encuesta:</label>
                {{$caracterizacion->fecha_encuesta}}                                                                                                                                    
              </div>
            </div>
            <!-- row  -->
            </div>            
            <div class="tab-pane fade" id="custom-tabs-three-familiar" role="tabpanel" aria-labelledby="custom-tabs-three-familiar-tab">
                                                                          <!-- row -->
            <table id="tblCaracterizacion" class="table table-bordered table-striped">
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Completo</th>                                               
                  <th scope="col">Tipo Documento</th>
                  <th scope="col">Documento</th>
                  <th scope="col">Genero</th>
                  <th scope="col">Eps</th>
                  <th scope="col">Regimen</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Parentesco</th>

                  </tr>
              </thead>
              <tbody>
                @foreach ($caracterizaion_familiar as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nombres." ".$item->apellidos }}</td>                               
                    <td>{{ $item->tipo_documento }}</td> 
                    <td>{{ $item->documento }}</td>                               
                    <td>{{ $item->genero }}</td>                               
                    <td>{{ $item->eps }}</td>   
                    <td>{{ $item->regimen }}</td>   
                    <td>{{ $item->edad }}</td>   
                    <td>{{ $item->parentesco }}</td>                                                                      
                </tr>
                @endforeach
              </tbody>
            </table>

            </div>
            {{--
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
            </div>--}}           
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>         
  </div>
</div>
      <!-- container -->
 @endsection
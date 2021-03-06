@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
        <form method="POST" action="{{route('caracterizacion.store')}}">
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
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-familiar-tab" data-toggle="pill" href="#custom-tabs-three-familiar" role="tab" aria-controls="custom-tabs-three-familiar" aria-selected="false">Vivienda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-psicosocial-tab" data-toggle="pill" href="#custom-tabs-three-psicosocial" role="tab" aria-controls="custom-tabs-three-psicosocial" aria-selected="false">Datos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-interes-tab" data-toggle="pill" href="#custom-tabs-three-interes" role="tab" aria-controls="custom-tabs-three-interes" aria-selected="false">Observación</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-diferencial-tab" data-toggle="pill" href="#custom-tabs-three-diferencial" role="tab" aria-controls="custom-tabs-three-diferencial" aria-selected="false">Nucleo Familiar</a>
                  </li>                  
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-general" role="tabpanel" aria-labelledby="custom-tabs-three-general-tab">
                  <div class="row">                                       
                    <div class="form-group col-4">
                      <label for="nombre">Nombre(s)</label>
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre(s)" required>
                    </div>
                    <div class="form-group col-4">
                      <label for="apellido">Apellido(s)</label>
                      <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese Apellido(s)" required>
                    </div>
                    <div class="form-group col-4">
                      <label>Tipo Documento</label>
                      <select class="form-control select2" name="tipo_documento" style="width: 100%;" required>
                            <option value="">--- Selecione Tipo Documento ---</option>
                            <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                            <option value="Registro Civil">Registro Civil</option>
                            <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                      </select>
                    </div>
                    <div class="form-group col-4">
                      <label for="contratista_cedula">Documento</label>
                      <input type="text" name="documento" class="form-control" id="documento" placeholder="Ingrese Documento" required>
                    </div>
                    <div class="form-group col-4">
                      <label for="edad">Edad</label>
                      <input type="number" min="1" name="edad" class="form-control" id="edad">
                    </div>
                    <div class="form-group col-4">
                      <label for="sexo">Sexo</label>
                      <br>
                        <input type="radio" id="femenino" name="sexo" value="Femenino">
                        <label for="femenino">Femenino</label>
                        <input type="radio" id="masculino" name="sexo" value="Masculino">
                        <label for="masculino">Masculino</label>
                    </div>
                    <div class="form-group col-4">
                      <label for="direccion">Dirección</label>
                      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingrese Dirección">
                    </div>
                    <div class="form-group col-4">
                      <label>Barrio</label>                     
                      <select class="form-control select2" name="barrio" style="width: 100%;" required>
                        <option value="">--- Selecione Barrio ---</option>
                        @foreach ($barrios as $barrio)
                            <option value="{{ $barrio->id }}">{{ $barrio->nombre }}</option>
                        @endforeach
                   </select>
                    </div>
                    <div class="form-group col-4">
                      <label>Localidad</label>
                      <select class="form-control select2" name="localidad" style="width: 100%;">
                            <option value="">--- Selecione Locallidad ---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                      </select>
                    </div>
                    <div class="form-group col-4">
                      <label for="estrato">Estrato</label>
                      <input type="number" min="0" name="estrato" class="form-control" id="estrato" placeholder="Estrato">
                    </div>
                    <div class="form-group col-4">
                      <label for="celular">Celular</label>
                      <input type="text" name="celular" class="form-control" id="celular" placeholder="celular">
                    </div>
                    <div class="form-group col-4">
                      <label for="otro_contacto">otro_contacto</label>
                      <input type="text" name="otro_contacto" class="form-control" id="otro_contacto" placeholder="otro_contacto">
                    </div>

                    <div class="form-group col-4">
                      <label for=" email"> Email</label>
                      <input type="text" name=" email" class="form-control" id=" email" placeholder=" Email">
                    </div>
                    <div class="form-group col-4">
                      <label>Estado Civil</label>
                      <select class="form-control select2" name="estado_civil" style="width: 100%;">
                            <option value="">--- Selecione Estado Civil ---</option>
                            <option value="Soltero(a)">Soltero(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Separado(a)">Separado(a)</option>
                            <option value="Unión Libre">Unión Libre</option>
                            <option value="Viudo(a)">Viudo(a)</option>
                      </select>
                    </div>
                    <div class="form-group col-4">
                        <label for="numero_encuesta">Numero de Encuesta</label>
                        <input type="number" name="numero_encuesta" class="form-control" id="numero_encuesta" placeholder="Ingrese Numero de Encuesta" required>
                      </div>
                    <div class="form-group col-4">
                        <label for="fecha_encuesta">Fecha Encuesta</label>
                        <input type="date" name="fecha_encuesta" class="form-control" id="fecha_encuesta">
                    </div>
                  </div> 
                      <!-- row -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-familiar" role="tabpanel" aria-labelledby="custom-tabs-three-familiar-tab">
                  <div class="row">
                        <div class="form-group col-4">
                            <label>Tipo_vivienda </label>                 
                              <select class="form-control select2" name="tipo_vivienda" style="width: 100%;">
                                <option value="">Seleccione</option>
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Cuarto">Cuarto</option>
                                <option value="Cambuche">Cambuche</option>
                                <option value="Choza">Choza</option>
                                <option value="Otros">Otros</option>
                              </select>		  	  
                        </div> 
                        <div class="form-group col-4">
                          <label>Condicion_vivienda </label>                 
                            <select class="form-control select2" name="condicion_vivienda" style="width: 100%;">
                              <option value="">Seleccione</option>
                              <option value="Arriendo">Arriendo</option>
                              <option value="Propio">Propio</option>
                              <option value="Familiar">Familiar</option>
                              <option value="Otros">Otros</option>                          
                            </select>                              
                        </div> 
                        <div class="form-group col-4">
                          <label for="Numero_Cuartos">Numero_Cuartos</label>
                          <input type="number" min="0" name="Numero_Cuartos" class="form-control" id="Numero_Cuartos"  placeholder="Numero_Cuartos">
                        </div>
                        <div class="form-group col-4">
                          <label for="Numero_Hogares">Numero_Hogares</label>
                          <input type="text" name="Numero_Hogares" class="form-control" id="Numero_Hogares"  placeholder="Numero_Hogares">
                        </div>
                        <div class="form-group col-4">
                          <label>Servicio_Publico</label>                 
                            <select class="form-control select2" name="Servicio_Publico" style="width: 100%;">
                            <option value="">Seleccione</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>                          
                          </select>		  	  
	                      </div> 

                        <div class="form-group col-4">
                          <label><input type="checkbox" name="Agua" value="Si"> Agua</label>
                          <label><input type="checkbox" name="Elictricidad" value="Si"> Elictricidad</label>
                          <label><input type="checkbox" name="Gas" value="Si"> Gas</label>
                          <label><input type="checkbox" name="Alcantarillado" value="Si"> Alcantarillado</label>
                          <label><input type="checkbox" name="Internet" value="Si"> Internet</label>                          
                        </div>   


                      <!-- row -->
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-psicosocial" role="tabpanel" aria-labelledby="custom-tabs-three-psicosocial-tab">
                    <div class="row">
                    <div class="form-group col-4">
                        <label>Etnia </label>                 
                          <select class="form-control select2" name="Etnia" style="width: 100%;">
                            <option value="">Seleccione</option>
                            <option value="Afro">Afro</option>
                            <option value="Mestizo">Mestizo</option>
                            <option value="Indigena">Indigena</option>
                            <option value="Otros">Otros</option>                    
                          </select>                        
                      </div> 
                      <div class="form-group col-4">
                        <label>Grupo_Poblacional</label>                 
                          <select class="form-control select2" name="Grupo_Poblacional" style="width: 100%;">
                            <option value="">Seleccione</option>
                            <option value="Infancia">Infancia</option>
                            <option value="Joven">Joven</option>
                            <option value="Adulto">Adulto</option>
                            <option value="Adulto_Mayor">Adulto_Mayor</option>                            
                          </select>                          
                      </div>
                      <div class="form-group col-4">
                          <label>Nivel Educativo</label>
                          <select class="form-control select2" name="escolaridad" style="width: 100%;">
                                <option value="">--- Selecione Nivel Educativo ---</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Bachillerato">Bachillerato</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Tecnólogo">Tecnólogo</option>
                                <option value="Universitario">Universitario</option>
                                <option value="PostGrado">PostGrado</option>
                          </select>
                      </div> 
                      <div class="form-group col-12">
                          <label><input type="checkbox" name="persona_discapacidad" value="Si"> persona_discapacidad</label>
                          <label><input type="checkbox" name="victimas_conflicto" value="Si"> victimas_conflicto</label>
                          <label><input type="checkbox" name="joven_riesgo" value="Si"> joven_riesgo</label>
                          <label><input type="checkbox" name="madre_cabeza" value="Si"> madre_cabeza</label>
                          <label><input type="checkbox" name="migrante_venezolano" value="Si"> migrante_venezolano</label>                          
                          <label><input type="checkbox" name="certificado_permanencia" value="Si"> certificado_permanencia</label>                          
                      </div>
                      <div class="form-group col-4">
                        <label>Programa_Salud</label>                 
                        <select class="form-control select2" name="Programa_Salud" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Regimen_Subsidiado">Regimen_Subsidiado</option>
                          <option value="Regimen_Contributivo">Regimen_Contributivo</option>
                          <option value="Ninguno">Ninguno</option>                        
                        </select>                          
                      </div> 
                      <div class="form-group col-4">
                        <label for="Nombre_Eps">Nombre_Eps</label>
                        <input type="text" name="Nombre_Eps" class="form-control" id="Nombre_Eps"  placeholder="Nombre_Eps">
                      </div>
                      <div class="form-group col-4">
                        <label>Sisben</label>                 
                        <select class="form-control select2" name="Sisben" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>                        
                        </select>                            
                      </div>
                      <div class="form-group col-4">
                        <label for="Puntaje_sisben">Puntaje_sisben</label>
                        <input type="text" name="Puntaje_sisben" class="form-control" id="Puntaje_sisben"  placeholder="Puntaje_sisben">
                      </div>
                      <div class="form-group col-4">
                        <label>Personas_a_Cargo</label>                 
                        <select class="form-control select2" name="Personas_a_Cargo" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                        </select>
                      </div>
                      <div class="form-group col-4">
                        <label for="Cuantas_personas">Cuantas Personas</label>
                        <input type="text" name="Cuantas_personas" class="form-control" id="Cuantas_personas" placeholder="Cuantas_personas">
                      </div>  
                      <div class="form-group col-4">
                        <label>Niño_Escolaridad</label>                 
                        <select class="form-control select2" name="Niño_Escolaridad" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                        </select>
                      </div>    
                      <div class="form-group col-4">
                        <label>Situacion_Calle</label>                 
                        <select class="form-control select2" name="Situacion_Calle" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div>  
                      <div class="form-group col-4">
                        <label>consume_sustancia</label>                 
                        <select class="form-control select2" name="consume_sustancia" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label>Violencia_Intrafamiliar</label>                 
                        <select class="form-control select2" name="Violencia_Intrafamiliar" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label>pertenece_organizacion</label>                 
                        <select class="form-control select2" name="pertenece_organizacion" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div>
                      <div class="form-group col-4">
                        <label>Empleado</label>                 
                        <select class="form-control select2" name="Empleado" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label>Desempleado</label>                 
                        <select class="form-control select2" name="Desempleado" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div>
                      <div class="form-group col-4">
                        <label>Trabajador_independiente</label>                 
                        <select class="form-control select2" name="Trabajador_independiente" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label>Informal</label>                 
                        <select class="form-control select2" name="Informal" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label>Formal</label>                 
                        <select class="form-control select2" name="Formal" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label>Idea de Negocio</label>                 
                        <select class="form-control select2" name="idea_negocio" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                      <div class="form-group col-4">
                        <label for="Cual_idea">Cual_idea</label>
                        <input type="text" name="Cual_idea" class="form-control" id="Cual_idea" placeholder="Cual_idea">
                    </div> 
                    <div class="form-group col-4">
                        <label>Emprendimiento</label>                 
                        <select class="form-control select2" name="Emprendimiento" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>    
                        </select>
                      </div> 
                    <div class="form-group col-4">
                      <label>Fortalecimiento</label>                 
                      <select class="form-control select2" name="Fortalecimiento" style="width: 100%;">
                        <option value="">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>    
                      </select>
                    </div> 
                    <div class="form-group col-4">
                      <label>Gubernamental</label>                 
                      <select class="form-control select2" name="Gubernamental" style="width: 100%;">
                        <option value="">Seleccione</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>    
                      </select>
                    </div>                    
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-interes" role="tabpanel" aria-labelledby="custom-tabs-three-interes-tab">
                      <div class="row">
                        <div class="form-group col-12">
                          <textarea name="observacion" rows="4" cols="100" placeholder="Observación"></textarea>
                        </div>                                             
                     </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-diferencial" role="tabpanel" aria-labelledby="custom-tabs-three-diferencial-tab">
                     <div class="row">
                      <div class="form-group col-4">
                        <label for="nombre">Nombre(s) y Apellido(s)</label>
                        <input type="text" name="nombre_apellido" class="form-control" id="nombre_apellido" placeholder="Ingrese Nombre(s) y Apellido(s)">
                      </div>
                      <div class="form-group col-4">
                        <label for="contratista_cedula">Documento</label>
                        <input type="text" name="documento_familiar" class="form-control" id="documento_familiar" placeholder="Ingrese Documento">
                      </div>
                      <div class="form-group col-4">
                        <label>Tipo Documento</label>
                        <select class="form-control" name="tipo_documento_familiar" id="tipo_documento_familiar" style="width: 100%;">
                              <option value="">--- Selecione Tipo Documento ---</option>
                              <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                              <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                              <option value="Registro Civil">Registro Civil</option>
                              <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                        </select>
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">Eps</label>
                        <input type="text" name="eps" class="form-control" id="eps" placeholder="Ingrese Eps">
                      </div>
                      <div class="form-group col-4">
                        <label>Regimen</label>
                        <select class="form-control" name="regimen" id="regimen" style="width: 100%;">
                              <option value="">--- Selecione Regimen ---</option>
                              <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                              <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                              <option value="Registro Civil">Registro Civil</option>
                              <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                        </select>
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">Sisben</label>
                        <input type="text" name="sisben_familiar" class="form-control" id="sisben_familiar" placeholder="Ingrese Sisben">
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">E</label>
                        <input type="text" name="E" class="form-control" id="E" placeholder="Ingrese Sisben">
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">G.P</label>
                        <input type="text" name="GP" class="form-control" id="GP" placeholder="Ingrese G.P">
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">S.V</label>
                        <input type="text" name="SV" class="form-control" id="SV" placeholder="Ingrese S.V">
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">N.A</label>
                        <input type="text" name="NA" class="form-control" id="NA" placeholder="Ingrese N.A">
                      </div>
                      <div class="form-group col-4">
                      <label for="edad">Edad</label>
                      <input type="number" min="1" name="edad_familiar" class="form-control" id="edad_familiar">
                      </div>
                      <div class="form-group col-4">
                        <label>Sexo</label>
                        <select class="form-control" name="sexo_familiar" id="sexo_familiar" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Femenino">Femenino</option>
                          <option value="Masculino">Masculino</option>                        
                        </select> 
                      </div>
                      <div class="form-group col-4">
                        <label for="apellido">Parentesco</label>
                        <input type="text" name="parentesco" class="form-control" id="parentesco" placeholder="Ingrese parentesco">
                        <textarea name="datos_nucleo_familiar" class="form-control" id="datos_nucleo_familiar" rows="3" cols="40" style="display: none;"></textarea>
                      </div>
                      <div class="form-group col-4"  style="margin-top: 2rem;">
                        <button type="button" name="btnAgregar" id="btnAgregar" class="btn btn-primary btn-sm" onclick="agregarNucleoFamiliar()">Agregar</button>
                      </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <table id="tblNucleoFamiliar" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombre Completo</th>                                               
                              <th scope="col">Documento</th>
                              <th scope="col">Tipo Documento</th>
                              <th scope="col">Sexo</th>
                              <th scope="col">Edad</th>
                              <th scope="col">Parentesco</th>
                              </tr>
                          </thead>
                          <tbody>                       
                          </tbody>
                        </table>
                     </div>
                     <!-- row -->
                  </div>                 
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
      <script>
        var nucleoFamiliar = [];
        var cont = 0;
        function agregarNucleoFamiliar(){
          cont++;
          let nombre_completo = $("#nombre_apellido").val();          
          let documento = $("#documento_familiar").val();
          let tipo_documento = $("#tipo_documento_familiar").val();
          let eps =$("#eps").val();
          let regimen = $("#regimen").val();
          let sisben = $("#sisben_familiar").val();
          let E =$("#E").val();
          let GP = $("#GP").val();
          let SV =$("#SV").val();
          let NA =$("#NA").val();
          let edad =$("#edad_familiar").val();
          let sexo = $("#sexo_familiar").val();
          let parentesco =$("#parentesco").val();
         
            objNucleoFamiliar = {'nombre_completo':nombre_completo,'documento':documento, 
            'tipo_documento':tipo_documento, 'eps':eps, 'regimen':regimen,
            'sisben':sisben, 'E':E, 'GP': GP, 'SV': SV, 'NA': NA,
            'edad': edad, 'sexo': sexo, 'parentesco': parentesco}
            nucleoFamiliar.push(objNucleoFamiliar);
            console.log(nucleoFamiliar);

            //agregar fila a tabla
          let fila = '<tr>'+
                '<td>' + cont + '</td>'+
                '<td>' + nombre_completo + '</td>'+
                '<td>' + documento + '</td>'+
                '<td>' + tipo_documento + '</td>'+
                '<td>' + sexo + '</td>'+
                '<td>' + edad + '</td>'+
                '<td>' + parentesco + '</td>'+
              '</tr>';      
          $('#tblNucleoFamiliar tbody').append(fila);

            $("#datos_nucleo_familiar").val( JSON.stringify(nucleoFamiliar));
            $("#nombre_apellido").val("");
            $("#documento_familiar").val("");
            $("#tipo_documento_familiar").val("");
            $("#eps").val("");
            $("#regimen").val("");
            $("#sisben_familiar").val("");
            $("#E").val("");
            $("#GP").val("");           
            $("#SV").val(""); 
            $("#NA").val("");           
            $("#edad_familiar").val(""); 
            $("#sexo_familiar").val(""); 
            $("#parentesco").val("");                      
        }
      </script>
      @endsection
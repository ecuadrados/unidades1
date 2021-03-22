@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
        <form method="POST" action="{{route('unidadhabitantecalle.store')}}">       
              @csrf
              @if( !$errors->isEmpty() )
                  <div class="alert alert-success">
                      @foreach ( $errors->all() as $error )
                          <li>{{$error}}</li><br>
                      @endforeach
                  </div>
              @endif
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
                      <label for="fecha_aplicacion">Fecha Aplicación</label>
                      <input type="date" name="fecha_aplicacion" class="form-control" id="fecha_aplicacion"  value="{{ old('fecha_aplicacion') }}" required>
                    </div>
                    <div class="form-group col-8">
                      <label for="zona">Zona de Intervención</label>
                      <input type="text" name="zona" class="form-control" id="zona" value="{{ old('zona') }}" placeholder="Ingrese Zona de Intervención">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="nombre">Nombre y Apellidos</label>
                      <input type="text" name="nombre" class="form-control" id="nombre"  value="{{ old('nombre') }}" placeholder="Ingrese Nombre" required>
                    </div>
                    <div class="form-group col-4">
                    <label>Tipo Documento</label>
                    <select class="form-control select2" name="tipo_documento" style="width: 100%;" value="{{ old('tipo_documento') }}" required>
                          <option value="">--- Selecione Tipo Documento ---</option>
                          <option value="Cédula" {{ old('tipo_documento') == "Cédula" ? "selected" : "" }}>Cédula</option>
                          <option value="Tarjeta de Identidad" {{ old('tipo_documento') == "Tarjeta de Identidad" ? "selected" : "" }}>Tarjeta de Identidad</option>
                          <option value="Registro Civil" {{ old('tipo_documento') == "Registro Civil" ? "selected" : "" }}>Registro Civil</option>
                          <option value="Pasaporte"  {{ old('tipo_documento') == "Pasaporte" ? "selected" : "" }}>Pasaporte</option>
                    </select>
                  </div>
                    <div class="form-group col-4">
                      <label for="documento">Documento</label>
                      <input type="text" name="documento" class="form-control" id="documento" value="{{ old('documento') }}" placeholder="Ingrese Documento" required>
                    </div>
                  </div> 
                  <!-- row  -->
                  <div class="row">
                  <div class="form-group col-4">
                      <label for="sexo">Sexo</label>
                      <br>
                        <input type="radio" id="femenino" name="sexo" value="Femenino" {{(old('sexo') == 'Femenino') ? 'checked' : ''}}>
                        <label for="femenino">Femenino</label>
                        <input type="radio" id="masculino" name="sexo" value="Masculino" {{(old('sexo') == 'Masculino') ? 'checked' : ''}}>
                        <label for="masculino">Masculino</label>
                    </div>
                    <div class="form-group col-4">
                      <label for="fecha_nacimiento">Fecha Nacimiento</label>
                      <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento"  value="{{ old('fecha_nacimiento') }}" required>
                    </div>
                    <div class="form-group col-4">
                      <label for="pais">País Nacimiento</label>
                      <input type="text" name="pais" class="form-control" id="pais" value="{{ old('pais') }}" placeholder="Ingrese País">
                    </div>
                    <div class="form-group col-4">
                      <label for="departamento">Departamento Nacimiento</label>
                      <input type="text" name="departamento" class="form-control" id="departamento" value="{{ old('departamento') }}" placeholder="Ingrese Departamento">
                    </div>
                    <div class="form-group col-4">
                      <label for="municipio">Municipio Nacimiento</label>
                      <input type="text" name="municipio" class="form-control" id="municipio" value="{{ old('municipio') }}" placeholder="Ingrese Municipio">
                    </div>                                      
                    <div class="form-group col-4">
                      <label for="vecindad">Certificado de Vecindad</label>
                      <br>
                        <input type="radio" id="vecindadSi" name="vecindad" value="Si">
                        <label for="vecindadSi">Si</label>
                        <input type="radio" id="vecindadNo" name="vecindad" value="No">
                        <label for="vecindadNo">No</label>
                    </div>
                  </div>
                  <!-- row -->
                  <div class="row">
                  <div class="form-group col-4">
                      <label for="tiempo">Tiempo Residencia</label>
                      <input type="date" name="tiempo" class="form-control" id="tiempo">
                    </div>
                    <div class="form-group col-4 col-md-4 col-sm-12">
                      <label>Barrio Residencia</label>
                      <select class="form-control select2" name="barrio" style="width: 100%;" required>
                            <option value="">--- Selecione Barrio ---</option>
                            @foreach ($barrios as $barrio)
                                <option value="{{ $barrio->id }}" {{ old('barrio') == $barrio->id ? "selected" : "" }}>{{ $barrio->nombre }}</option>
                            @endforeach
                      </select>
                    </div>                  
                    <div class="form-group col-4">
                      <label for="sector">Sector Residencia</label>
                      <input type="text" name="sector" class="form-control" id="sector" placeholder="Ingrese Sector">
                    </div>
                    <div class="form-group col-4">
                      <label for="direccion">Dirección Residencia</label>
                      <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Ingrese Dirección">
                    </div>
                    <div class="form-group col-4">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingrese Teléfono">
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
                  </div>
                  <!-- row  -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-escolaridad" role="tabpanel" aria-labelledby="custom-tabs-three-escolaridad-tab">
                     <div class="row">
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
                                <option value="Otro">Otro</option>
                          </select>
                      </div>
                        <div class="form-group col-8">
                          <label for="otra_escolaridad">Cual</label>
                          <input type="text" name="otra_escolaridad" class="form-control" id="otra_escolaridad" placeholder="Ingrese Nivel Educativo">
                        </div>
                      </div> 
                      <!-- row -->
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-familiar" role="tabpanel" aria-labelledby="custom-tabs-three-familiar-tab">
                                                                    
                  <div class="row">
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="nombres_completos_familiar">Nombre(s) y Apellido(s)</label>
                      <input type="text" name="nombres_completos_familiar" class="form-control" id="nombres_completos_familiar" placeholder="Ingrese Nombre(s) y Apellido(s)">
                    </div>                                                 
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="edad_familiar">Edad</label>
                      <input type="number" name="edad_familiar" class="form-control" id="edad_familiar" placeholder="Edad">
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="ocupacion_familiar">Ocupación</label>
                      <input type="text" name="ocupacion_familiar" class="form-control" id="ocupacion_familiar"  placeholder="Ocupación">
                    </div>                    
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="escolaridad_familiar">Grado Escolaridad</label>
                        <select class="form-control" name="escolaridad_familiar" id="escolaridad_familiar" style="width: 100%;">
                            <option value="">--- Selecione Grado Escolaridad ---</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="Técnico">Técnico</option>
                            <option value="Tecnólogo">Tecnólogo</option>
                            <option value="Universitario">Universitario</option>
                            <option value="PostGrado">PostGrado</option>
                        </select>
                    </div>    
                    <div class="form-group col-md-3 col-sm-12">
                      <label>Parentesco</label>                 
                        <select class="form-control" name="parentesco_familiar" id="parentesco_familiar" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Padre">Padre</option>
                          <option value="Madre">Madre</option>
                          <option value="Hermano">Hermano</option>
                          <option value="Hijo">Hijo</option>
                          <option value="Sobrino">Sobrino</option>
                          <option value="Tío(a">Tío(a)</option>
                          <option value="Primo(a)">Primo(a)</option>
                          <option value="Abuelo(a)">Abuelo(a)</option>
                          <option value="Cuñado(a)">Cuñado(a)</option>
                          <option value="Amigo(a)">Amigo(a)</option>
                          <option value="Compañero(a)">Compañero(a)</option>
                          <option value="Otros">Otros</option>
                        </select>                          
                    </div> 
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="otro_parentesco">Otro Parentesco</label>
                      <input type="text" name="otro_parentesco" class="form-control" id="otro_parentesco"  placeholder="Otro Parentesco">
                    </div>  
                                                                                                                                            
                    <div class="form-group col-md-3 col-sm-12"  style="margin-top: 2rem;">
                      <textarea name="datos_poblacion_familiar" class="form-control" id="datos_poblacion_familiar" rows="3" cols="40" style="display: none;"></textarea>
                      <button type="button" name="btnAgregar" id="btnAgregar" class="btn btn-primary btn-sm" onclick="agregarPoblacionHC()">Agregar</button>
                    </div>
	  
                  </div>
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
                    </tbody>
                  </table>
            


                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-psicosocial" role="tabpanel" aria-labelledby="custom-tabs-three-psicosocial-tab">
                    <div class="row">
                      <div class="form-group col-12">
                        <label class="col-2">Salud: </label>
                        <input type="checkbox" id="mentales" name="mentales">
                        <label for="mentales" style="margin-right: 1rem;"> Mentales</label>
                        <input type="checkbox" id="sustancias_psicoactivas" name="sustancias_psicoactivas">
                        <label for="sustancias_psicoactivas"style="margin-right: 1rem;"> Sustancias Psicoactivas</label>
                        <input type="checkbox" id="enfermedades_fisicas" value="Enfermedades Fisicas">
                        <label for="enfermedades_fisicas"style="margin-right: 1rem;"> Enfermedades Fisicas</label>
                      </div>
                      <label class="col-2">Social: </label>
                      <div  class="form-group col-10">
                      <input type="checkbox" id="problemas_familiares" name="problemas_familiares">
                        <label for="problemas_familiares" style="margin-right: 1rem;"> Problemas Familiares</label>
                      </div>
                      <label>Cuales Problemas Familiares: </label>
                      <div class="form-group col-12">
                        <textarea name="cuales_problemas_familiares" rows="4" cols="100"></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-interes" role="tabpanel" aria-labelledby="custom-tabs-three-interes-tab">
                      <div class="form-group col-4">
                        <label for="ingreso_mensual">Ingreso Mensual</label>
                        <input type="number" name="ingreso_mensual" class="form-control" id="ingreso_mensual" placeholder="Ingrese Ingreso Mensual">
                      </div>
                      <div class="form-group col-6">
                        <label for="observaciones_economicas">Observaciones</label>
                        <textarea name="observaciones_economicas" rows="4" cols="100"></textarea>
                      </div>
                      <div class="form-group col-6">
                        <label for="aspecto_social">Aspecto Social</label>
                        <textarea name="aspecto_social" rows="4" cols="100"></textarea>
                      </div>
                     
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-diferencial" role="tabpanel" aria-labelledby="custom-tabs-three-diferencial-tab">
                    <div class="row">
                      <div class="form-group col-12">
                        <label class="col-2">Raza o etnia: </label>
                        <input type="radio" id="blanco" name="etnia" value="Blanco">
                        <label for="blanco">Blanco</label>
                        <input type="radio" id="afro" name="etnia" value="Afro">
                        <label for="afro">Afro</label>
                        <input type="radio" id="mestizo" name="etnia" value="Mestizo">
                        <label for="mestizo">Mestizo</label>
                        <input type="radio" id="indigena" name="etnia" value="Indigena">
                        <label for="indigena">Indigena</label>
                        <input type="radio" id="raizal" name="etnia" value="Raizal">
                        <label for="raizal">Raizal</label>
                        <input type="radio" id="rom" name="etnia" value="Rom">
                        <label for="rom">Rom</label>
                      </div>
                      <label class="col-2">Discapacidad: </label>
                      <div  class="form-group col-10">
                        <input type="radio" id="fisica" name="discapacidad" value="Física">
                        <label for="fisica">Física</label>
                        <input type="radio" id="intelectual" name="discapacidad" value="Intelectual">
                        <label for="intelectual">Intelectual</label>
                        <input type="radio" id="cognitiva" name="discapacidad" value="Cognitiva">
                        <label for="cognitiva">Cognitiva</label>
                        <input type="radio" id="sensorial" name="discapacidad" value="Sensorial">
                        <label for="sensorial">Sensorial</label>
                        <input type="radio" id="talla_baja" name="discapacidad" value="Talla Baja">
                        <label for="talla_baja">Talla Baja</label>
                        <input type="radio" id="deficit" name="discapacidad" value="M. Deficit">
                        <label for="deficit">M. Deficit</label>
                      </div>
                      <label class="col-2">Orientación Sexual: </label>
                      <div  class="form-group col-10">
                        <input type="radio" id="gay" name="orientacion_sexual" value="Gay">
                        <label for="gay">Gay</label>
                        <input type="radio" id="heterosexual" name="orientacion_sexual" value="Heterosexual">
                        <label for="heterosexual">Heterosexual</label>
                        <input type="radio" id="bisexual" name="orientacion_sexual" value="Bisexual">
                        <label for="bisexual">Bisexual</label>
                        <input type="radio" id="transexual" name="orientacion_sexual" value="Transexual">
                        <label for="transexual">Transexual</label>
                        <input type="radio" id="lesbiana" name="orientacion_sexual" value="Lesbiana">
                        <label for="lesbiana">Lesbiana</label>                       
                      </div>                      
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-observaciones" role="tabpanel" aria-labelledby="custom-tabs-three-observaciones-tab">
                  <label>Observaciones Generales: </label>
                      <div class="form-group col-12">
                        <textarea name="observaciones_generales" rows="4" cols="100"></textarea>
                        </div>
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
  var poblacionHC = [];
  var contadorHC = 0;
  function agregarPoblacionHC(){
    contadorHC++;
    let nombres_completos_familiar = $("#nombres_completos_familiar").val();   
    let edad_familiar = $("#edad_familiar").val();
    let ocupacion_familiar = $("#ocupacion_familiar").val();
    let escolaridad_familiar =$("#escolaridad_familiar").val();
    let parentesco_familiar = $("#parentesco_familiar").val();
    let otro_parentesco = $("#otro_parentesco").val();
   
    if(nombres_completos_familiar !="" && edad_familiar !="" && parentesco_familiar !="" ) {

      objPoblacionFamiliar = {
        'nombres_completos_familiar':nombres_completos_familiar,
        'edad_familiar':edad_familiar, 
        'ocupacion_familiar':ocupacion_familiar,
        'escolaridad_familiar':escolaridad_familiar,
        'parentesco_familiar': parentesco_familiar,
        'otro_parentesco': otro_parentesco
      }
      poblacionHC.push(objPoblacionFamiliar);

      //agregar fila a tabla
    let fila = '<tr>'+
          '<td>' + contadorHC + '</td>'+
          '<td>' + nombres_completos_familiar + '</td>'+
          '<td>' + edad_familiar + '</td>'+
          '<td>' + ocupacion_familiar + '</td>'+
          '<td>' + escolaridad_familiar + '</td>'+
          '<td>' + parentesco_familiar + '</td>'+
        '</tr>';      
    $('#tblPoblacionHC tbody').append(fila);

      $("#datos_poblacion_familiar").val( JSON.stringify(poblacionHC));
      $("#nombres_completos_familiar").val("");
      $("#edad_familiar").val("");
      $("#ocupacion_familiar").val("");
      $("#escolaridad_familiar").val("");
      $("#parentesco_familiar").val("");
      $("#otro_parentesco").val("");    
      // $('#Etnia option[value=""]').attr("selected", "selected");
     
    } else {
      alert("Nombre ,Edad y Parentesco no deben ir vacio")
    }
    // console.log( $("#datos_poblacion_familiar").val());
  }
</script>
      @endsection

@extends('admin.layout')

@section('content')
{{--<div class="callout callout-info">
  <h5> Meta:</h5>
  {{ $meta->nombre }}
</div>--}}
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Insertar Población</h3>
    <div class="card-tools">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->  
  <div class="card-body">
        
            <form action="{{ route('actividad.poblacion') }}" class="d-inline" method="POST">
                @csrf
                <div class="card-body">
                  <div class="row callout callout-info">
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="poblacion_objeto">Población Objeto</label>
                        <select class="form-control" name="poblacion_objeto" id="poblacion_objeto" style="width: 100%;" required>
                          <option value="">Seleccione</option>
                          <option value="Infancia">Infancia</option>
                          <option value="Adolescencia">Adolescencia</option>
                          <option value="Adultos Padres/Madres">Adultos Padres/Madres</option>
                          <option value="Lideres Comunitarios">Lideres Comunitarios</option>
                          <option value="Servidores Publicos">Servidores Publicos</option>
                          <option value="Docentes">Docentes</option>
                        </select>                         
                      <input type="hidden" id="actividad_id" name="actividad_id" value="{{$actividad->id}}">
                      <textarea name="datos_poblacion" class="form-control" id="datos_poblacion" rows="3" cols="40" style="display: none;"></textarea>
                    </div>                 
                    <div class="form-group col-md-3 col-sm-12">
                        <label for="organizacion_actividad">Organización o Institución</label>
                        <input type="text" name="organizacion_actividad" class="form-control" id="organizacion_actividad" placeholder="Ingrese Organización o Institución" required>
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                  <label>Barrio</label>
                  <select class="form-control select2" name="barrio" style="width: 100%;" required>
                        <option value="">--- Selecione Barrio ---</option>
                        @foreach ($barrios as $barrio)
                            <option value="{{ $barrio->id }}">{{ $barrio->nombre }}</option>
                        @endforeach
                   </select>
                </div>
                    <div class="form-group col-md-3 col-sm-12">
                        <label for="lugar_actividad">Lugar de Actividad</label>
                        <input type="text" name="lugar_actividad" class="form-control" id="lugar_actividad" placeholder="Ingrese Lugar de la Actividad" required>
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                        <label for="fecha_actividad">Fecha de Actividad</label>
                        <input type="date" name="fecha_actividad" class="form-control" id="fecha_actividad" placeholder="Ingrese Fecha de la Actividad" required>
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="poblacion_objeto">Ludoteca</label>
                        <select class="form-control" name="ludoteca" id="ludoteca" style="width: 100%;" required>
                          <option value="">Seleccione</option>
                          <option value="Ludoteca1">Ludoteca1</option>
                          <option value="Ludoteca2">Ludoteca2</option>
                          <option value="Ludoteca3">Ludoteca2</option>                          
                        </select>                         
                      <input type="hidden" id="actividad_id" name="actividad_id" value="{{$actividad->id}}">
                      <textarea name="datos_poblacion" class="form-control" id="datos_poblacion" rows="3" cols="40" style="display: none;"></textarea>
                    </div>                  
                  </div>
                  <!-- row -->
                  <div class="row" style="margin-top: 2rem;"><h3>Insertar Población</h3></div>
                  <div class="row">
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="nombres_completos">Nombre(s) y Apellido(s)</label>
                      <input type="text" name="nombres_completos" class="form-control" id="nombres_completos" placeholder="Ingrese Nombre(s) y Apellido(s)">
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                    <label>Sexo</label>
                        <select class="form-control" name="sexo" id="sexo" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Femenino">Femenino</option>
                          <option value="Masculino">Masculino</option>                        
                        </select>                    
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="Documento">Documento</label>
                      <input type="text" name="Documento" class="form-control" id="Documento" placeholder="Ingrese Documento">
                    </div>                    
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="Edad">Edad</label>
                      <input type="text" name="Edad" class="form-control" id="Edad" placeholder="Edad">
                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label>Etnia</label>                 
                        <select class="form-control" name="Etnia" id="Etnia" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Afro">Afro</option>
                          <option value="Mestizo">Mestizo</option>
                          <option value="Indigena">Indigena</option>
                          <option value="Otro">Otro</option>
                        </select>                          
                    </div> 
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="Inclusion">Inclusión</label>
                      <select class="form-control" name="Inclusion" id="Inclusion" style="width: 100%;">
                          <option value="">Seleccione</option>
                          <option value="Inclusion1">Inclusion1</option>
                          <option value="Inclusion2">Inclusion2</option>
                          <option value="Inclusion3">Inclusion3</option>
                          <option value="Otro">Otro</option>
                        </select>       
                    </div>                                                                               
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="Organizado_Proyecto">Organizado_Proyecto</label>
                      <input type="text" name="Organizado_Proyecto" class="form-control" id="Organizado_Proyecto"  placeholder="Organizado_Proyecto">
                    </div>                    
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="Telefono">Telefono</label>
                      <input type="text" name="Telefono" class="form-control" id="Telefono"  placeholder="Telefono">
                    </div>                    
                    <div class="form-group col-md-3 col-sm-12">
                      <label for="Celular">Celular</label>
                      <input type="text" name="Celular" class="form-control" id="Celular"  placeholder="Celular">
                    </div>
                    <div class="form-group col-md-3 col-sm-12" style="margin-top: 2rem;">
                      <label><input type="checkbox" id="victima"> Victima</label>
                      <label><input type="checkbox" id="discapacidad"> Discapacidad</label>

                    </div>
                    <div class="form-group col-md-3 col-sm-12">
                      <label>Funcionario</label>                 
                      <select class="form-control" name="Funcionario" id="Funcionario" style="width: 100%;">
                        <option value="">Seleccione</option>
                        <option value="NOMBRE 1">NOMBRE 1</option>
                        <option value="NOMBRE 2">NOMBRE 2</option>
                        <option value="NOMBRE 3">NOMBRE 3</option>
                        <option value="Otro">Otro</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3 col-sm-12"  style="margin-top: 2rem;">
                    <button type="button" name="btnAgregar" id="btnAgregar" class="btn btn-primary btn-sm" onclick="agregarPoblacion()">Agregar</button>

                    </div>
	  
                  </div>
                  <!-- row -->
                  <table id="tblAgregarPoblacion" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre Completo</th>                                               
                        <th scope="col">Documento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Edad</th>
                        </tr>
                    </thead>
                    <tbody>                       
                    </tbody>
                </table>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>                      
  </div>
  <!-- /.card-body --> 
</div>
<!-- listado de Actividades -->
{{-- @if(count($actividad)>0)
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
                              <a href="{{route('actividad.show', $item)}}" class="btn btn-success btn-sm">Población</a>
                              <a href="{{route('contratista.edit', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('actividad.destroy', $item) }}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta Seguro?')">Borrar</button>
                                </form> 
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
@endif --}}
<script>
  var poblacion = [];
  var contador = 0;
  function agregarPoblacion(){
    contador++;
    let nombre_completo = $("#nombres_completos").val();
    let sexo = $("#sexo").val();
    let documento = $("#Documento").val();
    let Edad = $("#Edad").val();
    let Etnia =$("#Etnia").val();
    let Inclusion = $("#Inclusion").val();
    let Organizado_Proyecto = $("#Organizado_Proyecto").val();
    let Telefono =$("#Telefono").val();
    let Celular = $("#Celular").val();
    let Funcionario =$("#Funcionario").val();
    let victima = false;
    let discapacidad = false;
    if($("#victima").is(":checked")){
      victima = true;
    }
    if($("#discapacidad").is(":checked")){
      discapacidad = true;
    }
    if(nombre_completo !="" && documento !="" && sexo !="" ) {

      objPoblacion = {'nombre_completo':nombre_completo,'sexo': sexo,
      'documento':documento, 'edad':Edad, 'etnia':Etnia, 'inclusion':Inclusion,
      'organizado_proyecto':Organizado_Proyecto, 'telefono':Telefono, 
      'celular': Celular, 'funcionario': Funcionario, 'victima': victima,
      'discapacidad': discapacidad}
      poblacion.push(objPoblacion);
      console.log(poblacion);

      //agregar fila a tabla
    let fila = '<tr>'+
          '<td>' + contador + '</td>'+
          '<td>' + nombre_completo + '</td>'+
          '<td>' + documento + '</td>'+
          '<td>' + sexo + '</td>'+
          '<td>' + Edad + '</td>'+
        '</tr>';      
    $('#tblAgregarPoblacion tbody').append(fila);

      $("#datos_poblacion").val( JSON.stringify(poblacion));
      $("#nombres_completos").val("");
      $("#sexo").val("");
      $("#Documento").val("");
      $("#Edad").val("");    
      $('#Etnia option[value=""]').attr("selected", "selected");
      $("#Inclusion").val("");
      $("#Lugar_de_Actividad").val("");
      $("#Organizado_Proyecto").val("");
      $("#Telefono").val("");
      $("#Celular").val("");
      $('#victima').prop('checked', false);
      $('#discapacidad').prop('checked', false);
      $("#Funcionario").val("");
    } else {
      alert("Nombre ,documento y sexo no deben ir vacio")
    }
  }
</script>
@endsection

@extends('admin.layout')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Detalle Beneficiario</h3>
    <div class="card-tools">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
    </div>
    <!-- /.card-tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="table-responsive">
        <table class="table">      
        <tr>
            <th>Nombre y Apellidos:</th>
            <td>{{ $unidad_general->general_nombre }}</td>
        </tr>
        <tr>
            <th>Documento:</th>
            <td>{{ $unidad_general->general_documento }}</td>
        </tr>   
        <tr>
            <th>Dirección:</th>
            <td>{{ $unidad_general->general_direccion }}</td>
        </tr>
        <tr>
            <th>Teléfono:</th>
            <td>{{ $unidad_general->general_telefono}}</td>
        </tr>               
        </table>
    </div>
  </div>
  <!-- /.card-body -->
  <!-- /.card-footer -->
</div>
<div class="card">
@if (count($kit) > 0)
  <table class="table">  
    <tr>           
      <th>Kit</th>
      <th>Fecha</th>
    </tr>       
    @foreach ($kit as $item)
    <tr>
        <td>{{ $item->kit }}</td>
        <td>{{ $item->kit_fecha }}</td>
      </tr>        
    @endforeach                         
  </table>
  @else
  <span style="font-size: 1.5rem;">No hay kit asociado</span>
@endif
</div>
@endsection

@extends('admin.layout')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Insertar Kit</h3>
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
            <form action="{{ route('kit.store') }}" class="d-inline" method="POST">
                @csrf
                <th>Kit:</th>                             
                <td>
                <input type="radio" id="kitSi" name="kit" value="Si">
                <label for="kitSi">Si</label>
                <input type="radio" id="kitNo" name="kit" value="No">
                <input type="hidden" id="general_id" name="general_id" value="{{$unidad_general->id}}">
                <label for="kitNo">No</label>
                </td>  
                <th>Fecha Entrega de Kit</th>  
                <td><input type="date" name="kit_fecha" class="form-control" id="kit_fecha" required></td>  
                <button type="submit" class="btn btn-success btn-sm" >Guardar</button>
            </form>
                         
        </tr>        
        </table>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <br>
  </div>
  <!-- /.card-footer -->
</div>
@endsection
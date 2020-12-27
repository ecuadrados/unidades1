
@extends('admin.layout')

@section('content')
@if(count($consolidado)>0)
<div class="callout callout-info">
    <div><h5 style="display: inline;"> Meta: </h5>{{ $consolidado[0]->actividad->meta->nombre }}</div>
    <div><h5 style="display: inline;"> Actividad: </h5>{{ $consolidado[0]->actividad->nombre }}</div>
    
</div>
<!-- listado de Poblacion -->
@foreach ($consolidado as $item)
<div class="col-md-12">
    <div class="card card-success collapsed-card">
        <div class="card-header">
            <h3 class="card-title">{{ $item->ftnBarrio->nombre }} - {{ $item->lugar_actividad }}</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                </button>
            </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-city"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Población Objeto</span>
                        <span class="info-box-number">{{ $item->poblacion_objeto }}</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-briefcase"></i></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Organización Actividad</span>
                        <span class="info-box-number">{{ $item->organizacion_actividad }}</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-calendar-alt"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Fecha Actividad</span>
                        <span class="info-box-number">{{ $item->fecha_actividad }}</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-restroom"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Beneficiario</span>
                        <span class="info-box-number">
                            Total: <span class="badge badge-success">{{ $item->total_beneficiarios }}</span>|
                            Mujer: <span class="badge badge-success">{{ $item->beneficiario_mujer }}</span>|
                            Hombre: <span class="badge badge-success">{{ $item->beneficiario_hombre }}</span>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Beneficiario por Edades </span>
                        <span class="info-box-number">
                        0 - 5: <span class="badge badge-success">{{ $item->edades_0_5 }}</span> |
                        6 - 12: <span class="badge badge-success">{{ $item->edades_6_12 }}</span> |
                        13 - 17: <span class="badge badge-success">{{ $item->edades_13_17 }}</span> |
                        Adulto: <span class="badge badge-success">{{ $item->adulto }}</span>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->               
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-user-friends"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Etnia</span>
                        <span class="info-box-number">
                            Afro: <span class="badge badge-success">{{ $item->afro }}</span>|
                            Mestizo: <span class="badge badge-success">{{ $item->mestizo }}</span>|
                            Indigena: <span class="badge badge-success">{{ $item->indigena }}</span>|
                            Otro: <span class="badge badge-success">{{ $item->otro }}</span>
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col --> 
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-user-slash"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Victima</span>
                        <span class="info-box-number">{{ $item->victima }}</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->              
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-blind"></i></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Discapacidad</span>
                        <span class="info-box-number">{{ $item->persona_discapacidad }}</span>
                    </div>
                    <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
             <!-- /.row -->
             <div class="row">
                <table id="tblPoblacion" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre(s) y Apellido(s)</th>                                               
                        <th scope="col">Documento</th>                                               
                        <th scope="col">Sexo</th>
                        <th scope="col">Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $poblacion_consolidado = $poblacion->Where('consolidado_id',  $item->id);
                        @endphp
                        @foreach ($poblacion_consolidado as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nombres_completos }}</td>
                            <td>{{ $item->documento }}</td>
                            <td>{{ $item->sexo }}</td>
                            <td>{{ $item->edad }}</td>                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
             </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endforeach
@else
  <h3>Esta actividad no tiene población</h3>
@endif
    <!-- /.col -->
@endsection
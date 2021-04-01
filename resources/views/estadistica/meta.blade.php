@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Estadisticas Datos Generales</h1>
          </div><!-- /.col -->        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$meta}}</h3>

                <p>Total Metas</p>
              </div>
              <div class="icon">
                <i class="fas fa-bell"></i>
              </div>
              <a href="{{route('meta.index')}}" class="small-box-footer"> Ver más<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$actividad}}</h3>

                <p>Total Actividades</p>
              </div>
              <div class="icon">
                <i class="fas fa-cog"></i>
              </div>
              <a href="{{route('meta.index')}}" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$poblacion}}</h3>

                <p>Total Población</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="{{route('meta.index')}}" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$SumaMetaSugerida}}</h3>

                <p>Total Metas Sugerida</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <a href="{{route('meta.index')}}" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Mujeres</span>
                <span class="info-box-number">
                  {{$cantFemenino}}                 
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Hombres</span>
                <span class="info-box-number"> {{$cantMasculino}}     </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-shield"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Victima</span>
                <span class="info-box-number">{{$cantVictima}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-slash"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Discapacidad</span>
                <span class="info-box-number">{{$cantDiscapacidad}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->       
         <!-- Main row -->
         <div class="row">
          <!-- Left col -->
          <div class="col-md-6">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Gráfica de Edad General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <div id="chartdivEdad"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->          
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Gráfica de Etnia General</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <div id="chartdiv"></div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
          <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Estadisticas generales por Unidad Comunera</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="tblUnidadComunera"  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Unidad Comunera</th>
                      <th>Femenino</th>
                      <th>Masculino</th>
                      <th>Edad 0 - 5</th>
                      <th>Edad 6-12</th>
                      <th>Edad 13-17</th>
                      <th>Mayor a 18</th>
                      <th>Afro</th>
                      <th>Mestizo</th>
                      <th>Indigena</th>
                      <th>Otro</th>
                      <th>Victima</th>
                      <th>Discapacidad</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($unidad_comunera as $item)
                      <tr>
                        <td>{{ $item->unidad_comunera }}</td>
                        <td>{{ $item->cantFemenino }}</td>
                        <td>{{ $item->cantMasculino }}</td>
                        <td>{{ $item->cantEdad05 }}</td>
                        <td>{{ $item->cantEdad612 }}</td>
                        <td>{{ $item->cantEdad1317 }}</td>
                        <td>{{ $item->cantEdad18 }}</td>
                        <td>{{ $item->cantAfro }}</td>
                        <td>{{ $item->cantMestizo }}</td>
                        <td>{{ $item->cantIndigena }}</td>
                        <td>{{ $item->cantOtro }}</td>
                        <td>{{ $item->cantVictima }}</td>
                        <td>{{ $item->cantDiscapacidad }}</td>                     
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">               
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       <div class="row">
       <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Estadisticas Por Metas</h1>
          </div><!-- /.col -->        
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 24px;">Lista de Metas</span>
                </div>

                <div class="card-body">      
                    <table id="tblPoblacionMeta" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Meta</th>
                            <th scope="col">Meta Sugerida</th>                           
                            <th scope="col">Meta Sugerida x Año</th>
                            <th scope="col">Cantidad Población</th>
                            <th scope="col">Meta Progreso</th>
                            <!-- <th scope="col">Meta</th>                           
                            <th scope="col">Meta x Año</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($poblacion_meta as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->meta_sugerida }}</td>                               
                                <td>{{ ceil($item->meta_sugerida / 4) }}</td> 
                                <td>{{ $item->cont }}</td>                               
                                <td>
                                  <div class="progress">
                                    <div 
                                      class="progress-bar progress-bar-striped bg-warning" 
                                      role="progressbar"
                                      @if( $item->meta_sugerida > 0 )
                                      style="width:{{  $item->cont * 100 / $item->meta_sugerida }}%" 
                                      aria-valuemax="100"
                                      @endif
                                      >
                                    </div>
                                  </div>
                                </td>                               
                                {{--<td>{{ $item->valor }}</td>                               
                                <td>{{ ceil($item->valor / 4) }}</td> --}}                                                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- fin card body -->
                </div>
            </div>
        </div>
       </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

#chartdivEdad {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="{{ asset('amcharts/lib/4/core.js') }}"></script>
<script src="{{ asset('amcharts/lib/4/charts.js') }}"></script>
<script src="{{ asset('amcharts/lib/4/animated.js') }}"></script>

<!-- Chart code -->
<script>  
am4core.ready(function() {
  const data = @json($unidad_comunera_general);
  const dataEdad = @json($unidad_comunera_edad);
  console.log(dataEdad[0].cantEdad05);

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end
// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);
var chartEdad = am4core.create("chartdivEdad", am4charts.PieChart);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "litres";
pieSeries.dataFields.category = "country";

// Add and configure Series
var pieSeriesEdad = chartEdad.series.push(new am4charts.PieSeries());
pieSeriesEdad.dataFields.value = "litres";
pieSeriesEdad.dataFields.category = "country";

// Let's cut a hole in our Pie chart the size of 30% the radius
chart.innerRadius = am4core.percent(30);
chartEdad.innerRadius = am4core.percent(30);

// Put a thick white border around each Slice
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;
pieSeries.slices.template

pieSeriesEdad.slices.template.stroke = am4core.color("#fff");
pieSeriesEdad.slices.template.strokeWidth = 2;
pieSeriesEdad.slices.template.strokeOpacity = 1;
pieSeriesEdad.slices.template
  // change the cursor on hover to make it apparent the object can be interacted with
  .cursorOverStyle = [
    {
      "property": "cursor",
      "value": "pointer"
    }
  ];

pieSeries.alignLabels = false;
pieSeries.labels.template.bent = true;
pieSeries.labels.template.radius = 3;
pieSeries.labels.template.padding(0,0,0,0);

pieSeries.ticks.template.disabled = true;

pieSeriesEdad.alignLabels = false;
pieSeriesEdad.labels.template.bent = true;
pieSeriesEdad.labels.template.radius = 3;
pieSeriesEdad.labels.template.padding(0,0,0,0);

pieSeries.ticks.template.disabled = true;
pieSeriesEdad.ticks.template.disabled = true;

// Create a base filter effect (as if it's not there) for the hover to return to
var shadow = pieSeries.slices.template.filters.push(new am4core.DropShadowFilter);
shadow.opacity = 0;

var shadowEdad = pieSeriesEdad.slices.template.filters.push(new am4core.DropShadowFilter);
shadowEdad.opacity = 0;

// Create hover state
var hoverState = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists
var hoverStateEdad = pieSeries.slices.template.states.getKey("hover"); // normally we have to create the hover state, in this case it already exists

// Slightly shift the shadow and make it more prominent on hover
var hoverShadow = hoverState.filters.push(new am4core.DropShadowFilter);
hoverShadow.opacity = 0.7;
hoverShadow.blur = 5;

var hoverShadowEdad = hoverStateEdad.filters.push(new am4core.DropShadowFilter);
hoverShadowEdad.opacity = 0.7;
hoverShadowEdad.blur = 5;
// Add a legend
chart.legend = new am4charts.Legend();

chart.data = data;

chartEdad.legend = new am4charts.Legend();

// dataEdad = [];
// if( dataEdad[0].cantEdad05 == 0) {
//   dataEdad.push({ "country": "Edad 0 a 5",
//           "litres": dataEdad[0].cantEdad05});
// }
let data_edad = [];
let indiceEdad = 0;
// ...
if( dataEdad[0].cantEdad05 > 0) {
  data_edad[indiceEdad] = { "country": "Edad 0 a 5", "litres": dataEdad[0].cantEdad05 };
  indiceEdad++;
}
if( dataEdad[0].cantEdad612 > 0) {
  data_edad[indiceEdad] = { "country": "Edad 6 a 12", "litres": dataEdad[0].cantEdad612 };
  indiceEdad++;
}
if( dataEdad[0].cantEdad1317 > 0) {
  data_edad[indiceEdad] = { "country": "Edad 13 a 17", "litres": dataEdad[0].cantEdad1317 };
  indiceEdad++;
}
if( dataEdad[0].cantEdad18 > 0) {
  data_edad[indiceEdad] = { "country": "Edad mayor a 18", "litres": dataEdad[0].cantEdad18 };
  indiceEdad++;
}
// dataEdad[1] = { "ID": "2", "Status": "Invalid" };

chartEdad.data =   data_edad;   

}); // end am4core.ready()
</script>



@endsection

@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 24px;">Centro de Vida y Grupos Organizados</span>
                    <a href="{{route('unidadgeneral.create')}}" class="btn btn-primary btn-sm" style="float: right;">Nuevo Beneficiario</a>
                </div>

                <div class="card-body">      
                    <table id="tblCentro" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Centro de Vida  y Grupos Organizados</th>                                            
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($centro_vida as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nombre }}</td>                               
                                <td>
                                  <a href="{{route('unidadgeneral.lista', $item->id )}}" class="btn btn-success btn-sm">Usuarios</a>                                    
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
</div>

@endsection

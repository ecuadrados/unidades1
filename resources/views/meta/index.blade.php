@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-size: 24px;">Lista de Metas</span>
                    <a href="{{route('meta.create')}}" class="btn btn-primary btn-sm" style="float: right;">Nuevo Meta</a>
                </div>

                <div class="card-body">      
                    <table id="tblMeta" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Meta</th>
                            <th scope="col">Meta Sugerida</th>                           
                            <th scope="col">Meta Sugerida x Año</th>
                            <th scope="col">Meta</th>                           
                            <th scope="col">Meta x Año</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($meta as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->meta_sugerida }}</td>                               
                                <td>{{ ceil($item->meta_sugerida / 4) }}</td>                               
                                <td>{{ $item->valor }}</td>                               
                                <td>{{ ceil($item->valor / 4) }}</td>                               
                                <td>
                                                                     
                                    <a href="{{route('meta.edit', $item)}}" class="btn btn-info btn-sm">Editar</a>
                                    <a href="{{route('meta.show', $item)}}" class="btn btn-success btn-sm">Actividad</a>
                                   {{-- <a href="{{route('contratista.edit', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('contratista.destroy', $item) }}" class="d-inline" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Esta Seguro?')">Borrar</button>
                                    </form> --}}
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

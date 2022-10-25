@extends('layouts.admin')
@section('title','Reporte por fecha')
@section('styles')

<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }

</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Reporte por fecha
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reporte por fecha</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    {!! Form::open(['route'=>'report.results', 'method'=>'POST']) !!}
                    <div class="row ">

                        <div class="col-12 col-md-3">
                            <span>Fecha inicial</span>
                            <div class="form-group">
                                <input class="form-control" type="date" 
                                value="{{old('fecha_ini')}}" 
                                name="fecha_ini" id="fecha_ini">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <span>Fecha final</span>
                            <div class="form-group">
                                <input class="form-control" type="date" 
                                value="{{old('fecha_fin')}}" 
                                name="fecha_fin" id="fecha_fin">
                            </div>
                        </div>
                        <div class="col-12 col-md-3 text-center mt-4">
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-sm">Consultar</button>
                            </div>
                        </div>
                        
                    </div>
                    {!! Form::close() !!}

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    {{-- <th>Id</th> --}}
                                    <th>Ticket</th>
                                    <th>Fecha de creación</th>
                                    <th>Categoría</th>
                                    <th>Tipo</th>
                                    <th>Placa</th>
                                    <th>Serial</th>
                                    <th>Modelo</th>
                                    <th>Sede</th>
                                    <th>Estado</th>
                                    <th>Creado por</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($warranties as $warranty)
                                <tr>
                                    {{-- <th scope="row">{{ $warranty->id }}</th> --}}
                                    <td>
                                        <a href="{{ route('warranties.show', $warranty) }}">{{ $warranty->ticket }}</a>
                                    </td>
                                    <td>{{ $warranty->warranty_date }}</td>
                                    <td>{{ $warranty->category->name }}</td>
                                    <td>{{ $warranty->type->name }}</td>
                                    <td>{{ $warranty->plate }}</td>
                                    <td>{{ $warranty->serial }}</td>
                                    <td>{{ $warranty->modelo->name }}</td>
                                    <td>{{ $warranty->sede->name }}</td>
                                    
                                    @if ($warranty->status == 'VALID')
                                    <td>
                                        <a class="jsgrid-button btn btn-success" href="{{ route('change.status.warranties', $warranty) }}" title="Editar">
                                            Valida <i class="fas fa-check"></i>
                                        </a>
                                    </td>
                                    @else
                                    <td>
                                        <a class="jsgrid-button btn btn-danger" href="{{ route('change.status.warranties', $warranty) }}" title="Editar">
                                            Cancelada <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                    @endif

                                    <td>{{ $warranty->user->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
<script>
    window.onload = function(){
        var fecha = new Date(); //Fecha actual
        var mes = fecha.getMonth()+1; //obteniendo mes
        var dia = fecha.getDate(); //obteniendo dia
        var ano = fecha.getFullYear(); //obteniendo año
        if(dia<10)
          dia='0'+dia; //agrega cero si el menor de 10
        if(mes<10)
          mes='0'+mes //agrega cero si el menor de 10
        document.getElementById('fecha_fin').value=ano+"-"+mes+"-"+dia;
      }
</script>
@endsection
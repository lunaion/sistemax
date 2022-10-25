@extends('layouts.admin')
@section('title','Reporte por día')
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
            Reporte por día
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reporte por día</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route'=>'report.results', 'method'=>'POST']) !!}
                    <div class="d-flex justify-content-between">
                    
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-center">
                            <span>Fecha de consulta: <b> </b></span>
                            <div class="form-group">
                                <strong>{{\Carbon\Carbon::now()->format('d/m/Y')}}</strong>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <span>Cantidad de registros: <b></b></span>
                            <div class="form-group"></div>
                                <strong>{{$warranties->count()}}</strong>
                        </div>
                    </div>

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
@endsection
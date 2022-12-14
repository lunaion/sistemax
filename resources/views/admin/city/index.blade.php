@extends('layouts.admin')
@section('title','Gestión de ciudades')
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
            Ciudades
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ciudades</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Ciudades</h4>
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis"></i>
                            </a>
                            {{-- <div class="dropdown-menu dropdown-menu-right"> --}}
                            <a href="{{route('cities.create')}}" type="button" class="btn btn-info ">
                                <i class="fas fa-plus"></i> Nuevo
                            </a>
                            <a href="{{route('cities.excel')}}" type="button" class="btn btn-success ">
                                <i class="fas fa-file-excel"></i> Exportable
                            </a>
                        </div>
                    </div> <br>
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Comentario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                                <tr>
                                    <th scope="row">{{ $city->id }}</th>
                                    <td>
                                        <a href="{{ route('cities.show', $city) }}">{{ $city->name }}</a>
                                    </td>
                                    <td>{{ $city->comment }}</td>
                                    <td style="width: 50px;">
                                        {!! Form::open(['route'=>['cities.destroy',$city], 'method'=>'DELETE']) !!}
                                        
                                        <a class="jsgrid-button jsgrid-edit-button" href="{{ route('cities.edit', $city) }}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit" title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                        {!! Form::close() !!}
                                    </td>
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
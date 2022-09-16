@extends('layouts.admin')
@section('title','Editar operación')
@section('styles')

{!! Html::style('treegrid/css/jquery.treegrid.css') !!}

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edición de operación
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('operations.index') }}">Operación</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de operación</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de operación</h4>
                    </div>

                    {!! Form::model($operation,['route'=>['operations.update',$operation], 'method'=>'PUT','files'=>true]) !!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $operation->name }}" aria-describedby="helpId" placeholder="Nombre" required>
                      </div>

                    <div class="form-group">
                      <label for="city_id">Ciudad</label>
                      <select class="form-control" name="city_id" id="city_id">
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}" 
                            @if ($city->id == $operation->city_id)
                            selected  
                            @endif
                            >{{ $city->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="sede_id">Sede</label>
                      <select class="form-control" name="sede_id" id="sede_id">
                        @foreach ($sedes as $sede)
                        <option value="{{ $sede->id }}"
                            @if ($sede->id == $operation->sede_id)
                            selected  
                            @endif
                            >{{ $sede->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('operations.index') }}" class="btn btn-light">Cancelar</a>
                    
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/dropify.js') !!}
@endsection
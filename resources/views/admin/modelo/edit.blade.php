@extends('layouts.admin')
@section('title','Editar modelo')
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
            Edición de modelo
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('modelos.index') }}">Modelos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de modelos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de modelo</h4>
                    </div>

                    {!! Form::model($modelo,['route'=>['modelos.update',$modelo], 'method'=>'PUT','files'=>true]) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{ $modelo->name }}" aria-describedby="helpId" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="mark_id">Marca</label>
                      <select class="form-control" name="mark_id" id="mark_id">
                        @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}" 
                            @if ($mark->id == $modelo->mark_id)
                            selected  
                            @endif
                            >{{ $mark->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('modelos.index') }}" class="btn btn-light">Cancelar</a>
                    
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
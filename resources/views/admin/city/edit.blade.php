@extends('layouts.admin')
@section('title','Editar ciudad')
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
            Editar ciudad
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cities.index') }}">Ciudades</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar ciudad</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar ciudad</h4>
                    </div>

                    {!! Form::model($city,['route'=>['cities.update',$city], 'method'=>'PUT']) !!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" value="{{ $city->name }}" class="form-control" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="comment">Comentario</label>
                        <textarea class="form-control" name="comment" id="comment" rows="3">{{ $city->comment }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('cities.index') }}" class="btn btn-light">Cancelar</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
@extends('layouts.admin')
@section('title','Registrar modelo')
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
            Registro de modelos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('modelos.index') }}">Modelos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de modelos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de modelos</h4>
                    </div>

                    {!! Form::open(['route'=>'modelos.store', 'method'=>'POST','files'=>true]) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="mark_id">Marca</label>
                      <select class="form-control" name="mark_id" id="mark_id">
                        @foreach ($marks as $mark)
                        <option value="{{ $mark->id }}">{{ $mark->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('modelos.index') }}" class="btn btn-light">Cancelar</a>
                    
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
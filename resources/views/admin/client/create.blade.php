@extends('layouts.admin')
@section('title','Registrar cliente')
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
            Registro de clientes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de clientes</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de clientes</h4>
                    </div>

                    {!! Form::open(['route'=>'clients.store', 'method'=>'POST','files'=>true]) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="dni">Cédula</label>
                      <input type="number" class="form-control" name="dni" id="dni" aria-describedby="helpId" placeholder="Cédula" required>
                    </div>

                    <div class="form-group">
                      <label for="ruc">NIT</label>
                      <input type="number" class="form-control" name="ruc" id="ruc" aria-describedby="helpId" placeholder="NIT">
                      <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>

                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" name="address" id="address" aria-describedby="helpId" placeholder="Dirección">
                        <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>

                    <div class="form-group">
                        <label for="phone">Teléfono / Celular</label>
                        <input type="number" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Teléfono / Celular">
                        <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Correo electrónico">
                        <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>


                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-light">Cancelar</a>
                    
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
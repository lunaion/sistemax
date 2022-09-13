@extends('layouts.admin')
@section('title','Registrar sede')
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
            Registro de sedes
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sedes.index') }}">Sede</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de sedes</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de sedes</h4>
                    </div>

                    {!! Form::open(['route'=>'sedes.store', 'method'=>'POST','files'=>true]) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="address">Dirección</label>
                      <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelpId" placeholder="Dirección" required>
                    </div>

                    <div class="form-group">
                      <label for="phone">Teléfono</label>
                      <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelpId" placeholder="Teléfono" required>
                    </div>

                    <div class="form-group">
                      <label for="email">Correo electrónico</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo electrónico" required>
                    </div>

                    <div class="form-group">
                      <label for="city_id">Ciudades</label>
                      <select class="form-control" name="city_id" id="city_id">
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="user_id">Contacto</label>
                      <select class="form-control" name="user_id" id="user_id">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title d-flex">Imagen de la sede
                            <small class="ml-auto align-self-end">
                                <a href="dropify.html" class="font-weight-light" target="_balck">Seleccionar Archivo</a>
                            </small>
                        </h4>
                        <input type="file" name="picture" id="picture" class="dropify">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('sedes.index') }}" class="btn btn-light">Cancelar</a>
                    
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
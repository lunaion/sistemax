@extends('layouts.admin')
@section('title','Editar sede')
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
            Edición de sede
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sedes.index') }}">Sede</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de sede</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de sede</h4>
                    </div>

                    {!! Form::model($sede,['route'=>['sedes.update',$sede], 'method'=>'PUT','files'=>true]) !!}

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $sede->name }}" aria-describedby="helpId" placeholder="Nombre" required>
                      </div>
  
                      <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ $sede->address }}" aria-describedby="emailHelpId" placeholder="Dirección" required>
                      </div>
  
                      <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $sede->phone }}" aria-describedby="emailHelpId" placeholder="Teléfono" required>
                      </div>
  
                      <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $sede->email }}" aria-describedby="emailHelpId" placeholder="Correo electrónico" required>
                      </div>

                    <div class="form-group">
                      <label for="city_id">Ciudad</label>
                      <select class="form-control" name="city_id" id="city_id">
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}" 
                            @if ($city->id == $sede->city_id)
                            selected  
                            @endif
                            >{{ $city->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="user_id">Contacto</label>
                      <select class="form-control" name="user_id" id="user_id">
                        @foreach ($users as $user)
                        <option value="{{ $user->id }}"
                            @if ($user->id == $sede->user_id)
                            selected  
                            @endif
                            >{{ $user->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title d-flex">Imagen del producto
                            <small class="ml-auto align-self-end">
                                <a href="dropify.html" class="font-weight-light" target="_balck">Seleccionar Archivo</a>
                            </small>
                        </h4>
                        <input type="file" name="picture" id="picture" class="dropify">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('sedes.index') }}" class="btn btn-light">Cancelar</a>
                    
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
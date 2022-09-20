@extends('layouts.admin')
@section('title','Registrar garantía')
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
            Registro de garantía
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('warranties.index') }}">Garantías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de garantías</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de garantías</h4>
                    </div>

                    {!! Form::open(['route'=>'warranties.store', 'method'=>'POST','files'=>true]) !!}

                    <div class="form-group">
                      
                          <p class="card-description">
                            Información de la garantía.
                          </p>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ticket</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="ticket" id="ticket" aria-describedby="emailHelpId" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Categoría</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="category_id" id="category_id">
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tipo</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="type_id" id="type_id">
                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Placa</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="plate" id="plate" aria-describedby="emailHelpId" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Serial</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="serial" id="serial" aria-describedby="emailHelpId" required>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Marca</label>
                                <div class="col-sm-9">
                                  <div class="form-check">
                                    <select class="form-control" name="mark_id" id="mark_id">
                                      @foreach ($marks as $mark)
                                      <option value="{{ $mark->id }}">{{ $mark->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Modelo</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="modelo_id" id="modelo_id">
                                    @foreach ($modelos as $modelo)
                                    <option value="{{ $modelo->id }}">{{ $modelo->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Parte</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="part_id" id="part_id">
                                    @foreach ($parts as $part)
                                    <option value="{{ $part->id }}">{{ $part->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ciudad</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="city_id" id="city_id">
                                    @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Sede</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="sede_id" id="sede_id">
                                    @foreach ($sedes as $sede)
                                    <option value="{{ $sede->id }}">{{ $sede->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Operación</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="operation_id" id="operation_id">
                                    @foreach ($operations as $operation)
                                    <option value="{{ $operation->id }}">{{ $operation->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Proveedor</label>
                                <div class="col-sm-9">
                                  <select class="form-control" name="provider_id" id="provider_id">
                                    @foreach ($providers as $provider)
                                    <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="description">Observaciones</label>
                            <textarea class="form-control" name="description" id="comments" rows="3"></textarea>
                          </div>

                          <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                          <a href="{{ route('warranties.index') }}" class="btn btn-light">Cancelar</a>
                    
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
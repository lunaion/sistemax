@extends('layouts.admin')
@section('title','Editar producto')
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
            Edición de producto
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Producto</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edición de producto</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de producto</h4>
                    </div>

                    {!! Form::model($product,['route'=>['products.update',$product], 'method'=>'PUT','files'=>true]) !!}

                    <div class="form-group">
                      <label for="name">Nombre</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" aria-describedby="helpId" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                      <label for="sell_price">Precio de venta</label>
                      <input type="number" class="form-control" name="sell_price" id="sell_price" value="{{ $product->sell_price }}" aria-describedby="emailHelpId" required>
                    </div>

                    <div class="form-group">
                      <label for="category_id">Categoría</label>
                      <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" 
                            @if ($category->id == $product->category_id)
                            selected  
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="provider_id">Proveedor</label>
                      <select class="form-control" name="provider_id" id="provider_id">
                        @foreach ($providers as $provider)
                        <option value="{{ $provider->id }}"
                            @if ($provider->id == $product->provider_id)
                            selected  
                            @endif
                            >{{ $provider->name }}</option>
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
                    <a href="{{ route('products.index') }}" class="btn btn-light">Cancelar</a>
                    
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
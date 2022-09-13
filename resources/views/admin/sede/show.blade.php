@extends('layouts.admin')
@section('title','Detalles del sede')
@section('styles')

@endsection
@section('create')

@endsection
@section('options')

@endsection
@section('preference')

@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            {{$sede->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> 
                <li class="breadcrumb-item"><a href="{{route('sedes.index')}}">Sedes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$sede->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">

                                <img src="{{ asset('image/sede/'.$sede->image) }}" alt="profile" class="img-lg mb-3">

                                <h3>{{$sede->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            {{-- <div class="border-bottom py-4">
                                <div class="list-group">
                                    <button type="button" class="list-group-item list-group-item-action active">
                                        Sobre proveedor
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        Productos
                                    </button>
                                    <button type="button" class="list-group-item list-group-item-action">
                                        Registrar producto
                                    </button>
                                </div>
                            </div> --}}

                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Estado
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $sede->status }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Ciudad
                                    </span>
                                    <span class="float-right text-muted">
                                        {{-- Detalles del proveedor --}}
                                        <a href="{{route('cities.show',$sede->city->id)}}">{{ $sede->city->name }}</a>
                                    </span>
                                </p>

                            </div>
                            {{-- <button class="btn btn-primary btn-block">{{ $product->status }}</button> --}}
                            @if ($sede->status == 'ACTIVE')
                            <button class="btn btn-success btn-block">{{ $sede->status }}</button>
                            @else
                            <button class="btn btn-danger btn-block">{{ $sede->status }}</button>
                            @endif
                        </div>

                        

                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Detalles del producto</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">

                                   
                                    
                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Dirección</strong>
                                        <p class="text-muted">
                                            {{$sede->address}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i> Contacto</strong>
                                        <p class="text-muted">
                                            {{$sede->user->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i> Teléfono</strong>
                                        <p class="text-muted">
                                            {{$sede->phone}}
                                        </p>
                                        <hr>
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Correo electrónico</strong>
                                        <p class="text-muted">
                                            {{$sede->email}}
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('sedes.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
@endsection

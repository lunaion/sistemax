@extends('layouts.admin')
@section('title','Detalles de garantías')
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
            Garantía
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> 
                <li class="breadcrumb-item"><a href="{{route('warranties.index')}}">Garantías</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$warranty->ticket}}</li>
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

                                {{-- <img src="{{ asset('image/sede/'.$sede->image) }}" alt="profile" class="img-lg mb-3"> --}}

                                <h3>{{$warranty->ticket}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Estado
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $warranty->status }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Ticket
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $warranty->ticket }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Fecha de creación
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $warranty->warranty_date }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Creado por
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $warranty->user->name }}
                                    </span>
                                </p>

                            </div>
                            {{-- <button class="btn btn-primary btn-block">{{ $product->status }}</button> --}}
                            @if ($warranty->status == 'VALID')
                            <button class="btn btn-success btn-block">{{ $warranty->status }}</button>
                            @else
                            <button class="btn btn-danger btn-block">{{ $warranty->status }}</button>
                            @endif
                        </div>

                        

                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Detalles de la garantía</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">

                                   
                                    
                                    <div class="form-group col-md-6">
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Fecha de creación</strong>
                                        <p class="text-muted">
                                            {{$warranty->warranty_date}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i> Categoría</strong>
                                        <p class="text-muted">
                                            {{$warranty->category->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fas fa-address-card mr-1"></i> Tipo</strong>
                                        <p class="text-muted">
                                            {{$warranty->type->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Placa</strong>
                                        <p class="text-muted">
                                            {{$warranty->plate}}
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('warranties.index')}}" class="btn btn-primary float-right">Regresar</a>
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

@extends('layouts.admin')
@section('title','Detalles de la operación')
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
            {{$operation->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> 
                <li class="breadcrumb-item"><a href="{{route('operations.index')}}">Operaciones</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$operation->name}}</li>
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

                                <h3>{{$operation->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>

                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Estado
                                    </span>
                                    <span class="float-right text-muted">
                                        {{ $operation->status }}
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Ciudad
                                    </span>
                                    <span class="float-right text-muted">
                                        {{-- Detalles del proveedor --}}
                                        <a href="{{route('cities.show',$operation->city->id)}}">{{ $operation->city->name }}</a>
                                    </span>
                                </p>

                            </div>
                            {{-- <button class="btn btn-primary btn-block">{{ $product->status }}</button> --}}
                            @if ($operation->status == 'ACTIVE')
                            <button class="btn btn-success btn-block">{{ $operation->status }}</button>
                            @else
                            <button class="btn btn-danger btn-block">{{ $operation->status }}</button>
                            @endif
                        </div>

                        

                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Detalles de la operación</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">

                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-address-card mr-1"></i> Sede</strong>
                                        <p class="text-muted">
                                            {{$operation->sede->name}}
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('operations.index')}}" class="btn btn-primary float-right">Regresar</a>
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

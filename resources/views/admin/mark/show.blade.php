@extends('layouts.admin')
@section('title','Detalles de la marca')
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
            {{$mark->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li> 
                <li class="breadcrumb-item"><a href="{{route('marks.index')}}">Marca</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$mark->name}}</li>
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

                                <img src="{{ asset('/image/mark/'.$mark->image) }}" alt="profile" class="img-lg mb-3">

                                <h3>{{$mark->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                        </div>

                        

                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Detalles de la marca</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">

                                   
                                    
                                    <div class="form-group col-md-6">
                                        <strong><i class="fas fa-address-card mr-1"></i> Nombre</strong>
                                        <p class="text-muted">
                                            {{$mark->name}}
                                        </p>
                                        <hr>
                                        <strong><i class="fab fa-product-hunt mr-1"></i> Descripción</strong>
                                        <p class="text-muted">
                                            {{$mark->description}}
                                        </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('marks.index')}}" class="btn btn-primary float-right">Regresar</a>
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

@extends('layouts.admin')
@section('title','Registro de compras')
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
            Registro de compra
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('purchases.index') }}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de compra</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de compra</h4>
                    </div>

                    {!! Form::open(['route'=>'purchases.store', 'method'=>'POST']) !!}
                    @include('admin.purchase._form')
                    
                    {!! Form::close() !!}

                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('purchases.index') }}" class="btn btn-light">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
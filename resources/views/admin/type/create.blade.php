@extends('layouts.admin')
@section('title','Registrar tipo')
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
            Registro de tipos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('types.index') }}">Tipos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de tipos</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de tipos</h4>
                    </div>

                    {!! Form::open(['route'=>'types.store', 'method'=>'POST']) !!}
                    @include('admin.type._form')
                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('types.index') }}" class="btn btn-light">Cancelar</a>
                    {!! Form::close() !!}

                </div>
                {{-- <div class="card-footer text-muted">
                    {{$categories->render()}}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection
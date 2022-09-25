@extends('layouts.admin')
@section('title','Panel administrador')
@section('styles')

<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }

</style>

@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Panel administrador
        </h3>
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categorías</li>
            </ol>
        </nav> --}}
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
        
                    </div>

                    @foreach ($garantiasmes as $garantiasme)
                        
                    <div class="row">
                        <div class="col-md-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Garantías por mes</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-inline-block pt-3">
                                            <div class="d-md-flex">
                                                <h2 class="mb-0">{{$garantiasme->mes}}</h2>
                                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                    <i class="far fa-clock text-muted"></i>
                                                    <small class=" ml-1 mb-0">Mes actual</small>
                                                </div>
                                            </div>
                                            <small class="text-gray">Informe de garantía por mes.</small>
                                        </div>
                                        <div class="d-inline-block">
                                            <i class="fas fa-chart-pie text-info icon-lg"></i>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Garantías por fecha</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-inline-block pt-3">
                                            <div class="d-md-flex">
                                                <h2 class="mb-0">{{$garantiasme->date}}</h2>
                                                <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                                    <i class="far fa-clock text-muted"></i>
                                                    <small class="ml-1 mb-0">Mes actual</small>
                                                </div>
                                            </div>
                                            <small class="text-gray">Informe de garantías por fecha.</small>
                                        </div>
                                        <div class="d-inline-block">
                                            <i class="fas fa-chart-pie text-danger icon-lg"></i>                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/chart.js') !!}
@endsection
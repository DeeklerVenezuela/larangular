@extends('layouts.app')

@section('content')
<div class="zuno-layout" ng-controller="permitsCreateController">
<div class="zuno-list-heading">
    <h2><i class="ion-android-plane"></i> Registar vacaciones</h2>

    <div class="btn-group zuno-heading-btn" role="group">
        <a href="{{ route('permits.permit.index') }}" class="btn btn-primary" title="Ver todos">
            <i class="ion-navicon"></i> Ver todas
        </a>
    </div>
    </div>
        <div class="zuno-list-body">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="permits">Vacaciones</a></li>
            <li class="active">Crear nueva</li>
        </ol>

        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form id="createForm" method="POST" action="{{ route('permits.permit.store') }}" accept-charset="UTF-8" id="create_permit_form" name="create_permit_form" class="form-horizontal">
                {{ csrf_field() }}
                @include ('permits.form', ['permit' => null,])               
            </form>

        </div>
        <div class="zuno-list-footer">
            <a href="{{ route('permits.permit.index') }}" class="btn btn-default" title="Cancelar">
                Cancelar
            </a>    
            <input class="btn btn-primary" type="submit" form="createForm" value="Guardar Vacaciones">
        </div>
</div>
@endsection



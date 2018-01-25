@extends('layouts.app')

@section('content')

<div class="zuno-layout" ng-controller="permitsController as cont">
<div class="preloader-container">
                <div class="preloader-back"></div>
                
                <div class="preloader-progress">
                    <div class="preloader-message">
                        Cargando información...
                    </div>
                    <div class="progress">
                        <div class="indeterminate"></div>
                    </div>
                </div> 
            </div>
    <div class="zuno-list-heading">
    <div class="table-options">
        <div class="form form-inline">
            <div class="form-group col-md-7 options-item">
                <input type="text" class="form-control" placeholder="Ingrese criterio de busqueda">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default">
                <i class="ion-ios-search"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="results-length options-item" style="">
        <span>Mostrando <% vm.data.total %> de <% vm.data.to %> </span>
    </div>
    <div class="btn-group zuno-heading-btn" role="group">
        <a href="{{ route('permits.permit.create') }}" class="btn btn-primary" title="Create New Permit">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
        </a>
    </div>
    </div>
    <div class="zuno-list-body">
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="permits">Vacaciones</a></li>
        <li class="active">Ver todas</li>
    </ol>
    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif
            <div class="layout-no-data" ng-show="vm.data.data.length === 0">
                <div class="no-data">
                    <i class="ion-ios-information-outline"></i>
                    <h4>¡Ups!, parece que aún no has registrado vacaciones</h4>
                </div>
            </div>
       
            <div class="table-responsive">

                <table class="table table-bordered zuno-table">
                    <thead>
                        <tr>
                            <th>Cnt</th>
                            <th>Fch</th>
                            <th>Ini</th>
                            <th>Fin</th>
                            <th>Obs</th>
                            <th>Sta</th>
                            <th>Tpo</th>
                            <th>Fecadi1</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr ng-repeat="p in vm.data.data">
                            <td><% p.cnt %></td>
                            <td><% p.fch %></td>
                            <td><% p.ini %></td>
                            <td><% p.fin %></td>
                            <td><% p.obs %></td>
                            <td><% p.sta %></td>
                            <td><% p.tpo %></td>
                            <td><% p.fecadi1 %></td>
                           
                            <td class="text-center table-options" >                               
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Detalles <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a ng-href="permits/show/<% p.id %>">Detalles</a></li>
                                    <li><a ng-href="permits/<% p.id %>/edit">Editar</a></li>
                                    <li><a href="#">Eliminar</a></li>
                                </ul>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        <div>
            
        </div>
    </div>
    <div class="zuno-list-footer">
    <div class="zuno-list-footer">
            <nav aria-label="Page navigation" ng-show="vm.data.data.length > 0">
                <ul class="pagination">
                    <li ng-class="{'disabled': paginationObj.prevUrl == '' }">
                    <a ng-href="#" ng-click="goTo(paginationObj.prevUrl)" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li ng-repeat="li in paginationObj.links track by $index" ng-class="{'active': li.label == paginationObj.current }">
                        <a ng-href="#" ng-click="goTo(li.index)"><% li.label %></a>
                    </li>
                    <li ng-class="{'disabled': paginationObj.nextUrl == '' }">
                    <a ng-href="#" ng-click="goTo(paginationObj.nextUrl)" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
</div>
@endsection
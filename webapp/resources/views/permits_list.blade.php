@extends('layouts.app')

@section('content')
    <div class="zuno-list" ng-controller="permitsController">
        <!-- <div class="zuno-list-heading">
        
        </div> -->
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
        <div class="zuno-list-body">
            <div class="table-responsive">
            <table class="table table-bordered zuno-table">
                <thead>
                    <tr>
                        <th colspan="4" class="table-options-h">    
                            <div class="table-options">
                                <div class="form form-inline">
                                    <div class="form-group col-md-7">
                                        <input type="text" class="form-control" placeholder="Ingrese criterio de busqueda">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Buscar">
                                    </div>
                                </div>
                            </div>
                            <div class="results-length" style="">
                                <span>Mostrando 100 resultados de 123939</span>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th width="2%"><input type="checkbox"></th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-dblclick="showRowDetails()">
                        <td><input type="checkbox"></td>
                        <td>198273</td>
                        <td>Jean Robles</td>
                        <td>12/05/2017</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="zuno-list-footer">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
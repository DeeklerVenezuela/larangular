(function() {
    
        'use strict';
    
        angular
            .module('app')
            .controller('permitsController', permitsController);  
    
        function permitsController($http, $scope, $timeout, $rootScope) {
    
            $scope.vm = [];
            //Controller initialization

            //Show table row details
            $scope.showRowDetails = function(){
                alert('showing row details');
            }

            $scope.getData = function(){
                $rootScope.preloader.show();
                $http.get('permits/all').then(function(res){
                    if(res){
                        $scope.vm = res;
                        $rootScope.preloader.hide();
                    }
                }).catch(function(err){
                    alert('Error getting data');
                    $rootScope.preloader.hide();
                })
            }

            $scope.initializeCtlr = function(){
                $scope.getData();
            }

            $scope.initializeCtlr();

            
        }
    
    })();
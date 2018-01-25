(function() {
    
        'use strict';
    
        angular
            .module('app')
            .controller('permitsController', permitsController)
            .controller('permitsCreateController', permitsCreateController);  
    
        function permitsController($http, $scope, $timeout, $rootScope) {
    
            $scope.vm = [];
            //Controller initialization

            //Show table row details
            $scope.showRowDetails = function(){
                alert('showing row details');
            }

            $scope.getData = function(){
                $rootScope.preloader.show();
                var page = $rootScope.getUrlParameterByName('page');
                $http.get('permits/all?page=' + page).then(function(res){
                    if(res){
                        $scope.vm = res;
                        $rootScope.preloader.hide();
                        $scope.createPagination($scope.vm.data);
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

            $scope.createPagination = function(data){
                if(data){
                    $scope.paginationObj = {
                        links: [],
                        prevUrl: 'permits?page=' + 1,
                        nextUrl: 'permits?page=' + data.last_page,
                        current: data.current_page
                    };

                    for(var i = 1; i <= data.last_page; i++){
                        var el = {
                            label: i ,
                            index: 'permits?page=' + i
                        };
                        $scope.paginationObj.links.push(el);
                    }

                    console.log($scope.paginationObj);
                }
            }            
        }
    

        function permitsCreateController($http, $scope, $timeout, $rootScope){
            $scope.initialize = function(){
                var date_input=$('.date-control');
                var options={
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    autoclose: true
                };
                date_input.datepicker(options);
            }

            $scope.initialize();
        }
    })();
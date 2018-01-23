(function() {
    
        'use strict';
    
        angular
            .module('app')
            .controller('UserController', UserController);  
    
        function UserController($http, $state) {
    
            var vm = this;
    
            vm.users;
            vm.error;
    
            vm.getUsers = function() {
    
                // This request will hit the index method in the AuthenticateController
                // on the Laravel side and will return the list of users
                $http.get('api/auth/authenticate').then(function(users) {
                    vm.users = users.data;
                }).catch(function(error) {
                    vm.error = error;
                    debugger;
                    if(error.data.error === 'token_not_provided'){
                        $state.go('auth');
                    }
                });
            }
        }
    
    })();
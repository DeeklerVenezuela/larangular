(function() {
    
        'use strict';
    
        angular
            .module('app', [])
            .controller('mainController', function($scope, $rootScope){
                $rootScope.preloader = {
                    show: function(){
                        $('.preloader-container').css('display','block');
                    },
                    hide: function(){
                        $('.preloader-container').css('display','none');
                    }
                }
            })
            .config(function() {
            });
    })();
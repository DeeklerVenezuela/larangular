(function() {
    
        'use strict';
    
        angular
            .module('app', [])
            .config(function($interpolateProvider) {
                $interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
            })
            .controller('mainController', function($scope, $rootScope){
                $rootScope.preloader = {
                    show: function(){
                        $('.preloader-container').css('display','block');
                    },
                    hide: function(){
                        $('.preloader-container').css('display','none');
                    }
                };

                $rootScope.goTo = function(path){
                    window.location.href = path;
                };

                $rootScope.getUrlParameterByName = function(name, url) {
                    if (!url) url = window.location.href;
                    name = name.replace(/[\[\]]/g, "\\$&");
                    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                        results = regex.exec(url);
                    if (!results) return null;
                    if (!results[2]) return '';
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                };
            })
            .config(function() {
            });
    })();
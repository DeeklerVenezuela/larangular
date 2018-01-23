(function () {

    'use strict';

    angular
        .module('app')
        .controller('sideNavCtlr', sideNavCtlr);

    function sideNavCtlr($scope) {

        var vm = this;

        vm.initializeCtlr = function () {
            // Initialize collapse button
        }

        //Controller initialization
        vm.initializeCtlr();
    }
})();
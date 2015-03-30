"use strict";
angular.module('setenta')

    .directive('instructorsCarousel', [
        function () {
            return {
                restrict: 'EA',
                templateUrl: 'instructorsCarousel.php'
            };
        }
    ]);
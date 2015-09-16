angular.module('setenta')

    .directive('instructorsCarousel', [
        function () {
            return {
                restrict: 'AE',
                link: function(scope, element, attrs) {
                    scope.contentUrl = attrs.ver + '/instructorsCarousel.php';
                    attrs.$observe("ver",function(v){
                        scope.contentUrl = attrs.ver + '/instructorsCarousel.php';
                    });
                },
                template: '<div ng-include="contentUrl"></div>'
            };
        }
    ]);
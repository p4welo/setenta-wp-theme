//angular.module('partner', [])
//
//    .run(['$rootScope', '$http', function ($rootScope, $http) {
//      $rootScope.step = -1;
//      $rootScope.done = false;
//      $rootScope.begin = function () {
//        $rootScope.step = 0;
//      };
//      $rootScope.advertisement = {preferences: {gender: 'man'}};
//      $rootScope.next = function () {
//        if ($rootScope.step < 3) {
//          $rootScope.step++;
//        }
//      };
//      $rootScope.previous = function () {
//        if ($rootScope.step > 0) {
//          $rootScope.step--;
//        }
//      };
//      $rootScope.send = function () {
//        $rootScope.step++;
//        $http.post('http://p4welo.usermd.net/api/partner', $rootScope.advertisement)
//            .then(function (response) {
//              $rootScope.done = true;
//            })
//            .catch(function (error) {
//              console.log(error);
//            });
//      };
//    }]);
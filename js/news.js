//angular.module('news', ['services', 'translations', 'ngSanitize', 'ngTouch', 'ngAnimate', 'ui.bootstrap'])
//
//    .run(['$rootScope', '$http', 'courseFactory', '$uibModal', function ($rootScope, $http, courseFactory, $uibModal) {
//      $rootScope.newsLoading = true;
//      $rootScope.postLimit = 5;
//
//      $http.get('/wp-json/posts').then(function (result) {
//        $rootScope.posts = result.data;
//        $rootScope.newsLoading = false;
//      });
//      $rootScope.loadMore = function () {
//        $rootScope.postLimit += 5;
//      };
//      $rootScope.toggleTag = function (tag) {
//        if ($rootScope.selectedTag == tag) {
//          $rootScope.selectedTag = null;
//          return;
//        }
//        $rootScope.selectedTag = tag;
//      };
//      $rootScope.status = {
//
//      };
//      $rootScope.courses = courseFactory.getRegistrationsByStyle();
//
//      $rootScope.open = function(course) {
//        $uibModal.open({
//          templateUrl: 'myModalContent.html',
//          size: 'sm',
//          controller: function($scope) {
//            $scope.course = course;
//          }
//        });
//      };
//    }]);
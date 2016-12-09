angular.module('news', ['ngSanitize'])

    .run(['$rootScope', '$http', function ($rootScope, $http) {
      $rootScope.newsLoading = true;
      $rootScope.postLimit = 5;

      $http.get('/wp-json/posts').then(function (result) {
        $rootScope.posts = result.data;
        $rootScope.newsLoading = false;
      });
      $rootScope.loadMore = function () {
        $rootScope.postLimit += 5;
      };
      $rootScope.toggleTag = function (tag) {
        if ($rootScope.selectedTag == tag) {
          $rootScope.selectedTag = null;
          return;
        }
        $rootScope.selectedTag = tag;
      };
    }]);
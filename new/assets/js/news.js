angular.module('newsWidget', ["ngResource", "ngSanitize"])
    .controller('newsCtrl', function ($scope, newsFactory) {
        $scope.newsLoading = true;
        newsFactory.findPosts().$promise.then(
            function (result) {
                $scope.posts = result;
                $scope.newsLoading = false;
            }
        )
    })
    .factory("newsFactory", function ($resource) {
        return $resource(null, null, {
            findPosts: {
                url: "/wp-json/posts?filter[posts_per_page]=50",
                method: 'GET',
                isArray: true
            }
        });
    })
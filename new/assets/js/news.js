angular.module('newsWidget', ["ngResource"])
    .controller('newsCtrl', function ($scope, newsFactory) {
        $scope.newsLoading = true;
        newsFactory.findPosts().$promise.then(
            function (result) {
                $scope.test = result;
                $scope.newsLoading = false;
            }
        )
    })
    .factory("newsFactory", function ($resource) {
        return $resource(null, null, {
            findPosts: {
                url: "/wp-json/posts",
                method: 'GET'
            }
        });
    })
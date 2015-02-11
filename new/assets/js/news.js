angular.module('newsWidget', ["ngResource", "ngSanitize"])
    .controller('registrationCtrl', function ($scope, newsFactory) {
        $scope.courseLoading = true;
        newsFactory.registrationCourses().$promise.then(
            function (result) {
                $scope.courses = result;
                $scope.courseLoading = false;
            }
        )
    })
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
            },
            registrationCourses: {
                url: "http://91.218.78.136/public/course/registration.json",
                method: 'JSONP',
                params: {callback: 'JSON_CALLBACK'},
                isArray: true
            }
        });
    });
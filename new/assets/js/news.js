angular.module('newsWidget', ["ngResource", "ngSanitize"])

    .controller('registrationCtrl', function ($scope, newsFactory) {
        $scope.courseLoading = true;
        newsFactory.registrationCourses().$promise.then(
            function (result) {
                var grouped = _.groupBy(result, function(course) { return course.style.sid; });
                $scope.courseGroups = _.values(grouped);
                $scope.courseLoading = false;
            }
        )
        $scope.resolveStyleImage = function (style) {
            if (style.name.lowercase.indexOf("balet") > -1) {
                return "ballet.png";
            }
            else if (style.name.lowercase.indexOf("taniec użytkowy") > -1) {
                return "pair.png";
            }
            else if (style.name.lowercase.indexOf("mix dance") > -1) {
                return "mix-dance.png";
            }
        }
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
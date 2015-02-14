angular.module('newsWidget', ["ngResource", "ngSanitize", "pascalprecht.translate"])

    .config(['$translateProvider', function ($translateProvider) {
        $translateProvider.translations('pl', {
            PN: 'Poniedziałek',
            WT: 'Wtorek',
            SR: 'Środa',
            CZ: 'Czwartek',
            PT: 'Piątek',
            SB: 'Sobota',
            ND: 'Niedziela'
        });

        $translateProvider.preferredLanguage('pl');
    }])

    .controller('registrationCtrl', ['$scope', 'newsFactory', function ($scope, newsFactory) {
        $scope.courseLoading = true;
        newsFactory.registrationCourses().$promise.then(
            function (result) {
                var grouped = _.groupBy(result, function (course) {
                    return course.style.sid;
                });
                $scope.courseGroups = _.values(grouped);
                $scope.courseLoading = false;
            }
        );
        $scope.resolveStyleImage = function (style) {
            if (style.name.indexOf("Balet") > -1) {
                return "ballet.png";
            }
            else if (style.name.indexOf("użytkowy") > -1) {
                return "pair.png";
            }
            else if (style.name.indexOf("Mix dance") > -1) {
                return "mix-dance.png";
            }
            else if (style.name.indexOf("Reggaeton") > -1) {
                return "reggaeton.png";
            }
            else if (style.name.indexOf("Hip hop") > -1) {
                return "hip-hop.png";
            }
            else if (style.name.indexOf("towarzyski") > -1) {
                return "ballroom.png";
            }
        };
    }])
    .controller('newsCtrl', ['$scope', 'newsFactory', function ($scope, newsFactory) {
        $scope.newsLoading = true;
        $scope.postLimit = 5;
        $scope.searchText = "";
        newsFactory.findPosts().$promise.then(
            function (result) {
                $scope.posts = result;
                $scope.newsLoading = false;
            }
        );
        $scope.loadMore = function () {
            $scope.postLimit += 5;
        };
        newsFactory.findTags().$promise.then(
            function (result) {
                $scope.tags = result;
            }
        );
        $scope.toggleTag = function (tag) {
            if ($scope.selectedTag == tag) {
                $scope.selectedTag = null;
                return;
            }
            $scope.selectedTag = tag;
        }
    }])
    .factory("newsFactory", ['$resource', function ($resource) {
        return $resource(null, null, {
            findPosts: {
                url: "/wp-json/posts?filter[posts_per_page]=50",
                method: 'GET',
                isArray: true
            },
            findTags: {
                url: "/wp-json/taxonomies/post_tag/terms",
                method: "GET",
                isArray: true
            },
            registrationCourses: {
                url: "http://91.218.78.136/public/course/registration.json",
                method: 'JSONP',
                params: {callback: 'JSON_CALLBACK'},
                isArray: true
            }
        });
    }]);
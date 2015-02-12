//angular.module('newsWidget', ["ngResource", "ngSanitize", "pascalprecht.translate"])
//
//    .config(['$translateProvider', function ($translateProvider) {
//        $translateProvider.translations('pl', {
//            PN: 'Poniedziałek',
//            WT: 'Wtorek',
//            SR: 'Środa',
//            CZ: 'Czwartek',
//            PT: 'Piątek',
//            SB: 'Sobota',
//            ND: 'Niedziela'
//        });
//
//        $translateProvider.preferredLanguage('pl');
//    }])
//
//    .controller('registrationCtrl', ['$scope', 'newsFactory', function ($scope, newsFactory) {
//        $scope.courseLoading = true;
//        newsFactory.registrationCourses().$promise.then(
//            function (result) {
//                var grouped = _.groupBy(result, function(course) { return course.style.sid; });
//                $scope.courseGroups = _.values(grouped);
//                $scope.courseLoading = false;
//            }
//        )
//        $scope.resolveStyleImage = function (style) {
//            if (style.name.indexOf("Balet") > -1) {
//                return "ballet.png";
//            }
//            else if (style.name.indexOf("użytkowy") > -1) {
//                return "pair.png";
//            }
//            else if (style.name.indexOf("Mix dance") > -1) {
//                return "mix-dance.png";
//            }
//            else if (style.name.indexOf("Reggaeton") > -1) {
//                return "reggaeton.png";
//            }
//            else if (style.name.indexOf("Hip hop") > -1) {
//                return "hip-hop.png";
//            }
//            else if (style.name.indexOf("towarzyski") > -1) {
//                return "ballroom.png";
//            }
//        }
//    }])
//    .controller('newsCtrl', ['$scope', 'newsFactory', function ($scope, newsFactory) {
//        $scope.newsLoading = true;
//        newsFactory.findPosts().$promise.then(
//            function (result) {
//                $scope.posts = result;
//                $scope.newsLoading = false;
//            }
//        )
//    }])
//    .factory("newsFactory", ['$resource', function ($resource) {
//        return $resource(null, null, {
//            findPosts: {
//                url: "/wp-json/posts?filter[posts_per_page]=50",
//                method: 'GET',
//                isArray: true
//            },
//            registrationCourses: {
//                url: "http://91.218.78.136/public/course/registration.json",
//                method: 'JSONP',
//                params: {callback: 'JSON_CALLBACK'},
//                isArray: true
//            }
//        });
//    }]);

angular.module("newsWidget",["ngResource","ngSanitize","pascalprecht.translate"]).config(["$translateProvider",function(e){e.translations("pl",{PN:"Poniedziałek",WT:"Wtorek",SR:"Środa",CZ:"Czwartek",PT:"Piątek",SB:"Sobota",ND:"Niedziela"}),e.preferredLanguage("pl")}]).controller("registrationCtrl",["$scope","newsFactory",function(e,n){e.courseLoading=!0,n.registrationCourses().$promise.then(function(n){var o=_.groupBy(n,function(e){return e.style.sid});e.courseGroups=_.values(o),e.courseLoading=!1}),e.resolveStyleImage=function(e){return e.name.indexOf("Balet")>-1?"ballet.png":e.name.indexOf("użytkowy")>-1?"pair.png":e.name.indexOf("Mix dance")>-1?"mix-dance.png":e.name.indexOf("Reggaeton")>-1?"reggaeton.png":e.name.indexOf("Hip hop")>-1?"hip-hop.png":e.name.indexOf("towarzyski")>-1?"ballroom.png":void 0}}]).controller("newsCtrl",["$scope","newsFactory",function(e,n){e.newsLoading=!0,n.findPosts().$promise.then(function(n){e.posts=n,e.newsLoading=!1})}]).factory("newsFactory",["$resource",function(e){return e(null,null,{findPosts:{url:"/wp-json/posts?filter[posts_per_page]=50",method:"GET",isArray:!0},registrationCourses:{url:"http://91.218.78.136/public/course/registration.json",method:"JSONP",params:{callback:"JSON_CALLBACK"},isArray:!0}})}]);
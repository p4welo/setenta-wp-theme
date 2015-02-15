$(document).ready(function () {
    var yearCopy = $('#year-copy'), d = new Date();
    if (d.getFullYear() === 2013) { yearCopy.html('2013'); } else { yearCopy.html('2013-' + d.getFullYear().toString()); }
});

$(document).ready(function ($) {

    var _CaptionTransitions = [];

    var options = {
        $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
        $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
        $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
        $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

        $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
            $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
            $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
            $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
            $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
        },

        $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
            $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
            $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
            $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
            $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
            $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            $Scale: false                                   //Scales bullets navigator or not while slider scale
        },

        $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
            $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
        }
    };

    var jssor_slider1 = new $JssorSlider$("slider-container", options);

    function ScaleSlider() {
        var bodyWidth = document.body.clientWidth;
        if (bodyWidth)
            jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
        else
            window.setTimeout(ScaleSlider, 30);
    }

    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
});;angular.module('newsWidget', ["ngResource", "ngSanitize", "pascalprecht.translate"])

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
        };
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
    }]);;angular.module("scheduleWidget", ['ngResource', 'pascalprecht.translate'])

    .config(function ($translateProvider) {
        $translateProvider.translations('pl', {
            PN: 'Poniedziałek',
            WT: 'Wtorek',
            SR: 'Środa',
            CZ: 'Czwartek',
            PT: 'Piątek',
            SB: 'Sobota',
            ND: 'Niedziela',

            BEGINNER: "Początkujący",
            INTERMEDIATE: "Średniozaawansowany",
            ADVANCED: "Zaawansowany",
            OPEN: "Otwarty"
        });
        $translateProvider.preferredLanguage('pl');
    })

    .controller('scheduleCtrl', ['$scope', '$filter','courseHttpClient','courseService', function ($scope, $filter, courseHttpClient, courseService) {
        $scope.loadingView = true;
        $scope.courseList = [];
        $scope.days = ['PN', 'WT', 'SR', 'CZ', 'PT', 'SB', 'ND'];

        $scope.initCalendar = function () {
            courseHttpClient.findSchedule().$promise.then(
                function (result) {
                    $scope.courseList = result;

                    var bigOptions = courseService.getScheduleOptionsByRoom('d', result);
                    $('#bigSchedule').fullCalendar(bigOptions);

                    var smallOptions = courseService.getScheduleOptionsByRoom('m', result);
                    $('#smallSchedule').fullCalendar(smallOptions);

                    $scope.loadingView = false;
                }
            );
        };
    }])

    .factory('courseHttpClient', ['$resource', function ($resource) {

        var SERVER_URL = "http://91.218.78.136/public";

        var utils = {
            getRestUrl: function (uri) {
                return SERVER_URL + uri;
            }
        };

        var FUTURE_CLASS_LIST_KEY = utils.getRestUrl("/course/registration.json");
        var FIND_SCHEDULE_KEY = utils.getRestUrl("/course/list.json");

        return $resource(null, null, {
            findFuture: {
                url: FUTURE_CLASS_LIST_KEY,
                method: 'JSONP',
                params: {callback: 'JSON_CALLBACK'},
                isArray: true
            },
            findSchedule: {
                url: FIND_SCHEDULE_KEY,
                method: 'JSONP',
                params: {callback: 'JSON_CALLBACK'},
                isArray: true
            }
        });
    }])
    .factory("courseService", [function () {

        var getDateByDanceClass = function (thisMonday, danceClass) {
            var day = thisMonday.getDate();

            var startResult = new Date(thisMonday);
            startResult.setDate(day + getDayNoByName(danceClass.day));
            var startTime = danceClass.startTime.split(':');
            startResult.setHours(startTime[0]);
            startResult.setMinutes(startTime[1]);
            startResult.setSeconds(0);

            var endResult = new Date(thisMonday);
            endResult.setDate(day + getDayNoByName(danceClass.day));
            var endTime = danceClass.endTime.split(':');
            endResult.setHours(endTime[0]);
            endResult.setMinutes(endTime[1]);
            endResult.setSeconds(0);

            return {
                start: startResult,
                end: endResult
            };
        };

        var getDayNoByName = function (day) {
            if (day == "PN") {
                return 0;
            }
            else if (day == "WT") {
                return 1;
            }
            else if (day == "SR") {
                return 2;
            }
            else if (day == "CZ") {
                return 3;
            }
            else if (day == "PT") {
                return 4;
            }
            else if (day == "SB") {
                return 5;
            }
            else if (day == "ND") {
                return 6;
            }
            else {
                return -1;
            }
        };

        var getLevelDescription = function (level) {
            if (level == "BEGINNER") {
                return "początkujący";
            }
            else if (level == "INTERMEDIATE") {
                return "średniozaaw.";
            }
            else if (level == "ADVANCED") {
                return "zaawansowany";
            }
            else if (level == "OPEN") {
                return "otwarty";
            }
            else {
                return "";
            }
        };

        var resolveDescription = function (c) {
            var result = "<h4>" + c.style.name + "</h4>" +
                "<table>" +
                "<tr>" +
                "<td><strong>Instruktor:&nbsp;&nbsp;&nbsp;</strong></td><td>";
            if (c.instructor !== null) {
                result += c.instructor.firstName;
                if (c.instructor.lastName !== null) {
                    result += " " + c.instructor.lastName;
                }
            }
            result += "</td></tr>";
            if (c.level !== "") {
                result += "<tr>" +
                    "<td><strong>Poziom: </strong></td><td>";
                if (c.level == 'BEGINNER') {
                    result += "podstawowy";
                }
                else if (c.level == 'INTERMEDIATE') {
                    result += "średniozaawansowany";
                }
                else if (c.level == 'ADVANCED') {
                    result += "zaawansowany";
                }
                else if (c.level == 'OPEN') {
                    result += "otwarty";
                }
                else {
                    result += "";
                }
                result += "</td>" +
                    "</tr>";
            }
            result += "<tr>" +
                "<td><strong>Sala: </strong></td><td>";
            result += c.room.name;
            result += "</td>" +
                "</tr>";
            result += "</table>";
            if (c.canRegister) {
                result += "<div class='alert-danger alert-popover'><i class='fa fa-pencil'></i> ZAPISY</div>";
            }
            else if (!c.canJoin) {
                result += "<div class='alert-danger alert-popover'><i class='fa fa-ban'></i> BRAK MIEJSC</div>";
            }
            if (c.canJoin) {
                result += "<div class='alert-danger alert-popover'><i class='fa fa-plug'></i> WOLNE MIEJSCA</div>";
            }
            return result;
        };

        return {
            getScheduleOptionsByRoom: function (roomName, courseList) {
                return {
                    lang: "pl",
                    defaultView: "agendaWeek",
                    axisFormat: 'H:mm',
                    allDaySlot: false,
                    header: {
                        left: '',
                        center: '',
                        right: ''
                    },
                    slotDuration: "00:15:00",
                    minTime: "10:00:00",
                    maxTime: "23:00:00",
                    height: 'auto',
                    columnFormat: {
                        week: 'dddd'
                    },
                    events: function (start, end, timezone, callback) {

                        var events = [];
                        courseList.forEach(function (danceClass) {
                            if (danceClass.room.code == roomName) {
                                var date = getDateByDanceClass(start._d, danceClass);

                                events.push({
                                    sid: danceClass.sid,
                                    title: danceClass.style.name,
                                    level: getLevelDescription(danceClass.level),
                                    start: date.start,
                                    end: date.end,
                                    allDay: false,
                                    canJoin: danceClass.canJoin,
                                    canRegister: danceClass.canRegister,
                                    description: resolveDescription(danceClass)
                                });
                            }
                        });
                        callback(events);
                    },
                    eventRender: function (event, element) {
                        var ap = "";

                        ap += "<br/><input type='hidden' name='sid' value='" + event.sid + "'>";
                        if (event.canRegister) {
                            element.addClass("course-register");
                            ap += '<span class="badge badge-danger">ZAPISY</span>';
                        }
                        else if (!event.canJoin) {
                            element.addClass("course-ban");
                            ap += "<em>" + event.level + "</em><br/><span class='badge badge-error'>BRAK MIEJSC</span>";
                        }
                        else {
                            ap += "<em>" + event.level + "</em>";
                        }
                        element.find('.fc-title').append(ap);
                        element.popover({
                            "trigger": "hover",
                            "html": true,
                            "container": "body",
                            "placement": "top",
                            "content": event.description
                        });
                    }
                };
            }
        };
    }]
);
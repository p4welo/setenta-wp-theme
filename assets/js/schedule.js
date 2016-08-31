angular.module("setenta")

    .config(['$translateProvider', function ($translateProvider) {
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
            OPEN: "Otwarty",

            REGISTRATION: "Zapisy",
            CAN_JOIN: "Dołącz",
            NO_PLACE: "Brak miejsc"

        });
        $translateProvider.preferredLanguage('pl');
    }])

    .controller('scheduleCtrl', ['$scope', 'courseHttpClient', 'courseService', '$timeout', function ($scope, $http) {
        $scope.loadingView = true;
        $scope.courseList = [];
        $scope.days = ['PN', 'WT', 'SR', 'CZ', 'PT'];
        $scope.scheduleId = 0;

        $scope.courseList = [
            {
                "day": "PN",
                "startTime": "17:00",
                "endTime": "18:00",
                "style": {
                    "name": "Formacja taneczna I"
                },
                "level": "BEGINNER",
                "description": ""
            },
            {
                "day": "PN",
                "startTime": "18:00",
                "endTime": "19:00",
                "style": {
                    "name": "Formacja taneczna II"
                },
                "level": "ADVANCED",
                "description": ""
            },
            {
                "day": "PN",
                "startTime": "19:00",
                "endTime": "20:00",
                "style": {
                    "name": "Taniec użytkowy"
                },
                "level": "BEGINNER",
                "description": "Start 19 września"
            },
            {
                "day": "PN",
                "startTime": "20:00",
                "endTime": "21:00",
                "style": {
                    "name": "Kurs przedsylwestrowy"
                },
                "level": "BEGINNER",
                "description": ""
            },
            {
                "day": "PN",
                "startTime": "21:00",
                "endTime": "22:00",
                "style": {
                    "name": "Salsa kubańska"
                },
                "level": "INTERMEDIATE",
                "description": "Dołącz"
            },

            {
                "day": "WT",
                "startTime": "17:00",
                "endTime": "17:45",
                "style": {
                    "name": "Balet z el. gimnastyki art."
                },
                "level": "BEGINNER",
                "description": "4-7 lat"
            },
            {
                "day": "WT",
                "startTime": "17:45",
                "endTime": "18:30",
                "style": {
                    "name": "Balet z el. gimnastyki art."
                },
                "level": "ADVANCED",
                "description": "4-7 lat"
            },
            {
                "day": "WT",
                "startTime": "20:30",
                "endTime": "21:30",
                "style": {
                    "name": "Taniec użytkowy"
                },
                "level": "INTERMEDIATE",
                "description": "Start 8 września"
            },
            {
                "day": "WT",
                "startTime": "21:30",
                "endTime": "22:30",
                "style": {
                    "name": "Taniec użytkowy"
                },
                "level": "INTERMEDIATE",
                "description": ""
            },

            {
                "day": "SR",
                "startTime": "17:00",
                "endTime": "18:00",
                "style": {
                    "name": "Formacja taneczna I"
                },
                "level": "BEGINNER",
                "description": ""
            },
            {
                "day": "SR",
                "startTime": "18:00",
                "endTime": "19:00",
                "style": {
                    "name": "Formacja taneczna II"
                },
                "level": "ADVANCED",
                "description": ""
            },
            {
                "day": "SR",
                "startTime": "19:00",
                "endTime": "20:00",
                "style": {
                    "name": "Formacja taneczna dzieci niepełnosprawnych"
                },
                "level": "",
                "description": ""
            },
            {
                "day": "SR",
                "startTime": "20:00",
                "endTime": "21:00",
                "style": {
                    "name": "Taniec użytkowy"
                },
                "level": "BEGINNER",
                "description": "Start 21 września"
            },

            {
                "day": "CZ",
                "startTime": "16:15",
                "endTime": "17:00",
                "style": {
                    "name": "Mix dance"
                },
                "level": "ADVANCED",
                "description": "Dołącz"
            },
            {
                "day": "CZ",
                "startTime": "17:00",
                "endTime": "17:45",
                "style": {
                    "name": "Mix dance"
                },
                "level": "BEGINNER",
                "description": "Dołącz"
            },
            {
                "day": "CZ",
                "startTime": "17:00",
                "endTime": "17:45",
                "style": {
                    "name": "Balet z el. gimnastyki art."
                },
                "level": "ADVANCED",
                "description": "Sala 2"
            },
            {
                "day": "CZ",
                "startTime": "17:00",
                "endTime": "18:00",
                "style": {
                    "name": "Taniec nowoczesny"
                },
                "level": "ADVANCED",
                "description": "Sala 3"
            },
            {
                "day": "CZ",
                "startTime": "17:45",
                "endTime": "18:30",
                "style": {
                    "name": "Balet z el. gimnastyki art."
                },
                "level": "BEGINNER",
                "description": "4-7 lat"
            },
            {
                "day": "CZ",
                "startTime": "17:45",
                "endTime": "18:30",
                "style": {
                    "name": "Balet z el. gimnastyki art."
                },
                "level": "BEGINNER",
                "description": "4-7 lat - Sala 2"
            },
            {
                "day": "CZ",
                "startTime": "20:30",
                "endTime": "21:00",
                "style": {
                    "name": "Taniec towarzyski"
                },
                "level": "INTERMEDIATE",
                "description": "Dołącz"
            },

            {
                "day": "PT",
                "startTime": "17:00",
                "endTime": "17:45",
                "style": {
                    "name": "Hip hop"
                },
                "level": "BEGINNER",
                "description": ""
            },
            {
                "day": "PT",
                "startTime": "17:45",
                "endTime": "18:30",
                "style": {
                    "name": "Mix dance"
                },
                "level": "BEGINNER",
                "description": ""
            },
            {
                "day": "PT",
                "startTime": "18:30",
                "endTime": "19:30",
                "style": {
                    "name": "Salsa kubańska"
                },
                "level": "BEGINNER",
                "description": "Dołącz"
            },
            {
                "day": "PT",
                "startTime": "19:30",
                "endTime": "20:30",
                "style": {
                    "name": "Salsa kubańska"
                },
                "level": "INTERMEDIATE",
                "description": "Dołącz"
            },
            {
                "day": "PT",
                "startTime": "20:30",
                "endTime": "21:30",
                "style": {
                    "name": "Bachata"
                },
                "level": "BEGINNER",
                "description": ""
            }
        ];
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
                if (c.instructors !== null) {
                    c.instructors.forEach(function (i) {
                        result += i.firstName + " ";
                    });
                }
                else if (c.instructor !== null) {
                    result += c.instructor.firstName;
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
                    result += "<div class='alert-danger alert-popover text-center'><i class='fa fa-pencil'></i> ZAPISY</div>";
                }
                else if (!c.canJoin) {
                    result += "<div class='alert-danger alert-popover text-center'><i class='fa fa-ban'></i> BRAK MIEJSC</div>";
                }
                if (c.canJoin) {
                    result += "<div class='alert-danger alert-popover text-center'><i class='fa fa-plug'></i> WOLNE MIEJSCA</div>";
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
                        timeFormat: 'H:mm',
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
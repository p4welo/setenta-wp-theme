angular
    .module('schedule', ['pascalprecht.translate'])

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

    .run(['$rootScope', function ($rootScope) {
      $rootScope.courseList = [
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
      $rootScope.days = ['PN', 'WT', 'SR', 'CZ', 'PT'];
      $rootScope.scheduleId = 0;
    }]);
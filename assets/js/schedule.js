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

        BEG: "Początkujący",
        INT: "Średniozaawansowany",
        ADV: "Zaawansowany",
        OPEN: "Otwarty",

        REGISTRATION: "Zapisy",
        CAN_JOIN: "Dołącz",
        NO_PLACE: "Brak miejsc"

      });
      $translateProvider.preferredLanguage('pl');
    }])

    .run(['$rootScope', function ($rootScope) {
      $rootScope.courses = {
        PN: [
          {
            startTime:    '17:00',
            endTime:      '18:00',
            name:         'Formacja taneczna (do 7 lat)',
            instructor:   'Andżelika Tymiak',
            level:        'BEG'
          },
          {
            startTime:    '18:00',
            endTime:      '19:00',
            name:         'Formacja taneczna (6-11 lat)',
            instructor:   'Barbara Radomska',
            level:        'ADV'
          },
          {
            startTime:    '18:00',
            endTime:      '19:00',
            name:         'Latino solo',
            instructor:   'Magdalena Mazij',
            level:        'BEG'
          },
          {
            startTime:    '19:00',
            endTime:      '20:00',
            name:         'Taniec towarzyski od podstaw',
            instructor:   'Katarzyna Michalak',
            level:        'BEG'
          },
          {
            startTime:    '20:00',
            endTime:      '21:00',
            name:         'Taniec towarzyski',
            instructor:   'Katarzyna Michalak',
            level:        'INT'
          },
          {
            startTime:    '21:00',
            endTime:      '22:00',
            name:         'Salsa kubańska',
            instructor:   'Jacek Sztorc',
            level:        'INT'
          }
        ],
        WT: [
          {
            startTime:    '17:00',
            endTime:      '17:45',
            name:         'Balet z elem. gimnastyki artystycznej (4-6 lat)',
            instructor:   'Magda Mróz-Murawska',
            level:        'BEG'
          },
          {
            startTime:    '17:45',
            endTime:      '18:30',
            name:         'Balet z elem. gimnastyki artystycznej (4-6 lat)',
            instructor:   'Magda Mróz-Murawska',
            level:        'INT'
          },
          {
            startTime:    '18:30',
            endTime:      '19:30',
            name:         'Wynajem sali'
          },
          {
            startTime:    '19:30',
            endTime:      '20:30',
            name:         'Taniec użytkowy',
            instructor:   'Magda Mróz-Murawska',
            level:        'BEG'
          },
          {
            startTime:    '20:30',
            endTime:      '21:30',
            name:         'Taniec użytkowy',
            instructor:   'Magda Mróz-Murawska',
            level:        'INT'
          }
        ],
        SR: [
          {
            startTime:    '17:00',
            endTime:      '18:00',
            name:         'Formacja taneczna (do 7 lat)',
            instructor:   'Andżelika Tymiak',
            level:        'BEG'
          },
          {
            startTime:    '18:00',
            endTime:      '19:00',
            name:         'Formacja taneczna (6-11 lat)',
            instructor:   'Barbara Radomska',
            level:        'ADV'
          },
          {
            startTime:    '19:00',
            endTime:      '20:00',
            name:         'Taniec towarzyski',
            instructor:   'Andżelika Tymiak',
            registration: true,
            level:        'BEG'
          },
          {
            startTime:    '20:00',
            endTime:      '21:00',
            name:         'Taniec użytkowy',
            instructor:   'Magda Mróz-Murawska',
            level:        'ADV'
          },
          {
            startTime:    '21:00',
            endTime:      '22:00',
            name:         'Taniec użytkowy',
            instructor:   'Magda Mróz-Murawska',
            registration: true,
            level:        'BEG'
          }
        ],
        CZ: [
          {
            startTime:    '17:00',
            endTime:      '17:45',
            name:         'Mix dance (4-7 lat)',
            instructor:   'Magdalena Mazij',
            level:        'BEG'
          },
          {
            startTime:    '17:45',
            endTime:      '18:30',
            name:         'Balet z elem. gimnastyki artystycznej (4-7 lat)',
            instructor:   'Magda Mróz-Murawska',
            level:        'BEG'
          },
          {
            startTime:    '18:30',
            endTime:      '19:30',
            name:         'Wynajem sali'
          },
          {
            startTime:    '18:30',
            endTime:      '19:30',
            name:         'Latino solo',
            instructor:   'Magdalena Mazij',
            level:        'BEG'
          },
          {
            startTime:    '18:30',
            endTime:      '19:30',
            name:         'Hip hop (12-18 lat)',
            instructor:   'Hubert Świątkowski',
            level:        'INT'
          },
          {
            startTime:    '19:30',
            endTime:      '20:30',
            name:         'Reggaeton',
            instructor:   'Magdalena Mazij',
            level:        'ADV'
          },
          {
            startTime:    '19:30',
            endTime:      '20:30',
            name:         'Taniec użytkowy',
            registration: true,
            level:        'BEG'
          },
          {
            startTime:    '20:30',
            endTime:      '22:00',
            name:         'Taniec towarzyski',
            instructor:   'Katarzyna Michalak',
            level:        'ADV'
          }
        ],
        PT: [
          {
            startTime:    '16:45',
            endTime:      '17:50',
            name:         'Taniec nowoczesny (8-14 lat)',
            instructor:   'Andżelika Tymiak',
            level:        'BEG'
          },
          {
            startTime:    '17:50',
            endTime:      '18:30',
            name:         'Mix dance (4-7 lat)',
            instructor:   'Andżelika Tymiak',
            level:        'BEG'
          },
          {
            startTime:    '18:30',
            endTime:      '19:30',
            name:         'Taniec użytkowy',
            registration: true,
            level:        'BEG'
          },
          {
            startTime:    '20:30',
            endTime:      '21:30',
            name:         'Bachata',
            instructor:   'Marcin Pęczkowski',
            level:        'BEG'
          }
        ],
        SB: [
          {
            startTime:    '19:00',
            endTime:      '20:00',
            name:         'Taniec użytkowy',
            registration: true,
            level:        'BEG'
          }
        ]
      };
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
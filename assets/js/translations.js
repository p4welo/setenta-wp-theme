angular.module('translations', ['pascalprecht.translate'])

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
      $translateProvider.useSanitizeValueStrategy('sanitize');
    }]);
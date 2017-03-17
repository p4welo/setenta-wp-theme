angular
    .module('schedule', ['services', 'translations'])

    .run(['$rootScope', 'courseFactory', function ($rootScope, courseFactory) {
      $rootScope.courses = courseFactory.getByDay();
      $rootScope.days = ['PN', 'WT', 'SR', 'CZ', 'PT'];
      $rootScope.scheduleId = 0;
    }]);
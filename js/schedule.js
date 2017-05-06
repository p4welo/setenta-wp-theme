angular
    .module('schedule', ['services', 'translations'])

    .run(['$rootScope', 'courseFactory', function ($rootScope, courseFactory) {
      courseFactory.getByDay().then(function(result) {
        $rootScope.courses = result;
      });
      $rootScope.days = ['PN', 'WT', 'SR', 'CZ', 'PT'];
      $rootScope.scheduleId = 0;
    }]);
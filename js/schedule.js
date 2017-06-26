angular
    .module('schedule', ['services', 'translations', 'ui.bootstrap.modal'])

    .run(['$rootScope', 'courseFactory', '$uibModal', function ($rootScope, courseFactory, $uibModal) {
      courseFactory.getByDay().then(function (result) {
        $rootScope.courses = result;
      });
      //$rootScope.days = ['PN', 'WT', 'SR', 'CZ', 'PT'];
      $rootScope.days = [
        {id: 0},
        {id: 1},
        {id: 2},
        {id: 3},
        {id: 4},
        {id: 5},
        {id: 6}
      ];
      //$rootScope.scheduleId = 0;
      $rootScope.open = function() {
        $uibModal.open({
          templateUrl: 'myModalContent.html'
        });
      };
    }]);
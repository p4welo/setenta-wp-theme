import template from './courseList.html';

export default {
  template: template,
  controller(scheduleService, $uibModal) {
    'ngInject';

    this.register = (course) => {
      $uibModal.open({
        component: 'registerToCourse',
        resolve: {
          course: () => course
        }
      })
    };

    this.$onInit = () => {
      this.days = scheduleService.getDays();
      scheduleService.getByDay().then((result) => {
        this.courses = result;
      });
    }
  }
};

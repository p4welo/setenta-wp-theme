import template from './courseList.html';

export default {
  template: template,
  controller(scheduleService, notificationService, $uibModal) {
    'ngInject';

    this.register = (course) => {
      $uibModal.open({
        component: 'registerToCourse',
        resolve: {
          course: () => course
        }
      }).result.then((result) => {
        notificationService.success("Pomyślnie zapisano na kurs");
      });
    };

    this.$onInit = () => {
      this.days = scheduleService.getDays();
      scheduleService.getByDay().then((result) => {
        this.courses = result;
      });
    }
  }
};

import template from './schedule.html';

export default {
  template: template,
  controller(scheduleService) {
    'ngInject';

    this.$onInit = () => {
      scheduleService.getByDay().then((result) => {
        this.courses = result;
      });
      this.days = [
        {id: 0},
        {id: 1},
        {id: 2},
        {id: 3},
        {id: 4},
        {id: 5},
        {id: 6}
      ];
    }

 }
};

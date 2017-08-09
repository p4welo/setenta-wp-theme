import template from './schedule.html';

export default {
  template: template,
  controller(scheduleService) {
    'ngInject';

    this.$onInit = () => {
      this.days = scheduleService.getDays();
      scheduleService.findAll().then(result => (this.courses = result.data));
    }
  }
};

import template from './registerToCourse.html';

export default {
  template: template,
  bindings: {
    resolve: '<',
    close: '&',
    dismiss: '&'
  },
  controller(scheduleService) {
    'ngInject';

    this.ok = () => {
      scheduleService.registerToCourse(this.course._id, this.customer)
          .then((result) => this.close({$value: result}));
    };

    this.cancel = () => {
      this.dismiss({$value: 'cancel'});
    };

    this.$onInit = () => {
      this.course = this.resolve.course;
      this.customer = {};
    }
  }
};

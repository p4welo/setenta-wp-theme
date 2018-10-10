import template from './courseDetails.html';

export default {
  template: template,
  bindings: {
    course: '<',
    register: '&'
  },
  controller() {
    this.registerToCourse = (course) => {
      this.register({$event: course});
    };

    this.$onInit = () => {
    }
  }
};

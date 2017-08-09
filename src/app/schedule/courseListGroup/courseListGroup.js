import template from './courseListGroup.html';

export default {
  template: template,
  bindings: {
    day: '<',
    courses: '<'
  },
  controller() {
    'ngInject';


    this.$onInit = () => {
    }
  }
};

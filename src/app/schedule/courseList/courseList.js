import template from './courseList.html';

export default {
  template: template,
  bindings: {
    day: '<',
    courses: '<'
  },
  controller() {
    'ngInject';

    this.toggleOpen = (course) => {
      course.opened=!course.opened;
      this.courses.map((c) => {
        if (c._id !== course._id) {
          c.opened = false;
        }
      })
    };

    this.$onInit = () => {
      this.levels = {
        BEG: {label: 'Początkujący'},
        INT: {label: 'Średniozaawansowany'},
        ADV: {label: 'Zaawansowany'}
      };
    }
  }
};

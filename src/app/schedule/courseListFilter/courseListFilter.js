import template from './courseListFilter.html';

export default {
  template: template,
  bindings: {
    days: '<',
    onFilterChange: '&'
  },
  controller() {
    'ngInject';

    this.$onInit = () => {
    }
  }
};

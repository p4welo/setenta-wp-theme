import template from './partner.html';

export default {
  template: template,
  controller($http) {
    'ngInject';

    this.begin = () => (this.step = 0);
    this.next = () => {
      if (this.step < 3) {
        this.step++;
      }
    };
    this.previous = () => {
      if (this.step > 0) {
        this.step--;
      }
    };
    this.send = () => {
      this.step++;
      $http.post('https://p4welo.usermd.net/api/partner', this.advertisement)
          .then((response) => (this.done = true))
          .catch(console.log);
    };

    this.$onInit = () => {
      this.step = -1;
      this.done = false;
      this.advertisement = {preferences: {gender: 'man'}};
    };
  }
};

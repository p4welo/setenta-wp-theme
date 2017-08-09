import template from './courseDetails.html';

export default {
  template: template,
  bindings: {
    course: '<'
  },
  controller($uibModal, notificationService) {
    'ngInject';

    this.register = (course) => {
      $uibModal.open({
        component: 'registerToCourse',
        resolve: {
          course: () => course
        }
      }).result.then((result) => {
        notificationService.success("Pomyślnie zapisano na kurs. Na Twojego maila wysłaliśmy potwierdzenie rezerwacji");
      });
    };

    this.$onInit = () => {
    }
  }
};

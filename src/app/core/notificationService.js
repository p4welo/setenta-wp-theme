import notyf from 'notyf';

class NotificationService {
  constructor() {
    'ngInject';
    this.provider = new notyf({
      delay: 5000,
      alertIcon: 'fa fa-exclamation-circle',
      confirmIcon: 'fa fa-check-circle'
    });
  }

  success(message) {
    this.provider.confirm(message);
  }

  error(message) {
    this.provider.alert(message);
  }
}
export default NotificationService;

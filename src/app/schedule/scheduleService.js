import _ from 'lodash';

class ScheduleService {
  constructor($http, $q) {
    'ngInject';
    Object.assign(this, {
      $http,
      $q
    });
  }

  getDays() {
    return [
      {id: 0, label: 'Poniedziałek'},
      {id: 1, label: 'Wtorek'},
      {id: 2, label: 'Środa'},
      {id: 3, label: 'Czwartek'},
      {id: 4, label: 'Piątek'},
      {id: 5, label: 'Sobota'},
      {id: 6, label: 'Niedziela'}
    ];
  }

  getByDay() {
    const deferred = this.$q.defer();
    this.$http.get('https://p4welo.usermd.net/api/course')
        .then((result) => deferred.resolve(_.groupBy(result.data, 'day')));
    return deferred.promise;
  }

  findAll() {
    return this.$http.get('https://p4welo.usermd.net/api/course');
  }

  registerToCourse(courseId, customerData) {
    return this.$http.post('https://p4welo.usermd.net/api/course/' + courseId + '/register', customerData);
  }
}
export default ScheduleService;

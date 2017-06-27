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
      {id: 0},
      {id: 1},
      {id: 2},
      {id: 3},
      {id: 4},
      {id: 5},
      {id: 6}
    ];
  }

  getByDay() {
    const deferred = this.$q.defer();
    this.$http.get('http://p4welo.usermd.net/api/course/list')
        .then((result) => deferred.resolve(_.groupBy(result.data, 'day')));
    return deferred.promise;
  }

  registerToCourse(courseId, customerData) {
    return this.$http.post('http://p4welo.usermd.net/api/course/' + courseId + '/register', customerData);
  }
}
export default ScheduleService;

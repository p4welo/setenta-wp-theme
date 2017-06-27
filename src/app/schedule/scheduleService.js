import _ from 'lodash';

class ScheduleService {
  constructor($http, $q) {
    'ngInject';
    Object.assign(this,{
      $http,
      $q
    });
  }

  getByDay() {
    const deferred = this.$q.defer();
    this.$http.get('http://p4welo.usermd.net/api/course/list')
        .then((result) => deferred.resolve(_.groupBy(result.data, 'day')));
    return deferred.promise;
  }
}
export default ScheduleService;

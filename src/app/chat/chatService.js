import _ from 'lodash';

class ChatService {
  constructor($http, $q) {
    'ngInject';
    Object.assign(this, {
      $http,
      $q
    });
  }

  getMyLastName() {
    var deferred = this.$q.defer();
    FB.api('/me', {
      fields: 'last_name'
    }, function (response) {
      if (!response || response.error) {
        deferred.reject('Error occured');
      } else {
        deferred.resolve(response);
      }
    });
    return deferred.promise;
  }
}
export default ChatService;

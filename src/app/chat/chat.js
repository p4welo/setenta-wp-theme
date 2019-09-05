export default {
  template: '<div></div>',
  controller($location, $http, $window) {
    'ngInject';
    const COOKIE_KEY = '_ap_uk';
    const clientId = '5998733647375b02dafe9b14';

    var json = 'http://ipv4.myexternalip.com/json';
    $http.get(json)
        .then((result) => {
          const width = $window.screen.width;
          const height = $window.screen.height;
          const visitorData = {
            url: $location.absUrl(),
            userKey: $window.localStorage.getItem(COOKIE_KEY),
            ip: result.data.ip,
            resolution: `${width}x${height}`
          };
          return $http.post(`https://p4welo.usermd.net/api/clients/${clientId}/visitors`, visitorData);
        })
        .then((result) => {
          $window.localStorage.setItem(COOKIE_KEY, result.data.userKey)
        });


    this.$onInit = () => {
    }
  }
};

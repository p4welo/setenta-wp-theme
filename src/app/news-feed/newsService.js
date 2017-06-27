
class NewsService {
  constructor($http) {
    'ngInject';
    Object.assign(this,{
      $http
    });
  }

  getNews() {
    return this.$http.get('/wp-json/posts');
  }
}
export default NewsService;

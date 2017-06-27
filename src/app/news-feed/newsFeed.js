import template from './newsFeed.html';

export default {
  template: template,
  controller(newsService) {
    'ngInject';

    this.loadMore = () => {
      this.postLimit += 5;
    };

    this.$onInit = () => {
      this.newsLoading = true;
      this.postLimit = 5;

      newsService.getNews().then((result) => {
        this.posts = result.data;
        this.newsLoading = false;
      });
    }
  }
};

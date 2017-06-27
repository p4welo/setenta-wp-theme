import angular from 'angular';
import newsFeed from './newsFeed';
import newsService from './newsService';

export default angular.module('newsFeed', [])
    .component('newsFeed', newsFeed)
    .service('newsService', newsService)
    .name;

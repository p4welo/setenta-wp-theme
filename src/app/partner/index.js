import angular from 'angular';
import partner from './partner';

export default angular.module('partner', [])
    .component('partner', partner)
    //.service('partnerService', newsService)
    .name;

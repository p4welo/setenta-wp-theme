import angular from 'angular';
import schedule from './schedule';
import scheduleService from './scheduleService';

export default angular.module('schedule', [])
    .component('schedule', schedule)
    .service('scheduleService', scheduleService)
    .name;

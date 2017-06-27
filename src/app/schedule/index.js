import angular from 'angular';
import schedule from './schedule';
import courseList from './courseList/courseList';
import registerToCourse from './registerToCourse/registerToCourse';
import scheduleService from './scheduleService';

export default angular.module('schedule', [])
    .component('schedule', schedule)
    .component('courseList', courseList)
    .component('registerToCourse', registerToCourse)
    .service('scheduleService', scheduleService)
    .name;

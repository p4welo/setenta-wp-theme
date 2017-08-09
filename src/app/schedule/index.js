import angular from 'angular';
import ngRecaptcha from 'angular-recaptcha';
import schedule from './schedule';
import registerToCourse from './registerToCourse/registerToCourse';
import scheduleService from './scheduleService';
import courseListGroup from './courseListGroup';
import courseList from './courseList';
import courseListFilter from './courseListFilter';
import courseDetails from './courseDetails';

export default angular.module('schedule', [
      ngRecaptcha,
      courseListGroup,
      courseList,
      courseListFilter,
      courseDetails
    ])
    .component('schedule', schedule)
    .component('registerToCourse', registerToCourse)
    .service('scheduleService', scheduleService)
    .name;

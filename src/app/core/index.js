import angular from 'angular';
import notificationService from './notificationService';

export default angular.module('core', [])
    .service('notificationService', notificationService)
    .name;

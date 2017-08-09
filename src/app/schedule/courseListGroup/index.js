import angular from 'angular';
import courseListGroup from './courseListGroup';

export default angular.module('courseListGroup', [])
    .component('courseListGroup', courseListGroup)
    .name;
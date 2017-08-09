import angular from 'angular';
import courseDetails from './courseDetails';

export default angular.module('courseDetails', [])
    .component('courseDetails', courseDetails)
    .name;
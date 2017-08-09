import angular from 'angular';
import courseListFilter from './courseListFilter';

export default angular.module('courseListFilter', [])
    .component('courseListFilter', courseListFilter)
    .name;
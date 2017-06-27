import angular from 'angular';
import ngTranslate from 'angular-translate';
import translations from './translations';

export default angular.module('config', [
      ngTranslate
    ])
    .config(translations)
    .name;

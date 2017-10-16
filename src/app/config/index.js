import angular from 'angular';
import ngTranslate from 'angular-translate';
import translations from './translations';
import production from './production';

export default angular.module('config', [
      ngTranslate
    ])
    .config(translations)
    .config(production)
    .name;

import angular from 'angular';
import ngTouch from 'angular-touch';
import ngAnimate from 'angular-animate';
import ngSanitize from 'angular-sanitize';
import uiBootstrap from 'angular-ui-bootstrap';
import config from './config';
import core from './core';
import schedule from './schedule';
import newsFeed from './news-feed';


const el = document.getElementById("application");
if (el) {
  const app = angular.module('appl', [
    ngSanitize,
    ngTouch,
    ngAnimate,
    uiBootstrap,
    config,
    core,
    newsFeed,
    schedule
  ]).name;
  angular.bootstrap(el, [app]);
}

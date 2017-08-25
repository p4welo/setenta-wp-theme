import angular from 'angular';
import ngTouch from 'angular-touch';
import ngAnimate from 'angular-animate';
import ngCookies from 'angular-cookies';
import ngSanitize from 'angular-sanitize';
import uiBootstrap from 'angular-ui-bootstrap';
import config from './config';
import core from './core';
import schedule from './schedule';
import partner from './partner';
import newsFeed from './news-feed';
import chat from './chat';


const el = document.getElementById("application");
if (el) {
  const app = angular.module('appl', [
    ngSanitize,
    ngTouch,
    ngAnimate,
    ngCookies,
    uiBootstrap,
    config,
    core,
    newsFeed,
    partner,
    schedule,
    chat
  ]).name;
  angular.bootstrap(el, [app]);
}

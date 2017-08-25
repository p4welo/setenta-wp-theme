import angular from 'angular';
import chat from './chat';

export default angular.module('chatApp', [])
    .component('chat', chat)
    .name;
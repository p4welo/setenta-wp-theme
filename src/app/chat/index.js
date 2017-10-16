import angular from 'angular';
import chat from './chat';
import chatService from './chatService';

export default angular.module('chatApp', [])
    .component('chat', chat)
    .service('chatService', chatService)
    .name;
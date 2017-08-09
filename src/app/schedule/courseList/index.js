import angular from 'angular';
import courseList from './courseList';

export default angular.module('courseList', [])
    .component('courseList', courseList)
    .directive('scrollOnClick', function() {
      return {
        restrict: 'A',
        link: function(scope, $elm) {
          $elm.on('click', function() {
            $("html, body").animate({scrollTop: $elm.offset().top}, "slow");
          });
        }
      }
    })
    .name;
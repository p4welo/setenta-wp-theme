<?php
/*
Template Name: Grafik
*/
?>

<?php get_header(); ?>
    <div class="page schedule-page" ng-app="schedule">
        <div class="animated fadeIn" ng-cloak ng-controller="scheduleCtrl">
            <div class="img-header jumbotron team-header"></div>
            <div class="body-cover" ng-init="initCalendar()">
                <div class="container main-content staff-content">
                    <h2>
                        <i class="glyphicon glyphicon-calendar"></i>
                        Grafik
                    </h2>

                    <div class="visible-md-block visible-lg-block">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4 class="text-center">Duża sala</h4>

                                <div class="row text-center" ng-if="loadingView">
                                    <i class="fa fa-spin fa-spinner"></i>
                                    <span>Ładowanie...</span>
                                </div>
                                <div id='bigSchedule'></div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4 class="text-center">Mała sala</h4>

                                <div class="row text-center" ng-if="loadingView">
                                    <i class="fa fa-spin fa-spinner"></i>
                                    <span>Ładowanie...</span>
                                </div>
                                <div id='smallSchedule'></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default visible-sm-block visible-xs-block">
                        <div class="panel-body">
                            <div ng-repeat="d in days">
                                <legend>
                                    {{ d | translate }}
                                </legend>
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>godz</th>
                                        <th>nazwa</th>
                                        <th>poziom</th>
                                        <th>sala</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr ng-repeat="c in courseList | filter : {'day': d}">
                                        <td>
                                            <span ng-bind="c.startTime"></span>
                                            -
                                            <span ng-bind="c.endTime"></span>
                                        </td>
                                        <td ng-bind="c.style.name"></td>
                                        <td>
                                            {{ c.level | translate }}
                                        </td>
                                        <td ng-bind="c.room.name"></td>
                                        <td class="text-right">
                                            <span class="badge badge-danger" ng-if="c.canRegister">ZAPISY</span>
                                            <span class='badge badge-error' ng-if="!c.canRegister && !c.canJoin">BRAK MIEJSC</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/js/schedule/schedule.js" type="text/javascript"></script>
<?php get_footer(); ?>
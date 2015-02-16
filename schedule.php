<?php
/*
Template Name: NEW Grafik
*/
?>

<?php get_header(); ?>
    <div ng:app="setenta" ng-cloak>
        <div class="registration-row row" ng:controller="registrationCtrl">
            <div class="container">
                <h2 class="col-sm-12">ZAPISY DO NOWYCH GRUP</h2>

                <div class="registration-grid text-center row">
                    <div ng:if="courseLoading" class="text-center">
                        <i class="fa fa-spin fa-spinner"></i>
                        Ładowanie...
                    </div>

                    <figure class="col-md-3 col-lg-2 col-sm-4" ng:repeat="group in courseGroups">
                        <img
                            ng:src="<?php bloginfo('template_url'); ?>/new/assets/img/styles/{{resolveStyleImage(group[0].style)}}"
                            alt="img21">
                        <figcaption>
                            <div>
                                <h3 ng:bind="group[0].style.name"></h3>

                                <p ng:repeat:start="course in group">
                                    {{course.day | translate}}
                                    {{ course.startTime}}
                                </p>
                                <br ng:repeat:end/>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="schedule-page" ng:init="initCalendar()" ng:controller="scheduleCtrl">
            <div class="container">
<!--                <div class="visible-md-block visible-lg-block">-->
<!--                <ul style="margin-bottom: 50px;" class="nav nav-pills">-->
<!--                    <li role="presentation" ng:class="{'active': scheduleId==0}">-->
<!--                        <a href="javascript:void(0)" ng:click="showSchedule(0)">DUŻA SALA</a>-->
<!--                    </li>-->
<!--                    <li role="presentation" ng:class="{'active': scheduleId==1}">-->
<!--                        <a href="javascript:void(0)" ng:click="showSchedule(1)">MAŁA SALA</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--                </div>-->
                <div class="visible-md-block visible-lg-block">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2>Duża sala</h2>

                            <div class="row text-center" ng:if="loadingView">
                                <i class="fa fa-spin fa-spinner"></i>
                                <span>Ładowanie...</span>
                            </div>
                            <div id='bigSchedule'></div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2>Mała sala</h2>

                            <div class="row text-center" ng:if="loadingView">
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
                                    <span class='badge badge-error'
                                          ng-if="!c.canRegister && !c.canJoin">BRAK MIEJSC</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="instructor-row row">
            <div class="container">
                <h2>INSTRUKTORZY</h2>
            </div>
        </div>
        <div class="instructor-row row">
            <div class="container">
                <div class="owl-carousel">
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/barbara-radomska.jpg"
                             alt="barbara radomska karpińska"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/pawel-radomski.jpg"
                             alt="paweł radomski"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/magda-mroz.jpg"
                             alt="magda mróz"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/kasia-michalak.jpg"
                             alt="kasia michalak"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/julia-utig.jpg"
                             alt="julia utig"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/marta-wegrzynowska.jpg"
                             alt="marta węgrzynowska"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/marta-moscicka.jpg"
                             alt="marta mostek mościcka"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/new/assets/img/instructors/martyna-olszewska.jpg"
                             alt="martyna olszewska"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
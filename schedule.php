<?php
/*
Template Name: NEW Grafik
*/
?>

<?php get_header(); ?>
    <div ng-app="setenta" ng-cloak>
        <div class="schedule-page" ng-controller="scheduleCtrl">
            <div class="container">
                <div class="alert alert-info">Grafik obowiązujący od września 2016</div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div ng-repeat="d in days" class="table-responsive">
                            <legend>
                                {{ d | translate }}
                            </legend>
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>godz</th>
                                    <th>nazwa</th>
                                    <th>poziom</th>
                                    <th>opis</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr ng-repeat="c in courseList | filter : {'day': d}">
                                    <td>
                                        <span ng-bind="::c.startTime"></span>
                                        -
                                        <span ng-bind="::c.endTime"></span>
                                    </td>
                                    <td ng-bind="::c.style.name"></td>
                                    <td ng-bind="::c.level | translate"></td>
                                    <td ng-bind="::c.description"></td>
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
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/barbara-radomska.jpg"
                             alt="barbara radomska karpinska"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/pawel-radomski.jpg"
                             alt="pawel radomski"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mroz.jpg"
                             alt="magda mroz"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/kasia-michalak.jpg"
                             alt="kasia michalak"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/jacek-sztorc.jpg"
                             alt="jacek sztorc"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mazij.jpg"
                             alt="magda mazij"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/julia-utig.jpg"
                             alt="julia utig"/>
                    </div>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-wegrzynowska.jpg"
                             alt="marta wegrzynowska"/>
                    </div>
                    <a class="item" href="/marta-mostek-moscicka">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg" title="marta mostek mo�cicka" alt="marta mostek mo�cicka"/>
                    </a>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/martyna-olszewska.jpg"
                             alt="martyna olszewska"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
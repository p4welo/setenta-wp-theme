<?php
/*
Template Name: NEW Grafik
*/
?>

<?php get_header(); ?>
    <div ng-app="schedule" class="m-t-64">
        <div class="schedule-page">
            <div class="container">
                <ul class="list-feed">
                    <li ng-repeat="day in days">
                        <span class="feed-time text-muted label label-success label-rounded label-icon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                        <strong class="feed-day" translate="DAYS.LONG.DAY{{day.id}}" translate-default=""></strong>
                        <ul class="list-group">
                            <li class="list-group-item ng-binding ng-scope" ng-repeat="course in courses[day.id] |
                            orderBy: 'timeFrom'">
                                <div ng-bind="course.timeFrom" style="position: absolute"></div>
                                <div style="margin-left: 70px">
                                    <h5 class="list-group-item-heading">
                                        <strong ng-bind="course.name"></strong>
                                        <span class="label label-striped"
                                              translate="LEVELS.{{course.level}}"
                                              translate-default></span>
                                    </h5>
                                    <p class="list-group-item-text text-muted" ng-bind="course.instructor"></p>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
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
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg"
                             title="marta mostek mo�cicka" alt="marta mostek mo�cicka"/>
                    </a>
                    <div class="item">
                        <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/martyna-olszewska.jpg"
                             alt="martyna olszewska"/>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/ng-template" id="myModalContent.html">
            <div class="modal-header">
                <h3 class="modal-title" id="modal-title">header</h3>
            </div>
            <div class="modal-body" id="modal-body">
                body
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" ng-click="$ctrl.ok()">OK</button>
                <button class="btn btn-warning" type="button" ng-click="$ctrl.cancel()">Cancel</button>
            </div>
        </script>
    </div>

<?php get_footer(); ?>
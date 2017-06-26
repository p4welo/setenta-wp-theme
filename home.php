<?php get_header(); ?>
    <script type="text/ng-template" id="myModalContent.html">
        <div class="modal-header">
            <h3 class="modal-title" id="modal-title">I'm a modal!</h3>
        </div>
        <div class="modal-body" id="modal-body">
            Selected: <b>{{ course|json }}</b>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="button" ng-click="$ctrl.ok()">OK</button>
            <button class="btn btn-warning" type="button" ng-click="$ctrl.cancel()">Cancel</button>
        </div>
    </script>
    <div class="news-page">
<!--    <div id="slider-container" class="slider-container">-->
<!--        <div u="loading" class="slider-loading">-->
<!--            <div class="slider-back">-->
<!--            </div>-->
<!--            <div class="slider-indicator text-center">-->
<!--                <i class="fa fa-spin fa-spinner"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div u="slides" class="slider-slides">-->
<!--            <div>-->
<!--                <img u="image" src="--><?php //bloginfo('template_url'); ?><!--/assets/img/carousel/3.jpg"/>-->
<!---->
<!--                <div-->
<!--                    style="position: absolute; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF; background-color: #000">-->
<!--                    PIERWSZY TANIEC-->
<!--                </div>-->
<!--            </div>-->
<!--            <div>-->
<!--                <img u="image" src="--><?php //bloginfo('template_url'); ?><!--/assets/img/carousel/1.jpg"/>-->
<!---->
<!--                <div-->
<!--                    style="position: absolute; top: 300px; right: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF; background-color: #000; display:inline">-->
<!--                    TANIEC W PARACH-->
<!--                </div>-->
<!--            </div>-->
<!--            <div>-->
<!--                <img u="image" src="--><?php //bloginfo('template_url'); ?><!--/assets/img/carousel/2.jpg"/>-->
<!---->
<!--                <div-->
<!--                    style="position: absolute; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF; background-color: #000">-->
<!--                    ZAJĘCIA SOLO-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div u="navigator" class="jssorb21">-->
<!--            <div u="prototype" class="slider-prototype"></div>-->
<!--        </div>-->
<!--        <span u="arrowleft" class="jssora21l"></span>-->
<!--        <span u="arrowright" class="jssora21r"></span>-->
<!--    </div>-->
        <div class="slider-area" id="home" style="background: rgba(0, 0, 0, 0) url(<?php bloginfo('template_url');
        ?>/assets/img/carousel/2.jpg) no-repeat scroll center 50% / cover;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content-wrapper row text-center">
                            <a href="/grafik/" class="btn btn-lg btn-success animated fadeInDown btn-callToAction"
                               style="top:
                            50vh;margin: 0 auto;font-size: 24px;
                            position: relative;
                            ">PRZEJDŹ DO GRAFIKU</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div ng-app="news">
        <div class="news-content row" id="news">
            <div class="container">
                <div class="col-sm-8">
<!--                    <div class="col-sm-12 panel panel-default post-panel animated fadeIn">-->
<!---->
<!--                        <div class="thumbnail" style="padding: 0">-->
<!--                            <img src="http://setenta.wroclaw.pl/wp-content/uploads/2017/02/NOWE.png"/>-->
<!--                        </div>-->
<!--                        <p class="col-xs-12">Wybierz kurs żeby wyświetlić dostępne terminy:</p>-->
<!--                        <div class="panel-accordion">-->
<!--                            <uib-accordion close-others="{{true}}">-->
<!---->
<!--                                <div uib-accordion-group class="panel-default"-->
<!--                                     ng-repeat="(style, courses) in ::courses">-->
<!--                                    <uib-accordion-heading>-->
<!--                                        <h4 ng-bind="::style"></h4>-->
<!--                                    </uib-accordion-heading>-->
<!--                                    <dl class="dl-horizontal" ng-repeat="course in ::courses">-->
<!--                                        <dt translate="{{::course.day}}"></dt>-->
<!--                                        <dd>-->
<!--                                            <span ng-bind="::course.startTime"></span>-->
<!--                                            <a href class="label label-success"-->
<!--                                               style="margin-left: 20px"-->
<!--                                               ng-click="open(course)">-->
<!--                                                Zapisz się!-->
<!--                                            </a>-->
<!--                                        </dd>-->
<!--                                    </dl>-->
<!--                                </div>-->
<!--                            </uib-accordion>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div ng-if="newsLoading" class="text-center">

                        <svg width='20px' height='20px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"
                             preserveAspectRatio="xMidYMid" class="uil-hourglass">
                            <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>
                            <g>
                                <path fill="none" stroke="#000000" stroke-width="5" stroke-miterlimit="10"
                                      d="M58.4,51.7c-0.9-0.9-1.4-2-1.4-2.3s0.5-0.4,1.4-1.4 C70.8,43.8,79.8,30.5,80,15.5H70H30H20c0.2,15,9.2,28.1,21.6,32.3c0.9,0.9,1.4,1.2,1.4,1.5s-0.5,1.6-1.4,2.5 C29.2,56.1,20.2,69.5,20,85.5h10h40h10C79.8,69.5,70.8,55.9,58.4,51.7z"
                                      class="glass"></path>
                                <clipPath id="uil-hourglass-clip1">
                                    <rect x="15" y="20" width="70" height="25" class="clip">
                                        <animate attributeName="height" from="25" to="0" dur="1s"
                                                 repeatCount="indefinite" vlaues="25;0;0" keyTimes="0;0.5;1"></animate>
                                        <animate attributeName="y" from="20" to="45" dur="1s" repeatCount="indefinite"
                                                 vlaues="20;45;45" keyTimes="0;0.5;1"></animate>
                                    </rect>
                                </clipPath>
                                <clipPath id="uil-hourglass-clip2">
                                    <rect x="15" y="55" width="70" height="25" class="clip">
                                        <animate attributeName="height" from="0" to="25" dur="1s"
                                                 repeatCount="indefinite" vlaues="0;25;25" keyTimes="0;0.5;1"></animate>
                                        <animate attributeName="y" from="80" to="55" dur="1s" repeatCount="indefinite"
                                                 vlaues="80;55;55" keyTimes="0;0.5;1"></animate>
                                    </rect>
                                </clipPath>
                                <path d="M29,23c3.1,11.4,11.3,19.5,21,19.5S67.9,34.4,71,23H29z"
                                      clip-path="url(#uil-hourglass-clip1)" fill="#000000" class="sand"></path>
                                <path d="M71.6,78c-3-11.6-11.5-20-21.5-20s-18.5,8.4-21.5,20H71.6z"
                                      clip-path="url(#uil-hourglass-clip2)" fill="#000000" class="sand"></path>
                                <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="180 50 50"
                                                  repeatCount="indefinite" dur="1s" values="0 50 50;0 50 50;180 50 50"
                                                  keyTimes="0;0.7;1"></animateTransform>
                            </g>
                        </svg>
                        Ładowanie aktualności
                    </div>
                    <div class="col-sm-12 panel panel-default post-panel animated fadeIn"
                         ng-repeat="post in posts | filter: searchText | limitTo: postLimit">
                        <a ng-href="{{post.link}}" href>
                            <img class="thumbnail col-sm-12 col-xs-12" ng-src="{{post.featured_image.source}}"/>
                        </a>

                        <div class="col-sm-12">
                            <small class="date-area">
                                <i class="fa fa-calendar-o text-danger"></i>
                                <span ng-bind="::post.date | date:'dd-MM-yyyy'"></span>
                            </small>
                            <small class="author-area">
                                <i class="fa fa-user text-danger"></i>
                                SEKRETARIAT
                            </small>
                            <small class="author-area" ng-if="post.terms.category.length>0"
                                   ng-repeat="category in post.terms.category">
                                <i class="fa fa-folder-open-o text-danger"></i>
                                <span ng-bind="::category.name | uppercase"></span>
                            </small>

                            <h2>
                                <a ng-href="{{post.link}}" href ng-bind-html="::post.title"></a>
                            </h2>

                            <div ng-if="post.terms.post_tag.length>0">
                                <div style="margin-bottom: 5px">
                                    <i class="fa fa-tag text-danger"></i>
                                    Tagi:
                                </div>
                                <div style="margin-bottom: 20px">
                                    <a class="badge badge-danger"
                                       ng-repeat="tag in post.terms.post_tag"
                                       ng-href="{{::tag.link}}"
                                       ng-bind="::tag.name | uppercase">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 panel panel-default post-panel text-center more-posts-panel"
                         ng-if="postLimit < posts.length">
                        <a href class="list-group-item active more-link" ng-click="loadMore()">
                            <i class="fa fa-cog fa-spin"></i>
                            Załaduj więcej postów...
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 search-container">
<!--                    <a href="/partner-do-tanca-wroclaw" class="thumbnail col-xs-12" style="padding: 0">-->
<!--                        <img src="/wp-content/uploads/2016/12/Szukasz-1-1-e1481231364648.png"-->
<!--                             alt="Partner do tańca wrocław">-->
<!--                    </a>-->

                    <div class="panel panel-default col-xs-12" style="padding: 0">
                        <div class="panel-body">
                            <div class="fb-page"
                                 data-href="https://www.facebook.com/setenta.taniec/"
                                 data-tabs="timeline"
                                 data-small-header="false"
                                 data-adapt-container-width="true"
                                 data-hide-cover="false"
                                 data-show-facepile="true">
                                <blockquote cite="https://www.facebook.com/setenta.taniec/"
                                            class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/setenta.taniec/">Szkoła tańca Setenta</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default col-xs-12">
                        <h3 class="col-sm-12">Honorujemy</h3>
                        <div class="col-sm-12">
                            <a class="fitflex thumbnail" target="_blank" href="http://www.fitflex.pl">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/fitflex.jpg"/>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a class="oksystem thumbnail" target="_blank" href="http://www.oksystem.pl">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/oksystem.png"/>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a class="foryoucard thumbnail" target="_blank" href="https://www.4youcard.pl/">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4ucard.png"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <noscript>
                <div class="container">
                    <div class="col-sm-8">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div class="col-sm-12 panel panel-default post-panel">
                                <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>

                                <div class="col-sm-12">
                                    <h2>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                </div>
                            </div>
                        <?php endwhile;
                        else: ?>
                            <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </noscript>
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
    </div>
<?php get_footer(); ?>
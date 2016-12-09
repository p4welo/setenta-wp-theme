<?php get_header(); ?>
    <div class="news-page">
    <div id="slider-container" class="slider-container">
        <div u="loading" class="slider-loading">
            <div class="slider-back">
            </div>
            <div class="slider-indicator text-center">
                <i class="fa fa-spin fa-spinner"></i>
            </div>
        </div>
        <div u="slides" class="slider-slides">
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/assets/img/carousel/3.jpg"/>

                <div
                    style="position: absolute; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF; background-color: #000">
                    PIERWSZY TANIEC
                </div>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/assets/img/carousel/1.jpg"/>

                <div
                    style="position: absolute; top: 300px; right: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF; background-color: #000; display:inline">
                    TANIEC W PARACH
                </div>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/assets/img/carousel/2.jpg"/>

                <div
                    style="position: absolute; top: 300px; left: 30px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF; background-color: #000">
                    ZAJĘCIA SOLO
                </div>
            </div>
        </div>
        <div u="navigator" class="jssorb21">
            <div u="prototype" class="slider-prototype"></div>
        </div>
        <span u="arrowleft" class="jssora21l"></span>
        <span u="arrowright" class="jssora21r"></span>
    </div>
    <div ng-app="news">
        <div class="news-content row" id="news">
            <div class="container">
                <div class="col-sm-8">
                    <div ng-if="newsLoading" class="text-center">
                        <i class="fa fa-spin fa-spinner"></i>
                        Ładowanie...
                    </div>
                    <div class="col-sm-12 panel panel-default post-panel animated fadeIn"
                         ng-repeat="post in posts | filter: searchText | limitTo: postLimit">
                        <a ng-href="{{post.link}}" href="javascript:void(0)">
                            <img class="thumbnail col-sm-12 col-xs-12" ng-src="{{post.featured_image.source}}"/>
                        </a>

                        <div class="col-sm-12">
                            <small class="date-area">
                                <i class="fa fa-calendar-o text-danger"></i>
                                {{ post.date | date:'dd-MM-yyyy' }}
                            </small>
                            <small class="author-area">
                                <i class="fa fa-user text-danger"></i>
                                SEKRETARIAT
                            </small>
                            <small class="author-area" ng-if="post.terms.category.length>0"
                                   ng-repeat="category in post.terms.category">
                                <i class="fa fa-folder-open-o text-danger"></i>
                                {{category.name | uppercase}}
                            </small>

                            <h2>
                                <a ng-href="{{post.link}}" href="javascript:void(0)" ng-bind-html="post.title"></a>
                            </h2>

                            <div ng-if="post.terms.post_tag.length>0">
                                <div style="margin-bottom: 5px">
                                    <i class="fa fa-tag text-danger"></i>
                                    Tagi:
                                </div>
                                <div style="margin-bottom: 20px">
                                    <span class="badge badge-danger" ng-repeat="tag in post.terms.post_tag">
                                        {{ ::tag.name | uppercase}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 panel panel-default post-panel text-center more-posts-panel"
                         ng-if="postLimit < posts.length">
                        <a href="javascript:void(0)" class="list-group-item active" ng-click="loadMore()">
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

                                    <p>
                                        <?php
                                        the_content('Czytaj dalej &rarr;');
                                        ?>
                                    </p>
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
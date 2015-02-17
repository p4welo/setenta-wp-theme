<?php get_header(); ?>
<div class="news-page" ng:app="setenta" ng-cloak>
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
        </div>
        <div>
            <img u="image" src="<?php bloginfo('template_url'); ?>/assets/img/carousel/1.jpg"/>
        </div>
        <div>
            <img u="image" src="<?php bloginfo('template_url'); ?>/assets/img/carousel/2.jpg"/>
        </div>
    </div>
    <div u="navigator" class="jssorb21">
        <div u="prototype" class="slider-prototype"></div>
    </div>
    <span u="arrowleft" class="jssora21l"></span>
    <span u="arrowright" class="jssora21r"></span>
</div>
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
                    ng:src="<?php bloginfo('template_url'); ?>/assets/img/styles/{{resolveStyleImage(group[0].style)}}"
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
<div>
    <div class="news-content row" ng:controller="newsCtrl">
        <div class="container">
            <div class="col-sm-8">
                <div ng:if="newsLoading" class="text-center">
                    <i class="fa fa-spin fa-spinner"></i>
                    Ładowanie...
                </div>
                <div class="col-sm-12 panel panel-default post-panel animated fadeIn"
                     ng:repeat="post in posts | filter: searchText | limitTo: postLimit">
                    <img class="thumbnail col-sm-12 col-xs-12" ng:src="{{post.featured_image.source}}"/>

                    <div class="col-sm-12">
                        <small class="date-area">
                            <i class="fa fa-calendar-o text-danger"></i>
                            {{ post.date | date:'dd-MM-yyyy' }}
                        </small>
                        <small class="author-area">
                            <i class="fa fa-user text-danger"></i>
                            {{post.author.first_name | uppercase}}
                        </small>
                        <small class="category-area" ng-if="post.terms.post_tag.length>0">
                            <i class="fa fa-tag text-danger"></i>
                            <span ng:repeat="tag in post.terms.post_tag">{{tag.name | uppercase}}</span>
                        </small>

                        <h2>
                            <a ng:href="{{post.link}}" href="javascript:void(0)" ng:bind:html="post.title"></a>
                        </h2>

<!--                        <p ng:bind:html="post.content"></p>-->

<!--                        <div class="text-right more-button-container">-->
<!--                            <a ng:href="{{post.link}}" href="javascript:void(0)"-->
<!--                               class="btn btn-default">WIĘCEJ...</a>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-sm-12 panel panel-default post-panel text-center more-posts-panel" ng:if="postLimit < posts.length">
                    <a href="javascript:void(0)" class="list-group-item active" ng:click="loadMore()">
                        <i class="fa fa-cog fa-spin"></i>
                        Załaduj więcej postów...
                    </a>
                </div>
            </div>
            <div class="col-sm-4 search-container">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Szukaj..."
                           aria-describedby="inputSuccess2Status" ng:model="searchText">
                    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                </div>
                <!--                    <h3>Kategorie</h3>-->
                <!---->
                <!--                    <div class="list-group">-->
                <!--                        <a href="javascript:void(0)" class="list-group-item" ng:repeat="tag in tags" ng:bind="tag.name"-->
                <!--                           ng:click="toggleTag(tag)"-->
                <!--                           ng:class="{'active': selectedTag == tag}"></a>-->
                <!--                    </div>-->

                <h3 class="col-sm-12">Honorujemy</h3>

                <div class="col-sm-12">
                    <a class="oksystem" target="_blank" href="http://www.oksystem.pl">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/oksystem.png"/>
                    </a>
                </div>
                <div class="col-sm-12">
                    <a class="foryoucard" target="_blank" href="https://www.4youcard.pl/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/sys/4ucard.png"/>
                    </a>
                </div>
                <div class="fb-like-box col-sm-12" data-href="https://www.facebook.com/setenta.taniec" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
            </div>
        </div>

        <noscript>
            <div class="container">

                <div class="col-sm-8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-sm-12 panel panel-default post-panel">
                            <?php the_post_thumbnail('full', array('class' => 'thumbnail col-sm-12 col-xs-12')); ?>

                            <div class="col-sm-12">
                                <small class="date-area">
                                    <i class="fa fa-calendar-o text-danger"></i>
                                    21 cze 2015
                                </small>
                                <small class="category-area">
                                    <i class="fa fa-folder-open-o text-danger"></i>
                                    NOWE GRUPY
                                </small>

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
                         alt="barbara radomska karpińska"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/pawel-radomski.jpg"
                         alt="paweł radomski"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/magda-mroz.jpg"
                         alt="magda mróz"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/kasia-michalak.jpg"
                         alt="kasia michalak"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/julia-utig.jpg"
                         alt="julia utig"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-wegrzynowska.jpg"
                         alt="marta węgrzynowska"/>
                </div>
                <div class="item">
                    <img src="
                    <?php bloginfo('template_url'); ?>/assets/img/instructors/marta-moscicka.jpg"
                         alt="marta mostek mościcka"/>
                </div>
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
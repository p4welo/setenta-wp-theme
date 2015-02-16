<?php get_header(); ?>
<div class="news-page" ng:app="newsWidget">
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
                <img u="image" src="<?php bloginfo('template_url'); ?>/new/assets/img/carousel/3.jpg"/>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/new/assets/img/carousel/1.jpg"/>
            </div>
            <div>
                <img u="image" src="<?php bloginfo('template_url'); ?>/new/assets/img/carousel/2.jpg"/>
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
    <div class="news-content row">
        <div class="container" ng:controller="newsCtrl">
            <div class="col-sm-8">
                <div ng:if="newsLoading" class="text-center">
                    <i class="fa fa-spin fa-spinner"></i>
                    Ładowanie...
                </div>
                <div class="col-sm-12 panel panel-default post-panel animated fadeIn"
                     ng:repeat="post in posts | filter: {'title': searchText} | limitTo: postLimit">
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

                        <p ng:bind:html="post.content"></p>

                        <div class="text-right more-button-container">
                            <a ng:href="{{post.link}}" href="javascript:void(0)" class="btn btn-default">WIĘCEJ...</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 panel panel-default post-panel text-center" ng:if="postLimit < posts.length">
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
                <h3>Kategorie</h3>

                <div class="list-group">
                    <a href="#" class="list-group-item" ng:repeat="tag in tags" ng:bind="tag.name" ng:click="toggleTag(tag)" ng:class="{'active': selectedTag == tag}"></a>
                </div>

                <h3>Honorujemy</h3>

                <div class="col-sm-12">
                    <a class="oksystem" target="_blank" href="http://www.oksystem.pl">
                        <img src="<?php bloginfo('template_url'); ?>/new/assets/img/sys/oksystem.png"/>
                    </a>
                </div>
                <div class="col-sm-12">
                    <a class="foryoucard" target="_blank" href="https://www.4youcard.pl/">
                        <img src="<?php bloginfo('template_url'); ?>/new/assets/img/sys/4ucard.png"/>
                    </a>
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
            <h2 class="col-sm-12">INSTRUKTORZY TAŃCA</h2>

            <div class="row">
                <div class="col-sm-12">
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/barbara-radomska.jpg"
                         alt="barbara radomska karpińska"
                         class="img-circle col-sm-3 col-xs-6"/>
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/pawel-radomski.jpg"
                         alt="paweł radomski" class="img-circle col-sm-3 col-xs-6"/>
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/magda-mroz.jpg"
                         alt="magda mróz"
                         class="img-circle col-sm-3 col-xs-6"/>
                    <img src="<?php bloginfo('template_url'); ?>/new/assets/img/instructors/kasia-michalak.jpg"
                         alt="kasia michalak" class="img-circle col-sm-3 col-xs-6"/>
                </div>
                <!--            <img src="-->
                <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/marta-wegrzynowska.jpg"-->
                <!--                 alt="marta węgrzynowska"-->
                <!--                 class="img-circle col-sm-2"/>-->
                <!--            <img src="-->
                <?php //bloginfo('template_url'); ?><!--/new/assets/img/instructors/martyna-olszewska.jpg"-->
                <!--                 alt="martyna olszewska"-->
                <!--                 class="img-circle col-sm-2"/>-->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/bk.jpg" class="col-xs-12 img-circle" alt="BARBARA KARPIŃSKA" title="BARBARA KARPIŃSKA">
                    </a>
                    <h4>BARBARA RADOMSKA (KARPIŃSKA)</h4>
                    <div>
                        <h6>Taniec towarzyski, Salsa, Bachata, Taniec użytkowy, Pierwszy taniec, Balet
                            dla dzieci, Formacje dziecięce</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/pr2.jpg" class="col-xs-12 img-circle" alt="PAWEŁ RADOMSKI" title="PAWEŁ RADOMSKI">
                    </a>
                    <h4>PAWEŁ RADOMSKI</h4>
                    <div>
                        <h6>Salsa kubańska, Bachata</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/mm2.jpg" class="col-xs-12 img-circle" alt="MAGDA MRÓZ" title="MAGDA MRÓZ">
                    </a>
                    <h4>MAGDA MRÓZ</h4>
                    <div>
                        <h6>Balet dla dzieci, Mix dance, Zouk</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/mostek.jpg" class="col-xs-12 img-circle" alt="MARTA 'MOSTEK' MOŚCICKA" title="MARTA 'MOSTEK' MOŚCICKA">
                    </a>
                    <h4>MARTA "MOSTEK" MOŚCICKA</h4>
                    <div>
                        <h6>Hip hop</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/julia2.jpg" class="col-xs-12 img-circle" alt="JULIA UTIG" title="JULIA UTIG">
                    </a>
                    <h4>JULIA UTIG</h4>
                    <div>
                        <h6>Zouk</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/kasia.jpg" class="col-xs-12 img-circle" alt="KATARZYNA MICHALAK" title="KATARZYNA MICHALAK">
                    </a>
                    <h4>KATARZYNA MICHALAK</h4>
                    <div>
                        <h6>Taniec towarzyski, Taniec użytkowy, Taniec towarzyski dla dzieci</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/martaw.jpg" class="col-xs-12 img-circle" alt="MARTA WĘGRZYNOWSKA" title="MARTA WĘGRZYNOWSKA">
                    </a>
                    <h4>MARTA WĘGRZYNOWSKA</h4>
                    <div>
                        <h6>Taniec towarzyski, Taniec użytkowy, Balet dla dzieci, Mix dance</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-3">
                <div class="team-member">
                    <a class="grayHover" href="javascript:void(0)">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/photos/martyna.jpg" class="col-xs-12 img-circle" alt="MARTYNA OLSZEWSKA" title="MARTYNA OLSZEWSKA">
                    </a>
                    <h4>MARTYNA OLSZEWSKA</h4>
                    <div>
                        <h6>Balet dla dzieci, Balet z elementami gimnastyki artystycznej</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
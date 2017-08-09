<?php
/*
Template Name: NEW Grafik
*/
?>

<?php get_header(); ?>
    <div class="m-t-64">
        <div class="schedule-page">
            <div class="container" id="application">
                <h1>Grafik zajęć</h1>
                <!--<div class="row" style="height:200px">
                    <img src="http://setenta.wroclaw.pl/wp-content/uploads/2017/06/Hip-hop-Dance-Wallpapers-1.jpg"
                         style="
                            position: absolute;
                            right: 0;
                             width: 400px;
                            top: -20px;
                     "></div>-->
<!--                <schedule></schedule>-->
<!--                <main></main>-->
                <?php
                if (is_user_logged_in()) {
                    echo '<schedule></schedule>';
                }
                ?>
                <div class="alert alert-success">Grafik na nowy sezon już niedługo!</div>
                <script src="<?php bloginfo('template_url'); ?>/bundle.js?@@version"></script>
            </div>
        </div>


        <div class="instructor-row">

            <div class="container">
                <h2>INSTRUKTORZY</h2>
            </div>
        </div>
        <div class="instructor-row">
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
<!--    <iframe src="http://p4welo.usermd.net/plugin.html" frameborder="0" width="100%" height="100%"></iframe>-->
<!--    <style>-->
<!--        html, body {-->
<!--            margin: 0;-->
<!--        }-->
<!--    </style>-->
<?php get_footer(); ?>
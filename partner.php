<?php
/*
Template Name: Partner do tanca
*/
?>
<?php get_header(); ?>
  <div class="news-page m-t-64">
  <div class="news-content partner-content single-page row">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="col-sm-12 panel panel-default post-panel">
            <img src="http://setenta.wroclaw.pl/wp-content/uploads/2017/03/Partner-1.png" alt="partner do
                    tanca wroclaw"
                 class="thumbnail col-xs-12">
            <partner id="application"></partner>
            <script src="<?php bloginfo('template_url'); ?>/bundle.js?@@version"></script>

            <!--            <div class="col-sm-12" ng-app="partner">-->
            <!---->
            <!--              <h2>Szukasz partnera do tańca? Nic prostszego!</h2>-->
            <!--              <p>Specjalnie dla Was uruchamiamy nową usługę kojarzącą wolnych partnerów do tańca wrocław.</p>-->
            <!--              <ul class="list-group">-->
            <!--                <li class="list-group-item">-->
            <!--                  <i class="fa fa-pencil-square-o pull-left"></i>-->
            <!--                  <h4 class="list-group-item-heading">Wypełniasz formularz</h4>-->
            <!--                  <p class="list-group-item-text">Opisz dotychczasowe doświadczenia z tańcem oraz-->
            <!--                    sprecyzuj swoje oczekiwania</p>-->
            <!--                </li>-->
            <!--                <li class="list-group-item">-->
            <!--                  <i class="fa fa-address-book-o pull-left"></i>-->
            <!--                  <h4 class="list-group-item-heading">Zostawiasz namiary do siebie</h4>-->
            <!--                  <p class="list-group-item-text">Dodamy Cię do naszej bazy osób poszukujących-->
            <!--                    partnera do tańca</p>-->
            <!--                </li>-->
            <!--                <li class="list-group-item">-->
            <!--                  <i class="fa fa-volume-control-phone pull-left"></i>-->
            <!--                  <h4 class="list-group-item-heading">Czekasz na telefon</h4>-->
            <!--                  <p class="list-group-item-text">Skontaktujemy się jak tylko zgłosi się do nas-->
            <!--                    odpowiedni kandydat</p>-->
            <!--                </li>-->
            <!--              </ul>-->
            <!---->
            <!--              <div class="panel panel-default panel-loading" ng-cloak>-->
            <!--                <svg width='20px' height='20px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"-->
            <!--                     preserveAspectRatio="xMidYMid" class="uil-hourglass">-->
            <!--                  <rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect>-->
            <!--                  <g>-->
            <!--                    <path fill="none" stroke="#000000" stroke-width="5" stroke-miterlimit="10"-->
            <!--                          d="M58.4,51.7c-0.9-0.9-1.4-2-1.4-2.3s0.5-0.4,1.4-1.4 C70.8,43.8,79.8,30.5,80,15.5H70H30H20c0.2,15,9.2,28.1,21.6,32.3c0.9,0.9,1.4,1.2,1.4,1.5s-0.5,1.6-1.4,2.5 C29.2,56.1,20.2,69.5,20,85.5h10h40h10C79.8,69.5,70.8,55.9,58.4,51.7z"-->
            <!--                          class="glass"></path>-->
            <!--                    <clipPath id="uil-hourglass-clip1">-->
            <!--                      <rect x="15" y="20" width="70" height="25" class="clip">-->
            <!--                        <animate attributeName="height" from="25" to="0" dur="1s"-->
            <!--                                 repeatCount="indefinite" vlaues="25;0;0" keyTimes="0;0.5;1"></animate>-->
            <!--                        <animate attributeName="y" from="20" to="45" dur="1s" repeatCount="indefinite"-->
            <!--                                 vlaues="20;45;45" keyTimes="0;0.5;1"></animate>-->
            <!--                      </rect>-->
            <!--                    </clipPath>-->
            <!--                    <clipPath id="uil-hourglass-clip2">-->
            <!--                      <rect x="15" y="55" width="70" height="25" class="clip">-->
            <!--                        <animate attributeName="height" from="0" to="25" dur="1s"-->
            <!--                                 repeatCount="indefinite" vlaues="0;25;25" keyTimes="0;0.5;1"></animate>-->
            <!--                        <animate attributeName="y" from="80" to="55" dur="1s" repeatCount="indefinite"-->
            <!--                                 vlaues="80;55;55" keyTimes="0;0.5;1"></animate>-->
            <!--                      </rect>-->
            <!--                    </clipPath>-->
            <!--                    <path d="M29,23c3.1,11.4,11.3,19.5,21,19.5S67.9,34.4,71,23H29z"-->
            <!--                          clip-path="url(#uil-hourglass-clip1)" fill="#000000" class="sand"></path>-->
            <!--                    <path d="M71.6,78c-3-11.6-11.5-20-21.5-20s-18.5,8.4-21.5,20H71.6z"-->
            <!--                          clip-path="url(#uil-hourglass-clip2)" fill="#000000" class="sand"></path>-->
            <!--                    <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="180 50 50"-->
            <!--                                      repeatCount="indefinite" dur="1s" values="0 50 50;0 50 50;180 50 50"-->
            <!--                                      keyTimes="0;0.7;1"></animateTransform>-->
            <!--                  </g>-->
            <!--                </svg>-->
            <!--                Ładowanie...-->
            <!--              </div>-->
            <!---->
            <!--              <div class="panel panel-default" ng-cloak style="overflow: hidden">-->
            <!--                <div class="panel-body">-->
            <!--                  <div ng-if="step==-1" class="text-center">-->
            <!--                    <a href class="btn btn-lg btn-primary" ng-click="begin()">Rozpocznij!</a>-->
            <!--                  </div>-->
            <!--                  <div ng-if="step==0" class="animated fadeIn">-->
            <!--                    <legend>-->
            <!--                      Krok 1: Podstawowe dane-->
            <!--                      <small class="pull-right text-muted">1/4</small>-->
            <!--                    </legend>-->
            <!--                    <form class="form-horizontal" name="form" ng-submit="next()">-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="firstName" class="col-sm-5 control-label">-->
            <!--                          Imię-->
            <!--                          <span class="text-danger">*</span>-->
            <!--                        </label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <input type="text"-->
            <!--                                 class="form-control"-->
            <!--                                 id="firstName"-->
            <!--                                 placeholder="Imię"-->
            <!--                                 ng-model="advertisement.advertiser.firstName"-->
            <!--                                 autofocus required>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="age" class="col-sm-5 control-label">Wiek</label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <input type="text"-->
            <!--                                 class="form-control"-->
            <!--                                 id="age"-->
            <!--                                 placeholder="Wiek"-->
            <!--                                 ng-model="advertisement.advertiser.age">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="height" class="col-sm-5 control-label">Wzrost (cm)</label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <input type="text"-->
            <!--                                 class="form-control"-->
            <!--                                 id="height"-->
            <!--                                 placeholder="Wzrost (cm)"-->
            <!--                                 ng-model="advertisement.advertiser.height">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <div class="col-xs-12">-->
            <!--                          <input type="submit"-->
            <!--                                 class="pull-right btn btn-primary"-->
            <!--                                 ng-disabled="form.$invalid" value="Dalej">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                    </form>-->
            <!--                  </div>-->
            <!--                  <div ng-if="step==1" class="animated fadeIn">-->
            <!--                    <legend>-->
            <!--                      Krok 2: Preferencje-->
            <!--                      <small class="pull-right text-muted">2/4</small>-->
            <!--                    </legend>-->
            <!--                    <form class="form-horizontal" name="form" ng-submit="next()">-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="lookingFor" class="col-sm-5 control-label">Szukam</label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <select class="form-control"-->
            <!--                                  ng-model="advertisement.preferences.gender"-->
            <!--                                  id="lookingFor">-->
            <!--                            <option value="man">partnera</option>-->
            <!--                            <option value="woman">partnerki</option>-->
            <!--                          </select>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="style" class="col-sm-5 control-label">-->
            <!--                          Styl tańca-->
            <!--                          <span class="text-danger">*</span>-->
            <!--                        </label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <input type="text"-->
            <!--                                 class="form-control"-->
            <!--                                 id="style"-->
            <!--                                 placeholder="Styl tańca"-->
            <!--                                 ng-model="advertisement.preferences.style"-->
            <!--                                 required>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="comment" class="col-sm-5 control-label">Uwagi</label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                                            <textarea class="form-control" id="comment" rows="3"-->
            <!--                                                      ng-model="advertisement.preferences.comment"></textarea>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <div class="col-xs-12">-->
            <!--                          <a href-->
            <!--                             class="pull-left btn btn-default"-->
            <!--                             ng-click="previous()">Wstecz-->
            <!--                          </a>-->
            <!--                          <input type="submit"-->
            <!--                                 class="pull-right btn btn-primary"-->
            <!--                                 ng-disabled="form.$invalid" value="Dalej">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                    </form>-->
            <!--                  </div>-->
            <!--                  <div ng-if="step==2" class="animated fadeIn">-->
            <!--                    <legend>-->
            <!--                      Krok 3: O Tobie-->
            <!--                      <small class="pull-right text-muted">3/4</small>-->
            <!--                    </legend>-->
            <!--                    <form class="form-horizontal" name="form" ng-submit="next()">-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="experience" class="col-sm-5 control-label">Jakie masz-->
            <!--                          doświadczenie-->
            <!--                          taneczne?</label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                                            <textarea class="form-control" id="experience" rows="3"-->
            <!--                                                      ng-model="advertisement.advertiser.experience"></textarea>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <div class="col-xs-12">-->
            <!--                          <a href-->
            <!--                             class="pull-left btn btn-default"-->
            <!--                             ng-click="previous()">Wstecz-->
            <!--                          </a>-->
            <!--                          <input type="submit"-->
            <!--                                 class="pull-right btn btn-primary"-->
            <!--                                 ng-disabled="form.$invalid" value="Dalej">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                    </form>-->
            <!--                  </div>-->
            <!--                  <div ng-if="step==3" class="animated fadeIn">-->
            <!--                    <legend>-->
            <!--                      Krok 4: Dane kontaktowe-->
            <!--                      <small class="pull-right text-muted">4/4</small>-->
            <!--                    </legend>-->
            <!--                    <form class="form-horizontal" name="form" ng-submit="send()">-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="mobile" class="col-sm-5 control-label">-->
            <!--                          Telefon-->
            <!--                        </label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <input type="text"-->
            <!--                                 class="form-control"-->
            <!--                                 id="mobile"-->
            <!--                                 placeholder="Telefon"-->
            <!--                                 ng-model="advertisement.contact.mobile">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <label for="email" class="col-sm-5 control-label">-->
            <!--                          Email-->
            <!--                          <span class="text-danger">*</span>-->
            <!--                        </label>-->
            <!--                        <div class="col-sm-7">-->
            <!--                          <input type="email"-->
            <!--                                 class="form-control"-->
            <!--                                 id="email"-->
            <!--                                 placeholder="Email"-->
            <!--                                 ng-model="advertisement.contact.email" required>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <div class="col-sm-12">-->
            <!--                          <div class="checkbox">-->
            <!--                            <label>-->
            <!--                              <input type="checkbox"-->
            <!--                                     ng-model="advertisement.agreement.store">-->
            <!--                              <span class="text-danger">*</span>-->
            <!--                              Wyrażam zgodę na przechowywanie i przetwarzanie moich danych-->
            <!--                              osobowych przez Szkołę tańca Setenta-->
            <!--                            </label>-->
            <!--                          </div>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <div class="col-sm-12">-->
            <!--                          <div class="checkbox"-->
            <!--                               ng-model="advertisement.agreement.offers">-->
            <!--                            <label>-->
            <!--                              <input type="checkbox"> Wyrażam zgodę na otrzymywanie-->
            <!--                              informacji handlowych - promocji, rabatów dostępnych w-->
            <!--                              ofercie Szkoły tańca Setenta-->
            <!--                            </label>-->
            <!--                          </div>-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                      <div class="form-group">-->
            <!--                        <div class="col-xs-12">-->
            <!--                          <a href-->
            <!--                             class="pull-left btn btn-default"-->
            <!--                             ng-click="previous()">Wstecz-->
            <!--                          </a>-->
            <!--                          <input type="submit"-->
            <!--                                 class="pull-right btn btn-primary"-->
            <!--                                 ng-disabled="form.$invalid" value="Wyślij">-->
            <!--                        </div>-->
            <!--                      </div>-->
            <!--                    </form>-->
            <!--                  </div>-->
            <!--                  <div ng-if="step==4" class="animated fadeIn">-->
            <!--                    <div class="showbox alert" ng-class="{'alert-success1': done}">-->
            <!--                      <div class="loader" ng-class="{'done': done}">-->
            <!--                        <svg viewBox="25 25 50 50">-->
            <!--                          <circle class="loader_background" cx="50" cy="50" r="20" stroke-width="3"/>-->
            <!--                          <circle class="loader_rotation" cx="50" cy="50" r="20" fill="none" stroke-width="4"/>-->
            <!--                          <path class="loader_path" d="m48,58l11,-16" stroke-dasharray="23" stroke-dashoffset="23"/>-->
            <!--                          <path class="loader_path" d="m48,58l-8,-6" stroke-dasharray="10" stroke-dashoffset="10"/>-->
            <!--                        </svg>-->
            <!--                      </div>-->
            <!--                    </div>-->
            <!--                    <h4 class="text-center" ng-if="!done">Wysyłanie...</h4>-->
            <!--                    <h4 class="text-center" ng-if="done">Dziękujemy! Ogłoszenie zostało dodane.</h4>-->
            <!--                  </div>-->
            <!--                </div>-->
            <!--              </div>-->
            <!--            </div>-->
          </div>
        </div>
        <div class="col-sm-4 search-container">
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
<?php get_footer(); ?>
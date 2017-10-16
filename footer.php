<footer>
  <div class="second-line text-center">
    &copy;
    <a href="http://setenta.wroclaw.pl">
      Szkoła tańca Wrocław
    </a>
    <span id="year-copy"></span>
  </div>
</footer>
</div>
<div id="fb-root"></div>
<script src="<?php bloginfo('template_url'); ?>/bundle.js?@@version"></script>
<script src="<?php bloginfo('template_url'); ?>/app.js?@@version"></script>
<script>
  (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.8&appId=503841366424292";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
//$(document).ready(function() {
//  $.ajaxSetup({ cache: true });
//  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
//    FB.init({
//      appId: '503841366424292',
//      version: 'v2.7' // or v2.1, v2.2, v2.3, ...
//    });
//    console.log(FB);
//  });
//});
</script>
<!--<script type="text/javascript">-->
<!--    var _smartsupp = _smartsupp || {};-->
<!--    _smartsupp.key = '5d60e928e9491d4623be5d105d16ddd0fa595c53';-->
<!--    window.smartsupp || (function (d) {-->
<!--        var s, c, o = smartsupp = function () {-->
<!--            o._.push(arguments)-->
<!--        };-->
<!--        o._ = [];-->
<!--        s = d.getElementsByTagName('script')[0];-->
<!--        c = d.createElement('script');-->
<!--        c.type = 'text/javascript';-->
<!--        c.charset = 'utf-8';-->
<!--        c.async = true;-->
<!--        c.src = '//www.smartsuppchat.com/loader.js?';-->
<!--        s.parentNode.insertBefore(c, s);-->
<!--    })(document);-->
<!--</script>-->
<script type="text/javascript">
  window.smartlook || (function (d) {
    var o = smartlook = function () {
      o.api.push(arguments)
    }, h = d.getElementsByTagName('head')[0];
    var c = d.createElement('script');
    o.api = new Array();
    c.async = true;
    c.type = 'text/javascript';
    c.charset = 'utf-8';
    c.src = '//rec.smartlook.com/recorder.js';
    h.appendChild(c);
  })(document);
  smartlook('init', 'd221c4ce9b13e155a23ed6904778ff7b521195b7');
</script>
<script>
  (function (window, document, o, g, r, scriptElement, firstScriptElement) {
    window['GoogleAnalyticsObject'] = 'ga';
    window.ga = window.ga ||
      function () {
        (window.ga.q = window.ga.q || []).push(arguments)
      };
    window.ga.l = 1 * new Date();
    scriptElement = document.createElement('script');
    firstScriptElement = document.getElementsByTagName('script')[0];
    scriptElement.async = 1;
    scriptElement.src = g;
    firstScriptElement.parentNode.insertBefore(scriptElement, firstScriptElement)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-45485563-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
  (function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:622800,hjsv:5};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
  })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!--<script>-->
<!--  window.cookieconsent.initialise({-->
<!--    container: document.getElementById("content"),-->
<!--    palette:{-->
<!--      popup: {background: "#fff"},-->
<!--      button: {background: "#aa0000"},-->
<!--    },-->
<!--    revokable:true,-->
<!--    onStatusChange: function(status) {-->
<!--      console.log(this.hasConsented() ?-->
<!--        'enable cookies' : 'disable cookies');-->
<!--    },-->
<!--    law: {-->
<!--      regionalLaw: false,-->
<!--    },-->
<!--    location: true,-->
<!--  });-->
<!--</script>-->
</body>
</html>
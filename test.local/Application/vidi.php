<?php
include '/opt/lampp/htdocs/test.local/Application/header.php';
?>


<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Пример на bootstrap 4: Простой одностраничный шаблон для фотогалереи, портфолио и многого другого.">

    <title>Альбом | Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4481610-59', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39705265 = new Ya.Metrika({ id:39705265, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="Yandex.Metrika" /></div></noscript> <!-- /Yandex.Metrika counter -->



  <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/aard.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Аард. Аард считается одним из наиболее часто используемых и полезных знаков. Это заряд телекинетической энергии, который может оглушить противника, сбить его с ног или разоружить, отразить удар или разрушить преграду. Для применения Аарда, как и других знаков, достаточно минимальных магических способностей, концентрации воли и особого жеста.</p>
                </div>
              </div>
            </div>
           
           <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/aics.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Аксий. Знак Аксий полезен как в диалогах, так и в бою. Он обладает достаточно мощным психотропным внушающим эффектом. Действует фактически на всех существ, кроме тех, что обладают сильной волей. Позволяет как легко убедить собеседника, так и привлечь на свою сторону противника – с временным эффектом.</p>
                </div>
              </div>
            </div>
           
           <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/igni.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Игни. Этот Знак создает изливающуюся прямо из пальцев ведьмака волну или струю пламени. Для применения Игни, как и других знаков, достаточно минимальных магических способностей, концентрации воли и особого жеста. Имеет обширное применение – от пыток и использования в бою до разжигания костров.</p>
                </div>
              </div>
            </div>
           
           <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/irden.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Ирден. Ирден создает поле мощного магического притяжения, парализуя и обездвиживая цель. Является весьма мощным Знаком, но чем больше масса тела существа, тем быстрее он вырывается из Знака. При должных тренировках, Знак Ирден также способен вызывать парализующую боль и даже ослеплять существо, попавшее в ловушку. В русском переводе книги в названии знака Ирден имеется опечатка - "Ирген". Имеет совершенно другое действие, этакий магический замок.</p>
                </div>
              </div>
            </div>
           
           <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="/img/qven.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Квен. Этот Знак зачастую является спасением для ведьмаков, поскольку создает магический заслон, щит, поглощающий большую часть наносимого урона, а при должном таланте еще и наносящий урон атакующим противникам. Тем не менее, ведьмака, находящегося под куполом Квена, могут сбить с ног, оглушить или нанести иной урон.</p>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>

</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

</body>
</html>



<?php
include '/opt/lampp/htdocs/test.local/Application/footer.php';
?>
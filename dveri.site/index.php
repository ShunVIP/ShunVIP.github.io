<!DOCTYPE html>
<!-- saved from url=(0066)http://twitter.github.com/bootstrap/examples/starter-template.html -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <link rel="SHORTCUT ICON" href="/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <title>DurDoor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Подключаем файл со стилями -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merienda:700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="css/jquery.alerts.css" rel='stylesheet' type='text/css'>
    <script src="css/jquery.alerts.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <?php
    $numberzakaz = rand(100000, 999999);
    ?>
<script type="text/javascript">
  document.onkeydown = function(event) {
    if (event.ctrlKey && (event.keyCode == 85) || (event.ctrlKey && event.shiftKey && (event.keyCode == 73)) || event.keyCode == 123) {
        return false
    }
}
</script>
    <script onmouseleave="">
      var numberzakaz='<?= $numberzakaz ?>';
// Отправка данных заказа на почту
$('#form').trigger('reset');
$(function() {
  'use strict';
  $('#form').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
      url: 'send.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function(msg) {
        console.log(msg);
        if (msg == 'ok') {
             alert('Ваш заказ принят. Номер заказа:<?= $numberzakaz ?>. Скоро с вами свяжется наш администратор.');
          $('#form').trigger('reset'); // очистка формы
        } else {
          alert('Ваш заказ принят!');
        }
      }
    });
  });
});
</script>

    <!-- Наборы различных иконок -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.png">
 </head>
 <body oncontextmenu="return false">
    <style>
   body {
    background: #c7b39b url(img/back.png); /* Цвет фона и путь к файлу */
   }
  </style>
     <!-- Меню сайта-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand">DurDoor</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a href="#myCarousel" target=_blank
onmouseover='click("#myCarousel");'>Акция</a></li>
              <li><a href="#config" target=_blank
onmouseover='click("#config");'>Конфигуратор двери</a></li>
              <li><a href="#zakaz" target=_blank
onmouseover='click("#zakaz");'>Заказ двери</a></li>
 <li><a href="#zakaz" target=_blank
onmouseover='click("#zakaz");'>Заказ профессионала</a></li
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div id="myCarousel" class="carousel slide">
  <!-- Блок с каруселью -->
  <div class="carousel-inner" align="center">
    <div class="active item">
     <!-- Здесь разместим фотографии дверей+описание, все в картинках -->
      <img src="img/a.png" alt="Типа меню">
      <div class="container">
            <div class="carousel-caption">
            </div>
      </div>
    </div>
   

    </div>
  </div>
  <!-- Кнопки карусели -->
  
</div>
<br>
<br>
<br>
    
     
    <div class="container">
  
       <!-- Выбор конфигурации -->
      <div id="config">
       
          <h2 align="center">Выбор конфигурации двери</h2> 
       
        <div class="divider"><img src="img/phon2.png" alt=""></div>
        <div class="row">
        </div>
        <div align="center" class="row" >
            <p align="Center">Выбери дверь своей мечты</p>
        
           <form id="form" name="dver"  method="post" >
  <b >Какой тип двери вам нужен:</b><Br>
   <input type="radio" name="tip" value="Входная" onmouseover='click();'> Входная дверь
   <input type="radio" name="tip" value="Комнатная" onmouseover='click();'> Межкомнатная дверь<Br>
   <b>Бронированная:</b><Br>
   <input type="radio" name="bron" value="Да" onmouseover='click();'> Да
   <input type="radio" name="bron" value="Нет" onmouseover='click();'> Нет<Br>
   <b>Наличие замка:</b><Br>
   <input type="radio" name="ruchka" value="Да" onmouseover='click();'> Да
   <input type="radio" name="ruchka" value="Нет" onmouseover='click();'> Нет<Br>
   <b>Цвет двери:</b><Br>
   <input type="radio" name="cvet" value="Черный" onmouseover='click();'> <img src="img/1.png" class="scale"> Черная 
   <input type="radio" name="cvet" value="Бежевый" onmouseover='click();'> <img src="img/2.png" class="scale"> Бежевая 
   <input type="radio" name="cvet" value="Белый" onmouseover='click();'> <img src="img/3.png" class="scale"> Белая
   <input type="radio" name="cvet" value="Темно-синий" onmouseover='click();'> <img src="img/4.png" class="scale"> Темно-синяя 
    <input type="radio" name="cvet" value="Каштан" onmouseover='click();'> <img src="img/5.png" class="scale"> Каштан <Br>
   <b>Материал:</b><Br>
   <input type="radio" name="material" value="Сталь" onmouseover='click();'> Сталь
   <input type="radio" name="material" value="Чугун" onmouseover='click();'> Чугунный сплав
   <input type="radio" name="material" value="Дерево" onmouseover='click();'> Дерево
   <input type="radio" name="material" value="Металлопластик" onmouseover='click();'> Металлопластик
   <input type="radio" name="material" value="Алюминий" onmouseover='click();'> Алюминий<Br>
   <b>Вид глазока:</b><Br>
   <input type="radio" name="glazok" value="Камера" onmouseover='click();'> Камера
   <input type="radio" name="glazok" value="Отверстие" onmouseover='click();'> Отверстие
   <input type="radio" name="glazok" value="Без Глазка" onmouseover='click();'> Без глазка<Br>
   <b>Защита от взлома:</b><Br>
   <input type="radio" name="guard" value="Вертикальная" onmouseover='click();'> Вертикальная
   <input type="radio" name="guard" value="Горизонтальная" onmouseover='click();'> Горизонтальная
   <input type="radio" name="guard" value="Без защиты" onmouseover='click();'> Без защиты<Br>
   <b>Тип замка:</b><Br>
   <input type="radio" name="tip1" value="Врезной" onmouseover='click();'> Врезной
   <input type="radio" name="tip1" value="Накладной" onmouseover='click();'> Накладной<Br>
   <b>Размеры двери (Ширина х Высота в мм):</b><Br>
   <input type="radio" name="razmer" value="900x1950" onmouseover='click();'> 900x1950
   <input type="radio" name="razmer" value="950x2050" onmouseover='click();'> 950x2050
   <input type="radio" name="razmer" value="1000x2100" onmouseover='click();'> 1000x2100
   <input type="radio" name="razmer" value="Индивидуальный" onmouseover='click();'> Индивидуальный<Br>
   <input type="hidden" name="numberzakaz" value="<?= $numberzakaz ?>">
    <div id="form_result"></div>
<Br>
<Br>
  <p><input type="submit" onmouseout='click();' value="Подтвердить выбор"  onclick="location.href = '#zakaz'">  
 </form>
    </div>
      </div>
 
      <div class="divider"></div>
        
    
      <div class="container">
       <!-- Выбор конфигурации -->
      <div ></div>
        <div id="heading">
          <h2>Заказ двери / Вызов профессионала</h2> 
        </div>
<script>$('form').submit(function(e) {
  var empty = $(this).parent().find("input").filter(function() {
    return this.value === "";
  });
  if (!empty.length) {
    //Если все графы заполнены, то показываем popup
    $('.popup').show();
    //очищаем все данные текстовых полей, кроме кнопок
  }
  e.preventDefault();
});</script>
        <div class="divider" id="zakaz"><br>
          <!--<p> ᅠᅠНомер вашего заказа:
          <b><?= $numberzakaz ?></b><br>ᅠᅠНазовите этот номер при звонке в службу заказа</p>--><div class="popup">
  <p> ᅠᅠНомер вашего заказа:
          <b><?= $numberzakaz ?></b><br>ᅠᅠМожете забрать дверь сами или вызвать доставку</p>
</div></div>
        <div class="row">
          <div class="span4">
             
            <!-- Put your photo link in the src attribute -->
            <img class="img-polaroid" src="img/1-1.png" alt="">
          </div>
          <div class="span8">
            <p class="lead">Мы молодая перспективная компания. Поможем с выбором, установкой и доставкой двери к вам домой. </p>
            <p class="lead">Мы всегда готовы развиваться и хотим получить ваши отзывы на почту Dveri@kruto.com или по телефону +78945612311.</p>
          </div>
        </div>
        <div class="row">
            <div class="span8">
              <p class="lead">При необходимости доставки на дом,  свяжитесь с нами по телефону +78945612311. Доставка по Томску 500р. Доставка по России от 1000р</p>
              <p class="lead">Наши контакты: e-mail: Dveri@kruto.com , телефон: +78945612311. Для консультации звоните +75612324846</p>
          </div>
          <div class="span4">
            <!-- Put your photo link in the src attribute -->
            <img class="img-polaroid" src="img/1-2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </p>
      <div class="divider"></div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write("<script src='js/jquery-1.8.3.min.js'>\x3C/script>")</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('a[href^="#"]').click(function(event) {
            var id = $(this).attr("href");
            var offset = 60;
            var target = $(id).offset().top - offset;
            $('html, body').animate({scrollTop:target}, 800, $.easing.easeInOutExpo());
            event.preventDefault();
        });
      });
    </script>
  

</body>
 </html>
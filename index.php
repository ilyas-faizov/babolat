<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Babolat</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="styles/vendor.css">

    <link rel="stylesheet" href="styles/main.css">
    
    <script src="scripts/vendor/modernizr.js"></script>
  </head>
  <body>
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header class="header" id="contacts">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-3 logo text-center text-lg-left">
            <a href="#"><img src="images/logo.png" alt="" title="" class="img-fluid"/></a>
          </div>
          <div class="col-lg-6 menu-nav d-none d-lg-block">
            <ul class="d-flex list-inline flex-nowrap justify-content-start">
              <li><a href="#stock">Акция</a></li>
              <li><a href="#shop">Товары</a></li>
              <li><a href="#contacts">Контакты</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 d-md-flex justify-content-md-end">
            <div class="contacts text-center text-lg-right">
              <p class="phone">‎‎8(499) 750-89-38</p>
              <a href="#callback-form" class="popup-with-form btn btn-my btn-block">Заказать звонок</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="f-block">
      <div class="container">
        <img src="images/f-block-bg.png" alt="" title="" class="img-fluid"/>
      </div>
    </section>
    <section class="conditions-block" id="stock">
      <div class="container">
        <div class="title-block">
          <p>Условия участия</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="t-block">
              <h2>Купите ракетку</h2>
              <p>серии <span class="text-uppercase">Babolat Pure Strike</span><br/> в период с 11.12.2017 по 11.01.2018</p>
            </div>
            <div class="t-block">
              <h2>Зарегистрируйтесь</h2>
              <p>на этой странице, заполнив все поля в форме</p>
            </div>
            <div class="text-center mb-5">
              <a href="#registration-form" class="popup-with-form btn btn-my dark pl-5 pr-5">Регистрация</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-5 embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7Txh6hI5NR0?rel=0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="winner-block">
      <div class="container">
        <div class="title-block">
          <p>Победитель получает</p>
        </div>
        <div class="row text-center">
          <div class="col-md-6 col-lg-3" data-mh="winner">
            <img src="images/winner-icon-1.png" alt="" title="" class="img-fluid"/>
            <p>2 билета на турнир<br/> Ladies Trophy 2018<br/> в Санкт-Петербурге</p>
          </div>
          <div class="col-md-6 col-lg-3" data-mh="winner">
            <img src="images/winner-icon-2.png" alt="" title="" class="img-fluid"/>
            <p>Билеты до Санкт-Петербурга<br/> и обратно на двоих</p>
          </div>
          <div class="col-md-6 col-lg-3" data-mh="winner">
            <img src="images/winner-icon-3.png" alt="" title="" class="img-fluid"/>
            <p>Оплачиваемое проживание<br/> (1 день) на двоих</p>
          </div>
          <div class="col-md-6 col-lg-3" data-mh="winner">
            <img src="images/winner-icon-4.png" alt="" title="" class="img-fluid"/>
            <p>Чехол их рук<br/> Елены Весниной</p>
          </div>
        </div>
      </div>
    </section>
    <section class="win-trip">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title-block mt-3 mb-0">
              <p>Выиграй поездку на Ladies<br/> Trophy 2018 и получи чехол<br/> Елены Весниной </p>
            </div>
            <img src="images/balobat.png" alt="" title="" class="img-fluid"/>
          </div>
          <div class="col-md-6">
            <div class="b-form d-flex h-100 align-items-end">
              <div class="form">
                <div class="form-title text-center">
                  <p>Получи подарок от Елены Весниной</p>
                </div>
                <form action="send.php" method="post" class="send-form" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" name="client_name" class="form-control rounded-0 client-name" placeholder="Ваше имя"/>
                  </div>
                  <div class="form-group">
                    <input type="tel" name="client_phone" class="form-control rounded-0 client-phone" placeholder="Номер телефона"/>
                  </div>
                  <div class="form-group">
                    <input type="text" name="client_town" class="form-control rounded-0 client-town" placeholder="Ваш город"/>
                  </div>
                  <div class="form-group">
                    <input type="text" name="client_store" class="form-control rounded-0 client-store" placeholder="Название магазина где приобрели продукцию"/>
                  </div>
                  <div class="text-center check-load">
                    <div class="form-upload">
                      <a class="file-input-wrapper">
                        <span>Загрузить фото чека</span>
                        <input type="file" name="client_image" class="file-upload client-image"/>
                      </a>
                    </div>
                  </div>
                  <input type="hidden" name="send_type" class="send-type" value="2" />
                  <input type="hidden" name="send_extra" class="send-extra" value="1" />
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-lg btn-my">Участвовать</button>
                  </div>
                  <div class="oksend">
                    <p>Спасибо за регистрацию</p>
                  </div>
                </form>
                <div class="text-center action-date">
                  <p>Акция действует с 11.12.2017 по 11.12.2018</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="shop-block" id="shop">
      <div class="container">
        <div class="title-block">
          <p class="align-items-center d-block d-md-flex">Выбери свою ракетку Pure Drive<a href="http://www.babolat.com/" target="_blank" class="btn btn-my btn-lg dark ml-sm-auto pl-5 pr-5">Где купить?</a></p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="item" data-mh="item">
              <h3>Pure Strike VS</h3>
              <div class="images text-center">
                <img src="images/Pure-Strike-VS.png" alt="" title="" class="img-fluid"/>
              </div>
              <div class="text">
                <p>Новая ракетка Pure Strike VS - для сильных атакующих игроков, которым предпочитают стандартный вес ракетки.</p>
                <p>Для теннисистов, которые ускоряют мяч и нуждаются в быстрой реакции для увеличения точности игры. Квадратный обод и струнная формула 16/20 - сильные стороны ракетки</p>
              </div>
              <div class="price text-center">
                <p><span>14 200</span> руб.</p>
              </div>
              <div class="text-center">
                <a href="http://ru.babolat.com/product/tennis/racket/pure-strike-vs-102280" target="_blank" class="btn btn-lg dark btn-my pl-5 pr-5">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item" data-mh="item">
              <h3>Pure Strike VS Tour</h3>
              <div class="images text-center">
                <img src="images/Pure-Strike-VS-Tour.png" alt="" title="" class="img-fluid"/>
              </div>
              <div class="text">
                <p>Ракетка Pure Strike VS Tour предназначена для физически сильных атакующих игроков, которым нравится тяжелый вес ракетки. Предназначена для теннисистов, которые ускоряют мяч и нуждаются в быстрой реакции для увеличения точности игры.</p>
                <p>Сильные стороны этой ракетки -квадратный обод и струнная формула 16/20</p>
              </div>
              <div class="price text-center">
                <p><span>14 200</span> руб.</p>
              </div>
              <div class="text-center">
                <a href="http://ru.babolat.com/product/tennis/racket/pure-strike-vs-tour-102281" target="_blank" class="btn btn-lg dark btn-my pl-5 pr-5">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item" data-mh="item">
              <h3>Pure Strike 98 16/19</h3>
              <div class="images text-center">
                <img src="images/Pure-Strike-98-16-19.png" alt="" title="" class="img-fluid"/>
              </div>
              <div class="text">
                <p>Новая ракетка Pure Strike предназначена для игроков, которые первыми наносят удар, ускоряют мяч и нуждаются в быстрой реакции для увеличения точности игры.</p>
                <p>Оптимизированная струнная формула с более широким шагом между поперечными струнами обеспечивает большую мощность.</p>
                <p>Технология гибридного обода (Hybrid Frame Technology) создает уникальную комбинацию мощности и контроля. Более широкий обод на 3/9/12 часов и напротив шейки увеличивает точность и повышает стабильность при ударе по мячу.</p>
              </div>
              <div class="price text-center">
                <p><span>13 790</span> руб.</p>
              </div>
              <div class="text-center">
                <a href="http://ru.babolat.com/product/tennis/racket/pure-strike-98-16/19-102282" target="_blank" class="btn btn-lg dark btn-my pl-5 pr-5">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item" data-mh="item">
              <h3>Pure Strike 98 18/20</h3>
              <div class="images text-center">
                <img src="images/Pure-Strike-98-18-20.png" alt="" title="" class="img-fluid"/>
              </div>
              <div class="text">
                <p>Новая ракетка Pure Strike предназначена для игроков, которые первыми наносят удар, ускоряют мяч и нуждаются в быстрой реакции для увеличения точности игры.</p>
                <p>Оптимизированная струнная формула с более широким шагом между поперечными струнами обеспечивает повышенную мощность. Гибридный обод (Hybrid Frame Technology) создает уникальную комбинацию мощности и контроля. Более широкие секции обода на 3/9/12 часов и напротив вилки увеличивает точность и повышает стабильность при ударе мяча.</p>
                <p>Струнная формула 18/20 для большего контроля</p>
              </div>
              <div class="price text-center">
                <p><span>13 800</span> руб.</p>
              </div>
              <div class="text-center">
                <a href="http://ru.babolat.com/product/tennis/racket/pure-strike-98-18/20-102283" target="_blank" class="btn btn-lg dark btn-my pl-5 pr-5">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item" data-mh="item">
              <h3>Pure Strike 100</h3>
              <div class="images text-center">
                <img src="images/Pure-Strike-100.png" alt="" title="" class="img-fluid"/>
              </div>
              <div class="text">
                <p>Новая ракетка Pure Strike предназначена для игроков, которые первыми наносят удар, ускоряют мяч и нуждаются в быстрой реакции для увеличения точности игры.</p>
                <p>Оптимизированная струнная формула с более широким шагом между поперечными струнами обеспечивает большую мощность.</p>
                <p>Технология гибридного обода (Hybrid Frame Technology) создает уникальную комбинацию мощности и контроля. Более широкий обод на 3/9/12 часов и напротив шейки увеличивает точность и повышает стабильность при ударе по мячу. Размер головы 100 дюймов улучшает игровые характеристики.</p>
              </div>
              <div class="price text-center">
                <p><span>13 250</span> руб.</p>
              </div>
              <div class="text-center">
                <a href="http://ru.babolat.com/product/tennis/racket/pure-strike-100-102284" target="_blank" class="btn btn-lg dark btn-my pl-5 pr-5">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="item" data-mh="item">
              <h3>Pure Strike Team</h3>
              <div class="images text-center">
                <img src="images/Pure-Strike-Team.png" alt="" title="" class="img-fluid"/>
              </div>
              <div class="text">
                <p>Новая ракетка Pure Strike предназначена для игроков, которые наносят удар первыми, которые ускоряют мяч и нуждаются в быстрой реакции для увеличения точности игры. Оптимизированная струнная формула с более широким шагом между поперечными струнами обеспечивает большую мощность.</p>
                <p>Технология гибридной рамы (Hybrid Frame Technology) создает уникальную комбинацию мощности и контроля. Более широкие обод на 3/9/12 часов и напротив шейки увеличивает точность и повышает стабильность при ударе по мячу. Размер головы 100 дюймов и облегченный вес ракетки для улучшенных игровых характеристик и повышенной маневренности.</p>
              </div>
              <div class="price text-center">
                <p><span>12 800</span> руб.</p>
              </div>
              <div class="text-center">
                <a href="http://ru.babolat.com/product/tennis/racket/pure-strike-team-102285" target="_blank" class="btn btn-lg dark btn-my pl-5 pr-5">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container">
        <div class="block__social d-flex justify-content-center">
          <div class="item text-center">
            <p>Мы в соц сетях:</p>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><img src="images/facebook.png" alt="" title=""/></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><img src="images/twitter.png" alt="" title=""/></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="LinkedIn"><img src="images/linkedin.png" alt="" title=""/></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="VKontakte"><img src="images/vkontakte.png" alt="" title=""/></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Одноклассники"><img src="images/ok.png" alt="" title=""/></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><img src="images/youtube.png" alt="" title=""/></a>
            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><img src="images/instagram.png" alt="" title=""/></a>
          </div>
        </div>
      </div>
    </footer>

    <div id="callback-form" class="popup__form white-popup-block mfp-hide">
      <h3>Заказать звонок</h3>
      <div class="text-center">
        <form action="send.php" method="post" class="send-form">
          <div class="form-group text-left">
            <label>Ваше имя<sup>*</sup></label>
            <input type="text" name="client_name" id="name" class="form-control rounded-0 client-name" placeholder="Ваше имя"/>
          </div>
          <div class="form-group text-left">
            <label>Ваш номер телефона<sup>*</sup></label>
            <input type="tel" name="client_phone" class="form-control rounded-0 client-phone" placeholder="Номер телефона"/>
            <small class="form-text">Поля отмеченные <sup>*</sup> обязательны для заполнения</small>
          </div>
          <input type="hidden" name="send_type" class="send-type" value="1" />
          <input type="hidden" name="send_extra" class="send-extra" value="1" />
          <button type="submit" class="btn btn-my dark btn-block m-auto">Отправить</button>
        </form>
      </div>
    </div>

    <div id="registration-form" class="popup__form white-popup-block mfp-hide">
      <h3>Регистрация</h3>
      <div class="text-center">
        <!--<form action="send.php" method="post" class="send-form" enctype="multipart/form-data">
          <div class="form-group text-left">
            <label>Ваше имя<sup>*</sup></label>
            <input type="text" name="client_name" id="name" class="form-control rounded-0 client-name" placeholder="Ваше имя"/>
          </div>
          <div class="form-group text-left">
            <label>Ваш номер телефона<sup>*</sup></label>
            <input type="tel" name="client_phone" class="form-control rounded-0 client-phone" placeholder="Номер телефона"/>
          </div>
          <div class="form-group text-left">
            <label>Ваш город<sup>*</sup></label>
            <input type="text" name="client_town" class="form-control rounded-0 client-town" placeholder="Ваш город"/>
          </div>
          <div class="form-group text-left">
            <label>Название магазина где приобрели продукцию<sup>*</sup></label>
            <input type="text" name="client_store" class="form-control rounded-0 client-store" placeholder="Название магазина где приобрели продукцию"/>
          </div>
          <div class="form-group text-left check-load">
            <div class="form-upload text-center ">
              <a class="file-input-wrapper">
                <span>Загрузить фото чека</span>
                <input type="file" name="client_image" title="Обзор..." class="file-inputs file-upload client-image"/>
              </a>
            </div>
            <small class="form-text">Поля отмеченные <sup>*</sup> обязательны для заполнения</small>
          </div>
          <input type="hidden" name="send_type" class="send-type" value="2" />
          <input type="hidden" name="send_extra" class="send-extra" value="2" />
          <button type="submit" class="btn btn-my dark btn-block m-auto">Отправить</button>
        </form>-->
        <div class="oksend">
          <p>Спасибо за регистрацию</p>
        </div>
      </div>
    </div>

    <script src="scripts/vendor.js"></script>
    
    
    
    <script src="scripts/main.js"></script>
  </body>
</html>

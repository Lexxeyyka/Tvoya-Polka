<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Твоя Полка магазин барахолка</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class=" text-xl-left col-8 col-xl-3 col-lg-3">
                <a href="/"><img src="{{ asset('img/logo_without.png') }}" alt="Твоя Полка" class="Logo img-fluid"/></a>
            </div>
            <div class=" col-lg-4 col-xl-4 d-none d-lg-block">
                <nav class=" menu__header">
                    <ul class="menu d-flex">
                        <li class="menu__item">
                            <a href="#">О нас</a>
                        </li>
                        <li class="menu__item">
                            <a href="/#NewsSection" class="menulink">Новости</a>
                        </li>
                        <li class="menu__item">
                            <a href="#footer" class="menulink">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="ml-auto d-none d-lg-block justify-content-lg-end col-lg-3">
                <a href="#" id="LogIn" class=" LogIn d-flex justify-content-end">
                    <span class="LogIn__text">Личный кабинет<i class="LogIn__icon fas fa-user-alt"></i></span>

                </a>
            </div>
            <div class=" d-none d-lg-block justify-content-lg-end col-lg-1 col-xl-1">
                <a href="#" class=" ChooseTown d-flex justify-content-center">
                    <i class="ChooseTown__icon fas fa-map-marker-alt"></i>
                </a>
            </div>
            <div class="SlideMenu col-2 d-lg-none ml-auto d-flex justify-content-end">
                <a href="#" class="SlideMenu__link">
                    <i class="SlideMenu__link__icon fa fa-bars"></i>
                </a>
            </div>
            <div class="MenuBar d-lg-none">
                <div class="d-flex align-items-center closeField">
                    <a href="#" class="MenuBar__link">
                        <i class="MenuBar__link__iconClose fas fa-times"></i>
                    </a>
                </div>
                <nav>
                    <ul class="SlideMenu d-flex flex-column-reverse justify-content-start">
                        <li class="SlideMenu__item">
                            <a href="#" class="menu__item__link">О нас</a>
                        </li>
                        <li class="SlideMenu__item">
                            <a href="/#NewsSection" class="menulink menu__item__link">Новости</a>
                        </li>
                        <li class="SlideMenu__item">
                            <a href="#footer" class="menulink menu__item__link">Контакты</a>
                        </li>
                        <li class="SlideMenu__item">
                            <a href="#" class="LogIn__menu menu__item__link">Личный кабинет</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="overlay" ></div>
    <div class="popup">
        <form class="Form" id="form" action="#">
            <i class="close_window fas fa-times"></i>
            <h2 class="Form__label">Авторизация</h2>
            <hr>
            <div class="Form__login">
                <input type="text" class="Form__login__input" placeholder="Логин">
            </div>
            <div class="Form__password">
                <input type="password" class="Form__password__input" id="exampleInputPassword1" placeholder="Пароль">
            </div>
            <div class="Form__button d-flex justify-content-around">
                <a href="recover" class="Form__recover__pass">Восстановить пароль</a>
                <button type="submit" class="Form__button__auth">Войти</button>
            </div>
            <div class="FormInfo">
                Ваши логин и пароль вы сможете найти в договоре или узнать у сотрудника магазина
            </div>
        </form>
    </div>
</header>
    <div class="container">
        <div class="row d-flex">
            <div class="test col-1">col-1</div>
            <div class="test col-1">col-2</div>
            <div class="test col-1">col-3</div>
            <div class="test col-1">col-4</div>
            <div class="test col-1">col-5</div>
            <div class="test col-1">col-6</div>
            <div class="test col-1">col-7</div>
            <div class="test col-1">col-8</div>
            <div class="test col-1">col-9</div>
            <div class="test col-1">col-10</div>
            <div class="test col-1">col-11</div>
            <div class="test col-1">col-12</div>
        </div>
    </div>
<div class="DropListTown">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<footer>
    <div id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="Footer__contacts__title col-12">
                    <h1>Наши контакты:</h1>
                </div>
                <div class="Footer__tel col-12 d-flex flex-row">
                    <i class="Footer__tel__icon fa fa-phone"></i>
                    <div class="Footer__tel__num">+7 (8182) 43-31-32</div>
                </div>
                <div class="pt-2 Footer__mail col-12 d-flex flex-row">
                    <i class="Footer__mail__icon fas fa-envelope"></i>
                    <div class="Footer__mail__email">arhangelsk@tvoyapolka.info</div>
                </div>

                <div class="footer__title col-12">
                    <h3>Вы сможете найти нас здесь:</h3>
                </div>
            </div>
        </div>
        <div class="footer__map">
            <a class="dg-widget-link" href="http://2gis.ru/arkhangelsk/firm/70000001028461952/center/40.523508,64.536664/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Архангельска</a>
            <div class="dg-widget-link">
                <a href="http://2gis.ru/arkhangelsk/center/40.523508,64.536664/zoom/16/routeTab/rsType/bus/to/40.523508,64.536664╎Твоя Полка, магазин?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Твоя Полка, магазин</a>
            </div>
            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">new DGWidgetLoader({"width":"100%","height":400,"borderColor":"#a3a3a3","pos":{"lat":64.536664,"lon":40.523508,"zoom":16},"opt":{"city":"arkhangelsk"},"org":[{"id":"70000001028461952"}]});
            </script><noscript style="color:#c00;font-size:16px;font-weight:bold;"></noscript>
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <div class="m-3 Footer__followUs d-flex justify-content-around col-lg-2 col-md-4 col-6">
                    <a href="https://vk.com/tvoypolka_arkhangelsk"><img src="{{ asset('img/logo-vk.png') }}" alt="Vkontakte" class="logo-vk"/></a>
                    <a href="https://www.instagram.com/tvoya_polka/"><img src="{{ asset('img/logo-inst.png') }}" alt="instagram" class="logo-inst"/></a>
                </div>
                <div class="w-100"></div>
                <div class="text-center m-auto col-12">Все права защищены © 2018 <span style="white-space:nowrap" >Твоя Полка</span></div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>


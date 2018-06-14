<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Твоя Полка магазин барахолка</title>
    <link rel="icon" type="image/png" href="{{ asset('img/LOGOTP2.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,500,700,400i&amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
          integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/pannellum.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/pannellum.js') }}"></script>
</head>
<body>
<header id="header" class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class=" text-xl-left col-8 col-xl-3 col-lg-3">
                <a href="/"><img src="{{ asset('img/logo_without.png') }}" alt="Твоя Полка" class="Logo img-fluid"/></a>
            </div>
            <div class="col-lg-4 col-xl-4 d-none d-lg-block">
                <nav class=" menu__header">
                    <ul class="menu d-flex">
                        <li class="menu__item">
                            <a href="{{ route('about') }}">О нас</a>
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
            <div class="d-none d-lg-block col-lg-4 text-right">
                @if (Auth::check())
                    <a href="{{ route('user.profile') }}" class="LogIn">
                        <span class="LogIn__text">Личный кабинет <i class="LogIn__icon fas fa-user-alt"></i></span>
                    </a>
                    <a href="{{ route('user.logout') }}" class="btn_logout"><i class="fas fa-sign-out-alt"></i></a>
                @else
                    <a href="#login" class="LogIn text-right">
                        <span class="LogIn__text">Авторизироваться <i class="LogIn__icon fas fa-key"></i></span>
                    </a>
                @endif
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
                    @if (Auth::check())
                    <a href="{{ route('user.logout') }}" class="btn_logout_slide MenuBar__link">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    @else
                    @endif
                </div>
                <nav>
                    <ul class="SlideMenu d-flex flex-column-reverse justify-content-start">

                        <li class="SlideMenu__item">
                            <a href="about" class="menu__item__link">О нас</a>
                        </li>
                        <li class="SlideMenu__item">
                            <a href="/#NewsSection" class="menulink menu__item__link">Новости</a>
                        </li>
                        <li class="SlideMenu__item">
                            <a href="#footer" class="menulink menu__item__link">Контакты</a>
                        </li>
                        <li class="SlideMenu__item">
                            <a class="choosetown_slide menulink menu__item__link">Выберите город</a>
                        </li>
                        @if (Auth::check())
                        <li class="SlideMenu__item">
                            <a href="{{ route('user.profile') }}" class="LogIn__menu menu__item__link">Личный кабинет</a>
                        </li>
                        @else
                        <li class="SlideMenu__item">
                            <a href="#login" class="LogIn__menu menu__item__link">Авторизироваться</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    @if (session()->has('alert'))
    <div class="fail-auth text-center">
        <h2>{{ session()->get('alert')['title'] }}</h2>
        <span>{{ session()->get('alert')['message'] }}</span>
        <div class="wrapper d-flex justify-content-around">
            @if (session()->get('alert')['message'] === 'Логин или пароль были введены не верно.')
            <a href="#login" class="btn_again_link">
                <button type="button" class="btn_again">Еще раз</button>
            </a>
            @endif
            <button type="button" class="btn_close">Закрыть</button>
        </div>
    </div>
    @endif
    <div class="popup">
        <form class="Form" id="form" method="post" action="{{ route('user.login') }}">
            {{ csrf_field() }}
            <i class="close_window fas fa-times"></i>
            <h2 class="Form__label">Авторизация</h2>
            <hr>
            <div class="Form__login">
                <input type="text" class="Form__login__input" name="login" placeholder="Логин">
            </div>
            <div class="Form__password">
                <input type="password" class="Form__password__input" name="password" id="exampleInputPassword1"
                       placeholder="Пароль">
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
<div class="DropListTown">
    <div class="container">
        <div class="row justify-content-center">

            <ul class="ListTown d-flex flex-column col-10 text-center ">
                <li><a href="#">Архангельск</a></li>
                <li><a href="#" class="text-muted">Северодвинск (Скоро открытие)</a></li>
            </ul>
            <i id="closeDrop" class="closeDrop d-lg-none mt-3 close_window fas fa-times"></i>
        </div>
    </div>
</div>
<div class="content">
    @yield('content')
</div>
<footer id="footer" class="footer text-muted">
    <div class="container">
        <div class="row">
            <div class="Footer__contacts__title col-12">
                <h1>Наши контакты:</h1>
            </div>
            <div class="Footer__tel col-12 d-flex flex-row">
                <i class="Footer__tel__icon fa fa-phone"></i>
                <address class="Footer__tel__num">+7 (8182) 43-31-32</address>
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
        <a class="dg-widget-link"
           href="http://2gis.ru/arkhangelsk/firm/70000001028461952/center/40.523508,64.536664/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
            на карте Архангельска</a>
        <div class="dg-widget-link">
            <a href="http://2gis.ru/arkhangelsk/center/40.523508,64.536664/zoom/16/routeTab/rsType/bus/to/40.523508,64.536664╎Твоя Полка, магазин?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                проезд до Твоя Полка, магазин</a>
        </div>
        <script src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
        <script>new DGWidgetLoader({
                "width": "100%",
                "height": 400,
                "borderColor": "#a3a3a3",
                "pos": {"lat": 64.536664, "lon": 40.523508, "zoom": 16},
                "opt": {"city": "arkhangelsk"},
                "org": [{"id": "70000001028461952"}]
            });
        </script>
        <noscript style="color:#c00;font-size:16px;font-weight:bold;"></noscript>
    </div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="m-3 Footer__followUs d-flex justify-content-around col-lg-2 col-md-4 col-6">
                <a href="https://vk.com/tvoypolka_arkhangelsk"><i class="fab fa-vk"></i></a>
                <a href="https://www.instagram.com/tvoya_polka/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="w-100"></div>
            <div class="Rights text-center m-auto col-12">Все права защищены © 2018 <span
                        style="white-space:nowrap">Твоя Полка</span></div>
        </div>
    </div>
</footer>
</body>
</html>
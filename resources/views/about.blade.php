@extends('layout')
@section('title', ' О нас')
@section('content')
    <div class="container">
        <div class="row">

            <div class="aboutTitle col-lg-6">
                <h1>О нас</h1>
                <p>
                    Мы — это сеть магазинов «Твоя Полка»!

                    Объединившись с огромным количеством творческих и неравнодушных людей, мы организовали пространство, где каждый может заработать на своем труде!
                </p>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('img/First_img.png') }}" alt="Твоя Полка" class="First_img img-fluid"/>
            </div>
            <div class="w-100"></div>

            <div class="titleVR col-12 text-center">
                <h2>Вы можете побывать в магазине виртуально! <i class="far fa-smile"></i></h2>
            </div>
                <div id="tour"></div>

            <div class="col-lg-6 mr-auto d-none d-lg-block">
                <img src="{{ asset('img/Second_img.png') }}" alt="Твоя Полка" class="First_img img-fluid"/>
            </div>
            <div class="aboutText col-lg-6 ml-auto text-lg-right">
                <h2>Чем же мы живем?</h2>
                <h3>Аренда торговых мест в магазине</h3>
                <p>В наших магазинах любой желающий может арендовать полочку и продавать плоды своего творчества, перепродавать товар или просто заработать на вещах, которые лежат дома без дела.</p>
            </div>

            <div class="w-100"></div>
            <div class="aboutText2 col-lg-8">
                <h3>Магазин настоящего эксклюзива</h3>
                <p>На наших полочках покупатели всегда найдут эксклюзивные подарки. Так как многие из наших товаров сделаны вручную, то второго такого товара просто не найти! Кроме того, десятки арендаторов в каждом магазине ежедневно пополняют полочки новыми интереснейшими вещицами и поэтому наши постоянные покупатели всегда смогут найти что-то новенькое: украшения, предметы интерьера, игрушки, раритетные товары, книги и многое другое!</p>
            </div>
            <div class="col-lg-4">
                <img src="{{ asset('img/Third-img(1).png') }}" alt="Твоя Полка" class="Third_img1 img-fluid"/>
                <img src="{{ asset('img/Third-img(2).png') }}" alt="Твоя Полка" class="text-right Third_img2 img-fluid"/>
                <img src="{{ asset('img/Third-img(3).png') }}" alt="Твоя Полка" class="Third_img3 img-fluid"/>
            </div>
            <div class="w-100"></div>

            <div class="col-lg-3 d-none d-lg-block">
                <img src="{{ asset('img/Shelf.png') }}" alt="Твоя Полка" class="Shelf img-fluid"/>
            </div>

            <div class="aboutText3 col-lg-8 ml-auto text-lg-right">
                <h3>Bookcrossing (Книговорот)</h3>
                <p>В наших магазинчиках можно совершенно бесплатно обмениваться книжками по системе «bookcrossing», для этого выделен целый книжный стеллаж!

                    Все очень просто – принеси свою книгу и поменяй её на любую другую!</p>
            </div>
            <div class="w-100"></div>


            <div class="aboutText4 col-lg-8">
                <h3>Поздравительная почтовая служба</h3>
                <p>В каждом магазинчике нашей сети есть огромный выбор почтовых открыток, которые можно отправить друзьям и родным по почте прямо из магазина!</p>
            </div>
            <div class="col-lg-4 text-center">
                <img src="{{ asset('img/MailBox.png') }}" alt="Твоя Полка" class="MailBox img-fluid"/>
            </div>
            <div class="w-100"></div>
            <script>
                $(function() {
                    pannellum.viewer('tour', {
                        'default': {
                            'firstScene': 'street',
                            'sceneFadeDuration': 1000,
                            'strings':
                                {
                                    loadButtonLabel: 'Нажмите для запуска панорамы',
                                    loadingLabel: 'Загрузка...',
                                    bylineLabel: '%s',
                                    noPanoramaError: 'Панорамное изображение не было указано.',
                                    fileAccessError: 'Не удалось получить доступ к файлу %s.',
                                    malformedURLError: 'Что-то не так с URL-панорамы.',
                                    iOS8WebGLError: 'Из-за сломанной реализации webgl в iOS 8 для Вашего устройства работают только прогрессивные кодированные JPEG (эта панорама использует стандартное кодирование).',
                                    genericWebGLError: 'Ваш браузер не имеет необходимой поддержки WebGL для отображения этой панорамы.',
                                    textureSizeError: 'Эта панорама слишком велика для Вашего устройства! Это %spx широкий, но устройство поддерживает изображения только до %spx в ширину. Попробуйте другое устройство. (Если Вы автор, попробуйте уменьшить изображение.)',
                                    unknownError: 'Неизвестная ошибка. Проверьте консоль разработчика.',
                                }
                        },
                        'scenes': {
                            'street': {
                                'title': 'Вход с проспекта Чумбарова-Лучинского, дом 41',
                                'vaov': 55,
                                'yaw': -80,
                                'maxHfov': 120,
                                'minPitch': 0,
                                'maxPitch': 0,
                                'hfov': 80,
                                'panorama': '/img/tour/street.jpg',
                                'hotSpots': [
                                    {
                                        'pitch': 10,
                                        'yaw': -81,
                                        'type': 'scene',
                                        'text': 'Вход в магазин «Твоя Полка»',
                                        'sceneId': 'room-main',
                                    },
                                ],
                            },
                            'room-main': {
                                'title': 'Центральный зал',
                                'haov': 180, // Горизонтальный угол обзора
                                'vaov': 50, // Вертикальный угол обзора
                                'minHfov': 50, // На сколько близко можно приблизить
                                'maxHfov': 120,  // На сколько сильно можно отдалить
                                'minYaw': -90, // Ограничения прокрутки влево в градусах
                                'maxYaw': 90, // Ограничения прокрутки вправо в градусах
                                'minPitch': 0, // Ограничения прокрутки вверх в градусах
                                'maxPitch': 0, // Ограничения прокрутки вниз в градусах
                                'yaw': -76.7, // Откуда начинать показывать по горизонтали
                                'hfov': 80, // Приближение изначальное
                                'panorama': '/img/tour/room-main.jpg', // Ссылка на изображение
                                'hotSpots': [
                                    {
                                        'pitch': 0,
                                        'yaw': 56,
                                        'type': 'scene',
                                        'text': 'Зал №2',
                                        'sceneId': 'room-2',
                                    },
                                    {
                                        'pitch': -5,
                                        'yaw': 16,
                                        'type': 'scene',
                                        'text': 'Правая секция',
                                        'sceneId': 'room-main-right',
                                    },
                                    {
                                        'pitch': -5,
                                        'yaw': -39,
                                        'type': 'scene',
                                        'text': 'Левая секция',
                                        'sceneId': 'room-main-left',
                                    },
                                    {
                                        'pitch': 0,
                                        'yaw': -61,
                                        'type': 'scene',
                                        'text': 'Зал №3',
                                        'sceneId': 'room-3',
                                    },
                                    {
                                        'pitch': 0,
                                        'yaw': -76.7,
                                        'type': 'scene',
                                        'text': 'Выход на проспект Чумбарова-Лучинского, дом 41',
                                        'sceneId': 'street',
                                    },
                                ],
                            },
                            'room-main-right': {
                                'title': 'Правая секция – Центральный зал',
                                'haov': 180,
                                'vaov': 80,
                                'minYaw': -90,
                                'maxYaw': 90,
                                'minPitch': 0,
                                'maxPitch': 0,
                                'panorama': '/img/tour/room-main-right.jpg',
                                'hotSpots': [
                                    {
                                        'pitch': -20,
                                        'yaw': 0,
                                        'targetYaw': 56,
                                        'type': 'scene',
                                        'text': 'Центральный зал',
                                        'sceneId': 'room-main',
                                    },
                                    {
                                        'pitch': -30,
                                        'yaw': 37,
                                        'type': 'scene',
                                        'text': 'Левая секция – Центральный зал',
                                        'sceneId': 'room-main-left',
                                    },
                                ],
                            },
                            'room-main-left': {
                                'title': 'Левая секция – Центральный зал',
                                'haov': 180,
                                'vaov': 80,
                                'minYaw': -90,
                                'maxYaw': 90,
                                'minPitch': 0,
                                'maxPitch': 0,
                                'panorama': '/img/tour/room-main-left.jpg',
                                'hotSpots': [
                                    {
                                        'pitch': -25,
                                        'yaw': 15,
                                        'type': 'scene',
                                        'text': 'Центральный зал',
                                        'sceneId': 'room-main',
                                    },
                                    {
                                        'pitch': -25,
                                        'yaw': -41,
                                        'type': 'scene',
                                        'text': 'Правая секция – Центральный зал',
                                        'sceneId': 'room-main-right',
                                    },
                                ],
                            },
                            'room-2': {
                                'title': 'Зал №2',
                                'haov': 180,
                                'vaov': 55,
                                'maxHfov': 120,
                                'minYaw': -90,
                                'maxYaw': 90,
                                'minPitch': 0,
                                'maxPitch': 0,
                                'panorama': '/img/tour/room-2.jpg',
                                'hotSpots': [
                                    {
                                        'pitch': 0,
                                        'yaw': -7,
                                        'targetYaw': 56,
                                        'type': 'scene',
                                        'text': 'Центральный зал',
                                        'sceneId': 'room-main',
                                    },
                                ],
                            },
                            'room-3': {
                                'title': 'Зал №3',
                                'haov': 180,
                                'vaov': 65,
                                'minYaw': -90,
                                'maxYaw': 90,
                                'minPitch': 0,
                                'maxPitch': 0,
                                'panorama': '/img/tour/room-3.jpg',
                                'hotSpots': [
                                    {
                                        'pitch': 0,
                                        'yaw': 49,
                                        'type': 'scene',
                                        'text': 'Центральный зал',
                                        'sceneId': 'room-main',
                                    },
                                ],
                            },
                        },
                    });
                });
            </script>
        </div>

    </div>
@endsection
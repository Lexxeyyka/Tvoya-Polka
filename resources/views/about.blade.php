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
                </ul>
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/first_img.png') }}" alt="Твоя Полка" class="First_img img-fluid"/>
            </div>
            <div class="w-100"></div>

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

        </div>

    </div>
@endsection
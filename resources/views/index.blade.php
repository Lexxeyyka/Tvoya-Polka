@extends('layout')
@section('title', 'Главная')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center ">
                <img src="{{ asset('img/logo.png') }}" alt="Твоя Полка" class=" Info__logo img-fluid"/>
                <img src="{{ asset('img/polka.png') }}" alt="Твоя Полка" class=" polka-img img-fluid"/>
                <p class="Info__text">
                    В наших магазинах любой желающий <br>
                    может арендовать полку и продавать что <br>
                    угодно! Всего-то нужно оплатить аренду и <br>
                    принести товар на продажу! <br>
                </p>
            </div>
        </div>
    </div>
    <div id="NewsSection" class="container-fluid NewsSection">
        <div class="container">
            <div class="row">
                <div class="NewsSection__title col-12">
                    <h1 class="NewsSection__title__item">Последние новости</h1>
                </div>
                <div class="NewsBlock col-12">
                    <div class="text-center">
                        <img src="{{ asset('img/TEST.png') }}" alt="TEST" class=" TEST-img img-fluid"/>
                    </div>
                    <div class="NewsBlock__content">
                        <div class="NewsBlock__content__title">
                            <h2 class="NewsBlock__content__title__item">Title</h2>
                        </div>
                        <div class="NewsBlock__content__p">
                            <p class="NewsBlock__content__p__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eum explicabo, ipsam
                                magni, maiores molestias nisi, officia praesentium quisquam quod ratione veniam. Aperiam
                                beatae incidunt modi neque provident reprehenderit voluptates.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="NewsBlock col-12">
                    <div class="text-center">
                        <img src="{{ asset('img/TEST.png') }}" alt="TEST" class=" TEST-img img-fluid"/>
                    </div>
                    <div class="NewsBlock__content">
                        <div class="NewsBlock__content__title">
                            <h2 class="NewsBlock__content__title__item">Title</h2>
                        </div>
                        <div class="NewsBlock__content__p">
                            <p class="NewsBlock__content__p__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eum explicabo, ipsam
                                magni, maiores molestias nisi, officia praesentium quisquam quod ratione veniam. Aperiam
                                beatae incidunt modi neque provident reprehenderit voluptates.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="NewsBlock col-12">
                    <div class="text-center">
                        <img src="{{ asset('img/TEST.png') }}" alt="TEST" class=" TEST-img"/>
                    </div>
                    <div class="NewsBlock__content">
                        <div class="NewsBlock__content__title">
                            <h2 class="NewsBlock__content__title__item">Title</h2>
                        </div>
                        <div class="NewsBlock__content__p">
                            <p class="NewsBlock__content__p__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eum explicabo, ipsam
                                magni, maiores molestias nisi, officia praesentium quisquam quod ratione veniam. Aperiam
                                beatae incidunt modi neque provident reprehenderit voluptates.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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

                <div class="NewsSection__title col-lg-6 col-md-6">
                    <h2 class="NewsSection__title__item">Последние новости</h2>
                </div>
                <div class="col-lg-6 text-sm-left text-md-right col-md-6 mb-sm-4 mb-4">
                    <button type="button" class="btn_news_making"><i class="i_icon fas fa-plus"></i> Добавить новость</button>
                </div>
                <div class="col-12 news_layout">
                    <form enctype="multipart/form-data" method="post">
                        <input type="file" name="f" class="inputFile">
                    </form>
                    <input type="text" placeholder="Введите заголовок" class="inputTitleNews">
                    <textarea rows="5" placeholder="Введите текст..." name=""></textarea>
                    <button class="add_news">Опубликовать</button>
                </div>
                
                <div class="NewsBlock col-12 d-flex flex-column flex-md-row">
                    <div class="row">


                        <div class="col-md-6">
                            <div class="card NewsBlock__item ">
                                <img class="card-img-top" src="{{ asset('img/TEST.png') }}" alt="Card image cap">
                                <div class="card-body NewsBlock__content">
                                    <div class="NewsBlock__content__title">
                                        <h5 class="card-title NewsBlock__content__title__item">Новое поступление!</h5>
                                    </div>
                                    <div class="NewsBlock__content__p">
                                        <p class="card-text NewsBlock__content__p__text">На полочке №134 теперь располагаются вот такие замечательные обереги, успевайте купить!</p>
                                    </div>
                                    <hr>
                                    <div class="dateAdd d-flex justify-content-between">
                                        <span>Дата публикации: 19.06.2018</span>
                                        <span>17:03</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card NewsBlock__item ">
                                <img class="card-img-top" src="{{ asset('img/qweqwe.jpg') }}" alt="Card image cap">
                                <div class="card-body NewsBlock__content">
                                    <div class="NewsBlock__content__title">
                                        <h5 class="card-title NewsBlock__content__title__item">Новое поступление!</h5>
                                    </div>
                                    <div class="NewsBlock__content__p">
                                        <p class="card-text NewsBlock__content__p__text">На полочке №134 теперь располагаются вот такие замечательные обереги, успевайте купить!</p>
                                    </div>
                                    <hr>
                                    <div class="dateAdd d-flex justify-content-between">
                                        <span>Дата публикации: 19.06.2018</span>
                                        <span>17:03</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card NewsBlock__item ">
                                <img class="card-img-top" src="{{ asset('img/qweqwe.jpg') }}" alt="Card image cap">
                                <div class="card-body NewsBlock__content">
                                    <div class="NewsBlock__content__title">
                                        <h5 class="card-title NewsBlock__content__title__item">Новое поступление!</h5>
                                    </div>
                                    <div class="NewsBlock__content__p">
                                        <p class="card-text NewsBlock__content__p__text">На полочке №134 теперь располагаются вот такие замечательные обереги, успевайте купить!</p>
                                    </div>
                                    <hr>
                                    <div class="dateAdd d-flex justify-content-between align-self-end">
                                        <span>Дата публикации: 19.06.2018</span>
                                        <span>17:03</span>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <nav aria-label="Page navigation" class="pagination_block">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Пред.</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">След.</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
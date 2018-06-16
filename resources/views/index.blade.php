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
                    @if (Auth::check() && Auth::user()->is_admin)
                        <div class="col-lg-6 text-sm-left text-md-right col-md-6 mb-sm-4 mb-4">
                            <button type="button" class="btn_news_making"><i class="i_icon fas fa-plus"></i> Добавить
                                новость
                            </button>
                        </div>
                        <div class="col-12 news_layout">
                            <form action="{{ route('news.add') }}" enctype="multipart/form-data" method="post">
                                {{ csrf_field() }}
                                <input type="file" name="image" class="inputFile">
                                <input type="text" placeholder="Введите заголовок" class="inputTitleNews" name="title"
                                       value="{{ old('title') }}" required>
                                <textarea rows="5" placeholder="Введите текст..." name="text"
                                          required>{{ old('text') }}</textarea>
                                <button type="submit" class="add_news">Опубликовать</button>
                            </form>
                        </div>
                    @endif

                    <div class="NewsBlock col-12 d-flex flex-column flex-md-row">
                        <div class="row">

                            @foreach($posts as $post)
                                <div class="col-md-6">
                                    <div class="card NewsBlock__item ">
                                        @if (Auth::check() && Auth::user()->is_admin)
                                            <a href="{{ route('news.remove', $post->id_news) }}" onclick="return confirm('Вы уверены, что хотите удалить данную новость?');"><i class="deleteNews fas fa-times"></i></a>
                                        @endif
                                        <img class="card-img-top" src="{{ $post->image_url ? asset('uploads/news/' . $post->image_url) : asset('img/TEST.png') }}"
                                             alt="Card image cap">
                                        <div class="card-body NewsBlock__content">
                                            <div class="NewsBlock__content__title">
                                                <h5 class="card-title NewsBlock__content__title__item">{{ $post->title }}</h5>
                                            </div>
                                            <div class="NewsBlock__content__p">
                                                <p class="card-text NewsBlock__content__p__text">{{ $post->text }}</p>
                                            </div>
                                            <hr>
                                            <div class="dateAdd d-flex justify-content-between">
                                                <span>Дата публикации: {{ $post->datetime->format('d.m.Y') }}</span>
                                                <span>{{ $post->datetime->format('H:i') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
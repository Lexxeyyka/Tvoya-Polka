@extends('layout')
@section('title', $renter->full_name . ' - Профиль')
@section('content')
<div class="container profilePage">
    <div class="row">
        <div class="col-lg-3">
            <div class="UserBlock d-flex flex-column justify-content-between ">
                <div class="UserBlock__user">
                    <span class="UserBlock__user__fullName">{{ $renter->full_name }}</span>
                    <div class="w-100"></div>
                    <span class="UserBlock__user__numberContract">Договор №{{ $renter->number_contract }}</span>
                </div>
                <div class="UserBlock__money">
                    <span class="UserBlock__money__textPayOut">К выдаче: {{ $rent->profit }} <i class="UserBlock__money__icon fas fa-ruble-sign"></i></span>
                    <a href="#" class="UserBlock__btn">Получить</a>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="DateBlock">
                <span class="DateBlock__textEnding">Дата окончания действия договора:</span>
                <div class="w-100"></div>
                <span class="DateBlock__dateEnding">{{ $rent->date_of_rent->addDays($rent->count_of_days)->format('d.m.Y') }}</span>
                <a href="#" class="DateBlock__dateEnding__link">
                    <div class="DateBlock__dateEnding__link__btnExtend">Продлить</div>
                </a>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="ProductsBlock">
                <div class="ProductsBlock__header">
                    <div class="ProductsBlock__header__switch d-flex justify-content-around">
                        <div class="ProductsBlock__header__switch__item">
                            <a href="/profile/now" class="ProductsBlock__header__switch__item__link {{ $action == 'now' ? ' active' : '' }}">
                                <span>Товары на полке</span>
                            </a>
                        </div>
                        <div class="ProductsBlock__header__switch__item">
                            <a href="/profile/sold" class="ProductsBlock__header__switch__item__link {{ $action == 'sold' ? ' active' : '' }}"">
                                <span>Проданные товары</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="ProductsTable">
                    <table class="ProductsTable__table table table-bordered">
                        <thead class="ProductsTable__table__head thead">
                        <tr>
                            <th scope="col">Название товара</th>
                            <th scope="col">Количество</th>
                            <th scope="col">Цена за ед.</th>
                        </tr>
                        </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            @if ($action == 'now')
                                <td>{{ $product->amount - $product->amount_of_sold }}</td>
                            @else
                                <td>{{ $product->amount_of_sold }}</td>
                            @endif
                            <td>{{ $product->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
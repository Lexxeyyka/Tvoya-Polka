@extends('layout')
@section('title', 'Получение денежных средств')
@section('content')
    <div class="container">
        <div class="row">
            {{--<div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>
            <div class="col-1 test">1</div>--}}
            <div class="moneyTitle col-12">
                <h1>Получение Денежных средств</h1>
                <hr>
            </div>

            <div class="col-12 inputCountText amountMoney">
                <span>На вашем счёте: 800<i class="inputCountText__icon fas fa-ruble-sign"></i></span>

            </div>

            <div class=" col-12 d-flex flex-sm-row flex-column inputCountText">
                <span class="chooseAmount">Введите желаемую сумму:</span>
                <div>
                    <input type="number" step="1" id="contact" class="inputCount" placeholder="Сумма в рублях">
                    <i class="inputCountText__icon fas fa-ruble-sign"></i>
                </div>
            </div>

            <div class=" col-12 d-flex flex-sm-row flex-column inputCountText">
                <span>Укажите номер вашей карты:</span>
                <input type="text" id="contact" class="inputCount" placeholder="0000 0000 0000 0000">
            </div>

            <div class="col-12">
                <button type="submit" class="PassRecovering__buttonRecovering">Отправить запрос</button>
            </div>

            <div class="col-12  Myqueries__Title">
                <h2>Мои запросы</h2>
            </div>

            <div class="col-12">
                <div class=" Myqueries__Table ">
                    <table class="table table-bordered">
                        <thead class="Myqueries__table__head">
                            <tr>
                                <th scope="col">Дата и время</th>
                                <th scope="col">Сумма</th>
                                <th scope="col">Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20.06.2018 (17:28)</td>
                                <td>15 <i class="fas fa-ruble-sign"></i></td>
                                <td>Ожидание</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
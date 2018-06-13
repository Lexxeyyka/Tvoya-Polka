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
                <span>На вашем счёте: {{ $rent->profit  }}<i class="inputCountText__icon fas fa-ruble-sign"></i></span>

            </div>

            <form method="post">
                {{ csrf_field() }}
                <div class=" col-12 d-flex flex-sm-row flex-column inputCountText">
                    <span class="chooseAmount">Введите желаемую сумму:</span>
                    <div>
                        <input name="sum" type="number" step="1" max="{{ $rent->profit }}" id="contact"
                               class="inputCount"
                               placeholder="Сумма в рублях" required>
                        <i class="inputCountText__icon fas fa-ruble-sign"></i>
                    </div>
                </div>

                <div class=" col-12 d-flex flex-sm-row flex-column inputCountText">
                    <span>Укажите номер вашей карты:</span>
                    <input name="card" type="text" id="contact" class="inputCount" placeholder="0000 0000 0000 0000"
                           minlength="16"
                           maxlength="16" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="PassRecovering__buttonRecovering">Отправить запрос</button>
                </div>
            </form>

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
                        @foreach($requests as $request)
                            <tr>
                                <td>{{ $request->datetime->format('d.m.Y (H:i)') }}</td>
                                <td>{{ number_format($request->amount, 0, '', ' ') }} <i class="fas fa-ruble-sign"></i></td>
                                <td>{{ $request->status == '1' ? 'В обработке' : 'Выплачено' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
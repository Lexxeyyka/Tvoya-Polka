@extends('layout')
@section('title', ' - Восстановление пароля')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 PassRecovering">
                <span class="PassRecovering__title">Восстановление пароля</span>
                <hr>
                <div class="w-100"></div>
                <span class="PassRecovering__prompt">Введите номер телефона,
                    <div class="d-sm-none w-100"></div>
                    привязанный к вашему договору</span>
                <div class="d-flex flex-column align-items-start">
                    <div class="Form__login">
                        <input type="text" class="text-muted PassRecovering__inputPhone" placeholder="Ваш номер телефона">
                    </div>
                    <button type="submit" class="PassRecovering__buttonRecovering">Далее</button>
                </div>
            </div>
        </div>
</div>
@endsection
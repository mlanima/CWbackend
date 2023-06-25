@extends('layouts.app')

@section('content')
    <div class="content">
            <div class="title-banner">
                <div class="container">
                    <div class="title">
                        <h1>Мій профіль</h1>
                    </div>
                    <div class="pass">
                        Додому <spank class="current">&nbsp;/ Профіль</spank>
                    </div>
                </div>
            </div>
            <div class="login-frame">
                <div class="container">
                    <h1>
                        Вхід
                    </h1>
                    <div class="button-sign">
                        <a href="{{ asset('login') }}"> Увійти</a>
                    </div>
                    <div class="button-sign">
                        <a href="{{ asset('register') }}">Зареєструватися</a>
                    </div>
                </div>
            </div>

        </div>
@endsection

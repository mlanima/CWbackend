@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="title-banner">
            <div class="container">
                <div class="title">
                    <h1>Каталог</h1>
                </div>
                <div class="pass">
                    Додому
                    <spank class="current">&nbsp;/ Каталог</spank>
                </div>
            </div>
        </div>
        <div class="about-book-frame">
            <div class="container">
                <div class="book-title">
                    {{ $book->title }}
                </div>
                <div class="book-author">
                    {{ $book->author }}
                </div>
                <div class="about-book">
                    <div class="book-and-button">
                        <div class="img-container">
                            <img src="{{ asset('images/' . $book->image) }}">
                        </div>
                        <form action="{{ route('addToCart', ['bookId' => $book->id]) }}" method="POST" class="buy-button-form">
                            @csrf
                            <button type="submit" class="buy-button" style="border: none; padding: 0; margin: 0; cursor: pointer;">
                                <div class="buy-button">
                                    Додати до кошика
                                </div>
                            </button>
                        </form>
                    </div>
                    <div class="book-infos">
                        <div class="book-text">
                            Містичний, психологічний та філософський роман Джона Фаулза, що став його творчою
                            візитівкою. Роман посів 67 місце серед найкращих творів світової літератури в опитуванні
                            BBC «The Big Read».Утомившись від кохання непередбачуваної «дівчини-оксюморона» Алісон,
                            Ніколас Ерфе вирушить на живописний грецький острів Фраскос, аби стати єдиним англійцем
                            у закритій школі для хлопчиків. Але, балансуючи між містикою та містифікацією, він
                            братиме участь у жорстокому психологічному експерименті загадкового мага. Принаймні
                            спочатку так здаватиметься…
                        </div>
                        <div class="details">
                            <div class="detail">
                                <div class="detail-genre">
                                    Жанр:
                                </div>
                                <div class="book-genre">
                                    Психологічний роман
                                </div>
                            </div>
                            <div class="detail">
                                <div class="detail-release">
                                    Реліз:
                                </div>
                                <div class="book-realese">
                                    2023
                                </div>
                            </div>
                            <div class="detail">
                                <div class="detail-binder">
                                    Палітурка:
                                </div>
                                <div class="book-binder">
                                    Тверда
                                </div>
                            </div>
                        </div>
                        <div class="book-price-div">
                            <div class="book-price">
                                <spank>₴&nbsp;</spank>
                                <spank>370</spank>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

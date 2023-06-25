
@extends('layouts.app')
@section('content')
        <div class="content">
            <div class="start-banner">
                <div class="container">
                    <div class="banner-text">
                        <h1>Чшшш!</h1>
                        <h1>Ви у бібліотеці</h1>
                        <p>Коли йдеться про книжки - йдуть до нас.</p>
                    </div>
                    <div class="shop-button">
                        <a href="catalog.html">ДО ЧИТАННЯ</a>
                    </div>
                </div>
            </div>
            <div class="genres-banner">
                <div class="container">
                    <div class="genres-row">
                        @foreach($genres as $genre)
                            <a href="{{ route('catalog_genre', ['value' => $genre->id]) }}">
                                <div class="genre">
                                    <div class="img-container">
                                        <img src="{{ asset('images/' . $genre->image_path) }}">
                                    </div>
                                    <div class="genre-button">
                                        {{$genre->name}}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="chosen-books-banner">
                <div class="container">
                    <div class="chosen-books-hello">
                        <h1>
                            Вибрані книги
                        </h1>
                        <p>
                            Книги відбираються редакціюєю враховуючи оцінки користувачів.
                        </p>
                        <div class="top-buttons">
                            <div class="top-button">
                                Вибір редакції
                            </div>
                            <div class="top-button">
                                Вибір користувачів
                            </div>
                            <div class="top-button">
                                Бестселлери
                            </div>
                        </div>
                    </div>
                    <div class="chosen-books-row">
                        @foreach($topbooks as $book)
                            <a href="#">
                                <div class="book">
                                    <div class="img-container">
                                        <img src="{{ asset('images/' . $book->image) }}">
                                    </div>
                                    <div class="book-info">
                                        <h4>
                                            {{$book->title}}
                                        </h4>
                                        <h3>
                                            <spank>₴ </spank>{{$book->price}}
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="about-us-banner">
                <div class="container">
                    <div class="aboutus-title">
                        <h1>Про Нас</h1>
                    </div>
                    <div class="aboutus-text">
                        <p>
                            Ми молода ініцативна компанія, яка хоче ділитись з українцями якісною літературою, надаючи
                            відповідний серсвіс і підтримку. Ми є відкритими до будь-яких інтеракцій з нашими
                            користувачами і готові дістати бажану літературу для Вас усіма можливими способами,
                            використовуючи наш зв’язок з іноземними бібліотеками та книгарнями.

                            Відвайте нашу книгарню та відчуйте на власному досвіді світ книг, який ми пропонуємо
                        </p>
                    </div>
                </div>
            </div>
        </div>
@endsection

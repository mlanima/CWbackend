
@extends('layouts.app')
@section('content')

        <div class="content">
            <div class="title-banner">
                <div class="container">
                    <div class="title">
                        <h1>Каталог</h1>
                    </div>
                    <div class="pass">
                        Додому <spank class="current">&nbsp;/ Каталог</spank>
                    </div>
                </div>
            </div>
            <div class="catalog">
                <div class="container">
                    <div class="search-book">
                        <div class="search-container">Знайти книгу</div>
                    </div>
                    <div class="all-books">

                        @foreach($books as $book)
                            <a href="{{ asset( route('specialbook', ['id' => $book->id])) }}">
                                <div class="book">
                                    <div class="img-container">
                                        <img src="{{ asset('images/' . $book->image) }}">
                                    </div>
                                    <div class="book-info">
                                        <h4>
                                            {{ $book->title }}
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
        </div>

@endsection


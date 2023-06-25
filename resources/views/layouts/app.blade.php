<!DOCTYPE html>
<html lang="uk-UA">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta name="viewport" content="width=device-width">

    <title>Поличка</title>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="top-header">
            <div class="container">
                <div class="offer">
                    <img src="{{ asset('images/red_cart.svg') }}" width="30" height="30" class="cart" alt="">
                    <div>20% знижка на другу книжку</div>
                </div>
                <div class="links">
                    <ul>
                        @guest
                            <!-- Код кнопки увійти -->
                            <a href="{{ route('login') }}" style="font-weight:bold">УВІЙТИ</a>
                        @else
                            <!-- Код кнопки вийти -->
                            <a href="{{ route('logout') }}" style="font-weight:bold">ВИЙТИ</a>
                        @endguest

                        <li><a href="#">ЛОКАЦІЯ</a></li>
                        <li><a href="#">КОНТАКТИ</a></li>
                    </ul>
                    <div class="phone">
                        Телефон: +380123456789
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <a href="index.html" class="logo">
                    <div class="logo">
                        <img src="{{ asset('images/logo_icon.svg') }}">
                        <div>Поличка</div>
                    </div>
                </a>
                <div class="navigation">
                    <ul>
                        <li class="home-button"><a href="{{ route('main') }}">Додому</a></li>
                        <li><a href="{{ route('catalog') }}">Каталог</a></li>
                        <li><a href="#">Наш сервіс</a></li>
                    </ul>
                    <div class="icon-links">

                        <input type="checkbox" id="check">
                        <label for="check" class="checkbutton">
                            <i class="fa fa-bars"></i>
                        </label>

                        <img href="#" src="{{ asset('images/search.svg') }}">

                        <input type="checkbox" id="checkshop">
                        <label for="checkshop"><img src="{{ asset('images/shopping_bag.svg') }}"></label>
                        <div class="shopping-cart">
                            <div>
                                <div class="cart-start">
                                    <div class="cart-title">
                                        Кошик
                                        <div>
                                            <button class="myButton" id="myButton">Назад</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="undertitle-block">
                                    <div class="orders-number">
                                        <spank>0</spank>&nbsp;шт.
                                    </div>
                                    <form id="clear-cart-form" action="{{ route('clearCart') }}" method="POST">
                                        @csrf
                                        <div onclick="document.getElementById('clear-cart-form').submit()">
                                            Очистити
                                        </div>
                                    </form>

                                </div>
                                <div class="cart-positions">
                                    @if(Request::is('main'))
                                        @foreach($cartItems as $cartItem)
                                            <div class="cart-position">
                                                <div class="book-info-container">
                                                    <div class="pos-img-container">
                                                        <img src="{{ asset('images/'. $cartItem->book->image ) }}">
                                                    </div>
                                                    <div class="pos-info-container">
                                                        <div class="pos-info">
                                                            <div class='pos-title'>
                                                                {{ $cartItem->book->title }}
                                                            </div>
                                                            <div class="pos-author">
                                                                {{ $cartItem->book->author }}
                                                            </div>
                                                        </div>
                                                        <div class="pos-price">
                                                            ₴ {{ $cartItem->book->price }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pos-operating">
                                                    <div class="number-handling">
                                                        <img src="{{ asset('images/minus.svg') }}">
                                                        <div class="number">
                                                            1
                                                        </div>
                                                        <img src="{{ asset('images/plus.svg') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="order-details">
                                        <div class="total-frame">
                                            <div class="total-title">
                                                Всього
                                            </div>
                                            <div class="total">
                                                ₴&nbsp;<spank>0</spank>
                                            </div>
                                        </div>
                                        <div class="button-pay">
                                            До сплати
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-navigation">
                    <div class="container">
                        <ul>
                            <li class="home-button"><a href="index.html">Додому</a></li>
                            <li><a href="{{ route('catalog') }}">Каталог</a></li>
                            <li><a href="#">Наш сервіс</a></li>
                        </ul>
                    </div>
                </div>
                <script>
                    // Отримуємо посилання на кнопку і чекбокс
                    const myButton = document.getElementById("myButton");
                    const checkshop = document.getElementById("checkshop");

                    // Додаємо обробник подій до кнопки
                    myButton.addEventListener("click", function () {
                        // Зняття позначки (unchecked) з чекбокса
                        checkshop.checked = false;
                    });

                </script>
                <script>
                    var checkbox = document.getElementById('check');
                    var hiddenNavigation = document.querySelector('.hidden-navigation');

                    checkbox.addEventListener('change', function () {
                        if (checkbox.checked) {
                            hiddenNavigation.style.display = 'block';
                        } else {
                            hiddenNavigation.style.display = 'none';
                        }
                    });
                </script>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="main-footer">
            <div class="container">
                <div class="about-us">
                    <div class="footer-title">ПРО ПОЛИЧКУ</div>
                    <p>Відкритий портал книжок.
                        Ми віддані просуванню літератури як інструменту саморозвитку та пізнання. Кожна книжка
                        на
                        наших полицях має свою унікальну історію, яку ми раді ділитися з нашими клієнтами. Наша
                        команда експертів завжди готова надати рекомендації та взяти на себе важке завдання
                        підібрати твір, який відповідає вашим інтересам та бажанням.</p>
                    <div class="icon-contacts">
                        <a href="https://www.google.com/"><img src="{{ asset('images/instagram.svg') }}"></a>
                        <a href="https://www.google.com/"><img src="{{ asset('images/telegram.svg') }}"></a>
                        <a href="https://www.google.com/"><img src="{{ asset('images/facebook.svg') }}"></a>
                    </div>
                </div>
                <div class="adress">
                    <div class="footer-title">АДРЕСА</div>
                    <div class="icon-text">
                        <img src="{{ asset('images/location.svg') }}">
                        <p> Neuen Bäue 22, 35390 Gießen,
                            Germany, Hessen
                        </p>
                    </div>
                </div>
                <div class="contacts">
                    <div class="footer-title">КОНТАКТИ</div>
                    <div class="icon-text">
                        <img src="{{ asset('images/phone.svg') }}">
                        <p>+380123456789</p>
                    </div>
                    <div class="icon-text">
                        <img src="{{ asset('images/mail.svg') }}">
                        <p>danylokonovalenko@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <h3>All Rights Reserved. © 2023 ТМ “Поличка” Design By : Danylo Konovalenko</h3>
            </div>
        </div>
    </footer>
    <div class="pisya">

    </div>
    <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">
        <div class="lol"></div>
    </a>
</div>
<div class="please">

</div>
</body>

</html>

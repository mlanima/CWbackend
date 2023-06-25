<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index() {
        $book = Book::find(1);
        dump($book->title);
    }

    public function create () {
        $newbook = [
            'title' => 'Сто років самотності',
            'author' => 'Габріель Гарсія Маркес0',
            'genre' => 'Психолонічний роман',
            'release' => 2023,
            'hardcover' => 1
        ];

        Book::create($newbook);
        dd('created');
    }

    public function delete() {
        $book = Book::find(1);
        $book->delete();
        dd('deleted');
    }

    public function restore() {
        $book = Book::withTrashed()->find(1);
        $book->restore();
        dd('restored');
    }

    public function specialbook($book_id) {
        $book = Book::find($book_id);

        return view('book', ['book' => $book]);
    }

    public function fillbooks() {
        $books = [
            [
                'Гаррі Поттер і Келих Вогню', 'Джоан Роулінг', 6, 2017,
            ],

        ];

        $books = [
            ['title' => 'Гаррі Поттер і Келих Вогню', 'image' => 'book-harrypotter.jpg', 'author' => 'Джоан Роулінг', 'genre_id' => 6, 'year' => 2017, 'price' => 250],
            ['title' => 'Шерлок Холмс Том 2', 'image' => 'book-sherlok.jpg', 'author' => 'Артур Конан Дойль', 'genre_id' => 2, 'year' => 2015, 'price' => 220],
            ['title' => 'Фактор черчиля. Людина яка змінила історію', 'image' => 'book-cherchill.jpg', 'author' => 'Черчиль', 'genre_id' => 1, 'year' => 2019, 'price' => 370 ],
            ['title' => 'Федько-Халамидник', 'image' => 'book-fedir.jpg', 'author' => 'Винниченко', 'genre_id' => 6, 'year' => 2016, 'price' => 250],
            ['title' => 'Маг', 'image' => 'book-mag.jpg', 'author' => 'Джон Фаулз', 'genre_id' => 6, 'year' => 2017, 'price' => 370],
            ['title' => 'Воццук & Воццекургія', 'image' => 'book-vozzek.jpg', 'author' => 'Іздрик', 'genre_id' => 1, 'year' => 2012, 'price' => 120 ],
            ['title' => 'Сто Років Самотності','image' => 'book-hundredyears.jpg',  'author' => 'Маркес', 'genre_id' => 2, 'year' => 2022, 'price' => 250 ],
            ['title' => 'Історія Одного Кохання', 'image' => 'book-lovestory.jpg', 'author' => 'Ерік Сігал', 'genre_id' => 4, 'year' => 2017, 'price' => 370 ],
            ['title' => 'One Piece Volume 1', 'image' => 'book-onepiece.jpg', 'author' => 'Мангака', 'genre_id' => 5, 'year' => 2009, 'price' => 250],

        ];

        foreach ($books as $bookData) {

//            Book::create(
//                [
//                    'title' => $bookData['title'],
//                    'author' => $bookData['author'],
//                    'genre_id' => $bookData['image'],
//                    'image' => $bookData['image'],
//                    'release' => $bookData['year']
//                ]
//            );

            $book = new Book();
            $book->title = $bookData['title'];
            $book->author = $bookData['author'];
            $book->genre_id = $bookData['genre_id'];
            $book->image = $bookData['image'];
            $book->release = $bookData['year'];
            $book->price = $bookData['price'];
            $book->save();

        }
        dd('books filled');
    }

}

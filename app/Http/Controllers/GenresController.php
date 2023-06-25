<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function ined() {
        $book = Book::find(1);
        dump($book->title);
    }

    public function fillgenres () {
        $names = ['Інтелектуальна література', 'Класика',
            'Психолонічна література', 'Романтична література',
            'Манга', 'Пригодницька література'];
        $images = ['book-vozzek.jpg', 'book-hundredyears.jpg', 'book-mag.jpg',
            'book-lovestory.jpg', 'book-onepiece.jpg', 'book-harrypotter.jpg'];

        $combined = $combinedArray = array_combine($names, $images);

        foreach ($combined as $name => $image) {
            Genre::create(
                [
                    'name' => $name,
                    'image_path' => $image
                ]
            );
        }
        dd('created');
    }

}

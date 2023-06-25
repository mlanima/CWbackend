<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function catalog() {

        $books = Book::all();

        return view('catalog', compact('books'));
    }
    public function catalog_genre($genre_id) {

        $books = Book::where('genre_id', $genre_id)->get();

        return view('catalog', compact('books'));
    }


}

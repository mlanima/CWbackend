<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {

        $genres = Genre::all();
        $topbooks = Book::take(4)->get();


        if (Auth::check()) {
            $user = Auth::user();
            $cartItems = $user->cartItems;
            // решта коду
        } else {
            $cartItems = [];
        }



        return view('main', compact('genres', 'topbooks', 'cartItems'));
    }

    public function logreg() {
        return view('logreg');
    }


}

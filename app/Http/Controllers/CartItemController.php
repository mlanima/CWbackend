<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    public function addToCart(Request $request, $bookId)
    {
        // Отримання об'єкта користувача
        $user = Auth::user();

        if (Auth::check()) {
            $user = Auth::user();
            // решта коду
        } else {
            return view('login');
        }


        // Отримання об'єкта книжки
        $book = Book::findOrFail($bookId);

        // Додавання нового елемента кошика
        $cartItem = new CartItem();
        $cartItem->user_id = $user->id;
        $cartItem->book_id = $book->id;
        $cartItem->quantity = 1;
        $cartItem->save();

        return redirect()->back()->with('success', 'Книжка успішно додана в кошик.');
    }

    public function clearCart()
    {
        if (Auth::check()) {
            $user = Auth::user();
            // решта коду


            // Видалення всіх елементів кошика для користувача
            CartItem::where('user_id', $user->id)->delete();

            return redirect()->back()->with('success', 'Кошик успішно очищено.');
        }
        else {
            return view('login');
        }
    }
}

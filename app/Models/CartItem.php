<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Зв'язок багато-один: багато елементів кошика можуть належати одній книзі
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}

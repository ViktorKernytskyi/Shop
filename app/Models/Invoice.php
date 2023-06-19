<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = array(
        'user_id',
        'total',
        'status',
        'comment'

    );

    const PENDING = 'pending';
    const DONE = 'done';

    const STATUSES = [
        self::PENDING, self::DONE,
    ];

    protected $guarded = [];

    public function product()
    {
        /**
         * Связь «элемент принадлежит» таблицы `Invoice` с таблицей `products`
         */
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

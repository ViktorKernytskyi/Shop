<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
     /**
      * Связь «один ко многим» таблицы `orders` с таблицей `invoice`
      */
        public function orders()
        {
            return $this->hasMany(Invoice::class);
            //use HasFactory;
        }
}

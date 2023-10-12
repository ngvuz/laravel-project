<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

    protected $filltable = [
        'id_order',
        'order_date',
        'id_customer',
        'notes',
        'name_reciver',
        'address',
        'email',
        'phone'
    ];

    // JOIN 1-n
    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'id_order', 'id');
    }
}

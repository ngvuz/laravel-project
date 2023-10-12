<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'customer';
    protected $filltable = [
        'name',
        'email',
        'password',
        'address',
        'phone', 
    ];

    // JOIN 1 - 1

    // JOIN 1-n
    // JOIN 1-n
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_customer', 'id');
    }

    //Thêm localScope
    public function scopeSearch($query)
    {
        if($key = request()->key) {
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;
    }
}

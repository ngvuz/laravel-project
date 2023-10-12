<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $table = 'customer';
    protected $filltable = [
        'name',
        'email',
        'password',
        'address',
        'phone', 
    ];

    // JOIN 1 - 1

    // // JOIN 1-n
    // public function orders()
    // {
    //     return $this->hasMany(Order::class, 'id_customer', 'id');
    // }

    //Thêm localScope
    // public function scopeSearch($query)
    // {
    //     if($key = request()->key) {
    //         $query = $query->where('name', 'like', '%'.$key.'%');
    //     }
    //     return $query;
    // }
    protected $hidden = [
        'password',
        'remember_reset_tokens',
    ];
    
    public function getAuthPassword() {
        return bcrypt($this->password);
    }
}

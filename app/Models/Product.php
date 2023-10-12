<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'product';
    protected $filltable = [
        'name',
        'image',
        'description',
        'price',
        'quantity',
        'contents', 
        'id_category',
        'is_active'
    ];

    // JOIN 1 - 1
    public function cate()
    {
        return $this->hasOne(Category::class, 'id', 'id_category');
    }

    // JOIN 1-n
    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'id_product', 'id');
    }

    //Thêm localScope
    public function scopeSearch($query)
    {
        if($key = request()->key) {
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;
    }

    protected $hidden = ['notes', 'meta_title', 'meta_keyword', 'meta_description', 'created_by', 'updated_by', 'is_delete'];
}

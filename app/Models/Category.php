<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $fillable = ['name', 'is_active'];

    public function product()
    {
        return $this->hasMany(Product::class, 'id_category', 'id');
    }

    //Thêm localScope
    public function scopeSearch($query)
    {
        if($key = request()->key) {
            $query = $query->where('name', 'like', '%'.$key.'%');
        }
        return $query;
    }
    //globalScope

    protected $hidden = ['meta_title', 'meta_keyword', 'meta_description', 'create_by', 'update_by', 'is_delete'];
}

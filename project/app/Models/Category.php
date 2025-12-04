<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id', 'name','image','status'];
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
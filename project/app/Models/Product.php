<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'idpro';
    protected $foreignKey = 'category_id';
    protected $fillable = ['namepro','imagepro','statuspro','descriptionpro','price','category_id'];
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
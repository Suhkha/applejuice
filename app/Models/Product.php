<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'name',
        'image',
        'favorite',
        'comments',
    ];

    public function category(){
        return $this->hasOne('App\Models\CategoryProduct', 'id', 'category_id');
    }
}

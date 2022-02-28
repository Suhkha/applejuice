<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomRecipe extends Model
{
    protected $table = "custom_recipes";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'status',
        'comments'
    ];

    public function recipe(){
        return $this->hasMany('App\Models\Recipe', 'id', 'recipe_id');
    }
}

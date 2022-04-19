<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackgroundHistory extends Model
{
    protected $table = "background_history";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'background_id',
        'comments',
    ];

    public function background(){
        return $this->hasMany('App\Models\Background', 'id', 'background_id');
    }

    public function normal_background() {
        return $this->background()->where('type','!=', 2);
    }

    public function hereditary_background() {
        return $this->background()->where('type','=', 2);
    }
    
}
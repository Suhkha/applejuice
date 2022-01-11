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
        return $this->hasMany('App\Models\Background', 'id');
    }

    public function medicine(){
        return $this->hasMany('App\Models\Medicine', 'id');
    }

    
}
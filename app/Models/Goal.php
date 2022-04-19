<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = "goals";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'goal_weight',
        'favorite_aliments',
        'main_goal',
        'additional_method',
        'comments'
    ];

    public function goal(){
        return $this->belongsTo('App\Models\UserDetails', 'id');
    }
}

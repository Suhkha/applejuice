<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HereditaryFamilyHistory extends Model
{
    protected $table = "hereditary_family_history";

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

    public function hereditary(){
        return $this->hasMany('App\Models\Background', 'id', 'background_id');
    }
}

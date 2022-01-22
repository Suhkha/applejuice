<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = "users_details";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'second_last_name',
        'age',
        'birthday',
        'religion',
        'job_position',
        'level_education'
    ];

    public function agenda(){
        return $this->hasOne('App\Models\Agenda', 'user_id', 'user_id');
    }
}

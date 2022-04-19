<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GynecologicalHistory extends Model
{
    protected $table = "gynecological_history";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'menarche',
        'menarche_comments',
        'pregnacies',
        'pregnacies_comments',
        'abortion',
        'abortion_comments',
        'menstruation',
        'menstruation_comments',
        'contraceptive_method',
        'contraceptive_method_comments',
        'medicines'
    ];


    public function gynecological(){
        return $this->belongsTo('App\Models\UserDetails', 'id');
    }
}

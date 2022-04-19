<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    protected $table = "facts";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'weight',
        'average_fat',
        'muscle',
        'metabolic_age',
        'waist',
        'thigh',
        'hips',
        'biceps',
    ];
}

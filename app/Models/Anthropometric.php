<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anthropometric extends Model
{
    protected $table = "anthropometric";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'size',
        'weight',
        'average_fat',
        'muscle_mass_kilo',
        'muscle_quality',
        'bone_mass',
        'visceral',
        'metabolic_age',
        'waist',
        'thigh',
        'hips',
        'biceps'
    ];
}

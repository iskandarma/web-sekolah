<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'school_name',
        'slogan',
        'logo',
        'favicon',
        'hero_image',
        'address',
        'phone',
        'email',
        'maps',
        'facebook',
        'instagram',
        'youtube'
    ];
}

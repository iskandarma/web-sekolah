<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'image_alt',
        'published_at',
        'is_published',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

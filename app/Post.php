<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    'published',
    'title',
    'slug',
    'author',
    'excerpt',
    'body',
    'img'
];
}

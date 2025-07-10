<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['title', 'body', 'author', 'published']; // fields that can be mass assigned
    protected $guarded = ['id']; // fields that cannot be mass assigned
}

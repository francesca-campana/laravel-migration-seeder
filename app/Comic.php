<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
      'title',
      'author',
      'illustrator',
      'genre',
      'pages',
      'color',
      'description',
    ];
}

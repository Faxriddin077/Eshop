<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['header','texts','image_path','watched','like','dislike'];
}

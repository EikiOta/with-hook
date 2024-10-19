<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';
    protected $fillable = ['word', 'meaning', 'hook'];
    protected $dates = ['created_at', 'updated_at'];
}

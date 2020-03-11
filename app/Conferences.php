<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferences extends Model
{
    //
    protected $fillable = ['name'];
    protected $table = 'conferences';
}

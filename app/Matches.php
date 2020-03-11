<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    //
    protected $fillable = ['date','hours','team_1','team_2','highlight'];
    protected $table = 'matches';
}

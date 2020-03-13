<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //
    protected $fillable = ['banner_1','banner_2','banner_3','banner_4','banner_5'];
    protected $table = 'home';

    public function questions_asigned()
    {
        return $this->hasMany(Questions::class,'home_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //
    protected $table = 'questions';
    protected $fillable = ['home_id','question','answer','logo'];

    public function inmueble()
    {
        return $this->belongsTo(Home::class,'home_id');
    }

}

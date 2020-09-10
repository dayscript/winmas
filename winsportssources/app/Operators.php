<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operators extends Model
{
    //
    protected $table = 'operators';
    protected $fillable = ['home_id','link','phone_link','gtmOutbound','gtmProvider','gtmDevice','gtmDeviceMobile','logo','status'];

    public function inmueble()
    {
        return $this->belongsTo(Home::class,'home_id');
    }

}

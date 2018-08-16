<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunde extends Model
{
    

    public function opgaver()
    {
        return $this->hasMany('App\Opgave');
    }


}

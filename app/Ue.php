<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Moyennes;

class Ue extends Model
{
    //
    protected  $table = 'ue';
    public function moyennes(){
        return $this->hasMany("App\Moyennes","IDUE");

    }
}
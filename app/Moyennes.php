<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ue;

class Moyennes extends Model
{
    //
    protected  $table = 'moyennes';
    public function ue(){
        return $this->belongsTo("Ue", 'IDUE');
    }
}

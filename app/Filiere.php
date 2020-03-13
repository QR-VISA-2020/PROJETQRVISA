<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected  $table = 'filiere';
    protected  $primaryKey = 'IDFILIERE';
    

    public function classes(){
        return $this->hasMany("App\Classe","IDFILIERE");
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classe;

class Inscrit extends Model
{
    protected  $table = 'inscrit';
    protected  $primaryKey = 'IDCLASSE';
    public  $incrementing = false;
    
    public function classe(){
        return $this->belongsTo("Classe", 'IDCLASSE');
    }
}

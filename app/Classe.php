<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected  $table = 'classe';
    protected  $primaryKey = 'IDCLASSE';
    public  $incrementing = false;

    public function inscrits(){
        return $this->hasMany("App\Inscrit","IDCLASSE");
    }
    public function filiere(){
        return $this->belongsTo("App\Filiere", 'IDFILIERE');
    }
}

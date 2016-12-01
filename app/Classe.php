<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = 't_classe';

    protected $fillable = [
      'classe', 'created_at', 'updated_at'
    ];

    public function user(){
      return $this->hasMany('App\User','fk_classe');
    }
}

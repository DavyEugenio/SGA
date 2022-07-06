<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adocao extends Model {

    protected $fillable = [
        'datatsolicitacao', 'datatapuracao', 'status', 'tutor_id', 'animal_id', 'funcionario_id',
    ];
    
    public function Animal() {
        return $this->hasOne('App\Models\Animal', 'id', 'animal_id');
    }
    
    public function Funcionario() {
        return $this->belongsTo('App\Models\User', 'funcionario_id');
    }
    
    public function Tutor() {
        return $this->belongsTo('App\Models\User', 'tutor_id');
    }
}

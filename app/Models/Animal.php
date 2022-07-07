<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['especie', 'raca', 'nome', 'statusadocao', 'estadosaude', 'necessidadeespecial', 'datanascimento', 'datarecebimento'];
    
    public function Adocoes() {
        return $this->hasMany('App\Models\Adocao', 'animal_id', 'id');
    }
    
    public function Adotar($status) {
        $this->statusadocao = $status;
        $this->update();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['especie', 'raca', 'nome', 'statusadocao', 'estadosaude', 'necessidadeespecial', 'datanascimento', 'datarecebimento'];
    
    public function Adocoes() {
        return $this->belongsToMany('App\Adocao');
    }
    
    public function Adotar($status) {
        $this->statusadocao = $status;
        $this->update();
    }
}

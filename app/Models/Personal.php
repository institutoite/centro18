<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personals';
    protected $guarded=[];

    /**
     * Relación uno a muchos con el modelo Pago.
     */
    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

public function getSalario()
{
    return $this->salario; // Cambia esto según lo que quieras mostrar
}
}

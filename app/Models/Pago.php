<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $guarded = [];

    /**
     * Relación de pertenencia con el modelo Personal.
     */
    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}

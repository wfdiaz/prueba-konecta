<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_producto','referencia','precio','peso','categoria','stock','id_producto'];
}

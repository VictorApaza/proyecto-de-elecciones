<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeUsuario extends Model
{
    use HasFactory;
    protected $table = "tipousuario";
    protected $primaryKey = "IDTIPOUS";
    protected $fillable = [
        'NOMBRETIPOUS',
    ];
}


	

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frente extends Model
{
    use HasFactory;
    protected $table = "frente";
    protected $primaryKey = "IDFRENTE";
    protected $fillable = [
        'IDCARRERA',
        'IDFACUL',
        'NOMBREFRENT',
    ];
}
				


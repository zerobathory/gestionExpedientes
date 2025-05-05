<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstatusExpedientes extends Model
{

    use HasFactory;

    protected $primaryKey = 'idestatus_expediente';

    protected $fillable = [
        'nombre_estatus'
    ];
}

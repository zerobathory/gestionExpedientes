<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class EstatusExpedientes
 * 
 * Representa la tabla de datos de estatus de los expedientes.
 * 
 * @namespace App\Models
 * @property string $nombre_estatus Nombre del estatus.
 * 
 * @author Uriel Castillo
 */

class EstatusExpedientes extends Model
{

    use HasFactory;

    protected $primaryKey = 'idestatus_expediente';

    protected $fillable = [
        'nombre_estatus'
    ];
}

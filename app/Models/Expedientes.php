<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Expedientes
 * 
 * Representa la tabla de datos de los expedientes a gestionar.
 * 
 * @namespace App\Models
 * @property int $numero_expediente identificador único del número de expdiente para el usuario.
 * @property string $asunto Nombre que el usuario le da al expediente.
 * @property string $fecha_inicio la fecha con la que fue creado el expediente.
 * @property int $id_estatus ID que corresponde a la tabla de estatus.
 * @property string $id_usuario_registra id del usuario que creó el expediente.
 * 
 * @author Uriel Castillo
 */

class Expedientes extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'idexpedientes';

    protected $fillable = [
        'numero_expediente',
        'asunto',
        'fecha_inicio',
        'id_estatus',
        'id_usuario_registra'
    ];

    /**
   * Método que se encarga de hacer la relación uno a uno con la tabla de usuario para hace coincidir cuál fue el usuario que creó el expediente
   * 
   * @return Illuminate\Database\Eloquent\Relations\HasOne Retorna colección con el registro del usuario que lo generó.
   * 
   * 
   * 
   * @author Uriel Castillo
   */

    public function usuarioRegistra(): HasOne

    {

        return $this->hasOne(User::class,'id','id_usuario_registra');

    }

     /**
   * Método que se encarga de hacer la relación uno a uno con la tabla de estatus para saber el nombre del mismo
   * 
   * @return Illuminate\Database\Eloquent\Relations\HasOne Retorna colección con el estatus.
   * 
   * 
   * 
   * @author Uriel Castillo
   */

    public function estatus(): HasOne

    {

        return $this->hasOne(EstatusExpedientes::class,'idestatus_expedientes','id_estatus');

    }
}

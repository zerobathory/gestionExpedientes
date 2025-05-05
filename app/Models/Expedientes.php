<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function usuarioRegistra(): HasOne

    {

        return $this->hasOne(User::class,'id','id_usuario_registra');

    }

    public function estatus(): HasOne

    {

        return $this->hasOne(EstatusExpedientes::class,'idestatus_expedientes','id_estatus');

    }
}

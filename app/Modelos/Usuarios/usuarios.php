<?php
namespace ProximaCentaury\Modelos\Usuarios;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{

    //
    protected $searchableColumns = [
        'id',
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'nickName',
        'pasword',
        'eMail',
        'estatus',
        'categoria',
        'ranking',
        'cveActivacion',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'usuarios';

    protected $fillable = [
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'nickName',
        'pasword',
        'eMail',
        'estatus',
        'categoria',
        'ranking',
        'cveActivacion',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';
}

<?php
namespace ProximaCentaury\Modelos\Usuarios;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{

    //
    protected $searchableColumns = [
        'user_id',
        'eMail',
        'comentario',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'contactos';

    protected $fillable = [
        'user_id',
        'eMail',
        'comentario'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';
}

<?php
namespace ProximaCentaury\Modelos\Usuarios;

use Illuminate\Database\Eloquent\Model;

class newsLetter extends Model
{

    //
    protected $table = 'news_letters';

    protected $searchableColumns = [
        'id',
        'eMail',
        'creado_por',
        'modificado_por'
    ];

    protected $fillable = [
        'eMail',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';
}

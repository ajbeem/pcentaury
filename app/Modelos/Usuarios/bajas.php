<?php
namespace ProximaCentaury\Modelos\Usuarios;

use Illuminate\Database\Eloquent\Model;

class bajas extends Model
{

    //
    protected $searchableColumns = [
        'user_id',
        'comentarioFinal',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'bajas';

    protected $fillable = [
        'user_id',
        'comentarioFinal',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function bajaUsr()
    {
        return $this->belongsTo('pcentaury\usuarios');
    }
}

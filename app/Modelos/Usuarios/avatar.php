<?php
namespace ProximaCentaury\Modelos\Usuarios;

use Illuminate\Database\Eloquent\Model;

class avatar extends Model
{

    protected $table = 'avatars';

    protected $searchableColumns = [
        'id',
        'avatarPath',
        'avatarComent',
        'avatarUserId',
        'creado_por',
        'modificado_por'
    ];

    protected $fillable = [
        'avatarPath',
        'avatarComent',
        'avatarUserId',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function usuarioAvatar()
    {
        return $this->belongsTo('pcentaury\usuarios', 'avatarUserId', 'id');
    }
}

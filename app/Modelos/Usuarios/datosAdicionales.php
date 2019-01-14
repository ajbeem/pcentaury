<?php
namespace ProximaCentaury\Modelos\Usuarios;

use Illuminate\Database\Eloquent\Model;

class datosAdicionales extends Model
{

    //
    protected $searchableColumns = [
        'user_id',
        'RFC',
        'CURP',
        'codigoPostal',
        'estado',
        'alcaldiaMpo',
        'colonia',
        'calle',
        'numeroExterior',
        'numeroInterior',
        'telefonoLocal',
        'telefonoMovil',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'datos_adicionales';

    protected $fillable = [
        'id',
        'user_id',
        'RFC',
        'CURP',
        'codigoPostal',
        'estado',
        'alcaldiaMpo',
        'colonia',
        'calle',
        'numeroExterior',
        'numeroInterior',
        'telefonoLocal',
        'telefonoMovil',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function datosAdicUsuario()
    {
        return $this->belongsTo('pcentaury\usuarios');
    }
}

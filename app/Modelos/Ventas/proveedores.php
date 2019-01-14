<?php
namespace ProximaCentaury\Modelos\Ventas;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{

    //
    protected $searchableColumns = [
        'id',
        'razonSocial',
        'RFC',
        'CURP',
        'ranking',
        'telefonoLocal',
        'telefonoMovil',
        'eMail',
        'webPage',
        'codigoPostal',
        'estado',
        'alcaldiaMpo',
        'colonia',
        'calle',
        'numeroExterior',
        'numeroInterior',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'proveedores';

    protected $fillable = [
        'id',
        'razonSocial',
        'RFC',
        'CURP',
        'ranking',
        'telefonoLocal',
        'telefonoMovil',
        'eMail',
        'webPage',
        'codigoPostal',
        'estado',
        'alcaldiaMpo',
        'colonia',
        'calle',
        'numeroExterior',
        'numeroInterior',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function proveedorArticulo()
    {
        return $this->belongsTo('ProximaCentaury\Modelos\Ventas\articulo');
    }
}

<?php
namespace ProximaCentaury\Modelos\Ventas;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{

    //
    protected $searchableColumns = [
        'concepto',
        'tipo',
        'descripcion',
        'costoUnitario',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'servicios';

    protected $fillable = [
        'concepto',
        'tipo',
        'descripcion',
        'costoUnitario',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';
}

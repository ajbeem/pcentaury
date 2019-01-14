<?php
namespace ProximaCentaury\Modelos\Ventas;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{

    //
    protected $searchableColumns = [
        'concepto',
        'tipo',
        'descripcion',
        'presentacion',
        'costoCompra',
        'costoUnitario',
        'idProveedor',
        'stock',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'articulos';

    protected $fillable = [
        'concepto',
        'tipo',
        'descripcion',
        'presentacion',
        'costoCompra',
        'costoUnitario',
        'idProveedor',
        'stock',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';
}

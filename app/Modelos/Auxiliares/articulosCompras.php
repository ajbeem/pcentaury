<?php
namespace ProximaCentaury\Modelos\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class articulosCompras extends Model
{

    //
    protected $table = 'articulos_compras';

    protected $searchableColumns = [
        'id',
        'idCompra',
        'idArticulo',
        'cantidad',
        'concepto',
        'tipo',
        'descripcion',
        'presentacion',
        'costoUnitario',
        'stock',
        'subtotal',
        'creado_por',
        'modificado_por'
    ];

    protected $fillable = [
        'idCompra',
        'idArticulo',
        'cantidad',
        'concepto',
        'tipo',
        'descripcion',
        'presentacion',
        'costoUnitario',
        'stock',
        'subtotal',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function compraDeArticulos()
    {
        return $this->belongsTo(' ProximaCentaury\Modelos\Administracion\compras');
    }
}

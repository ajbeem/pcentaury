<?php
namespace ProximaCentaury\Modelos\Administracion;

use Illuminate\Database\Eloquent\Model;
use ProximaCentaury\Modelos\Auxiliares\articulosCompras;

class compras extends Model
{

    //
    protected $table = 'compras';

    protected $searchableColumns = [
        'id',
        'subtotal',
        'total',
        'destino',
        'estatus',
        'creado_por',
        'modificado_por'
    ];

    protected $fillable = [
        'subtotal',
        'total',
        'destino',
        'estatus',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function articulos_comprados()
    {
        return $this->hasMany(articulosCompras::class, 'id', 'idCompra')->select(array(
            'idPedido',
            'idArticulo',
            'cantidad',
            'concepto',
            'tipo',
            'descripcion',
            'presentacion', 'costoUnitario', 'stock', 'subtotal'));
    }
    
}

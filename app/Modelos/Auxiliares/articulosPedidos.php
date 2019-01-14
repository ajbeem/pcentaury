<?php
namespace ProximaCentaury\Modelos\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class articulosPedidos extends Model
{

    //
    protected $table = 'articulos_pedidos';

    protected $searchableColumns = [
        'id',
        'idPedido',
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
        'idPedido',
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

    public function pedidoArticulos()
    {
        return $this->belongsTo('ProximaCentaury\Modelos\Ventas\pedidos');
    }
}

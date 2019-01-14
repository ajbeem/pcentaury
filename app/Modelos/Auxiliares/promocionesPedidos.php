<?php
namespace ProximaCentaury\Modelos\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class promocionesPedidos extends Model
{

    //
    protected $searchableColumns = [
        'id',
        'idPedido',
        'idPromocion',
        'cantidad',
        'concepto',
        'tipo',
        'descripcion',
        'costoUnitario',
        'subtotal',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'promociones_pedidos';

    protected $fillable = [
        'idPedido',
        'idPromocion',
        'cantidad',
        'concepto',
        'tipo',
        'descripcion',
        'costoUnitario',
        'subtotal',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function promociones_para_pedido()
    {
        return $this->belongsTo(' ProximaCentaury\Modelos\Ventas\pedidos');
    }
}

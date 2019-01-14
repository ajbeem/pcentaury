<?php
namespace ProximaCentaury\Modelos\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class serviciosPedidos extends Model
{

    //
    protected $table = 'servicios_pedidos';

    protected $searchableColumns = [
        'id',
        'idPedido',
        'idServicio',
        'cantidad',
        'concepto',
        'tipo',
        'descripcion',
        'costoUnitario',
        'subtotal',
        'creado_por',
        'modificado_por'
    ];

    protected $fillable = [
        'idPedido',
        'idServicio',
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

    public function pedidoServicios()
    {
        return $this->belongsTo(' ProximaCentaury\Modelos\Ventas\pedidos');
    }
}

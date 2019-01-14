<?php
namespace ProximaCentaury\Modelos\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class serviciosAdicionalesPedidos extends Model
{

    //
    protected $searchableColumns = [
        'id',
        'concepto',
        'tipo',
        'descripcion',
        'costoUnitario',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'servicio_adicionals';

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

    public function servicioAdicionalPedido()
    {
        return $this->belongsTo('ProximaCentaury\Modelos\Ventas\pedido');
    }
}

<?php
namespace ProximaCentaury\Modelos\Ventas;

use Illuminate\Database\Eloquent\Model;

class promociones extends Model
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

    protected $table = 'promociones';

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

    public function promocionPedido()
    {
        return $this->belongsTo(' ProximaCentaury\Modelos\Ventas\pedido');
    }
}

<?php
namespace ProximaCentaury\Modelos\Ventas;

use Illuminate\Database\Eloquent\Model;

class serviciosAdicionales extends Model
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

    protected $table = 'servicios_adicionales';

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

<?php
namespace ProximaCentaury\Modelos\Ventas;

use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{

    //
    protected $searchableColumns = [
        'user_id',
        'subtotal',
        'impuestos',
        'total',
        'observaciones',
        'creado_por',
        'modificado_por'
    ];

    protected $table = 'pedidos';

    protected $fillable = [
        'user_id',
        'subtotal',
        'impuestos',
        'total',
        'observaciones',
        'creado_por',
        'modificado_por'
    ];

    const CREATED_AT = 'fecha_creacion';

    const UPDATED_AT = 'fecha_modificacion';

    public function pedidoPusr()
    {
        return $this->belongsTo('ProximaCentaury\Modelos\usuarios');
    }
}

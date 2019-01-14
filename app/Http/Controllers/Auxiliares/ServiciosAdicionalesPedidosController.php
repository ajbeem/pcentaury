<?php
namespace ProximaCentaury\Http\Controllers\Auxiliares;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Auxiliares\serviciosAdicionalesPedidos;
use Illuminate\Http\Request;

class ServiciosAdicionalesPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde ServiciosAdicionalesPedidosController";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \ProximaCentaury\serviciosAdicionalesPedidos  $serviciosAdicionalesPedidos
     * @return \Illuminate\Http\Response
     */
    public function show(serviciosAdicionalesPedidos $serviciosAdicionalesPedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\serviciosAdicionalesPedidos  $serviciosAdicionalesPedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(serviciosAdicionalesPedidos $serviciosAdicionalesPedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\serviciosAdicionalesPedidos  $serviciosAdicionalesPedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviciosAdicionalesPedidos $serviciosAdicionalesPedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\serviciosAdicionalesPedidos  $serviciosAdicionalesPedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviciosAdicionalesPedidos $serviciosAdicionalesPedidos)
    {
        //
    }
}

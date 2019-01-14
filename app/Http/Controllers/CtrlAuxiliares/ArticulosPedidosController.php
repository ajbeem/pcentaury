<?php
namespace ProximaCentaury\Http\Controllers\CtrlAuxiliares;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Auxiliares\articulosPedidos;
use Illuminate\Http\Request;

class ArticulosPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde ArticulosPedidosController";
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
     * @param  \ProximaCentaury\articulosPedidos  $articulosPedidos
     * @return \Illuminate\Http\Response
     */
    public function show(articulosPedidos $articulosPedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\articulosPedidos  $articulosPedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(articulosPedidos $articulosPedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\articulosPedidos  $articulosPedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articulosPedidos $articulosPedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\articulosPedidos  $articulosPedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulosPedidos $articulosPedidos)
    {
        //
    }
}

<?php
namespace ProximaCentaury\Http\Controllers\Auxiliares;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Auxiliares\serviciosPedidos;
use Illuminate\Http\Request;

class ServiciosPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde ServiciosPedidosController";
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
     * @param  \ProximaCentaury\serviciosPedidos  $serviciosPedidos
     * @return \Illuminate\Http\Response
     */
    public function show(serviciosPedidos $serviciosPedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\serviciosPedidos  $serviciosPedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(serviciosPedidos $serviciosPedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\serviciosPedidos  $serviciosPedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serviciosPedidos $serviciosPedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\serviciosPedidos  $serviciosPedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(serviciosPedidos $serviciosPedidos)
    {
        //
    }
}

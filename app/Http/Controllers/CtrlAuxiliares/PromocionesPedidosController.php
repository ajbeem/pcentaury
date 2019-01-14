<?php
namespace ProximaCentaury\Http\Controllers\CtrlAuxiliares;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Auxiliares\promocionesPedidos;
use Illuminate\Http\Request;

class PromocionesPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde PromocionesPedidosController";
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
     * @param  \ProximaCentaury\promocionesPedidos  $promocionesPedidos
     * @return \Illuminate\Http\Response
     */
    public function show(promocionesPedidos $promocionesPedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\promocionesPedidos  $promocionesPedidos
     * @return \Illuminate\Http\Response
     */
    public function edit(promocionesPedidos $promocionesPedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\promocionesPedidos  $promocionesPedidos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, promocionesPedidos $promocionesPedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\promocionesPedidos  $promocionesPedidos
     * @return \Illuminate\Http\Response
     */
    public function destroy(promocionesPedidos $promocionesPedidos)
    {
        //
    }
}

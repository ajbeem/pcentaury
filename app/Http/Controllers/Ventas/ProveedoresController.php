<?php
namespace ProximaCentaury\Http\Controllers\Auxiliares;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Ventas\proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde ProveedoresController";
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
     * @param  \ProximaCentaury\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show(proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedores $proveedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedores $proveedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedores $proveedores)
    {
        //
    }
}

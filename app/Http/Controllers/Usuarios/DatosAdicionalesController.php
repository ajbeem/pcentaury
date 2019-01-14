<?php
namespace ProximaCentaury\Http\Controllers\Usuarios;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Usuarios\datosAdicionales;
use Illuminate\Http\Request;

class DatosAdicionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde Index datosAdicionalesController";
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
     * @param  \ProximaCentaury\datosAdicionales  $datosAdicionales
     * @return \Illuminate\Http\Response
     */
    public function show(datosAdicionales $datosAdicionales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\datosAdicionales  $datosAdicionales
     * @return \Illuminate\Http\Response
     */
    public function edit(datosAdicionales $datosAdicionales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\datosAdicionales  $datosAdicionales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datosAdicionales $datosAdicionales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\datosAdicionales  $datosAdicionales
     * @return \Illuminate\Http\Response
     */
    public function destroy(datosAdicionales $datosAdicionales)
    {
        //
    }
}

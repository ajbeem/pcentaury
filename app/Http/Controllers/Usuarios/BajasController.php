<?php
namespace ProximaCentaury\Http\Controllers\Usuarios;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Usuarios\bajas;
use Illuminate\Http\Request;

class BajasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde Index bajasController";
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
     * @param  \ProximaCentaury\bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function show(bajas $bajas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function edit(bajas $bajas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bajas $bajas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\bajas  $bajas
     * @return \Illuminate\Http\Response
     */
    public function destroy(bajas $bajas)
    {
        //
    }
}

<?php
namespace ProximaCentaury\Http\Controllers\Usuarios;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Usuarios\avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hola desde Index AvatarController";
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
     * @param  \ProximaCentaury\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(avatar $avatar)
    {
        //
    }
}

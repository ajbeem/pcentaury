<?php
namespace ProximaCentaury\Http\Controllers\Usuarios;
use ProximaCentaury\Http\Controllers\Controller;
use ProximaCentaury\Modelos\Usuarios\newsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hola desde NewsLetterController";
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
     * @param  \ProximaCentaury\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function show(newsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProximaCentaury\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProximaCentaury\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProximaCentaury\newsLetter  $newsLetter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsLetter $newsLetter)
    {
        //
    }
}

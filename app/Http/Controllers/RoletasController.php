<?php

namespace App\Http\Controllers;

use App\Models\Roletas;
use Illuminate\Http\Request;

class RoletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roletas = Roletas::all();
        return $roletas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roletas = Roletas::create($request->all());
        return $roletas;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roletas  $roletas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Roletas::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roletas  $roletas
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roletas  $roletas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dadosantigos = Roletas::find($id);
        $dadosantigos->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roletas  $roletas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
       
    { 
        $dadosdestroy = Roletas::find($id);
        $dadosdestroy->delete();
        return ['msg' => 'O Registro foi removido'];
    }
}

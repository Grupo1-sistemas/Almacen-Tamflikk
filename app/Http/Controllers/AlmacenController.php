<?php

namespace App\Http\Controllers;

use App\Models\almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['almacens']=Almacen::paginate(10);

        return view('almacens.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('almacens.create');
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
        $datosAlmacen=request()->except('_token');

        Almacen::insert($datosAlmacen);

        return redirect('almacen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(almacen $almacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit($id_almacen)
    {
        //
        $almacen=Almacen::findOrFail($id_almacen);

        return view('almacens.edit',compact('almacen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_almacen)
    {
        //
        $datosAlmacen=request()->except(['_token','_method']);
        Almacen::where('id_almacen','=',$id_almacen)->update($datosAlmacen);

        return redirect('almacen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_almacen)
    {
        //
        Almacen::destroy($id_almacen);

        return redirect('almacen');
    }
}

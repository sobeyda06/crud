<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos=Contacto::all();
        return view('contacto.index', compact ('contactos'));

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $contactos=new Contacto;
        $contactos->id_medidor=$request->input('id_medidor');
        $contactos->nombre=$request->input('nombre');
        $contactos->cedula=$request->input('cedula');
        $contactos->direccion=$request->input('direccion');
        $contactos->save();
        return redirect()->back();
       
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_medidor)
    { 
        $contactos=Contacto::findOrfail($id_medidor);
        return view('contacto.modal-info', compact('contactos'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_medidor)
    {
        $contactos=Contacto::find($id_medidor);
        $contactos->id_medidor=$request->input('id_medidor');
        $contactos->Nombre=$request->input('nombre');
        $contactos->Cedula=$request->input('cedula');
        $contactos->direccion=$request->input('direccion');
        $contactos->update();
        return redirect()->back();
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_medidor)
    {
        $contactos=Contacto::find($id_medidor);
        $contactos->delete();
        return back()-with('succes', 'usuario eliminado');
        //
    }
}

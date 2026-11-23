<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Encuesta; /*Se agrega esta linea*/
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $encuestas = Encuesta::orderBy('anio','desc')->get();
        return view ('admin.encuestas.index', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'anio' => [
                'required',
                'integer',
                'min:2020',
                'max:2100',
                'unique:encuestas,anio',
            ],
        ],
        
        [
            'anio.required' =>'El año es obligatorio.',
            'anio.integer' =>'El año debe ser un número.',
            'anio.min' =>'El año no es válido.',
            'anio.max' =>'El año no es válido.',
            'anio.unique' =>'Ya existe una encuesta para ese año.',
        ]);

        Encuesta::create([
            'anio' => $request->anio,
            'estado'=> false
        ]);

        return redirect()
        ->route('admin.encuestas.index')
        ->with('succes', 'La encuesta fue creada correctamente.');
    }    

    /**
     * Muestra los datos de una encuesta seleccionada o especificada.
     */
    public function show(Encuesta $encuesta)
    {
        return view ('admin.encuestas.show', compact('encuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Encuesta $encuesta)
    {
        return view ('admin.encuestas.edit', compact('encuesta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Encuesta $encuesta)
    {
        
        $request->validate([
            'anio' => [
                'required',
                'integer',
                'min:2020',
                'max:2100',
                Rule::unique('encuestas', 'anio')->ignore($encuesta->id),
            ],
        ],
        
        [
            'anio.required' =>'El año es obligatorio.',
            'anio.integer' =>'El año debe ser un número.',
            'anio.min' =>'El año no es válido.',
            'anio.max' =>'El año no es válido.',
            'anio.unique' =>'Ya existe una encuesta para ese año.',
        ]);

        $encuesta->update([
            'anio' => $request->anio,
        ]);

        return redirect()
        ->route('admin.encuestas.index')
        ->with('succes', 'La encuesta fue actualizada correctamente.');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Encuesta $encuesta)
    {
        //
        $encuesta->delete();
        
        return redirect()
        ->route('admin.encuestas.index')
        ->with('succes', 'La encuesta fue eliminada correctamente.');
    }

    /**
     * Activar una encuesta.
     */

    public function activar(Encuesta $encuesta)
    {

        // Desactivar cualquier encuesta actualmente activa.
        Encuesta::where('estado', true)->update([
            'estado'=>false,
        ]);

        //ACtivar la encuesta seleccionada.
        $encuesta->update([
            'estado' => true,
        ]);

        return redirect()
        ->route('admin.encuestas.index')
        ->with('succes', "La encuesta ($encuesta->anio) esta ahora activa.");

    }

    // Desactivar una encuesta

    public function desactivar (Encuesta $encuesta)
    {
        $encuesta->update([
            'estado' =>false,
        ]);

        return redirect()
        ->route('admin.encuestas.index')
        ->with('success',"La encuesta {$encuesta->anio}fue cerrada.");
    }

}

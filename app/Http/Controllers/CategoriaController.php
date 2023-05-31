<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'descripcion' => 'required|unique:categoria',
                
            ]
        );

        $categoria = new Categoria();
        $categoria->decripcion = $request->input('descripcion');
        
        $noticia->save();
        //php artisan storage:link
        

        $request->session()->flash('status', 'Se guardó correctamente la noticia ' . $categoria->descripcion);
        return redirect()->route('categoria.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('backend.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        
        return view('backend.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $validatedData = $request->validate(
            [
                'descripcion' => 'required|unique:categorias,descripcion,' . $id,
                
            ]
        );


        $noticia->update($validatedData);
        $noticia->save();

        $request->session()->flash('status', 'Se guardó correctamente la noticia ' . $noticia->titulo);
        return redirect()->route('noticias.edit', $noticia->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('noticias.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Libreria;
use Illuminate\Http\Request;

/**
 * Class LibreriaController
 * @package App\Http\Controllers
 */
class LibreriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $librerias = Libreria::paginate();

        return view('libreria.index', compact('librerias'))
            ->with('i', (request()->input('page', 1) - 1) * $librerias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libreria = new Libreria();
        return view('libreria.create', compact('libreria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Libreria::$rules);

        $libreria = Libreria::create($request->all());

        return redirect()->route('librerias.index')
            ->with('success', 'Libreria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libreria = Libreria::find($id);

        return view('libreria.show', compact('libreria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $libreria = Libreria::find($id);

        return view('libreria.edit', compact('libreria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Libreria $libreria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libreria $libreria)
    {
        request()->validate(Libreria::$rules);

        $libreria->update($request->all());

        return redirect()->route('librerias.index')
            ->with('success', 'Libreria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $libreria = Libreria::find($id)->delete();

        return redirect()->route('librerias.index')
            ->with('success', 'Libreria deleted successfully');
    }
}

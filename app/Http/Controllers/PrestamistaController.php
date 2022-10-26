<?php

namespace App\Http\Controllers;

use App\Models\Prestamista;
use Illuminate\Http\Request;

/**
 * Class PrestamistaController
 * @package App\Http\Controllers
 */
class PrestamistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamistas = Prestamista::paginate();

        return view('prestamista.index', compact('prestamistas'))
            ->with('i', (request()->input('page', 1) - 1) * $prestamistas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestamista = new Prestamista();
        return view('prestamista.create', compact('prestamista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prestamista::$rules);

        $prestamista = Prestamista::create($request->all());

        return redirect()->route('prestamistas.index')
            ->with('success', 'Prestamista created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamista = Prestamista::find($id);

        return view('prestamista.show', compact('prestamista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestamista = Prestamista::find($id);

        return view('prestamista.edit', compact('prestamista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prestamista $prestamista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamista $prestamista)
    {
        request()->validate(Prestamista::$rules);

        $prestamista->update($request->all());

        return redirect()->route('prestamistas.index')
            ->with('success', 'Prestamista updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prestamista = Prestamista::find($id)->delete();

        return redirect()->route('prestamistas.index')
            ->with('success', 'Prestamista deleted successfully');
    }
}

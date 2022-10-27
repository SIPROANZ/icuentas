<?php

namespace App\Http\Controllers;

use App\Models\Ingresoscapitale;
use App\Models\Socio;
use Illuminate\Http\Request;

/**
 * Class IngresoscapitaleController
 * @package App\Http\Controllers
 */
class IngresoscapitaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresoscapitales = Ingresoscapitale::paginate();

        return view('ingresoscapitale.index', compact('ingresoscapitales'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresoscapitales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresoscapitale = new Ingresoscapitale();
        $socios = Socio::pluck('nombre','id');

        return view('ingresoscapitale.create', compact('ingresoscapitale', 'socios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ingresoscapitale::$rules);

        $ingresoscapitale = Ingresoscapitale::create($request->all());

        return redirect()->route('ingresoscapitales.index')
            ->with('success', 'Ingresoscapitale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresoscapitale = Ingresoscapitale::find($id);

        return view('ingresoscapitale.show', compact('ingresoscapitale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresoscapitale = Ingresoscapitale::find($id);

        $socios = Socio::pluck('nombre','id');

        return view('ingresoscapitale.edit', compact('ingresoscapitale', 'socios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ingresoscapitale $ingresoscapitale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingresoscapitale $ingresoscapitale)
    {
        request()->validate(Ingresoscapitale::$rules);

        $ingresoscapitale->update($request->all());

        return redirect()->route('ingresoscapitales.index')
            ->with('success', 'Ingresoscapitale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingresoscapitale = Ingresoscapitale::find($id)->delete();

        return redirect()->route('ingresoscapitales.index')
            ->with('success', 'Ingresoscapitale deleted successfully');
    }
}

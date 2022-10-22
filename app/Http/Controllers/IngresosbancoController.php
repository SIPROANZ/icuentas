<?php

namespace App\Http\Controllers;

use App\Models\Ingresosbanco;
use App\Models\Banco;
use Illuminate\Http\Request;

/**
 * Class IngresosbancoController
 * @package App\Http\Controllers
 */
class IngresosbancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresosbancos = Ingresosbanco::paginate();

        return view('ingresosbanco.index', compact('ingresosbancos'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresosbancos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresosbanco = new Ingresosbanco();

        $bancos = Banco::pluck('nombre', 'id'); 

        return view('ingresosbanco.create', compact('ingresosbanco', 'bancos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ingresosbanco::$rules);

        $ingresosbanco = Ingresosbanco::create($request->all());

        return redirect()->route('ingresosbancos.index')
            ->with('success', 'Ingresosbanco created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresosbanco = Ingresosbanco::find($id);

        return view('ingresosbanco.show', compact('ingresosbanco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresosbanco = Ingresosbanco::find($id);

        $bancos = Banco::pluck('nombre', 'id'); 


        return view('ingresosbanco.edit', compact('ingresosbanco', 'bancos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ingresosbanco $ingresosbanco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingresosbanco $ingresosbanco)
    {
        request()->validate(Ingresosbanco::$rules);

        $ingresosbanco->update($request->all());

        return redirect()->route('ingresosbancos.index')
            ->with('success', 'Ingresosbanco updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingresosbanco = Ingresosbanco::find($id)->delete();

        return redirect()->route('ingresosbancos.index')
            ->with('success', 'Ingresosbanco deleted successfully');
    }
}

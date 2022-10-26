<?php

namespace App\Http\Controllers;

use App\Models\Sociopago;
use App\Models\Socio;
use Illuminate\Http\Request;

/**
 * Class SociopagoController
 * @package App\Http\Controllers
 */
class SociopagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sociopagos = Sociopago::paginate();

        return view('sociopago.index', compact('sociopagos'))
            ->with('i', (request()->input('page', 1) - 1) * $sociopagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sociopago = new Sociopago();

        $socios = Socio::pluck('nombre','id');

        return view('sociopago.create', compact('sociopago', 'socios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sociopago::$rules);

        //Obtener el id de la cuenta al que voy hacerle un ingreso
        $ingreso_pago = Socio::find($request->socio_id);
        //Incremento el valor de la cuenta con el monto obtenido del formulario
        $ingreso_pago->decrement('utilidad', $request->monto);



        $sociopago = Sociopago::create($request->all());

        return redirect()->route('sociopagos.index')
            ->with('success', 'Sociopago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sociopago = Sociopago::find($id);

        return view('sociopago.show', compact('sociopago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sociopago = Sociopago::find($id);

        $socios = Socio::pluck('nombre','id');

        return view('sociopago.edit', compact('sociopago', 'socios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sociopago $sociopago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sociopago $sociopago)
    {
        request()->validate(Sociopago::$rules);

        $sociopago->update($request->all());

        return redirect()->route('sociopagos.index')
            ->with('success', 'Sociopago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sociopago = Sociopago::find($id)->delete();

        return redirect()->route('sociopagos.index')
            ->with('success', 'Sociopago deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Ingresoscuenta;
use App\Models\Cuenta;
use Illuminate\Http\Request;

/**
 * Class IngresoscuentaController
 * @package App\Http\Controllers
 */
class IngresoscuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresoscuentas = Ingresoscuenta::paginate();

        return view('ingresoscuenta.index', compact('ingresoscuentas'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresoscuentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingresoscuenta = new Ingresoscuenta();

        $cuentas = Cuenta::pluck('nombre','id');

        return view('ingresoscuenta.create', compact('ingresoscuenta' , 'cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ingresoscuenta::$rules);

        $ingresoscuenta = Ingresoscuenta::create($request->all());

        return redirect()->route('ingresoscuentas.index')
            ->with('success', 'Ingresoscuenta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingresoscuenta = Ingresoscuenta::find($id);

        return view('ingresoscuenta.show', compact('ingresoscuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingresoscuenta = Ingresoscuenta::find($id);

        $cuentas = Cuenta::pluck('nombre','id');

        return view('ingresoscuenta.edit', compact('ingresoscuenta', 'cuentas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ingresoscuenta $ingresoscuenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingresoscuenta $ingresoscuenta)
    {
        request()->validate(Ingresoscuenta::$rules);

        $ingresoscuenta->update($request->all());

        return redirect()->route('ingresoscuentas.index')
            ->with('success', 'Ingresoscuenta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingresoscuenta = Ingresoscuenta::find($id)->delete();

        return redirect()->route('ingresoscuentas.index')
            ->with('success', 'Ingresoscuenta deleted successfully');
    }
}

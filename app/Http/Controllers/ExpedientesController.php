<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Expedientes;
use App\Models\User;
use Illuminate\Http\RedirectResponse;


class ExpedientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->can('expedientes.readAll'))
         $expedientes = Expedientes::withTrashed()->get();
        elseif(auth()->user()->can('expedientes.read'))
            $expedientes = User::find(auth()->user()->id)->expedientes;

         return View::make('expedientes.index')
             ->with('expedientes', $expedientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View::make('expedientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        if (auth()->user()->can('expedientes.create')){
            $idUltimo= Expedientes::all()->last();
            $numExpediente= ($idUltimo->numero_expediente != null || !empty($idUltimo->numero_expediente) ) ? $idUltimo->numero_expediente + 1 : 00001;
            $expedientes = Expedientes::create([
                'numero_expediente' => $numExpediente,
                'asunto' => $request->asunto,
                'fecha_inicio' => now(),
                'id_estatus' => $request->estatus,
                'id_usuario_registra' => auth()->user()->id,
            ]);

            return redirect(route('expedientes.index', absolute: false));
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): RedirectResponse
    {
        if (auth()->user()->can('expedientes.restore')){
            $expediente=Expedientes::withTrashed()->find($id);

            $expediente->restore();

            return redirect(route('expedientes.index', absolute: false));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (auth()->user()->can('expedientes.update')){
            $expediente=Expedientes::find($id);

            return View::make('expedientes.edit')
             ->with('expediente', $expediente);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        if (auth()->user()->can('expedientes.update')){
            $expediente=Expedientes::where('idexpedientes', $id)->first();
            $expediente->update([
                'asunto' => $request->asunto,
                'id_estatus' => $request->estatus
            ]);

            return redirect(route('expedientes.index', absolute: false));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        if (auth()->user()->can('expedientes.delete')){
            $expediente = Expedientes::find($id);

            $expediente->delete();

            return redirect(route('expedientes.index', absolute: false));
        }
        
    }
}

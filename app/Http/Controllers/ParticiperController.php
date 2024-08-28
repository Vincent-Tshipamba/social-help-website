<?php

namespace App\Http\Controllers;

use App\Models\Participer;
use App\Http\Requests\StoreParticiperRequest;
use App\Http\Requests\UpdateParticiperRequest;

class ParticiperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(StoreParticiperRequest $request)
    {
        $participer = Participer::firstOrCreate([
            'datcontribu' => $request->input('datcontribu'),
            'motifcontr' => $request->input('motifcontr'),
            'heure' => $request->input('heure'),
            'montantcontr' => $request->input('montantcontr'),
            'modeparticipat' => $request->input('modeparticipat'),
            'observation' => $request->input('observation'),
            'numaid' => $request->input('numaid'),
            'iddonat' => $request->input('iddonat')
        ]);

        return redirect()->route('root')->with('success', 'Don effectué avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Participer $participer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participer $participer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParticiperRequest $request, Participer $participer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participer $participer)
    {
        //
    }
}

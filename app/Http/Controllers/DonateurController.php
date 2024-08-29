<?php

namespace App\Http\Controllers;

use App\Models\Donateur;
use App\Http\Requests\StoreDonateurRequest;
use App\Http\Requests\UpdateDonateurRequest;
use App\Models\AideSociale;

class DonateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donators = Donateur::latest()->get();
        return view('admin.donators.index', compact('donators'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($numaid)
    {
        $aide = AideSociale::find($numaid);
        return view('donators.create', compact('aide'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonateurRequest $request)
    {
        $donateur = Donateur::firstOrCreate([
            'nomsdonat' => $request->input('nomsdonat'),
            'adresse' => $request->input('adresse'),
            'telephone' => $request->input('telephone'),
            'profess' => $request->input('profess')
        ]);

        return $donateur->iddonat;
    }

    /**
     * Display the specified resource.
     */
    public function show(Donateur $donateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donateur $donateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonateurRequest $request, Donateur $donateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donateur $donateur)
    {
        //
    }
}

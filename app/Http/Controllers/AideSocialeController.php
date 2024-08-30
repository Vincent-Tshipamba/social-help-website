<?php

namespace App\Http\Controllers;

use App\Models\Donateur;
use App\Models\Participer;
use App\Models\AideSociale;
use App\Http\Requests\StoreAideSocialeRequest;
use App\Http\Requests\UpdateAideSocialeRequest;

class AideSocialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialhelps = AideSociale::latest()->get();

        return view('admin.social-help.index', compact('socialhelps'));
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
    public function store(StoreAideSocialeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $socialhelp = AideSociale::find($id);
        $donations = Participer::where('numaid', $id)->get();
        $donateurs = Donateur::whereHas('participers', function ($query) use ($id) {
            $query->where('numaid', $id);
        })->get();        
return view('admin.social-help.show', compact('socialhelp', 'donations', 'donateurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AideSociale $aideSociale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAideSocialeRequest $request, AideSociale $aideSociale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AideSociale $aideSociale)
    {
        //
    }
}

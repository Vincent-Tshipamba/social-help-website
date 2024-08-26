<?php

namespace App\Http\Controllers;

use App\Models\Nature;
use App\Http\Requests\StoreNatureRequest;
use App\Http\Requests\UpdateNatureRequest;

class NatureController extends Controller
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
    public function store(StoreNatureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nature $nature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nature $nature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNatureRequest $request, Nature $nature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nature $nature)
    {
        //
    }
}

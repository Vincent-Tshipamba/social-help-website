<?php

namespace App\Http\Controllers;

use App\Models\Pastor;
use App\Http\Requests\StorePastorRequest;
use App\Http\Requests\UpdatePastorRequest;

class PastorController extends Controller
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
    public function store(StorePastorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pastor $pastor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pastor $pastor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePastorRequest $request, Pastor $pastor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pastor $pastor)
    {
        //
    }
}

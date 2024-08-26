<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function assignRoles($role, $user)
    {
        $users = User::find($user);
        $users->assignRole($role);

        return back()->with('status', 'rôle activé avec succès');
    }

    public function desactiverRoles($role, $user)
    {
        $users = User::find($user);
        $users->removeRole($role);

        return back()->with('status', 'rôle desactivé avec succès');
    }
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

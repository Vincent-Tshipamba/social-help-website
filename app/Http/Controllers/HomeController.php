<?php

namespace App\Http\Controllers;

use App\Models\Pastor;
use App\Models\Donateur;
use App\Models\AideSociale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aide_sociales = DB::table('lancers')
            ->join('aide_sociales', 'lancers.numaid', '=', 'aide_sociales.numaid')
            ->selectRaw('lancers.*, aide_sociales.*')
            ->take(3)
            ->get();

        return view('index', compact('aide_sociales'));
    }

    public function admin()
    {
        $socialhelps = AideSociale::count();
        $donateurs = Donateur::count();
        $users = Pastor::count();
        $donations = DB::table('participers')
            ->selectRaw('SUM(participers.montantcontr) AS total_contributed')
            ->value('total_contributed');
        return view('admin.dashboard', compact('socialhelps', 'users', 'donateurs', 'donations'));
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

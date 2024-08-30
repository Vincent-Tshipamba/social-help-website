<?php

namespace App\Http\Controllers;

use App\Models\Donateur;
use App\Models\Participer;
use App\Models\AideSociale;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreAideSocialeRequest;
use App\Http\Requests\UpdateAideSocialeRequest;

class AideSocialeController extends Controller
{
    public function index()
    {
        $socialhelps = AideSociale::latest()->get();

        return view('admin.social-help.index', compact('socialhelps'));
    }

    public function create()
    {
        //
    }

    public function store(StoreAideSocialeRequest $request)
    {
        //
    }

    public function show($id)
    {
        $socialhelp = AideSociale::find($id);
        $donations = Participer::where('numaid', $id)->get();

        $donateurs = DB::table('participers')
            ->join('aide_sociales', 'participers.numaid', '=', 'aide_sociales.numaid')
            ->join('donateurs', 'participers.iddonat', '=', 'donateurs.iddonat')
            ->where('aide_sociales.numaid', $id)
            ->groupBy('donateurs.iddonat')
            ->selectRaw('donateurs.*, SUM(participers.montantcontr) AS total_contributed')
            ->get();

        return view('admin.social-help.show', compact('socialhelp', 'donations', 'donateurs'));
    }

    public function edit(AideSociale $aideSociale)
    {
        //
    }

    public function update(UpdateAideSocialeRequest $request, AideSociale $aideSociale)
    {
        //
    }

    public function destroy(AideSociale $aideSociale)
    {
        //
    }
}

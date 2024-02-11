<?php

namespace App\Http\Controllers;

use App\Models\chauffeurs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChauffeursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeurs = chauffeurs::latest()->paginate(3);
        return view('publication.index', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chauffeurs.create');
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
    public function show(chauffeurs $chauffeurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(chauffeurs $chauffeurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, chauffeurs $chauffeurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(chauffeurs $chauffeurs)
    {
        //
    }
}

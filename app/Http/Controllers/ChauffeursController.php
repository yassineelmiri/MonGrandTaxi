<?php

namespace App\Http\Controllers;

use App\Models\chauffeurs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ChauffeursRequest;


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
    public function store(ChauffeursRequest $request)
    {
        //validation 
        $formFields = $request->validated();
        //insert image
        // $formFields['image'] = $request->file('image')->store('profile', 'public');

        $this->uploadImage($request, $formFields);
        $formFields['profile_id'] = Auth::id();

        //insertion profile
        chauffeurs::create($formFields);

        //redirection
        return redirect()->route('profiles.index')->with('success', 'votre Compte est bien créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(chauffeurs $chauffeurs)
    {
        return view('chauffeurs.show', compact('chauffeurs'));
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
    private function uploadImage(ChauffeursRequest $request, array &$formFields)
    {
        //insert image
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('profile', 'public');
        }
    }
}

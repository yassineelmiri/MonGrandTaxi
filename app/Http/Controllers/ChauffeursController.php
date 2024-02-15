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
    public function index()
    {
        $chauffeurs = chauffeurs::latest()->paginate(3);
        return view('publication.index', compact('chauffeurs'));
    }

    public function create()
    {
        return view('chauffeurs.create');
    }
    public function store(ChauffeursRequest $request)
    {

        $formFields = $request->validated();
        $this->uploadImage($request, $formFields);
        $formFields['profile_id'] = Auth::id();
        chauffeurs::create($formFields);
        return redirect()->route('profiles.index')->with('success', 'votre Compte est bien créé.');
    }

    public function show(chauffeurs $chauffeurs)
    {
        return view('chauffeurs.show', compact('chauffeurs'));
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

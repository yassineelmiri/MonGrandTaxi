<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;

use App\Models\Admin;
use App\Models\chauffeurs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // ->except(['show']);
    // }
    public function index()
    {

        $profiles = Profile::paginate(9);
        return view('profile.index', compact('profiles'));
    }


    public function show(Profile $profile, chauffeurs $chauffeurs, Admin $admin)
    {
        $chauffeurs = chauffeurs::all();
        $admins = Admin::all();
        return view('profile.show', compact('profile', 'chauffeurs', 'admins'));
    }

    public function create()
    {
        return view('profile.create');
    }
    public function store(ProfileRequest $request)
    {
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        $this->uploadImage($request, $formFields);
        Profile::create($formFields);
        return redirect()->route('profiles.index')->with('success', 'votre Compte est bien créé.');
    }
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return to_route('profiles.index')->with('success', 'Le Profile a élé bien supprimer');
    }

    public function edit(Profile $profile)
    {
        $this->authorize('update',$profile);
        return view('profile.edit', compact('profile'));
    }
    public function update(ProfileRequest $request, Profile $profile)
    {
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        $this->uploadImage($request, $formFields);
        $profile->fill($formFields)->save();
        return to_route('profiles.show', $profile->id)->with('success', 'Le Profile a élé bien Modification');

    }

    private function uploadImage(ProfileRequest $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('profile', 'public');
        }
    }
}

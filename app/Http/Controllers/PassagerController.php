<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassagerRequest;
use App\Models\Passager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PassagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $passagers = Passager::latest()->paginate(3);
        return view('passager.index', compact('passagers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PassagerRequest $request)
    {   
        
        $formFields = $request->validated();

        //Hash
        $formFields['password'] = Hash::make($formFields['password']);
       

        $this->uploadImage($request ,$formFields);
        
        Passager::create($formFields);

        return to_route('Passager.index')->with('success', 'votre passager a été bien create .');
    }

    /**
     * Display the specified resource.
     */
    public function show(Passager $passager)
    {
        $passager->delete();
        return to_route('passager.index')->with('success', 'Le passager a élé bien supprimer');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Passager $passager)
    {
        return view('passager.edit', compact('passager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PassagerRequest $request,Passager $passager)
    {
        $formFields = $request->validated();
        //Hash
        $formFields['password'] = Hash::make($request->password);

        //insert image
        $this->uploadImage($request, $formFields);


        $passager->fill($formFields)->save();
        return to_route('passager.show', $passager->id)->with('success', 'Le passager a élé bien Modification');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Passager $passager)
    {
        $passager->delete();
        return to_route('Passager.index')->with('success', 'Le passager a élé bien supprimer');
    }
    private function uploadImage(PassagerRequest $request, array &$formFields)
    {
        //insert image
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('passagers', 'public');
        }
    }
}

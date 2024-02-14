<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\AdminRequest;

use App\Http\Controllers\Controller;
use App\Models\chauffeurs;
use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Dh = Admin::count();
        $count = 3 * $Dh;
        $count1 = chauffeurs::count();
        $count2 = Publication::count();
        $count3 = Profile::count();

        return view('admin.index',compact('count','count1','count2','count3'));
    }
    public function user()
    {
        $profiles = Profile::all();
        return view('admin.user', compact('profiles'));
    }

    public function chauffeur(){
        $chauffeurs = chauffeurs::all();
        return view('admin.chauffeur', compact('chauffeurs'));
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
    public function store(AdminRequest $request)
    {
        $formFields = $request->validated();
        $formFields['profile_id']= Auth::id();
        $formFields['chauffeur_id']= $request->chauffeur_id;
        Admin::create($formFields);
        return view('publication.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

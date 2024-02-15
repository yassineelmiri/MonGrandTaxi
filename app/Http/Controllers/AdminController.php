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
    public function passager(){
        $publications = Publication::all();
        return view('admin.passager', compact('publications'));
    }

   
    public function store(AdminRequest $request)
    {
        $formFields = $request->validated();
        $formFields['profile_id']= Auth::id();
        $formFields['chauffeur_id']= $request->chauffeur_id;
        $chauffeur = $request->chauffeur_id;
        Admin::create($formFields);
        return to_route('printeview', $chauffeur)->with('success', 'Le passager a élé bien supprimer');

    }
    public function print(chauffeurs $chauffeur){
        return view('Printeview',compact('chauffeur'));
    }


    public function printeview(chauffeurs $chauffeur){
        return view('Print',compact('chauffeur'));
    }

}

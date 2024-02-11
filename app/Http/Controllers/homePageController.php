<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\recettes;

class homePageController extends Controller
{
    //
    public function index()
    {
        $publications = Publication::latest()->paginate(3);
        // $recettes = recettes::all(); 
        return view('welcome', compact('publications'));
    }
    // public function recipes_for_search(Request $request) {
    //     $search = $request->search;
    //     $recettes = recettes::where('name', 'like', '%' . $search . '%')->get();
    //     return view('welcome', compact('recettes'));
    //  }

}

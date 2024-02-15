<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use App\Models\recettes;

class homePageController extends Controller
{  
    public function index()
    {
        $publications = Publication::latest()->paginate(3);
        return view('welcome', compact('publications'));
    }

}

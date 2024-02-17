<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::latest()->paginate(3);
        return view('publication.index', compact('publications'));
    }

    public function create()
    {
        return view('publication.create');
    }

    public function store(PublicationRequest $request)
    {
        $formFields = $request->validated();
        $formFields['profile_id'] = Auth::id();
        Publication::create($formFields);
        return to_route('publications.index')->with('success', 'votre recette a été bien create .');
    }
    private function uploadImage(PublicationRequest $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('publication', 'public');
        }
    }

    public function show(Publication $publication)
    {
        //
    }

    public function edit(Publication $publication)
    {
        Gate::authorize('update',$publication);
        return view('publication.edit', compact('publication'));
    }
    public function update(PublicationRequest $request, Publication $publication)
    {
        Gate::authorize('update',$publication);
        $formFields = $request->validated();
        $this->uploadImage($request, $formFields);
        $publication->fill($formFields)->save();
        return to_route('publications.index')->with('success', 'votre recette a été bien modifier .');

    }
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return to_route('publications.index')->with('success', 'votre recette a été bien supprimer .');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $publications = Publication::where('lieu1', 'LIKE', "%$search%")->paginate(3);

        return view('publication.index', compact('publications'));
    }

}

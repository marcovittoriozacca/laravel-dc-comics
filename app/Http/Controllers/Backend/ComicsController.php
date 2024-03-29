<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //prendiamo tutti i comics dal db
        $navLinks = config("partialsLink.navLinks");
        $footerLinks = config("partialsLink.footerLinks");
        $socials = config("partialsLink.socials");
        $comics = Comic::all();

        return view('comics.index', compact('comics', 'navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //accediamo alla pagine contenente il form
        $navLinks = config("partialsLink.navLinks");
        $footerLinks = config("partialsLink.footerLinks");
        $socials = config("partialsLink.socials");

        return view('comics.create', compact('navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'nullable|max:150',
            'price' => 'required|numeric|between:0,999.99',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:50',
        ]);

        //creiamo il nuovo fumetto
        $newComic = new Comic();
        $newComic->fill($validation);
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //mostriamo il singolo fumetto cliccato
        $navLinks = config("partialsLink.navLinks");
        $footerLinks = config("partialsLink.footerLinks");
        $socials = config("partialsLink.socials");

        return view('comics.show', compact('comic', 'navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        $navLinks = config("partialsLink.navLinks");
        $footerLinks = config("partialsLink.footerLinks");
        $socials = config("partialsLink.socials");

        return view('comics.edit', compact('comic', 'navLinks', 'footerLinks', 'socials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validation = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required',
            'thumb' => 'nullable|max:150',
            'price' => 'required|numeric|between:0,999.99',
            'series' => 'nullable|max:100',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:50',
        ]);
        $comic->update($validation);

        return redirect()->route('comics.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}

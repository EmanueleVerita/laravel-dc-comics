<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:128',
            'description' => 'required' ,
            'thumb' => 'nullable|max:2048' ,
            'price' => 'required|numeric|min:2|max:100' ,
            'series' => 'nullable|max:128' ,
            'sale_date' => 'nullable|date' ,
            'type' => 'required|max:128' 
        ] , [
            'title.required' => 'Il titolo è obbligatorio' ,
            'title.max' => 'Il titolo può avere al massimo 128 caratteri'
        ]);


        $formData = $request->all();

        $comic = new Comic();
        $comic -> title = $formData['title'];
        $comic -> description = $formData['description'];
        $comic -> thumb = $formData['thumb'];
        $comic -> price = $formData['price'];
        $comic -> series = $formData['series'];
        $comic -> sale_date = $formData['sale_date'];
        $comic -> type = $formData['type'];
        $comic -> artists = $formData['artists'];
        $comic -> writers = $formData['writers'];
        $comic -> save();

        return redirect()->route('comics.show' , ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.show' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\ComicRequest;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    private function validateData($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:255',
            'series' => 'required|max:255',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
            'price' => 'required|numeric|min:1',
            'sale_date' => 'required|date',
            'description' => 'nullable|max:4096'
        ], [
            'title.required' => 'Il titolo è obbligatorio!',
            'series.required' => 'Il nome è obbligatorio!',
        ])->validate();

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $data = $request->validated();


        $singlecomic = new Comic;
        $singlecomic->title = $data['title'];
        $singlecomic->type = $data['type'];
        $singlecomic->description = $data['description'];
        $singlecomic->price = $data['price'];
        $singlecomic->thumb = 'https://picsum.photos/199/199';
        $singlecomic->series = $data['series'];
        $singlecomic->sale_date = $data['sale_date'];
        $singlecomic->save();

        return redirect()->route('comics.show', $singlecomic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $data = $request->validated();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route('comics.index');
    }
}
